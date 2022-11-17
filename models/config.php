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