<?php
$action = '';
if(isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch($action) {
    case 'login' : 
        include_once('Model/Login/login_model.php'); 
        include_once('Views/Client/login/login.php'); 
        break;
    case 'checklogin' :
        require_once('Model/Login/login_model.php');
        if(isset($check)) {
            if($_SESSION['user_role'] === 'admin') {
                header('location: index.php?controller=admin');
            } else {
                header('location: index.php?');
            }
        } else{
            include_once('Views/Client/login/login.php');
        }
        ; break;
    case 'logout' : 
        session_destroy();
        header('location: index.php?controller=admin');
        ; break;
}
?>