<?php
require_once('models/config.php');
require_once('models/category.php');
require_once('models/color.php');
require_once('models/size.php');

function get_product($meta_query = null)
{
    $sql = queryBuilder('product', $meta_query);
    //câu query sau khi build: SELECT * FROM product WHERE featured = '1' OR featured = ',1' OR featured = ',1,' OR featured = '1,'
    $product = getData($sql, FETCH_ALL);
    $formatted_product = format_product($product);
    return $formatted_product;
}

// function get_one_product($id)
// {
//     $sql = "SELECT * FROM product where id = $id";
//     $product = getData($sql, FETCH_ONE);
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
