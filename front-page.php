<?php get_header(); ?>

<?php
    $section_1_ID = 8; //Homepage
    $section_1 = get_post($section_1_ID);
    
    $section_2_ID = 11; //About
    $section_2 = get_post($section_2_ID);

    $section_3_ID = 16; //Shop
    $section_3 = get_post($section_3_ID);
    
    $section_4_ID = 13; //Testimonials
    $section_4 = get_post($section_4_ID);

    $CTA_1_ID = 580; //Congeners
    $CTA_2_ID = 546; //Instructions
?>

<section class="lg:min-h-[40rem] bg-zinc-900 text-white flex flex-col" style="background: url(<?php echo get_the_post_thumbnail_url($section_1_ID,'banner-1440x800');?>);">
    <div class="overlay h-[100%] w-[100%] bg-opacity-60 bg-black flex flex-grow items-center">
        <div class="container lg:max-w-screen-xl mx-auto p-4 md:grid md:grid-cols-2">
            <div>
                <h1 class="text-5xl lg:text-7xl tracking-tight font-extrabold my-4 text-primary font-denver">Purus</h1>
                <p class="max-w-screen-lg text-white font-serif text-3xl mb-10">Drink better <span class="text-primary">&#9679;</span> Feel better</p>
                <a href="<?php echo get_permalink($CTA_1_ID);?>" class="flex-none block md:inline-block bg-transparent text-center text-primary leading-6 py-3 px-6 mb-4 border border-primary rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">What are Congeners? &rarr;</a>
        
                <a href="<?php echo get_permalink($CTA_2_ID);?>" class="flex-none block md:inline-block bg-primary text-center text-black leading-6 py-3 px-6 mb-8 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">How to use PurusPotus &rarr;</a>
            </div>
            <div class="text-center">
                <div class="product-image w-[300px] h-[300px] md:w-[400px] md:h-[400px] rounded-full bg-white mx-auto mt-8 md:mt-0 overflow-hidden">
                    <img src="https://staging2.puruspotus.com/wp-content/uploads/Purus-Image-package.png" class="w-[100%]"/>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-about lg:min-h-[40rem] text-white flex items-center" style="background: #040707 url(<?php echo get_the_post_thumbnail_url($section_2_ID,'banner-1440x800');?>) no-repeat left bottom;">
    <div class="container lg:max-w-screen-xl mx-auto p-4 flex flex-row-reverse">
        <div class="lg:basis-1/2">
            <h2 class="text-3xl lg:text-5xl tracking-tight my-4 text-primary font-serif">About <span class="font-denver text-white">Purus</span></h2>
            <p class="text-white mb-10">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel perferendis officia in voluptas, quis quo amet aliquid soluta ut repudiandae ab quibusdam commodi porro optio dolorum, ullam vitae libero ex!
            Expedita nam amet iste excepturi eveniet, non, ut culpa fugiat ipsa tempore consequuntur animi doloremque eius corrupti. Enim unde eveniet nam numquam blanditiis, illo tempore consectetur non in architecto ut.
            Debitis porro temporibus provident suscipit cumque blanditiis ea numquam alias maiores, animi, veritatis atque laboriosam perferendis molestiae error aliquam tempore voluptas nam harum eum iure recusandae. Reiciendis officia aspernatur laudantium.
            Quibusdam, eos?</p>
            <a href="#" class="text-primary uppercase">Read More &rarr;</a>
        </div>
    </div>
</section>
<section class="lg:min-h-[40rem] bg-zinc-900 text-white py-8 bg-cover" style="background: url(<?php echo get_the_post_thumbnail_url($section_3_ID,'banner-1440x800');?>);">
    <div class="container lg:max-w-screen-xl mx-auto px-4">
        <div class="section-description md:col-span-2 lg:col-span-3">
            <h2 class="text-3xl lg:text-5xl tracking-tight my-4 text-primary font-serif">Our Products</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
        </div>
       <?php if ( woocommerce_product_loop() ) : ?>

            <div class="products md:grid md:grid-cols-2 gap-4 justify-items-center">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 12
                    );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                        wc_get_template_part( 'content', 'product' );
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
            ?>
            </div>

        <?php else : ?>

            <?php do_action( 'woocommerce_no_products_found' ); ?>

        <?php endif;?>
    </div>
</section>
<section class="section-testimonials flex lg:min-h-[40rem] bg-black text-white" style="background: #040707 url(<?php echo get_the_post_thumbnail_url($section_4_ID,'banner-1440x800');?>) no-repeat right bottom;">
    <div class="container lg:max-w-screen-xl mx-auto p-4 flex flex-col">
        <div class="section-description">
            <h2 class="text-3xl lg:text-5xl tracking-tight my-4 text-primary font-serif">Testimonials</h2>
            <p>Receive a free Purus if you <a href="">send in</a> a taste comparrison video or testimonial.</p>
        </div>

        <div class="p-4 flex justify-center items-center flex-grow">
            <!--<div class="testimonial-image w-[300px] md:w-full aspect-square my-8 self-center mx-auto border-8 border-primary rounded-full overflow-hidden">
                <img src="https://staging2.puruspotus.com/wp-content/uploads/Testimonial-1.jpg" alt="">
            </div>-->
            <div class="testimonial-text self-center max-w-[300px] md:max-w-lg">
                <blockquote>Drinking red wine was embarrassing and not enjoyable for me w/ the reddened skin reaction I had after consuming a glass and headaches that ensued not long after. When my friend told me about Purus, I was curious to try. It's changed my enjoyment of pairing a great steak with a cab. Or even dark chocolate w/ a dessert wine. Sulfites go away! Purus has changed my eating & drinking experience for the better.</blockquote>
                <cite class="font-serif text-primary text-lg my-8 italic block">Jodi, Michigan USA</cite>
            </div>
        </div>
        <div class="">
            <a href="#" class="text-primary uppercase">Read More &rarr;</a>
        </div>  
    </div>
</section>



<?php
get_footer();
