<?php
    function index() {
        include_once('Config/connect.php');
        $sql = "SELECT * FROM user";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    function store() {
        include_once('Config/connect.php');
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_phone = $_POST['user_phone'];
        $user_address = $_POST['user_address'];
        $user_role = $_POST['user_role'];
        $sql = "INSERT INTO user (user_name, user_email, user_password, user_phone, user_address, user_role) 
        VALUES ('$user_name', '$user_email', '$user_password', '$user_phone', '$user_address', '$user_role')";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    function edit() {
        $user_id = $_GET['user_id'];
        include_once('Config/connect.php');
        $sql = "SELECT * FROM user WHERE user_id = $user_id";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    function update() {
        include_once('Config/connect.php');
        $user_id = $_GET['user_id'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_phone = $_POST['user_phone'];
        $user_address = $_POST['user_address'];
        $user_role = $_POST['user_role'];
        $sql = "UPDATE user SET user_name = '$user_name', user_email = '$user_email', user_password = '$user_password', user_phone = '$user_phone', user_address = '$user_address', user_role = '$user_role' WHERE user_id = $user_id";
        mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
    }

    function destroy() {
        $user_id = $_GET['user_id'];
        include_once('Config/connect.php');
        $sql = "DELETE FROM user WHERE user_id = $user_id";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    switch ($action) {
        case '':
            $record = index();
            break;
        case 'store':
            store();
            break;
        case 'edit':
            $record = edit();
            break;
        case 'update':
            update(); 
            break;
        case 'destroy': 
            destroy(); 
            break;
        default:
            # code...
            break;
    }
?>