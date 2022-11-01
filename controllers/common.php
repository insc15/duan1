<?php
$root = '/duan1';

function get_view($path, $method = 'GET'){
    if($method === 'GET') {
        include('./views/partials/header.php');
        echo('<main>');
    }
    include($path);
    if($method === 'GET') { 
        include('./views/partials/footer.php');
        echo('</main>');
    }
}

function with_login($path,$url, $noheader = false){
    if(isset($_SESSION['currentUser']) && $_SESSION['currentUser']->role == 1) {
        !$noheader ? get_view($path) : include($path);
    }else{
        header('location: '.get_home_url().'/login?url='.get_home_url().$url);
    }
}

function get_home_url(){
    global $root;
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$root";
}

?>