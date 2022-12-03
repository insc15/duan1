<?php 
    require_once('config.php');

    define('STATUS_INIT', 0); //chờ người dùng xác nhận đơn hàng
    define('STATUS_PREPARING_GOODS', 1); //chờ người bán chuẩn bị đơn hàng
    define('STATUS_BEING_TRANSPORTED', 2); //chờ người bán vận chuyển hàng tới người dùng
    define('STATUS_WAITING_FOR_PAYMENT', 3); //chờ người bán xác nhận đã thanh toán
    define('STATUS_COMPLETED', 4); //thành công

    function encode_product_data($cart_data){
        $new_cart_data = array(
            'total' => $cart_data['total'],
            'formatted_total' => number_format($cart_data['total'], 0, '.', '.') . '&#8363;'
        );
        foreach($cart_data['items'] as $key => $value) {
            $new_cart_data['item'][] = array(
                'id' => $value['id'],
                'name' => $value['data']['name'],
                'color' => array(
                    'id'=> $value['data']['color']['id'],
                    'name'=> $value['data']['color']['name'],
                    'hex'=> $value['data']['color']['hex']
                ),
                'size' => array(
                    'id'=> $value['data']['size']['id'],
                    'name'=> $value['data']['size']['name'],
                ),
                'quantity' => $value['quantity'],
                'featured_image' => $value['data']['featured_image'],
                'price' => $value['data']['price'],
                'discount' => $value['data']['discount'],
                'final_price' => $value['data']['final_price'],
                'formatted_price' => $value['data']['formatted_price'],
                'formatted_discount' => $value['data']['formatted_discount'],
                'formatted_final_price' => $value['data']['formatted_final_price'],
            );
        }
        $product_data = urlencode(json_encode($new_cart_data));
        return $product_data;
    }

    function create_order($cart_data, $customer_id){
        $product_data = encode_product_data($cart_data);
        $sql = "INSERT INTO `order` (customer_id,product_data) VALUES ($customer_id, '$product_data')";
        $stmt = $GLOBALS['connection']->prepare($sql);
        $stmt->execute();
        $current_order_id = $GLOBALS['connection']->lastInsertId();
        $sql = "SELECT LPAD(id,10,'0') AS id from `order` WHERE id=$current_order_id";
        $order_id = "CARA".run_query($sql, FETCH_ONE)[0];

        return $order_id;
    }

    function update_order($order_id, $data){
        $order_id = intval(str_replace('CARA','',$order_id));
        $value_data = [];
        foreach ($data as $key => $value) {
            $value_data[] = "$key='$value'";
        }
        $sql = "UPDATE `order` SET ".join(',',$value_data)." WHERE id=$order_id";
        return run_query($sql, NOT_FETCH);
    }

    function get_order($meta_query, $order = null){
        $sql = select_query_builder('order', $meta_query, $order);
        $orders = run_query($sql, FETCH_ALL);
        return $orders;
    }
?>