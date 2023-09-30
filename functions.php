<?php

add_filter( 'wpcf7_load_js', '__return_false' );
add_theme_support( 'post-thumbnails' );
add_action( 'wp_print_styles', 'add_styles' ); // приклеем ф-ю на добавление стилей в хедер
if ( ! function_exists( 'add_styles' ) ) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_styles() { // добавление стилей
		if ( is_admin() ) {
			return false;
		} // если мы в админке - ничего не делаем
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), date( 'U' ) );
		wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
		wp_enqueue_script( 'ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array(), '20151215', true );
		wp_localize_script( 'ajax-search', 'searchForm', array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'search-none' ),
		) );
	}
	//	wp_enqueue_script('ajax.php', get_template_directory_uri() . '/ajax.php', array(), '20151215', true);

}
//require get_template_directory() . '/ajax.php';

add_theme_support( 'custom-logo', [
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
] );
add_action( 'after_setup_theme', 'add_menu' );
function add_menu() {
	register_nav_menu( 'top', 'Главное меню сайта' );
	register_nav_menu( 'bottom-navigation', 'Нижнее меню сайта - Навигация' );
	register_nav_menu( 'bottom-brands', 'Нижнее меню сайта - Бренды' );
	register_nav_menu( 'bottom-politics', 'Нижнее меню сайта- Политика' );
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {

	// WP 5.1 +
	if ( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ) {
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	} else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, - 4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if ( $dosvg ) {

		// разрешим
		if ( current_user_can( 'manage_options' ) ) {

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		} // запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}


/**
 * Получить src картинки из произвольного поля
 *
 * @param $name_field
 * @param $element_id
 * @param $default_image_in_theme
 *
 * @return void
 */
function get_image( $name_field, $element_id = false, $default_image_in_theme = "/assets/images/others/location-img.png" ) {
	$image = get_field( $name_field, $element_id );
	if ( $image ) {
		$logo = wp_get_attachment_image_url( $image, 'brand-logo' );
	} else {
		$logo = get_bloginfo( 'template_url' ) . $default_image_in_theme;
	}

	return $logo;
}

add_image_size( 'brand-logo', 190, 179 );


add_action( 'wp_ajax_search-ajax', 'ii_esp_search_ajax_action_callback' );
add_action( 'wp_ajax_nopriv_search-ajax', 'ii_esp_search_ajax_action_callback' );

function ii_esp_search_ajax_action_callback() {
	check_ajax_referer( "search-none", "nonce" );

	$arg             = [
		'posts_per_page' => - 1,
		'post_type'      => 'cartridge',
		'post_status'    => 'publish',
		's'              => sanitize_post( $_POST['s'] )
	];
	$url_page_search = add_query_arg( 's', urlencode( sanitize_post( $_POST['s'] ) ), home_url() );

	$query_ajax       = new WP_Query( $arg );
	$json_data['out'] = ob_start();
	if ( $query_ajax->have_posts() ) {
		?>
        <div class="ii-search-result__items">

			<?php
			while ( $query_ajax->have_posts() ) {
				$query_ajax->the_post();

				?>

				<?php
				$cur_terms = get_the_terms( get_the_ID(), 'brand' );
				if ( is_array( $cur_terms ) ) {

					echo '<a href="' . get_term_link( $cur_terms[0]->term_id, $cur_terms[0]->taxonomy ) . '" class="search-item"><p>' . get_the_title() . '</p> <p>' . get_field( 'price' ) . ' ₽</p> </a>';

				}
				?>

				<?php
			} ?>

        </div>

		<?php
	} else { ?>
        <div class="ii-search-result__no-results">
            <p>По запросу ничего не найдено</p>
        </div>
	<?php }
	$json_data['out'] .= ob_get_clean();
	$json_data['out'] = substr( $json_data['out'], 1 );

	wp_send_json( $json_data );

	wp_die();
}

add_action( 'wp_ajax_search-catalog-ajax', 'ii_esp_search_catalog_ajax_action_callback' );
add_action( 'wp_ajax_nopriv_search-catalog-ajax', 'ii_esp_search_catalog_ajax_action_callback' );

function ii_esp_search_catalog_ajax_action_callback() {
	check_ajax_referer( "search-none", "nonce" );
	$term_id = $_POST['term_id'];
	$arg             = [
		'posts_per_page' => - 1,
		'post_type'      => 'cartridge',
		'post_status'    => 'publish',
		's'              => sanitize_post( $_POST['s'] ),
		'tax_query' => [
			'relation' => 'AND',
			[
				'taxonomy' => 'brand',
				'field'    => 'id',
				'terms'    => array($term_id),
			]
		]
	];
	$url_page_search = add_query_arg( 's', urlencode( sanitize_post( $_POST['s'] ) ), home_url() );

	$query_ajax       = new WP_Query( $arg );
	$json_data['out'] = ob_start();
	if ( $query_ajax->have_posts() ) {
		?>
        <div class="ii-search-catalog-result__items">

			<?php
			while ( $query_ajax->have_posts() ) {
				$query_ajax->the_post();

				?>

				<?php
				$cur_terms = get_the_terms( get_the_ID(), 'brand' );
				if ( is_array( $cur_terms ) ) {

					echo '<tr class="tr">
                                    <td class="catalog-table__line_one">'. get_the_title(). '</td>
                                    <td class="catalog-table__line_two">' . get_field( 'price' ). ' ₽</td>
                                </tr>';
				}
				?>

				<?php
			} ?>

        </div>

		<?php
	} else {

		echo '<tr class="tr">
				<td colspan="2" class="catalog-table__line_one">По запросу ни чего не найдено</td>
			</tr>';
	}
	$json_data['out'] .= ob_get_clean();
	$json_data['out'] = substr( $json_data['out'], 1 );

	wp_send_json( $json_data );

	wp_die();
}