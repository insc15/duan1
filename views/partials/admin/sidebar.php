<section class="flex fixed top-0 flex-col  border-xl border-black h-screen font-[Montserrat] shadow-xl bg-[#F6F8FA] justify-between ">
    <div>
        <img class="w-[100px] h-[36px] mt-8 mx-[100px] mb-[96px]" src="../assets/images/logo.png" alt="">
        <a class="flex w-[236px] py-3 items-center mx-[32px] hover:shadow hover:drop-shadow-2xl hover:rounded-lg" href="/duan1/admin/dashboard">
            <img class="ml-[20px]" src="../assets/images/dashboard.svg" alt="">
            <span class="text-base ml-[15px]">Tổng quan</span>
        </a>
        <a class="flex w-[236px] py-3 items-center mx-[32px] hover:shadow hover:drop-shadow-2xl hover:rounded-lg" href="/duan1/admin/products">
            <img class="ml-[20px]" src="../assets/images/products.svg" alt="">
            <span class="text-base ml-[15px]">Sản phẩm</span>
        </a>
        <a class="flex w-[236px] py-3 items-center mx-[32px] hover:shadow hover:drop-shadow-2xl hover:rounded-lg" href="">
            <img class="ml-[20px]" src="../assets/images/cate.svg" alt="">
            <span class="text-base ml-[15px]">Danh mục</span>
        </a>
        <a class="flex w-[236px] py-3 items-center mx-[32px] hover:shadow hover:drop-shadow-2xl hover:rounded-lg" href="/duan1/adminorder">
            <img class="ml-[20px]" src="../assets/images/order.svg" alt="">
            <span class="text-base ml-[15px]">Đơn hàng</span>
        </a>
        <a class="flex w-[236px] py-3 items-center mx-[32px] hover:shadow hover:drop-shadow-2xl hover:rounded-lg" href="/duan1/user">
            <img class="ml-[20px]" src="../assets/images/order.svg" alt="">
            <span class="text-base ml-[15px]">Quản lý user</span>
        </a>
    </div>
    <div class="mb-8">
        <!-- profile -->
        <div class="mx-[32px] flex mb-[32px] w-[236px]">
        
                <img class="w-[48px] h-[48px] rounded-lg" src="../assets/images/bgcart.jpg" alt="">
            
            <a href="">
                <div class="ml-[12px]">
                    <span class="text-base font-medium">Huy Quang Nguyen</span>
                    <span class="mt-[4px] text-xs font-light">huy_gay_2003@gmail.com</span>
                </div>
            </a>
        </div>
        
        <a href="<?php  echo get_home_url()?>/admin/logout" class="border border-red-700 mx-[32px] py-1 inline-block px-auto rounded text-center w-[240px]">
            <span class="text-red-700 ">Đăng xuất</span>
        </a>
    </div>
</section>

