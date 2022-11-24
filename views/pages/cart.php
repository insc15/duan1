<!-- banner -->
<section class="bg-[url('../images/AdobeStock_418499892.jpeg')] bg-no-repeat bg-cover bg-center h-[60vh] flex flex-col justify-center items-start"></section>

<section class="pt-9 max-w-screen-xl mx-auto items-center font-[Montserrat] mt-4">
    <!-- main -->
    <div class="flex justify-center mt-4">
        <!-- left -->
        <form method="POST" action="<?php echo get_home_url()."/cart";?>">
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
                            <img class="absolute top-0 h-24 " src="<?php echo $item['featured_image']?>">
                        </div>
                    </div>
                    <div class="flex w-5/12  items-center ml-6">
                        <div>
                            <h3 class="text-[#041E42] text-base font-bold font-[Montserrat] ">
                                <?php echo $item['name'] ?>
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
                                <input type="number" min="1" name="quantity[<?php echo $item['id']?>]" class="focus:outline-none   h-6 w-8  text-base px-2 mx-2"
                                    value="<?php echo $item['quantity'] ?>">
                            </div>
                            <a href=""
                                class="text-[#041E42] w-7 h-7 rounded flex justify-center items-center hover:bg-[#041E42] hover:text-white">
                                <span class="material-symbols-rounded">add</span>
                            </a>
                            <a href="<?php echo get_home_url()."/cart" ?>"
                                class="flex justify-center items-center ml-4 w-7 h-7 rounded text-[#041E42] hover:bg-[#041E42] hover:text-white ">
                                <button name="del_cart_item" value="<?php echo $item['id']?>" type="submit"><span
                                    class="material-symbols-rounded">close</span></button>
                            </a>

                        </div>
                    </div>
                </div>
                <?php
               }
            ?>
        <div class="flex mb-20 font-[Montserrat]">
            <a href="<?php echo get_home_url()?>"
                class="flex justify-center items-center text-base text-[#088178] border-[#088178] border py-1 px-3 rounded mt-3 ml-2 hover:bg-[#041E42] hover:text-white">
                <span class="material-symbols-rounded">arrow_back</span>
                <span class="ml-3">Continue shopping</span>
            </a>
            <a href="<?php echo get_home_url()."/cart" ?>"
                class="border py-1 px-4 rounded mt-3 ml-2 bg-[#041E42] text-white text-base 
                hover:bg-white hover:text-[#088178] hover:border-[#088178]">
                <button name="update_cart" type="submit">Update cart</button></a>
        </div>
        </form>
    </div>
    <!-- right -->
    <div class="w-4/12 pl-3 mt-3 font-[Montserrat]">
        <div class="rounded-lg shadow-xl border-2 py-5 grid grid-cols-2 px-4 font-[Montserrat]">
            <span class="text-left font-semibold ">Total</span>
            <span class="text-right text-[#088178]"><?php echo $total_price ?></span>
        </div>
        <a href="<?php echo get_home_url()."/checkout" ?>"
            class="rounded-xl  border-2 py-3 grid grid-cols-1 px-4 font-[Montserrat] mt-4 text-center text-white bg-[#041E42] hover:bg-white hover:text-[#088178] hover:border-[#088178]">
            Proceed checkout
        </a>
        <!-- method -->
        <div class=" rounded-xl shadow-xl border-2 py-3 px-4 mt-6">
            <p>Accepted payment methods:</p>
            <div class=" flex mt-3">
                <a href="" class="mr-4">
                    <svg width="52" height="32" viewBox="0 0 52 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M49.8451 -0.143066H1.91961C0.858431 -0.143066 0 0.708133 0 1.75773V30.2441C0 31.2937 0.858431 32.1449 1.91961 32.1449H49.8451C50.9063 32.1449 51.7647 31.2937 51.7647 30.2441V1.75773C51.7647 0.708133 50.9063 -0.143066 49.8451 -0.143066ZM10.1545 22.7988L7.32255 11.9508C7.14784 11.2809 6.99902 11.0377 6.47706 10.754C5.62078 10.2975 4.21235 9.86867 2.96784 9.59987L3.05412 9.2052H9.10196C9.87196 9.2052 10.5665 9.71294 10.7412 10.5919L12.238 18.4596L15.9392 9.2052H19.6749L13.9161 22.7988H10.1545ZM18.2578 22.7988L21.1998 9.2052H24.7565L21.8145 22.7988H18.2578ZM28.2096 23.0143C26.62 22.9951 25.0843 22.6687 24.2539 22.2911L24.8967 19.3108C25.7249 19.6927 26.7624 20.1983 28.5504 20.1705C29.5727 20.1535 30.6684 19.7545 30.6771 18.8415C30.6814 18.2441 30.2198 17.8175 28.8329 17.1519C27.4849 16.5012 25.6969 15.4089 25.7206 13.4527C25.7422 10.8073 28.2161 8.95987 31.7296 8.95987C33.0971 8.95987 34.1992 9.25427 35.0555 9.56147L34.4322 12.4436C32.8404 11.7204 31.4363 11.7695 30.9251 11.8377C29.8984 11.9679 29.4282 12.4863 29.4174 12.9769C29.3808 14.5812 34.4149 14.7775 34.3976 18.3636C34.389 21.186 31.9453 23.0143 28.2096 23.0143ZM43.6808 22.7988L43.2516 20.7679H38.6898L37.95 22.7988H34.2186L39.5504 10.2015C39.8049 9.59987 40.3786 9.2052 41.0623 9.2052H44.0971L46.9678 22.7988H43.6808ZM39.7122 17.9817H42.6606L41.5843 12.8767L39.7122 17.9817Z"
                            fill="#041E42" />
                    </svg>
                </a>
                <a href="" class="mr-4">
                    <svg width="47" height="32" viewBox="0 0 47 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.764648" width="46" height="32" rx="4" fill="#F0F0F0" />
                        <path d="M28.506 7.61377H18.9985V24.386H28.506V7.61377Z" fill="#FF5F00" />
                        <path
                            d="M19.6021 15.9999C19.6006 14.3846 19.9735 12.7902 20.6925 11.3372C21.4115 9.88434 22.4578 8.61105 23.7522 7.61379C22.1493 6.37694 20.2242 5.60776 18.1971 5.39417C16.1699 5.18058 14.1224 5.53118 12.2887 6.40592C10.4549 7.28067 8.90882 8.64425 7.82715 10.3408C6.74548 12.0374 6.17188 13.9984 6.17188 15.9999C6.17188 18.0014 6.74548 19.9624 7.82715 21.659C8.90882 23.3555 10.4549 24.7191 12.2887 25.5939C14.1224 26.4686 16.1699 26.8192 18.1971 26.6056C20.2242 26.392 22.1493 25.6229 23.7522 24.386C22.4578 23.3887 21.4115 22.1154 20.6925 20.6625C19.9735 19.2096 19.6006 17.6152 19.6021 15.9999Z"
                            fill="#EB001B" />
                        <path
                            d="M41.332 15.9999C41.332 18.0013 40.7585 19.9624 39.6769 21.659C38.5953 23.3555 37.0492 24.7191 35.2155 25.5938C33.3818 26.4686 31.3343 26.8192 29.3072 26.6056C27.2801 26.392 25.3551 25.6229 23.7522 24.386C25.0454 23.3877 26.0909 22.1142 26.8098 20.6616C27.5287 19.2089 27.9022 17.6149 27.9022 15.9999C27.9022 14.3849 27.5287 12.7909 26.8098 11.3382C26.0909 9.88555 25.0454 8.61206 23.7522 7.61378C25.3551 6.37693 27.2801 5.60776 29.3072 5.39417C31.3343 5.18058 33.3818 5.5312 35.2155 6.40595C37.0492 7.2807 38.5953 8.64428 39.6769 10.3408C40.7585 12.0374 41.332 13.9985 41.332 15.9999Z"
                            fill="#F79E1B" />
                        <path
                            d="M40.2953 22.6096V22.2662H40.4363V22.1962H40.0771V22.2662H40.2183V22.6096H40.2953ZM40.9927 22.6096V22.1956H40.8826L40.7559 22.4803L40.6293 22.1956H40.5191V22.6096H40.5968V22.2973L40.7156 22.5665H40.7962L40.915 22.2966V22.6096H40.9927Z"
                            fill="#F79E1B" />
                    </svg>
                </a>
                <a href="" class="mr-4">
                    <svg width="47" height="32" viewBox="0 0 47 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_252_211)">
                            <path
                                d="M1.10303 26.9092C1.10303 28.2594 1.69936 29.5543 2.76085 30.509C3.82233 31.4637 5.26202 32.0001 6.76318 32.0001H40.7241C42.2253 32.0001 43.665 31.4637 44.7265 30.509C45.7879 29.5543 46.3843 28.2594 46.3843 26.9092V12.9092H1.10303V26.9092ZM7.77393 20.0001C7.77393 19.2768 8.09339 18.5831 8.66204 18.0716C9.2307 17.5602 10.002 17.2728 10.8062 17.2728H15.6577C16.4619 17.2728 17.2332 17.5602 17.8018 18.0716C18.3705 18.5831 18.6899 19.2768 18.6899 20.0001V21.8183C18.6899 22.5416 18.3705 23.2353 17.8018 23.7467C17.2332 24.2582 16.4619 24.5455 15.6577 24.5455H10.8062C10.002 24.5455 9.2307 24.2582 8.66204 23.7467C8.09339 23.2353 7.77393 22.5416 7.77393 21.8183V20.0001Z"
                                fill="#041E42" />
                            <path
                                d="M40.7241 0H6.76318C5.26202 0 3.82233 0.536362 2.76085 1.49109C1.69936 2.44582 1.10303 3.74072 1.10303 5.09091V7.45455H46.3843V5.09091C46.3843 3.74072 45.7879 2.44582 44.7265 1.49109C43.665 0.536362 42.2253 0 40.7241 0Z"
                                fill="#041E42" />
                        </g>
                        <defs>
                            <clipPath id="clip0_252_211">
                                <rect width="46" height="32" fill="white" transform="translate(0.764648)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="" class="mr-4">
                    <svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.2151 18.9089C22.6225 18.9089 21.2688 18.3432 20.1539 17.2119C19.0391 16.0806 18.4817 14.7068 18.4817 13.0907C18.4817 11.4745 19.0391 10.1008 20.1539 8.96947C21.2688 7.83815 22.6225 7.2725 24.2151 7.2725C25.8077 7.2725 27.1614 7.83815 28.2762 8.96947C29.391 10.1008 29.9484 11.4745 29.9484 13.0907C29.9484 14.7068 29.391 16.0806 28.2762 17.2119C27.1614 18.3432 25.8077 18.9089 24.2151 18.9089ZM8.92617 25.6967C8.12988 25.6967 7.45302 25.4139 6.89562 24.8483C6.33821 24.2826 6.05951 23.5957 6.05951 22.7877V3.39371C6.05951 2.58563 6.33821 1.89876 6.89562 1.3331C7.45302 0.767447 8.12988 0.484619 8.92617 0.484619H39.5039C40.3002 0.484619 40.9771 0.767447 41.5345 1.3331C42.0919 1.89876 42.3706 2.58563 42.3706 3.39371V22.7877C42.3706 23.5957 42.0919 24.2826 41.5345 24.8483C40.9771 25.4139 40.3002 25.6967 39.5039 25.6967H8.92617ZM13.7039 22.7877H34.7262C34.7262 21.4301 35.188 20.2826 36.1117 19.3452C37.0354 18.4079 38.1662 17.9392 39.5039 17.9392V8.2422C38.1662 8.2422 37.0354 7.77351 36.1117 6.83613C35.188 5.89876 34.7262 4.75129 34.7262 3.39371H13.7039C13.7039 4.75129 13.2421 5.89876 12.3184 6.83613C11.3947 7.77351 10.2639 8.2422 8.92617 8.2422V17.9392C10.2639 17.9392 11.3947 18.4079 12.3184 19.3452C13.2421 20.2826 13.7039 21.4301 13.7039 22.7877ZM36.6373 31.5149H3.19284C2.39654 31.5149 1.71969 31.2321 1.16228 30.6664C0.604876 30.1008 0.326172 29.4139 0.326172 28.6058V6.3028H3.19284V28.6058H36.6373V31.5149ZM8.92617 22.7877V3.39371V22.7877Z"
                            fill="#041E42" />
                    </svg>
                </a>
            </div>
        </div>
        <?php }
            else {
         ?>
        <div class="ml-2">
            <h3 class="text-xl text-semibold">Your cart is empty!</h3>
            <a href="<?php echo get_home_url()?>"
                class="flex justify-center items-center text-base text-[#088178] border-[#088178] border py-1 px-3 rounded mt-3 ml-2 hover:bg-[#041E42] hover:text-white">
                <span class="material-symbols-rounded">arrow_back</span>
                <span class="ml-3">Continue shopping</span>
            </a>
        </div>
        <?php 
                  }
            ?>
    </div>
    </div>
</section>