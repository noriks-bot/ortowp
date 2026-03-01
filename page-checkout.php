<?php
/**
 * Checkout Page - Pixel-perfect copy of si.stepease.eu checkout
 * Uses WC native checkout hooks for AJAX-safe payment/nonce handling
 */

// Check if this is order-received endpoint
global $wp;
if (isset($wp->query_vars['order-received'])) {
    $oid = absint($wp->query_vars['order-received']);
    $ord = wc_get_order($oid);
    se_checkout_enqueue_page_styles();
    ?><!DOCTYPE html>
<html lang="sl-SI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Naročilo prejeto – Ortowp</title>
    <?php wp_head(); ?>
</head>
<body class="wp-singular woocommerce-checkout woocommerce-page brand-stepease brand-general theme-vigoshop theme-hsplus">
<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'></div>
        <div class='flex flex--middle flex--apart flex--gaps'></div>
    </div>
</header>
<main id="content" class="main">
<div class="container container--l checkout-container">
    <div class="woocommerce">
        <div class="container container--xs bg--white wc-checkout-wrap" style="padding: 0 40px; padding-bottom: 2px;">
            <div class="woocommerce-order">
                <p class="woocommerce-notice woocommerce-notice--success" style="background:#dff0d8;border:1px solid #3dbd00;padding:15px;border-radius:8px;color:#333;font-size:16px;margin-bottom:20px;">
                    Hvala. Vaše naročilo je bilo prejeto.
                </p>
                <?php if ($ord) : ?>
                <ul class="woocommerce-order-overview order_details" style="list-style:none;padding:0;margin:0 0 20px;">
                    <li style="padding:10px 0;border-bottom:1px solid #eee;">Številka naročila: <strong><?php echo $ord->get_order_number(); ?></strong></li>
                    <li style="padding:10px 0;border-bottom:1px solid #eee;">Datum: <strong><?php echo wc_format_datetime($ord->get_date_created()); ?></strong></li>
                    <li style="padding:10px 0;border-bottom:1px solid #eee;">E-pošta: <strong><?php echo $ord->get_billing_email(); ?></strong></li>
                    <li style="padding:10px 0;border-bottom:1px solid #eee;">Skupaj: <strong><?php echo $ord->get_formatted_order_total(); ?></strong></li>
                    <li style="padding:10px 0;">Način plačila: <strong><?php echo wp_kses_post($ord->get_payment_method_title()); ?></strong></li>
                </ul>
                <?php do_action('woocommerce_thankyou_' . $ord->get_payment_method(), $ord->get_id()); ?>
                <?php do_action('woocommerce_thankyou', $ord->get_id()); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</main>
<?php wp_footer(); ?>
</body>
</html><?php
    return;
}

// Remove coupon notice + login notice from before_checkout_form
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10);
remove_action('woocommerce_before_checkout_form', 'woocommerce_output_all_notices', 10);

function se_checkout_enqueue_page_styles() {
    $css_dir = get_template_directory_uri() . '/assets/css/';
    $css_files = array(
        'select2', 'brands', 'hsplus-child', 'app', 'swiper.min', 'stepease',
        'agent-kc', 'check-client', 'checkout-extra-triggers',
        'checkout-order-review', 'checkout-timer', 'checkout-upsell',
        'cookie-consent', 'custom-checkout-general', 'custom-checkout-si',
        'custom-cta-settings', 'custom-payment-notice',
        'email-checkbox-subscription',
        'header', 'hide-payments-test-product',
        'general-shop-elements', 'lazy-load',
        'order-received-popup', 'extra-shipping-method-buttons',
        'parcel-pickup-si', 'payment-methods-fixes',
        'product-page-courier-info', 'shipping-method',
        'terms-and-conditions-link',
        'sv-wc-payment-form', 'wc-braintree.min', 'video-in-product-gallery',
        'abandoned-cart-restore-addons', 'cart-item-restore',
        'coupon-banner',
        'free-shipping-above-quantity', 'loader',
        'notice-test-product-only', 'relation-popup-upsell',
        'virtual-products', 'quantity-discount-price', 'hsplus-public'
    );
    foreach ($css_files as $name) {
        wp_enqueue_style("se-{$name}", $css_dir . "{$name}.css", array(), '1.0');
    }
}
add_action('wp_enqueue_scripts', 'se_checkout_enqueue_page_styles', 20);

// Dequeue WC block styles on checkout
add_action('wp_enqueue_scripts', function() {
    if (is_checkout()) {
        wp_dequeue_style('wc-blocks-style');
        wp_dequeue_style('wc-blocks-style-coming-soon');
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('classic-theme-styles');
        wp_dequeue_style('global-styles');
        wp_dequeue_style('core-block-supports');
    }
}, 999);

// Calculate delivery dates (next 2-3 business days)
function se_get_delivery_dates() {
    $now = new DateTime('now', new DateTimeZone('Europe/Ljubljana'));
    $days_added = 0;
    $start = clone $now;
    while ($days_added < 2) {
        $start->modify('+1 day');
        if ($start->format('N') < 6) $days_added++;
    }
    $end = clone $start;
    $days_added2 = 0;
    while ($days_added2 < 1) {
        $end->modify('+1 day');
        if ($end->format('N') < 6) $days_added2++;
    }
    $days_sl = ['', 'ponedeljek', 'torek', 'sreda', 'četrtek', 'petek', 'sobota', 'nedelja'];
    $d1 = $days_sl[(int)$start->format('N')] . ', ' . $start->format('j') . '.' . $start->format('n') . '.';
    $d2 = $days_sl[(int)$end->format('N')] . ', ' . $end->format('j') . '.' . $end->format('n') . '.';
    return $d1 . ' - ' . $d2;
}

// Get cart data for order summary
$cart = WC()->cart;
$cart_items = $cart->get_cart();
$cart_total = $cart->get_total();
$checkout = WC()->checkout();
$delivery_dates = se_get_delivery_dates();
?><!DOCTYPE html>
<html lang="sl-SI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Zaključek nakupa – Ortowp</title>
    <?php wp_head(); ?>
    <style>
        /* === WC integration fixes only — visual styling from original CSS files === */
        img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }
        .woocommerce form .form-row .required { visibility: visible; }

        /* Hide WC elements we replace with custom visual equivalents */
        #shipping_method,
        .woocommerce-shipping-totals,
        .woocommerce-additional-fields,
        .woocommerce-checkout-review-order-table,
        .woocommerce-form-coupon-toggle, .checkout_coupon,
        .woocommerce-form-login-toggle, .woocommerce-form-login,
        .woocommerce-checkout-payment .wc_payment_methods,
        .woocommerce-checkout-payment .place-order .woocommerce-terms-and-conditions-wrapper,
        .woocommerce-checkout-payment .place-order .woocommerce-privacy-policy-text,
        .woocommerce-checkout-payment .place-order noscript { display: none !important; }

        /* WC #place_order button — ORANGE */
        .woocommerce-checkout-payment .place-order { padding: 0 !important; margin: 0 !important; }
        body.woocommerce-checkout #place_order,
        body.woocommerce-checkout button#place_order,
        body.woocommerce-checkout input#place_order,
        body #order_review #place_order,
        #place_order {
            width: 100% !important;
            padding: 18px 30px !important;
            font-size: 18px !important;
            font-weight: 700 !important;
            border: none !important;
            border-radius: 8px !important;
            cursor: pointer !important;
            background: linear-gradient(135deg, #ff5b00, #e04e00) !important;
            background-color: #ff5b00 !important;
            color: #fff !important;
            margin-top: 15px !important;
            box-shadow: 0 3px 0 #c04000, 0 4px 12px rgba(255,91,0,0.3) !important;
            line-height: 1.4 !important;
            display: block !important;
            text-align: center !important;
        }
        body.woocommerce-checkout #place_order:hover,
        #place_order:hover {
            background: linear-gradient(135deg, #e04e00, #c94500) !important;
        }

        /* Delivery toggle: home vs paketomat */
        .home-delivery-fields { display: block; }
        .home-delivery-fields.hidden { display: none; }
        .paketomat-fields,
        div.paketomat-fields,
        #paketomat-fields { display: none !important; }
        .paketomat-fields.active,
        div.paketomat-fields.active,
        #paketomat-fields.active { display: block !important; }
        /* Hide WC-rendered paketomat field (rendered via billing fields hook) */
        #paketomat_location_field { display: none !important; }
        #paketomat_location_field.active { display: block !important; }
        /* Hide ALL address fields when paketomat is active (including WC-regenerated ones) */
        body.delivery-paketomat #home-delivery-fields,
        body.delivery-paketomat .address-hint,
        body.delivery-paketomat #billing_address_1_field,
        body.delivery-paketomat #billing_address_2_field,
        body.delivery-paketomat #billing_postcode_field,
        body.delivery-paketomat #billing_city_field { display: none !important; }

        /* Phone helper row */
        .phone-helper-row { display: flex; justify-content: space-between; font-size: 12px; color: #999; margin-top: 4px; }

        /* === Payment Methods (custom visual, not WC native) === */
        .hs-payment-methods { list-style: none; padding: 0; margin: 0; border: 1px solid #d1dbe5; border-radius: 5px; overflow: hidden; }
        .hs-payment-methods li { padding: 1.41575em 1em; border-left: 1px solid #d1dbe5; border-right: 1px solid #d1dbe5; border-bottom: 1px solid #d1dbe5; border-top: 1px solid #d1dbe5; cursor: pointer; transition: background 0.15s; }
        .hs-payment-methods li:last-child { border-bottom: 1px solid #d1dbe5; } .hs-payment-methods li:first-child { border-top-left-radius: 5px; border-top-right-radius: 5px; } .hs-payment-methods li:last-child { border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; }
        .hs-payment-methods li.active { background: #fff8f5; }
        .hs-payment-methods li label { display: flex; align-items: center; gap: 10px; cursor: pointer; width: 100%; font-size: 14px; font-weight: 500; }
        .hs-payment-methods li .payment-icons { margin-left: auto; display: flex; gap: 5px; align-items: center; flex-shrink: 0; }
        .hs-payment-methods li .payment-icons img { height: 24px; width: auto; }
        .hs-payment-methods li input[type="radio"] { accent-color: #ff5b00; width: 18px; height: 18px; flex-shrink: 0; }
        .hs-payment-methods .payment-fee-free { background: #3DBD00; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 11px; font-weight: bold; white-space: nowrap; }
        .hs-payment-methods .payment-unavailable { font-size: 12px; color: #999; padding: 6px 0 0 28px; display: none; }
        .hs-payment-methods li.show-unavailable .payment-unavailable { display: block; }

        /* === Delivery Type Buttons === */
        .hs-delivery-type-container .container__title { font-weight: 700; font-size: 18px; margin-bottom: 10px; margin-top: 15px; }
        .checkout-billing-title { color: #232f3e; font-size: 24px; margin-bottom: 12px; padding-top: 20px; }
        h3.payment-title { font-size: 18px; font-weight: 700; margin: 20px 0 10px; }
        #custom_shipping h3 { font-size: 18px; font-weight: 700; margin: 20px 0 8px; }
        h3.place-order-title { font-size: 18px; font-weight: 700; margin: 20px 0 8px; }
        .form-row { margin-bottom: 12px !important; }
        .phone-helper-row { margin-top: 2px !important; margin-bottom: 0 !important; }
        .hs-delivery-type-container .container__buttons { display: flex; gap: 8px; }
        .hs-delivery-type-container .delivery-type {
            flex: 1 !important; border: 2px solid #e0e0e0 !important; border-radius: 8px !important;
            padding: 12px 14px !important; cursor: pointer !important; transition: all 0.2s !important; background: #fff !important;
            display: flex !important; flex-direction: row !important; align-items: center !important; gap: 10px !important;
            text-align: left !important;
        }
        .hs-delivery-type-container .delivery-type.active { border-color: #ff5b00 !important; background: #fff5ee !important; outline: none !important; }
        .hs-delivery-type-container .delivery-type img { width: 44px; height: auto; flex-shrink: 0; }
        .hs-delivery-type-container .delivery-type p { margin: 0; font-size: 13px; font-weight: 500; }

        /* === Shipping date box === */
        .shipping_method_custom { padding: 0; margin: 10px 0; list-style: none; }
        .shipping_method_custom li { border: 1px solid #ccc !important; border-radius: 5px; padding: 0; background: #fff; display: block !important; overflow: hidden; margin-bottom: 3px; }
        .shipping_method_custom .checkedlabel { display: flex; align-items: center; gap: 10px; cursor: pointer; width: 100%; padding: 1.41575em 1em; background: #fff5ee; border: 1px solid #ff5b00; border-radius: 5px; }
        .shipping_method_custom .outer-wrapper { display: flex !important; align-items: center; justify-content: space-between; width: 100%; white-space: nowrap; }
        .shipping_method_custom .hs-custom-date { white-space: nowrap; }
        .shipping_method_custom .checkedlabel .outer-wrapper { display: flex; align-items: center; justify-content: space-between; width: 100%; }
        .shipping_method_custom .hs-custom-date { color: #333; font-size: 14px; }
        .shipping_method_custom .inner-wrapper-img { display: flex; align-items: center; gap: 8px; }
        .shipping_method_custom .tag--green { background: #ff5b00; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; }
        .shipping_method_custom .delivery_img img { height: 22px; }
        .shipping_method_custom .checkedlabel svg { width: 20px !important; height: 20px !important; max-width: 20px !important; max-height: 20px !important; flex-shrink: 0; fill: #ff5b00 !important; }

        /* === Paketomat dropdown === */
        .paketomat-fields select { width: 100%; margin-top: 5px; background: #fff url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8"><path d="M1 1l5 5 5-5" stroke="%23666" stroke-width="1.5" fill="none"/></svg>') no-repeat right 14px center; -webkit-appearance: none; appearance: none; }
        .paketomat-fields .paketomat-title { display: none; }
        .paketomat-provider-icons { display: none !important; }
        .paketomat-provider-icons img { height: 20px; }

        /* === COD prompt === */
        .hs-cod-checkout-prompt { display: flex; align-items: center; gap: 12px; padding: 10px 0; margin: 5px 0; }
        #custom_shipping { margin-top: 15px; }
        .hs-cod-checkout-prompt .cod-prompt-text { font-size: 14px; flex: 1; }
        .hs-cod-checkout-prompt .cod-prompt-image { width: 40px; height: auto; }

        /* === VAT text === */
        .hs-vat-tax-prompt { text-align: right; font-size: 12px; color: #666; margin: 4px 0 10px; line-height: 1.8; }

        /* === Order summary === */
        .checkout-order-summary h3 { font-size: 18px; font-weight: bold; margin: 20px 0 10px; }
        .review-section-container { display: flex; align-items: flex-start; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgb(240, 242, 245); font-size: 14px; background: transparent; }
        .review-product-details { flex: 1; }
        .review-product-details .f--m { font-size: 13px; }
        .review-product-details .c--gray { color: #888; font-size: 12px; }
        .info-price, .review-addons-price { font-weight: bold; white-space: nowrap; }
        .review-total-row { display: flex; justify-content: space-between; padding: 12px 0 5px; font-size: 17px; }
        .review-total-row strong { font-size: 18px; }

        /* === Warranty badge === */
        .checkout-warranty { display: flex; align-items: center; justify-content: center; gap: 12px; padding: 12px 0; margin: 5px 0; }
        .checkout-warranty__icon img { width: 55px; height: auto; }
        .checkout-warranty__text { font-size: 13px; line-height: 1.4; }

        /* === Terms & marketing === */
        .agreed_terms_txt { font-size: 12px; color: #555; margin: 10px 0; line-height: 1.6; position: relative; top: 15px; }
        .agreed_terms_txt a { color: #ff5b00; text-decoration: underline; }
        .terms-checkbox-and-links { display: flex; align-items: flex-start; gap: 8px; margin-top: 8px; }
        .terms-checkbox-and-links .checkbox { flex-shrink: 0; } .terms-checkbox-and-links { display: flex !important; align-items: flex-start; gap: 8px; margin-top: 8px; } .terms-checkbox-and-links input[type=checkbox] { width: 16px; height: 16px; margin-top: 2px; flex-shrink: 0; }
        #custom_mailing_checkout_field { margin: 8px 0; }
        #custom_mailing_checkout_field label { font-size: 13px; color: #555; display: flex; align-items: flex-start; gap: 8px; }
        #custom_mailing_checkout_field .optional { color: #999; } #custom_mailing_checkout_field input[type=checkbox] { width: 16px; height: 16px; margin-top: 2px; flex-shrink: 0; }

        /* === Address hint === */
        .address-hint { font-size: 13px; color: #666; margin-bottom: 5px; }

        /* === Warehouse badge === */
        .warehouse-badge { display: flex; align-items: center; gap: 8px; font-size: 14px; margin: 5px 0; }
        .delivery-from-eu-warehouse { display: flex; align-items: center; gap: 8px; margin-top: 15px !important; font-size: 14px; }
        .delivery-from-eu-warehouse__icon { height: 18px; width: auto; }

        /* Override custom-checkout-si.css float layout for address fields */
        p#billing_address_1_field {
            clear: both !important;
            float: left !important;
            width: 63% !important;
            margin-right: 2% !important;
        }
        p#billing_address_2_field {
            clear: none !important;
            float: right !important;
            width: 35% !important;
        }
        p#billing_postcode_field {
            clear: both !important;
            float: left !important;
            width: 35% !important;
            margin-right: 2% !important;
        }
        p#billing_city_field {
            clear: none !important;
            float: right !important;
            width: 63% !important;
        }
        /* Address fields always side by side (matches original) */

        /* Ime + Priimek side by side */
        p#billing_first_name_field {
            float: left !important;
            width: 49% !important;
            margin-right: 2% !important;
            clear: none !important;
        }
        p#billing_last_name_field {
            float: right !important;
            width: 49% !important;
            clear: none !important;
        }
        /* Ime/Priimek always side by side (matches original) */

        /* Match original si.stepease.eu input styling */
        .woocommerce-billing-fields__field-wrapper input.input-text,
        .woocommerce-billing-fields__field-wrapper input.form-input {
            background-color: #fff !important;
            box-shadow: inset 1px 1px 3px 0 rgba(0,0,0,0.25) !important;
            min-height: 60px !important;
            border: 1.5px solid #c9c9c9 !important;
            border-radius: 4px !important;
            font-size: 18px !important;
            box-sizing: border-box !important;
            padding: .4761904762em 1em !important;
            width: 100% !important;
        }
        .woocommerce-billing-fields__field-wrapper .field--not-empty input {
            padding-bottom: 0 !important;
            padding-top: 20px !important;
        }
        .woocommerce-billing-fields__field-wrapper .field--not-empty > label {
            opacity: 1 !important;
            transform: none !important;
        }
        /* Ensure WC order review + place order are visible */
        #order_review { display: block !important; }
        #order_review > .woocommerce-checkout-payment { display: block !important; }
        #order_review > .woocommerce-checkout-payment > .place-order { display: block !important; }

        /* === FIX 1: Delivery info box === */
        .hs-delivery-info-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(135deg, #fff5ee, #fff0e6);
            border: 2px solid #ff5b00;
            border-radius: 10px;
            padding: 14px 18px;
            margin: 10px 0 5px;
        }
        .delivery-info-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .delivery-check-icon { flex-shrink: 0; }
        .delivery-info-label { font-size: 13px; color: #666; display: block; }
        .delivery-info-date { font-size: 15px; color: #222; }
        .delivery-info-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .delivery-info-free {
            background: #3dbd00;
            color: #fff;
            padding: 3px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        .delivery-info-logo { height: 28px; }

        }

        /* Page layout: gray bg + white card */
        body { background: rgb(240, 242, 245) !important; }
        .checkout-container { max-width: 40rem !important; margin: 0 auto !important; padding: 0 !important; }
        .wc-checkout-wrap { background: rgb(240, 242, 245) !important; border-radius: 5px 5px 0 0; padding: 0 !important; padding-bottom: 15px !important; max-width: 100% !important; box-shadow: none; margin-top: 15px !important; }
        @media (max-width: 767px) {
            .wc-checkout-wrap { padding: 0 !important; }
        }

        /* === FIX 3: PayPal badge same green as others === */
        .hs-payment-methods .payment-fee-free {
            background: #3dbd00 !important;
            color: #fff !important;
        }

    </style>
</head>
<body class="wp-singular page-template-default page page-id-7 wp-theme-hsplus wp-child-theme-hsplus-child theme-vigoshop theme-hsplus woocommerce-checkout woocommerce-page woocommerce-no-js brand-stepease brand-general" data-hswooplus="10.3.7">

<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'></div>
        <div class='flex flex--middle flex--apart flex--gaps'></div>
    </div>
</header>

<main id="content" class="main">
    <div class="container container--l checkout-container">
        <article class="post-7 page type-page status-publish hentry">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"><?php wc_print_notices(); ?></div>
                <div class="container container--xs bg--white wc-checkout-wrap">
                    <div class="before_form container container--xs">

                        <?php do_action('woocommerce_before_checkout_form', $checkout); ?>

                        <form name="checkout" method="post" class="checkout woocommerce-checkout"
                              action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data" aria-label="Zaključek nakupa" style="padding: 0 40px; padding-bottom: 48px;">

                            <div class="col2-set" id="customer_details">
                                <div class="col-1 clearfix">
                                    <div class="woocommerce-billing-fields">
                                        <h3 class="checkout-billing-title">Plačilo in dostava</h3>
                                        <div class="woocommerce-billing-fields__field-wrapper">

                                            <!-- Phone -->
                                            <p class="form-row form-row-wide form-group col-xs-12 validate-required validate-phone" id="billing_phone_field" data-priority="10">
                                                <label for="billing_phone" class="required_field">Telefon&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="tel" class="input-text form-input" name="billing_phone" id="billing_phone" placeholder="Številka mobilnega telefona" value="" maxlength="16" aria-required="true" autocomplete="tel" />
                                                    <span class="phone-helper-row"><span>Primer: 031234567</span><span>Za pomoč pri dostavi</span></span>
                                                </span>
                                            </p>

                                            <!-- Email -->
                                            <p class="form-row form-row-wide form-group col-xs-12 validate-required validate-email" id="billing_email_field" data-priority="20">
                                                <label for="billing_email" class="required_field">E-poštni naslov&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="email" class="input-text form-input" name="billing_email" id="billing_email" placeholder="E-poštni naslov" value="" aria-required="true" maxlength="80" autocomplete="email" />
                                                </span>
                                            </p>

                                            <!-- Delivery Type Toggle -->
                                            <div class="form-row form-row-wide col-xs-12">
                                                <div class="hs-delivery-type-container si-posta">
                                                    <div class="container__title">Način dostave</div>
                                                    <div class="container__buttons">
                                                        <div class="delivery-type hs-delivery-home active" data-type="home">
                                                            <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/home_SL_alt.svg" style="width:44px;">
                                                            <p>Dostava na dom</p>
                                                        </div>
                                                        <div class="delivery-type hs-delivery-machine" data-type="paketomat">
                                                            <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/parcel_machine_SL_alt.svg" style="width:44px;">
                                                            <p>Paketomat / Petrol / MOL</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- First Name -->
                                            <p class="form-row form-row-first form-group col-xs-12 validate-required" id="billing_first_name_field" data-priority="30">
                                                <label for="billing_first_name" class="required_field">Ime&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text form-input" name="billing_first_name" id="billing_first_name" placeholder="Ime" value="" aria-required="true" maxlength="80" autocomplete="given-name" />
                                                </span>
                                            </p>
                                            <!-- Last Name -->
                                            <p class="form-row form-row-last form-group col-xs-12 validate-required" id="billing_last_name_field" data-priority="40">
                                                <label for="billing_last_name" class="required_field">Priimek&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="input-text form-input" name="billing_last_name" id="billing_last_name" placeholder="Priimek" value="" aria-required="true" maxlength="80" autocomplete="family-name" />
                                                </span>
                                            </p>

                                            <!-- Paketomat pickup point (hidden by default) -->
                                            <div class="paketomat-fields" id="paketomat-fields">
                                                <div class="paketomat-title">IZBERI PREVZEMNO TOČKO</div>
                                                <p class="form-row form-row-wide form-group col-xs-12" id="paketomat_location_field">
                                                    <span class="woocommerce-input-wrapper">
                                                        <select name="paketomat_location" id="paketomat_location" class="form-input">
                                                            <option value="">IZBERI PREVZEMNO TOČKO</option>
                                                            <optgroup label="DPD Paketomati">
                                                                <option value="DPD Ljubljana Center">DPD Paketomat - Ljubljana Center</option>
                                                                <option value="DPD Ljubljana BTC">DPD Paketomat - Ljubljana BTC</option>
                                                                <option value="DPD Maribor">DPD Paketomat - Maribor</option>
                                                                <option value="DPD Celje">DPD Paketomat - Celje</option>
                                                                <option value="DPD Kranj">DPD Paketomat - Kranj</option>
                                                                <option value="DPD Koper">DPD Paketomat - Koper</option>
                                                                <option value="DPD Novo mesto">DPD Paketomat - Novo mesto</option>
                                                            </optgroup>
                                                            <optgroup label="Petrol">
                                                                <option value="Petrol Ljubljana Bežigrad">Petrol - Ljubljana Bežigrad</option>
                                                                <option value="Petrol Maribor Tržaška">Petrol - Maribor Tržaška</option>
                                                                <option value="Petrol Celje">Petrol - Celje</option>
                                                            </optgroup>
                                                            <optgroup label="MOL">
                                                                <option value="MOL Ljubljana Šiška">MOL - Ljubljana Šiška</option>
                                                                <option value="MOL Maribor">MOL - Maribor</option>
                                                            </optgroup>
                                                        </select>
                                                    </span>
                                                </p>
                                                <div class="paketomat-provider-icons">
                                                    <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/parcel_machine_SL_alt.svg" alt="DPD Paketomat" style="height:20px;margin-right:8px;">
                                                    <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/petrol.svg" alt="Petrol" style="height:20px;margin-right:8px;">
                                                    <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/mol.svg" alt="MOL" style="height:20px;">
                                                </div>
                                            </div>

                                            <!-- Home delivery address fields -->
                                            <div class="home-delivery-fields" id="home-delivery-fields">
                                                <div class="form-row form-row-wide col-xs-12 address-hint">Vnesite naslov, na katerem ste <b>med 8. in 14. uro</b>.</div>
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_address_1_field" data-priority="50">
                                                    <label for="billing_address_1" class="required_field">Ulica&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text form-input" name="billing_address_1" id="billing_address_1" placeholder="Ulica" value="" aria-required="true" maxlength="80" autocomplete="address-line1" />
                                                    </span>
                                                </p>
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_address_2_field" data-priority="60">
                                                    <label for="billing_address_2" class="screen-reader-text required_field">Hišna številka&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text form-input" name="billing_address_2" id="billing_address_2" placeholder="Hišna številka" value="" autocomplete="address-line2" maxlength="80" aria-required="true" />
                                                    </span>
                                                </p>
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_postcode_field" data-priority="65">
                                                    <label for="billing_postcode" class="required_field">Poštna številka&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="tel" class="input-text form-input" name="billing_postcode" id="billing_postcode" placeholder="Poštna številka" value="" aria-required="true" maxlength="30" autocomplete="postal-code" />
                                                    </span>
                                                </p>
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_city_field" data-priority="80">
                                                    <label for="billing_city" class="required_field">Mesto&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text form-input" name="billing_city" id="billing_city" placeholder="Mesto" value="" aria-required="true" maxlength="80" autocomplete="address-level2" />
                                                    </span>
                                                </p>
                                            </div>

                                            <!-- Hidden country -->
                                            <p class="form-row" id="billing_country_field" style="display:none">
                                                <input type="hidden" name="billing_country" id="billing_country" value="SI" class="country_to_state" readonly="readonly" />
                                            </p>
                                            <input type="hidden" name="billing_state" id="billing_state" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields"></div>
                                </div>
                            </div>

                            <!-- Hidden shipping method for WC -->
                            <input type="hidden" name="shipping_method[0]" value="free_shipping:1" />

                            
                            

                            <!-- Fallback payment method (ensures COD is always submitted even if WC radios don't render) -->
                            <input type="hidden" name="payment_method" id="payment_method_fallback" value="cod" />

                            <!-- Shipping Info Section with delivery dates -->
                            <div id="custom_shipping">
                                <h3>Dostava</h3>
                                <ul class="shipping_method_custom">
                                    <li class="standard-shipping shipping-tab">
                                        <input name="shipping_display" id="shipping_method_0_standard_custom" value="standard" class="shipping_method_field" type="radio" checked style="display:none">
                                        <label for="shipping_method_0_standard_custom" class="checkedlabel">
                                            <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994-0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078-0.137536 16.9909-0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z"/></svg>
                                            <div class="outer-wrapper">
                                                <div class="inner-wrapper-dates">
                                                    <strong class="hs-custom-date"><?php echo esc_html($delivery_dates); ?></strong>
                                                </div>
                                                <div class="inner-wrapper-img">
                                                    <span class="shipping_method_delivery_price tag tag--green">Brezplačno</span>
                                                    <span class="delivery_img"><img decoding="async" class="posta_slovenije standard" src="https://images.vigo-shop.com/general/curriers/posta_slo.png"/></span>
                                                </div>
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                                <div class="delivery-from-eu-warehouse">
                                    <img decoding="async" class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/flag-icon-si.svg">
                                    <span class="delivery-from-eu-warehouse__text">Skladišče v Sloveniji</span>
                                </div>
                            </div>

                            <!-- Payment Methods - 3 options like original -->
                            <h3 class="payment-title">Način plačila</h3>
                            <ul class="hs-payment-methods">
                                <li class="active" data-method="cod">
                                    <label>
                                        <input type="radio" name="payment_method_visual" value="cod" checked class="input-radio" />
                                        Plačilo po povzetju <span class="payment-fee-free">Brezplačno</span>
                                        <span class="payment-icons">
                                            <img src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" alt="COD" />
                                        </span>
                                    </label>
                                </li>
                                <li data-method="card">
                                    <label>
                                        <input type="radio" name="payment_method_visual" value="card" class="input-radio" />
                                        Kreditna kartica <span class="payment-fee-free">Brezplačno</span>
                                        <span class="payment-icons">
                                            <img src="https://images.vigo-shop.com/general/payment/visa.svg" alt="Visa" />
                                            <img src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt="Mastercard" />
                                            <img src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt="Maestro" />
                                        </span>
                                    </label>
                                    <div class="payment-unavailable">Trenutno ni na voljo. Prosimo, izberite drugo možnost plačila.</div>
                                </li>
                                <li data-method="paypal">
                                    <label>
                                        <input type="radio" name="payment_method_visual" value="paypal" class="input-radio" />
                                        PayPal <span class="payment-fee-free">Brezplačno</span>
                                        <span class="payment-icons">
                                            <img src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt="PayPal" />
                                        </span>
                                    </label>
                                    <div class="payment-unavailable">Trenutno ni na voljo. Prosimo, izberite drugo možnost plačila.</div>
                                </li>
                            </ul>

                            <!-- COD prompt -->
                            <div class="hs-cod-checkout-prompt" id="hs-cod-prompt">
                                <div class="cod-prompt-text">Zaključi nakup sedaj, <strong>plačaj po povzetju :)</strong></div>
                                <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
                            </div>

                            <!-- VAT/Customs text -->
                            <div class="hs-vat-tax-prompt">
                                <span class="tax-claim">Brez dodatnih stroškov za carino</span>
                                <span class="tax-claim">DDV je vključen v ceno</span>
                            </div>

                            <!-- Order Summary -->
                            <h3 class="place-order-title" style="display:block;">Povzetek naročila</h3>
                            <div class="vigo-checkout-total order-total shop_table vigo-checkout-total-custom">
                                <div class="grid m-top--s review-all-products-container">
                                    <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">
<?php foreach ($cart_items as $cart_item_key => $cart_item) :
    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
    if (!$_product || !$_product->exists() || $cart_item['quantity'] <= 0) continue;
    $product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
    $product_price = apply_filters('woocommerce_cart_item_subtotal', $cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
    $attributes_html = '';
    if (!empty($cart_item['variation'])) {
        foreach ($cart_item['variation'] as $attr_name => $attr_value) {
            $taxonomy = str_replace('attribute_', '', $attr_name);
            $term = get_term_by('slug', $attr_value, $taxonomy);
            $label = wc_attribute_label($taxonomy);
            $value = $term ? $term->name : $attr_value;
            $attributes_html .= '<div>' . esc_html($label) . ': ' . esc_html($value) . '</div>';
        }
    }
?>
                                        <div class="c--darkgray review-section-container">
                                            <div class="review-product-info">
                                                <div><?php echo esc_html($cart_item['quantity']); ?>x <?php echo wp_kses_post($product_name); ?></div>
<?php if ($attributes_html) : ?>
                                                <div class="review-product-info__attributes"><?php echo $attributes_html; ?></div>
<?php endif; ?>
                                            </div>
                                            <div class="info-price"><span class="review-sale-price"><?php echo $product_price; ?></span></div>
                                            <div class="review-product-remove"></div>
                                        </div>
<?php endforeach; ?>
                                        <div class="c--darkgray review-section-container review-addons shipping_order_review">
                                            <div class="review-addons-title"><div>Standardna dostava</div></div>
                                            <div class="review-addons-price review-sale-price">0,00€</div>
                                            <div class="review-product-remove"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vigo-checkout-total__sum" style="display:flex;justify-content:space-between;align-items:center;padding:12px 0 5px;font-size:17px;border-top:1px solid rgb(240,242,245);">
                                    <div>Skupni znesek: <strong><?php echo $cart_total; ?></strong></div>
                                </div>
                            </div>

                            <!-- WC hidden payment div (needed for nonce + AJAX) -->
                            <?php do_action('woocommerce_checkout_order_review'); ?>

                            <!-- Warranty badge -->
                            <div class="checkout-warranty flex flex--center flex--middle">
                                <div class="flex__item--autosize checkout-warranty__icon">
                                    <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_si.png">
                                </div>
                                <div class="flex__item--autosize f--m checkout-warranty__text">
                                    <strong>Brezskrbno nakupujte</strong><br>
                                    Možnost vračila denarja v roku 90 dni
                                </div>
                            </div>

                            <!-- Terms & Marketing -->
                            <div class="custom-cta-skin" style="--cta-bg:#ff5b00;--cta-text:#ffffff">
                                <div class="agreed_terms_txt">
                                    <span class="policy-agreement-obligation">S klikom na gumb <strong>Oddaj naročilo</strong> se strinjam z oddajo naročila z obveznostjo plačila.</span> <br>
                                    <div class="terms-checkbox-and-links">
                                        <label class="checkbox">
                                            <input type="checkbox" class="input-checkbox" name="terms" id="terms" value="1">
                                        </label>
                                        Prebral sem in sprejemam <a href="https://ortowp.noriks.com/splosni-pogoji-poslovanja/" target="_blank">Splošne pogoje poslovanja</a> in <a href="https://ortowp.noriks.com/pravica-do-odstopa-od-nakupa/" target="_blank">Pravico do odstopa od nakupa</a>.
                                    </div>
                                </div>
                                <div id="custom_mailing_checkout_field">
                                    <p class="form-row email_opt_in" id="email_opt_in_field">
                                        <span class="woocommerce-input-wrapper">
                                            <label class="checkbox">
                                                <input type="checkbox" name="marketing_consent" id="marketing_consent" value="1" class="input-checkbox" />
                                                Da, med prvimi želim biti seznanjen z aktualnimi akcijami. <span class="optional">(izbirno)</span>
                                            </label>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
</main>

<div class="footer-wrap">
<footer class="footer">
    <div class="general-sub-banner-wrapper">
        <div class="inner_wrapper">
            <div class="partial_inner_section">
                <img src="https://images.vigo-shop.com/general/banner_icons/delivery_icon.svg" alt="">
                <div class="text_wrapper">Hitra dostava</div>
            </div>
            <div class="partial_inner_section">
                <img src="https://images.vigo-shop.com/general/banner_icons/COD_icon.svg" alt="">
                <div class="text_wrapper">Plačilo po povzetju</div>
            </div>
            <div class="partial_inner_section delivery-from-eu-warehouse">
                <img class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/flag-icon-si.svg">
                <div class="text_wrapper delivery-from-eu-warehouse__text">Skladišče v Sloveniji</div>
            </div>
        </div>
    </div>
    <div class="footer-payment bg--primary-dark c--white">
        <div class="footer-payment__content container container--l">
            <div class="footer-mobile-payment hiddenOnDesktop">
                <div class="footer-mobile-payment__links">
                    <div class="footer-mobile-payment__links-content s-left--s s-right--s s-bottom--m opened">
                        <div class="footer-main__links">
                            <ul>
                                <li><a href="https://ortowp.noriks.com/splosni-pogoji-poslovanja/" class="button button--link c--gray">Splošni pogoji poslovanja</a></li>
                                <li><a href="https://ortowp.noriks.com/varnostna-politika/" class="button button--link c--gray">Varnostna politika</a></li>
                                <li><a href="https://ortowp.noriks.com/politika-uporabe-piskotkov/" class="button button--link c--gray">Politika uporabe piškotkov</a></li>
                                <li><a href="https://ortowp.noriks.com/pravica-do-odstopa-od-nakupa/" class="button button--link c--gray">Pravica do odstopa od nakupa</a></li>
                                <li><a href="https://ortowp.noriks.com/reklamacije-in-pritozbe/" class="button button--link c--gray">Reklamacije in pritožbe</a></li>
                                <li><a href="https://ortowp.noriks.com/menjava-v-garanciji/" class="button button--link c--gray">Menjava v garanciji</a></li>
                                <li><a href="https://ortowp.noriks.com/o-podjetju/" class="button button--link c--gray">O podjetju</a></li>
                                <li><a href="https://ortowp.noriks.com/" class="button button--link c--gray">Navodila za uporabo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-payment__top footer-payment__top--mobile hiddenOnDesktop s-top--m">
                    <a class="button button--link" id="scroll-to-top"><div class="flex flex--autosize flex--middle flex--center"><div class="flex__item back-top-icon"><svg viewBox="0 0 17 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z"/></svg></div><div class="flex__item f--m c--lightgray scroll-to-top-text">Nazaj na vrh</div></div></a>
                </div>
            </div>
            <div class="flex flex--autosize flex--apart footer-payment--wrapper">
                <div class="flex__item col-md-5 footer-payment__first">
                    <div class="flex flex--center flex--wrap flex--autosize flex--gaps flex--bottom">
                        <div class="smdWrapperTag"></div>
                        <div class="flex__item norton-security-logo"><img src="https://images.vigo-shop.com/general/footer/norton_logo.svg"></div>
                        <div class="flex__item">
                            <div class="flex flex--autosize flex--bottom">
                                <div class="flex__item"><svg viewBox="0 0 13 17" xmlns="http://www.w3.org/2000/svg"><path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M10.9107 7.38848H11.6071C12.3761 7.38848 13 8.04356 13 8.85098V14.701C13 15.5084 12.3761 16.1635 11.6071 16.1635H1.39286C0.623884 16.1635 0 15.5084 0 14.701V8.85098C0 8.04356 0.623884 7.38848 1.39286 7.38848H2.08929V5.19473C2.08929 2.64145 4.0683 0.563477 6.5 0.563477C8.9317 0.563477 10.9107 2.64145 10.9107 5.19473V7.38848ZM4.41071 5.19473V7.38848H8.58928V5.19473C8.58928 3.98512 7.65201 3.00098 6.5 3.00098C5.34799 3.00098 4.41071 3.98512 4.41071 5.19473Z" fill="white"/></svg></div>
                                <div class="flex__item f--bold c--gray">100% varen nakup</div>
                            </div>
                            <div class="f--s c--gray">Zavarovano z 256-bitnim šifriranjem</div>
                        </div>
                    </div>
                </div>
                <div class="flex__item col-md-3 footer-payment__top hiddenOnMobile">
                    <a class="button button--link" id="scroll-to-top"><div class="flex flex--autosize flex--middle"><div class="flex__item"><svg viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" fill="#99A0A7"/></svg></div><div class="flex__item f--m c--lightgray">Nazaj na vrh</div></div></a>
                </div>
                <div class="flex__item col-md-4 footer-payment__badges">
                    <div class="flex flex--center flex--wrap flex--middle">
                        <div class="flex__item flex__item--autosize footer-payment__badge"><img src="https://images.vigo-shop.com/general/payment/visa.svg" alt="Visa"></div>
                        <div class="flex__item flex__item--autosize footer-payment__badge"><img src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt="Mastercard"></div>
                        <div class="flex__item flex__item--autosize footer-payment__badge"><img src="https://images.vigo-shop.com/general/payment/general_cod_payment_icon.svg" alt="COD"></div>
                        <div class="flex__item flex__item--autosize footer-payment__badge"><img src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt="Paypal"></div>
                        <div class="flex__item flex__item--autosize footer-payment__badge"><img src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt="Maestro"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg--primary-dark c--white">
        <div class="footer-copyright__content">
            <div class="t--center f--s c--gray">Copyright &copy; 2018 - 2026 - Spletna trgovina Stepease (HS plus d.o.o)</div>
        </div>
    </div>
</footer>
<footer class="footer-mobile"></footer>
<div class="hs_loader"><img src="https://images.vigo-shop.com/general/footer/stepease_footer_logo.svg"></div>

<script type='text/javascript'>
(function(){var c=document.body.className;c=c.replace(/woocommerce-no-js/,'woocommerce-js');document.body.className=c;})();
</script>

<script>
jQuery(function($) {
    // Delivery type toggle
    var $homeBtn = $('.hs-delivery-home');
    var $machineBtn = $('.hs-delivery-machine');
    var $homeFields = $('#home-delivery-fields');
    var $pakFields = $('#paketomat-fields');

    $homeBtn.on('click', function() {
        $homeBtn.addClass('active');
        $machineBtn.removeClass('active');
        $homeFields.removeClass('hidden');
        $pakFields.removeClass('active');
        $('#paketomat_location_field').removeClass('active');
        $('body').removeClass('delivery-paketomat');
        $('.shipping_order_review .review-addons-title div').text('Standardna dostava');
    });

    $machineBtn.on('click', function() {
        $machineBtn.addClass('active');
        $homeBtn.removeClass('active');
        $homeFields.addClass('hidden');
        $pakFields.addClass('active');
        $('#paketomat_location_field').addClass('active');
        $('body').addClass('delivery-paketomat');
        $('.shipping_order_review .review-addons-title div').text('Dostava na prevzemno točko');
    });

    // Payment method selection
    function syncPaymentMethod(method) {
        // Sync to WC hidden radio if it exists
        var $wcRadio = $('input[name="payment_method"][value="' + method + '"]').not('#payment_method_fallback');
        if ($wcRadio.length) {
            $wcRadio.prop('checked', true).trigger('change');
        }
        // Always update hidden fallback
        $('#payment_method_fallback').val(method);
    }

    $('.hs-payment-methods li').on('click', function() {
        $('.hs-payment-methods li').removeClass('active show-unavailable');
        $(this).addClass('active');
        var method = $(this).data('method');
        if (method === 'cod') {
            syncPaymentMethod('cod');
            $('#hs-cod-prompt').slideDown(200);
        } else {
            $(this).addClass('show-unavailable');
            // Only COD available, keep it selected
            syncPaymentMethod('cod');
            $('#hs-cod-prompt').slideUp(200);
        }
    });

    // Ensure WC checkout JS initialized properly
    var wcCheckoutBound = false;
    var checkAttempts = 0;
    function checkWcCheckout() {
        checkAttempts++;
        var formEvents = $._data($('form.checkout')[0], 'events');
        if (formEvents && formEvents.submit) {
            wcCheckoutBound = true;
            console.log('[ortowp] WC checkout JS bound OK');
        } else if (checkAttempts < 20) {
            setTimeout(checkWcCheckout, 250);
        } else {
            console.warn('[ortowp] WC checkout JS not bound after 5s, adding fallback');
            $('form.checkout').on('submit', function(e) {
                e.preventDefault();
                var $form = $(this);
                if ($form.hasClass('processing')) return;
                $form.addClass('processing');

                $.ajax({
                    type: 'POST',
                    url: wc_checkout_params.checkout_url.replace('%%endpoint%%', 'checkout'),
                    data: $form.serialize(),
                    dataType: 'json',
                    success: function(result) {
                        if (result.result === 'success') {
                            window.location = result.redirect;
                        } else {
                            $form.removeClass('processing');
                            if (result.messages) {
                                $('.woocommerce-notices-wrapper').first().html(result.messages);
                                $('html, body').animate({scrollTop: 0}, 300);
                            }
                        }
                    },
                    error: function() {
                        $form.removeClass('processing');
                        alert('Prišlo je do napake. Poskusite znova.');
                    }
                });
            });
        }
    }
    setTimeout(checkWcCheckout, 500);

    // When paketomat selected, copy location to address
    $('#paketomat_location').on('change', function() {
        var loc = $(this).val();
        if (loc) {
            $('#billing_address_1').val(loc);
            $('#billing_address_2').val('-');
            $('#billing_postcode').val('1000');
            $('#billing_city').val('Ljubljana');
        }
    });

    // Show COD prompt on load (COD is default)
    $('#hs-cod-prompt').show();

    // Floating labels: add field--not-empty when input has value
    function updateFieldState($el) {
        var $row = $el.closest('.form-row');
        if ($el.val() && $el.val().length > 0) {
            $row.addClass('field--not-empty');
        } else {
            $row.removeClass('field--not-empty');
        }
    }
    $('.woocommerce-billing-fields__field-wrapper input').on('input change blur', function() {
        updateFieldState($(this));
    });
    setTimeout(function() {
        $('.woocommerce-billing-fields__field-wrapper input').each(function() {
            updateFieldState($(this));
        });
    }, 500);

    // Sync WC payment_method to COD on load + after WC AJAX updates
    function syncCodOnLoad() {
        var $wcCod = $('input[name="payment_method"][value="cod"]').not('#payment_method_fallback');
        if ($wcCod.length) {
            $wcCod.prop('checked', true).trigger('change');
            console.log('[ortowp] COD payment method synced');
        } else {
            console.log('[ortowp] WC COD radio not found, using hidden fallback');
        }
    }
    setTimeout(syncCodOnLoad, 300);
    // Re-sync after WC updates checkout (e.g., after address change triggers update_order_review)
    $(document.body).on('updated_checkout', syncCodOnLoad);

    // Scroll to top
    $(document).on('click', '#scroll-to-top', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    // Ensure #place_order button has orange styling (override any green-gradient from app.css)
    $(document.body).on('updated_checkout', function() {
        $('#place_order').css({
            'background': 'linear-gradient(135deg, #ff5b00, #e04e00)',
            'background-color': '#ff5b00',
            'color': '#fff',
            'box-shadow': '0 3px 0 #c04000, 0 4px 12px rgba(255,91,0,0.3)',
            'border': 'none',
            'border-radius': '8px',
            'font-size': '18px',
            'font-weight': '700',
            'padding': '18px 30px',
            'width': '100%',
            'margin-top': '15px',
            'cursor': 'pointer'
        });
    });

    // Debug
    console.log('[ortowp] jQuery:', $.fn.jquery);
    console.log('[ortowp] wc_checkout_params:', typeof wc_checkout_params !== 'undefined' ? 'OK' : 'MISSING');
    console.log('[ortowp] form.checkout:', $('form.checkout').length);
    console.log('[ortowp] #place_order:', $('#place_order').length);
});
</script>

<div id="contact-info-modal" class="mobile-notice-modal hidden">
    <div class="wrapper">
        <div class='mobile-notice-modal__content'>
            <div class="modal-close"><img id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close"></div>
            <div class='mobile-notice-modal__head s-all--s'>
                <div class="f--l f--bold c--darkgray">Potrebujete pomoč pri nakupu?</div>
                <div class="f--s c--gray">Za vas smo dosegljivi vsak delovnik od <strong>08:00 - 16:00</strong>.</div>
            </div>
            <div class="mobile-notice-modal__body">
                <div class="flex flex--vertical">
                    <div class="border border--top border--light"></div>
                    <a class="flex__item t--no-decoration c--text s-all--s" href="viber://chat?number=%2B38651762806">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="7mjeyniv7a"><path data-name="Rectangle 3640" style="fill:none" d="M0 0h16.792v17.952H0z"/></clipPath></defs><path data-name="Path 11936" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#7453fc"/><g data-name="Group 10476"><g data-name="Group 10475" style="clip-path:url(#7mjeyniv7a)" transform="translate(4 3)"><path data-name="Path 11929" d="M9.437 0H7.353C2.681 0 0 2.652 0 7.275v1.34a7.417 7.417 0 0 0 1.84 5.343 5.648 5.648 0 0 0 1.97 1.322v1.934a.741.741 0 0 0 .767.739.772.772 0 0 0 .546-.273c.365-.415 1.064-1.214 1.689-1.936h3.635a6.033 6.033 0 0 0 4.53-1.939 7.765 7.765 0 0 0 1.815-5.335V7.275C16.792 2.72 14.043 0 9.437 0m6.042 8.468c0 3.921-2.253 5.961-5.032 5.961h-3.2a.172.172 0 0 0-.132.061c-.294.346-.683.8-1.075 1.247-.531.611-1.068 1.224-1.379 1.579a.152.152 0 0 1-.115.052.155.155 0 0 1-.156-.156v-3a.176.176 0 0 0-.111-.162 5.8 5.8 0 0 1-.181-.078c-.1-.045-.2-.093-.292-.146-1.493-.819-2.5-2.5-2.5-5.214V7.275c0-3.784 2-5.961 6.04-5.961h2.091c3.912 0 6.042 2.177 6.042 5.961z" style="fill:#fff"/></g></g></svg></div>
                            <div class="flex__item mobile_contact mobile_viber_contact"><strong>Viber</strong></div>
                        </div>
                    </a>
                    <div class="border border--top border--light"></div>
                    <a class="flex__item t--no-decoration c--text s-all--s" href="mailto:info@ortowp.noriks.com">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                            <div class="flex__item"><strong>info@ortowp.noriks.com</strong></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
