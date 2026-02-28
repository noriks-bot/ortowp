<?php
/**
 * Template for Checkout page (page-checkout.php)
 * Pixel-perfect header/footer from si.stepease.eu with WooCommerce checkout functionality
 */


function se_checkout_enqueue_page_styles() {
    $css_dir = get_template_directory_uri() . '/assets/css/';
    $css_files = array(
        'select2', 'brands', 'hsplus-child', 'app', 'swiper.min', 'stepease',
        'agent-kc', 'cart-dynamic-offer', 'cart-general', 'cart-upsell',
        'checkout-extra-triggers', 'cookie-consent',
        'custom-payment-notice', 'header', 'hide-payments-test-product',
        'general-shop-elements', 'lazy-load', 'lottery-ticket',
        'product-page-courier-info', 'woo-fixes', 'sv-wc-payment-form',
        'wc-braintree.min', 'video-in-product-gallery',
        'abandoned-cart-restore-addons', 'cart-item-restore',
        'coupon-banner', 'custom-cta-settings',
        'free-shipping-above-quantity', 'loader',
        'notice-test-product-only', 'relation-popup-upsell',
        'virtual-products', 'quantity-discount-price', 'hsplus-public'
    );
    foreach ($css_files as $name) {
        wp_enqueue_style("se-{$name}", $css_dir . "{$name}.css", array(), '1.0');
    }
}

add_action('wp_enqueue_scripts', 'se_checkout_enqueue_page_styles', 20);
?><!DOCTYPE html>
<html lang="sl-SI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Blagajna - Ortowp</title>
    <?php wp_head(); ?>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
<style>
    .vigo-topbar-mobile__icons {
        gap: 14px;
    }
    .open-contact-info-modal-container {
        display: none;
    }
</style>
</head>
<body class="wp-singular page-template page-template-template-fullwidth page-template-template-fullwidth-php page page-id-7 wp-theme-hsplus wp-child-theme-hsplus-child theme-vigoshop theme-hsplus woocommerce-checkout woocommerce-page woocommerce-no-js brand-stepease brand-general" data-hswooplus="10.3.7"  >



<header class='vigo-header vigo-header--mobile s-bottom--s s-top--s'>
  <div class="vigo-topbar-mobile s-left--s s-right--s">
  <div class='flex flex--middle flex--apart flex--wrap'>
    <div class="flex__item">
      <div class="flex flex--middle flex--autosize flex--gaps">
<!--        --><!--          <div class="flex__item vigo-topbar-mobile__burger">-->
<!--          --><!--         </div>-->
<!--      -->        
        <div class="flex__item vigo-topbar-mobile__logo">
          <a href='https://ortowp.noriks.com/'>
      <img src="https://images.vigo-shop.com/general/header/stepease_header_logo.svg" alt="Logo">
</a>
        </div>
      </div>
    </div>
    <div
      class="flex__item flex grid--middle vigo-topbar-mobile__icons added_to_cart_notice_wrapper">

      
      <!-- TEST ALL-12716 - Add Call & Chat Icons for contacting support -->
      <!-- We can bring this back if we dont keep call& chat icons from task ALL-12716 -->
<!--      --><!---->
<!--        <div class="--><!--">-->
<!--          <a class="vigo-topbar__waIcon-mobile t--no-decoration"-->
<!--             href="https://api.whatsapp.com/send?phone=--><!--">-->
<!--            --><!--          </a>-->
<!--        </div>-->
<!--      -->
      <!-- TEST ALL-12716 - Add Call & Chat Icons for contacting support -->
      <style>
    .vigo-topbar-mobile__icons {
        gap: 14px;
    }
    .open-contact-info-modal-container {
        display: none;
    }
</style>
<div>
    <p class="txt-topbar-mobile" style="font-size:12px;">
        Za naročilo:    </p>
</div>
<div>
    <a href="tel:+386-828-03747">
        <button id="contact-support-phone-icon" class="button button--link"><svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.872" height="20" viewBox="0 0 19.872 20">
                              <defs>
                                <clipPath id="clip-path">
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="19.872" height="20" fill="#99a0a7"/>
                                </clipPath>
                              </defs>
                              <g id="Group_1" data-name="Group 1" clip-path="url(#clip-path)">
                                <path id="Path_1" data-name="Path 1" d="M2.423.339a5.394,5.394,0,0,0-2.4,3.6,2.2,2.2,0,0,0,.028.77c1.392,6.5,8.5,13.6,14.615,15.151a4.345,4.345,0,0,0,2.821-.211,4.093,4.093,0,0,0,2.332-2.878A1.627,1.627,0,0,0,19.4,15.2a12.506,12.506,0,0,0-3.746-2.29,1.619,1.619,0,0,0-1.889.445q-.367.437-.7.815a1.25,1.25,0,0,1-1.458.3C9.073,13.3,6.131,10.23,5.366,8.057a.887.887,0,0,1,.266-.979A5.85,5.85,0,0,0,7,5.462a.693.693,0,0,0,.075-.5A11.191,11.191,0,0,0,4.87.7,1.77,1.77,0,0,0,2.423.339" transform="translate(0 0)" fill="#99a0a7"/>
                                <path id="Path_2" data-name="Path 2" d="M345.06,171.027a.49.49,0,0,1-.486-.426,4.9,4.9,0,0,0-3.988-4.19.49.49,0,1,1,.176-.965,5.9,5.9,0,0,1,4.784,5.027.491.491,0,0,1-.487.554" transform="translate(-330.651 -160.802)" fill="#99a0a7"/>
                                <path id="Path_3" data-name="Path 3" d="M321.257,99.041a.491.491,0,0,1-.489-.456,6.89,6.89,0,0,0-6.681-6.421.49.49,0,1,1,.03-.98,7.9,7.9,0,0,1,7.629,7.333.49.49,0,0,1-.455.524h-.035" transform="translate(-304.823 -88.628)" fill="#99a0a7"/>
                                <path id="Path_4" data-name="Path 4" d="M333.645,21.152a.491.491,0,0,1-.489-.461A9.157,9.157,0,0,0,324.5,12.1a.49.49,0,1,1,.052-.979,10.152,10.152,0,0,1,9.58,9.508.49.49,0,0,1-.459.519h-.03" transform="translate(-314.957 -10.811)" fill="#99a0a7"/>
                              </g>
                            </svg></button>
    </a>
</div>
    <a href="viber://chat?number=%2B38651762806">
        <button id="contact-support-phone-icon" class="button button--link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="7mjeyniv7a"><path data-name="Rectangle 3640" style="fill:none" d="M0 0h16.792v17.952H0z"/></clipPath></defs><path data-name="Path 11936" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#7453fc"/><g data-name="Group 10476"><g data-name="Group 10475" style="clip-path:url(#7mjeyniv7a)" transform="translate(4 3)"><path data-name="Path 11929" d="M9.437 0H7.353C2.681 0 0 2.652 0 7.275v1.34a7.417 7.417 0 0 0 1.84 5.343 5.648 5.648 0 0 0 1.97 1.322v1.934a.741.741 0 0 0 .767.739.772.772 0 0 0 .546-.273c.365-.415 1.064-1.214 1.689-1.936h3.635a6.033 6.033 0 0 0 4.53-1.939 7.765 7.765 0 0 0 1.815-5.335V7.275C16.792 2.72 14.043 0 9.437 0m6.042 8.468c0 3.921-2.253 5.961-5.032 5.961h-3.2a.172.172 0 0 0-.132.061c-.294.346-.683.8-1.075 1.247-.531.611-1.068 1.224-1.379 1.579a.152.152 0 0 1-.115.052.155.155 0 0 1-.156-.156v-3a.176.176 0 0 0-.111-.162 5.8 5.8 0 0 1-.181-.078c-.1-.045-.2-.093-.292-.146-1.493-.819-2.5-2.5-2.5-5.214V7.275c0-3.784 2-5.961 6.04-5.961h2.091c3.912 0 6.042 2.177 6.042 5.961z" style="fill:#fff"/><path data-name="Path 11930" d="m52.194 53.174.149-.186a.94.94 0 0 0-.208-1.367l-1.017-.686a.94.94 0 0 0-1.227.154l-.235.263-.067.077a.232.232 0 0 1-.2.079h-.027a2.225 2.225 0 0 1-1.112-.409 6.464 6.464 0 0 1-1.408-1.408 2.225 2.225 0 0 1-.409-1.112v-.027a.232.232 0 0 1 .078-.2l.077-.067.263-.235a.94.94 0 0 0 .154-1.227l-.686-1.017a.94.94 0 0 0-1.367-.208l-.186.149a1.468 1.468 0 0 0-.427 1.726 11.821 11.821 0 0 0 .959 1.936 11 11 0 0 0 1.417 1.814 12.244 12.244 0 0 0 1.814 1.416 11.813 11.813 0 0 0 1.936.959 1.468 1.468 0 0 0 1.726-.427" transform="translate(-40.284 -41.351)" style="fill:#fff"/><path data-name="Path 11931" d="M90.25 40.225a.219.219 0 0 1 .144-.373 4.27 4.27 0 0 1 3.292 1.221 4.27 4.27 0 0 1 1.221 3.292.219.219 0 1 1-.437-.023 3.772 3.772 0 0 0-4.053-4.053.218.218 0 0 1-.166-.064" transform="translate(-82.153 -36.296)" style="fill:#fff"/><path data-name="Path 11932" d="M97.2 55.473a.218.218 0 0 1-.064-.168 2.361 2.361 0 0 0-2.573-2.573.219.219 0 0 1-.027-.437 2.8 2.8 0 0 1 3.037 3.037.219.219 0 0 1-.373.141" transform="translate(-85.93 -47.631)" style="fill:#fff"/><path data-name="Path 11933" d="M100.392 66.657a.218.218 0 0 1-.064-.168.932.932 0 0 0-1.019-1.019.219.219 0 1 1-.027-.437 1.369 1.369 0 0 1 1.483 1.483.219.219 0 0 1-.373.141" transform="translate(-90.251 -59.237)" style="fill:#fff"/></g></g></svg></button>
    </a>

      <div class='open-contact-info-modal-container col-xs-4'>
        <button id="open-contact-info-modal-mobile" class="button button--link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path data-name="Path 11896" d="M22.932 17.143a12.293 12.293 0 0 0-7.175-2.535 14.145 14.145 0 0 0-2.17 2.713 12.279 12.279 0 0 1-4.294-3.331 12.372 12.372 0 0 1-3.047-4.515A14.03 14.03 0 0 0 9.06 7.451 12.522 12.522 0 0 0 6.97.083 13.3 13.3 0 0 0 .189 1.114c-.612 2.917-.019 8.91 6.126 15.707 6.373 6.581 12.273 7.53 15.2 7.085a13.583 13.583 0 0 0 1.418-6.763"/>
    <path data-name="Path 11897" d="M43.949 1.458h-7.887a2.132 2.132 0 0 0-2.129 2.129v4.865a2.132 2.132 0 0 0 1.861 2.113v2.12a.426.426 0 0 0 .727.3l2.4-2.4h5.023a2.132 2.132 0 0 0 2.129-2.129V3.587a2.132 2.132 0 0 0-2.129-2.129m-.51 6.3h-6.862a.476.476 0 0 1 0-.953h6.867a.476.476 0 0 1 0 .953m0-2.6h-6.867a.476.476 0 0 1 0-.953h6.867a.476.476 0 0 1 0 .953" transform="translate(-22.079 -.948)"/>
</svg></button>
      </div>
      
              <!-- Search Toggle Button -->
        <div class='col-xs-4'>
          <button id="mobile-search-toggle-btn" class="button button--link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.9,16.776A10.539,10.539,0,1,0,16.776,18.9l5.1,5.1L24,21.88ZM10.5,18A7.5,7.5,0,1,1,18,10.5,7.507,7.507,0,0,1,10.5,18Z"/></svg></button>
        </div>
      
      <!-- Mini Cart -->
      <div class='col-xs-4'>
        <a class='mini-cart mini-cart__animation  mini-cart-total--desktop   cart-empty' href="https://ortowp.noriks.com/cart/">
    <div class="flex flex--middle flex--apart flex--gaps-s">
        <div class="flex__item">
            <div class="mini-cart__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077Z"/>
                    <circle cx="7" cy="22" r="2"/>
                    <circle cx="17" cy="22" r="2"/>
                </svg>                <div class="mini-cart__counter">
                    <span class="mini-cart__items-count" id="mini-cart-count">
                        0                    </span>
                </div>
            </div>
        </div>
        <div class="flex__item mini-cart__total-wrap">
            <div class="mini-cart__total"><span class="woocommerce-Price-amount amount"><bdi>0,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></div>
        </div>
        <div class="flex__item">
            <div class="mini-cart__arrow ">
                            </div>
        </div>
    </div>
</a>
      </div>

          </div>
      </div>
  <div class="vigo--topbar__search vigo--topbar__search--mobile m-top--s hidden" id="vigo-topbar-search-mobile">
    <!--- SEARCH -->
<form role="search" method="get" action="https://ortowp.noriks.com/" class="flex flex--middle flex--autosize">
    <div class="flex__item flex__item--double">
        <input
            type="search"
            value=""
            name="s"
            placeholder="Išči med izdelki"
            class="form-input form-input--search"
            autocomplete="off"
        >
        <input type="hidden" name="post_type" value="product">
    </div>
    <div class="flex__item">
        <button type="submit" class="button button--s button--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.9,16.776A10.539,10.539,0,1,0,16.776,18.9l5.1,5.1L24,21.88ZM10.5,18A7.5,7.5,0,1,1,18,10.5,7.507,7.507,0,0,1,10.5,18Z"/></svg>        </button>
    </div>
</form>  </div>
</div>
</header>
<header
  class='vigo-header s-top--m s-bottom--m'>
  <div class='vigo-topbar container container--l'>
  <div class='flex flex--middle flex--autosize flex--gutter added_to_cart_notice_wrapper'>
    <div class='flex__item vigo-topbar__logo'>
      <a href='https://ortowp.noriks.com/'>
      <img src="https://images.vigo-shop.com/general/header/stepease_header_logo.svg" alt="Logo">
</a>
    </div>
    <div class="vigo-topbar__category_links">
          </div>
    <div class='flex__item flex__item--double vigo--topbar__search'>
      <!--- SEARCH -->
<form role="search" method="get" action="https://ortowp.noriks.com/" class="flex flex--middle flex--autosize">
    <div class="flex__item flex__item--double">
        <input
            type="search"
            value=""
            name="s"
            placeholder="Išči med izdelki"
            class="form-input form-input--search"
            autocomplete="off"
        >
        <input type="hidden" name="post_type" value="product">
    </div>
    <div class="flex__item">
        <button type="submit" class="button button--s button--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.9,16.776A10.539,10.539,0,1,0,16.776,18.9l5.1,5.1L24,21.88ZM10.5,18A7.5,7.5,0,1,1,18,10.5,7.507,7.507,0,0,1,10.5,18Z"/></svg>        </button>
    </div>
</form>
    </div>
    <div class='flex__item vigo-topbar__info'>
      
    <div class="border border--top border--light"></div>
    <a class="flex__item t--no-decoration c--text s-all--s"
       href="viber://chat?number=%2B38651762806">
        <div class="flex flex--autosize flex--gaps">
            <div class="flex__item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="7mjeyniv7a"><path data-name="Rectangle 3640" style="fill:none" d="M0 0h16.792v17.952H0z"/></clipPath></defs><path data-name="Path 11936" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#7453fc"/><g data-name="Group 10476"><g data-name="Group 10475" style="clip-path:url(#7mjeyniv7a)" transform="translate(4 3)"><path data-name="Path 11929" d="M9.437 0H7.353C2.681 0 0 2.652 0 7.275v1.34a7.417 7.417 0 0 0 1.84 5.343 5.648 5.648 0 0 0 1.97 1.322v1.934a.741.741 0 0 0 .767.739.772.772 0 0 0 .546-.273c.365-.415 1.064-1.214 1.689-1.936h3.635a6.033 6.033 0 0 0 4.53-1.939 7.765 7.765 0 0 0 1.815-5.335V7.275C16.792 2.72 14.043 0 9.437 0m6.042 8.468c0 3.921-2.253 5.961-5.032 5.961h-3.2a.172.172 0 0 0-.132.061c-.294.346-.683.8-1.075 1.247-.531.611-1.068 1.224-1.379 1.579a.152.152 0 0 1-.115.052.155.155 0 0 1-.156-.156v-3a.176.176 0 0 0-.111-.162 5.8 5.8 0 0 1-.181-.078c-.1-.045-.2-.093-.292-.146-1.493-.819-2.5-2.5-2.5-5.214V7.275c0-3.784 2-5.961 6.04-5.961h2.091c3.912 0 6.042 2.177 6.042 5.961z" style="fill:#fff"/><path data-name="Path 11930" d="m52.194 53.174.149-.186a.94.94 0 0 0-.208-1.367l-1.017-.686a.94.94 0 0 0-1.227.154l-.235.263-.067.077a.232.232 0 0 1-.2.079h-.027a2.225 2.225 0 0 1-1.112-.409 6.464 6.464 0 0 1-1.408-1.408 2.225 2.225 0 0 1-.409-1.112v-.027a.232.232 0 0 1 .078-.2l.077-.067.263-.235a.94.94 0 0 0 .154-1.227l-.686-1.017a.94.94 0 0 0-1.367-.208l-.186.149a1.468 1.468 0 0 0-.427 1.726 11.821 11.821 0 0 0 .959 1.936 11 11 0 0 0 1.417 1.814 12.244 12.244 0 0 0 1.814 1.416 11.813 11.813 0 0 0 1.936.959 1.468 1.468 0 0 0 1.726-.427" transform="translate(-40.284 -41.351)" style="fill:#fff"/><path data-name="Path 11931" d="M90.25 40.225a.219.219 0 0 1 .144-.373 4.27 4.27 0 0 1 3.292 1.221 4.27 4.27 0 0 1 1.221 3.292.219.219 0 1 1-.437-.023 3.772 3.772 0 0 0-4.053-4.053.218.218 0 0 1-.166-.064" transform="translate(-82.153 -36.296)" style="fill:#fff"/><path data-name="Path 11932" d="M97.2 55.473a.218.218 0 0 1-.064-.168 2.361 2.361 0 0 0-2.573-2.573.219.219 0 0 1-.027-.437 2.8 2.8 0 0 1 3.037 3.037.219.219 0 0 1-.373.141" transform="translate(-85.93 -47.631)" style="fill:#fff"/><path data-name="Path 11933" d="M100.392 66.657a.218.218 0 0 1-.064-.168.932.932 0 0 0-1.019-1.019.219.219 0 1 1-.027-.437 1.369 1.369 0 0 1 1.483 1.483.219.219 0 0 1-.373.141" transform="translate(-90.251 -59.237)" style="fill:#fff"/></g></g></svg></div>
        </div>
    </a>
<!--                ALL-14367 Remove contact support icon-->
<!--    <div class="vigo-topbar__info-icon vigo-topbar__info-support s-right--xs">-->
<!--        <a class="vigo-topbar__info-support" href="--><!--" class="footer-main__social-link button button--plain">-->
<!--            <div class="support_icon">--><!--</div>-->
<!--            <div class="support_text">--><!--</div>-->
<!---->
<!--        </a>-->
<!--    </div>-->

    </div>
    <div
      class='flex__item vigo-topbar__cart flex flex--middle flex--center bg--secondary '>
      <a class='mini-cart mini-cart__animation  mini-cart-total--desktop   cart-empty' href="https://ortowp.noriks.com/cart/">
    <div class="flex flex--middle flex--apart flex--gaps-s">
        <div class="flex__item">
            <div class="mini-cart__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077Z"/>
                    <circle cx="7" cy="22" r="2"/>
                    <circle cx="17" cy="22" r="2"/>
                </svg>                <div class="mini-cart__counter">
                    <span class="mini-cart__items-count" id="mini-cart-count">
                        0                    </span>
                </div>
            </div>
        </div>
        <div class="flex__item mini-cart__total-wrap">
            <div class="mini-cart__total"><span class="woocommerce-Price-amount amount"><bdi>0,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></div>
        </div>
        <div class="flex__item">
            <div class="mini-cart__arrow ">
                            </div>
        </div>
    </div>
</a>
    </div>
      </div>
  </div>

<div class="container container--l vigo-menu-wrap">
  <div class="flex flex--autosize flex--middle">
        <div class="flex__item container--l">
      <div class="category_banner_wrapper">
              </div>

    </div>

  </div>
</div>
</header>
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

<main id="content" class="main">
        <div class="container container--l checkout-container">
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
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
<div class="footer-main bg--primary c--white">
    <div class="footer-main__content container container--l">
                <div class="flex flex--autosize flex--apart footer-wrapper">
            <div class="flex__item footer-main__item footer-main__item--nav footer-main__logo_flex_item ">
                <div class="footer-main__logo">
                    <a href='https://ortowp.noriks.com/'>
      <img src="https://images.vigo-shop.com/general/header/stepease_header_logo.svg" alt="Logo">
</a>
                </div>
                            </div>
            <div class="flex__item footer-main__item footer-main__item--social">
                                    <div class="f--m c--lightgray footer-main__social-title">Potrebujete pomoč pri nakupu?</div>
                    <div
                        class="f--s c--gray m-bottom--s footer-main__social-subtitle">Za vas smo dosegljivi vsak delovnik od  <strong>08:00 - 16:00</strong>.</div>
                                                    <a href="viber://chat?number=%2B38651762806"
                       class="footer-main__social-link button button--plain">
                        <div class="footer-main__social bg--secondary flex flex--autosize flex--middle flex--gaps">
                            <div class="footer-main__social-icon flex__item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="7mjeyniv7a"><path data-name="Rectangle 3640" style="fill:none" d="M0 0h16.792v17.952H0z"/></clipPath></defs><path data-name="Path 11936" d="M4 0h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" style="fill:#7453fc"/><g data-name="Group 10476"><g data-name="Group 10475" style="clip-path:url(#7mjeyniv7a)" transform="translate(4 3)"><path data-name="Path 11929" d="M9.437 0H7.353C2.681 0 0 2.652 0 7.275v1.34a7.417 7.417 0 0 0 1.84 5.343 5.648 5.648 0 0 0 1.97 1.322v1.934a.741.741 0 0 0 .767.739.772.772 0 0 0 .546-.273c.365-.415 1.064-1.214 1.689-1.936h3.635a6.033 6.033 0 0 0 4.53-1.939 7.765 7.765 0 0 0 1.815-5.335V7.275C16.792 2.72 14.043 0 9.437 0m6.042 8.468c0 3.921-2.253 5.961-5.032 5.961h-3.2a.172.172 0 0 0-.132.061c-.294.346-.683.8-1.075 1.247-.531.611-1.068 1.224-1.379 1.579a.152.152 0 0 1-.115.052.155.155 0 0 1-.156-.156v-3a.176.176 0 0 0-.111-.162 5.8 5.8 0 0 1-.181-.078c-.1-.045-.2-.093-.292-.146-1.493-.819-2.5-2.5-2.5-5.214V7.275c0-3.784 2-5.961 6.04-5.961h2.091c3.912 0 6.042 2.177 6.042 5.961z" style="fill:#fff"/><path data-name="Path 11930" d="m52.194 53.174.149-.186a.94.94 0 0 0-.208-1.367l-1.017-.686a.94.94 0 0 0-1.227.154l-.235.263-.067.077a.232.232 0 0 1-.2.079h-.027a2.225 2.225 0 0 1-1.112-.409 6.464 6.464 0 0 1-1.408-1.408 2.225 2.225 0 0 1-.409-1.112v-.027a.232.232 0 0 1 .078-.2l.077-.067.263-.235a.94.94 0 0 0 .154-1.227l-.686-1.017a.94.94 0 0 0-1.367-.208l-.186.149a1.468 1.468 0 0 0-.427 1.726 11.821 11.821 0 0 0 .959 1.936 11 11 0 0 0 1.417 1.814 12.244 12.244 0 0 0 1.814 1.416 11.813 11.813 0 0 0 1.936.959 1.468 1.468 0 0 0 1.726-.427" transform="translate(-40.284 -41.351)" style="fill:#fff"/><path data-name="Path 11931" d="M90.25 40.225a.219.219 0 0 1 .144-.373 4.27 4.27 0 0 1 3.292 1.221 4.27 4.27 0 0 1 1.221 3.292.219.219 0 1 1-.437-.023 3.772 3.772 0 0 0-4.053-4.053.218.218 0 0 1-.166-.064" transform="translate(-82.153 -36.296)" style="fill:#fff"/><path data-name="Path 11932" d="M97.2 55.473a.218.218 0 0 1-.064-.168 2.361 2.361 0 0 0-2.573-2.573.219.219 0 0 1-.027-.437 2.8 2.8 0 0 1 3.037 3.037.219.219 0 0 1-.373.141" transform="translate(-85.93 -47.631)" style="fill:#fff"/><path data-name="Path 11933" d="M100.392 66.657a.218.218 0 0 1-.064-.168.932.932 0 0 0-1.019-1.019.219.219 0 1 1-.027-.437 1.369 1.369 0 0 1 1.483 1.483.219.219 0 0 1-.373.141" transform="translate(-90.251 -59.237)" style="fill:#fff"/></g></g></svg></div>
                            <div class="footer-main__social-text flex__item desktop_contact desktop_viber_contact">Pošljite nam sporočilo na <strong>Viber</strong></div>
                            <div class="footer-main__social-text flex__item mobile_contact mobile_viber_contact"><strong>Viber</strong></div>
                        </div>
                    </a>
                                                                <!--                -->                                    <a href="/cdn-cgi/l/email-protection#1871767e77586b71366b6c7d687d796b7d367d6d" class="footer-main__social-link button button--plain">
                        <div class="footer-main__social bg--secondary flex flex--middle flex--gaps">
                            <div class="footer-main__social-icon flex__item flex__item--autosize"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                            <div class="footer-main__social-text flex__item email-padding-top">Pošljite e-pošto na naslov: <span class="email-padding-top"><strong><span class="__cf_email__" data-cfemail="c6afa8a0a986b5afe8b5b2a3b6a3a7b5a3e8a3b3">[email&#160;protected]</span></strong><span></div>
                        </div>
                    </a>
                <!--                --><!--                    <a href="--><!--" class="footer-main__social-link footer-main__support button button--plain">-->
<!--                        <div class="footer-main__social bg--secondary flex flex--middle flex--gaps">-->
<!--                            <div class="footer-main__social-icon flex__item flex__item--autosize">--><!--</div>-->
<!--                            <div class="footer-main__social-text flex__item email-padding-top">--><!--</div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                -->            </div>
                        <div class="footer-payment__top footer-payment__top--mobile hiddenOnDesktop s-top--m">
                <a class="button button--link" id="scroll-to-top">
                    <div class="flex flex--autosize flex--middle flex--center">
                        <div class="flex__item back-top-icon"><svg viewBox="0 0 17 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M15.8654 2.30769H1.05769C0.473758 2.30769 0 1.79119 0 1.15409C0 0.516985 0.473758 0 1.05769 0H15.8654C16.4515 0 16.9231 0.516504 16.9231 1.15361C16.9231 1.79071 16.4493 2.30769 15.8654 2.30769ZM7.36833 8.30031L3.42706 12.3225C3.01302 12.7461 2.32115 12.7636 1.88252 12.3662C1.44298 11.9687 1.42157 11.3049 1.83561 10.8813L7.66581 4.93316C8.07847 4.50946 8.8445 4.50946 9.25726 4.93316L15.0874 10.8813C15.5014 11.3036 15.4803 11.968 15.0405 12.3644C14.8296 12.5557 14.5606 12.65 14.2916 12.65C14.0001 12.65 13.7132 12.5408 13.4959 12.3203L9.55464 8.30031V18.9501C9.55464 19.5297 9.06272 20 8.46149 20C7.86025 20 7.36833 19.5283 7.36833 18.9475V8.30031Z" /></svg></div>
                        <div class="flex__item f--m c--lightgray scroll-to-top-text">Nazaj na vrh</div>
                    </div>
                </a>
            </div>
                        <div class="flex__item footer-main__item footer-main__item--links hiddenOnMobile">
                <div class="footer-main__links">
                    <div class="f--m c--lightgray m-bottom--s">Koristne informacije</div>
                    <ul>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/splosni-pogoji-poslovanja/"
                                   class="button button--link c--gray">Splošni pogoji poslovanja</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/varnostna-politika/"
                                   class="button button--link c--gray">Varnostna politika</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/politika-uporabe-piskotkov/"
                                   class="button button--link c--gray">Politika uporabe piškotkov</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/pravica-do-odstopa-od-nakupa/"
                                   class="button button--link c--gray">Pravica do odstopa od nakupa</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/reklamacije-in-pritozbe/"
                                   class="button button--link c--gray">Reklamacije in pritožbe</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/menjava-v-garanciji/"
                                   class="button button--link c--gray">Menjava v garanciji</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/o-podjetju/"
                                   class="button button--link c--gray">O podjetju</a>
                            </li>
                                                    <li class="o-5">
                                <a href="https://ortowp.noriks.com/"
                                   class="button button--link c--gray">Navodila za uporabo</a>
                            </li>
                                            </ul>
                </div>
            </div>
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
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>var DataLayerOutput = {"event":"pageLoaded","cartContent":{"totals":{"subtotal":0,"subtotal_tax":0,"shipping_total":0,"shipping_tax":0,"discount_total":0,"discount_tax":0,"cart_contents_total":0,"cart_contents_tax":0,"fee_total":0,"fee_tax":0,"total":0,"total_tax":0,"total_with_tax":0,"currency":"EUR","applied_coupons":[]},"quantity_sum":0,"productSKUs":[],"productSKU_IDs":[],"categories":[]},"PageType":"unknown","ecomm_pagetype":"unknown","postID":false,"userLoggedIn":false,"ecommerce":{"currencyCode":"EUR"}}; window.dataLayer.push(DataLayerOutput)</script>  <script>
    (function ($) {
      'use strict';
      $('.single_add_to_cart_button').on('click', function () {
        $(this).removeClass('wc-variation-is-unavailable')
      });
    })(jQuery);
  </script>
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp\/wp-*.php","\/wp\/wp-admin\/*","\/app\/uploads\/*","\/app\/*","\/app\/plugins\/*","\/app\/themes\/hsplus-child\/*","\/app\/themes\/hsplus\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
        <script>
            window.dataLayer.push({
                'fb_userId_PageView': 'PageView_69a340bb4e9e31.56335197',
            })
        </script>
        <script>var additionalData = [];</script>	<script type='text/javascript'>
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
                                                                                <!--                ALL-14367 Remove contact support icon-->
<!--                -->                                <div class="border border--top border--light"></div>
                <a class="flex__item t--no-decoration c--text s-all--s" href="/cdn-cgi/l/email-protection#f59c9b939ab5869cdb8681908590948690db9080">
                    <div class="flex flex--autosize flex--gaps">
                        <div class="flex__item"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                        <div
                            class="flex__item"><strong><span class="__cf_email__" data-cfemail="7a13141c153a091354090e1f0a1f1b091f541f0f">[email&#160;protected]</span></strong></div>
                    </div>
                </a>
            </div>
                        <!--                ALL-14367 Remove contact support icon-->
<!--            --><!--            <div class="border border--top border--light"></div>-->
<!--            <a class="flex__item t--no-decoration c--text s-all--s" href="--><!--">-->
<!--                <div class="flex flex--autosize flex--gaps">-->
<!--                    <div class="flex__item">--><!--</div>-->
<!--                    <div-->
<!--                        class="flex__item">--><!--</div>-->
<!--                </div>-->
<!--            </a>-->
        </div>
<!--    -->    </div>
</div>
    </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
            jQuery(document).ready(function ($) {
                let hideDescription = null;
                if (hideDescription) {
                    $(".woocommerce-variation-description").hide();
                    $(document).on("found_variation", "form.variations_form", function () {
                        $(".woocommerce-variation-description").hide();
                    });
                }
            });
        </script>
        <script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/image-lazy-load/js/vendor/intersection-observer-0670097fc8.min.js" id="lazyload-intersection-js"></script>
<script type="text/javascript" id="lazyload-js-before">
/* <![CDATA[ */
        window.lazyLoadOptions = {
            elements_selector: ".lazy-img",
        };
        window.addEventListener(
            // Listen to the initialization event and get the instance of LazyLoad
            "LazyLoad::Initialized",
            function (event) {
                window.lazyLoadInstance = event.detail.instance;
            },
            false
        );
         // Refresh lazy load on cart fragments update
        (function($){
            $(document.body).on( "wc_fragment_refresh updated_wc_div", function() {
                lazyLoadInstance.update();
            });
        })(jQuery);
    
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/image-lazy-load/js/vendor/lazyload-bb7d7de007.min.js" id="lazyload-js"></script>
<script type="text/javascript" id="hsp-helper-script-js-extra">
/* <![CDATA[ */
var hsp_helper_data = [{"cookie":"wp_hsplus_buffer_session","query":"wphsp_session"}];
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/mk-abandoned/public/js/hsplus-helper.min.js" id="hsp-helper-script-js"></script>
<script type="text/javascript" id="app-js-extra">
/* <![CDATA[ */
var vigoshop = {"siteUrl":"https:\/\/ortowp.noriks.com\/","productDuplicatedMessage":"Zaradi velikega povpra\u0161evanja zaloge hitro zmanjkuje!","adminUrl":"https:\/\/ortowp.noriks.com\/wp\/wp-admin\/admin-ajax.php"};
var special_offer_code = {"shouldDisplayCode":""};
var paginationSettings = {"loadMoreType":"infinite_scroll","loadQuantity":"16","initNumberOfProducts":"16","batchLoadQuantity":"3","isWPPage":"","isHomePage":"","isCategoryPage":"","showSpecificCategory":"","totalProducts":"6"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/themes/hsplus/dist/app-0df85dd4e7.js" id="app-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/themes/hsplus/assets/plugins/uFuzzy/uFuzzy.iife.min.js" id="ufuzzy-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce/assets/js/select2/select2.full.min.js" id="wc-select2-js" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/agent-kc/js/agent-kc-c5d5729ad2.js" id="agent-kc-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/analytics/js/tag-manager-2d96179ade.js" id="tag-manager-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/checkout-data-persist/js/sisyphus-68a1bc9b3b.js" id="sisyphus-js-js"></script>
<script type="text/javascript" id="data-persist-checkout-js-extra">
/* <![CDATA[ */
var checkoutPersistMeta = {"isAgent":"","restoreKey":null,"isRestoreSession":""};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/checkout-data-persist/js/data-persist-checkout-1bff7f9a69.js" id="data-persist-checkout-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/checkout-extra-triggers/js/checkout-extra-triggers-480021622f.js" id="checkout-extra-triggers-js"></script>
<script type="text/javascript" id="custom-payment-notice-js-extra">
/* <![CDATA[ */
var paymentNoticeTranslations = {"freeText":"Brezpla\u010dno"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/custom-payment-notice/js/custom-payment-notice-bc437138c4.js" id="custom-payment-notice-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/footer-content/js/footer-content-db6c48e1a5.js" id="footer-content-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/header/js/header-23ec95614f.js" id="header-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/hide-payments-test-product/js/hide-payments-test-product-cf544414c3.js" id="hide-payments-test-product-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce/assets/js/jquery-payment/jquery.payment.min.js" id="wc-jquery-payment-js" data-wp-strategy="defer"></script>
<script type="text/javascript" id="sv-wc-payment-gateway-payment-form-v5_15_10-js-extra">
/* <![CDATA[ */
var sv_wc_payment_gateway_payment_form_params = {"order_button_text":"Oddaj naro\u010dilo","card_number_missing":"Manjka \u0161tevilka kartice","card_number_invalid":"\u0160tevilka kartice je neveljavna","card_number_digits_invalid":"\u0160tevilka kartice ni veljavna (dovoljene so samo \u0161tevilke)","card_number_length_invalid":"\u0160tevilka kartice ni veljavna (napa\u010dna dol\u017eina)","card_type_invalid":"Kartica ni veljavna","card_type_invalid_specific_type":"Kartica {card_type} ni veljavna","cvv_missing":"Manjka varnostna koda (CVV\/CVC)","cvv_digits_invalid":"Varnostna koda kartice ni veljavna (dovoljene so samo \u0161tevilke)","cvv_length_invalid":"Varnostna koda kartice ni veljavna (mora biti 3 ali 4-mestna \u0161tevilka)","card_exp_date_invalid":"Datum veljavnosti kartice je neveljaven","check_number_digits_invalid":"\u0160tevilka \u010deka ni veljavna (dovoljene so samo \u0161tevilke)","check_number_missing":"Manjka \u0161tevilka \u010deka","drivers_license_state_missing":"Driver's license state is missing","drivers_license_number_missing":"Manjka \u0161tevilka vozni\u0161kega dovoljenja","drivers_license_number_invalid":"\u0160tevilka vozni\u0161kega dovoljenja ni veljavna","account_number_missing":"Manjka \u0161tevilka ra\u010duna","account_number_invalid":"\u0160tevilka ra\u010duna ni veljavna (dovoljene so samo \u0161tevilke)","account_number_length_invalid":"Account Number is invalid (must be between 5 and 17 digits)","routing_number_missing":"Manjka \u0161tevilka usmerjanja","routing_number_digits_invalid":"\u0160tevilka usmerjanja ni veljavna (dovoljene so samo \u0161tevilke)","routing_number_length_invalid":"\u0160tevilka usmerjanja ni veljavna (mora imeti 9 \u0161tevilk)","first_name_unsupported_characters":"First name contains unsupported characters","last_name_unsupported_characters":"Last name contains unsupported characters"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/dist/frontend/sv-wc-payment-gateway-payment-form.js" id="sv-wc-payment-gateway-payment-form-v5_15_10-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/video-in-product-gallery/js/video-in-product-gallery-c580072598.js" id="video-in-product-gallery-js"></script>
<script type="text/javascript" id="abandoned-cart-restore-addons-js-extra">
/* <![CDATA[ */
var nonce_cart_info = {"abandoned_cart_restore_addons":"4972ee3aa2"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/abandoned-cart-restore-addons/js/abandoned-cart-restore-addons-a5649a6c5e.js" id="abandoned-cart-restore-addons-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/loader/js/loader-20f6f07ee6.js" id="loader-js"></script>
<script type="text/javascript" id="notice-test-product-only-js-extra">
/* <![CDATA[ */
var order_prefix = ["9115000"];
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/notice-test-product-only/js/notice-test-product-only-cbb35a1084.js" id="notice-test-product-only-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/relation-popup-upsell/js/relation-popup-upsell-9d042d6c0d.js" id="relation-popup-upsell-js"></script>
<script type="text/javascript" id="thankyou-upsell-main-js-extra">
/* <![CDATA[ */
var nonce_upsell = {"thankyou_upsell_main_js":"250b53f523"};
var ty_booster_config = {"enable_ty_upsell_one_quantity":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/thankyou-upsell-wheel/js/thankyou-upsell-main-632791503e.js" id="thankyou-upsell-main-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/quantity-discount-price/js/quantity-discount-price-f0be43c8aa.js" id="quantity-discount-price-js"></script>
</div>

<?php wp_footer(); ?>
</body>
</html>
