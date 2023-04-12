<?php
function index() {
    $cat_id = $_GET['cat_id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $sql = "SELECT * FROM product WHERE cat_id = $cat_id ORDER BY RAND ( ) LIMIT 5";
    $query = mysqli_query($connect, $sql);
    $sqlAllProducts = "SELECT * FROM product P
        INNER JOIN  category C
        ON P.cat_id = C.cat_id
        WHERE C.cat_id = $cat_id
        ORDER BY P.prd_id ASC";
    $queryAllProducts = mysqli_query($connect, $sqlAllProducts);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    $arr['AllProduct'] = $queryAllProducts;
    return $arr;
}
switch($redirect) {
    case 'category': $arr = index(); break;
}

?>