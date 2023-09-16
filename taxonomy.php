<?php get_header(); ?>
<h1>Это наши бренду будут</h1>

<?php var_dump(get_field("logo"));
$image = get_field("logo");
if( $image ) {
	$logo = wp_get_attachment_image_url( $image, 'full' );
} else{
	$logo = get_bloginfo('template_url') . "/assets/images/others/location-img.png";
}

?>

	<img src="<?php echo $logo;?>" alt="">

<?php get_footer(); ?>