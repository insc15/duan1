<section>
    <h1>Danh sách đơn hàng</h1>
    <div class="flex items-center justify-between rounded-lg shadow-default p-1 pr-6 mb-2 last:mb-0">
                    <div class="flex items-center">
                        <div class="rounded overflow-hidden w-24">
                            <div class="relative pt-[100%]">
                                <img class="absolute top-0" src="<?php echo $item['featured_image']?>" alt="">
                            </div>
                        </div>
                        <div class="ml-6">
                            <a href="#"><h3 class="text-secondary hover:text-primary text-base font-bold"><?php echo $item['name'] ?></h3></a>
                        </div>
                    </div>
                    <p><?php echo $item['formatted_final_price'] ?></p>
                </div> 
</section>