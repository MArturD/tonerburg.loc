<?php get_header();
/*
 Template Name: Главная
 */
?>

	<hr>

	<hr>
	<hr>
	<hr>
<?php
$brands = get_terms(array('taxonomy' => 'brand', 'hide_empty' => false));
//var_dump($brands);


//var_dump(get_field('logo', 'brand_2'));


foreach ($brands as $brand) {
	$link = get_term_link($brand->term_id);
	$srcImage = get_image('logo', 'brand_' . $brand->term_id);
	?>
	<a href="<?php echo $link ?>">
	<img src="<?php echo $srcImage; ?>" alt="<?php echo $brand->name?>" title="<?php echo $brand->name?>">
	</a>
	<?php


}


?>

	<hr>
<?php include get_template_directory() . "/moduls/banner.php"; ?><?php include get_template_directory() . "/moduls/advantages.php"; ?><?php include get_template_directory() . "/moduls/accept.php"; ?><?php include get_template_directory() . "/moduls/benefit.php"; ?><?php include get_template_directory() . "/moduls/purchase.php"; ?><?php include get_template_directory() . "/moduls/cartridge-brands.php"; ?><?php include get_template_directory() . "/moduls/application.php"; ?><?php include get_template_directory() . "/moduls/about.php"; ?><?php include get_template_directory() . "/moduls/rating.php"; ?><?php include get_template_directory() . "/moduls/articles.php"; ?><?php include get_template_directory() . "/moduls/feedback.php"; ?>


<?php get_footer(); ?>