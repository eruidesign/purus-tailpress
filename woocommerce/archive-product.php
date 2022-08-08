<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

$shop_page_ID = get_option( 'woocommerce_shop_page_id' );
$shop_page = get_post($shop_page_ID);

?>
<section class="hero min-h-[600px] bg-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url($shop_page_ID,'banner-1440x600');?>);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="container mx-auto py-8 px-4 hero-content text-neutral-content">
        <div class="lg:max-w-screen-xl mx-auto">
            <div class="py-3 px-5 mb-4 bg-white text-black max-w-lg text-sm rounded-md border border-primary flex items-center justify-between" role="alert">
                <span>For orders over 50 please <a class="text-primary" href="<?php echo get_permalink(14); ?>">Contact Us</a>!</span>
            </div>
        </div>

        <?php if ( woocommerce_product_loop() ) : ?>

            <div class="products grid grid-cols-2 gap-4 justify-items-center">
                <?php

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();
                
                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );
                
                            wc_get_template_part( 'content', 'product' );
                        }
                    }
                ?>
            </div>

        <?php else : ?>

            <?php do_action( 'woocommerce_no_products_found' ); ?>

        <?php endif;?>
    </div>
</section>

<?php
get_footer( 'shop' );
