<?php
    function index() {
        include_once('Config/connect.php');
        $sql_cate = "SELECT * FROM category ORDER BY cat_id ASC";
        $query_cate = mysqli_query($connect, $sql_cate);
        
        // Sản phẩm chính
        $sql = "SELECT * FROM product ORDER BY RAND ( ) LIMIT 8";
        $query = mysqli_query($connect, $sql);

        // Sản phẩm nổi bật
        $sql_prd_featured = "SELECT * FROM product WHERE prd_featured = 1 ORDER BY RAND ( ) DESC LIMIT 10";
        $query_prd_featured = mysqli_query($connect, $sql_prd_featured);

        // Sản phẩm mới
        $sql_prd_new = "SELECT * FROM product WHERE prd_new = 1 ORDER BY RAND ( ) DESC LIMIT 10";
        $query_prd_new = mysqli_query($connect, $sql_prd_new);

        // Sản phẩm theo thương hiệu
        $sql_prd_nike = "SELECT * FROM product WHERE cat_id = 1 ORDER BY RAND ( ) LIMIT 8";
        $query_prd_nike = mysqli_query($connect, $sql_prd_nike);

        $sql_prd_adidas = "SELECT * FROM product WHERE cat_id = 2 ORDER BY RAND ( ) LIMIT 8";
        $query_prd_adidas = mysqli_query($connect, $sql_prd_adidas);

        $sql_prd_lacoste = "SELECT * FROM product WHERE cat_id = 3 ORDER BY RAND ( ) LIMIT 8";
        $query_prd_lacoste = mysqli_query($connect, $sql_prd_lacoste);

        $sql_prd_puma = "SELECT * FROM product WHERE cat_id = 4 ORDER BY RAND ( ) LIMIT 8";
        $query_prd_puma = mysqli_query($connect, $sql_prd_puma);

        include_once('Config/close_connect.php');
        $arr = array();
        $arr['category'] = $query_cate;
        $arr['product'] = $query;
        $arr['prd_featured'] = $query_prd_featured;
        $arr['prd_new'] = $query_prd_new;

        $arr['prd_nike'] = $query_prd_nike;
        $arr['prd_adidas'] = $query_prd_adidas;
        $arr['prd_lacoste'] = $query_prd_lacoste;
        $arr['prd_puma'] = $query_prd_puma;
        return $arr;
    }

    switch($redirect) {
        case '': $arr = index(); break;
    }
?>