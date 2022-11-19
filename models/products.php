<?php
require_once('models/config.php');

function get_list_products($meta_query = null)
{
    $sql = "SELECT * FROM product";
    $product = getData($sql, FETCH_ALL);
    $formatted_product = format_product($product);
    return $formatted_product;
}
//lấy sp nổi bật
function get_list_prfeatured($meta_query = null)
{
    $sql = "SELECT * FROM product WHERE featured";
    $product = getData($sql, FETCH_ALL);
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
    switch (gettype($product)) {
        case 'integer':
            $product = formatter($product);
            break;
        case 'array':
            $product = array_map(function ($item) {
                return formatter($item);
            }, $product);
        default:
            # code...
            break;
    }

    return $product;
}

function formatter($item)
{
    $item['featured'] = boolval($item['featured']);
    $item['formatted_price'] = number_format($item['price'], 0, '.', '.') . '&#8363;';
    return $item;
}