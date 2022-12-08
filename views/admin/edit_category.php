<section class="overflow-x-auto relative rounded-md flex justify-center py-9 ">
    <div class="max-w-screen-xl mx-auto px-4">
        <form class="flex flex-wrap " method="post" enctype="multipart/form-data">
            <div class="shadow-default rounded-lg p-4 w-full md:w-10/12">
                <a href="/duan1/admin/category" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Danh sách danh mục </a>
                <div class="py-4 flex flex-wrap ">
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">ID danh mục </p>
                        <input name="id" disabled type="text"
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            placeholder="" value="<?php echo $category['id']; ?>">
                    </div>
                    <div class="w-full  md:pr-3 mt-4 md:mt-0">
                        <p class="text-sm mb-2">Tên danh mục </p>
                        <input name="name"
                            class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]"
                            type="text" placeholder="" value="<?php echo $category['name']; ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
                <button type="submit"
                    class="appearance-none block mt-5 font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]">
                    Cập nhật
                </button>
                <?php if ($error_msg !== '') { ?>
                <p class="text-red-500"><?php echo $error_msg ?></p>
                <?php } ?>
            </div>
        </form>
    </div>
</section>