<?php
    // function index() {
    //     include_once('Config/connect.php');
    //     $sql = "SELECT * FROM user";
    //     $record = mysqli_query($connect, $sql);
    //     include_once('Config/close_connect.php');
    //     return $record;
    // }
    switch ($action) {
        case '':
            $record = index();
            break;
        default:
            # code...
            break;
    }
?>