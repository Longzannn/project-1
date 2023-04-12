<?php
function checklogin() {
    include_once('Config/connect.php');
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM account WHERE user = '$user' AND pass = '$pass'";
    $query = mysqli_query($connect, $sql);
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    if($count == 0) {
        //login sai
        return 0;
    }else {
        //login đúng
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        foreach ($query as $item) {
            $_SESSION['role'] = $item['role'];
        }
        return 1;
    }
    include_once('Config/close_connect.php');
}
switch($action) {
    case 'checklogin' : $check = checklogin(); break;
}
?>