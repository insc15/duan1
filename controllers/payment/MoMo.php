<?php
header('Content-type: text/html; charset=utf-8');

function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

global $endpoint;
global $partnerCode;
global $accessKey;
global $secretKey;
global $redirectUrl;
global $ipnUrl;

$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

$orderInfo = "Thanh toán qua MoMo";
$amount = "10000";
$orderId = time() ."";
$ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
$extraData = "";


function MoMo_init_payment($orderId, $orderInfo, $amount, $extraData = ""){
    $redirectUrl = get_home_url()."/payment?id=$orderId";
    $orderId = "CARA_PAYMENT".time();
    $endpoint = $GLOBALS['endpoint'];
    $partnerCode = $GLOBALS['partnerCode'];
    $accessKey = $GLOBALS['accessKey'];
    $secretKey = $GLOBALS['secretKey'];
    $ipnUrl = $GLOBALS['ipnUrl'];

    $requestId = time() . "";
    $requestType = "captureWallet";
    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json
    // var_dump($redirectUrl);

    //Just a example, please check more in there
    header('Location: ' . $jsonResult['payUrl']);
}
    // $orderId = $_POST["orderId"]; // Mã đơn hàng
    // $orderInfo = $_POST["orderInfo"];
    // $amount = $_POST["amount"];
    // $ipnUrl = $_POST["ipnUrl"];
    // $redirectUrl = $_POST["redirectUrl"];
    // $extraData = $_POST["extraData"];

    
// }
?>