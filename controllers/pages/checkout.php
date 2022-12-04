<?php
    require('models/products.php');
    require('models/order.php');

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $order = get_order(array('id' => intval(str_replace('CARA','',$_POST['order_id']))))[0];
        if($order['status'] !== 0){
            include('./views/partials/header.php');
            include('./views/pages/ordersuccessful.php');
            include('./views/partials/footer.php');
        }else{
            $delivery_data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'city' => $_POST['city'],
            );
            $delivery_data = urlencode(json_encode($delivery_data));
            
            $res = update_order(str_replace('CARA','',$_POST['order_id']),array(
                'delivery_data' => $delivery_data,
                'status' => 1,
                'payment' => $_POST['payment_method']
            ));
    
            if($res){
                $_SESSION['cart'] = [];
                include('./views/partials/header.php');
                include('./views/pages/ordersuccessful.php');
                include('./views/partials/footer.php');
            }
        }
    }else{
        if(isset($_GET['order_id'])){
            $order_id = $_GET['order_id'];
    
            $order = get_order(array('id' => intval(str_replace('CARA','',$order_id))));
            if(count($order) > 0){
                if($order[0]['status'] !== 0){
                    include('./views/partials/header.php');
                    include('./views/pages/ordersuccessful.php');
                    include('./views/partials/footer.php');
                }else{
                    $order = $order[0];
                    $order['id'] = $order_id;
                    $order['product_data'] = json_decode(urldecode($order['product_data']));
                }
            }else{
                header("location: ".get_home_url());
            }
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
                $active_order = get_order(array('customer_id' => $_SESSION['currentUser']->id, 'status' => 0));
                if(count($active_order) > 0){
                    $order_id = "CARA".$active_order[0]['id'];
                    update_order($order_id, array('product_data' => encode_product_data($cart)));
                }else{
                    $order_id = create_order($cart, $_SESSION['currentUser']->id);
                }
                header("location: ".get_current_url()."?order_id=$order_id");
            }else{
                header("location: ".get_home_url());
            }
        }
    
        include('./views/partials/header.php');
        include('./views/pages/checkout.php');
        include('./views/partials/footer.php');
    }
?>