<section class="">
    <form class="mx-auto mt-5 mb-5 flex max-w-screen-xl bg-slate-100 shadow-xl font-[Montserrat]" action=""
        enctype="multipart/form-data" method="POST">

        <div class="rounded overflow-hidden mt-5 ml-5 mb-5 w-2/12">
            <div class="relative pt-[100%] w-48 ">
                <img class="absolute top-0" src="<?php echo $_SESSION['currentUser']->profile_image ?>" alt="">
            </div>
            <input type="file" name="avatar">
        </div>

        <div class="mt-5 ml-5 mb-5 w-6/12 flex flex-col">
            <input type="text" name="id" value="<?php echo $_SESSION['currentUser']->id ?>" hidden>
            Họ Và Tên:
            <input class="rounded-lg" name="display_name"
                value="<?php echo $_SESSION['currentUser']->display_name ?>"></input>
            Tên đăng nhập:
            <input class="rounded-lg" value="<?php echo $_SESSION['currentUser']->username ?>"></input>
            Mật khẩu cũ:
            <input class="rounded-lg" type="password" name="oldPassword"></input>
            Mật khẩu mới:
            <input class="rounded-lg" type="password" name="newPassword"></input>
            Nhập Mật khẩu mới:
            <input class="rounded-lg" type="password" name="passwordChecker"></input>
            Email:
            <input class="rounded-lg" type="email" name="email"
                value="<?php echo $_SESSION['currentUser']->email ?>"></input>
        </div>
        <div class="mt-5 mr-5 w-4/12 relative">
            <button type="submit"
                class="absolute right-0 border border-red-400 p-2 rounded-lg text-red-400 hover:bg-sky-300 hover:text-white hover:border-transparent"
                href="edit-profile">Xác nhận</button>
        </div>
        <div>
        </div>
    </form>
</section>