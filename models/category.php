<?php 
    require_once('config.php');

    function get_category($meta_query = null, $order = null)
    {
        $sql = select_query_builder('category', $meta_query, $order);
        $categories = run_query($sql, FETCH_ALL);
        return $categories;
    }
?>