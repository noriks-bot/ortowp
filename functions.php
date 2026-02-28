<?php
function ortostep_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
}
add_action('after_setup_theme', 'ortostep_setup');

function ortostep_scripts() {
    // Only enqueue our tiny WC integration script - all original CSS/JS is inline
    wp_enqueue_script('ortostep-wc', get_template_directory_uri() . '/js/main.js', array(), '2.0.0', true);
}
add_action('wp_enqueue_scripts', 'ortostep_scripts');

// Remove ALL default WooCommerce styles - original has its own
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Remove WooCommerce sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// AJAX add to cart
function ortostep_ajax_add_to_cart() {
    $product_id = intval($_POST['product_id']);
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    $variation_id = isset($_POST['variation_id']) ? intval($_POST['variation_id']) : 0;
    $variation = array();
    if ($variation_id) {
        $v = wc_get_product($variation_id);
        if ($v) $variation = $v->get_variation_attributes();
    }
    $result = WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variation);
    if ($result) {
        wp_send_json_success(array('cart_url' => wc_get_cart_url()));
    } else {
        wp_send_json_error('Failed');
    }
}
add_action('wp_ajax_ortostep_add_to_cart', 'ortostep_ajax_add_to_cart');
add_action('wp_ajax_nopriv_ortostep_add_to_cart', 'ortostep_ajax_add_to_cart');

// Redirect to cart after add-to-cart
add_filter('woocommerce_add_to_cart_redirect', function() {
    return wc_get_cart_url();
});

// Enqueue WC add-to-cart fix
add_action("wp_enqueue_scripts", function() {
    if (is_product()) {
        wp_enqueue_script("wc-atc-fix", get_template_directory_uri() . "/wc-atc-fix.js", array(), "1.0", true);
    }
});


// Dequeue WC block styles on product pages to prevent style conflicts
add_action("wp_enqueue_scripts", function() {
    if (is_product()) {
        wp_dequeue_style("wc-blocks-style");
        wp_dequeue_style("wc-blocks-style-coming-soon");
        wp_dequeue_style("wp-block-library");
        wp_dequeue_style("classic-theme-styles");
        wp_dequeue_style("global-styles");
        wp_dequeue_style("core-block-supports");
    }
}, 100);
