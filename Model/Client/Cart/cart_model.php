<?php
// Hiển thị giỏ hàng theo SESSION
function view_cart() {
    $arr = array();
    $temp = array();
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            // Kiểm tra nếu có giá trị size được lưu trong session
            if(isset($_SESSION['cart'][$prd_id]['size'])) {
                $size = $_SESSION['cart'][$prd_id]['size'];
                $temp[$prd_id]['prd_size'] = $size;
            }

            // Lấy số lượng sản phẩm từ SESSION
            $quantity = $_SESSION['cart'][$prd_id][$size];
            $temp[$prd_id]['prd_quantity'] = $quantity;

            // Tìm bản ghi cần thêm vào giỏ hàng
            $sqlTemp = "SELECT * FROM product WHERE prd_id = '$prd_id'";
            $resultTemp = mysqli_query($connect, $sqlTemp);
            if(isset($resultTemp)){
                // Lặp mảng để lấy ra chi tiết từng bản ghi
                foreach ($resultTemp as $each){
                    $temp[$prd_id]['prd_name'] = $each['prd_name'];
                    $temp[$prd_id]['prd_current_price'] = $each['prd_current_price'];

                    $list_img = explode(',',$each['prd_img']);
                    $temp[$prd_id]['prd_img'] = $list_img[0];
                }
            }
        }
    }
    // 
    include_once('Config/close_connect.php');
    $arr['product'] = $temp;
    $arr['category'] = $cate;
    return $arr;
}

// Thêm sản phẩm vào giỏ hàng
function add_cart() {
    $prd_id = $_GET['prd_id'];
    $size = $_GET['size'];
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart'][$prd_id][$size])) {
            $_SESSION['cart'][$prd_id][$size]+= 1;
            $prd_quantity = $_SESSION['cart'][$prd_id][$size];
        } else {
            $_SESSION['cart'][$prd_id][$size] = 1;
            $prd_quantity = 1;
        }
        // Lấy số lượng sản phẩm từ SESSION và cập nhật số lượng sản phẩm tăng lên
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$prd_id][$size] = 1;
        $prd_quantity = 1;
    }
    // Lưu size vào session
    $_SESSION['cart'][$prd_id]['size'] = $size;

    // Trả về số lượng sản phẩm mới để hiển thị trong giỏ hàng
    return $prd_quantity;
}

// Cập nhật giỏ hàng
function update_cart() {
    $quantity = $_POST['qtt']; // Lấy số lượng sản phẩm được gửi từ giỏ hàng lên
    foreach($quantity as $prd_id => $qtt) {
        $_SESSION['cart'][$prd_id] = $qtt;
    }
}
// Xóa giỏ hàng
function del_cart() {
    $prd_id = $_GET["prd_id"];
    unset($_SESSION["cart"][$prd_id]);
    echo count($_SESSION["cart"]);
    // die('abc');
    // die;
    if(count($_SESSION["cart"]) == 0){
        unset($_SESSION["cart"]);
    }
}
// Trả kết quả về Controller
switch($action) {
    case '': $arr = view_cart(); break;
    case 'add': add_cart(); break;
    case 'update': update_cart(); break;
    case 'del': del_cart(); break;

}

?>