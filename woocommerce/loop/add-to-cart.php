<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<div class="grid grid-cols-2 gap-3">
<?php

echo apply_filters(
	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
	sprintf(
		'<a href="%s" data-quantity="%s" class="product_type_simple add_to_cart_button ajax_add_to_cart text-black text-center bg-primary uppercase px-2 py-2 rounded-md border-transparent" %s>%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		//esc_attr( isset( $args['class'] ) ? $args['class'] : '' ),
		//esc_attr( 'text-black bg-primary uppercase mt-8 inline-block px-4 py-2 rounded-md ml-4 border-transparent' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		esc_html( $product->add_to_cart_text() )
	),
	$product,
	$args
);
?>

<a href="<?php echo $product->get_permalink();?>" class="text-primary text-center uppercase px-2 py-2 border border-primary rounded-lg">View Product</a>

</div>
