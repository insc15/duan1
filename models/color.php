<?php 
    require_once('config.php');

    function get_color($meta_query = null, $order = null)
    {
        $sql = select_query_builder('color', $meta_query, $order);
        $colors = run_query($sql, FETCH_ALL);
        return $colors;
    }
?>