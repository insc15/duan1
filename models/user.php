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
    $src = "./assets/images/";
    $profile_image = $src . $profile_image;
    $password = md5($password);
    $query = "INSERT INTO user (display_name,username,password,email,profile_image,role) VALUES ('$display_name','$username', '$password', '$email','$profile_image',0)";

    try {
        $user = run_query($query, NOT_FETCH);
        return $user;
    } catch (\Throwable $th) {
        return false;
    }
}
function edit_user($userData)
{
    $params = [];

    if ($userData->display_name !== $_SESSION['currentUser']->display_name) {
        array_push($params, "display_name='$userData->display_name'");
    }

    if (strlen($userData->oldPassword) > 0) {
        if (md5($userData->oldPassword) === $_SESSION['currentUser']->password) {
            array_push($params, "password='" . md5($userData->newPassword) . "'");
        } else {
        }
    }
    if (strlen($userData->profile_image->name) > 0) {
        array_push($params, "profile_image='" . get_home_url() . '/assets/images/' . $userData->profile_image->name . "'");
    }
    print_r($params);
    $res = new stdClass();

    if (count($params) > 0) {
        $query = "UPDATE user SET " . join(',', $params) . " WHERE id = $userData->id";
        echo $query;
        $response = run_query($query, NOT_FETCH);

        if ($response) {
            move_uploaded_file($userData->profile_image->tmp_name, './assets/images/' . $userData->profile_image->name);

            $newUserData = run_query("SELECT * FROM user WHERE id=$userData->id", FETCH_ONE);

            $_SESSION['currentUser'] = (object) $newUserData;
            if (isset($_COOKIE['user_lg'])) {
                setcookie('user_lg', base64_encode(json_encode($newUserData)), time() + (86400 * 30), "/");
            }

            $res->status = true;
            $res->message = 'Lưu thông tin thành công';
        } else {
            $res->status = false;
            $res->message = 'Lưu thông tin thất bại';
        }
    }

    return $res;
}