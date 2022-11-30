<?php 
    require_once('config.php');

    function get_color($meta_query = null, $order = null)
    {
        $sql = queryBuilder('color', $meta_query, $order);
        $colors = getData($sql, FETCH_ALL);
        return $colors;
    }
?>