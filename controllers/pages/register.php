<?php

require_once('./models/user.php');
if (isset($_SESSION['currentUser'])) {
    header('location:' . get_home_url());
}

$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = register_user(
        $_POST['display_name'],
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_FILES['avatar']['name']
    );
    echo $result;
    if (!$result) {
        $error_msg = 'Tên đăng nhập và email đã được sử dụng';
    } else {
        header('location:' . get_home_url() . '/login');
    }
}

// include('./views/partials/header.php');
include('./views/pages/register.php');
// include('./views/partials/footer.php');