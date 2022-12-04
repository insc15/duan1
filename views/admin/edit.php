<section class="overflow-x-auto relative rounded-md flex justify-center py-9 ">
    <div class="max-w-screen-xl mx-auto px-4">
        <form class="flex flex-wrap " method="post" enctype="multipart/form-data">
            <div class="shadow-default rounded-lg p-4 w-full md:w-10/12">
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
                            type="file"><?php echo $product['featured_image'] ?>
                    </div>
                    <div class="w-full mt-4">
                        <label for="large" class="block mb-2 text-base font-medium ">Màu Sắc</label>
                        <select id="large" name="color"
                            class=" text-base text-white-900 border border-gray-300  dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                            <option value="0" selected>Chọn màu</option>
                            <?php 
                                foreach (get_color(null,null) as $key => $value) {
                            ?>
                            <option value="<?php echo $value['id']?>" id=""><?php echo $value['name']?></option>
                            <?php
                                } 
                            ?>
                        </select>
                    </div>
                </div>
                <div class="w-full md:pr-3 mt-4 md:mt-0 flex flex-wrap">
                    <label for="large" class="block mb-2 text-base font-medium">Size</label>
                    <select id="large" name="size"
                        class=" text-base text-white-900 border border-gray-300  dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                        <option value="0" selected>Chọn kích cỡ</option>
                            <?php 
                                foreach (get_size(null,null) as $key => $value) {
                            ?>
                            <option value="<?php echo $value['id']?>" id=""><?php echo $value['name']?></option>
                            <?php
                                } 
                            ?>
                    </select>
                    <div class="w-full md:pr-3 mt-5 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Mô tả</p>
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