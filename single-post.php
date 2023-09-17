<?php get_header();
/*
 Template Name: Статья
 */
?>

<div class="pages">
	<div class="wrap">
		<div class="pages-name">
			<a href="#">Главная</a>
			<span>|</span>
			<a href="#">Прайс</a>
		</div>
	</div>
</div>

<div class="article-block margin-bottom">
	<div class="wrap">
		<div class="article-block-wrap">
			<h1 class="article-block__title heading"><?php the_title(); ?></h1>
			<div class="article-block__img"><img src="<?php the_post_thumbnail_url(); ?>"></div>
			<div class="article-block-info">
				<?php the_content(); ?>
            </div>
		</div>
	</div>
</div>

<?php include get_template_directory() . "/moduls/cartridge-brands.php"; ?>
<?php include get_template_directory() . "/moduls/feedback.php"; ?>
<?php get_footer(); ?>

