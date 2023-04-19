<?php
    function index() {
        include_once('Config/connect.php');
        $limit = 5; // Số bản ghi trên 1 trang
        $sqlTotalRecords = "SELECT count(prd_id) as total FROM product";
        $queryTotalRecords = mysqli_query(mysqli_connect('localhost', 'root', '', 'submit'), $sqlTotalRecords);
        $result = mysqli_fetch_assoc($queryTotalRecords);
        $total_records = $result['total']; // Tổng số bản ghi
        $total_page = ceil($total_records / $limit); // Tổng số trang 
        if(isset($_GET['current_page'])) {
            $current_page = $_GET['current_page']; // Lấy trang trên đường dẫn
        } else {
            $current_page = 1; // Trường hợp k có thông tin trang trên đường dẫn thì mặc định sẽ là trang 1
        }
        //Trường hợp bấm nút trở về trang trước
        if($current_page < 1) {
            $current_page = 1;
        }
        //Trường hợp bấm nút trang sau ở trang cuối cùng
        if($current_page > $total_page) {
            $current_page = $total_page;
        }
        //Tìm chỉ số start
        $start = ($current_page - 1) * $limit;

        $sql_cate = "SELECT * FROM category ORDER BY cat_id ASC";
        $query_cate = mysqli_query($connect, $sql_cate);
        $sql_prd = "SELECT * FROM product LIMIT $start, $limit";
        // $sql_prd = "SELECT * FROM product";
        $query_prd = mysqli_query($connect, $sql_prd);

        include_once('Config/close_connect.php');
        $arr = array();
        $arr['category'] = $query_cate;
        $arr['product'] = $query_prd;
        $arr['current_page'] = $current_page;
        $arr['total_page'] = $total_page;
        return $arr;
    }
    function create() {
        include_once('Config/connect.php');
        $category = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id DESC");
        $size = mysqli_query($connect, "SELECT * FROM size");
        include_once('Config/close_connect.php');
        $record = array();
        $record['category'] = $category;
        $record['size'] = $size;
        return $record;
    }
    function store() {
        include_once('Config/connect.php');
        $prd_name = $_POST['prd_name'];
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
        
        $sql = "INSERT INTO product (prd_name, prd_old_price, prd_current_price, prd_reviews, prd_warranty, prd_promotion, prd_img, cat_id, prd_status, prd_new, prd_featured, prd_details) 
        VALUES ('$prd_name', $prd_old_price, $prd_current_price, $prd_reviews, '$prd_warranty', '$prd_promotion', '$prd_img_str', $cat_id, $prd_status, $prd_new, $prd_featured, '$prd_details')";
        mysqli_query($connect, $sql);

        $prd_id = mysqli_insert_id($connect);
        $size = mysqli_query($connect, "SELECT * FROM size");
        while ($row = mysqli_fetch_assoc($size)) {
            $size_id = $row['size_id'];
            $size_number = $row['size_number'];
            $size_quantity = $_POST[$size_number];
            $product_detail = "INSERT INTO product_detail (prd_id, size_id, prd_detail_quantity) 
            VALUES ('$prd_id', '$size_id', '$size_quantity')";
        mysqli_query($connect, $product_detail);
        }

        include_once('Config/close_connect.php');
    }
    function edit() {
        $prd_id = $_GET['prd_id'];
        include_once('Config/connect.php');
        $product= mysqli_query($connect, "SELECT * FROM product WHERE prd_id = $prd_id");
        $category = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id DESC");
        $size = mysqli_query($connect, "SELECT * FROM size");
        $product_detail = mysqli_query($connect, "SELECT product_detail.*, product.*, size.* 
        FROM product_detail 
        INNER JOIN product ON product_detail.prd_id = product.prd_id
        INNER JOIN size ON product_detail.size_id = size.size_id
        WHERE product.prd_id = '$prd_id'");
        include_once('Config/close_connect.php');
        $record = array();
        $record['product'] = $product;
        $record['category'] = $category;
        $record['size'] = $size;
        $record['product_detail'] = $product_detail;
        return $record;
    }
    function update() {
        include_once('Config/connect.php');
        $prd_id = $_GET['prd_id'];
        $prd_name = $_POST["prd_name"];
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
        
        $sql = "UPDATE product SET prd_name = '$prd_name', prd_old_price = $prd_old_price, prd_current_price = $prd_current_price, prd_reviews = $prd_reviews, prd_warranty = '$prd_warranty', prd_promotion = '$prd_promotion', cat_id = $cat_id, prd_status = $prd_status, prd_new = $prd_new, prd_featured = $prd_featured, prd_details = '$prd_details', prd_img = '$prd_img_str' WHERE prd_id = $prd_id";
        mysqli_query($connect, $sql);

        $prd_id = $_GET['prd_id'];
        $size = $_POST['prd_detail_quantity'];
        
        foreach($size as $size_id => $quantity) {
            $sql_product_detail =  "UPDATE product_detail SET prd_detail_quantity = $quantity WHERE size_id = '$size_id' AND prd_id = '$prd_id' ";
            mysqli_query($connect, $sql_product_detail);
        }

        include_once('Config/close_connect.php');
    }
    function destroy() {
        $prd_id = $_GET['prd_id'];
        include_once('Config/connect.php');
        mysqli_query($connect, "DELETE FROM product_detail WHERE prd_id = '$prd_id'");
        mysqli_query($connect, "DELETE FROM product WHERE prd_id = '$prd_id'");
        include_once('Config/close_connect.php');
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