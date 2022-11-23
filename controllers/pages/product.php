<?php
    $id = $_GET['id'];
    if(!isset($id)) { header('location:'.get_home_url()); }
    
    $product = view_product($id);

    include('./views/pages/product.php');
?>