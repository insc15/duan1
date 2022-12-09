<?php
require('./models/products.php');
$error_msg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
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
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $date = date("Y-m-d h:m:s");

    $result = add_product(
        $_POST['name'],
        $_POST['price'],
        $_POST['discount'],
        $image,
        $date,
        $_POST['category'],
        $_POST['description'],
        $_POST['description_detail'],
        $color,
        $size
    );
    echo $result;
    if(!$result){
        $error_msg = 'Thêm sản phẩm thất bại.';
    } else{
        $error_msg = 'Thêm sản phẩm thành công.';
    }
}

include('./views/admin/moreproducts.php');
?>