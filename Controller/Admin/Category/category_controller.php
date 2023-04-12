<?php
    switch ($action) {
        case '':
            require_once('Model/Admin/Category/category_model.php');
            require_once('Views/Admin/category/category.php'); // hiển thị danh sách user
            break;
        case 'create':
            require_once('Views/Admin/category/add_category.php');
            break;
        case 'store':
            require_once('Model/Admin/Category/category_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'edit':
            require_once('Model/Admin/Category/category_model.php');
            require_once('Views/Admin/category/edit_category.php');
            break;
        case 'update':
            require_once('Model/Admin/Category/category_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'destroy':
            require_once('Model/Admin/Category/category_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        
        default:
            # code...
            break;
    }
?>