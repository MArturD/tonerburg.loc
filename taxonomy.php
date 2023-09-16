<?php get_header(); ?>
	<h1>Это наши бренду будут</h1>

	<img src="<?php echo get_image("logo"); ?>" alt="">

<?php

$queried_object = get_queried_object();
$taxonomy       = $queried_object->taxonomy;
$term_id        = $queried_object->term_id;

// задаем нужные нам критерии выборки данных из БД
$args = array(
	'post_type' => 'cartridge',
	'tax_query' => [
		'relation' => 'AND',
		[
			'taxonomy' => 'brand',
			'field'    => 'id',
			'terms'    => array($term_id),
		]
	]
);

$query = new WP_Query($args);

// Цикл
if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
		?>
		<li><?php the_title() ?><?php echo get_field('price');?></li>
		<?php
	}
} else {
	// Постов не найдено
}

// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();


?>

<?php get_footer(); ?>