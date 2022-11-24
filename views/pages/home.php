<?php
require('./controllers/product.php');
?>

<section
    class="bg-[url('../images/hero4.png')] bg-no-repeat bg-cover bg-center h-[70vh] md:h-96 lg:h-screen flex flex-col justify-center items-start">
    <div class="max-w-screen-xl mx-auto px-4 w-full">
        <h4 class="pb-4 text-base lg:text-xl font-bold">Trade-in-offer</h4>
        <h1 class="text-3xl lg:text-5xl font-bold">Super value deals <br> <span class="text-primary leading-snug">On all
                products</span> </h1>
        <p class="my-5">Save more with coupons & up to 70%off!</p>
    </div>
</section>

<section class="pt-12">
    <div class="mb-8 text-center">
        <h2 class="text-2xl md:text-4xl font-bold">Featured Products</h2>
        <p class="md:text-base text-sm">Summer Collection New Morden Design</p>
    </div>
    <div class="flex flex-wrap max-w-screen-xl -mx-1 -my-2 md:mx-auto px-4">
        <?php foreach (get_product(array('featured' => 1)) as $value) : if ($value['featured']) : ?>
        <div class="w-1/2 md:w-1/4 py-2 px-1 md:px-3">
            <a href="<?php echo get_home_url() . "/product?id=" . $value['id'] ?>"
                class="grid h-full bg-white rounded-lg md:hover:shadow-xl md:shadow border-primary md:border md:p-3 ease-in-out duration-150">
                <div class="rounded pt-[100%] overflow-hidden relative">
                    <img class="absolute top-0" src="<?php echo $value['featured_image'] ?>" alt="" />
                </div>
                <div class="py-2 md:py-4">
                    <p class="text-xs mb-1">adidas</p>
                    <h3 class="font-bold md:text-base text-sm"><?php echo $value['name'] ?></h3>
                    <div class="text-yellow-400 flex">
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                    </div>
                    <p class="text-primary font-bold mt-1"><?php echo $value['formatted_price'] ?></p>
                </div>
                <button
                    class="bg-secondary hover:bg-primary rounded w-full mt-auto py-2 justify-center text-white flex items-center leading-normal text-xs md:text-base">
                    <span class="material-symbols-rounded icon-outline hidden md:block">add_shopping_cart</span>
                    ADD TO CART
                </button>
            </a>
        </div>
        <?php endif;
        endforeach; ?>
    </div>
    <a href="#"
        class="mt-8 w-fit mx-auto md:text-base text-sm block rounded border-2 border-primary py-3 px-4 font-semibold text-primary hover:bg-primary hover:text-white duration-150">Explore
        More</a>
</section>

<section class="pt-12">
    <div class="mb-8 text-center">
        <h2 class="text-2xl md:text-4xl font-bold">New Arrivals</h2>
        <p class="md:text-base text-sm">Summer Collection New Morden Design</p>
    </div>
    <div class="flex flex-wrap max-w-screen-xl -mx-1 -my-2 md:mx-auto px-4">
        <?php foreach (get_product() as $value) : ?>
        <div class="w-1/2 md:w-1/4 py-2 px-1 md:px-3">
            <a href="<?php echo get_home_url() . "/product?id=" . $value['id'] ?>"
                class="grid h-full bg-white rounded-lg md:hover:shadow-xl md:shadow border-primary md:border md:p-3 ease-in-out duration-150">
                <div class="rounded pt-[100%] overflow-hidden relative">
                    <img class="absolute top-0" src="<?php echo $value['featured_image'] ?>" alt="" />
                </div>
                <div class="py-2 md:py-4">
                    <p class="text-xs mb-1">adidas</p>
                    <h3 class="font-bold md:text-base text-sm"><?php echo $value['name'] ?></h3>
                    <div class="text-yellow-400 flex">
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                        <span class="material-symbols-rounded icon-fill">star</span>
                    </div>
                    <p class="text-primary font-bold mt-1"><?php echo $value['formatted_price'] ?></p>
                </div>
                <button
                    class="bg-secondary hover:bg-primary rounded w-full mt-auto py-2 justify-center text-white flex items-center leading-normal text-xs md:text-base">
                    <span class="material-symbols-rounded icon-outline hidden md:block">add_shopping_cart</span>
                    ADD TO CART
                </button>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <a href="#"
        class="mt-8 w-fit mx-auto md:text-base text-sm block rounded border-2 border-primary py-3 px-4 font-semibold text-primary hover:bg-primary hover:text-white duration-150">Explore
        More</a>
</section>
<div class="pt-12"></div>