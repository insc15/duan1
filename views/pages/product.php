<?php
require('./controllers/product.php');
?>
<section>
    <div class="flex">
        <div class="w-5/12 px-5 lg:px-20 mt-10">
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

        <div class="w-7/12 mt-10">
            <div class="font-bold">
                <p>Home / T-shirt</p>
            </div>
            <div class="py-5 font-bold text-2xl">
                <?php echo $product['name'] ?>
                <p class="py-5 text-3xl text-primary flex">
                    <?php echo $product['formatted_price'] ?>
                    <span class="ml-3 line-through text-gray-400"> <?php echo $product['formatted_discount'] ?></span>
                </p>
                <div class="inline-block relative w-[2rem]">

                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="float-none">
                <p>
                    <?php echo $product['description'] ?>
                </p>
            </div>
            <div class="flex">

                <div class="flex flex-wrap">
                    <p class="font-bold mt-2">color:</p>
                    <div class="flex items-center mr-4">
                        <input id="red-radio" type="radio" value="" name="colored-radio"
                            class="ml-2 w-10 h-10 accent-black border rounded-full text-black ">
                        <label for="red-radio" class="ml-2 text-sm font-medium  dark:text-gray-300"></label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="green-radio" type="radio" value="" name="colored-radio"
                            class="w-10 h-10 accent-white outline-slate-50 rounded-full">
                        <label for="green-radio" class="ml-2 text-sm font-medium dark:text-gray-300"></label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input checked id="purple-radio" type="radio" value="" name="colored-radio"
                            class="w-10 h-10 accent-red-500 rounded-full">
                        <label for="purple-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="teal-radio" type="radio" value="" name="colored-radio"
                            class="w-10 h-10 accent-blue-700 rounded-full">
                        <label for="teal-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
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
                    <span class="material-symbols-rounded icon-outline hidden md:block">add_shopping_cart</span>
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

    <div class="relative  overflow-hidden w-5/12 px-5 lg:px-20 mt-10 flex py-5 ">
        <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/abfluao/2022_09_01/6-5116.jpg" alt="Avatar"
            class="object-cover w-20 h-20 rounded-[50%]   " />
        <input type="text" id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-5"
            placeholder="Comments" required>
    </div>
</section>