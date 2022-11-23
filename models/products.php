<?php
require_once('models/config.php');

function get_product($meta_query = null)
{
    $params = ''; //đây là biến chuỗi chứa kết quả
    if(isset($meta_query)){
        $params = ' WHERE ';
        $query_array = [];//biến tạm thời chứa các tham số
        foreach ($meta_query as $key => $value) {//lặp qua các tham số 
            array_push($query_array, "$key = '$value' OR $key = ',$value' OR $key = ',$value,' OR $key = '$value,'");//đây là chuỗi để lọc chính xác, tránh trường hợp là lấy id = 1 thì sản phẩm id 123 nó vẫn sẽ lấy
        }

        $params .= join(' AND ',$query_array);//dựng câu query
    }
    $sql = "SELECT * FROM product$params";
    //câu query sau khi build: SELECT * FROM product WHERE featured = '1' OR featured = ',1' OR featured = ',1,' OR featured = '1,'
    $product = getData($sql, FETCH_ALL);
    $formatted_product = format_product($product);
    return $formatted_product;
}
function get_one_product($id)
{
    $sql = "SELECT * FROM product where id = $id";
    $product = getData($sql, FETCH_ONE);
    $formatted_product = format_product($product);
    return $formatted_product;
}
// kt hàng mới
function get_list_prnew($day)
{
    // đổi lấy giây ngày hiện tại
    $date_second =  time();
    // đổi lấy giây ngày tạo sản phẩm
    $sc_product = strtotime($day);
    return strftime('%d', $date_second - $sc_product);
}

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
    $item['formatted_price'] = number_format($item['price'], 0, '.', '.') . '&#8363;';
    $item['formatted_discount'] = number_format($item['discount'], 0, '.', '.') . '&#8363;';
    $item['list_image'] = explode(',', $item['list_image']);
    return $item;
}
