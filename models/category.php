<?php 
    require_once('./models/config.php');

    function get_category($meta_query = null, $order = null)
    {
        $sql = queryBuilder('category', $meta_query, $order);
        $categories = getData($sql, FETCH_ALL);
        return $categories;
    }
?>