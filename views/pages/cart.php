
<!-- banner -->
<section class="bg-[url('../images/bgcart.jpg')] bg-no-repeat bg-cover bg-center h-80 flex justify-center items-center">
   <h1 class="uppercase text-4xl font-bold text-white">Cart</h1>
</section>

<section class="py-9 mt-4">
   <div class="max-w-screen-xl mx-auto px-4">
      <h3 class="text-xl font-bold">Items</h3>
      <!-- main -->
      <div class="flex justify-center mt-4 flex-wrap">
         <!-- left -->
         <div class="md:w-8/12 pr-3">
            <!-- products -->
            <div class="flex items-center justify-between rounded-lg shadow-default p-1 pr-6">
               <div class="flex items-center">
                  <div class="rounded overflow-hidden w-24">
                     <div class="relative pt-[100%]">
                        <img class="absolute top-0" src="https://templateprj.vercel.app/img/products/f1.jpg" alt="">
                     </div>
                  </div>
                  <div class="ml-6">
                     <a href="#"><h3 class="text-secondary hover:text-primary text-base font-bold  ">Cartoon Astronaut T-Shirts</h3></a>
                     <div class="flex mt-2">
                        <div class="">
                           <select class="text-xs px-2 border-2 border-[#D9D9D9] py-2 rounded outline-none focus:outline-none" name="size">
                              <option value="1">XL</option>
                           </select>
                        </div>
                        <div class="ml-3">
                           <select class="text-xs px-2 border-2 border-[#D9D9D9] py-2 rounded outline-none focus:outline-none" name="size">
                              <option value="1">Red</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <p>150.000 đ</p>
               <div class="flex items-center">
                  <div class="p-1 quantity-input rounded w-fit flex items-center">
                     <button type="button" class="plus rounded w-7 h-7 bg-secondary text-white"><span class="material-symbols-rounded icon-outline">add</span></button>
                     <input type="number" class="w-7 h-7 text-center mx-2 outline-none focus:outline-none focus:border-primary border-b-2 duration-150" min="1" value="1">
                     <button type="button" class="minus rounded w-7 h-7 bg-secondary text-white"><span class="material-symbols-rounded icon-outline">remove</span></button>
                  </div>
                  <a href="" class="flex justify-center items-center ml-4 w-7 h-7 rounded text-[#041E42] hover:bg-[#041E42] hover:text-white ">
                     <span class="material-symbols-rounded">close</span>
                  </a>
               </div>
            </div>  
           
            <div class="flex mt-4">   
               <a href="#" class="duration-150 flex justify-center items-center text-base text-primary border-primary border py-1 px-3 rounded mr-6 hover:bg-[#041E42] hover:text-white">
                  <span class="material-symbols-rounded">arrow_back</span>
                  <span class="ml-3">Continue shopping</span>
               </a>
               <a href="#" class="duration-150 border py-1 px-4 rounded bg-[#041E42] text-white text-base hover:bg-white hover:text-primary hover:border-primary">Update cart</a>
            </div>
         </div>
         <!-- right -->
         <div class="md:w-4/12 pl-3">
            <div class="rounded-lg shadow-default p-4 flex font-semibold">
               <span class="">Total</span>
               <span class="ml-auto text-primary">1.000.000.000đ</span>
            </div>
            <a href="<?php echo get_home_url().'/checkout' ?>" class="rounded-lg p-3 mt-4 border-2 border-transparent duration-150 w-full block text-center text-white bg-[#041E42] hover:bg-white hover:text-primary hover:border-primary">
               Proceed checkout
            </a>
            <!-- method -->
            <div class=" rounded-lg shadow-default p-4 mt-4">
               <p>Accepted payment methods:</p>
               <div class=" flex mt-3">
                  <img src="<?php echo get_home_url() ?>/assets/images/cc-visa.svg" class="mr-3" alt="">
                  <img src="<?php echo get_home_url() ?>/assets/images/mc_symbol.svg" class="mr-3" alt="">
                  <img src="<?php echo get_home_url() ?>/assets/images/card-svgrepo-com.svg" class="mr-3" alt="">
                  <img src="<?php echo get_home_url() ?>/assets/images/payments_FILL0_wght400_GRAD0_opsz48.svg" class="mr-3" alt="">
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
