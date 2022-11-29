<?php
require_once('models/config.php');
function auth_user($username, $password)
{
    $password = ($password);
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    $user = getData($query, FETCH_ONE);

    return $user;
}
function register_user($display_name, $username, $password, $email, $profile_image)
{
    $password = ($password);
    $query = "INSERT INTO user (display_name,username,password,email,profile_image,role) VALUES ('$display_name','$username', '$password', '$email','$profile_image',0)";

    try {
        $user = getData($query, NOT_FETCH);
        return $user;
    } catch (\Throwable $th) {
        return false;
    }
}