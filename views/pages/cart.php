<!-- banner -->
<section
    class="bg-[url('../images/hero4.png')] bg-no-repeat bg-cover bg-center h-[70vh] md:h-96 lg:h-screen flex flex-col justify-center items-start">
</section>

<section class="pt-9 max-w-screen-xl mx-auto items-center font-[Montserrat] mt-4">
    <!-- main -->
    <div class="flex justify-center mt-4">
        <!-- left -->
        <form method="POST" action="<?php echo get_home_url()?>">
        <div class="w-8/12 pr-3 ">
            <?php
            if (isset($_SESSION['cart_item'])) {
               $total_price = 0;
               $i = 0;
               foreach ($_SESSION['cart_item'] as $item) {
                  $item_price = $item['price']*$item['quantity'];
                  $total_price += $item_price; ?>
            <!-- products -->
            <div class="flex justify-center  rounded-lg shadow-xl border-2 m-2">
                <div class="w-2/12 m-1">
                    <div class="overflow-hidden relative pt-[100%]">
                        <img class="absolute top-0" src="<?php echo $item['featured_image']?>">
                    </div>
                </div>
                <div class="flex w-5/12  items-center ml-6">
                    <div>
                        <h3 class="text-[#041E42] text-base font-bold font-[Montserrat] "><?php echo $item['name'] ?>
                        </h3>
                        <div class="flex mt-2">
                            <div class="mr-1">
                                <input type="number"
                                    class="appearance-none form-input block w-11 h-6 text-xs p-1 outline-none border-2 rounded-md text-gray-900"
                                    value="0" />
                            </div>
                            <div class="ml-1">
                                <input type="number"
                                    class="appearance-none form-input block w-11 h-6 text-xs p-1 outline-none border-2 rounded-md  text-gray-900"
                                    value="0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-2/12 flex  items-center">
                    <div>
                        <p class="text-base font-normal"><?php echo $item['price'] ?>VND</p>
                    </div>
                </div>
                <div class="w-3/12 flex justify-center items-center">
                    <div class="pr-8 flex ">
                        <a href=""
                            class=" text-[#041E42] w-7 h-7 rounded flex justify-center items-center hover:bg-[#041E42] hover:text-white">
                            <span class="material-symbols-rounded">remove</span>
                        </a>
                        <div class="flex justify-center items-center">
                            <input type="text" min="1" class="focus:outline-none   h-6 w-8  text-base px-2 mx-2"
                                value="<?php echo $item['quantity'] ?>">
                        </div>

                        <a href=""
                            class="text-[#041E42] w-7 h-7 rounded flex justify-center items-center hover:bg-[#041E42] hover:text-white">
                            <span class="material-symbols-rounded">add</span>
                        </a>
                        <input type="hidden" name="id" value="<?php echo $item['id']?>" />
                        <a href="<?php echo get_home_url() ?>" name="del_item" type="submit"
                            class="flex justify-center items-center ml-4 w-7 h-7 rounded text-[#041E42] hover:bg-[#041E42] hover:text-white ">
                            <span class="material-symbols-rounded">close</span>
                        </a>

                    </div>
                </div>
            </div>
            <?php
               }
            ?>
            </form>
            <div class="flex mb-20 font-[Montserrat]">
                <a href="<?php echo get_home_url()?>"
                    class="flex justify-center items-center text-base text-[#088178] border-[#088178] border py-1 px-3 rounded mt-3 ml-2 hover:bg-[#041E42] hover:text-white">
                    <span class="material-symbols-rounded">arrow_back</span>
                    <span class="ml-3">Continue shopping</span>
                </a>
                <a href=""
                    class="border py-1 px-4 rounded mt-3 ml-2 bg-[#041E42] text-white text-base hover:bg-white hover:text-[#088178] hover:border-[#088178]">Update
                    cart</a>

            </div>
        </div>
        <!-- right -->
        <div class="w-4/12 pl-3 mt-3 font-[Montserrat]">
            <div class="rounded-lg shadow-xl border-2 py-5 grid grid-cols-2 px-4 font-[Montserrat]">
                <span class="text-left font-semibold ">Total</span>
                <span class="text-right text-[#088178]"><?php echo $total_price ?></span>
            </div>
            <a href=""
                class="rounded-xl  border-2 py-4 grid grid-cols-1 px-4 font-[Montserrat] mt-4 text-center text-white bg-[#041E42] hover:bg-white hover:text-[#088178] hover:border-[#088178]">
                Proceed checkout
            </a>
            <!-- method -->
            <div class=" rounded-xl shadow-xl border-2 py-3 px-4 mt-6">
                <p>Accepted payment methods:</p>
                <div class=" flex ">
                    <a href="">
                        <span>có cc icon này </span>
                    </a>
                    <a href="">
                        <span class="material-symbols-rounded text-5xl mr-2">toll</span>
                    </a>
                    <a href="">
                        <span class="material-symbols-rounded text-5xl mr-2">credit_card</span>
                    </a>
                    <a href="">
                        <span class="material-symbols-rounded text-5xl mr-2">payments</span>
                    </a>
                </div>
            </div>
         <?php }
            else {
         ?>
        <div class="ml-2">
            <h3 class="text-xl text-semibold">Your cart is empty!</h3>
        </div>
            <?php 
                  }
            ?>
        </div>
    </div>
</section>