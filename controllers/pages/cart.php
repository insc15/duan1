<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $postData = json_decode(file_get_contents('php://input'), true);//vì $_POST chỉ nhận các giá trị nhận từ form nên dữ liệu từ js gửi lên qua fetch sẽ dùng cái này
        $_SESSION['cart'] = $postData['data'];  
    }

    include('./views/partials/header.php');
    include('./views/pages/cart.php'); 
    include('./views/partials/footer.php');
?>