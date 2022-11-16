<?php
require('models/products.php');
// hiển thị all sản phẩm
function view_products()
{
    return  get_list_products();
}