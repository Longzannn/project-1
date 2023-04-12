<?php
function index() {
    $prd_id = $_GET['prd_id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $sql = "SELECT * FROM product WHERE prd_id = '$prd_id'";
    $query = mysqli_query($connect, $sql);
    $sql_prd_1 = "SELECT * FROM product ORDER BY RAND ( ) LIMIT 1";
    $query_prd_1 = mysqli_query($connect, $sql_prd_1);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    $arr['productLimit1'] = $query_prd_1;
    return $arr;
}
switch($redirect) {
    case 'detail': $arr = index(); break;
}

?>