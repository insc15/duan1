<section>
    <div class="overflow-x-auto relative shadow-md rounded-md flex justify-center py-9 ">
        <table border="1"
            class="max-w-screen-xl mx-auto px-4 shadow-default rounded-lg p-4 w-full md:w-11/12 text-gray-500 dark:text-gray-400  ">
            <thead>
                <tr>
                    <td class="py-4 px-6" colspan="10">
                        <a href="/duan1/moreproducts.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Thêm sản phẩm mới</a>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="py-2 px-6">
                        ID
                    </th>
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
                        <?php echo $value['id'] ?>
                    </th>
                    <th class="py-4 px-6">
                        <?php echo $value['name'] ?>
                    </th>
                    <td class="py-4 px-6">
                        <?php
                            $color_array = [];
                            foreach ($value['color'] as $colors => $col) {
                                $color = get_color(array('id' => $col));
                                array_push($color_array, $color[0]);
                            }
                            $value['color']=$color_array;
                            foreach ($value['color'] as $clrs => $clr) {
                                echo $clr['name'].", ";
                            }
                        ?>
                    </td>
                    <td class="py-4 px-6">
                        <img src="<?php echo get_home_url()?>/assets/images/<?php echo $value['featured_image'] ?>" width="100px" alt="">
                    </td>
                    <td class="py-4 px-6">
                        <?php echo $category['name'] ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php
                            $size_array = [];
                            foreach ($value['size'] as $colors => $col) {
                                $size = get_size(array('id' => $col));
                                array_push($size_array, $size[0]);
                            }
                            $value['size']=$size_array;
                            foreach ($value['size'] as $clrs => $clr) {
                                echo $clr['name'].", ";
                            }
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
                        <a href="<?php echo get_home_url() ?>/admin/edit?id=<?=$value['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sửa</a>
                        <a href="javascript:confirmDelete('<?php echo get_home_url() ?>/admin/products?id=<?=$value['id']?>')"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><button type="submit">Xóa</button></a>   
                    </td>
                    </form>
                </tr>
                <?php } ?>
            </tbody> 
    </div>
</section>