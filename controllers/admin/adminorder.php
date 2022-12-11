<?php
require('./models/products.php');
require('./models/user.php');
require('./models/order.php');


include('./views/admin/adminorder.php');


function get_orders($meta_query = null, $order = null)
{
    $sql = select_query_builder('order', $meta_query, $order);
    $orders = run_query($sql, FETCH_ALL);

    $fmt = [];

    foreach ($orders as $key => $value) {
        $order_detail_sql = select_query_builder('order_detail', array('order_id' => intval($value['id'])), null);
        $order_detail = run_query($order_detail_sql, FETCH_ALL);
        $delivery_info_sql = select_query_builder('delivery_info', array('order_id' => intval($value['id'])), null);
        $delivery_info = run_query($delivery_info_sql, FETCH_ONE);

        $total = 0;


        foreach ($order_detail as $key => $order_detail_value) {
            $product_info = get_product(array('id' => $order_detail_value['product_id']));
            $order_detail[$key]['data'] = $product_info[0];
            $total += $order_detail_value['quantity'] * $product_info[0]['final_price'];
        }

        $fmt[] = array_merge(array(
            'product_data' => $order_detail,
            'delivery_info' => $delivery_info,
            'total' => $total,
            'formatted_total' => number_format($total, 0, '.', '.') . '&#8363;'
        ), $value);
    }

    return $fmt;
}