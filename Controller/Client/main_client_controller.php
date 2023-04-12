<?php
    $redirect = $_GET['redirect'] ?? '';
    if($redirect == '') {
        require_once('Model/Client/index_model.php');
        require_once('Views/Client/home/home.php');
    } else {
        switch($redirect) {
            case 'detail': 
                require_once('Model/Client/Detail/detail_model.php');
                // require_once('Views/Client/home/home.php');
                require_once('Views/Client/detail/detail.php');
                ; break;
            case 'category': 
                require_once('Model/Client/Category/category_model.php');
                // require_once('Views/Client/home/home.php');
                require_once('Views/Client/category/category.php');
                ; break;
            case 'cart': 
                require_once('Controller/Client/Cart/cart_controller.php');
                require_once('Views/Client/cart/cart.php');
                ; break;
            case 'blog': 
                require_once('Model/Client/Blog/blog_model.php');
                require_once('Views/Client/blog/blog.php');
                ; break;
            case 'contact': 
                require_once('Model/Client/Contact/contact_model.php');
                require_once('Views/Client/contact/contact.php');
                ; break;      
            case 'about': 
                require_once('Model/Client/About/about_model.php');
                require_once('Views/Client/about/about.php');
                ; break;   
        }
    }
?>