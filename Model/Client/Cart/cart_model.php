<?php
// Hiển thị giỏ hàng theo SESSION
function view_cart() {
    $arr = array();
    $temp = array();
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY cat_id ASC");
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
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

                    $temp[$prd_id]['prd_size'] = $each['prd_size'];
                    // $temp[$prd_id]['amount'] = $value;
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
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart'][$prd_id])) {
            $_SESSION['cart'][$prd_id]++;
        } else {
            $_SESSION['cart'][$prd_id] = 1;
        }
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$prd_id] = 1;
    }
    
}

// Thêm sản phẩm vào giỏ hàng
// function add_cart() {
//     $prd_id = $_GET['prd_id'];
//     $quantity = $_POST['quantity']; // Lấy giá trị số lượng từ trường input
//     if(isset($_SESSION['cart'])){
//         if(isset($_SESSION['cart'][$prd_id])) {
//             $_SESSION['cart'][$prd_id] += $quantity; // Thêm số lượng mới vào số lượng hiện có
//         } else {
//             $_SESSION['cart'][$prd_id] = $quantity;
//         }
//     } else {
//         $_SESSION['cart'] = array();
//         $_SESSION['cart'][$prd_id] = $quantity;
//     }
// }

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