<?php
/**
 * Checkout Page - Pixel-perfect copy of si.stepease.eu checkout
 * Uses WC checkout hooks for functional form processing
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
        <div class="container container--xs bg--white wc-checkout-wrap" style="padding:40px 20px;">
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

// Remove coupon notice from before_checkout_form
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);

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

// Get cart data for order summary
$cart = WC()->cart;
$cart_items = $cart->get_cart();
$cart_total = $cart->get_total();
$checkout = WC()->checkout();
?><!DOCTYPE html>
<html lang="sl-SI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Zaključek nakupa – Ortowp</title>
    <?php wp_head(); ?>
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }
        .woocommerce form .form-row .required { visibility: visible; }
        .woocommerce-product-gallery { opacity: 1 !important; }

        /* Hide WC default shipping section - we show custom one */
        #shipping_method { display: none !important; }
        .woocommerce-shipping-totals { display: none !important; }
        /* Hide additional fields (order notes) */
        .woocommerce-additional-fields { display: none !important; }
        /* Hide default WC order review table */
        .woocommerce-checkout-review-order-table { display: none !important; }
        /* Hide coupon form if it somehow appears */
        .woocommerce-form-coupon-toggle, .checkout_coupon { display: none !important; }
        /* Style fixes for our custom elements */
        .hs-delivery-type-container .container__buttons {
            display: flex;
            gap: 10px;
        }
        .hs-delivery-type-container .delivery-type {
            flex: 1;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s;
        }
        .hs-delivery-type-container .delivery-type.active {
            border-color: #3DBD00;
        }
        .hs-delivery-type-container .delivery-type img {
            max-width: 50px;
            margin: 0 auto;
            display: block;
        }
        .hs-delivery-type-container .container__title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        /* Paketomat fields */
        .paketomat-fields { display: none; }
        .paketomat-fields.active { display: block; }
        .paketomat-fields select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 8px;
        }
        /* Address hint */
        .address-hint {
            font-size: 13px;
            color: #666;
            margin-bottom: 5px;
        }
        /* Home delivery fields */
        .home-delivery-fields { display: block; }
        .home-delivery-fields.hidden { display: none; }
    </style>
</head>
<body class="wp-singular page-template-default page page-id-7 wp-theme-hsplus wp-child-theme-hsplus-child theme-vigoshop theme-hsplus woocommerce-checkout woocommerce-page woocommerce-no-js brand-stepease brand-general" data-hswooplus="10.3.7">

<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'>
        </div>
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
                              action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data" aria-label="Zaključek nakupa">

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
                                                            <p>Dostava na dom</p>
                                                            <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/home_SL_alt.svg" style="align-self:center;padding-top:20px;min-width:50px;">
                                                        </div>
                                                        <div class="delivery-type hs-delivery-machine" data-type="paketomat">
                                                            <p>Paketomat / Petrol / MOL</p>
                                                            <img decoding="async" src="https://images.vigo-shop.com/slo/shipping-method-icons/parcel_machine_SL_alt.svg">
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
                                                <p class="form-row form-row-wide form-group col-xs-12 validate-required" id="paketomat_location_field">
                                                    <label for="paketomat_location" class="required_field">Izberi prevzemno točko&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <select name="paketomat_location" id="paketomat_location" class="form-input">
                                                            <option value="">-- Izberi prevzemno točko --</option>
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
                                            </div>

                                            <!-- Home delivery address fields -->
                                            <div class="home-delivery-fields" id="home-delivery-fields">
                                                <div class="form-row form-row-wide col-xs-12 address-hint">Vnesite naslov, na katerem ste <b>med 8. in 14. uro</b>.</div>
                                                <!-- Street -->
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_address_1_field" data-priority="50">
                                                    <label for="billing_address_1" class="required_field">Ulica&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text form-input" name="billing_address_1" id="billing_address_1" placeholder="Ulica" value="" aria-required="true" maxlength="80" autocomplete="address-line1" />
                                                    </span>
                                                </p>
                                                <!-- House number -->
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_address_2_field" data-priority="60">
                                                    <label for="billing_address_2" class="screen-reader-text required_field">Hišna številka&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text form-input" name="billing_address_2" id="billing_address_2" placeholder="Hišna številka" value="" autocomplete="address-line2" maxlength="80" aria-required="true" />
                                                    </span>
                                                </p>
                                                <!-- Postal code -->
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_postcode_field" data-priority="65">
                                                    <label for="billing_postcode" class="required_field">Poštna številka&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="tel" class="input-text form-input" name="billing_postcode" id="billing_postcode" placeholder="Poštna številka" value="" aria-required="true" maxlength="30" autocomplete="postal-code" />
                                                    </span>
                                                </p>
                                                <!-- City -->
                                                <p class="form-row form-row-wide address-field form-group col-xs-12 validate-required" id="billing_city_field" data-priority="80">
                                                    <label for="billing_city" class="required_field">Mesto&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                    <span class="woocommerce-input-wrapper">
                                                        <input type="text" class="input-text form-input" name="billing_city" id="billing_city" placeholder="Mesto" value="" aria-required="true" maxlength="80" autocomplete="address-level2" />
                                                    </span>
                                                </p>
                                            </div>

                                            <!-- Hidden country field -->
                                            <p class="form-row form-row-wide address-field update_totals_on_change form-group col-xs-12 validate-required" id="billing_country_field" data-priority="90" style="display:none">
                                                <label for="billing_country" class="required_field">Država / regija&nbsp;<span class="required" aria-hidden="true">*</span></label>
                                                <span class="woocommerce-input-wrapper">
                                                    <strong>Slovenija</strong>
                                                    <input type="hidden" name="billing_country" id="billing_country" value="SI" aria-required="true" autocomplete="do-not-autofill" class="country_to_state" readonly="readonly" />
                                                </span>
                                            </p>
                                            <input type="hidden" name="billing_state" id="billing_state" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields"></div>
                                </div>
                            </div>

                            <!-- Hidden shipping method - required for WC -->
                            <input type="hidden" name="shipping_method[0]" value="free_shipping:1" />

                            <!-- Shipping Info Section -->
                            <div id="custom_shipping">
                                <h3>Dostava</h3>
                                <ul class="shipping_method_custom">
                                    <li class="standard-shipping shipping-tab">
                                        <input name="shipping_display" data-index="0" id="shipping_method_0_standard_custom"
                                               value="standard" class="shipping_method_field" type="radio" checked>
                                        <label for="shipping_method_0_standard_custom" class="checkedlabel">
                                            <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994-0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078-0.137536 16.9909-0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z" /></svg>
                                            <div class="outer-wrapper">
                                                <div class="inner-wrapper-dates">
                                                    <strong class="hs-custom-date">2-3 delovne dni</strong>
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

                            <!-- Payment Methods -->
                            <h3 class="payment-title">Način plačila</h3>
                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked='checked' data-order_button_text="" />
                                        <label for="payment_method_cod">
                                            Plačilo po povzetju <span class="payment-fee-free">Brezplačno</span>
                                            <div class="hs-checkout__payment-method-cod-icon-container">
                                                <img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" />
                                            </div>
                                        </label>
                                    </li>
                                </ul>

                                <div class="form-row place-order">
                                    <noscript>
                                        Ker vaš brskalnik ne podpira JavaScript-a, oz. je le-ta onemogočen, kliknite gumb <em>Posodobi znesek</em> preden oddate naročilo.
                                        <br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Posodobi znesek">Posodobi znesek</button>
                                    </noscript>

                                    <div class="woocommerce-terms-and-conditions-wrapper"></div>

                                    <div id="hs-cod-checkout-prompt" style="display:none;">
                                        <div class="cod-prompt-text">Zaključi nakup sedaj, <strong>plačaj po povzetju 🙂</strong></div>
                                        <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
                                    </div>

                                    <div id="hs-vat-tax-checkout-prompt">
                                        <span class="tax-and-vat-checkout-claims">Brez dodatnih stroškov za carino</span>
                                        <span class="tax-and-vat-checkout-claims">DDV je vključen v ceno</span>
                                    </div>

                                    <!-- Order Summary -->
                                    <h3 class="place-order-title" style="display:block;">Povzetek naročila</h3>
                                    <div class="vigo-checkout-total order-total shop_table woocommerce-checkout-review-order-table-custom">
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
                                                    <div class="info-price">
                                                        <span class="review-sale-price"><?php echo $product_price; ?></span>
                                                    </div>
                                                    <div class="review-product-remove"></div>
                                                </div>
<?php endforeach; ?>
                                                <!-- Shipping row -->
                                                <div class="c--darkgray review-section-container review-addons shipping_order_review">
                                                    <div class="review-addons-title"><div>Standardna dostava</div></div>
                                                    <div class="review-addons-price review-sale-price">Brezplačno</div>
                                                    <div class="review-product-remove"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vigo-checkout-total__sum flex flex--middle border_price">
                                            <div class="flex__item f--l">
                                                Skupni znesek: <span class="f--bold price_total_wrapper"><?php echo $cart_total; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
                                </div>
                            </div>

                            <!-- Place Order Button & Warranty -->
                            <div class="custom-cta-skin" style="--cta-bg:#ff5b00;--cta-text:#ffffff">
                                <div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
                                    <button type="submit" class="button alt button--l button--block button--green button--rounded button--green-gradient" name="woocommerce_checkout_place_order" id="place_order" data-value="Oddaj naročilo">🔒 Oddaj naročilo</button>
                                </div>
                                <div class="checkout-warranty flex flex--center flex--middle">
                                    <div class="flex__item--autosize checkout-warranty__icon">
                                        <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_si.png">
                                    </div>
                                    <div class="flex__item--autosize f--m checkout-warranty__text">
                                        <strong>Brezskrbno nakupujte </strong><br>
                                        Možnost vračila denarja v roku 90 dni
                                    </div>
                                </div>
                                <div class="agreed_terms_txt">
                                    <span class="policy-agreement-obligation">S klikom na gumb <strong>Oddaj naročilo</strong> se strinjam z oddajo naročila z obveznostjo plačila.</span>
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
                    <a class="button button--link" id="scroll-to-top">
                        <div class="flex flex--autosize flex--middle flex--center">
                            <div class="flex__item back-top-icon"><svg viewBox="0 0 17 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" /></svg></div>
                            <div class="flex__item f--m c--lightgray scroll-to-top-text">Nazaj na vrh</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex--autosize flex--apart footer-payment--wrapper">
                <div class="flex__item col-md-5 footer-payment__first">
                    <div class="flex flex--center flex--wrap flex--autosize flex--gaps flex--bottom">
                        <div class="smdWrapperTag"></div>
                        <div class="flex__item norton-security-logo">
                            <img src="https://images.vigo-shop.com/general/footer/norton_logo.svg">
                        </div>
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
                    <a class="button button--link" id="scroll-to-top">
                        <div class="flex flex--autosize flex--middle">
                            <div class="flex__item"><svg viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" fill="#99A0A7"/></svg></div>
                            <div class="flex__item f--m c--lightgray">Nazaj na vrh</div>
                        </div>
                    </a>
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
            <div class="t--center f--s c--gray">Copyright © 2018 - 2026 - Spletna trgovina Stepease (HS plus d.o.o)</div>
        </div>
    </div>
</footer>
<footer class="footer-mobile"></footer>
<div class="hs_loader">
    <img src="https://images.vigo-shop.com/general/footer/stepease_footer_logo.svg">
</div>

<script type='text/javascript'>
(function () {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})();
</script>

<!-- Delivery type toggle JS -->
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
        // Restore address required
        $('#billing_address_1, #billing_address_2, #billing_postcode, #billing_city').attr('aria-required', 'true');
    });

    $machineBtn.on('click', function() {
        $machineBtn.addClass('active');
        $homeBtn.removeClass('active');
        $homeFields.addClass('hidden');
        $pakFields.addClass('active');
        // Remove address required for home
        $('#billing_address_1, #billing_address_2, #billing_postcode, #billing_city').attr('aria-required', 'false');
    });

    // Scroll to top
    $(document).on('click', '#scroll-to-top', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    // When paketomat selected, copy location to address field for WC
    $('#paketomat_location').on('change', function() {
        var loc = $(this).val();
        if (loc) {
            $('#billing_address_1').val(loc);
            $('#billing_address_2').val('-');
            $('#billing_postcode').val('1000');
            $('#billing_city').val('Ljubljana');
        }
    });
});
</script>

<!-- Contact Info Modal -->
<div id="contact-info-modal" class="mobile-notice-modal hidden">
    <div class="wrapper">
        <div class='mobile-notice-modal__content'>
            <div class="modal-close">
                <img id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
            </div>
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
