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
        <?php foreach ($orders as $key => $value) : ?>
        <tr class="border">

            <td class="border pl-2 "><?php echo $orders[$key]['create_date'] ?></td>
            <td class="border pl-2">CARA<?php echo $orders[$key]['id'] ?></td>
            <td class="border pl-2"><?php echo $orders[$key]['product_data'][0]['data']['name'] ?></td>
            <td class="border pl-2"><?php echo $orders[$key]['product_data'][0]['quantity'] ?></td>
            <td class="border pl-2 "><?php echo $orders[$key]['formatted_total'] ?></td>
            <td class="border pl-2"><?php echo get_status($orders[$key]['status']) ?></td>
        </tr>
        <?php endforeach; ?>
        </tr>

    </table>
</section>