<?php

?>

<section>
    <div class="flex mt-10">
        <div class="w-5/12 px-5 lg:px-20 ">
            <div class="">
                <img src=" <?php echo $product['featured_image'] ?>" />
            </div>
            <div class="flex">
                <?php foreach ($product['list_image'] as $value) : ?>
                <div class="w-4/12 mt-2">
                    <img src="<?php echo $value ?>" alt="" />
                </div>
                <?php endforeach ?>
            </div>

        </div>

        <div class="w-7/12">
            <div class="font-bold text-base	">
                <p>Home / T-shirt</p>
            </div>
            <div class="font-bold ">
                <p class="py-4 text-3xl"><?php echo $product['name'] ?></p>
                <div class=" text-3xl text-primary flex ">
                    <span class="pr-4 text-2xl"> <?php echo $product['formatted_price'] ?></span>
                    <span class=" line-through text-gray-400 text-base">
                        <?php echo $product['formatted_discount'] ?></span>
                </div>
            </div>
            <div class="float-none">
                <p>
                    <?php echo $product['description'] ?>
                </p>
            </div>
            <div class="flex">

                <div class="flex flex-wrap items-center my-5">
                    <p class="font-bold mr-6">Color:</p>
                    <div class="flex items-center">
                        <div class="flex items-center mr-3 ">
                            <input id="radio1" type="radio" name="radio" class="hidden focus:ring-blue-500" checked />
                            <label for="radio1" class="flex items-center cursor-pointer text-xl">
                                <span
                                    class="w-8 h-8 inline-block mr-2 rounded-full border border-grey flex-no-shrink bg-black"></span>
                            </label>
                        </div>

                        <div class="flex items-center mr-3 ">
                            <input id="radio2" type="radio" name="radio" class="hidden" />
                            <label for="radio2" class="flex items-center cursor-pointer text-xl">
                                <span
                                    class="w-8 h-8 inline-block mr-2 rounded-full border border-grey flex-no-shrink bg-white"></span>
                            </label>
                        </div>

                        <div class="flex items-center mr-3 ">
                            <input id="radio3" type="radio" name="radio" class="hidden" />
                            <label for="radio3" class="flex items-center cursor-pointer text-xl">
                                <span
                                    class="w-8 h-8 inline-block mr-2 rounded-full border border-grey flex-no-shrink bg-red-600"></span>
                            </label>
                        </div>

                        <div class="flex items-center mr-3 ">
                            <input id="radio4" type="radio" name="radio" class="hidden" />
                            <label for="radio4" class="flex items-center cursor-pointer text-xl">
                                <span
                                    class="w-8 h-8 inline-block mr-2 rounded-full border border-grey flex-no-shrink bg-blue-700 "></span>

                            </label>
                        </div>

                    </div>
                </div>



            </div>
            <div class="inline-block relative  mt-3 flex">
                <input type="number" value="0" class="border border-solid ">
                <select
                    class="w-25 block appearance-none  bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline ">
                    <option>size</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>

                <button
                    class="bg-secondary hover:bg-primary rounded ml-2 py-2 justify-center text-white flex items-center leading-normal text-xs md:text-base">
                    <span class="material-symbols-rounded icon-outline hidden peer md:block">add_shopping_cart</span>
                    ADD TO CART
                </button>
            </div>



        </div>
        <div class="">
            <input type="text" class="w-10">
        </div>



    </div>
    </div>
    <div class=" w-5/12 px-5 lg:px-20 mt-10">
        <h1 class="font-bold">Description</h1>
    </div>
    <hr class="mt-2 " />
    <div class="px-5 lg:px-20 mt-6">
        <?php echo $product['description_detail'] ?>
    </div>
    <div class=" w-5/12 px-5 lg:px-20 mt-10">
        <h1 class="font-bold">Comments</h1>
    </div>
    <hr class="mt-4" />

    <div class="relative  overflow-hidden peer w-5/12 px-5 lg:px-20 mt-10 flex py-5 ">
        <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/abfluao/2022_09_01/6-5116.jpg" alt="Avatar"
            class="object-cover w-20 h-20 rounded-[50%]   " />
        <input type="text" id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-5"
            placeholder="Comments" required>
    </div>
</section>