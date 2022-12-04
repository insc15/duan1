<?php

// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

// function getConnect()
// {
    $connect = new PDO(
        'mysql:host=212.24.97.235;port=3306;charset=UTF8;dbname=cara',
        'cara_dev',
        'aMMZ%3kZ',
    );
    
    // return $connect;
// }

$GLOBALS['connection'] = $connect;

// define('CONNECTION', $connect);

// Nhận  tham số 1 là câu truy vấn, tham số thứ 2 là cách lấy dũ liệu
function run_query($sql, $fetchType)
{
    // $conn = getConnect();
    $statement = $GLOBALS['connection']->prepare($sql);
    $statement->execute();

    // Lấy dl theo kiểu gì $fetchType
    switch ($fetchType) {
        case FETCH_ALL:
            return $statement->fetchAll();
        case FETCH_ONE:
            return $statement->fetch();
        default:
            return true;
    }
}

function select_query_builder($table, $meta_query, $order){
    $params = ''; //đây là biến chuỗi chứa kết quả
    if(isset($meta_query)){
        $params = ' WHERE ';
        $query_array = [];//biến tạm thời chứa các tham số
        foreach ($meta_query as $key => $value) {//lặp qua các tham số 
            array_push($query_array, "($key LIKE '$value' OR $key LIKE '%,$value' OR $key LIKE '%,$value,%' OR $key LIKE '$value,%')");//đây là chuỗi để lọc chính xác, tránh trường hợp là lấy id = 1 thì sản phẩm id 123 nó vẫn sẽ lấy
        }

        $params .= join(' AND ',$query_array);//dựng câu query
    }
    if(isset($order)){
        $params .= " ORDER BY {$order['by']} {$order['sort']}";
    }

    $aaa = '';

    if($table === 'order'){
        $aaa = ",LPAD(id,10,'0') AS id";
    }

    $sql = "SELECT *$aaa FROM `$table`$params";
    return $sql;
}