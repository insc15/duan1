<?php
function add_to_cart(){
    if(isset($_SESSION['cart_item'])){
        $available = 0;
        foreach ($_SESSION['cart_item'] as $item => $value) {
            if ($_SESSION['cart_item'][$item]['id'] == $_POST['idpro']) {
                $available++;
                $_SESSION['cart_item'][$item]['quantity'] = $_SESSION['cart_item'][$item]['quantity'] + $_POST['quantity'];
            }
        }
        if($available == 0){
            $item = array(
                'id' => $_POST['idpro'],
                'featured_image' => $_POST['featured_image'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
            );
            $_SESSION['cart_item'][] = $item;
        }
        if(isset($_POST['del_item'])){
            
        }
    } else{
        $item = array(
            'id' => $_POST['idpro'],
            'featured_image' => $_POST['featured_image'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity'],
        );
        $_SESSION['cart_item'][] = $item;
    }
    
include('./views/pages/cart.php');  
};
function del_cart_item(){
    if(isset($_SESSION['cart_item'])){
        foreach ($_SESSION['cart_item'] as $item => $value) {
            if ($_SESSION['cart_item'][$item]['id'] == $_POST['del_cart_item']) {
                unset($_SESSION['cart_item'][$item]);
            } 
        }
        include('./views/pages/cart.php');
    }else{
        header('Location: '.get_home_url());
    } 
    
include('./views/pages/cart.php'); 
};

function update_cart(){ 
    foreach ($_POST['quantity'] as $qntity => $qty) {
        foreach ($_SESSION['cart_item'] as $key => $value) {
            if ($value['id'] == $qntity) {
                $_SESSION['cart_item'][$key]['quantity'] = $qty;
            }
        }
    }
    include('./views/pages/cart.php'); 
};

function get_cart(){
    
    // return
}
?>