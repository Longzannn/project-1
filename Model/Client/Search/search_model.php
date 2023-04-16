<?php
function index() {
    $by = $_POST['by'];
    include_once('Config/connect.php');
    $product = mysqli_query($connect, "SELECT * FROM product WHERE prd_name LIKE '%$by%' ");
    $category = mysqli_query($connect, "SELECT * FROM category ");
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['product'] = $product;
    $arr['category'] = $category;
    return $arr;
}
switch($redirect) {
    case 'search': $arr = index(); break;
}

?>