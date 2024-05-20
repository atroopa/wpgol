<?php 

require __DIR__."/../../api/all_classes.php";

class RegistrationTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    private $db_storage_file_name = "test_newway_users.json";
    
    protected function _before()
    {   
        $this->user_data_manager = JsonUserDataManager::getInstance($this->db_storage_file_name);
    }

    // the file is empty, so the insert user will accept the user and insert it.
    public function testWhenNoUserPresentAbleToRegisterAsAdminUser() {

        $user_to_be_registered = new User("foo@gmail.com", "foo", AccessLevel::Admin);
        $this->user_data_manager->insertUser($user_to_be_registered);
        // since user is registered we need to get it back
        $user_instance = $this->user_data_manager->getUser("foo@gmail.com", "foo");
        $this->assertNotNull($user_instance);
        $this->assertEquals($user_instance->email, $user_to_be_registered->email);
    }

    // the file is empty, so the insert user will accept the user and insert it.
    public function testWhenAdminUserPresentTryingToRegisterAsAdminUser() {
        $user_to_be_registered = new User("foo@gmail.com", "foo", AccessLevel::Admin);
        $this->user_data_manager->insertUser($user_to_be_registered);
        // the user is registered, we try to re register it and 
        // observe the result, it should return false
        $result = $this->user_data_manager->insertUser($user_to_be_registered);
        $this->assertFalse($result);
    }

    // here we are trying to insert a non admin user, so it will fail
    // in order to do overcome, we set the session user.
    public function testWhetherTheNonAdminUserCanBeAddedWithAllowedDirectories() {
        mkdir(ABSPATH."delete_test_dir");
        SessionUser::$current_user_instance = new User("aa@gmail.com", "aa", AccessLevel::Admin);

        $user_to_be_registered = new User("foo@gmail.com", "foo", AccessLevel::ReadWriteDelete, null, [ABSPATH."delete_test_dir"]);
        $this->user_data_manager->insertUser($user_to_be_registered);
        rmdir(ABSPATH."delete_test_dir");
        $user_instance = $this->user_data_manager->getUser("foo@gmail.com", "foo");
        $this->assertEquals($user_instance->getAllowedDirectories(), [ABSPATH."delete_test_dir"]);
    }

    public function testWhenInvalidDirectoryPresentDontSaveTheUser() {
        SessionUser::$current_user_instance = new User("aa@gmail.com", "aa", AccessLevel::Admin);
        $user_to_be_registered = new User("foo@gmail.com", "foo", AccessLevel::ReadWriteDelete, null, [ABSPATH."delete_test_dir"]);
        $insert_operation = $this->user_data_manager->insertUser($user_to_be_registered);
        $this->assertFalse($insert_operation);
        // if the directory is not valid, dont allow it to save,
        // in this test delete_test_dir didnt exist, so it should not be saved
    }

    // admin users should not have restricted paths, so allowed paths 
    // should be only be server root.
    public function testWhenGivenAdminShouldNotHaveRestrictedPath() {
        $user_to_be_registered = new User("foo@gmail.com", "foo", AccessLevel::Admin, null, [ABSPATH]);
        $this->user_data_manager->insertUser($user_to_be_registered);
        // since user is registered we need to get it back
        $user_instance = $this->user_data_manager->getUser("foo@gmail.com", "foo");
        // even if a directory is given to the admin on registration, it should
        // always reset to server root upon saving and also even if the authorisation
        // got changed, then it should changed to server root.
        $this->assertEquals($user_instance->getAllowedDirectories(), [SERVER_ROOT]);
        // saved directory for admin also be the server root.
        $this->assertEquals($user_instance->allowed_directories, [SERVER_ROOT]);
    }

    public function testWhenNonAdminUserTriesToDeleteAdminUserMustReturnFalse() {
        $user_to_be_registered = new User("foo@gmail.com", "foo", AccessLevel::Admin);
        $this->user_data_manager->insertUser($user_to_be_registered);
        // now we inserted the admin user, lets login as user with read access
        SessionUser::$current_user_instance = new User("fo@gmail.com", "fooo", AccessLevel::ReadOnly);
        $delete_operation_status = $this->user_data_manager->deleteUser($user_to_be_registered);
        $this->assertFalse($delete_operation_status);
    }

    public function testWhenAdminUserTriesToDeleteNonAdminUserMustReturnTrue() {
        SessionUser::$current_user_instance = new User("foo@gmail.com", "foo", AccessLevel::Admin);
        $user_to_be_deleted = new User("fo@gmail.com", "fooo", AccessLevel::ReadOnly);
        $this->user_data_manager->insertUser($user_to_be_deleted);
        // lets try to delete this non admin user
        $delete_operation_status = $this->user_data_manager->deleteUser($user_to_be_deleted);
        $this->assertTrue($delete_operation_status);
        // and also when try to getUser it should be null and not present in the json 
        // file
        $this->assertNull($this->user_data_manager->getUser("fo@gmail.com", "fooo"));
    }

    public function testWhenAdminUserTriesToDeleteHimselfShouldFail() {
        
        $user_to_be_deleted = new User("fo@gmail.com", "fooo", AccessLevel::Admin);
        $this->user_data_manager->insertUser($user_to_be_deleted);
        SessionUser::$current_user_instance = $user_to_be_deleted;
        // lets try to delete this admin user
        $delete_operation_status = $this->user_data_manager->deleteUser($user_to_be_deleted);
        $this->assertFalse($delete_operation_status);
        // and also when try to getUser it should be null and not present in the json 
        // file
        $this->assertNotNull($this->user_data_manager->getUser("fo@gmail.com", "fooo"));
    }

    protected function _after()
    {
        if (file_exists($this->user_data_manager->full_file_path)) {
            // clean up flat file db 
            unlink($this->user_data_manager->full_file_path);
        }
    }

}