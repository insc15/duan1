<?php
$root = '/duan1';

if(!isset($_SESSION['cart'])){$_SESSION['cart'] = [];}
// $_SESSION['cart'] = [];

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

function with_login($path,$url, $noheader = false, $admin_layout = false){
    if(isset($_SESSION['currentUser']) && $_SESSION['currentUser']->role == 1) {
            if(!$noheader ){
                if(!$admin_layout){
                    get_view($path);
                }else{
                    $sidebar = file_get_contents('./views/partials/admin/sidebar.php');
                    $page = $path;
                    include('./views/admin/layout.php');
                }
            }else{
                include($path);
            }
    }else{
        header('location: '.get_home_url().'/login?url='.get_home_url().$url);
    }
}

function get_home_url(){
    global $root;
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$root";
}

function get_current_url(){
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function search_array($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search_array($subarray, $key, $value));
        }
    }

    return $results;
}
?>