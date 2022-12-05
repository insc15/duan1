<!-- banner -->
<section class="bg-[url('../images/bgcart.jpg')] bg-no-repeat bg-cover bg-center h-80 flex justify-center items-center">
   <h1 class="uppercase text-4xl font-bold text-white">Giỏ hàng</h1>
</section>

<section class="py-9 mt-4">
   <div class="max-w-screen-xl mx-auto px-4">
      <h3 class="text-xl font-bold">Sản phẩm</h3>
      <!-- main -->
         <!-- left -->
        <form method="POST" class="flex justify-center mt-4 flex-wrap">
        <div class="md:w-8/12 pr-3 product-list">
            <?php if(count($cart['items'])> 0) : foreach ($cart['items'] as $key => $value) : $item = $value['data'] ?>
            <div class="grid grid-cols-2 items-center rounded-lg shadow-default p-1 pr-6 mb-2 last:mb-0">
                <div class="flex items-center">
                    <input type="hidden" name="item[<?php echo $key ?>][id]" value="<?php echo $item['id'] ?>">
                    <input type="hidden" name="item[<?php echo $key ?>][color]" value="<?php echo $item['color'][0] ?>">
                    <input type="hidden" name="item[<?php echo $key ?>][size]" value="<?php echo $item['size'][0] ?>">
                    <div class="rounded overflow-hidden w-24 shrink-0">
                        <div class="relative pt-[100%]">
                            <img class="absolute top-0" src="<?php echo $item['featured_image']?>" alt="">
                        </div>
                    </div>
                    <div class="px-6 truncate">
                        <a href="#" class="text-secondary hover:text-primary text-base font-bold"><?php echo $item['name'] ?></a>
                        <p><?php echo $item['size']['name'] ?>, <?php echo $item['color']['name'] ?></p>
                        <!-- <div class="flex mt-2"> -->
                            <!-- <div class=""> -->
                            <!-- <select class="text-xs px-2 border-2 border-[#D9D9D9] py-2 rounded outline-none focus:outline-none" name="size"> -->
                            <?php //foreach ($item['size'] as $key => $size_value) : $size_value = get_size(array('id' => $size_value))[0] ?>
                                    <!-- <option value="<?php //echo $size_value['id'] ?>"><?php //echo $size_value['name'] ?></option> -->
                            <?php //endforeach; ?>
                            <!-- </select> -->
                            <!-- </div>
                            <div class="ml-3">
                            <select class="text-xs px-2 border-2 border-[#D9D9D9] py-2 rounded outline-none focus:outline-none" name="size"> -->
                                <?php //foreach ($item['color'] as $key => $color_value) : $color_value = get_color(array('id' => $color_value))[0] ?>
                                    <!-- <option value="<?php //echo $color_value['id'] ?>"><?php //echo $color_value['name'] ?></option> -->
                                <?php //endforeach; ?>
                            <!-- </select> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="flex justify-between">
                    <p><?php echo $item['formatted_final_price'] ?></p>
                    <div class="flex items-center">
                        <div class="p-1 quantity-input rounded w-fit flex items-center">
                            <button type="button" class="plus rounded w-7 h-7 bg-secondary text-white"><span class="material-symbols-rounded icon-outline">add</span></button>
                            <input value="<?php echo $value['quantity'] ?>" name="item[<?php echo $key ?>][quantity]" type="number" class="w-7 h-7 text-center mx-2 outline-none focus:outline-none focus:border-primary border-b-2 duration-150" min="1" value="1">
                            <button type="button" class="minus rounded w-7 h-7 bg-secondary text-white"><span class="material-symbols-rounded icon-outline">remove</span></button>
                        </div>
                        <button class="flex justify-center items-center ml-4 w-7 h-7 rounded text-[#041E42] hover:bg-[#041E42] hover:text-white " name="del_cart_item" value="<?php echo join(',', array($item['id'],$item['color']['id'],$item['size']['id']))?>" type="submit">
                            <span class="material-symbols-rounded">close</span>
                        </button>
                    </div>
                </div>
            </div>  

            <?php endforeach;else: ?>
                <div>Giỏ hàng trống</div>
            <?php endif; ?>
        
            <div class="flex mt-4">   
                <a href="<?php echo get_home_url()?>" class="duration-150 flex justify-center items-center text-base text-primary border-primary border py-1 px-3 rounded mr-6 hover:bg-[#041E42] hover:text-white">
                    <span class="material-symbols-rounded">arrow_back</span>
                    <span class="ml-3">Tiếp tục mua sắm</span>
                </a>
                <button type="submit" name="update_cart" class="duration-150 border py-1 px-4 rounded bg-[#041E42] text-white text-base hover:bg-white hover:text-primary hover:border-primary">Cập nhật giỏ hàng</button>
            </div>
        </div>

         <!-- right -->
         <div class="md:w-4/12 pl-3">
            <div class="rounded-lg shadow-default p-4 flex font-semibold">
               <span class="">Tổng</span>
               <span class="ml-auto text-primary"><?php echo $cart['formatted_total'] ?></span>
            </div>
            <?php if(count($cart['items'])> 0) : ?>
                <a href="<?php echo get_home_url().'/checkout' ?>" class="rounded-lg px-3 py-2 mt-4 border-2 border-transparent duration-150 w-full block text-center text-white bg-[#041E42] hover:bg-white hover:text-primary hover:border-primary">
                    Tiến hành thanh toán
                </a> 
            <?php else: ?>
                <div class="rounded-lg px-3 py-2 mt-4 border-2 border-transparent duration-150 w-full block text-center text-white bg-[#808080] hover:bg-opacity-50">
                    Tiến hành thanh toán
                </div>
            <?php endif; ?>  
            <!-- method -->
            <div class=" rounded-lg shadow-default p-4 mt-4">
               <p>Các phương thức thanh toán được chấp nhận:</p>
               <div class=" flex mt-3">
                  <img src="<?php echo get_home_url() ?>/assets/images/momo_square_pinkbg.svg" class="mr-3 h-8" alt="">
                  <img src="<?php echo get_home_url() ?>/assets/images/card-svgrepo-com.svg" class="mr-3" alt="">
                  <img src="<?php echo get_home_url() ?>/assets/images/payments_FILL0_wght400_GRAD0_opsz48.svg" class="mr-3" alt="">
               </div>
            </div>

         </div>
        </form>
   </div>
</section>

<script>
    // document.querySelector('button[data-action=update-cart]').addEventListener('click', () => {
    //     const productList = document.querySelectorAll('.product-list > div')
    // })
</script>