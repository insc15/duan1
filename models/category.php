<?php 
    require_once('config.php');

    function get_category($meta_query = null, $order = null)
    {
        $sql = select_query_builder('category', $meta_query, $order);
        $categories = run_query($sql, FETCH_ALL);
        return $categories;
    }
    function getOne_category($id)
    {
        $sql = "SELECT * FROM category WHERE id = '$id'";
        $categories = run_query($sql, FETCH_ONE);
        return $categories;
    }
    function add_category($name){
        $query = "INSERT INTO category (name) VALUES ('$name')";
        $result = run_query($query,NOT_FETCH);
        return $result;
    }
    function edit_category($id,$name){
        $query = "UPDATE category SET name = '$name' WHERE id = '$id'";
        $result = run_query($query,NOT_FETCH);
        return $result;
    }
    function delete_category($id){
        $sql = "DELETE FROM category where id = '$id'";
        $delete = run_query($sql,NOT_FETCH);
        return $delete;
    }
?>