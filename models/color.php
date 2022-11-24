<?php 
    require_once('./models/config.php');

    function get_color($meta_query = null)
    {
        $sql = queryBuilder('color', $meta_query);
        $colors = getData($sql, FETCH_ALL);
        return $colors;
    }
?>