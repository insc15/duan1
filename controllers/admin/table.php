<script>
    function confirmDelete(deleUrl){
        if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")){
        document.location = deleUrl;
    }
    }
</script>
<?php
require('./models/products.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = delete_product($_POST['id']);
    echo $result;
}

include('./views/admin/table.php');
?>