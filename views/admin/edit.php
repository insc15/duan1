<section class="overflow-x-auto relative rounded-md flex justify-center py-9 ">
    <div class="max-w-screen-xl mx-auto px-4">
        <form class="flex flex-wrap ">
            <div class="shadow-default rounded-lg p-4 w-full md:w-10/12">
                <div class="py-4 flex flex-wrap ">
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">Tên Sản Phẩm </p>
                        <input
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $product['name'] ?>">
                    </div>
                    <div class="w-full mt-4">
                        <p class="text-sm mb-2">Ảnh</p>
                        <input
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="file" placeholder="huynguyenquang@gmail.com">
                    </div>
                    <div class="w-full mt-4">
                        <label for="large" class="block mb-2 text-base font-medium ">Màu Sắc</label>
                        <select id="large"
                            class=" text-base text-white-900 border border-gray-300  dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                            <option selected>Chọn màu</option>
                            <option value="" id="">Xanh </option>
                            <option value="" id="">Đỏ</option>
                            <option value="" id="">Tím </option>
                            <option value="" id="">Vàng</option>
                        </select>
                    </div>
                </div>
                <div class="w-full md:pr-3 mt-4 md:mt-0 flex flex-wrap">
                    <label for="large" class="block mb-2 text-base font-medium">Size</label>
                    <select id="large"
                        class=" text-base text-white-900 border border-gray-300  dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                        <option selected>Chọn size</option>
                        <option value="" id="">L </option>
                        <option value="" id="">M</option>
                        <option value="" id="">XL</option>
                        <option value="" id="">2XL</option>
                    </select>
                    <div class="w-full md:pr-3 mt-5 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Mô tả</p>
                        <textarea
                            class="resize-none  appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"><?php echo $product['description'] ?></textarea>
                    </div>
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Giá gốc</p>
                        <input
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $product['price'] ?>">
                    </div>
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2 mt-5">Giá sale</p>
                        <input
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $product['discount'] ?>">
                    </div>
                </div>
                <button
                    class="appearance-none block mt-5 font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                    Sửa
                </button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</section>