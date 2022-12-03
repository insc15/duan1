<?php
require_once('./models/user.php');

if (!isset($_SESSION['currentUser'])) {
    header('location:' . get_home_url() . '/login');
}

$res = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userData = (object) $_POST;
    $userData->profile_image = (object) $_FILES['avatar'];
    print_r($userData);
    $result = edit_user($userData);

    $res = $result;
}
include('./views/pages/editProfile.php');