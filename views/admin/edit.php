<section class="overflow-x-auto relative rounded-md flex justify-center py-9 ">
    <div class="max-w-screen-xl mx-auto px-4">
        <form class="flex flex-wrap " method="post" enctype="multipart/form-data">
            <div class="shadow-default rounded-lg p-4 w-full md:w-10/12">
                <a href="/duan1/admin/products" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Danh sách sản phẩm </a>
                <div class="py-4 flex flex-wrap ">
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">Tên Sản Phẩm </p>
                        <input name="name"
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $product['name'] ?>">
                    </div>
                    <div class="w-full mt-4">
                        <p class="text-sm mb-2">Ảnh</p>
                        <input name="featured_image"
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="file" value="<?php echo $product['featured_image'] ?>">
                        <img src="http://localhost/duan1/assets/images/<?php echo $product['featured_image'] ?>" width="200px">
                        <?php if ($error_img !== '') { ?>
                        <p class="text-red-500"><?php echo $error_img; ?></p>
                        <?php } ?>
                    </div>
                    <div class="w-full mt-4">
                        <label for="large" class="block mb-2 text-base font-medium ">Màu Sắc</label>
                        <?php 
                        foreach ($product['color'] as $clrs => $clr) {
                            foreach (get_color() as $key => $value) {
                        ?>
                        <div
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                            <input class="form-check-input" type="checkbox" name="color[<?=$value['id']?>]"
                                value="<?php echo $value['id']?>" <?php if($value['id']==$clr) echo "checked"; ?>>
                            <label class="form-check-label"
                                for="checkbox_auto_increment"><?php echo $value['name']?></label>
                        </div>
                        <?php
                            } 
                        }
                        ?>
                    </div>
                </div>
                <div class="w-full mt-4">
                    <label for="large" class="block mb-2 text-base font-medium">Kích cỡ</label>
                    <?php 
                    foreach ($product['size'] as $szs => $sz) {
                        foreach (get_size() as $key => $value) {
                    ?>
                    <div
                        class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                        <input class="form-check-input" type="checkbox" name="size[<?php echo $value['id']?>]"
                            value="<?php echo $value['id']?>" <?php if($value['id']==$sz){echo "checked"; }?>>
                        <label class="form-check-label"
                            for="checkbox_auto_increment"><?php echo $value['name']?></label>
                    </div>
                    <?php   }  
                    } 
                    ?>
                    <label for="large" class="block mb-2 text-base font-medium">Chọn danh mục</label>
                    <select id="large" name="category"
                        class=" text-base text-white-900 border border-gray-300  dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                        <?php 
                            foreach (get_category() as $key => $value) {
                        ?>
                        <option value="<?php echo $value['id']?>"
                            <?php if($value['id']==$product['category']){echo "selected";} ?>>
                            <?php echo $value['name']?></option>
                        <?php
                            } 
                        ?>
                    </select>
                    <div class="w-full md:pr-3 mt-5 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Mô tả ngắn</p>
                        <textarea name="description"
                            class="resize-none  appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"><?php echo $product['description'] ?></textarea>
                    </div>
                    <div class="w-full md:pr-3 mt-5 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Mô tả sản phẩm</p>
                        <textarea name="description_detail"
                            class="resize-none  appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"><?php echo $product['description_detail'] ?></textarea>
                    </div>
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Giá gốc</p>
                        <input name="price"
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $product['price'] ?>">
                    </div>
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Giá sale</p>
                        <input name="discount"
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $product['discount'] ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $product['id']?>">
                <button type="submit"
                    class="appearance-none block mt-5 font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                    Sửa
                </button>
                <?php if ($error_msg !== '') { ?>
                <p class="text-red-500"><?php echo $error_msg ?></p>
                <?php } ?>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</section>