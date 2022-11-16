<?php


require('models/products.php');
// hiển thị all sản phẩm
function view_products()
{
    $list = get_list_products();
}