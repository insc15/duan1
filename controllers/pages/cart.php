<?php
    require('models/products.php');
    // require('models/color.php');

    function searchForId($id, $array) {
        foreach ($array as $key => $val) {
            if ($val['id'] === $id) {
                return $key;
            }
        }
        return null;
     }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $queue = $_POST['item'];
        $temp_cart = [];
        if(!isset($_POST['add-to-cart']) && !isset($_POST['del_cart_item'])){
            foreach ($_SESSION['cart'] as $key => $item) {
                $exist_item = $queue[searchForId($item['id'],$queue)];
                if($exist_item && $exist_item['color'] === $item['color'] && $exist_item['size'] === $item['size']) {
                    $item['quantity'] = $queue[searchForId($item['id'],$queue)]['quantity'];
                    unset($queue[searchForId($item['id'],$queue)]);
                }
                $temp_cart[] = $item;
            }
        }elseif(isset($_POST['del_cart_item'])){
            foreach ($_SESSION['cart'] as $key => $item) {
                $target = explode(',',$_POST['del_cart_item']);
                $exist_item = $item['id'] === $target[0];
                if($exist_item && $item['color'] === $target['1'] && $item['size'] === $target['2']) {
                    unset($queue[searchForId($item['id'],$queue)]);
                }else{
                    // $temp_cart[] = $item;
                }   
            }
        }else{
            foreach ($_SESSION['cart'] as $key => $item) {
                $exist_item = isset($queue[$item['id']]);
                if($exist_item && $queue[$item['id']]['color'] === $item['color'] && $queue[$item['id']]['size'] === $item['size']) {
                    $item['quantity'] = intval($queue[$item['id']]['quantity']) + intval($item['quantity']);
                    unset($queue[$item['id']]);
                }
                $temp_cart[] = $item;
            }
        }
        
        foreach ($queue as $key => $value) {
            $temp_cart[] = $value;
        }

        $_SESSION['cart'] = $temp_cart;

        if(isset($_POST['url'])){
            header("location: {$_POST['url']}");
        }
    }

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


    include('./views/partials/header.php');
    include('./views/pages/cart.php'); 
    include('./views/partials/footer.php');
?>