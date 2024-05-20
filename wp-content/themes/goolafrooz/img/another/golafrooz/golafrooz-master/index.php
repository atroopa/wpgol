<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />

<?php 
	require_once 'components/login_component.html';
	require_once 'components/add_user_component.html';
	require_once 'components/registration_component.html';
	require_once 'components/alert_component.html';
	require_once 'components/file_folder_component.html';
	require_once 'components/upload_component.html';
	require_once 'components/delete_component.html';
	require_once 'components/create_new_folder_component.html';
?>
<style type="text/css">
	td.file_folder_item:hover {
		background-color: rgba(0,0,130, 0.2);
	}
	.bigger_icon {
		font-size: 70px;
	}

	.borderless td, .borderless th {
	    border: none;
	}

	.selected_option {
		background-color: rgba(0,0,130, 0.2);
	}

	.selected_file_folder {
		background-color: rgba(0,0,130, 0.2);
	}

	.modal-lg {
	    max-width: 80% !important;
	}

	.checkbox-1x {
	    transform: scale(1.5);
	    -webkit-transform: scale(1.5);
	}
	.checkbox-2x {
	    transform: scale(2);
	    -webkit-transform: scale(2);
	}
  
</style>


		<div  id="filemanager_area" class="">

			<title>{{ application_title }}</title>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
			  <div class="container">
			    <a class="navbar-brand" href="#"><i class="fa fa-shield"></i> &nbsp;{{ application_title }}</a>
				 <div class="form-inline" v-if="is_logged_in">
				 	<template v-if="can_add_users == false">
				 		Allowed Directories:&nbsp;&nbsp;
					 	<select class="btn-outline-light form-control" v-model="current_directory">
					 		<template v-for="(item,index) in allowed_directories">
					 			<option :value="item" :selected="index === 0">{{ item }}</option>
					 		</template>
					 	</select>
					 	&nbsp;&nbsp;
				 	</template>
				    <button class="btn btn-outline-light my-2 my-sm-0" @click="logoutUser()" type="submit">Logout</button>
				  </div>
			  </div>
			</nav>

			<alert-component :alert_title="alert_object.title" :alert_description="alert_object.description" :alert_type="alert_object.type"></alert-component>
			<login-component v-if="is_logged_in == false && is_first_time_installation == false" :api_url="api_url"></login-component>
			
			<registration-component v-if="is_first_time_installation" :api_url="api_url"></registration-component>
			<br/><br/>

			<div class="container-fluid" v-if="is_logged_in">
				<div class="row">
					<div class="col-sm-3">
						<table class="table borderless">
							<tr>
								<td @click="changeFileViewState()" style="cursor: pointer" :class="{selected_option:is_list_view}"><i class="fa fa-list-alt" ></i>&nbsp; List View</td>
								<td @click="changeFileViewState()" style="cursor: pointer" :class="{selected_option:(is_list_view == false)}"><i class="fa fa-square"></i>&nbsp; Grid View</td>
							</tr>
						</table>
						<template v-if="can_add_users">
						 <add-user-component :api_url="api_url" :files_and_folders_prop="files" :directory_separator="directory_separator"></add-user-component>
						</template>
					</div>
					<div class="col-sm-8" v-if="is_file_folder_data_ready">

						<file-folder-component :can_write_files="can_write_files"
						:can_delete_files="can_delete_files" 
						:files_and_folders_prop="files" :is_list_view="is_list_view" :current_directory="current_directory" :root_directory="root_directory" :directory_separator="directory_separator" :api_url="api_url"></file-folder-component>
						
						<upload-component  :api_url="api_url" :current_directory="current_directory"></upload-component>
					</div>
				</div>
			</div>
			
		</div>



<noscript>Newway requires JavaScript in order to function and display correctly in your browser. JavaScript is currently disabled by your browser.</noscript>

<script type="text/javascript">
	//load globals and enums
	const API_URL = "api/views.php";

	const ServerResponseCodes = {
		FirstTimeInstallation:10,
		LoggedIn:11,
		NotAuthenticated:12
	}

	const AccessLevels = {
			NoAccess: -1,
			ReadOnly: 0,
			ReadWrite: 1,
			ReadWriteDelete: 2,
			Admin: 3,
	}

	const ServerBinaryResponse =  {
		success:1,
		error:0
	}

	const AlertType = {
		Success:"alert-success",
		Failure:"alert-danger",
		Warning:"alert-warning"
	}

	const LoginError = {
		EmailIncorrect:13,
		PasswordIncorrect:14,
	}

</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/drag-select.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/util.js"></script>
<script type="text/javascript" src="js/vue.js"></script>
<script>
	const event_bus = new Vue({})
	Vue.filter('user_friendly_memory_format_filter', function(num) {

		  if (typeof num !== 'number' || isNaN(num)) {
			    throw new TypeError('Expected a number');
			  }

			  var exponent;
			  var unit;
			  var neg = num < 0;
			  var units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

			  if (neg) {
			    num = -num;
			  }

			  if (num < 1) {
			    return (neg ? '-' : '') + num + ' B';
			  }

			  exponent = Math.min(Math.floor(Math.log(num) / Math.log(1000)), units.length - 1);
			  num = (num / Math.pow(1000, exponent)).toFixed(2) * 1;
			  unit = units[exponent];

			  return (neg ? '-' : '') + num + ' ' + unit;
	});
</script>
<script type="text/javascript" src="js/vue-resource.js"></script>
<script type="text/javascript" src="components/login_component.js"></script>
<script type="text/javascript" src="components/add_user_component.js"></script>
<script type="text/javascript" src="components/registration_component.js"></script>
<script type="text/javascript" src="components/alert_component.js"></script>
<script type="text/javascript" src="components/file_folder_component.js"></script>
<script type="text/javascript" src="components/delete_component.js"></script>
<script type="text/javascript" src="components/upload_component.js"></script>
<script type="text/javascript" src="components/create_new_folder_component.js"></script>
<script>

	new Vue({
		el: "#filemanager_area",

		created() {
			this.getCurrentStateOnPageLoad()
			this.setUpRegistrationEventHander()
			this.setUpLoginEventHandler()
			event_bus.$on('directory-changed-by-user', (full_location)=> {
				this.current_directory = full_location
			})

			event_bus.$on('refresh-current-directory-data',()=> {
				this.getFilesAndFolders(this.current_directory)
			})
		},

		data: {
			is_list_view: false,
			is_logged_in: false,
			is_first_time_installation: false,
			can_read_files: false,
			allowed_directories:[],
			can_write_files: false,
			can_delete_files: false,
			can_add_users:false,
			api_url: API_URL,
			alert_object: {
				"title":"",
				"description":"",
				"type":AlertType.Success
			},
			application_title: "Newway File Manager",
			current_user:null,
			files:[],
			is_file_folder_data_ready: false,
			// the current directory the user is present
			current_directory:null,
			directory_separator:"<?php echo addslashes(DIRECTORY_SEPARATOR); ?>",
			root_directory:"<?php echo addslashes(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR); ?>",

		},

		watch: {

			is_logged_in: function(newValue, oldValue) {
				if (newValue) {
					// if logged in then get files
					this.getCurrentLoggedInUserAccessLevel()
				}
			},

			current_directory: function(newValue, oldValue) {
				if (newValue) {
					this.getFilesAndFolders(newValue)
				}
			}

		},

		methods: 
		{

				getCurrentLoggedInUserAccessLevel() {

					this.$http.post(this.api_url, {action:"get_current_logged_in_user"},
						{emulateJSON:true})
						.then(response=> {
							const server_response = response.body
							this.can_read_files = server_response.can_read_files
							Vue.set(this,"allowed_directories", server_response.allowed_directories)
							this.can_write_files = server_response.can_write_files
							this.can_delete_files = server_response.can_delete_files
							this.can_add_users = server_response.can_add_users
							if (server_response.allowed_directories.length > 0) {
								Vue.set(this, "current_directory", server_response.allowed_directories[0])
								this.is_file_folder_data_ready = true
							}

						})

				},
			


				setUpLoginEventHandler() {
					event_bus.$on('login', (server_response)=> {
						server_response = parseInt(server_response)
						switch (server_response) {
							case LoginError.EmailIncorrect:
								// registration success
								this.is_first_time_installation = false
								this.alert_object.title = "Failure"
								this.alert_object.description = "Entered email didnt match any registered users"
								this.alert_object.type = AlertType.Failure
								break;
							case LoginError.PasswordIncorrect:
								this.alert_object.title = "Failure"
								this.alert_object.description = "Entered password is wrong, recheck your password"
								this.alert_object.type = AlertType.Failure
								break;
							case ServerResponseCodes.LoggedIn:
								this.is_logged_in = true
								break;
							default:
								// statements_def
								break;
						}
					})
				},


				setUpRegistrationEventHander() {
					event_bus.$on('registration', (server_response)=> {
						server_response = parseInt(server_response)
						switch (server_response) {
							case ServerBinaryResponse.success:
								// registration success
								this.is_first_time_installation = false
								this.alert_object.title = "Success"
								this.alert_object.description = " You have been successfully registered, please login"
								this.alert_object.type = AlertType.Success
								break;
							case ServerBinaryResponse.error:
								this.alert_object.title = "Registration Failure"
								this.alert_object.description = "Please Check Your File Permissions"
								this.alert_object.type = AlertType.Failure
								break;
							default:
								// statements_def
								break;
						}
					})
				},

				getCurrentStateOnPageLoad() {

					this.$http.post(API_URL, {"action":"get_current_status"}, {emulateJSON:true})
						.then(response=> {
							const server_response_code = response.body.return_code;
							switch (server_response_code) {
								case ServerResponseCodes.FirstTimeInstallation:
									this.is_first_time_installation = true
									break;
								case ServerResponseCodes.LoggedIn:
									console.log('logged in ')
									this.is_logged_in = true
									break;
								case ServerResponseCodes.NotAuthenticated:
									this.is_logged_in = false
									break;
								default:
									break;					
							}
						})
				},


				getFilesAndFolders(directory="") {

					const file_object = {
						"action":"get_files"
					}
					if (directory != "") {
						file_object["directory"] = directory;
					}
					this.$http.post(API_URL, file_object, {emulateJSON:true}).then(response=> {
						var server_response = response.body
						if (Array.isArray(server_response)) {
							this.alert_object.title=""
							server_response = server_response.sort(function(a, b) {
							   return a.name.localeCompare(b.name);
							});
							Vue.set(this, "files", server_response)
						}
						else {
							// request not returned files, doesnot have permission to 
							// view the directory
							this.alert_object.title = "Access Restricted"
							this.alert_object.description = "We cant show you the files in this folder, you can access only the folders in allowed folders list"
							this.alert_object.type = AlertType.Failure
							Vue.set(this, "files", [])
						}
						this.is_file_folder_data_ready = true
						event_bus.$emit('files-and-folders-prop_data-changed', this.files)
					}, response=> {
						Vue.set(this, "files", [])
					})

				},


				changeFileViewState() {
					this.is_list_view = !this.is_list_view;
					console.log(this.is_list_view)
				},

				logoutUser() {
					const logout_object = {
						action: "logout_user",
					}
					this.$http.post(this.api_url, logout_object, {emulateJSON:true}).
					then(response=> {
						this.getCurrentStateOnPageLoad()
					})
				}
	

		}

	})

</script>