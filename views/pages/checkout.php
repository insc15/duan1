<section class="bg-[url('../images/bgcart.jpg')] bg-no-repeat bg-cover bg-center h-80 flex justify-center items-center">
   <h1 class="uppercase text-4xl font-bold text-white">Thanh toán</h1>
</section>

<section class="justify-center py-9">
    <div class="max-w-screen-xl mx-auto px-4">
        <a href="<?php echo get_home_url().'/cart' ?>" class="flex items-center text-primary mb-4">
            <span class="material-symbols-rounded icon-outline">chevron_left</span>
            <p class="">Quay lại giỏ hàng</p>
        </a>
        <form class="flex flex-wrap" method="post">
            <div class="w-full md:w-8/12 pr-3">
                <div class="shadow-default rounded-lg p-4">
                    <h3 class="text-xl font-semibold mb-4">Hãy nhập thông tin đơn hàng của bạn</h3>
                    <input type="text" hidden value="<?php echo $order['id'] ?>" name="order_id">
                    <div class="py-4 flex flex-wrap">
                        <div class="w-full md:w-1/2 md:pr-3 mt-4 md:mt-0">
                            <p class="text-sm mb-2">Họ</p>
                            <input name="first_name" class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="Huy">
                        </div>
                        <div class="w-full md:w-1/2 md:pl-3 mt-4 md:mt-0">
                            <p class="text-sm mb-2">Tên</p>
                            <input name="last_name" class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="Nguyen Quang">
                        </div>
                        <div class="w-full mt-4">
                            <p class="text-sm mb-2">Địa chỉ email</p>
                            <input name="email" class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="email" placeholder="huynguyenquang@gmail.com">
                        </div>
                    </div>
                    <div class="py-4 flex flex-wrap">
                        <div class="w-full md:mb-4">
                            <p class="text-sm mb-2">Địa chỉ</p>
                            <input name="address" class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="158 / 3 Xo Viet Nghe Tinh Street, Binh Thanh District">
                        </div>
                        <div class="w-full mt-4 md:mt-0">
                            <p class="text-sm mb-2">Tỉnh / Thành phố</p>
                            <input name="city" class="appearance-none block w-full font-medium rounded-lg py-3 px-4 outline-[#808080] outline-1 outline-double focus:outline-primary focus:outline-2 duration-150 placeholder:text-[#808080]" type="text" placeholder="Ho Chi Minh">
                        </div>
                    </div>
                    <div class="py-4">
                        <p class="text-sm mb-2">Phương thức thanh toán</p>
                        <div class="flex flex-wrap -mx-3">
                            <div class="px-3 w-4/12 font-medium flex items-center">
                                <input id="payment_method_1" type="radio" name="payment_method" value="1" hidden class="peer" checked>
                                <label for="payment_method_1" class="duration-150 px-4 py-3 peer-checked:text-white peer-checked:bg-primary peer-checked:border-primary border border-[#808080] w-full cursor-pointer rounded-lg text-center">Ví MoMo</label>
                            </div>
                            <div class="px-3 w-4/12 font-medium flex items-center">
                                <input id="payment_method_2" type="radio" name="payment_method" value="2" hidden class="peer">
                                <label for="payment_method_2" class="duration-150 px-4 py-3 peer-checked:text-white peer-checked:bg-primary peer-checked:border-primary border border-[#808080] w-full cursor-pointer rounded-lg text-center">Chuyển khoản trực tiếp</label>
                            </div>
                            <div class="px-3 w-4/12 font-medium flex items-center">
                                <input id="payment_method_3" type="radio" name="payment_method" value="3" hidden class="peer">
                                <label for="payment_method_3" class="duration-150 px-4 py-3 peer-checked:text-white peer-checked:bg-primary peer-checked:border-primary border border-[#808080] w-full cursor-pointer rounded-lg text-center">Trả tiền khi nhận hàng</label>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="grid gap-4 grid-cols-2 mt-5 ml-3 py-5">
                        <div>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                                Cardholder name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" placeholder=" Cardholder name">

                        </div>
                        <div>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                                Cardnumber
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" placeholder="Cardnumber">
                        </div>
                        <div>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                                Expired date
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="date" placeholder=" Expired date">

                        </div>
                        <div>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs  mb-2" for="grid-first-name">
                                CVV
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="password" placeholder="CVV">
                        </div>


                    </div> -->
                </div>
            </div>
            <div class="w-full md:w-4/12 pl-3">
                <div class="px-4 py-5 shadow-default rounded-lg">
                    <?php if(count($order['product_data']) > 0) : foreach ($order['product_data'] as $key => $value) : ?>
                        <div class="flex items-center pb-4">
                            <div class="w-24">
                                <div class="relative pt-[100%]">
                                    <img class="absolute top-0" src="<?php echo get_home_url()?>/assets/images/<?php echo($value['data']['featured_image']) ?>" alt="">
                                </div>
                            </div>
                            <div class="px-3">
                                <h4 class="font-bold text-secondary"><?php echo($value['data']['name']) ?></h4>
                                <p class="text-xs text-[#7a7a7a] my-2"><?php echo get_color(array('id' => $value['color']))[0]['name'] ?>, <?php echo get_size(array('id' => $value['size']))[0]['name'] ?></p>
                                <p><?php echo($value['data']['formatted_final_price']) ?></p>
                            </div>
                            <div class="ml-auto pr-2">
                                <p><?php echo($value['quantity']) ?></p>
                            </div>
                        </div>
                    <?php endforeach;endif; ?>
                    <hr class="bg-[#d9d9d9]">
                    <div class="flex font-semibold py-4">
                        <span class="">Total</span>
                        <span class="ml-auto text-primary"><?php echo $order['formatted_total'] ?></span>
                    </div>
                    <button type="submit" href="<?php echo get_home_url().'/checkout' ?>" class="rounded-lg px-3 py-2 mt-4 border-2 border-transparent duration-150 w-full block text-center text-white bg-[#041E42] hover:bg-white hover:text-primary hover:border-primary">
                        Đặt hàng
                    </button> 
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = new JustValidate('form');
        
        form.addField('input[name=first_name]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
        ])
        .addField('input[name=last_name]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
        ])
        .addField('input[name=email]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
            {
                rule: 'email',
                errorMessage: 'Sai định dạng email'
            }
        ])
        .addField('input[name=address]', [
            {
                rule: 'required',
                errorMessage: 'Trường này là bắt buộc'
            },
        ])
        .addField('input[name=city]', [
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