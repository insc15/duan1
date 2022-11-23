<?php
    require('models/products.php');

    $id = $_GET['id'];
    if(!isset($id)) { header('location:'.get_home_url()); }
    
    $product = get_product(array('id' => $id));
    $product = $product[0];

    include('./views/pages/product.php');
?>