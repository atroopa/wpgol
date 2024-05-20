<?php
/*
Template Name: Error Page
*/
get_header(); ?>

<div class="error-page">
    <h1>خطا</h1>
    <?php if (isset($_GET['message'])): ?>
        <p><?php echo htmlspecialchars($_GET['message']); ?></p>
    <?php else: ?>
        <p>متاسفانه مشکلی در پردازش درخواست شما رخ داده است. لطفا دوباره تلاش کنید یا با پشتیبانی تماس بگیرید.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
