<section class="bg-[url('../images/hero4.png')] h-screen">
    <div class="w-4/12 mx-auto pt-20">
        <h1 class="text-xl">Register</h1>
        <form action="" class="" method="post" enctype="multipart/form-data">
            <input name="display_name" type="text"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Display Name">
            <input name="username" type="text"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Username">
            <input name="password" type="password"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Password">
            <input name="email" type="email"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Email">
            <input type="file" name="avatar">
            <?php if ($error_msg !== '') : ?>
            <p class="text-red-500"><?php echo $error_msg ?></p>
            <?php endif; ?>
            <button class="w-full bg-primary text-white rounded py-2 px-3 mt-2" type="submit">Đăng ký</button>
        </form>
    </div>
</section>