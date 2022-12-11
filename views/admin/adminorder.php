<?php

echo '<pre>';
// print_r(get_order());
echo '</pre>';

?>

<section>
    <div class="overflow-x-auto relative shadow-md rounded-md flex justify-center py-9 ">
        <table border="1"
            class="max-w-screen-xl mx-auto px-4 shadow-default rounded-lg p-4 w-full md:w-11/12 text-gray-500 dark:text-gray-400  ">
            <thead>

                <tr>
                    <th scope="col" class="py-2 px-6">
                        Mã đơn hàng
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Tên_user
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Màu
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Hình Ảnh
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Loại
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Size
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Ngày mua hàng
                    </th>

                    <th scope="col" class="py-2 px-6">
                        Giá
                    </th>
                    <th scope="col" class="py-2 px-6">
                        trạng thái
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Hủy đơn hàng
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders = get_orders() as $key => $value) : ?>
                <tr>
                    <th scope="row">
                        <?php echo $value['id'] ?>
                    </th>
                    <th scope="row">
                        <?php echo (getOne_user($value['customer_id']))['display_name'] ?>
                    </th>
                    <th scope="row">
                        <?php
                            $result = $orders[$key]['product_data'][0]['data']['color'];
                            $color_array = [];
                            foreach ($result as $colors => $col) {
                                $color = get_color(array('id' => $col));
                                array_push($color_array, $color[0]);
                            }
                            $result = $color_array;
                            foreach ($result as $clrs => $clr) {
                                echo $clr['name'] . ", ";
                            }
                            // print_r($value['color']);
                            ?>
                    </th>
                    <th class="py-4 px-6">
                        <img src="<?php echo get_home_url() . '/assets/images/' . $orders[$key]['product_data'][0]['data']['featured_image'] ?>"
                            alt="" width="100px">

                    </th>
                    <th class="py-4 px-6">
                        <?php
                            $result = $orders[$key]['product_data'][0]['data']['category'];
                            $size_array = [];
                            foreach ($result as $colors => $col) {
                                $size = get_category(array('id' => $col));
                                array_push($size_array, $size[0]);
                            }
                            $result = $size_array;
                            foreach ($result as $clrs => $clr) {
                                echo $clr['name'] . ", ";
                            }
                            ?>
                    </th>
                    <th class="py-4 px-6">
                        <?php
                            $result = $orders[$key]['product_data'][0]['data']['size'];
                            $size_array = [];
                            foreach ($result as $colors => $col) {
                                $size = get_size(array('id' => $col));
                                array_push($size_array, $size[0]);
                            }
                            $result = $size_array;
                            foreach ($result as $clrs => $clr) {
                                echo $clr['name'] . ", ";
                            }
                            ?>
                    </th>
                    <th class="py-4 px-6">
                        <?php echo $orders[$key]['product_data'][0]['data']['created_date'] ?>
                    </th>
                    <th class="py-4 px-6">
                        <?php echo $value['formatted_total'] ?>
                    </th>
                    <th class="py-4 px-6">
                        <?php echo get_status($value['status']) ?>
                    </th>
                    <th class="py-4 px-6">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hủy đơn
                            hàng</a>
                    </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </div>
</section>