<?php
/**
 * OrthoStep Theme Functions
 */

// Theme Setup
function ortostep_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ortostep'),
    ));
}
add_action('after_setup_theme', 'ortostep_setup');

// Enqueue styles and scripts
function ortostep_scripts() {
    wp_enqueue_style('ortostep-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('google-fonts-mulish', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap', array(), null);
    wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
    wp_enqueue_script('ortostep-main', get_template_directory_uri() . '/js/main.js', array('swiper-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ortostep_scripts');

// WooCommerce support
function ortostep_woocommerce_support() {
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 600,
        'single_image_width'    => 800,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 1,
            'default_columns' => 4,
            'min_columns'     => 1,
            'max_columns'     => 6,
        ),
    ));
}
add_action('after_setup_theme', 'ortostep_woocommerce_support');

// Remove default WooCommerce styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Disable WooCommerce sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Custom WooCommerce add to cart handling
function ortostep_custom_add_to_cart() {
    if (isset($_POST['ortostep_add_to_cart']) && isset($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);
        $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
        $variation_id = isset($_POST['variation_id']) ? intval($_POST['variation_id']) : 0;
        $variation = array();
        
        if ($variation_id) {
            $variation_obj = wc_get_product($variation_id);
            if ($variation_obj) {
                $variation = $variation_obj->get_variation_attributes();
            }
        }
        
        WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variation);
    }
}
add_action('wp_loaded', 'ortostep_custom_add_to_cart');

// Widget areas
function ortostep_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer-widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'ortostep_widgets_init');

// Set WooCommerce image sizes
function ortostep_wc_image_dimensions() {
    update_option('woocommerce_thumbnail_image_width', 600);
    update_option('woocommerce_single_image_width', 800);
}
add_action('after_switch_theme', 'ortostep_wc_image_dimensions');
