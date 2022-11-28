<?php
require_once('./models/user.php');
$error_msg = '';

if (isset($_SESSION['currentUser'])) {
    header('location:' . get_home_url());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = auth_user($_POST['username'], $_POST['password']);

    if (!$result) {
        $error_msg = 'Sai username hoặc mật khẩu.';
    } else {
        if (isset($_POST['remember'])) {
            setcookie('user_lg', base64_encode(json_encode($result)), time() + (86400 * 30), "/");
        } else {
        }

        $_SESSION['currentUser'] = (object) $result;

        if (isset($_GET['url'])) {
            header('location:' . $_GET['url']);
        } else {
            header('location:' . get_home_url());
        }
    }
}
// include('./views/partials/header.php');
include('./views/pages/login.php');
// include('./views/partials/footer.php');