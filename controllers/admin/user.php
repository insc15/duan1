<script>
    function confirmDelete(deleUrl){
        if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")){
        document.location = deleUrl;
        }
    }
</script>
<?php
require('./models/user.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = del_user($_POST['id']);
    echo $result;
}

include('./views/admin/user.php');
?>