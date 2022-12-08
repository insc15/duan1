<?php
require('./models/category.php');

$id = $_GET['id'];
if (!isset($id)) {
    header('location:' . get_home_url());
}
$category = getOne_category($id);

$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = edit_category(
        $_POST['id'],
        $_POST['name']
    );
    echo $result;
    if (!$result) {
        $error_msg = 'Không thể cập nhật được danh mục.';
    } else {
        $error_msg = 'Cập nhật danh mục thành công.';
    }
}
include('./views/admin/edit_category.php');

?>