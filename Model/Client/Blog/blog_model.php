<?php
    function index() {
        include_once('Config/connect.php');
        $sql_cate = "SELECT * FROM category ORDER BY cat_id ASC";
        $query_cate = mysqli_query($connect, $sql_cate);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['category'] = $query_cate;
        return $arr;
    }

    switch($redirect) {
        case 'blog': $arr = index(); break;
    }
?>