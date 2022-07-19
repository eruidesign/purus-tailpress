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
?>

<section class="lg:min-h-[40rem] bg-zinc-900 text-white flex flex-col" style="background: url(<?php echo get_the_post_thumbnail_url($section_1_ID,'banner-1440x800');?>);">
    <div class="overlay h-[100%] w-[100%] bg-opacity-60 bg-black flex flex-grow items-center">
        <div class="container lg:max-w-screen-xl mx-auto p-4 md:grid md:grid-cols-2">
            <div>
                <h1 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4 text-primary font-denver">Purus</h1>
                <p class="max-w-screen-lg text-white font-serif text-3xl mb-10">Drink better <span class="text-primary">&#9679;</span> Feel better</p>
                <a href="#" class="w-full sm:w-auto flex-none bg-transparent text-primary leading-6 py-3 px-6 border border-primary rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">CTA Here &rarr;</a>
        
                <a href="#" class="w-full sm:w-auto flex-none bg-primary text-black leading-6 py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">Another CTA Here &rarr;</a>
            </div>
            <div class="text-center">
                <div class="product-image w-[400px] h-[400px] rounded-full bg-white mx-auto overflow-hidden">
                    <img src="https://staging2.puruspotus.com/wp-content/uploads/Purus-Image-package.png" class="w-[100%]"/>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lg:min-h-[40rem] bg-black text-white flex items-center" style="background: #040707 url(<?php echo get_the_post_thumbnail_url($section_2_ID,'banner-1440x800');?>) no-repeat;background-position:left bottom; background-size: contain;">
    <div class="container lg:max-w-screen-xl mx-auto p-4 flex flex-row-reverse">
        <div class="lg:basis-1/2">
            <h2 class="text-3xl lg:text-7xl tracking-tight my-4 text-primary font-serif">About <span class="font-denver text-white">Purus</span></h2>
            <p class="text-white mb-10">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel perferendis officia in voluptas, quis quo amet aliquid soluta ut repudiandae ab quibusdam commodi porro optio dolorum, ullam vitae libero ex!
            Expedita nam amet iste excepturi eveniet, non, ut culpa fugiat ipsa tempore consequuntur animi doloremque eius corrupti. Enim unde eveniet nam numquam blanditiis, illo tempore consectetur non in architecto ut.
            Debitis porro temporibus provident suscipit cumque blanditiis ea numquam alias maiores, animi, veritatis atque laboriosam perferendis molestiae error aliquam tempore voluptas nam harum eum iure recusandae. Reiciendis officia aspernatur laudantium.
            Quibusdam, eos?</p>
            <a href="#" class="text-primary uppercase">Read More &rarr;</a>
        </div>
    </div>
</section>
<section class="lg:min-h-[40rem] bg-zinc-900 text-white py-8" style="background: url(<?php echo get_the_post_thumbnail_url($section_3_ID,'banner-1440x800');?>);">
    <div class="container lg:max-w-screen-xl mx-auto px-4 md:grid md:grid-cols-3 gap-8">
        <div class="section-description col-span-3">
            <h2 class="text-3xl lg:text-5xl tracking-tight my-4 text-primary font-serif">Our Products</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
        </div>
        <div class="bg-black p-8 rounded-xl text-center sm:mb-4">
            <div class="product-image w-[250px] h-[250px] rounded-full bg-white mx-auto overflow-hidden">
                <img src="https://staging2.puruspotus.com/wp-content/uploads/Purus-Image-package.png" class="w-[100%]"/>
            </div>

            <h3 class="uppercase text-primary font-serif text-xl font-bold my-8">Product #1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, temporibus.</p>
            <a href="#" class="text-primary uppercase mt-8 inline-block px-4 py-2 border border-primary rounded-lg">Read More &rarr;</a>
            <a href="#" class="text-black bg-primary uppercase mt-8 inline-block px-4 py-2 rounded-md ml-4 border-transparent">Add to Cart &rarr;</a>
        </div>
        <div class="bg-black p-8 rounded-xl text-center sm:mb-4">
            <div class="product-image w-[250px] h-[250px] rounded-full bg-white mx-auto overflow-hidden">
                <img src="https://staging2.puruspotus.com/wp-content/uploads/Purus-Image-package.png" class="w-[100%]"/>
            </div>

            <h3 class="uppercase text-primary font-serif text-xl font-bold my-8">Product #2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, temporibus.</p>
            <a href="#" class="text-primary uppercase mt-8 inline-block px-4 py-2 border border-primary rounded-lg">Read More &rarr;</a>
            <a href="#" class="text-black bg-primary uppercase mt-8 inline-block px-4 py-2 rounded-md ml-4 border-transparent">Add to Cart &rarr;</a>
        </div>
        <div class="bg-primary p-8 rounded-xl text-center sm:mb-4">
            <div class="product-image w-[250px] h-[250px] rounded-full bg-white mx-auto overflow-hidden">
                <img src="https://staging2.puruspotus.com/wp-content/uploads/Purus-Image-package.png" class="w-[100%]"/>
            </div>

            <h3 class="uppercase text-black font-serif text-xl font-bold my-8">Subsrciption</h3>
            <p>2, 4 or 6 per season<br>( 4x / year )</p>
            <a href="#" class="text-black uppercase mt-8 inline-block px-4 py-2 border border-black rounded-lg">Read More &rarr;</a>
            <a href="#" class="text-primary bg-black uppercase mt-8 inline-block px-4 py-2 rounded-md ml-4 border-transparent">Add to Cart &rarr;</a>
        </div>
    </div>
</section>
<section class="lg:min-h-[40rem] bg-black text-white" style="background: #040707 url(<?php echo get_the_post_thumbnail_url($section_4_ID,'banner-1440x800');?>) no-repeat; background-position: right bottom; background-size: contain;">
    <div class="container lg:max-w-screen-xl mx-auto p-4 md:grid md:grid-cols-3 gap-8">
        <div class="section-description col-span-3">
            <h2 class="text-3xl lg:text-5xl tracking-tight my-4 text-primary font-serif">Testimonials</h2>
            <p>Receive a free Purus if you send in a taste comparrison video or testimonial</p>
            <a href="#" class="text-primary uppercase">Read More &rarr;</a>
        </div>
        <div class="testimonial-image w-full h-auto aspect-square border-8 border-primary rounded-full overflow-hidden">
            <img src="https://staging2.puruspotus.com/wp-content/uploads/Testimonial-1.jpg" alt="">
        </div>
        <div class="testimonial-text">
        <p>Drinking red wine was embarrassing and
not enjoyable for me w/ the reddened skin
reaction I had after consuming a glass and
headaches that ensued not long after.
When my friend told me about Purus, I was
curious to try. It's changed my enjoyment
of pairing a great steak with a cab. Or even
dark chocolate w/ a dessert wine. Sul tes
go away! Purus has changed my eating &
drinking experience for the better.<p>
<p class="font-serif text-primary text-lg my-4 italic">Jodi, Michigan USA</p>
        </div>
        <div class="col-span-3">
            <a href="#" class="text-primary uppercase">Read More &rarr;</a>
        </div>  
    </div>
</section>



<?php
get_footer();
