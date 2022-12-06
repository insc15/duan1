<section class="mx-auto mt-5 mb-5 flex max-w-screen-xl bg-slate-100 shadow-xl font-[Montserrat]">

    <div class="rounded overflow-hidden mt-5 ml-5 mb-5 w-2/12">
        <div class="relative pt-[100%] w-48 ">
            <img class="absolute top-0" src="<?php echo $_SESSION['currentUser']->profile_image ?>" alt="">
        </div>
    </div>
    <div class="mt-5 ml-5 w-6/12">
        <h1 class="uppercase text-2xl">Họ và tên: <?php echo $_SESSION['currentUser']->display_name ?></h1>
        <p>Tên đăng nhập: <?php echo $_SESSION['currentUser']->username ?></p>
        <p>Mật khẩu: *******</p>
        <p>Email: <?php echo $_SESSION['currentUser']->email ?></p>
    </div>
    
    <div class="mt-5 mr-5 w-4/12 relative">
        <a class="absolute right-0 border border-red-400 p-2 rounded-lg text-red-400 hover:bg-sky-300 hover:text-white hover:border-transparent"
            href="edit-profile">Chỉnh sửa thông tin</a>
            <a class="absolute left-0 border border-red-400 p-2 rounded-lg text-red-400 hover:bg-sky-300 hover:text-white hover:border-transparent"
            href="list-order">Quản lí đơn hàng</a>
    </div>

    <div>

    </div>
</section>