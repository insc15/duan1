<?php
    require('./models/products.php'); 
    require('./models/order.php'); 
    require('MoMo.php'); 

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        init_payment("captureWallet", $_POST['order_id'], "Thanh toán qua MoMo", $_POST['total']);
    }else{
        try {
            $order = get_order(array('id' => intval(str_replace('CARA','',intval(str_replace('CARA','',$_GET['id']))))));
            if(count($order) <= 0){ throw 0; }
            switch ($_GET['resultCode']) {
                case '0':
                    $amount = number_format($_GET['amount'], 0, '.', '.') . '&#8363;';
                    $html = "<div><p>Mã đơn hàng MoMo ID: {$_GET['orderId']}</p> <p>Số tiền thanh toán: {$amount}</p> <p>Mã giao dịch: {$_GET['transId']}</p> <p>Thông báo: {$_GET['message']}</p></div>";
                    update_order(str_replace('CARA','',$_GET['id']),array('status' => STATUS_PREPARING_GOODS, 'extra_info' => $html));
                    break;
                default:
                    update_order(str_replace('CARA','',$_GET['id']),array('status' => STATUS_WAITING_FOR_PAYMENT));
                    break;
            }
            header('location:'.get_home_url()."/checkout?order_id={$_GET['id']}");
        } catch (\Throwable $th) {
            header('location:'.get_home_url());
        }
    }
?>