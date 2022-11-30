<?php
require('./models/products.php');

$id = $_GET['id'];
if (!isset($id)) {
    header('location:' . get_home_url());
}

$product = get_product(array('id' => $id));

$product = $product[0];

$category_array = [];
foreach ($product['category'] as $key => $value) {
    $category = get_category(array('id' => $value));
    array_push($category_array, $category[0]);
}
$product['category'] = $category_array;

$color_array = [];
foreach ($product['color'] as $key => $value) {
    $color = get_color(array('id' => $value));
    array_push($color_array, $color[0]);
}
$product['color'] = $color_array;

$size_array = [];
foreach ($product['size'] as $key => $value) {
    $size = get_size(array('id' => $value));
    array_push($size_array, $size[0]);
}
$product['size'] = $size_array;

include('./views/partials/admin/edit.php');
?>