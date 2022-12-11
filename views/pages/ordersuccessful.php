<?php 
$info_order = $order['delivery_info'];
switch ($order['payment']) {
    case '0':
        $order['payment'] =  'Thanh toán khi nhận hàng';
        break;
    case '1':
        $order['payment'] =  'Chuyển khoản ngân hàng';
        break;
    case '2':
        $order['payment'] =  'QR MoMo';
        break;
}
?>
<section class="w-full mx-auto h-screen">
    <div class="w-[727px] shadow-lg rounded-sm border py-10 px-3 mx-auto flex flex-col items-center mt-10">
        <svg width="95" height="95" viewBox="0 0 97 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M48.5 96C75.0097 96 96.5 74.5097 96.5 48C96.5 21.4903 75.0097 0 48.5 0C21.9903 0 0.5 21.4903 0.5 48C0.5 74.5097 21.9903 96 48.5 96Z" fill="#25AE88"/>
            <path d="M73.46 28.8L42.74 63.3601L23.54 48" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h2 class="text-3xl font-semibold mt-6">Đơn hàng đã được xác nhận!</h2>
            <?php if($order['status'] === STATUS_WAITING_FOR_PAYMENT && $order['payment'] !== '0') : ?>
                <p class="mt-4 font-normal text-center">Đơn hàng sẽ được vận chuyển sau khi chúng tôi xác nhận bạn đã thanh toán!</p>
            <?php else: ?>
                <p class="mt-4 font-normal">Đơn hàng của bạn sẽ được vận chuyển trong thời gian sớm nhất!</p>
            <?php endif; ?>
            <p class="mt-4 font-normal">
                Mã đơn hàng: <?php echo "CARA".$order['id']; ?> <br>
                Phương thức thanh toán: <?php echo $order['payment'] ?> <br>
                Số tiền phải trả: <?php echo $order['formatted_total'] ?>
                <!-- Tên người nhận hàng: <?php echo $info_order['first_name']." ".$info_order['last_name']; ?><br>
                Email: <?php echo $info_order['email']; ?><br>
                Địa chỉ giao hàng: <?php echo $info_order['address'].", ".$info_order['city']?><br> -->
            </p>
            <div class="flex">
                <?php if($order['status'] === STATUS_WAITING_FOR_PAYMENT && $order['payment'] !== '0') : ?>
                    <form action="<?php echo get_home_url() ?>/payment" method="post">
                        <input type="hidden" name="order_id" value="<?php echo "CARA".$order['id'] ?>">
                        <input type="hidden" name="total" value="<?php echo $order['total'] ?>">
                        <button type="submit" class="mr-3 rounded-lg text-base font-normal flex items-center justify-center mt-8 w-[211px] h-[40px] hover:bg-primary hover:text-white text-[#25AE88]  border border-[#25AE88]"><span class="material-symbols-rounded icon-outline">shopping_cart_checkout</span>Thanh toán ngay</button>
                    </form>
                <?php endif; ?>
                <a href="<?php echo get_home_url() ?>" class=" rounded-lg text-base font-normal flex mt-8 w-[211px] h-[40px] bg-[#041E42] text-white hover:bg-[white] hover:text-[#25AE88]  hover:border hover:border-[#25AE88]"><span class="material-symbols-rounded ml-6 text-base my-auto">arrow_back_ios</span><p class=" my-auto" >Continue shopping</p></a>
            </div>
    </div>
</section>