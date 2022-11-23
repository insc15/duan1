<?php
<<<<<<< HEAD
require('./controllers/product.php');
=======
    require('models/products.php');

    $id = $_GET['id'];
    if(!isset($id)) { header('location:'.get_home_url()); }
    
    $product = get_product(array('id' => $id));
    $product = $product[0];
>>>>>>> ea2f65a28b595dd8a1148eec29f7b5d7a84922a5

$id = $_GET['id'];
if (!isset($id)) {
    header('location:' . get_home_url());
}

$product = get_product(array('id' => $id));

// $product = $product[0];

include('./views/pages/product.php');