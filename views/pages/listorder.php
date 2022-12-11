<section class="max-w-screen-xl mx-auto mt-5 border-t font-[Montserrat]">
    <h1 class="uppercase text-4xl mt-10">Danh sách đơn hàng</h1>
    <table class="border mt-5 mb-5">
        <tr class="border">
            <th class="border w-2/12">Thời gian</th>
            <th class="border w-2/12">Mã đơn hàng</th>
            <th class="border w-4/12">Sản phẩm</th>
            <th class="border w-0/12">Số lượng</th>
            <th class="border w-2/12">Tổng tiền</th>
            <th class="border w-2/12">Trạng thái</th>
        </tr>
        
        <?php foreach($orders as $key => $value):?>
              <?php var_dump($orders); ?>
        <tr class="border">
            
            <td class="border pl-2 "><?php echo $order['create_date']?></td>
            <td class="border pl-2">CARA<?php echo $order['id']?></td>
            <td class="border pl-2"><?php echo $order['name']?></td>
            <td class="border pl-2"><?php echo $order['quantity']?></td>
            <td class="border pl-2 "><?php echo $order['formatted_final_price']?></td>
            <td class="border pl-2">dang giao hang</td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>