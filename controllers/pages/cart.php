<?php
    require('models/products.php');
    // require('models/color.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        var_dump($_POST);
        // $queue = $_POST['item'];
        // $temp_cart = [];
        // foreach ($_SESSION['cart'] as $key => $item) {
        //     $exist_item = isset($queue[$item['id']]);
        //     if($exist_item && $queue[$item['id']]['color'] === $item['color'] && $queue[$item['id']]['size'] === $item['size']) {
        //         $item['quantity'] = intval($queue[$item['id']]['quantity']) + intval($item['quantity']);
        //         unset($queue[$item['id']]);
        //     }

        //     $temp_cart[] = $item;
        // }

        // foreach ($queue as $key => $value) {
        //     $temp_cart[] = $value;
        // }

        // $_SESSION['cart'] = $temp_cart;

        // if(isset($_POST['url'])){
        //     header("location: {$_POST['url']}");
        // }
    }

    $cart = array(
        'items' => [],
        'total' => 0
    );

    foreach($_SESSION['cart'] as $key => $value) {
        $value['data'] = get_product(array('id' => $value['id']))[0];
        $cart['total'] += intval($value['data']['final_price']) * intval($value['quantity']);
        $cart['items'][] = $value;
    }

    $cart['formatted_total'] = number_format($cart['total'], 0, '.', '.') . '&#8363;';

    // var_dump($cart['total']);

    include('./views/partials/header.php');
    include('./views/pages/cart.php'); 
    include('./views/partials/footer.php');
?>