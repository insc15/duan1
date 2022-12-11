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
            <?php var_dump($orders)?>   
        <tr class="border">
            <input type="hidden" name="order_id" value="<?php echo $value-> order_id?>">
            <td class="border pl-2 "><?php echo $orders['']?></td>
            <td class="border pl-2">124124124</td>
            <td class="border pl-2">Lorem ipsum dolor sit amet</td>
            <td class="border pl-2">2</td>
            <td class="border pl-2 ">123$</td>
            <td class="border pl-2">dang giao hang</td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>