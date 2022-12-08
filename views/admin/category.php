<section>
    <section style="both:clear;">
        <form method="post">
            <div class="overflow-x-auto relative shadow-md rounded-md flex justify-center py-9">
                <table
                    class="max-w-screen-xl mx-auto  shadow-default rounded-lg p-4 w-full md:w-10/12 text-gray-500 dark:text-gray-400 ">
                    <thead>
                        <tr>
                            <td class="py-4 px-6" colspan="10">
                                <a href="/duan1/morecategories.php"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Thêm danh mục
                                    mới</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Mã danh mục
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Tên Danh mục
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Số sản phẩm còn lại
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Hành động
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (get_category() as $key => $value) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo $value['id']; ?>
                            </th>
                            <th scope="row">
                                <?php echo $value['name']; ?>
                            </th>
                            <th scope="row">
                                <?php echo rand(1,10000); ?>
                            </th>
                            <th class="py-4 px-6">
                                <input type="hidden" name="id" value="<?php echo $value['id'];?>">
                                <a href="<?php echo get_home_url() ?>/admin/update_cate?id=<?=$value['id']?>"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sửa</a><br>
                                <a href="javascript:confirmDelete('<?php echo get_home_url(); ?>/admin/category?id=<?php echo $value['id'];?>')"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><button
                                        type="submit">Xóa</button></a>
                            </th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </form>

    </section>
</section>