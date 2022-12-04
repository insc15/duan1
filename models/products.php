<?php
require_once('config.php');
require_once('category.php');
require_once('color.php');
require_once('size.php');

function get_product($meta_query = null, $order = null)
{
    $sql = select_query_builder('product', $meta_query, $order);
    $product = run_query($sql, FETCH_ALL);
    $formatted_product = format_product($product);
    return $formatted_product;
}
function add_product($name,$price,$discount,$image,$category,$description,$description_detail,$color,$size){
    $target_dir = "./assets/images/";
    $target_file = $target_dir . basename($image);
    if (move_uploaded_file($image, $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $sql = "INSERT INTO product(name,price,discount,featured_image,list_image,category,description,description_detail,color,size) VALUES('$name','$price','$discount','$image','$image','$category','$description','$description_detail','$color','$size')";
    try {
        $add = run_query($sql, NOT_FETCH);
        return $add;
    } catch (\Throwable $th) {
        return false;
    }
}
function update_product($id,$name,$price,$discount,$description_detail,$color,$size){
    $sql = "UPDATE product SET name ='$name',price = '$price', discount = '$discount',description_detail = '$description_detail',color = '$color',size = '$size' WHERE id='$id'";
    try {
        $update = run_query($sql, NOT_FETCH);
        return $update;
    } catch (\Throwable $th) {
        return false;
    }
}
function delete_product($id){
    $sql = "DELETE FROM product where id = '$id'";
    try {
        $delete = run_query($sql, NOT_FETCH);
        return $delete;
    } catch (\Throwable $th) {
        return false;
    }
}
// function get_one_product($id)
// {
//     $sql = "SELECT * FROM product where id = $id";
//     $product = run_query($sql, FETCH_ONE);
//     $formatted_product = format_product($product);
//     return $formatted_product;
// }
// // kt hàng mới
// function get_list_prnew($day)
// {
//     // đổi lấy giây ngày hiện tại
//     $date_second =  time();
//     // đổi lấy giây ngày tạo sản phẩm
//     $sc_product = strtotime($day);
//     return strftime('%d', $date_second - $sc_product);
// }

// chỗ này để format các trường thông tin
function format_product($product)
{
    if (isset($product['id'])) {
        $product = formatter($product);
    } else {
        $product = array_map(function ($item) {
            return formatter($item);
        }, $product);
    }
    return $product;
}

function formatter($item)
{
    $item['featured'] = boolval($item['featured']);
    $item['final_price'] = intval($item['discount']) > 0 ? $item['discount'] : $item['price'];
    $item['formatted_final_price'] = number_format((intval($item['discount']) > 0 ? $item['discount'] : $item['price']), 0, '.', '.') . '&#8363;';
    $item['formatted_price'] = number_format($item['price'], 0, '.', '.') . '&#8363;';
    $item['formatted_discount'] = number_format($item['discount'], 0, '.', '.') . '&#8363;';
    $item['list_image'] = explode(',', $item['list_image']);

    $item['category'] = explode(',',$item['category']);
    $item['color'] = explode(',',$item['color']);
    $item['size'] = explode(',',$item['size']);

    // $color_array = [];
    // foreach (explode(',',$item['color']) as $key => $value) {
    //     $color = get_color(array('id' => $value));
    //     array_push($color_array, $color[0]);
    // }
    // $item['color'] = $color_array;

    // $size_array = [];
    // foreach (explode(',',$item['size']) as $key => $value) {
    //     $size = get_size(array('id' => $value));
    //     array_push($size_array, $size[0]);
    // }
    // $item['size'] = $size_array;
    
    return $item;
}
