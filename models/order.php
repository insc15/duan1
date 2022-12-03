<?php 
    require_once('config.php');

    define('INIT')

    function create_order($cart_data, $customer_id){
        $new_cart_data = array(
            'total' => $cart_data['total']
        );
        foreach($cart_data['items'] as $key => $value) {
            $new_cart_data['item'][] = array(
                'id' => $value['id'],
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
                'price' => $value['data']['price'],
                'discount' => $value['data']['discount'],
                'final_price' => $value['data']['final_price'],
                'formatted_price' => $value['data']['formatted_price'],
                'formatted_discount' => $value['data']['formatted_discount'],
                'formatted_final_price' => $value['data']['formatted_final_price'],
            );
        }

        $product_data = json_encode($new_cart_data);
        $sql = "INSERT INTO order (customer_id,product_data) VALUES ($customer_id, '$product_data')";

    }
?>