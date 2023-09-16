<?php

add_filter( 'wpcf7_load_js', '__return_false' );
add_theme_support( 'post-thumbnails' );
add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles() { // добавление стилей
        if (is_admin()) return false; // если мы в админке - ничего не делаем
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
        wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
    }
}
add_theme_support( 'custom-logo', [
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
] );
add_action('after_setup_theme', 'add_menu');
function add_menu(){
    register_nav_menu('top', 'Главное меню сайта');
    register_nav_menu('bottom', 'Нижнее меню сайта');
}
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    // WP 5.1 +
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
        $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if( $dosvg ){

        // разрешим
        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }

    }

    return $data;
}