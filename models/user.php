<?php
    require_once('models/config.php');
    function auth_user($username, $password)
    {
        $password = ($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

        $user = getData($query, FETCH_ONE);

        return $user;
    }