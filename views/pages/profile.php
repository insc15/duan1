<section class="max-w-screen-xl bg-white py-3 mx-auto items-start my-6">
    <div class="px-7 py-5">
        <div class="border-b border-solid border-[#efefef] pb-3 mb-3">
            <h1 class="capitalize text-gray-900 text-lg font-semibold">Hồ Sơ Của Tôi</h1>
            <p class="text-sm text-gray-600">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        </div>
        <form id="ayiXAf" class="p-3 text-sm flex" method="post" enctype="multipart/form-data">
            <div class="w-2/3 pr-12 border-r border-solid border-[#efefef]">
                <input type="text" name="id" value="<?php echo $_SESSION['currentUser']->id ?>" hidden>
                <div class="flex mb-6 items-center">
                    <div class="w-1/4 text-gray-600">
                        <p>Tên đăng nhập</p>
                    </div>
                    <div class="w-3/4 text-black pl-5">
                        <p><?php echo $_SESSION['currentUser']->username ?></p>
                    </div>
                </div>
                <div class="flex mb-6 items-center">
                    <div class="w-1/4 text-gray-600">
                        <p>Tên hiển thị</p>
                    </div>
                    <div class="w-3/4 text-black pl-5">
                        <input class="px-3 py-2 focus:outline-none shadow border border-solid border-gray-300 rounded w-full" type="text" name="display_name" value="<?php echo $_SESSION['currentUser']->display_name ?>">
                    </div>
                </div>
                <div class="flex mb-6 items-center">
                    <div class="w-1/4 text-gray-600">
                        <p>Email</p>
                    </div>
                    <div class="w-3/4 text-black pl-5">
                    <p><?php echo $_SESSION['currentUser']->email ?></p>
                    </div>
                </div>
                <div class="flex mb-6 items-center border-t pt-6 border-solid border-[#efefef]">
                    <div class="w-1/4 text-gray-600">
                        <p>Mật khẩu cũ</p>
                    </div>
                    <div class="w-3/4 text-black pl-5">
                        <input class="px-3 py-2 focus:outline-none shadow border border-solid border-gray-300 rounded w-full" type="password" name="oldPassword">
                    </div>
                </div>
                <div class="flex mb-6 items-center">
                    <div class="w-1/4 text-gray-600">
                        <p>Mật khẩu mới</p>
                    </div>
                    <div class="w-3/4 text-black pl-5">
                        <input class="px-3 py-2 focus:outline-none shadow border border-solid border-gray-300 rounded w-full" type="password" name="newPassword">
                    </div>
                </div>
                <div class="flex mb-6 items-center">
                    <div class="w-1/4 text-gray-600">
                        <p>Nhập lại mật khẩu mới</p>
                    </div>
                    <div class="w-3/4 text-black pl-5">
                        <input class="px-3 py-2 focus:outline-none shadow border border-solid border-gray-300 rounded w-full" type="password" name="passwordChecker">
                    </div>
                </div>
                <?php if($res && $res->status) : ?>
                    <p class="text-right text-green-500 mb-2"><?php echo $res->message ?></p>
                <?php endif; ?>
                <div class="justify-end flex gap-5 items-center">
                    <button class="px-5 py-2 bg-primary text-white rounded" type="submit">Lưu</button>
                    <a href="<?php echo get_home_url(); ?>/logout">Đăng xuất</a>
                </div>
            </div>
            <div class="w-1/3">
                <div class="flex items-center flex-col">
                    <img class="w-24 h-24 my-5 object-cover rounded-full" src="<?php echo $_SESSION['currentUser']->profile_image ?>" alt="">
                    <input class="w-60 border border-solid border-gray-300 rounded px-3 py-2 mb-2" type="file" name="profile_image" accept=".jpg,.jpeg,.png">
                    <p class="text-gray-500">Định dạng:.JPEG, .PNG</p>
                </div>
            </div>
        </form>
        
            <div>
                <a href="<?php echo get_home_url() . "/list-order?id=" . $_SESSION['currentUser']->$id?>">Quản lí đơn hàng</a>
            </div>  
    </div>

</section>