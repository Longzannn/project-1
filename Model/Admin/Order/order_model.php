<?php
    function index() {
        include_once('Config/connect.php');
        $sql = "SELECT orders_detail.*, orders.*, customer.*
        FROM orders_detail
        INNER JOIN orders ON orders_detail.orders_id = orders.orders_id
        INNER JOIN customer ON orders.cus_id = customer.cus_id";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
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