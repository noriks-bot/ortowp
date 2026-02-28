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

// Override proceed to checkout button with vigoshop styling
remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );
add_action( 'woocommerce_proceed_to_checkout', function() {
    echo '<a href="' . esc_url( wc_get_checkout_url() ) . '" class="checkout-button button button--l alt wc-forward button--block button--green-gradient btn_bigger_proceed custom-cta-skin" style="background:#ff5b00 !important;color:#ffffff !important;border-color:#ff5b00 !important;box-shadow: 0 2px 0 #ff5b00 !important;">Na blagajno</a>';
}, 20 );
