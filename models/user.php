<?php
require_once('models/config.php');
function auth_user($username, $password)
{
    $password = md5($password);
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    $user = run_query($query, FETCH_ONE);

    return $user;
}
function register_user($display_name, $username, $password, $email, $profile_image)
{
    $password = md5($password);
    $query = "INSERT INTO user (display_name,username,password,email,profile_image,role) VALUES ('$display_name','$username', '$password', '$email','$profile_image',0)";

    try {
        $user = run_query($query, NOT_FETCH);
        return $user;
    } catch (\Throwable $th) {
        return false;
    }
}