<?php
// Hiển thị giỏ hàng theo SESSION
function view_cart() {
    $arr = array();
    $temp = array();
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            foreach($value as $size_id => $quantity) {
                // Tìm bản ghi cần thêm vào giỏ hàng
                $sqlTemp = "SELECT product_detail.*, product.*, size.* 
                FROM product_detail
                INNER JOIN product ON product.prd_id = product_detail.prd_id
                INNER JOIN size ON product_detail.size_id = size.size_id
                WHERE product.prd_id = '$prd_id'AND product_detail.size_id = '$size_id' ";
                $resultTemp = mysqli_query($connect, $sqlTemp);
                if(isset($resultTemp)){
                    // Lặp mảng để lấy ra chi tiết từng bản ghi
                    foreach ($resultTemp as $each){
                        // Kiểm tra nếu sản phẩm đã tồn tại trong mảng
                        if(isset($temp[$prd_id][$size_id])) {
                            // Nếu sản phẩm có cùng id và cùng size với sản phẩm trước đó, cộng thêm số lượng vào giá trị hiện tại
                            $temp[$prd_id][$size_id]['prd_quantity'] += $quantity;
                        } else {
                            $temp[$prd_id][$size_id]['prd_name'] = $each['prd_name'];
                            $temp[$prd_id][$size_id]['size_number'] = $each['size_number'];
                            $temp[$prd_id][$size_id]['prd_current_price'] = $each['prd_current_price'];
                            $list_img = explode(',',$each['prd_img']);
                            $temp[$prd_id][$size_id]['prd_detail_quantity'] = $each['prd_detail_quantity'];
                            $temp[$prd_id][$size_id]['prd_img'] = $list_img[0];
                            $temp[$prd_id][$size_id]['prd_quantity'] = $quantity;
                        }
                    }
                }
            }
        }
    }

    // $total_price = calculate_total_price();

    include_once('Config/close_connect.php');
    $arr['product'] = $temp;
    $arr['category'] = $cate;
    return $arr;
}



// Thêm sản phẩm vào giỏ hàng
function add_cart() {
    $prd_id = $_GET['prd_id'];

    if(isset($_GET['size'])) {
        $size = (int)$_GET['size'];

        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        $product_detail_query = mysqli_query($connect, "SELECT * FROM product_detail
        JOIN product ON product_detail.prd_id = product.prd_id
        JOIN size ON product_detail.size_id = size.size_id
        WHERE product_detail.prd_id = '$prd_id' AND size.size_number = '$size'");
        $product_detail = mysqli_fetch_assoc($product_detail_query);
        mysqli_close($connect);
    }

    $size_id = $product_detail['size_id'];

    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart'][$prd_id][$size_id])) {
            $_SESSION['cart'][$prd_id][$size_id]+= 1;
            $prd_quantity = $_SESSION['cart'][$prd_id][$size_id];
        } else {
            $_SESSION['cart'][$prd_id][$size_id] = 1;
            $prd_quantity = 1;
        }
        // Lấy số lượng sản phẩm từ SESSION và cập nhật số lượng sản phẩm tăng lên
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$prd_id][$size_id] = 1;
        $prd_quantity = 1;
    }
    // Lưu size vào session
    $_SESSION['cart'][$prd_id]['size_id'] = $size_id;

    // Trả về số lượng sản phẩm mới để hiển thị trong giỏ hàng
    return $prd_quantity;
}

// Xóa giỏ hàng
function del_cart() {
    $prd_id = $_GET["prd_id"];

    if(isset($_GET['size'])) {
        $size = (int)$_GET['size'];

        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        $product_detail_query = mysqli_query($connect, "SELECT * FROM product_detail
        JOIN product ON product_detail.prd_id = product.prd_id
        JOIN size ON product_detail.size_id = size.size_id
        WHERE product_detail.prd_id = '$prd_id' AND size.size_number = '$size'");
        $product_detail = mysqli_fetch_assoc($product_detail_query);
        mysqli_close($connect);
    }
    $size_id = $product_detail['size_id'];

    if(isset($_SESSION['cart'][$prd_id][$size_id])) {
        unset($_SESSION['cart'][$prd_id][$size_id]);
        if(count($_SESSION["cart"][$prd_id]) == 0){
            unset($_SESSION["cart"][$prd_id]);
        }
    }
    
    if(count($_SESSION["cart"]) == 0){
        unset($_SESSION["cart"]);
    }    
}

// Cập nhật giỏ hàng
function update_cart() {
    $quantity = $_POST['quantity'];
    foreach($quantity as $prd_id => $quantity_by_size) {
        if(isset($_SESSION['cart'][$prd_id])) {
            foreach($quantity_by_size as $size_id => $quantity) {
                if(isset($_SESSION['cart'][$prd_id][$size_id])) {
                    $_SESSION['cart'][$prd_id][$size_id] = $quantity;
                } else {
                    $_SESSION['cart'][$prd_id][$size_id] = $quantity;
                }
            }
        } else {
            $_SESSION['cart'][$prd_id] = $quantity_by_size;
        }
    }
}

function calculate_total_price() {
    $total_price = 0;
    if(isset($_SESSION['cart'])) {
        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        foreach($_SESSION['cart'] as $prd_id => $value) {
            foreach($value as $size_id => $quantity) {
                $sqlTemp = "SELECT product_detail.*, product.*, size.* 
                FROM product_detail
                INNER JOIN product ON product.prd_id = product_detail.prd_id
                INNER JOIN size ON product_detail.size_id = size.size_id
                WHERE product.prd_id = '$prd_id'AND product_detail.size_id = '$size_id' ";
                $resultTemp = mysqli_query($connect, $sqlTemp);
                if(isset($resultTemp)){
                    foreach ($resultTemp as $each){
                        $total_price += $each['prd_current_price'] * $quantity;
                    }
                }
            }
        }
        include_once('Config/close_connect.php');
    }
    return $total_price;
}

function checkaccess() {
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_address = $_POST['customer_address'];
    $price = $_POST['price'];
    date_default_timezone_set('Asia/Bangkok');
    $booking_date = date('Y-m-d H:i:s');

    require_once('Config/connect.php');

    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];
    $user = mysqli_query($connect, "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'");
    foreach ($user as $item) {
        $_SESSION['user_id'] = $item['user_id'];
    }
    $user_id = $_SESSION['user_id'];
    

    $customer = mysqli_query($connect, "INSERT INTO customer(cus_name, cus_phone, cus_address) VALUES ('$customer_name', '$customer_phone', '$customer_address')");
    $customer_id = $connect->insert_id;
    $orders = mysqli_query($connect, "INSERT INTO orders(cus_id, total, booking_date, orders_status) VALUES ($customer_id, '$price', '$booking_date', 0)");
    $orders_id = $connect->insert_id;
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            foreach($value as $size_id => $quantity) {
                // Tìm bản ghi cần thêm vào giỏ hàng
                $sqlTemp = "SELECT product_detail.*, product.*, size.* 
                FROM product_detail
                INNER JOIN product ON product.prd_id = product_detail.prd_id
                INNER JOIN size ON product_detail.size_id = size.size_id
                WHERE product.prd_id = '$prd_id'AND product_detail.size_id = '$size_id' ";
                $resultTemp = mysqli_query($connect, $sqlTemp);
                // Lặp mảng để lấy ra chi tiết từng bản ghi
                foreach ($resultTemp as $each){
                    $prd_detail_id = $each['prd_detail_id'];
                    $prd_detail_quantity = $quantity;
                    $orders_detail = mysqli_query($connect, "INSERT INTO orders_detail(orders_id, prd_detail_id, user_id, price, quantity) VALUES ($orders_id, $prd_detail_id, $user_id, '$price', $prd_detail_quantity)");
                }
            }
        }
    }

    require_once('Config/close_connect.php');
    unset($_SESSION['cart']);
}


// Trả kết quả về Controller
switch($action) {
    case '': $arr = view_cart(); break;
    case 'add': add_cart(); break;
    case 'update': update_cart(); break;
    case 'del': del_cart(); break;
    case 'checkaccess': checkaccess(); break;

}

?>