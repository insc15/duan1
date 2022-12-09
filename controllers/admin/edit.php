<?php
require('./models/products.php');

$id = $_GET['id'];
if (!isset($id)) {
    header('location:' . get_home_url());
}
$product = getOne_product($id);

$error_msg = '';
$error_img = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $array_clrs = [];
    if (is_array($_POST['color'])) {
        foreach ($_POST['color'] as $key => $value) {
            $colors = get_color(array('id' => $value));
            array_push($array_clrs,$colors);
        }
    }
    $array_clrs = $_POST['color'];
    $color=implode(",",$_POST['color']);

    // implode(): chuyển dữ liệu từ mảng sang chuỗi
    
    $array_szs = [];
    if (is_array($_POST['size'])) {
        foreach ($_POST['size'] as $key => $value) {
            $sizes = get_color(array('id' => $value));
            array_push($array_szs,$sizes);
        }
    }
    $array_szs = $_POST['size'];
    $size=implode(",",$_POST['size']);

    $image = $_FILES['featured_image']['name'];
    $target_dir = "./assets/images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($image, $target_file)) {
        // $error_img = "The file ". htmlspecialchars( basename( $image)). " has been uploaded.";
    } else {
        // $error_img = "Sorry, there was an error uploading your file.";
    }

    $result = update_product(
        $_POST['id'],
        $_POST['name'],
        $_POST['price'],
        $_POST['discount'],
        $image,
        $_POST['category'],
        $_POST['description'],
        $_POST['description_detail'],
        $color,
        $size
    );
    echo $result;
    $error_msg = 'Cập nhật sản phẩm thành công.';
}
include('./views/admin/edit.php');
?>