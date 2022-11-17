<?php
require_once('models/config.php');
function get_list_products()
{
    $sql = "SELECT * FROM product";
    $product = getData($sql, FETCH_ALL);
    return $product;
}