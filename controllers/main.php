<?php
    session_start();

    require_once('./controllers/common.php');

    function Run(){
        global $root;

        switch ($_SERVER['REQUEST_URI']) {
            case $root.'/':
                get_view('./controllers/pages/home.php');
                break;
            case $root.'/shop':
                get_view('./controllers/pages/shop.php');
                break;
            case str_contains($_SERVER['REQUEST_URI'], $root.'/shop-detail'):
                get_view('./controllers/pages/shop-detail.php');
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