<?php get_header();
/*
 Template Name: Главная
 */
?>

<?php //echo do_shortcode('[contact-form-7 id="593f7fb" title="Заказать звонок" html_class="feedback-form"]')?>

<?php //echo do_shortcode('[contact-form-7 id="eeb5f65" title="text2"]')?>

<?php include get_template_directory() . "/moduls/banner.php"; ?>


	<div class="accept-mobile margin-bottom" id="accept">
		<div class="wrap">
			<div class="accept-wrap">
				<p class="accept-wrap-title heading"><?php echo get_field("accept_title", "options") ?></p>
				<div class="acceptance-conditions">
					<div class="accept-approval">
						<div class="accept-approval__title subtitle-font"><?php echo get_field("accept_subtitle_one", "options") ?></div>

						<?php if( have_rows("accept_approval", "options") ): ?>


							<?php while( have_rows('accept_approval', 'options') ): the_row();

								// переменные
								$image = get_sub_field('approval_img');
								$description = get_sub_field('accept_approval_description');

								?>
								<div class="accept-approval__items">
									<div class="accept-approval__img">
										<img src="<?php echo $image; ?>">
									</div>
									<p class="accept-approval__item text-font"><?php echo $description; ?></p>
								</div>


							<?php endwhile; ?>

						<?php endif; ?>

					</div>
					<div class="accept-rejection">
						<div class="accept-rejection__title subtitle-font"><?php echo get_field("accept_subtitle_two", "options") ?></div>

						<?php if( have_rows("accept_rejection", "options") ): ?>


							<?php while( have_rows('accept_rejection', 'options') ): the_row();

								// переменные
								$image = get_sub_field('rejection_img');
								$description = get_sub_field('accept_rejection_description');

								?>
								<div class="accept-rejection__items">
									<div class="accept-rejection__img">
										<img src="<?php echo $image; ?>">
									</div>
									<p class="accept-rejection__item text-font"><?php echo $description; ?></p>
								</div>


							<?php endwhile; ?>

						<?php endif; ?>


					</div>
				</div>
				<div class="accept-more"><a href="<?php echo get_field("accept_more_link", "options")["url"] ?>" class="text-font"><?php echo get_field("accept_more_link", "options")["title"] ?></a></div>
			</div>
		</div>
	</div>
	<div class="advantages advantages-mobile margin-bottom">
		<div class="wrap">
			<div class="advantages-wrap">
				<p class="advantages-wrap__title heading"><?php echo get_field("advantages_title", "options") ?></p>
				<div class="advantages-cards">

					<?php if( have_rows("advantages", "options") ): ?>


						<?php while( have_rows('advantages', 'options') ): the_row();

							// переменные
							$image = get_sub_field('advantages_img');
							$subtitle = get_sub_field('advantages_subtitle');
							$description = get_sub_field('advantages_description');

							?>


							<div class="advantages-cards__item">
								<div class="advantages-cards__img">
									<img src="<?php echo $image; ?>">
								</div>
								<div class="advantages-cards__info">
									<p class="advantages-cards__title subtitle-font">
										<?php echo $subtitle; ?>
									</p>
									<p class="advantages-cards__description text-font"><?php echo $description; ?></p>
								</div>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

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