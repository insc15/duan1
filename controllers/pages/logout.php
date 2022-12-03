<?php
    if (isset($_SESSION['currentUser'])) {
        unset($_SESSION['currentUser']);
        unset($_COOKIE['user_lg']);
        setcookie('user_lg', null, -1, '/');
    }

    header('location:' . get_home_url() . '/login');