<?php
    require('models/products.php');
    require('models/order.php');

    if(isset($_GET['order_id'])){
        $order_id = $_GET['order_id'];
    }else {
        $cart = array(
            'items' => [],
            'total' => 0
        );
    
        foreach($_SESSION['cart'] as $key => $value) {
            $value['data'] = get_product(array('id' => $value['id']))[0];
            $value['data']['color'] = get_color(array('id' => $value['color']))[0];
            $value['data']['size'] = get_size(array('id' => $value['size']))[0];
            $cart['total'] += intval($value['data']['final_price']) * intval($value['quantity']);
            $cart['items'][] = $value;
        }
    
        $cart['formatted_total'] = number_format($cart['total'], 0, '.', '.') . '&#8363;';
    
        if(count($cart['items']) > 0){
            create_order($cart, $_SESSION['currentUser']->id);
            // header("location: ".get_current_url()."?order_id=1290458902357");
        }else{
            header("location: ".get_home_url());
        }
    }

    include('./views/partials/header.php');
    include('./views/pages/checkout.php');
    include('./views/partials/footer.php');
?>