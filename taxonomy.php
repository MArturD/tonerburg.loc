<?php get_header();
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
echo "<script>term_id=" . $term_id ." </script>"
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


	<div class="brand-info">
		<div class="wrap">
			<p class="brand-info__title heading"><?php echo get_field('brand_title'); ?></p>
			<div class="brand-info-wrap">
				<div class="brand-info__img cartridge-cards-item"><img src="<?php echo get_image("logo"); ?>"></div>
				<div class="brand-info__description text-font"><?php echo get_field('brand_description'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="catalog margin-bottom">
		<div class="wrap">
			<div class="catalog-wrap">

				<div class="catalog__col-price">
					<div class="catalog-search">

						<p class="catalog-search__title button-font">Быстрый поиск</p>
						<p class="catalog-search-total text-font-two">Всего в базе:
							<span class="text-bold"><?php echo $query->found_posts; ?> картриджей</span>
						</p>
						<form action="<?php esc_url(home_url('/')); ?>" class="search-catalog">
							<input type="text" name="s" value="<?php get_search_query(); ?>" class="catalog-search__input" placeholder="Поиск">
							<div class="catalog-search__img">
								<img alt="" src="<?php bloginfo('template_url'); ?>/assets/images/icons/search.svg">
							</div>
							<div class="form-catalog__result"></div>
						</form>


					</div>

					<div class="catalog__price">
						<table class="catalog-table__header">
							<thead>
							<tr>
								<th class="catalog-table__column_one subtitle-font">Название</th>
								<th class="catalog-table__column_two subtitle-font">Цена</th>
							</tr>
							</thead>
						</table>
						<div class="catalog-table__wrap">


							<table class="catalog-table__one">
								<tbody>

								<?php
								// Цикл
								if ($query->have_posts()) {
									while ($query->have_posts()) {
										$query->the_post();
										?>
										<tr>
											<td class="catalog-table__line_one"><?php the_title() ?></td>
											<td class="catalog-table__line_two"><?php echo get_field('price'); ?> ₽</td>
										</tr>
										<?php
									}
								} else {
									// Постов не найдено
								}

								// Возвращаем оригинальные данные поста. Сбрасываем $post.
								wp_reset_postdata();
								?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="catalog__col-sibebar">
					<div class="catalog-contact">
						<p class="catalog-contact_title subtitle-font">Как с нами связаться</p>
						<div class="catalog-contact-wrap">

							<div class="contacts-icons">
								<div class="contacts-icons__item">
									<a href="<?php echo get_field("tg_link", "options") ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/tg.svg"></a>
								</div>
								<div class="contacts-icons__item">
									<a href="<?php echo get_field("whats_link", "options") ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/whats.svg"></a>
								</div>
							</div>
							<div class="catalog-contact_column-one">

								<div class="contacts-contacts-item">
									<div class="contacts-contacts-item__info">
										<div class="contacts-contacts-item__title button-font">
											<div class="contacts-contacts-item__img">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/mail-contact.svg">
											</div>
											Почта
										</div>
										<div class="contacts-contacts-item__description">
											<a href="mailto:<?php echo get_field("mail_link", "options") ?>" class="text-font"><?php echo get_field("mail_link", "options") ?></a>
										</div>
									</div>
								</div>
								<div class="contacts__number">
									<div class="contacts__img">
										<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/phone.svg">
									</div>
									<a href="tel:<?php echo get_field("number_link", "options") ?>" class="text-font"><?php echo get_field("number_link", "options") ?></a>
								</div>
								<div class="contacts__button">
									<a href="#" class="menu-font popmake-2319">ЗАКАЗАТЬ ЗВОНОК</a>
								</div>
							</div>

							<div class="catalog-contact_column-two">
								<div class="contacts-contacts-item">
									<div class="contacts-contacts-item__info">
										<div class="contacts-contacts-item__title button-font">
											<div class="contacts-contacts-item__img">
												<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/address.svg">
											</div>
											Адрес
										</div>
										<div class="contacts-contacts-item__description text-font">г.Санкт-Петербург Рижский пр.
											д.37Т
										</div>
									</div>
								</div>
								<div class="contacts-contacts-item ">
									<div class="contacts-contacts-item__info">
										<div class="contacts-contacts-item__description text-font">Пн-Пт С 10 До 18 Сб-Вс
											выходной
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>


			</div>
		</div>
	</div>


<?php include get_template_directory() . "/moduls/accept.php"; ?><?php include get_template_directory() . "/moduls/application.php"; ?><?php include get_template_directory() . "/moduls/articles.php"; ?>


<?php get_footer(); ?>