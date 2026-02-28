<?php
/**
 * Template for Checkout page (page-checkout.php)
 * Pixel-perfect from si.stepease.eu/zakljucek-nakupa/ with WooCommerce checkout
 */

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
?><!DOCTYPE html>
<html lang="sl-SI">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>Zaključek nakupa - Ortowp</title>
    <?php wp_head(); ?>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
</head>
<body class="wp-singular page-template-default page page-id-6 wp-theme-hsplus wp-child-theme-hsplus-child  theme-vigoshop theme-hsplus woocommerce-checkout woocommerce-page woocommerce-no-js brand-stepease brand-general" data-hswooplus="10.3.7"  >


<header class='vigo-header vigo-header--wc'>
    <div class='vigo-topbar vigo-topbar--wc container container--l'>
        <div class='flex flex--middle flex--apart flex--gaps justify-baseline'>
                    </div>
  <div class='flex flex--middle flex--apart flex--gaps'>  </div>
</header>

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
</body>
</html>
