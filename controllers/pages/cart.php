<?php
require_once('./models/carts.php');
if(isset($_POST['add_to_cart'])){
    return add_to_cart();   
}
if(isset($_POST['del_cart_item'])){
    return del_cart_item();
}
if(isset($_POST['update_cart'])){
    return update_cart();
}
include('./views/pages/cart.php'); 
?>