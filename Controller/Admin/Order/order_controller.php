<?php
    switch ($action) {
        case '':
            require_once('Model/Admin/Order/order_model.php');
            require_once('Views/Admin/order/order.php'); 
            break;
        case 'confirm':
            require_once('Model/Admin/Order/order_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'back':
            require_once('Model/Admin/Order/order_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        case 'destroy':
            require_once('Model/Admin/Order/order_model.php');
            header('location: ?controller='.$controller.'&redirect='.$redirect.'');
            break;
        default:
            # code...
            break;
    }
?>