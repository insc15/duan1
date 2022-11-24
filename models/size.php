<?php 
    require_once('./models/config.php');

    function get_size($meta_query = null)
    {
        $sql = queryBuilder('size', $meta_query);
        $sizes = getData($sql, FETCH_ALL);
        return $sizes;
    }
?>