<?php
/**
 * Gift Card product add to cart
 *
 * @author  Yithemes
 * @package YITH WooCommerce Gift Cards
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<table class="ywgc-table-template">

    <?php do_action( 'yith_wcgc_template_before_main_image_pdf', $object ); ?>

    <?php if ( $header_image_url = apply_filters( 'ywgc_custom_header_image_url', $header_image_url ) ): ?>
    <tr>

        <td class="ywgc-main-image-td" colspan="2">

            <img src="<?php echo $header_image_url; ?>"
                 class="ywgc-main-image"
                 alt="<?php _e( "Gift card image", 'yith-woocommerce-gift-cards' ); ?>"
                 title="<?php _e( "Gift card image", 'yith-woocommerce-gift-cards' ); ?>">

        </td>

    </tr>
    <?php endif; ?>

    <?php do_action( 'yith_wcgc_template_after_main_image_pdf' ,$object ); ?>

    <tr>
        <td class="ywgc-table-td-space"></td>
    </tr>

    <tr>

        <td class="ywgc-logo-shop">

            <?php if( isset( $company_logo_url ) && $company_logo_url  ) {  ?>
            <img src="<?php echo apply_filters( 'ywgc_custom_company_logo_url', $company_logo_url ); ?>"
                 class="ywgc-logo-shop-image"
                 alt="<?php _e( "The shop logo for the gift card", 'yith-woocommerce-gift-cards' ); ?>"
                 title="<?php _e( "The shop logo for the gift card", 'yith-woocommerce-gift-cards' ); ?>">

            <?php } ?>

        </td>

        <?php do_action( 'yith_wcgc_template_after_logo_pdf', $object ); ?>

        <td class="ywgc-card-amount" valign="bottom">

            <?php echo $formatted_price; ?>

        </td>

        <?php do_action( 'yith_wcgc_template_after_price_pdf', $object ); ?>

    </tr>

    <?php do_action( 'yith_wcgc_template_after_logo_price_pdf', $object ); ?>

    <tr>
        <td colspan="2"> <hr style="color: lightgrey"> </td>
    </tr>

    <tr>
        <td class="ywgc-card-code-title" colspan="2"> <?php echo apply_filters('ywgc_preview_code_title', __( "Gift Card code", 'yith-woocommerce-gift-cards' ) ); ?> </td>
    </tr>

    <tr>
        <td class="ywgc-card-code" colspan="2"> <?php echo $gift_card_code; ?> </td>
    </tr>

    <?php do_action( 'yith_wcgc_template_after_code_pdf', $object ); ?>

    <tr>
        <td colspan="2"> <hr style="color: lightgrey"> </td>
    </tr>

    <?php if ( $message ): ?>
    <tr>
        <td colspan="2"> <?php echo nl2br(str_replace( '\\','',$message )) ?> </td>
    </tr>
    <?php endif; ?>

    <?php do_action( 'yith_wcgc_template_after_message_pdf', $object ); ?>

</table>