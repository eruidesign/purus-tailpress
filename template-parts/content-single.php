<?php 
	$shop_page_ID = get_option( 'woocommerce_shop_page_id' );
	$shop_page = get_post($shop_page_ID);
?>


	<header class="hero min-h-[300px] max-w-[100%] bg-cover flex justify-center items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url($shop_page_ID,'banner-1440x600');?>);">
		<?php the_title( sprintf( '<h1 class="entry-title lg:max-w-screen-xl mx-auto p-4 text-4xl lg:text-5xl font-extrabold leading-tight mb-1 text-white"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<!--<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>-->
	</header>

	<div class="entry-content">
		<div class="bg-zinc-900">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div id="breadcrumbs" class="lg:max-w-screen-xl p-4 mx-auto text-gray-500">','</div>' );
				}
			?>
		</div>

		<?php if ( has_excerpt() ) : ?>
			<?php the_excerpt();?>
		<?php endif;?>
		
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>
