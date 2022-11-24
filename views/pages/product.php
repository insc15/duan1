<!-- $product -->

<section class="pt-11">
    <div class="flex flex-wrap max-w-screen-xl mx-auto px-4">
        <div class="md:w-5/12">
            <div data-slider="main-carousel" class="splide rounded overflow-hidden">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($product['list_image'] as $key => $value) { ?>
                            <li class="splide__slide">
                                <img class="" src="<?php echo $value ?>" alt="">
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div data-slider="thumbnail-carousel" class="splide mt-2">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($product['list_image'] as $key => $value) { ?>
                            <li class="splide__slide rounded overflow-hidden">
                                <img class="" src="<?php echo $value ?>" alt="">
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="md:w-7/12 md:pl-11">
            <div class="mb-4">
                <a href="<?php echo get_home_url() ?>">Home</a>
                <span>/</span>
                <a href="<?php echo get_home_url().'category?id='.$product['category'][0]['id'] ?>"><?php echo $product['category'][0]['name'] ?></a>
            </div>
            <h1 class="text-3xl mb-4 font-bold"><?php echo $product['name'] ?></h1>
            <div class="mb-4 flex items-center font-bold">
                <h4 class="text-2xl text-primary"><?php echo $product['formatted_final_price'] ?></h4>
                <?php if(intval($product['discount']) > 0) : ?>
                    <p class="text-[#808080] line-through ml-4"><?php echo $product['formatted_price'] ?></p>
                <?php endif; ?>
            </div>
            <p class="mb-4"><?php echo $product['description_detail'] ?></p>
            <form action="">
                <div class="flex">
                    <p class="w-16">Color:</p>
                    <div class="flex">
                        <?php foreach($product['color'] as $key => $value) : ?>
                            <div class="flex items-center mb-4">
                                <input id="default-radio-<?php echo $value['id'] ?>" type="radio" value="" name="default-radio" class="w-4 h-4 bg-gray-100 border-gray-300">
                                <label for="default-radio-<?php echo $value['id'] ?>" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>  

<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        const mainCarousel = new Splide( '*[data-slider=main-carousel]', {
            rewind    : true,
            pagination: false,
        } )

        const thumbCarousel = new Splide( '*[data-slider=thumbnail-carousel]', {
            // fixedWidth: 96,
            // fixedHeight: 96,
            perPage: 5,
            gap       : 10,
            rewind    : true,
            pagination: false,
            arrows: false,
            isNavigation: true,
        } )

        mainCarousel.sync( thumbCarousel );
        mainCarousel.mount();
        thumbCarousel.mount();
    } );
</script>