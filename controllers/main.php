<?php
session_start();

require_once('./controllers/common.php');

function Run()
{
    global $root;

    switch ($_SERVER['REQUEST_URI']) {
        case $root . '/':
            get_view('./controllers/pages/home.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/login');
            include('./controllers/pages/login.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/list-order');
            include('./controllers/pages/listorder.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/register');
            include('./controllers/pages/register.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/checkout');
            get_view('./controllers/pages/checkout.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/dashboard');
            with_login('./controllers/admin/dashboard.php', '/admin/dashboard', false, true);
            break;
       
         case str_contains($_SERVER['REQUEST_URI'], $root . '/adminorder');
            get_view('./controllers/admin/adminorder.php');
            break;
         case str_contains($_SERVER['REQUEST_URI'], $root . '/moreproducts');
            get_view('./controllers/admin/moreproducts.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/table');
            get_view('./controllers/admin/table.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/edit');
            get_view('./controllers/admin/edit.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/ordersuccessful');
            get_view('./controllers/pages/ordersuccessful.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/shop'):
            get_view('./controllers/pages/shop.php');
            break;
        case $root . '/cart':
            include('./controllers/pages/cart.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/product'):
            get_view('./controllers/pages/product.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/category'):
            get_view('./controllers/pages/category.php');
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
}