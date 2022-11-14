<?php
require_once ("database.php");
class m_product extends database
{
    public function read_product($id_cate) {
        if(isset($_GET['id_cate'])){
            $id_cate = $_GET['id_cate'];
        
        $sql = "select * from products where id_cate=?";
        $this->setQuery($sql);
        return $this->load_allRows(array($id_cate));
        }
    }
}