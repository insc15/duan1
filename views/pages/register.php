<section class="bg-[url('../images/hero4.png')] h-screen">
    <div class="w-4/12 mx-auto pt-20">
        <h1 class="text-xl">Đăng ký tài khoản</h1>
        <form action="" class="" method="post" enctype="multipart/form-data">
            <div>
            <input name="display_name" type="text"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Tên hiển thị">
            </div>
            <div>
            <input name="username" type="text"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Tên đăng nhập">
            </div>
            <div>
            <input name="password" type="password"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Mật khẩu">
            </div>
            <div>
            <input name="email" type="email"
                class="px-3 py-2 focus:shadow-default focus:border-gray-500 focus:outline-none placeholder:text-sm w-full border border-solid border-gray-300 rounded-sm my-2"
                placeholder="Email">
            </div>
            <input type="file" name="avatar">
            <?php if ($error_msg !== '') : ?>
            <p class="text-red-500"><?php echo $error_msg ?></p>
            <?php endif; ?>
            <button class="w-full bg-primary text-white rounded py-2 px-3 mt-2" type="submit">Đăng ký</button>
        </form>
        <p class="text-sm mt-2">Đã có tài khoản? <a class="text-primary" href="/duan1/login">Đăng nhập ngay</a></p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = new JustValidate('form');

        form.addField('input[name=display_name]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
        ])
        form.addField('input[name=username]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
        ])
        form.addField('input[name=email]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
            {
                rule: 'email',
                errorMessage: 'Sai định dạng email'
            },
        ])
        .addField('input[name=password]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
        ])
        .onSuccess((event) => {
            event.target.submit()
        });
    })
</script>