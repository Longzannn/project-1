<?php
    switch ($action) {
        case '':
            require_once('Model/Admin/Product/product_model.php');
            require_once('Views/Admin/product/product.php'); // hiển thị danh sách product
            break;
        case 'create':
            require_once('Model/Admin/Product/product_model.php');
            require_once('Views/Admin/product/add_product.php');
            break;
        case 'store':
            require_once('Model/Admin/Product/product_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'edit':
            require_once('Model/Admin/Product/product_model.php');
            require_once('Views/Admin/product/edit_product.php');
            break;
        case 'update':
            require_once('Model/Admin/Product/product_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'destroy':
            require_once('Model/Admin/Product/product_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;    
        
        default:
            # code...
            break;
    }
?>