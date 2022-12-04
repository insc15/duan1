<?php
require('./models/products.php');

$id = $_GET['id'];
if (!isset($id)) {
    header('location:' . get_home_url());
}
$product = get_product(array('id' => $id));
$product = $product[0];

$error_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = update_product(
        $_POST['id'],
        $_POST['name'],
        $_POST['price'],
        $_POST['discount'],
        $_POST['description_detail'],
        $_POST['color'],
        $_POST['size']
    );
    echo $result;
    if (!$result) {
        $error_msg = 'Không thể cập nhật được sản phẩm.';
    } else {
        $error_msg = 'Cập nhật sản phẩm thành công.';
    }
}
include('./views/admin/edit.php');
?>