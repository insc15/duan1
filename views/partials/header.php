<header class="shadow-lg py-5 px-4 lg:px-20 bg-[#E3E6F3] sticky top-0 z-10">
    <div class="max-w-screen-xl mx-auto flex items-center">
        <a href="<?php echo get_home_url() ?>"><img src="./assets/images/logo.png" alt="logo"></a>
        <nav class="font-semibold ml-auto flex items-center">
            <a class="text-primary relative md:block hidden after:content-[''] after:w-2/3 after:bg-primary after:h-[2px] after:left-0 after:-bottom-1 after:absolute mx-5"
                href="<?php echo get_home_url() ?>">Home</a>
            <div class="group relative">
                <a class="hover:text-primary duration-150 flex relative after:content-[''] hover:after:w-2/3 after:w-0 after:duration-150 after:bg-primary after:h-[2px] after:left-0 after:-bottom-1 after:absolute mx-5 "
                    href="#"><span class="">Shop</span><span class="material-symbols-rounded">expand_more</span></a>
                <!-- dropdown-menu -->
                <div
                    class="hidden absolute translate-y-full duration-150 pt-4 bottom-0 group-hover:flex hover:flex w-[200px] flex-col drop-shadow-lg">
                    <a class="px-5 py-3 hover:bg-gray-200 bg-white" href="<?php echo get_home_url() ?>">danh muc ?</a>
                    <a class="px-5 py-3 hover:bg-gray-200 bg-white" href="<?php echo get_home_url() ?>">danh muc ?</a>
                    <a class="px-5 py-3 hover:bg-gray-200 bg-white" href="<?php echo get_home_url() ?>">danh muc ?</a>
                </div>
            </div>
            <a class="hover:text-primary md:block hidden duration-150 relative after:content-[''] hover:after:w-2/3 after:w-0 after:duration-150 after:bg-primary after:h-[2px] after:left-0 after:-bottom-1 after:absolute mx-5"
                href="<?php get_home_url() ?>">Blog</a>
            <a class="hover:text-primary md:block hidden duration-150 relative after:content-[''] hover:after:w-2/3 after:w-0 after:duration-150 after:bg-primary after:h-[2px] after:left-0 after:-bottom-1 after:absolute mx-5"
                href="<?php get_home_url() ?>">About</a>
            <a class="hover:text-primary md:block hidden duration-150 relative after:content-[''] hover:after:w-2/3 after:w-0 after:duration-150 after:bg-primary after:h-[2px] after:left-0 after:-bottom-1 after:absolute mx-5"
                href="<?php get_home_url() ?>">Contact</a>
            <a class="hover:text-primary duration-150 relative after:content-[''] hover:after:w-full after:w-0 after:duration-150 after:bg-primary after:h-[2px] after:left-0 after:-bottom-1 after:absolute mx-5"
                href="<?php echo get_home_url() . '/cart' ?>"><span
                    class="material-symbols-rounded icon-outline">shopping_cart</span></a>

        </nav>
        <div class="md:hidden"><span class="material-symbols-rounded icon-outline">menu</span></div>
    </div>
    <div class=" flex justify-end gap-5">
        <?php if (isset($_SESSION['currentUser']) && $_SESSION['currentUser']->role == 1) : ?>
        <a href="<?php echo get_home_url() ?>/admin/dashboard"
            class="flex items-center hover:text-current font-semibold text-sm">
            <i class="fi fi-rr-dashboard text-2xl"></i>
            <span class="ml-2 leading-normal">Trang quản trị</span>
        </a>
        <?php endif; ?>
        <a href="<?php echo get_home_url() ?>/<?php echo isset($_SESSION['currentUser']) ? 'profile' : 'login' ?>"
            class="flex items-center hover:text-current font-semibold text-sm">
            <i class="fi fi-rr-user text-xl"></i>
            <span
                class="ml-2 leading-normal"><?php echo isset($_SESSION['currentUser']) ? 'Tài khoản' : 'Đăng nhập' ?></span>
        </a>
    </div>
</header>

<!--  -->