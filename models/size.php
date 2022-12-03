<?php 
    require_once('config.php');

    function get_size($meta_query = null, $order = null)
    {
        $sql = select_query_builder('size', $meta_query, $order);
        $sizes = run_query($sql, FETCH_ALL);
        return $sizes;
    }
?>