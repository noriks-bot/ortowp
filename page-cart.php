<?php
/**
 * Cart Page - VERBATIM from si.stepease.eu/kosarica/
 * Dynamic cart data from WC()->cart, all HTML copied exactly from source
 */

// Enqueue all original CSS
function se_cart_enqueue_page_styles() {
    $css_dir = get_template_directory_uri() . '/assets/css/';
    $css_files = array(
        'select2', 'brands', 'hsplus-child', 'app', 'swiper.min', 'stepease',
        'agent-kc', 'cart-dynamic-offer', 'cart-general', 'cart-go-to-checkout-sticky',
        'cart-upsell', 'checkout-extra-triggers', 'cookie-consent',
        'coupon-banner', 'custom-cta-settings', 'custom-payment-notice',
        'header', 'hide-payments-test-product',
        'general-shop-elements', 'lazy-load', 'lottery-ticket',
        'product-page-courier-info', 'woo-fixes',
        'sv-wc-payment-form', 'wc-braintree.min', 'video-in-product-gallery',
        'abandoned-cart-restore-addons', 'cart-item-restore',
        'free-shipping-above-quantity', 'loader',
        'notice-test-product-only', 'relation-popup-upsell',
        'virtual-products', 'quantity-discount-price', 'hsplus-public'
    );
    foreach ($css_files as $name) {
        wp_enqueue_style("se-{$name}", $css_dir . "{$name}.css", array(), '1.0');
    }
}
add_action('wp_enqueue_scripts', 'se_cart_enqueue_page_styles', 20);

// Get cart data
$cart = WC()->cart;
$cart_items = $cart->get_cart();
$cart_count = $cart->get_cart_contents_count();
$is_empty = $cart_count === 0;
$item_label = $cart_count === 1 ? '1 izdelek' : $cart_count . ' izdelkov';
$cart_total = $cart->get_total();
$cart_subtotal = $cart->get_cart_subtotal();
?><!DOCTYPE html>
<html lang="sl-SI" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Košarica – Ortowp</title>
    <?php wp_head(); ?>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
</head>
<body class="wp-singular page-template page-template-template-fullwidth page-template-template-fullwidth-php page page-id-5 wp-theme-hsplus wp-child-theme-hsplus-child  theme-vigoshop theme-hsplus woocommerce-cart woocommerce-page woocommerce-no-js brand-stepease brand-general" data-hswooplus="10.3.7"  >

<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'>
                    </div>
  <div class='flex flex--middle flex--apart flex--gaps'>  </div>
</header>
<main id="content" class="main">
        <div class="container container--l checkout-container">

  <article class="post-5 page type-page status-publish hentry">
    <div class="woocommerce">
    <div class="woocommerce-notices-wrapper"><?php wc_print_notices(); ?></div>
    <div class="cart-restore-notice-wrapper"></div>

<?php if ( $is_empty ) : ?>

<div class="wc-empty-cart-message">
  <div class="woocommerce-info tag tag--block tag--bold tag--blue s-all--s" role="status">
    Vaša košarica je trenutno prazna.  </div>
</div>
<div class="vigo-wc-empty-cart">
    <div class="bg--white grid grid--horizontal-gaps m-top--m border-radius--l">
        <div class="col-xs-12 vigo-wc-cart__head s-all--m border border--bottom border--light">
            <div class="f--l f--bold">Košarica</div>
        </div>
        <div class=" col-xs-12 s-all--l flex flex--vertical flex--middle flex--gaps flex--center">
            <div class="f--m flex__item f--bold"></div>
            <div class="return-to-shop flex__item">
                <div class="custom-cta-skin" style="--cta-bg:#ff5b00;--cta-text:#ffffff">                <a class="button wc-backward button--yellow-gradient button--yellow-bs button--block"
                   href="<?php echo esc_url( home_url('/') ); ?>">
                    Nazaj v trgovino
                </a>
                </div>            </div>
        </div>
    </div>
      <div class="content__badge m-top--s m-bottom--s">
    <div class="grid grid--gaps grid--middle">
        <div class="col-xs-12"><img decoding="async" src="https://images.vigo-shop.com/general/secure-payment/SI_90DAYS.svg"></div>
    </div>
</div>
</div>

<?php else : ?>

<style>
  
      .woocommerce-cart select.one, .woocommerce-cart select.two {
      background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='%23fff'><polygon points='0,0 100,0 50,50'/></svg>") no-repeat;
      background-size: 16px;
      background-position: calc(100% - 13px) 21px;
    }
  
  
  
  </style>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <div
            class="woocommerce cart woocommerce-cart-form__contents vigo-wc-cart m-bottom--m m-top--m s-bottom--m bg--white s-left--m s-right--m s-bottom--m border-radius--l">
        <div class="grid grid--horizontal-gaps">
            <div class="col-xs-12 vigo-wc-cart__head s-top--m s-bottom--m border border--bottom border--light">
                <div class="flex flex--apart flex--middle">
                    <div class="flex__item flex flex--autosize flex--middle flex--gaps">
                        <div class="flex__item">
                          <div class="f--l f--bold">Košarica</div>
                        </div>
                      <div class="flex__item">
            <span
              class="c--gray"><?php echo esc_html( $item_label ); ?>              </span>
                      </div>
                    </div>
                    <div class="flex__item">
                        <strong>Danes naročiš, v <span style='color:#478B05'>2-3 dneh</span> dobiš!</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 vigo-wc-cart__items s-top--m">
<?php
foreach ( $cart_items as $cart_item_key => $cart_item ) {
    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

    if ( ! $_product || ! $_product->exists() || $cart_item['quantity'] <= 0 || ! apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
        continue;
    }

    $product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
    $thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('woocommerce_thumbnail'), $cart_item, $cart_item_key );
    $product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
    $variation_id  = isset($cart_item['variation_id']) ? $cart_item['variation_id'] : 0;
    $var_class     = $variation_id ? ' product-variation-' . $variation_id : '';
?>
                                        <div
                                class="grid grid--gaps grid--middle m-bottom--s s-bottom--m vigo-wc-cart__item cart_item cart_item product-<?php echo esc_attr($product_id); ?><?php echo esc_attr($var_class); ?>">
                            <div
                                    class="col-xs-1 product-thumbnail vigo-cart__item-thumbnail">
                                <?php echo $thumbnail; ?>
                            </div>
                            <div class="col-xs-11 vigo-wc-cart__item-wrapper">
                                <div class="grid grid--middle grid--gaps">
                                    <div class="col-md-6 col-xs-12 product-name vigo-cart__item-name">
                                      <?php echo wp_kses_post( $product_name ); ?>&nbsp;
                                    </div>
                                    <div class="col-md-2 col-xs-4 product-quantity vigo-cart__item-qty">
                                        <div class="quantity_select"><select name="cart[<?php echo esc_attr($cart_item_key); ?>][qty]" title="Količina" class="qty"><?php for ($i = 1; $i <= 10; $i++) : ?><option value="<?php echo $i; ?>"<?php selected($cart_item['quantity'], $i); ?>><?php echo $i; ?>x</option><?php endfor; ?></select></div>
                                    </div>
                                    <div class="col-md-2 col-xs-7 product-price vigo-cart__item-price f--bold">
                                        <?php echo $product_price; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-1 product-remove vigo-cart__item-remove">
                                        <a role="button" href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="remove" aria-label="<?php echo esc_attr( sprintf( 'Odstrani %s iz košarice', wp_strip_all_tags($product_name) ) ); ?>" data-product_id="<?php echo esc_attr( $product_id ); ?>" data-product_sku="<?php echo esc_attr( $_product->get_sku() ); ?>">&times;</a>
                                    </div>
                                </div>
                            </div>
                                                  </div>
<?php } // end foreach ?>

                        

                
<div class="simple simple-upsells-wrapper simple-upsells-wrapper__alternative "
     data-productid="46">

    <div class="vigo-gift__tooltip" data-productid="46">
        <div class="flex flex--autosize flex--middle">
            <div class="flex__item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.061,12.354a1.5,1.5,0,0,0-2.122,0L13.5,14.793V6a1.5,1.5,0,0,0-3,0v8.793L8.061,12.354a1.5,1.5,0,0,0-2.122,2.121l3.586,3.586a3.5,3.5,0,0,0,4.95,0l3.586-3.586A1.5,1.5,0,0,0,18.061,12.354Z"/></svg></div>
            <div class="flex__item f--bold">  Dodaj v košarico</div>
        </div>
    </div>
    <div class="simple-upsell simple-upsell__alternative "
         data-productid="46">
        <div class="simple-upsell-content">
            <div class="simple-upsell-content--top">

                <div class="vigo-cart__addbtn">
                    <div class="flex__item">
                        <label for="upsell_product_46"
                               class=""></label>
                        <input id="upsell_product_46" type="checkbox"
                               class="checkbox-simple checkbox-simple--green val--bottom" />
                    </div>
                </div>

                <div class="product-upsell-title">
                    <div class="f--m f--bold">Masažni valj za sprostitev napetih stopal</div>
                </div>

                <div class="wrapper_addbtn_price">
                    <div class="price-section">
                        <div class="flex flex--autosize flex--bottom flex--gaps-s">
                            <div class="flex__item f--bold upsell-price-container"><span class="woocommerce-Price-amount amount"><bdi>8,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></div>
                        </div>
                    </div>
                                            <div class="cart-upsell-regular-price">
                            <span class="woocommerce-Price-amount amount"><bdi>42,95<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>                        </div>
                                    </div>

            </div>
            <div class="simple-upsell-content--bottom">
                <div class="product-upsell-img">
                    <img decoding="async" src="https://si.stepease.eu/app/uploads/2025/11/STEPROLL-3831127625707-N-1__191125.jpg"/>
                </div>
                <div class="product_desc_multy product-upsell-desc">
                    Pomaga pri prekrvavitvi in zmanjšuje bolečine v peti.
                    <div class="atc-qty-section">
                        <div class="vigo-cart-upsell-multi__qty">
                            <div class="vigo-cart__item-qty flex__item">
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        </div>
                            </div>
            <div class="col-md-4 col-xs-12 vigo-wc-cart__totals">
                <div class="cart-collaterals">
                    <div class="cart_totals ">

  
  <h2>Skupaj</h2>

  <table cellspacing="0" class="shop_table shop_table_responsive">

    <tr class="cart-subtotal">
      <th>Delni znesek</th>
      <td data-title="Delni znesek"><?php echo $cart_subtotal; ?></td>
    </tr>

    
    
    
    
    
    <div class="vigo-coupon-totals s-top--s s-bottom--s">
          </div>
    <div
      class="flex flex--autosize flex--gaps-s flex--center flex--middle order-total s-top--s">
      <div class="flex__item f--m c--gray">Znesek</div>
      <div class="flex__item f--m"
           data-title="Znesek"><strong><?php wc_cart_totals_order_total_html(); ?></strong>      </div>
    </div>

    
  </table>
  
  <div class="wc-proceed-to-checkout">
    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button button--l alt wc-forward button--block button--green-gradient  btn_bigger_proceed custom-cta-skin" style="background:#ff5b00 !important;color:#ffffff !important;border-color:#ff5b00 !important;box-shadow: 0 2px 0 #ff5b00 !important;">Na blagajno</a>  </div>

  <div class="vigo-cart-modal vigo-cart-modal__alternative bg--white">
    <div class="proceed-to-checkout">
        <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button button--l alt wc-forward button--block button--green-gradient  btn_bigger_proceed custom-cta-skin" style="background:#ff5b00 !important;color:#ffffff !important;border-color:#ff5b00 !important;box-shadow: 0 2px 0 #ff5b00 !important;">Na blagajno</a>                    <span class="trusted-people-count__text">Zaupa nam že 1.000.000 Slovencev.</span>
            </div>
</div>

</div>
<div class="payment-methods border border--top border--light">
    <div class="payment-methods__content">
        <div class="flex flex--wrap flex--autosize flex--center flex--middle">
                            <div class="flex__item footer-payment__badge m-top--xxs m-right--xxs">
                    <img decoding="async" src="https://images.vigo-shop.com/general/payment/visa.svg" alt="Visa">
                </div>
                            <div class="flex__item footer-payment__badge m-top--xxs m-right--xxs">
                    <img decoding="async" src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt="Mastercard">
                </div>
                            <div class="flex__item footer-payment__badge m-top--xxs m-right--xxs">
                    <img decoding="async" src="https://images.vigo-shop.com/general/payment/general_cod_payment_icon.svg" alt="COD">
                </div>
                            <div class="flex__item footer-payment__badge m-top--xxs m-right--xxs">
                    <img decoding="async" src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt="Paypal">
                </div>
                            <div class="flex__item footer-payment__badge m-top--xxs m-right--xxs">
                    <img decoding="async" src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt="Maestro">
                </div>
                    </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>

    <div>
                <button type="submit" class="button hidden" name="update_cart"
                value="Posodobi košarico">Posodobi košarico</button>

        <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                
            </div>
</form>

<div class="content__badge m-top--s m-bottom--s">
    <div class="grid grid--gaps grid--middle">
        <div class="col-xs-12"><img decoding="async" src="https://images.vigo-shop.com/general/secure-payment/SI_90DAYS.svg"></div>
    </div>
</div>

<?php endif; // end if empty ?>

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
            <div class="text_wrapper">
                Hitra dostava            </div>
        </div>

                    <div class="partial_inner_section">
                <img src="https://images.vigo-shop.com/general/banner_icons/COD_icon.svg" alt="">
                <div class="text_wrapper">Plačilo po povzetju</div>
            </div>
                <div class="partial_inner_section delivery-from-eu-warehouse ">
            <img class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/flag-icon-si.svg">
            <div class="text_wrapper delivery-from-eu-warehouse__text">Skladišče v Sloveniji</div>
        </div>
            </div>
</div>
<div class="footer-payment bg--primary-dark c--white ">
    <div class="footer-payment__content container container--l">
        <div class="footer-mobile-payment hiddenOnDesktop">

            <div class="footer-mobile-payment__links">
                <div class="footer-mobile-payment__links-content  s-left--s s-right--s s-bottom--m opened">
                    <div class="footer-main__links">
                        <ul>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/splosni-pogoji-poslovanja/"
                                       class="button button--link c--gray">Splošni pogoji poslovanja</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/varnostna-politika/"
                                       class="button button--link c--gray">Varnostna politika</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/politika-uporabe-piskotkov/"
                                       class="button button--link c--gray">Politika uporabe piškotkov</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/pravica-do-odstopa-od-nakupa/"
                                       class="button button--link c--gray">Pravica do odstopa od nakupa</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/reklamacije-in-pritozbe/"
                                       class="button button--link c--gray">Reklamacije in pritožbe</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/menjava-v-garanciji/"
                                       class="button button--link c--gray">Menjava v garanciji</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/o-podjetju/"
                                       class="button button--link c--gray">O podjetju</a>
                                </li>
                                                            <li>
                                    <a href="https://ortowp.noriks.com/"
                                       class="button button--link c--gray">Navodila za uporabo</a>
                                </li>
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
                    <div class="smdWrapperTag"></div>                                       <div class="flex__item norton-security-logo">
                        <img src="https://images.vigo-shop.com/general/footer/norton_logo.svg">
                    </div>
                                        <div class="flex__item">
                        <div class="flex flex--autosize flex--bottom">
                            <div class="flex__item"><svg viewBox="0 0 13 17" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M10.9107 7.38848H11.6071C12.3761 7.38848 13 8.04356 13 8.85098V14.701C13 15.5084 12.3761 16.1635 11.6071 16.1635H1.39286C0.623884 16.1635 0 15.5084 0 14.701V8.85098C0 8.04356 0.623884 7.38848 1.39286 7.38848H2.08929V5.19473C2.08929 2.64145 4.0683 0.563477 6.5 0.563477C8.9317 0.563477 10.9107 2.64145 10.9107 5.19473V7.38848ZM4.41071 5.19473V7.38848H8.58928V5.19473C8.58928 3.98512 7.65201 3.00098 6.5 3.00098C5.34799 3.00098 4.41071 3.98512 4.41071 5.19473Z" fill="white"/>
            </svg></div>
                            <div
                                class="flex__item f--bold c--gray">100% varen nakup</div>
                        </div>
                        <div
                            class="f--s c--gray">Zavarovano z 256-bitnim šifriranjem</div>
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
                                                <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/visa.svg" alt="Visa">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/mastercard_icon.svg" alt="Mastercard">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/general_cod_payment_icon.svg" alt="COD">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/paypal_icon.svg" alt="Paypal">
                            </div>
                                                    <div class="flex__item flex__item--autosize footer-payment__badge">
                                <img src="https://images.vigo-shop.com/general/payment/maestro-icon.svg" alt="Maestro">
                            </div>
                                        </div>
                            </div>
                    </div>
    </div>
</div>
    <div class="footer-copyright bg--primary-dark c--white">
        <div class="footer-copyright__content">
            <div class="t--center f--s c--gray">Copyright © 2018 - 2026 -  Spletna trgovina Stepease (HS plus d.o.o)</div>
        </div>
    </div>
</footer>
<footer class="footer-mobile">
  </footer>
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
	<div id="contact-info-modal" class="mobile-notice-modal hidden">
    <div class="wrapper">
        <div class='mobile-notice-modal__content'>
                    <div class="modal-close">
                <img id="close_terms_conditions" src="https://images.vigo-shop.com/general/remove.png" alt="Close">
            </div>
            <div class='mobile-notice-modal__head s-all--s'>
                <div class="f--l f--bold c--darkgray">Potrebujete pomoč pri nakupu?</div>
                <div class="f--s c--gray">Za vas smo dosegljivi vsak delovnik od  <strong>08:00 - 16:00</strong>.</div>
            </div>
                <div class="mobile-notice-modal__body">
            <div class="flex flex--vertical">
               
                                    <div class="border border--top border--light"></div>
                    <a class="flex__item t--no-decoration c--text s-all--s"
                       href="viber://chat?number=%2B38651762806">
                        <div class="flex flex--autosize flex--gaps">
                            <div class="flex__item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="7mjeyniv7a"><path data-name="Rectangle 3640" style="fill:none" d="M0 0h16.792v17.952H0z"/></clipPath></defs><path data-name="Path 11936" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#7453fc"/><g data-name="Group 10476"><g data-name="Group 10475" style="clip-path:url(#7mjeyniv7a)" transform="translate(4 3)"><path data-name="Path 11929" d="M9.437 0H7.353C2.681 0 0 2.652 0 7.275v1.34a7.417 7.417 0 0 0 1.84 5.343 5.648 5.648 0 0 0 1.97 1.322v1.934a.741.741 0 0 0 .767.739.772.772 0 0 0 .546-.273c.365-.415 1.064-1.214 1.689-1.936h3.635a6.033 6.033 0 0 0 4.53-1.939 7.765 7.765 0 0 0 1.815-5.335V7.275C16.792 2.72 14.043 0 9.437 0m6.042 8.468c0 3.921-2.253 5.961-5.032 5.961h-3.2a.172.172 0 0 0-.132.061c-.294.346-.683.8-1.075 1.247-.531.611-1.068 1.224-1.379 1.579a.152.152 0 0 1-.115.052.155.155 0 0 1-.156-.156v-3a.176.176 0 0 0-.111-.162 5.8 5.8 0 0 1-.181-.078c-.1-.045-.2-.093-.292-.146-1.493-.819-2.5-2.5-2.5-5.214V7.275c0-3.784 2-5.961 6.04-5.961h2.091c3.912 0 6.042 2.177 6.042 5.961z" style="fill:#fff"/><path data-name="Path 11930" d="m52.194 53.174.149-.186a.94.94 0 0 0-.208-1.367l-1.017-.686a.94.94 0 0 0-1.227.154l-.235.263-.067.077a.232.232 0 0 1-.2.079h-.027a2.225 2.225 0 0 1-1.112-.409 6.464 6.464 0 0 1-1.408-1.408 2.225 2.225 0 0 1-.409-1.112v-.027a.232.232 0 0 1 .078-.2l.077-.067.263-.235a.94.94 0 0 0 .154-1.227l-.686-1.017a.94.94 0 0 0-1.367-.208l-.186.149a1.468 1.468 0 0 0-.427 1.726 11.821 11.821 0 0 0 .959 1.936 11 11 0 0 0 1.417 1.814 12.244 12.244 0 0 0 1.814 1.416 11.813 11.813 0 0 0 1.936.959 1.468 1.468 0 0 0 1.726-.427" transform="translate(-40.284 -41.351)" style="fill:#fff"/><path data-name="Path 11931" d="M90.25 40.225a.219.219 0 0 1 .144-.373 4.27 4.27 0 0 1 3.292 1.221 4.27 4.27 0 0 1 1.221 3.292.219.219 0 1 1-.437-.023 3.772 3.772 0 0 0-4.053-4.053.218.218 0 0 1-.166-.064" transform="translate(-82.153 -36.296)" style="fill:#fff"/><path data-name="Path 11932" d="M97.2 55.473a.218.218 0 0 1-.064-.168 2.361 2.361 0 0 0-2.573-2.573.219.219 0 0 1-.027-.437 2.8 2.8 0 0 1 3.037 3.037.219.219 0 0 1-.373.141" transform="translate(-85.93 -47.631)" style="fill:#fff"/><path data-name="Path 11933" d="M100.392 66.657a.218.218 0 0 1-.064-.168.932.932 0 0 0-1.019-1.019.219.219 0 1 1-.027-.437 1.369 1.369 0 0 1 1.483 1.483.219.219 0 0 1-.373.141" transform="translate(-90.251 -59.237)" style="fill:#fff"/></g></g></svg></div>
                            <div
                                class="flex__item desktop_contact desktop_viber_contact">Pošljite nam sporočilo na <strong>Viber</strong></div>
                            <div class="flex__item mobile_contact mobile_viber_contact">
                                <strong>Viber</strong></div>
                        </div>
                    </a>
                                                                                                <div class="border border--top border--light"></div>
                <a class="flex__item t--no-decoration c--text s-all--s" href="mailto:info@stepease.eu">
                    <div class="flex flex--autosize flex--gaps">
                        <div class="flex__item"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                        <div
                            class="flex__item"><strong>info@stepease.eu</strong></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
    </div>

<?php wp_footer(); ?>
<script>
jQuery(function($) {

    // ── Bug fix 1: Upsell re-add ──
    // Use event delegation so handlers survive WC AJAX cart updates
    var upsellAdding = false;

    function initUpsellState() {
        <?php
        $in_cart = false;
        foreach (WC()->cart->get_cart() as $item) {
            if ($item['product_id'] == 46) { $in_cart = true; break; }
        }
        if ($in_cart) echo '$("#upsell_product_46").prop("checked", true); $(".simple-upsells-wrapper").addClass("upsell-in-cart").css("opacity","0.6");';
        ?>
    }
    initUpsellState();

    $(document.body).on('click', '.simple-upsells-wrapper', function(e) {
        if (upsellAdding) return;
        var $cb = $('#upsell_product_46');
        if ($cb.is(':checked')) return; // already in cart
        upsellAdding = true;
        $cb.prop('checked', true);
        $(this).css('opacity', '0.5');

        $.post('<?php echo admin_url("admin-ajax.php"); ?>', {
            action: 'ortostep_add_to_cart',
            product_id: 46,
            quantity: 1
        }, function(resp) {
            window.location.reload();
        }).fail(function() {
            window.location.href = '<?php echo esc_url(home_url("/?add-to-cart=46")); ?>';
        });
    });

    // After WC AJAX removes an item, reset upsell state so it can be re-added
    $(document.body).on('removed_from_cart updated_cart_totals', function() {
        upsellAdding = false;
        // Re-check if product 46 is still in cart by looking at DOM
        var still = false;
        $('.cart_item .product-remove .remove').each(function() {
            if ($(this).data('product_id') == 46) still = true;
        });
        if (!still) {
            $('#upsell_product_46').prop('checked', false);
            $('.simple-upsells-wrapper').removeClass('upsell-in-cart').css('opacity', '1');
        }
    });

    // ── Bug fix 2: Quantity change ──
    // When quantity select changes, trigger the hidden "update cart" button
    $(document.body).on('change', '.woocommerce-cart-form .qty', function() {
        $('button[name="update_cart"]').removeClass('hidden').trigger('click');
    });

});
</script>
</body>
</html>
