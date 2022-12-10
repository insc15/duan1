<?php
require_once('./models/user.php');

if(!isset($_SESSION['currentUser'])){
    header('location:'.get_home_url().'/login');
}

$res = null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $userData = (object) $_POST;
    $userData->profile_image = (object) $_FILES['profile_image'];

    $result = edit_user($userData);
    $res = $result;
}

include('./views/partials/header.php');
include('./views/pages/profile.php');
include('./views/partials/footer.php');