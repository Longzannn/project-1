<?php
    function index() {
        include_once('Config/connect.php');
        $sql_cate = "SELECT * FROM category ORDER BY cat_id ASC";
        $query_cate = mysqli_query($connect, $sql_cate);
        $sql_prd = "SELECT * FROM product";
        $query_prd = mysqli_query($connect, $sql_prd);
        include_once('Config/close_connect.php');
        $arr = array();
        $arr['category'] = $query_cate;
        $arr['product'] = $query_prd;
        return $arr;
    }
    function create() {
        include_once('Config/connect.php');
        $category = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id DESC");
        include_once('Config/close_connect.php');
        $record = array();
        $record['category'] = $category;
        return $record;
    }
    function store() {
        include_once('Config/connect.php');
        $prd_name = $_POST['prd_name'];
        $prd_size = $_POST['prd_size'];
        $prd_old_price = $_POST['prd_old_price'];
        $prd_current_price = $_POST['prd_current_price'];
        $prd_reviews = $_POST['prd_reviews'];
        $prd_warranty = $_POST['prd_warranty'];
        $prd_promotion = $_POST['prd_promotion'];
        $cat_id = $_POST['cat_id'];
        $prd_status = $_POST['prd_status'];
        $prd_new = isset($_POST['prd_new']) ? 1 : 0;
        $prd_featured = isset($_POST['prd_featured']) ? 1 : 0;
        $prd_details = $_POST['prd_details'];
        $prd_imgs = array();
        foreach ($_FILES['prd_img']['tmp_name'] as $key => $tmp_name) {
            $img_name = $_FILES['prd_img']['name'][$key];
            $img_tmp = $_FILES['prd_img']['tmp_name'][$key];
            move_uploaded_file($img_tmp, "Public/Images/".$img_name);
            $prd_imgs[] = $img_name;
        }
        // Chuyển đổi mảng đường dẫn ảnh thành chuỗi
        $prd_img_str = implode(',', $prd_imgs);
        
        $sql = "INSERT INTO product (prd_name, prd_size, prd_old_price, prd_current_price, prd_reviews, prd_warranty, prd_promotion, prd_img, cat_id, prd_status, prd_new, prd_featured, prd_details) 
        VALUES ('$prd_name', '$prd_size', $prd_old_price, $prd_current_price, $prd_reviews, '$prd_warranty', '$prd_promotion', '$prd_img_str', $cat_id, $prd_status, $prd_new, $prd_featured, '$prd_details')";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    function edit() {
        $prd_id = $_GET['prd_id'];
        include_once('Config/connect.php');
        $product= mysqli_query($connect, "SELECT * FROM product WHERE prd_id = $prd_id");
        $category = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id DESC");
        include_once('Config/close_connect.php');
        $record = array();
        $record['product'] = $product;
        $record['category'] = $category;
        return $record;
    }
    function update() {
        include_once('Config/connect.php');
        $prd_id = $_GET['prd_id'];
        $prd_name = $_POST["prd_name"];
        $prd_size = $_POST["prd_size"];
        $prd_old_price = $_POST["prd_old_price"];
        $prd_current_price = $_POST["prd_current_price"];
        $prd_reviews = $_POST["prd_reviews"];
        $prd_warranty = $_POST["prd_warranty"];
        $prd_promotion = $_POST["prd_promotion"];
        $cat_id = $_POST["cat_id"];
        $prd_status = $_POST["prd_status"];
        $prd_new = isset($_POST["prd_new"]) ? 1 : 0;
        $prd_featured = isset($_POST["prd_featured"]) ? 1 : 0;
        $prd_details = $_POST["prd_details"];

        $prd_imgs = array();
        $is_updated = false; 
        foreach ($_FILES['prd_img']['tmp_name'] as $key => $tmp_name) {
            $img_name = $_FILES['prd_img']['name'][$key];
            $img_tmp = $_FILES['prd_img']['tmp_name'][$key];
            if ($img_name != '') {
                move_uploaded_file($img_tmp, "Public/Images/".$img_name);
                $prd_imgs[] = $img_name;
                $is_updated = true; // Gán giá trị của biến is_updated là true nếu có ảnh mới được upload
            }
        }

        $prd_img_str = '';
        if (!$is_updated) { // Nếu không có cập nhật ảnh mới
            $sql_img = "SELECT prd_img FROM product WHERE prd_id = $prd_id";
            $result_img = mysqli_query($connect, $sql_img);
            $row_img = mysqli_fetch_assoc($result_img);
            $prd_img_str = $row_img['prd_img']; // Lấy lại đường dẫn ảnh cũ từ database
        } else { // Nếu có cập nhật ảnh mới
            // Chuyển đổi mảng đường dẫn ảnh thành chuỗi
            $prd_img_str = implode(',', $prd_imgs);
        }        
        
        $sql = "UPDATE product SET prd_name = '$prd_name', prd_size = '$prd_size', prd_old_price = $prd_old_price, prd_current_price = $prd_current_price, prd_reviews = $prd_reviews, prd_warranty = '$prd_warranty', prd_promotion = '$prd_promotion', cat_id = $cat_id, prd_status = $prd_status, prd_new = $prd_new, prd_featured = $prd_featured, prd_details = '$prd_details', prd_img = '$prd_img_str' WHERE prd_id = $prd_id";
        mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
    }
    function destroy() {
        $prd_id = $_GET['prd_id'];
        include_once('Config/connect.php');
        $sql = "DELETE FROM product WHERE prd_id = $prd_id";
        $record = mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
        return $record;
    }
    switch ($action) {
        case '':
            $arr = index();
            break;
        case 'create':
            $record = create();
            break;
        case 'store':
            store();
            break;
        case 'edit':
            $record = edit();
            break;
        case 'update': 
            update(); 
            break;
        case 'destroy': 
            destroy(); 
            break;
        default:
            # code...
            break;
    }
?>