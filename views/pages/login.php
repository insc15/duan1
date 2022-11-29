<section class="bg-[url('../images/hero4.png')] h-screen">
    <div class="w-[727px]">
        <h1 class="text-xl">Đăng nhập</h1>
        <form action="" class="" method="post">
            <input name="username" type="text"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2 placeholder:text-center"
                placeholder="Username">
            <input name="password" type="password"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Password">
            <div class="flex py-2 w-fit cursor-pointer" onclick="this.querySelector('input').click()">
                <input type="checkbox" name="remember">
                <p class="ml-2 text-sm leading-normal select-none">Ghi nhớ đăng nhập</p>
            </div>
            <?php if ($error_msg !== '') : ?>
            <p class="text-red-500"><?php echo $error_msg ?></p>
            <?php endif; ?>
            <button class="w-full bg-primary text-primary py-2 px-3 mt-2" type="submit">Đăng nhập</button>
        </form>
        <p class="text-sm mt-2">Chưa có tài khoản? <a class="text-primary" href="/duan1/register">Đăng ký ngay</a></p>
    </div>
</section>