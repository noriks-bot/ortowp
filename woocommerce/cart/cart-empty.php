<?php
/**
 * Empty cart page - Vigoshop style
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>

<div class="wc-empty-cart-message">
    <div class="woocommerce-info tag tag--block tag--bold tag--blue s-all--s" role="status">
        <?php esc_html_e( 'Vaša košarica je trenutno prazna.', 'woocommerce' ); ?>
    </div>
</div>

<div class="vigo-wc-empty-cart">
    <div class="bg--white grid grid--horizontal-gaps m-top--m border-radius--l">
        <div class="col-xs-12 vigo-wc-cart__head s-all--m border border--bottom border--light">
            <div class="f--l f--bold">Košarica</div>
        </div>
        <div class="col-xs-12 s-all--l flex flex--vertical flex--middle flex--gaps flex--center">
            <div class="f--m flex__item f--bold"></div>
            <div class="return-to-shop flex__item">
                <div class="custom-cta-skin" style="--cta-bg:#ff5b00;--cta-text:#ffffff">
                    <a class="button wc-backward button--yellow-gradient button--yellow-bs button--block"
                       href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        Nazaj v trgovino
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content__badge m-top--s m-bottom--s">
        <div class="grid grid--gaps grid--middle">
            <div class="col-xs-12"><img decoding="async" src="https://images.vigo-shop.com/general/secure-payment/SI_90DAYS.svg"></div>
        </div>
    </div>
</div>

<?php endif; ?>
