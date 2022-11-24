<section class="bg-[url('../images/bgcart.jpg')] bg-no-repeat bg-cover bg-center h-80 flex justify-center items-center">
   <h1 class="uppercase text-4xl font-bold text-white">Checkout</h1>
</section>

<section class="justify-center py-9">
    <div class="max-w-screen-xl mx-auto px-4">
        <a href="<?php echo get_home_url().'/cart' ?>" class="flex items-center text-primary mb-4">
            <span class="material-symbols-rounded icon-outline">chevron_left</span>
            <p class="">Back to cart</p>
        </a>

        <form class="flex flex-wrap">
            <div class="shadow-default rounded-lg p-4 w-full md:w-8/12">
                <h3 class="text-xl font-semibold mb-4">How would you like to get your order?</h3>
                <div class="py-4 flex flex-wrap">
                    <div class="w-full md:w-1/2 md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">First name</p>
                        <input class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="Huy">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">Last name</p>
                        <input class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="Nguyen Quang">
                    </div>
                    <div class="w-full mt-4">
                        <p class="text-sm mb-2">Email address</p>
                        <input class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="email" placeholder="huynguyenquang@gmail.com">
                    </div>
                </div>
                <div class="py-4 flex flex-wrap">
                    <div class="w-full md:mb-4">
                        <p class="text-sm mb-2">Address</p>
                        <input class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="158 / 3 Xo Viet Nghe Tinh Street, Binh Thanh District">
                    </div>
                    <div class="w-full md:w-1/2 md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">Town / City</p>
                        <input class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="Ho Chi Minh">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">Zip code / Postal code</p>
                        <input class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="number" placeholder="008428">
                    </div>
                </div>
                <div class="py-4">
                    <p class="text-sm mb-2">Payment method</p>
                    <div class="flex flex-wrap -mx-3">
                        <div class="px-3 w-4/12 font-medium flex items-center">
                            <input id="payment_method_1" type="radio" name="payment_method" value="1" hidden class="peer" checked>
                            <label for="payment_method_1" class="duration-150 px-4 py-3 peer-checked:text-white peer-checked:bg-primary peer-checked:border-primary border border-[#808080] w-full cursor-pointer rounded-lg text-center">Credit Card</label>
                        </div>
                        <div class="px-3 w-4/12 font-medium flex items-center">
                            <input id="payment_method_2" type="radio" name="payment_method" value="1" hidden class="peer">
                            <label for="payment_method_2" class="duration-150 px-4 py-3 peer-checked:text-white peer-checked:bg-primary peer-checked:border-primary border border-[#808080] w-full cursor-pointer rounded-lg text-center">Debit Card</label>
                        </div>
                        <div class="px-3 w-4/12 font-medium flex items-center">
                            <input id="payment_method_3" type="radio" name="payment_method" value="1" hidden class="peer">
                            <label for="payment_method_3" class="duration-150 px-4 py-3 peer-checked:text-white peer-checked:bg-primary peer-checked:border-primary border border-[#808080] w-full cursor-pointer rounded-lg text-center">Cash on Delivery (COD)</label>
                        </div>

                    </div>
                </div>
                <div class="grid gap-4 grid-cols-2 mt-5 ml-3 py-5">
                    <div>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                            Cardholder name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder=" Cardholder name">

                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                            Cardnumber
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Cardnumber">
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                            Expired date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="date" placeholder=" Expired date">

                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                            CVV
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="password" placeholder="CVV">
                    </div>


                </div>



            </div>

        </form>

        <div class="w-3/12 px-5  mt-5  ml-3 ">

            <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700 border-2 rounded-md  ml-5    ">
                <li class="  pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4 my-4 mt-3">
                        <div class="flex-shrink-0">
                            <img class="w-16 h-15 " src="https://templateprj.vercel.app/img/products/f1.jpg"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0 mt-3">
                            <p class="text-sm  text-gray-900 truncate dark:text-white font-bold	">
                                Cartoon Astronaut T-Shirts
                            </p>
                            <p class="text-xs text-gray-500 truncate dark:text-gray-400 ml-1">
                                xl,red
                            </p>
                            <div class="items-center text-base font-semibold text-gray-900 dark:text-white ml-1">
                                150.000 đ
                            </div>
                        </div>
                    
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-16 h-15" src="https://templateprj.vercel.app/img/products/f1.jpg"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0 mt-3">
                            <p class="text-sm  text-gray-900 truncate dark:text-white font-bold	">
                                Cartoon Astronaut T-Shirts
                            </p>
                            <p class="text-xs text-gray-500 truncate dark:text-gray-400 ml-1">
                                xl,red
                            </p>
                            <div class="items-center text-base font-semibold text-gray-900 dark:text-white ml-1">
                                150.000 đ
                            </div>
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-16 h-15" src="https://templateprj.vercel.app/img/products/f1.jpg"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0 mt-3">
                            <p class="text-sm  text-gray-900 truncate dark:text-white font-bold	">
                                Cartoon Astronaut T-Shirts
                            </p>
                            <p class="text-xs text-gray-500 truncate dark:text-gray-400 ml-1">
                                xl,red
                            </p>
                            <div class="items-center text-base font-semibold text-gray-900 dark:text-white ml-1">
                                150.000 đ
                            </div>
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-16 h-15" src="https://templateprj.vercel.app/img/products/f1.jpg"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0 mt-3">
                            <p class="text-sm  text-gray-900 truncate dark:text-white font-bold	">
                                Cartoon Astronaut T-Shirts
                            </p>
                            <p class="text-xs text-gray-500 truncate dark:text-gray-400 ml-1">
                                xl,red
                            </p>
                            <div class="items-center text-base font-semibold text-gray-900 dark:text-white ml-1">
                                150.000 đ
                            </div>
                        </div>
                    </div>
                </li>
                <li class="pt-3 pb-0 sm:pt-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-16 h-15" src="https://templateprj.vercel.app/img/products/f1.jpg"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0 mt-3">
                            <p class="text-sm  text-gray-900 truncate dark:text-white font-bold	">
                                Cartoon Astronaut T-Shirts
                            </p>
                            <p class="text-xs text-gray-500 truncate dark:text-gray-400 ml-1">
                                xl,red
                            </p>
                            <div class="items-center text-base font-semibold text-gray-900 dark:text-white ml-1">
                                150.000 đ
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div
                    class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-base px-6 py-3.5 text-center bg-[#041E42] mt-2 ">
                    <button class="" type="button"> <a href="">Place order </a> </button>
                </div>
                

                </li>
            </ul>


        </div>





        </div>
        </div>

        </div>
    </div>
</section>