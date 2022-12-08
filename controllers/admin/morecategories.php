<?php
require('./models/category.php');

$error_msg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $result = add_category($_POST['name']);
    echo $result;
    if (!$result) {
        $error_msg = 'Không thể thêm được danh mục.';
    } else {
        $error_msg = 'Thêm danh mục thành công.';
    }
}
include('./views/admin/morecategories.php');
?>