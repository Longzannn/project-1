<?php
function checklogin() {
    include_once('Config/connect.php');
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user = mysqli_query($connect, "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'");
    $count = mysqli_num_rows($user);
    if($count == 0) {
        //login sai
        return 0;
    }else {
        //login đúng
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_password'] = $user_password;
        foreach ($user as $item) {
            $_SESSION['user_role'] = $item['user_role'];
        }
        return 1;
    }
    include_once('Config/close_connect.php');
}
switch($action) {
    case 'checklogin' : $check = checklogin(); break;
}
?>