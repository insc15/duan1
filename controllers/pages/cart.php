<?php
    require('models/products.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $postData = json_decode(file_get_contents('php://input'), true);//vì $_POST chỉ nhận các giá trị nhận từ form nên dữ liệu từ js gửi lên qua fetch sẽ dùng cái này
        $_SESSION['cart'] = $postData['data'];  
    }

    $cart = [];
    $cart['total'] = 0;

    foreach(json_decode($_SESSION['cart'],true) as $key => $value) {
        $value['data'] = get_product(array('id' => $value['id']))[0];
        $cart['total'] += intval($value['data']['final_price']) * intval($value['quantity']);
        $cart['items'][] = $value;
    }

    // var_dump($cart['total']);

    include('./views/partials/header.php');
    include('./views/pages/cart.php'); 
    include('./views/partials/footer.php');
?>