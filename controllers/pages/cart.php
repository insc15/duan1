<?php
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
?>