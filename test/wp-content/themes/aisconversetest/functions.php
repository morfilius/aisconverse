<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(array(
    'top' => 'Верхнее',
));

add_action('wp_enqueue_scripts', 'add_scripts');
if (!function_exists('add_scripts')) {
    function add_scripts() {
        if(is_admin()) return false;
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery-min', get_template_directory_uri().'/js/jquery.min.js','','',false);
        wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.js','jquery','',true);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','jquery','',true);
        wp_enqueue_script('slick', get_template_directory_uri().'/js/slick.js','jquery','',true);
        wp_enqueue_script('script', get_template_directory_uri().'/js/script.js','jquery','',true);
    }
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
    function add_styles() {
        if(is_admin()) return false;
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
        wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css' );
        wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css' );
        wp_enqueue_style( 'main', get_template_directory_uri().'/css/style.css' );
        wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css' );
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
    }
}

add_image_size('post-thumb-min', 196, 107, false);


register_sidebar(array(
    'name' => 'Поиск',
    'id' => "search",
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => "",
));

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

require_once( __DIR__.'/include/theme-options.php');
require_once( __DIR__.'/include/custom-types.php');
require_once( __DIR__.'/include/custom-functions.php');
require_once( __DIR__.'/include/widgets.php');
require_once( __DIR__.'/include/shortcodes.php');
require_once( __DIR__.'/include/hooks.php');