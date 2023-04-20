<?php
    switch ($action) {
        case '':
            require_once('Model/Admin/Order/order_model.php');
            require_once('Views/Admin/order/order.php'); 
            break;
        // case 'create':
        //     require_once('Views/Admin/add_order.php');
        //     break;
        case 'confirm':
            require_once('Model/Admin/Order/order_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        // case 'edit':
        //     require_once('Model/Order/order_model.php');
        //     require_once('Views/Admin/edit_order.php');
        //     break;
        // case 'update':
        //     require_once('Model/Order/order_model.php');
        //     header('location: ?controller='.$controller.'');
        //     break;
        case 'destroy':
            require_once('Model/Admin/Order/order_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        
        default:
            # code...
            break;
    }
?>