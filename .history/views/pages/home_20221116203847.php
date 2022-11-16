<?php
require('./controllers/product.php');
echo view_products();
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