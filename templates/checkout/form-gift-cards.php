<?php
/**
 * Checkout gift cards form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-gift-cards.php.
 *
 * @author  YIThemes
 * @package yith-woocommerce-gift-cards-premium/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! apply_filters( 'yith_gift_cards_show_field', true ) ) {
	return;
}

$direct_display = apply_filters( 'ywcg_gift_card_code_form_direct_display', ( is_cart() ? get_option ( 'ywgc_gift_card_form_on_cart_direct_display' ) : ( is_checkout() ? get_option ( 'ywgc_gift_card_form_on_checkout_direct_display' ) : 'no' ) ) );

if ( $direct_display != 'yes' ):

    ?>
    <div class="ywgc_have_code">

        <?php wc_print_notice( apply_filters( 'ywgc_checkout_box_title', _x( "Have a gift card?", 'Apply gift card', 'yith-woocommerce-gift-cards' ) ) . ' <a href="#" class="ywgc-show-giftcard">' . apply_filters( 'ywgc_checkout_enter_code_text', _x( 'Click here to enter your code', 'Apply gift card', 'yith-woocommerce-gift-cards' ) ) . '</a>', 'notice' ); ?>

    </div>
    <?php

endif;

?>

<div class="ywgc_enter_code" method="post" style="<?php echo ( $direct_display != 'yes' ? 'display:none' : '' ); ?>">

    <?php

    $ywgc_minimal_car_total = get_option ( 'ywgc_minimal_car_total' );

    if ( WC()->cart->total < $ywgc_minimal_car_total ):

        ?>
            <p class="woocommerce-error" role="alert">

                <?php echo _x( "In order to apply the gift card, the total amount in the cart has to be at least", 'Apply gift card', 'yith-woocommerce-gift-cards' ) . " " . $ywgc_minimal_car_total . get_woocommerce_currency_symbol(); ?>

            </p>

        <?php

    endif;
    ?>

    <div style="position: relative">

        <p><?php echo esc_html( apply_filters( 'ywgc_checkout_box_placeholder', _x( 'If you have a gift card code, please apply it below.', 'Apply gift card', 'yith-woocommerce-gift-cards' ) ) ); ?></p>

        <p class="form-row form-row-first">

            <input type="text" name="gift_card_code" class="input-text"
                   placeholder="<?php echo esc_attr( apply_filters( 'ywgc_checkout_box_placeholder', _x( 'Gift card code', 'Apply gift card', 'yith-woocommerce-gift-cards' ) ) ); ?>"
                   id="giftcard_code"
                   value="" />

        </p>

        <p class="form-row form-row-last">

            <input type="submit" class="button" name="ywgc_apply_gift_card"
                   value="<?php echo esc_attr( apply_filters( 'ywgc_checkout_apply_code', _x( 'Apply gift card', 'Apply gift card', 'yith-woocommerce-gift-cards' ) ) ); ?>" />
            <input type="hidden" name="is_gift_card"
                   value="1" />

        </p>

        <div class="clear"></div>

        <?php

            if ( WC()->cart->total < $ywgc_minimal_car_total ):

                ?><div class="yith_wc_gift_card_blank_brightness"></div><?php

            endif;

        ?>

    </div>

</div>


