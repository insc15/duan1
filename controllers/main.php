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
        case str_contains($_SERVER['REQUEST_URI'], $root . '/logout');
            include('./controllers/pages/logout.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/list-order');
            get_view('./controllers/pages/listorder.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/profile');
            get_view('./controllers/pages/profile.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/edit-profile');
            get_view('./controllers/pages/editProfile.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/register');
            include('./controllers/pages/register.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/checkout');
            with_login('./controllers/pages/checkout.php','/checkout', true);
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/dashboard');
            with_login('./controllers/admin/dashboard.php', '/admin/dashboard', false, true);
            break;
            
        case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/adminorder');
            with_login('./controllers/admin/adminorder.php', '/admin/adminorder', false, true);
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/moreproducts');
            get_view('./controllers/admin/moreproducts.php');
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/products');
            with_login('./controllers/admin/admin_product.php', '/admin/products', false, true);
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/user');
            with_login('./controllers/admin/user.php', '/admin/user', false, true);
            break;
        case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/edit');
            with_login('./controllers/admin/edit.php', '/admin/edit', false, true);
            break;
         case str_contains($_SERVER['REQUEST_URI'], $root . '/admin/category');
            with_login('./controllers/admin/category.php', '/admin/category', false, true);
            break;
<<<<<<< HEAD
=======
        case str_contains($_SERVER['REQUEST_URI'], $root . '/order-complete');
            get_view('./controllers/pages/order-complete.php');
            break;
        // case str_contains($_SERVER['REQUEST_URI'], $root . '/ordersuccessful');
        //     get_view('./controllers/pages/ordersuccessful.php');
        //     break;
>>>>>>> f140f187f14690b107c45f9e5a06f9d8e6bc8062
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