<!-- $product -->

<section class="pt-11">
    <div class="flex flex-wrap max-w-screen-xl mx-auto">
        <div class="w-5/12">
            <div data="main-carousel" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($product['list_image'] as $key => $value) { ?>
                            <li class="splide__slide relative pt-[100%]">
                                <img class="absolute top-0" src="<?php echo $value ?>" alt="">
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>

        <div class="w-7/12 ">
            <div class="font-bold sm:text-sm text-xs">
                <p>Home / T-shirt</p>
            </div>
            <div class="font-bold ">
                <p class="py-4 sm:text-3xl text-xl"><?php echo $product['name'] ?></p>
                <div class=" text-3xl text-primary flex ">
                    <span class="pr-4 text-base sm:text-lg"> <?php echo $product['formatted_discount'] ?></span>
                    <span class=" line-through text-gray-400 text-xs sm:text-base">
                        <?php echo $product['formatted_price'] ?></span>
                </div>
            </div>
            <div class="sm:text-base text-xs mb-5">
                <p>
                    <?php echo $product['description'] ?>
                </p>
            </div>
            <!-- color -->
            <div class="flex items-center flex-wrap">
                <div class="flex flex-wrap items-center ">
                    <p class="font-bold mr-6">Color:</p>
                    <div class="flex items-center mr-4 ">
                        <input id="radio1" type="radio" name="radio" class="hidden peer" checked />
                        <label for="radio1"
                            class="flex items-center cursor-pointer text-xl rounded-full border peer-checked:bg-gray-800 peer-checked:ring-4">
                            <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink "></span>
                        </label>
                    </div>
                    <div class="flex items-center mr-4 ">
                        <input id="radio2" type="radio" name="radio" class="hidden peer" />
                        <label for="radio2"
                            class="flex items-center cursor-pointer text-xl rounded-full border peer-checked:bg-white peer-checked:ring-4">
                            <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink "></span>
                        </label>
                    </div>
                    <div class="flex items-center mr-4 ">
                        <input id="radio3" type="radio" name="radio" class="hidden peer" />
                        <label for="radio3"
                            class="flex items-center cursor-pointer text-xl rounded-full border peer-checked:bg-red-600 peer-checked:ring-4">
                            <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink "></span>
                        </label>
                    </div>
                    <div class="flex items-center mr-4 ">
                        <input id="radio4" type="radio" name="radio" class="hidden peer" />
                        <label for="radio4"
                            class="flex items-center cursor-pointer text-xl rounded-full border peer-checked:bg-blue-700 peer-checked:ring-4">
                            <span class="w-8 h-8 inline-block  rounded-full  border-grey flex-no-shrink "></span>
                        </label>
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
    <div class="px-5 lg:px-20 mt-10">
        <h1 class="font-bold sm:text-xl text-lg ">Description</h1>
        <hr class=" w-full my-4" />
        <?php echo $product['description_detail'] ?>
    </div>

    <div class="px-5 w-fuil lg:px-20 mt-10">
        <h1 class="font-bold sm:text-xl text-lg ">Comments</h1>
        <hr class="w-full my-4" />
    </div>
    <div>
        <div class="  overflow-hidden peer lg:px-20 flex mb-4 px-5">
            <img src="https://scontent.fhan5-3.fna.fbcdn.net/v/t39.30808-6/316549076_1373762753158250_981437111763802629_n.jpg?stp=cp0_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=Cr9XWsOLpwMAX-_V3av&_nc_ht=scontent.fhan5-3.fna&oh=00_AfBtuVyY-OxMmn4AMn1psY6d5G6iQz9GVX78FopSDrFuvw&oe=63828725"
                alt="Avatar" class="object-cover w-16 h-16 rounded-full mr-4" />
            <div class="relative w-full">
                <input type="text" id="first_name"
                    class="bg-gray-200 border border-gray-300 text-slate-700  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:border-gray-600 dark:placeholder-gray-400  pl-4 dark:focus:ring-blue-500 dark:focus:border-blue-500 h-16"
                    placeholder="Add a comment..." required>
                <span class="material-symbols-rounded absolute right-4 top-1/2 -translate-y-1/2">
                    send
                </span>
            </div>
        </div>

        <div class="  overflow-hidden peer lg:px-20 flex mb-4 px-5 text-base font-normal">
            <img src="https://scontent.fhan5-3.fna.fbcdn.net/v/t39.30808-6/316549076_1373762753158250_981437111763802629_n.jpg?stp=cp0_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=Cr9XWsOLpwMAX-_V3av&_nc_ht=scontent.fhan5-3.fna&oh=00_AfBtuVyY-OxMmn4AMn1psY6d5G6iQz9GVX78FopSDrFuvw&oe=63828725"
                alt="Avatar" class="object-cover w-16 h-16 rounded-full mr-4" />
            <div class="max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-4xl pr-7">
                <h5 class="font-bold">Nguyen Quang Huy</h5>
                <p>Tôi tên huy tôi như lồn tôi nói thật.</p>
                <span class="text-xs italic">10h30 - November 18, 2022</span>
            </div>
            <div class=" ">
                <button class="text-cyan-300 font-semibold absolute ">Reply</button>
            </div>
        </div>

        <div class=" overflow-hidden peer lg:px-20 flex mb-4 px-5 text-base font-normal">
            <img src="https://scontent.fhan5-3.fna.fbcdn.net/v/t39.30808-6/316549076_1373762753158250_981437111763802629_n.jpg?stp=cp0_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=Cr9XWsOLpwMAX-_V3av&_nc_ht=scontent.fhan5-3.fna&oh=00_AfBtuVyY-OxMmn4AMn1psY6d5G6iQz9GVX78FopSDrFuvw&oe=63828725"
                alt="Avatar" class="object-cover w-16 h-16 rounded-full mr-2 " />
            <div class="max-w-md md:max-w-xl lg:max-w-3xl xl:max-w-4xl pr-7">
                <h5 class=" font-bold">Nguyen Quang Huy</h5>
                <p>FB88 là Nhà Cái Uy Tín Hàng Đầu Châu Á. FB88 là Wesite chơi cá độ bóng đá trực tuyến, cá cược Thể
                    Thao Online, Casino trên mạng hợp pháp và uy tín.</p>
                <span class="text-xs italic">10h30 - November 18, 2022</span>
            </div>
            <div class="">
                <button class="text-cyan-300 font-semibold absolute ">Reply</button>
            </div>
        </div>
    </div>
</section>  