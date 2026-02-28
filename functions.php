<?php
/**
 * OrthoStep Theme Functions - pixel-perfect copy support
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
    // Main stylesheet with ALL original CSS
    wp_enqueue_style('ortostep-style', get_stylesheet_uri(), array(), '2.0.0');
    
    // Google Fonts - Mulish (from original)
    wp_enqueue_style('google-fonts-mulish', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap', array(), null);
    
    // Material Symbols (from original)
    wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);
    
    // Swiper CSS (from original)
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');
    
    // jQuery (needed for original JS)
    wp_enqueue_script('jquery');
    
    // Swiper JS (from original)
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
    
    // Masonry (from original)
    wp_enqueue_script('masonry-custom', 'https://images.vigo-shop.com/general/masonry_script/masonry.js', array(), null, true);
    wp_enqueue_script('masonry-pkgd', 'https://images.vigo-shop.com/general/masonry_script/masonry.pkgd.js', array(), null, true);
    
    // Main JS with ALL original scripts + WooCommerce integration
    wp_enqueue_script('ortostep-main', get_template_directory_uri() . '/js/main.js', array('jquery', 'swiper-js'), '2.0.0', true);
    
    // Pass WooCommerce data to JS
    if (function_exists('is_product') && is_product()) {
        global $product;
        if ($product) {
            wp_localize_script('ortostep-main', 'wcData', array(
                'ajaxUrl' => admin_url('admin-ajax.php'),
                'cartUrl' => wc_get_cart_url(),
                'checkoutUrl' => wc_get_checkout_url(),
                'productId' => $product->get_id(),
                'nonce' => wp_create_nonce('wc-add-to-cart-nonce'),
            ));
        }
    }
}
add_action('wp_enqueue_scripts', 'ortostep_scripts');

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

// AJAX add to cart handler
function ortostep_ajax_add_to_cart() {
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
    
    $result = WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variation);
    
    if ($result) {
        wp_send_json_success(array(
            'cart_url' => wc_get_cart_url(),
            'checkout_url' => wc_get_checkout_url(),
            'cart_count' => WC()->cart->get_cart_contents_count(),
        ));
    } else {
        wp_send_json_error('Could not add to cart');
    }
}
add_action('wp_ajax_ortostep_add_to_cart', 'ortostep_ajax_add_to_cart');
add_action('wp_ajax_nopriv_ortostep_add_to_cart', 'ortostep_ajax_add_to_cart');

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
