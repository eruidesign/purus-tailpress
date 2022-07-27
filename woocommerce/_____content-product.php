<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<!--<div class="overflow-hidden rounded-lg bg-gray-100 flex flex-col">
	<div class="text-center flex-grow">
		<?php the_post_thumbnail('woocommerce_thumbnail',array('class' => 'w-full'));?>
		<h3 class="my-4 text-xl"><?php the_title();?></h3>
		<div class="text-gray-400 p-4 text-sm text-justify"><?php the_excerpt();?></div>
	</div>
	<div class="p-4 flex">
		<a href="<?php the_permalink();?>" class="grow bg-gray-500 text-white text-center rounded p-2 justify-self-end hover:bg-gray-400">More<span> →</span></a>
	</div>
</div>-->

<div class="bg-black p-8 rounded-xl text-center mb-4">
    <div class="product-image w-[250px] h-[250px] rounded-full bg-white mx-auto overflow-hidden">
        <?php the_post_thumbnail('woocommerce_thumbnail',array('class' => 'w-full'));?>
    </div>

    <h3 class="uppercase text-primary font-serif text-xl font-bold my-8"><?php the_title();?></h3>
    <div class="text-gray-400 p-4 text-sm text-justify"><?php the_excerpt();?></div>
    <a href="<?php the_permalink();?>" class="text-primary uppercase mt-8 inline-block px-4 py-2 border border-primary rounded-lg">More &rarr;</a>
    <a href="#" class="text-black bg-primary uppercase mt-8 inline-block px-4 py-2 rounded-md ml-4 border-transparent">Add to Cart &rarr;</a>
    <?php WC()->cart->add_to_cart( the_ID() );?>
</div>