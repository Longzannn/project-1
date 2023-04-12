<?php
    switch ($action) {
        case '':
            require_once('Model/Admin/User/user_model.php');
            require_once('Views/Admin/user/user.php'); // hiển thị danh sách user
            break;
        case 'create':
            require_once('Views/Admin/user/add_user.php');
            break;
        case 'store':
            require_once('Model/Admin/User/user_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'edit':
            require_once('Model/Admin/User/user_model.php');
            require_once('Views/Admin/user/edit_user.php');
            break;
        case 'update':
            require_once('Model/Admin/User/user_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'destroy':
            require_once('Model/Admin/User/user_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        
        default:
            # code...
            break;
    }
?>