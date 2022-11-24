<?php

// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

function getConnect()
{
    $connect = new PDO(
        'mysql:host=212.24.97.235;dbname=cara',
        'cara_dev',
        'aMMZ%3kZ'
    );
    return $connect;
}

// Nhận  tham số 1 là câu truy vấn, tham số thứ 2 là cách lấy dũ liệu
function getData($sql, $fetchType)
{
    $conn = getConnect();
    $statement = $conn->prepare($sql);
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

function queryBuilder($table, $meta_query){
    $params = ''; //đây là biến chuỗi chứa kết quả
    if(isset($meta_query)){
        $params = ' WHERE ';
        $query_array = [];//biến tạm thời chứa các tham số
        foreach ($meta_query as $key => $value) {//lặp qua các tham số 
            array_push($query_array, "$key = '$value' OR $key = ',$value' OR $key = ',$value,' OR $key = '$value,'");//đây là chuỗi để lọc chính xác, tránh trường hợp là lấy id = 1 thì sản phẩm id 123 nó vẫn sẽ lấy
        }

        $params .= join(' AND ',$query_array);//dựng câu query
    }
    $sql = "SELECT * FROM $table$params";
    return $sql;
}