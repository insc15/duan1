<section style="both:clear;">
    <div class="overflow-x-auto relative shadow-md rounded-md flex justify-center py-9 ">
        <table border="1"
            class="max-w-screen-xl mx-auto px-4 shadow-default rounded-lg p-4 w-full md:w-11/12 text-gray-500 dark:text-gray-400  ">
            <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <td class="py-4 px-6" colspan="10">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Thêm sản phẩm mới</a>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="py-2 px-6">
                        Tên
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
                        Mô Tả
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Giá gốc
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Giá bán
                    </th>
                    <th scope="col" class="py-2 px-6">
                        sửa
                    </th>
                    <th scope="col" class="py-2 px-6">
                        xóa
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach (get_product(null,null) as $value) {
                        $category = get_category(array('id' => $value['category'][0]))[0];
                ?>
                <tr
                    class="bg-white rounded-md  dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $value['name'] ;?>
                    </th>
                    <td class="py-4 px-6"></td>
                    <td class="py-4 px-6">
                        <img src="<?php echo $value['featured_image'] ?>" width="100px" alt="">
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $category['name']; ?>
                    </td>
                    <td class="py-4 px-6">
                        <!-- <?php 
                            $size_array = [];
                            foreach ($product['size'] as $key => $value) {
                                $size = get_size(array('id' => $value));
                                array_push($size_array, $size[0]);
                            }
                            $product['size'] = $size_array;

                            foreach ($product['size'] as $key => $value) {
                                echo $value['name'].", "; 
                            }
                        ?> -->
                        2XL,XL,L,M
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $value['description']; ?>
                    </td>
                    <td class="py-4 px-6"><?php echo $value['price']; ?></td>
                    <td class="py-4 px-6"><?php echo $value['discount']; ?></td>
                    <td class="py-4 px-6">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sửa</a>
                    </td>
                    <td class="py-4 px-6">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
    </div>
</section>