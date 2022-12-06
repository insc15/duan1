<section>
    <div class="overflow-x-auto relative shadow-md rounded-md flex justify-center py-9 ">
        <table border="1"
            class="max-w-screen-xl mx-auto px-4 shadow-default rounded-lg p-4 w-full md:w-11/12 text-gray-500 dark:text-gray-400  ">
            <thead>
                <tr>
                    <td class="py-4 px-6" colspan="10">
                        <a href="/duan1/moreproducts.php"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Thêm sản phẩm mới</a>
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
                        Sửa
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach (get_product(null, array('by'=> 'created_date', 'sort' => 'asc')) as $value) {
                        $category = get_category(array('id' => $value['category'][0]))[0];
                ?>
                <tr>
                    <th class="py-4 px-6">
                        <?php echo $value['name'] ?>
                    </th>
                    <td class="py-4 px-6">
                        <?php
                            $color = get_color(array('id' => $value['color'][0]))[0];
                            echo $color['name'];
                        ?>
                    </td>
                    <td class="py-4 px-6">
                        <img src="<?php echo $value['featured_image'] ?>" width="100px" alt="">
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $category['name'] ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php
                            $size = get_size(array('id' => $value['size'][0]))[0];
                            echo $size['name'];
                        ?>
                    </td>
                    <td>
                        <?php echo $value['description'] ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $value['price'] ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $value['discount'] ?>
                    </td>
                    <form method="post">
                    <td class="py-4 px-6">
                        <input type="hidden" name="id" value="<?php echo $value['id']?>">
                        <a href="duan1/admin/edit.php">sửa</a>
                        <!-- <a href="<?php echo get_home_url() ?>/edit?id=<?=$value['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sửa</a> -->
                        <a href="javascript:confirmDelete('<?php echo get_home_url() ?>/admin/products?id=<?=$value['id']?>')"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><button type="submit">Xóa</button></a>
                        
                    </td>
                    </form>
                </tr>
                <?php } ?>
            </tbody> 
    </div>
</section>