<?php
/**
 * Template for Cart page (page-cart.php)
 * Pixel-perfect header/footer from si.stepease.eu with WooCommerce cart functionality
 */


function se_enqueue_page_styles() {
    $css_dir = get_template_directory_uri() . '/assets/css/';
    $css_files = array(
        'brands', 'hsplus-child', 'app', 'swiper.min', 'stepease',
        'agent-kc', 'checkout-extra-triggers', 'cookie-consent',
        'custom-payment-notice', 'header', 'hide-payments-test-product',
        'homepage-shop-categories', 'general-shop-elements', 'lazy-load',
        'product-page-courier-info', 'sv-wc-payment-form',
        'video-in-product-gallery', 'abandoned-cart-restore-addons',
        'coupon-banner', 'custom-cta-settings'
    );
    foreach ($css_files as $name) {
        wp_enqueue_style("se-{$name}", $css_dir . "{$name}.css", array(), '1.0');
    }
}

add_action('wp_enqueue_scripts', 'se_enqueue_page_styles', 20);
?><!DOCTYPE html>
<html lang="sl-SI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Košarica - Ortowp</title>
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
</head>
<body class="wp-singular page-template page-template-template-fullwidth page-template-template-fullwidth-php page page-id-5 wp-theme-hsplus wp-child-theme-hsplus-child  theme-vigoshop theme-hsplus woocommerce-cart woocommerce-page woocommerce-no-js brand-stepease brand-general" data-hswooplus="10.3.7"  >


<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'>
          <!--          --><!--          <div class="vigo-cart-header-banner">-->
<!--            <div class="vigo-cart-header" id="vigo-slick-header">-->
<!--              <div class="vigo-slick-slide vigo-slick-slide-first">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-return.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-safe.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-delivery.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="vigo-slick-slide">-->
<!--                <div class="slide-item"><img src="https://images.vigo-shop.com/general/cart/icon-payment.svg">-->
<!--                  <span>--><!--</span>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        -->            </div>
  <div class='flex flex--middle flex--apart flex--gaps'>  </div>
</header>

<main class="main" role="main">
  <div class="container container--l s-top--l s-bottom--l">
    <h1 class="f--l f--bold">Košarica</h1>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
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
        <script>var DataLayerOutput = {"event":"pageLoaded","cartContent":{"totals":{"subtotal":0,"subtotal_tax":0,"shipping_total":0,"shipping_tax":0,"discount_total":0,"discount_tax":0,"cart_contents_total":0,"cart_contents_tax":0,"fee_total":0,"fee_tax":0,"total":0,"total_tax":0,"total_with_tax":0,"currency":"EUR","applied_coupons":[]},"quantity_sum":0,"productSKUs":[],"productSKU_IDs":[],"categories":[]},"PageType":"cart","ecomm_pagetype":"cart","postID":5,"userLoggedIn":false,"ecommerce":{"currencyCode":"EUR","categories":[],"productSKUs":[],"checkout":{"products":[]},"checkout_option":{"actionField":{"step":1,"option":"Shipping: "}}}}; window.dataLayer.push(DataLayerOutput)</script>  <script>
    (function ($) {
      'use strict';
      $('.single_add_to_cart_button').on('click', function () {
        $(this).removeClass('wc-variation-is-unavailable')
      });
    })(jQuery);
  </script>
<script type="text/javascript">jQuery(function($){		function load_braintree_paypal_payment_form_handler() {
			window.wc_braintree_paypal_payment_form_handler = new WC_Braintree_PayPal_Payment_Form_Handler( {"id":"braintree_paypal","id_dasherized":"braintree-paypal","name":"Braintree (PayPal)","debug":false,"type":"paypal","client_token_nonce":"8ccfdfba6c","is_block_theme":false,"card_tokens":[],"integration_error_message":"Currently unavailable. Please try a different payment method.","payment_error_message":"Ups, nekaj je \u0161lo narobe. Poskusite z drugim na\u010dinom pla\u010dila.","ajax_url":"https:\/\/ortowp.noriks.com\/wp\/wp-admin\/admin-ajax.php","is_test_environment":false,"is_paypal_pay_later_enabled":false,"is_paypal_card_enabled":false,"paypal_disabled_funding_options":[],"force_buyer_country":null,"must_login_message":"Please click the &quot;PayPal&quot; button below to log into your PayPal account before placing your order.","must_login_add_method_message":"Please click the &quot;PayPal&quot; button below to log into your PayPal account before adding your payment method.","button_styles":{"label":"pay","shape":"pill","color":"gold","layout":"vertical","tagline":false},"cart_payment_nonce":"","paypal_intent":"capture"} );window.jQuery( document.body ).trigger( "update_checkout" );		}

		try {

			if ( 'undefined' !== typeof WC_Braintree_PayPal_Payment_Form_Handler ) {
				load_braintree_paypal_payment_form_handler();
			} else {
				window.jQuery( document.body ).on( 'wc_braintree_paypal_payment_form_handler_loaded', load_braintree_paypal_payment_form_handler );
			}

		} catch ( err ) {

			
		var errorName    = '',
		    errorMessage = '';

		if ( 'undefined' === typeof err || 0 === err.length || ! err ) {
			errorName    = 'A script error has occurred.';
			errorMessage = 'The script WC_Braintree_PayPal_Payment_Form_Handler could not be loaded.';
		} else {
			errorName    = 'undefined' !== typeof err.name    ? err.name    : '';
			errorMessage = 'undefined' !== typeof err.message ? err.message : '';
		}

		
		jQuery.post( 'https://ortowp.noriks.com/wp/wp-admin/admin-ajax.php', {
			action:   'wc_braintree_paypal_payment_form_log_script_event',
			security: 'e65dd15a17',
			name:     errorName,
			message:  errorMessage,
		} );

				}
		});</script><script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp\/wp-*.php","\/wp\/wp-admin\/*","\/app\/uploads\/*","\/app\/*","\/app\/plugins\/*","\/app\/themes\/hsplus-child\/*","\/app\/themes\/hsplus\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
        <script>
            window.dataLayer.push({
                'fb_userId_AddToCart': 'AddToCart_69a340ba4c7c60.42598766',
            })
        </script>
                <script>
            window.dataLayer.push({
                'fb_userId_PageView': 'PageView_69a340ba7b6a77.47101454',
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
                <a class="flex__item t--no-decoration c--text s-all--s" href="/cdn-cgi/l/email-protection#3851565e57784b51164b4c5d485d594b5d165d4d">
                    <div class="flex flex--autosize flex--gaps">
                        <div class="flex__item"><svg viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92539 9.625L0.636328 3.17578C0.234766 2.86328 0 2.38281 0 1.875C0 0.839453 0.839453 0 1.875 0H18.125C19.1602 0 20 0.839453 20 1.875C20 2.38281 19.7305 2.86328 19.3652 3.17578L11.0762 9.625C10.4438 10.1172 9.55781 10.1172 8.92539 9.625ZM8.15781 10.609C8.70859 11.0382 9.3543 11.25 10 11.25C10.6445 11.25 11.293 11.0391 11.8438 10.6133L20 4.26562V13.125C20 14.1605 19.1605 15 18.125 15H1.875C0.839453 15 0 14.1602 0 13.125V4.26562L8.15781 10.609Z"/></svg></div>
                        <div
                            class="flex__item"><strong><span class="__cf_email__" data-cfemail="6900070f06291a00471a1d0c190c081a0c470c1c">[email&#160;protected]</span></strong></div>
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
var paginationSettings = {"loadMoreType":"infinite_scroll","loadQuantity":"16","initNumberOfProducts":"16","batchLoadQuantity":"3","isWPPage":"1","isHomePage":"","isCategoryPage":"","showSpecificCategory":""};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/themes/hsplus/dist/app-0df85dd4e7.js" id="app-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/themes/hsplus/assets/plugins/uFuzzy/uFuzzy.iife.min.js" id="ufuzzy-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce/assets/js/select2/select2.full.min.js" id="wc-select2-js" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/agent-kc/js/agent-kc-c5d5729ad2.js" id="agent-kc-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/analytics/js/tag-manager-2d96179ade.js" id="tag-manager-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/themes/hsplus/assets/plugins/swiper/swiper.min.js" id="swiper-js"></script>
<script type="text/javascript" id="cart-upsell-js-extra">
/* <![CDATA[ */
var nonce_upsell = {"cart_upsell_js":"284bfc3f63"};
var addedTranslation = {"added":"DODANO","removed":"Dodaj v ko\u0161arico"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/cart-upsell/js/cart-upsell-e74477b8f9.js" id="cart-upsell-js"></script>
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
<script type="text/javascript" id="lottery-ticket-js-extra">
/* <![CDATA[ */
var nonce_lottery = {"lottery_ticket_js":"f1e24eb824"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/lottery-ticket/js/lottery-ticket-d573b64d15.js" id="lottery-ticket-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce/assets/js/jquery-payment/jquery.payment.min.js" id="wc-jquery-payment-js" data-wp-strategy="defer"></script>
<script type="text/javascript" id="sv-wc-payment-gateway-payment-form-v5_15_10-js-extra">
/* <![CDATA[ */
var sv_wc_payment_gateway_payment_form_params = {"order_button_text":"Oddaj naro\u010dilo","card_number_missing":"Manjka \u0161tevilka kartice","card_number_invalid":"\u0160tevilka kartice je neveljavna","card_number_digits_invalid":"\u0160tevilka kartice ni veljavna (dovoljene so samo \u0161tevilke)","card_number_length_invalid":"\u0160tevilka kartice ni veljavna (napa\u010dna dol\u017eina)","card_type_invalid":"Kartica ni veljavna","card_type_invalid_specific_type":"Kartica {card_type} ni veljavna","cvv_missing":"Manjka varnostna koda (CVV\/CVC)","cvv_digits_invalid":"Varnostna koda kartice ni veljavna (dovoljene so samo \u0161tevilke)","cvv_length_invalid":"Varnostna koda kartice ni veljavna (mora biti 3 ali 4-mestna \u0161tevilka)","card_exp_date_invalid":"Datum veljavnosti kartice je neveljaven","check_number_digits_invalid":"\u0160tevilka \u010deka ni veljavna (dovoljene so samo \u0161tevilke)","check_number_missing":"Manjka \u0161tevilka \u010deka","drivers_license_state_missing":"Driver's license state is missing","drivers_license_number_missing":"Manjka \u0161tevilka vozni\u0161kega dovoljenja","drivers_license_number_invalid":"\u0160tevilka vozni\u0161kega dovoljenja ni veljavna","account_number_missing":"Manjka \u0161tevilka ra\u010duna","account_number_invalid":"\u0160tevilka ra\u010duna ni veljavna (dovoljene so samo \u0161tevilke)","account_number_length_invalid":"Account Number is invalid (must be between 5 and 17 digits)","routing_number_missing":"Manjka \u0161tevilka usmerjanja","routing_number_digits_invalid":"\u0160tevilka usmerjanja ni veljavna (dovoljene so samo \u0161tevilke)","routing_number_length_invalid":"\u0160tevilka usmerjanja ni veljavna (mora imeti 9 \u0161tevilk)","first_name_unsupported_characters":"First name contains unsupported characters","last_name_unsupported_characters":"Last name contains unsupported characters"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/dist/frontend/sv-wc-payment-gateway-payment-form.js" id="sv-wc-payment-gateway-payment-form-v5_15_10-js"></script>
<script type="text/javascript" src="https://js.braintreegateway.com/web/3.94.0/js/client.min.js" id="braintree-js-client-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/assets/js/frontend/wc-braintree.min.js" id="wc-braintree-js"></script>
<script type="text/javascript" src="https://js.braintreegateway.com/web/3.94.0/js/client.min.js" id="braintree-js-paypal-client-js"></script>
<script type="text/javascript" src="https://js.braintreegateway.com/web/3.94.0/js/paypal-checkout.min.js" id="braintree-js-paypal-checkout-js"></script>
<script type="text/javascript" src="https://js.braintreegateway.com/web/3.94.0/js/data-collector.min.js" id="braintree-js-data-collector-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/video-in-product-gallery/js/video-in-product-gallery-c580072598.js" id="video-in-product-gallery-js"></script>
<script type="text/javascript" id="abandoned-cart-restore-addons-js-extra">
/* <![CDATA[ */
var nonce_cart_info = {"abandoned_cart_restore_addons":"4972ee3aa2"};
/* ]]> */
</script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/abandoned-cart-restore-addons/js/abandoned-cart-restore-addons-a5649a6c5e.js" id="abandoned-cart-restore-addons-js"></script>
<script type="text/javascript" src="https://si.stepease.eu/app/plugins/core/resources/dist/js/cart-item-restore/js/cart-item-restore-378d29544e.js" id="cart-item-restore-js"></script>
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
