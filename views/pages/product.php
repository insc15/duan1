<!-- $product -->

<section class="pt-11">
    <div class="flex flex-wrap max-w-screen-xl mx-auto px-4">
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
            </div>
            <!-- size -->
            <div class="flex my-5">

                <div class="flex flex-wrap items-center my-5">
                    <p class="font-bold mr-9">Size:</p>
                    <div class="flex items-center">
                        <div class="flex items-center mr-4 ">
                            <input id="size1" type="radio" name="size" class="hidden peer" checked />
                            <label for="size1"
                                class="flex items-center cursor-pointer text-xl rounded-full border  peer-checked:ring-4">
                                <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink  relative ">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">XL</span>
                                </span>
                            </label>
                        </div>

                        <div class="flex items-center mr-4 ">
                            <input id="size2" type="radio" name="size" class="hidden peer" />
                            <label for="size2"
                                class="flex items-center cursor-pointer text-xl rounded-full border  peer-checked:ring-4">
                                <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink relative  ">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">L</span>
                                </span>
                            </label>
                        </div>

                        <div class="flex items-center mr-4 ">
                            <input id="size3" type="radio" name="size" class="hidden peer" />
                            <label for="size3"
                                class="flex items-center cursor-pointer text-xl rounded-full border peer-checked:ring-4">
                                <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink relative  ">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">M</span>
                                </span>
                            </label>
                        </div>

                        <div class="flex items-center mr-4 ">
                            <input id="size4" type="radio" name="size" class="hidden peer" />
                            <label for="size4"
                                class="flex items-center cursor-pointer text-xl rounded-full border  peer-checked:ring-4">
                                <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink relative  ">
                                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">S</span>
                                </span>

                            </label>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Plus Minus -->
            <div class=" flex items-center flex-wrap ">
                <div class="custom-number-input shadow-boxShadowInput mr-4 rounded-sm">
                    <div class="flex flex-row  w-full rounded-lg  bg-white px-1 py-2 items-center">
                        <button data-action="decrement"
                            class="  text-gray-600 hover:text-white hover:bg-secondary  h-7 w-7 rounded-sm  cursor-pointer outline-none mr-2 flex items-center">
                            <span class="m-auto text-2xl font-thin ">−</span>
                        </button>
                        <input type="text"
                            class=" amount-input focus:outline-none text-center h-7 w-7 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700 mr-2 outline-none"
                            name="custom-input-number" value="1"></input>
                        <button data-action="increment"
                            class=" text-gray-600 hover:text-white hover:bg-secondary h-7 w-7  rounded-sm cursor-pointer relative">
                            <span class="m-auto text-2xl font-thin ">+</span>
                        </button>
                    </div>
                </div>
                <form method="post" action="<?php echo get_home_url()."/cart"?>">
                  <input type="hidden" name="idpro" value="<?php echo $product['id']?>" />
                  <input type="hidden" name="name" value="<?php echo $product['name']?>" />
                  <input type="hidden" name="price" value="<?php echo $product['price']?>" />
                  <input type="hidden" name="featured_image" value="<?php echo $product['featured_image']?>" />
                  <input type="hidden" name="quantity" value="1" />
                <button name="add_to_cart" type="submit"
                    class="bg-secondary hover:bg-primary rounded w-44 py-3 justify-center text-white flex items-center leading-normal text-xs ">
                    <span class="material-symbols-rounded icon-outline hidden md:block ">add_shopping_cart</span>
                    ADD TO CART
                </button>
                </form>
            </div>
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