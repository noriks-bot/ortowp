<?php
/**
 * Cart Page - Vigoshop style override
 * Matches si.stepease.eu cart HTML structure exactly
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); 

$cart_items = WC()->cart->get_cart();
$cart_count = WC()->cart->get_cart_contents_count();
$item_label = $cart_count === 1 ? '1 izdelek' : $cart_count . ' izdelkov';
?>

<div class="cart-restore-notice-wrapper"></div>

<style>
  .woocommerce-cart select.one, .woocommerce-cart select.two {
    background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='%23fff'><polygon points='0,0 100,0 50,50'/></svg>") no-repeat;
    background-size: 16px;
    background-position: calc(100% - 13px) 21px;
  }
</style>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    <div class="woocommerce cart woocommerce-cart-form__contents vigo-wc-cart m-bottom--m m-top--m s-bottom--m bg--white s-left--m s-right--m s-bottom--m border-radius--l">
        <div class="grid grid--horizontal-gaps">
            <div class="col-xs-12 vigo-wc-cart__head s-top--m s-bottom--m border border--bottom border--light">
                <div class="flex flex--apart flex--middle">
                    <div class="flex__item flex flex--autosize flex--middle flex--gaps">
                        <div class="flex__item">
                            <div class="f--l f--bold">Košarica</div>
                        </div>
                        <div class="flex__item">
                            <span class="c--gray"><?php echo esc_html( $item_label ); ?></span>
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

                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                        $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                        $thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                        $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        
                        // Get variation attributes for display
                        $item_data = '';
                        if ( $cart_item['variation_id'] ) {
                            $variation = wc_get_product( $cart_item['variation_id'] );
                            if ( $variation ) {
                                $attributes = $variation->get_variation_attributes();
                                $attr_parts = array();
                                foreach ( $attributes as $attr_name => $attr_value ) {
                                    $taxonomy = str_replace( 'attribute_', '', $attr_name );
                                    $term = get_term_by( 'slug', $attr_value, $taxonomy );
                                    $attr_parts[] = $term ? $term->name : $attr_value;
                                }
                                if ( ! empty( $attr_parts ) ) {
                                    $item_data = ' - ' . implode( ', ', $attr_parts );
                                }
                            }
                        }
                        ?>
                        <div class="grid grid--gaps grid--middle m-bottom--s s-bottom--m vigo-wc-cart__item cart_item product-<?php echo esc_attr( $product_id ); ?>">
                            <div class="col-xs-1 product-thumbnail vigo-cart__item-thumbnail">
                                <?php echo $thumbnail; ?>
                            </div>
                            <div class="col-xs-11 vigo-wc-cart__item-wrapper">
                                <div class="grid grid--middle grid--gaps">
                                    <div class="col-md-6 col-xs-12 product-name vigo-cart__item-name">
                                        <?php echo wp_kses_post( $product_name ); ?>&nbsp;
                                    </div>
                                    <div class="col-md-2 col-xs-4 product-quantity vigo-cart__item-qty">
                                        <div class="quantity_select">
                                            <select name="cart[<?php echo esc_attr( $cart_item_key ); ?>][qty]" title="Količina" class="qty">
                                                <?php for ( $i = 1; $i <= 10; $i++ ) : ?>
                                                    <option value="<?php echo $i; ?>" <?php selected( $cart_item['quantity'], $i ); ?>><?php echo $i; ?>x</option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-7 product-price vigo-cart__item-price f--bold">
                                        <?php echo $product_price; ?>
                                    </div>
                                    <div class="col-md-2 col-xs-1 product-remove vigo-cart__item-remove">
                                        <a role="button" href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="remove" aria-label="<?php echo esc_attr( sprintf( 'Odstrani %s iz košarice', $product_name ) ); ?>" data-product_id="<?php echo esc_attr( $product_id ); ?>" data-product_sku="<?php echo esc_attr( $_product->get_sku() ); ?>">&times;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

                <?php do_action( 'woocommerce_cart_contents' ); ?>

            </div>
            <div class="col-md-4 col-xs-12 vigo-wc-cart__totals">
                <div class="cart-collaterals">
                    <div class="cart_totals">
                        <h2>Skupaj</h2>

                        <table cellspacing="0" class="shop_table shop_table_responsive">
                            <tr class="cart-subtotal">
                                <th>Delni znesek</th>
                                <td data-title="Delni znesek"><?php wc_cart_totals_subtotal_html(); ?></td>
                            </tr>

                            <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
                                <tr class="fee">
                                    <th><?php echo esc_html( $fee->name ); ?></th>
                                    <td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
                                </tr>
                            <?php endforeach; ?>

                            <?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
                                <?php if ( 'itemized' === get_option( 'woocommerce_tax_display_cart' ) ) : ?>
                                    <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
                                        <tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                                            <th><?php echo esc_html( $tax->label ); ?></th>
                                            <td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr class="tax-total">
                                        <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
                                        <td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endif; ?>
                        </table>

                        <div class="vigo-coupon-totals s-top--s s-bottom--s"></div>

                        <div class="flex flex--autosize flex--gaps-s flex--center flex--middle order-total s-top--s">
                            <div class="flex__item f--m c--gray">Znesek</div>
                            <div class="flex__item f--m" data-title="Znesek">
                                <strong><?php wc_cart_totals_order_total_html(); ?></strong>
                            </div>
                        </div>

                        <div class="wc-proceed-to-checkout">
                            <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
                        </div>

                        <div class="vigo-cart-modal vigo-cart-modal__alternative bg--white">
                            <div class="proceed-to-checkout">
                                <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button button--l alt wc-forward button--block button--green-gradient btn_bigger_proceed custom-cta-skin" style="background:#ff5b00 !important;color:#ffffff !important;border-color:#ff5b00 !important;box-shadow: 0 2px 0 #ff5b00 !important;">Na blagajno</a>
                                <span class="trusted-people-count__text">Zaupa nam že 1.000.000 Slovencev.</span>
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
        <button type="submit" class="button hidden" name="update_cart" value="Posodobi košarico">Posodobi košarico</button>
        <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
    </div>
</form>

<div class="content__badge m-top--s m-bottom--s">
    <div class="grid grid--gaps grid--middle">
        <div class="col-xs-12"><img decoding="async" src="https://images.vigo-shop.com/general/secure-payment/SI_90DAYS.svg"></div>
    </div>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
