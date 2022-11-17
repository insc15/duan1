<?php
require('./controllers/product.php');
$list_product = view_products();
?>

<section
    class="bg-[url('../images/hero4.png')] bg-no-repeat bg-cover bg-center h-[70vh] md:h-96 lg:h-screen flex flex-col justify-center items-start">
    <div class="max-w-screen-xl mx-auto px-5 w-full">
        <h4 class="pb-4 text-base lg:text-xl font-bold">Trade-in-offer</h4>
        <h1 class="text-3xl lg:text-5xl font-bold">Super value deals <br> <span class="text-primary leading-snug">On all
                products</span> </h1>
        <p class="my-5">Save more with coupons & up to 70%off!</p>
    </div>
</section>
<section class="md:h-96 lg:h-screen">
    <div class="text-center my-10">
        <p class="text-4xl font-bold">Featured Products</p>
        <p class="text-sm">Summer Collection New Morden Design</p>
    </div>
    <div class="grid grid-cols-4 gap-x-10 max-w-screen-xl mx-auto  w-full ">
        <!-- product -->
        <!-- for list hàng -->
        <?php foreach ($list_product as $value) : ?>
        <!-- kiểm tra loại hàng -->
        <?php if ($value['featured'] == false) : ?>
        <div class="bg-white rounded-lg shadow-xl border-green-600 border-2 p-3">
            <a href="">
                <div class="">
                    <a href=""><img class="" src="<?php echo $value['featured_image'] ?>" alt=""></a>
                </div>
            </a>
            <div class="trademark ">
                <p class="text-xs pt-4"><?php echo $value['name'] ?></p>
            </div>
            <div class="name">
                <a href="">
                    <h4 class="text-base font-bold hover:text-red-700">Cartoon Astronaut T-Shirts</h4>
                </a>
            </div>
            <a href="">
                <div class="review flex text-yellow text-xs">
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                </div>
            </a>
            <a href="">
                <div class="price">
                    <p class="text-green-600 font-bold text-base pt-2"><?php echo $value['price'] ?></p>
                </div>
            </a>
            <a href="">
                <div class="but my-2">
                    <button class="bg-green-800 rounded-sm h-9 w-64 hover:bg-red-700 ease-in-out duration-300">
                        <p class="justify-center flex text-base text-white py-2"><i
                                class="fi fi-rr-shopping-cart-add"></i> ADD TO CART</p>
                    </button>
                </div>
            </a>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="explore my-10 flex justify-center">
        <a href="">
            <button
                class="bg-transparent w-36 rounded-lg h-12 border-2 border-green-600 hover:-translate-y-3 ease-in-out duration-500 ">
                <p class="text-base font-medium text-green-600 hover:text-red">Explore More</p>
            </button>
        </a>

    </div>
</section>

<!-- section2 -->
<section class="md:h-96 lg:h-screen">
    <div class="text-center my-10">
        <p class="text-4xl font-bold">New Arrivals</p>
        <p class="text-sm">Summer Collection New Morden Design</p>
    </div>
    

    <div class="grid grid-cols-4 gap-x-10 max-w-screen-xl mx-auto  w-full ">
        <!-- product -->
        <!-- for list hàng -->
        <?php foreach ($list_product as $value) : ?>
        <!-- kiểm tra loại hàng -->
        <?php if ($value['featured']) : ?>
        <div class="bg-white rounded-lg shadow-xl border-green-600 border-2 p-3">
            <a href="">
                <div class="">
                    <a href=""><img class="" src="<?php echo $value['featured_image'] ?>" alt=""></a>
                </div>
            </a>
            <div class="trademark ">
                <p class="text-xs pt-4"><?php echo $value['name'] ?></p>
            </div>
            <div class="name">
                <a href="">
                    <h4 class="text-base font-bold hover:text-red-700">Cartoon Astronaut T-Shirts</h4>
                </a>
            </div>
            <a href="">
                <div class="review flex text-yellow text-xs">
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                </div>
            </a>
            <a href="">
                <div class="price">
                    <p class="text-green-600 font-bold text-base pt-2"><?php echo $value['price'] ?></p>
                </div>
            </a>
            <a href="">
                <div class="but my-2">
                    <button class="bg-green-800 rounded-sm h-9 w-64 hover:bg-red-700 ease-in-out duration-300">
                        <p class="justify-center flex text-base text-white py-2"><i
                                class="fi fi-rr-shopping-cart-add"></i> ADD TO CART</p>
                    </button>
                </div>
            </a>
        </div>
        <!-- zzz -->
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="explore my-10 flex justify-center">
        <a href="">
            <button
                class="bg-transparent w-36 rounded-lg h-12 border-2 border-green-600 hover:-translate-y-3 ease-in-out duration-500 ">
                <p class="text-base font-medium text-green-600 hover:text-red">Explore More</p>
            </button>
        </a>

    </div>
</section>
</section>