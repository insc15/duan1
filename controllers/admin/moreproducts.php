<?php
require('./models/products.php');
$error_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = add_product(
        $_POST['name'],
        $_POST['price'],
        $_POST['discount'],
        $_FILES['featured_image']['name'],
        $_POST['category'],
        $_POST['description'],
        $_POST['description_detail'],
        $_POST['color'],
        $_POST['size']
    );
    echo $result;
    if (!$result) {
        $error_msg = 'Không thể thêm được sản phẩm';
    } else {
        $error_msg = 'Thêm sản phẩm thành công.';
    }
}
include('./views/admin/moreproducts.php');
?>