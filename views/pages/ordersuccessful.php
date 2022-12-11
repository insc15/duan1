<?php 
// echo var_dump($order); 
$info_order = $order[0]['delivery_info'];
?>
<section class="w-full mx-auto h-screen">
    <div class="w-[727px] shadow-lg rounded-sm border h-[390px] mx-auto flex flex-col items-center mt-10 font-[Montserrat]">
        <svg class="mt-8"width="95" height="95" viewBox="0 0 97 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M48.5 96C75.0097 96 96.5 74.5097 96.5 48C96.5 21.4903 75.0097 0 48.5 0C21.9903 0 0.5 21.4903 0.5 48C0.5 74.5097 21.9903 96 48.5 96Z" fill="#25AE88"/>
            <path d="M73.46 28.8L42.74 63.3601L23.54 48" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h2 class="text-3xl font-semibold mt-6">Your order is complete!</h2>
            <p class="mt-4 text-xl font-normal">You will be receiving a confirmation email with order details.</p>
            <p class="mt-4 text-sm font-normal">
                ORDER ID: <?php echo $order_id; ?> <br>
                NAME: <?php echo $info_order['first_name']." ".$info_order['last_name']; ?><br>
                EMAIL: <?php echo $info_order['email']; ?><br>
                ADDRESS: <?php echo $info_order['address'].", ".$info_order['city']?><br>
            </p>
            <a href="<?php echo get_home_url() ?>" class=" rounded-lg text-base font-normal flex mt-8 w-[211px] h-[40px] bg-[#041E42] text-white hover:bg-[white] hover:text-[#25AE88]  hover:border hover:border-[#25AE88]"><span class="material-symbols-rounded ml-6 text-base my-auto">arrow_back_ios</span><p class=" my-auto" >Continue shopping</p></a>
    </div>
</section>

<!-- <section class="max-w-screen-xl mx-auto font-[Arial] mt-5 border-t mb-2">
    <div class="flex justify-between mt-10">
        <div class="w-5/12 ml-2">
            <h3 class="mt-5 text-2xl">Bạn đã đặt hàng thành công.</h3><br>
            <h3 class="uppercase mb-2">Mã đơn hàng của bạn: <?php echo $order_id; ?></h3>
             <p class="font-light mb-2">lorem ipsum dolor sit amet, consectetur adip Lorem </p> 
            <h3 class="uppercase mb-2">Đơn hàng sẽ được vẫn chuyển tới:</h3>
            <p class="font-light">Tên của bạn: <?php echo $info_order['last_name']." ".$info_order['first_name']; ?></p>
            <p class="font-light">Email của bạn: <?php echo $info_order['email']; ?></p>
            <p class="font-light">Địa chỉ: <?php echo $info_order['address']; ?></p>
            <p class="font-light">Thành phố: <?php echo $info_order['city']; ?></p>
             <p class="font-light mb-2 ">03123123312</p>
            <h3 class="uppercase mb-2">Shipping method</h3>
            <p class="font-light mb-2">Flat Rate 2 tilte </p> 
             <h3 class="uppercase mb-2">Phương thức thanh toán: </h3>
            <p class="font-light"><?php echo $order[0]['extra_info']; ?></p> 
        </div>
        <div class="w-6/12 mr-2 border">
            <?php if(count($order[0]['product_data']) > 0) : foreach ($order[0]['product_data'] as $value) : ?>
                <div class="flex items-center mb-2 ml-4 mr-4 mt-2 shadow-xl rounded">
                    <div class="w-24">
                        <div class="relative pt-[100%]">
                            <img class="absolute top-0" src="<?php echo get_home_url(); ?>/assets/images/<?php echo $value['data']['featured_image']; ?>">
                        </div>
                    </div>
                    <div class="px-3">
                        <h4 class="font-bold text-secondary"><?php echo($value['data']['name']) ?></h4>
                        <p class="text-xs text-[#7a7a7a] my-2"><?php echo get_color(array('id' => $value['color']))[0]['name'] ?>, <?php echo get_size(array('id' => $value['size']))[0]['name'] ?></p>
                        <p><?php echo($value['data']['formatted_final_price']) ?></p>
                    </div>
                    <div class="ml-auto pr-2">
                        <p><?php echo $value['quantity'] ?></p>
                    </div>
                </div>
            <?php endforeach;endif; ?>
            <div class="flex justify-between mb-2 ml-4 mr-4 mt-4 ">
                <div>
                    <h3>Subtotal</h3>
                    <h3>Shipping&handing</h3>
                    <h3>Tax</h3>
                    <h2>Grand total</h2>
                </div>
                <div>
                    <h3><?php echo $order[0]['formatted_total'] ?></h3>
                    <h3><?php echo $order[0]['formatted_total'] ?></h3>
                    <h3><?php echo $order[0]['formatted_total'] ?></h3>
                    <h2><?php echo $order[0]['formatted_total'] ?></h2>
                </div>
            </div>
            <a class="duration-150 flex justify-center items-center text-base text-primary border-primary border py-1 ml-3 rounded mr-3 hover:bg-[#041E42] hover:text-white"
                href="list-order">Quản lí đơn hàng</a>
        </div>
    </div>
</section> -->