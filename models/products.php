<?php
require_once('models/config.php');

function get_list_products($meta_query = null)
{
    $sql = "SELECT * FROM product";
    $product = getData($sql, FETCH_ALL);
    $formatted_product = format_product($product);
    return $formatted_product;
}

// chỗ này để format các trường thông tin
function format_product($product){
    switch (gettype($product)) {
        case 'integer':
            $product = formatter($product);
            break;
        case 'array':
            $product = array_map(function($item){
                return formatter($item);
            },$product);
        default:
            # code...
            break;
    }

    return $product;
}

function formatter($item){
    $item['featured'] = boolval($item['featured']);
    return $item;
}