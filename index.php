<?php get_header();
/*
 Template Name: Главная
 */
?>

<?php echo do_shortcode('[contact-form-7 id="593f7fb" title="Заказать звонок" html_class="feedback-form"]')?>

<?php //echo do_shortcode('[contact-form-7 id="593f7fb" title="Заказать звонок" html_class="feedback-form"]')?>

<?php include get_template_directory() . "/moduls/banner.php"; ?>
<?php include get_template_directory() . "/moduls/advantages.php"; ?>
<?php include get_template_directory() . "/moduls/accept.php"; ?>
<?php include get_template_directory() . "/moduls/benefit.php"; ?>
<?php include get_template_directory() . "/moduls/purchase.php"; ?>
<?php include get_template_directory() . "/moduls/cartridge-brands.php"; ?>
<?php include get_template_directory() . "/moduls/application.php"; ?>
<?php include get_template_directory() . "/moduls/about.php"; ?>
<?php include get_template_directory() . "/moduls/rating.php"; ?>
<?php include get_template_directory() . "/moduls/articles.php"; ?>
<?php include get_template_directory() . "/moduls/feedback.php"; ?>


<?php get_footer(); ?>