<?php
    switch ($action) {
        case '':
            require_once('Model/Admin/Order/order_model.php');
            require_once('Views/Admin/oder/order.php'); 
            break;
        // case 'create':
        //     require_once('Views/Admin/add_order.php');
        //     break;
        // case 'store':
        //     require_once('Model/Order/order_model.php');
        //     header('location: ?controller='.$controller.'');
        //     break;
        // case 'edit':
        //     require_once('Model/Order/order_model.php');
        //     require_once('Views/Admin/edit_order.php');
        //     break;
        // case 'update':
        //     require_once('Model/Order/order_model.php');
        //     header('location: ?controller='.$controller.'');
        //     break;
        // case 'destroy':
        //     require_once('Model/Order/order_model.php');
        //     header('location: ?controller='.$controller.'');
        //     break;
        
        default:
            # code...
            break;
    }
?>