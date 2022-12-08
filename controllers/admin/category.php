<script>
    function confirmDelete(deleUrl){
        if (confirm("Bạn chắc chắn muốn xóa danh mục này?")){
        document.location = deleUrl;
        }
    }
</script>
<?php
require('./models/category.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = delete_category($_POST['id']);
    echo $result;
}
include('./views/admin/category.php');
?>