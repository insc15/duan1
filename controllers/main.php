<?php
    session_start();

    require_once('./controllers/common.php');

    function Run(){
        global $root;

        switch ($_SERVER['REQUEST_URI']) {
            case $root.'/':
                get_view('./controllers/pages/home.php');
                break;
            case $root.'/login':
                get_view('./controllers/pages/login.php');
                break;
            case str_contains($_SERVER['REQUEST_URI'], $root.'/checkout');
                     get_view('./controllers/pages/checkout.php');
                break;
            case str_contains($_SERVER['REQUEST_URI'], $root.'/shop'):
                    get_view('./controllers/pages/shop.php');
                 break;
            case str_contains($_SERVER['REQUEST_URI'], $root.'/cart'):
                get_view('./controllers/pages/cart.php');
                break;
            case str_contains($_SERVER['REQUEST_URI'], $root.'/product'):
                get_view('./controllers/pages/product.php');
                break;
            case str_contains($_SERVER['REQUEST_URI'], $root.'/category'):
                get_view('./controllers/pages/category.php');
                break;
            default:
                echo 'Đường dẫn không tồn tại';
                break;
        }
    }
?>