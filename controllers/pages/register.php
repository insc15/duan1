<?php

require_once('./models/user.php');
if (isset($_SESSION['currentUser'])) {
    header('location:' . get_home_url());
}

$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_FILES['avatar']);
    if($_FILES['avatar']['name'] === ""){
        $profile_image =  get_home_url() . '/assets/images/avatar_default.jpg';
    }else{
        $profile_image =  get_home_url() . "/assets/images/{$_FILES['avatar']['name']}";
        move_uploaded_file($_FILES['avatar']['tmp_name'], get_home_url() . "/assets/images/{$_FILES['avatar']['name']}");
    }
    $result = register_user(
        $_POST['display_name'],
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $profile_image
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