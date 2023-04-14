<?php
function index() {
    $prd_id = $_GET['prd_id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    $size= mysqli_query($connect, "SELECT * FROM size");
    $product = mysqli_query($connect, "SELECT * FROM product WHERE prd_id = '$prd_id'");
    $product_detail = mysqli_query($connect, "SELECT product_detail.*, product.*, size.* 
    FROM product_detail 
    INNER JOIN product ON product_detail.prd_id = product.prd_id
    INNER JOIN size ON product_detail.size_id = size.size_id
    WHERE product.prd_id = '$prd_id'");
    $product_limit_1 = mysqli_query($connect, "SELECT * FROM product ORDER BY RAND ( ) LIMIT 1");
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['size'] = $size;
    $arr['product'] = $product;
    $arr['product_detail'] = $product_detail;
    $arr['product_limit_1'] = $product_limit_1;
    return $arr;
}
switch($redirect) {
    case 'detail': $arr = index(); break;
}

?>