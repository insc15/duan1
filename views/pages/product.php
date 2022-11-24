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
                <a class="hover:text-primary" href="<?php echo get_home_url() ?>">Home</a>
                <span>/</span>
                <a class="hover:text-primary" href="<?php echo get_home_url().'category?id='.$product['category'][0]['id'] ?>"><?php echo $product['category'][0]['name'] ?></a>
            </div>
            <h1 class="text-3xl mb-4 font-bold"><?php echo $product['name'] ?></h1>
            <div class="mb-4 flex items-center font-bold">
                <h4 class="text-2xl text-primary"><?php echo $product['formatted_final_price'] ?></h4>
                <?php if(intval($product['discount']) > 0) : ?>
                    <p class="text-[#808080] line-through ml-4"><?php echo $product['formatted_price'] ?></p>
                <?php endif; ?>
            </div>
            <p class="mb-4"><?php echo $product['description'] ?></p>
            <form action="">
                <div class="flex items-end mb-4">
                    <p class="w-16 font-semibold">Color:</p>
                    <div class="flex ml-6">
                        <?php foreach($product['color'] as $key => $value) : ?>
                            <div class="flex mr-2 last:mr-0">
                                <input <?php if($key === 0) {echo 'checked';} ?> id="color-radio-<?php echo $value['id'] ?>" type="radio" value="<?php echo $value['id'] ?>" name="color" class="peer" hidden>
                                <label for="color-radio-<?php echo $value['id'] ?>" class="cursor-pointer w-7 h-7 after:duration-150 after:border-2 after:rounded-full peer-checked:after:border-primary after:border-transparent after:content-[''] after:w-8 after:h-8 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 relative border border-[#DDDDDD] rounded-full" style='background-color: <?php echo $value['hex'] ?>'></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="flex items-end mb-4">
                    <p class="w-16 font-semibold">Size:</p>
                    <div class="flex ml-6">
                        <?php foreach($product['size'] as $key => $value) : ?>
                            <div class="flex mr-2 last:mr-0">
                                <input <?php if($key === 0) {echo 'checked';} ?> id="size-radio-<?php echo $value['id'] ?>" type="radio" value="<?php echo $value['id'] ?>" name="size" class="peer" hidden>
                                <label for="size-radio-<?php echo $value['id'] ?>" class="text-sm text-center leading-loose cursor-pointer w-7 h-7 after:duration-150 after:border-2 after:rounded-full peer-checked:after:border-primary after:border-transparent after:content-[''] after:w-8 after:h-8 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 relative border border-[#DDDDDD] rounded-full"><?php echo $value['name'] ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="flex">
                    <div class="p-1 quantity-input shadow-default rounded w-fit flex items-center">
                        <button type="button" class="plus rounded w-7 h-7 hover:bg-secondary hover:text-white"><span class="material-symbols-rounded icon-outline">add</span></button>
                        <input type="number" class="w-7 h-7 text-center mx-2 outline-none focus:outline-none focus:border-primary border-b-2 duration-150" min="1" value="1">
                        <button type="button" class="minus rounded w-7 h-7 hover:bg-secondary hover:text-white"><span class="material-symbols-rounded icon-outline">remove</span></button>
                    </div>
                    <button type="submit" class="bg-secondary ml-4 hover:bg-primary rounded w-fit px-4 mt-auto h-9 justify-center text-white flex items-center leading-normal text-xs md:text-base">
                        <span class="material-symbols-rounded icon-outline hidden md:block text-base mr-2">add_shopping_cart</span>
                        ADD TO CART
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>  

<section class="pt-11">
    <div class="flex flex-wrap max-w-screen-xl mx-auto px-4">
        <h2 class="font-semibold text-2xl">Description</h2>
        <hr class="my-4 bg-[#333] w-full">
        <?php echo html_entity_decode($product['description_detail']) ?>
    </div>
</section>

<section class="pt-11">
    <div class="flex flex-wrap max-w-screen-xl mx-auto px-4">
        <h2 class="font-semibold text-2xl">Comments</h2>
        <hr class="my-4 bg-[#333] w-full">
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