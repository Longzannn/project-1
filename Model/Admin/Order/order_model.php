<?php
    function index() {
        include_once('Config/connect.php');
        $sql_orders = "SELECT orders_detail.*, orders.*, customer.*, product_detail.*
        FROM orders_detail
        INNER JOIN orders ON orders_detail.orders_id = orders.orders_id
        INNER JOIN customer ON orders.cus_id = customer.cus_id
        INNER JOIN product_detail ON orders_detail.prd_detail_id = product_detail.prd_detail_id";
        $orders_detail= mysqli_query($connect, $sql_orders);

        $sql_product = "SELECT product_detail.*, product.*
        FROM product_detail
        INNER JOIN product ON product_detail.prd_id = product.prd_id";
        $product_detail= mysqli_query($connect, $sql_product);
        include_once('Config/close_connect.php');
        $record = array();
        $record['orders_detail'] = $orders_detail;
        $record['product_detail'] = $product_detail;
        return $record;
    }
    switch ($action) {
        case '':
            $record = index();
            break;
        default:
            # code...
            break;
    }
?>