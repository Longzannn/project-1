<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Tìm Kiếm</title>
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/reset.css">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/root.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
    <link rel="stylesheet" href="Views/Client/search/search.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="site-wrapper">
        <header class="header">
            <div class="header-wrapper">
                <div class="header-navbar">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img src="https://myshoes.vn/image/cache/catalog/logo/logo_ms-565x195.png" alt=""
                                class="logo-img">
                        </a>
                    </div>
                    <form class="search-wrapper" action="?redirect=search" method="POST">
                        <input type="text" name="by" placeholder="Tìm kiếm sản phẩm...">
                        <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="classic-wrapper">
                        <div class="accounts">
                            <?php
                                if(!isset($_SESSION['user_email'])) {
                                    echo "
                                    <a href='' class='accounts-link'>
                                        <i class='fa-solid fa-user'></i>
                                        <div class='links-text'>
                                            <span>Tài khoản</span>
                                            <span>Đăng nhập/ Đăng ký</span>
                                        </div>
                                    </a>
                                    <div class='dropdown-menu-accounts'>
                                        <span class='login'><i class='fa-solid fa-arrow-right-to-bracket'></i>Đăng nhập</span>
                                        <span class='logout'><i class='fa-sharp fa-solid fa-arrow-right-from-bracket'></i>Đăng
                                            ký</span>
                                    </div>
                                    ";
                                } else {
                                    echo "
                                    <a href='' class='accounts-link'>
                                        <i class='fa-solid fa-user'></i>
                                        <div class='links-text'>
                                            <span>Tài khoản</span>
                                            <span>Chỉnh sửa / Thoát</span>
                                        </div>
                                    </a>
                                    <div class='dropdown-menu-accounts logined'>
                                        <span class='login'><i class='fa-solid fa-user'></i>Tài khoản của tôi</span>
                                        <span class='logout'><a href='?controller=admin'>&diams; Trang quản trị</a></span>
                                        <span class='logout'><i class='fa-solid fa-cart-shopping'></i>Đơn hàng của tôi</span>
                                        <span class='exit'><i class='fa-solid fa-arrow-right-to-bracket'></i><a href='index.php?controller=login&action=logout'>Thoát</a></span>
                                    </div>
                                    ";
                                }
                            ?>
                        </div>
                        <div class="cart">
                            <a href="?redirect=cart" class="cart-link hvr-icon-grow">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <?php
                                if(isset($_SESSION['cart'])) {
                                    echo '<span class="quantity">!</span>';
                                } else {
                                    echo '<div class="cart-empty">
                                    <span>Không có sản phẩm trong giỏ hàng!</span>
                                </div>';
                                }
                            ?>

                            <!-- <div class="cart-products">
                                <div class="list-products-cart">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg" alt="">
                                                </td>
                                                <td class="td-name hvr-grow">
                                                    <a>Giày Lacoste PowerCourt 1121 Nam - Đen</a>
                                                    <p>Chọn size nam: 39.5</p>
                                                </td>
                                                <td class="td-quantity">x1</td>
                                                <td class="td-total">2.690.000₫</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-totals">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td scope="row" style="width: 70%;">Thành tiền</td>
                                                <td>11.150.000₫</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="width: 70%;">Tổng cộng</td>
                                                <td>11.150.000₫</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="cart-buttons">
                                        <button type="button" class="btn btn-light"><a>XEM GIỎ HÀNG</a></button>
                                        <button type="button" class="btn btn-danger"><a>THANH TOÁN</a></button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-default">
                        <ul class="main-menu">
                            <?php
                                include_once('Views/Client/menu/menu.php');
                            ?>
                            <li class="menu-item hvr-float-shadow ">
                                <a href="" class="item-link">
                                    <span class="item-name item-name--supersale"><i
                                            class="fa-brands fa-salesforce"></i>SIÊU SALES</span>
                                </a>
                            </li>
                            <li class="menu-item hvr-float-shadow">
                                <a href="?redirect=contact" class="item-link">
                                    <span class="item-name"><i class="mail-icon fa-regular fa-envelope"></i>Liên
                                        Hệ</span>
                                </a>
                            </li>
                            <li class="menu-item hvr-float-shadow">
                                <a href="?redirect=blog" class="item-link">
                                    <span class="item-name"><i class="fa-solid fa-pen-to-square"></i>Blog</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="breadcrumd">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="">Tìm kiếm</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-3 px-0 max-width-20">
                    <div class="module-filter">
                        <div class="module-title">
                            <span>TÌM KIẾM THEO</span>
                            <button class="reset-btn"><i class="fa-solid fa-circle-xmark"></i> Xóa</button>
                        </div>
                        <div class="module-body">
                            <div class="panel-group">
                                <div class="module-item">
                                    <div class="panel-heading">
                                        <span class="panel-title">Giá</span>
                                        <i class="arrow-down fa-solid fa-arrow-down"></i>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Dưới 1 Triệu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                1 Triệu - 3 Triệu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                3 Triệu - 5 Triệu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                5 Triệu - 10 Triệu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Trên 10 Triệu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-item">
                                    <div class="panel-heading">
                                        <span class="panel-title">Theo Size Nam</span>
                                        <i class="arrow-down fa-solid fa-arrow-down"></i>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                39
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                39.5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                40
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                40.5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                41
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                42
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                42.5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                43
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                44
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-item">
                                    <div class="panel-heading">
                                        <span class="panel-title">Theo Size Nữ</span>
                                        <i class="arrow-down fa-solid fa-arrow-down"></i>
                                    </div>
                                    <div class="panel-collapse">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                36.5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                37-37.5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                38
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                38.5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                39
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 px-0 max-width-80">
                    <div class="content">
                        <h1 class="page-title">TÌM KIẾM - <?php $by = $_POST['by']; echo $by; ?></h1>
                        <div class="main-products-wrapper">
                            <div class="products-filter">
                                <div class="select-group">
                                    <div class="sort-by">
                                        <label for="input-sort">Sắp xếp theo:</label>
                                        <select id="input-sort">
                                            <option value="">Mặc định</option>
                                            <option value="">Tên (A - Z)</option>
                                            <option value="">Tên (Z - A)</option>
                                            <option value="">Giá (Thấp &gt; Cao)</option>
                                            <option value="">Giá (Cao &gt; Thấp)</option>
                                            <option value="">Đánh giá (Cao nhất)</option>
                                            <option value="">Đánh giá (Thấp nhất)</option>
                                            <option value="">Kiểu (A - Z)</option>
                                            <option value="">Kiểu (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="main-products">
                                <div class="row g-0">
                                <?php
                                    foreach($arr['product'] as $prd) {
                                ?>
                                    <div class="col-3">
                                        <div class="product-layout">
                                            <a href="?redirect=detail&prd_id=<?= $prd['prd_id'] ?>" class="product-image">
                                                <img src="Public/Images/<?php 
                                                                $list_img = explode(',',$prd['prd_img']);
                                                                $main_pic = $list_img[0];
                                                                echo $main_pic;
                                                            ?>" newSrc="Public/Images/<?php 
                                                                $list_img = explode(',',$prd['prd_img']);
                                                                $main_pic = $list_img[1];
                                                                echo $main_pic;
                                                            ?>" oldSrc="Public/Images/<?php 
                                                                $list_img = explode(',',$prd['prd_img']);
                                                                $main_pic = $list_img[0];
                                                                echo $main_pic;
                                                            ?>" width="100%" height="238.387" alt="<?= $prd['prd_name'] ?>"
                                                    title="<?= $prd['prd_name'] ?>">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <?php
                                                            foreach ($arr['category'] as $cat) {
                                                                if($prd['cat_id'] == $cat['cat_id']) {
                                                                    echo '<a href="" class="brand-title">'.$cat['cat_name'].'</a>';
                                                                }
                                                            }
                                                        ?>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html"><?= $prd['prd_name'] ?></a>
                                                </div>
                                                <div class="price">
                                                    <span
                                                        class="price-new"><?php echo number_format($prd['prd_current_price'],0,'.','.'); ?>₫</span>
                                                    <span
                                                        class="price-old"><?php echo number_format($prd['prd_old_price'],0,'.','.'); ?>₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount"><?= $prd['prd_promotion']?></span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="pagination-results"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="main-products-wrapper py-4">
                        <div class="title-wrapper">
                            <h3>SẢN PHẨM BẠN VỪA XEM</h3>
                        </div>
                        <div class="main-products">
                            <div class="row g-0">
                            <?php
                                foreach($arr['product'] as $prd) {
                            ?>
                                <div class="col-2-4">
                                    <div class="product-layout">
                                        <a href="?redirect=detail&prd_id=<?= $prd['prd_id'] ?>" class="product-image">
                                            <img src="Public/Images/<?php 
                                                            $list_img = explode(',',$prd['prd_img']);
                                                            $main_pic = $list_img[0];
                                                            echo $main_pic;
                                                        ?>" newSrc="Public/Images/<?php 
                                                            $list_img = explode(',',$prd['prd_img']);
                                                            $main_pic = $list_img[1];
                                                            echo $main_pic;
                                                        ?>" oldSrc="Public/Images/<?php 
                                                            $list_img = explode(',',$prd['prd_img']);
                                                            $main_pic = $list_img[0];
                                                            echo $main_pic;
                                                        ?>" width="100%" height="238.387" alt="<?= $prd['prd_name'] ?>"
                                                title="<?= $prd['prd_name'] ?>">
                                        </a>
                                        <div class="product-caption">
                                            <div class="brand">
                                                <?php
                                                        foreach ($arr['category'] as $cat) {
                                                            if($prd['cat_id'] == $cat['cat_id']) {
                                                                echo '<a href="" class="brand-title">'.$cat['cat_name'].'</a>';
                                                            }
                                                        }
                                                    ?>
                                            </div>
                                            <div class="name">
                                                <a
                                                    href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html"><?= $prd['prd_name'] ?></a>
                                            </div>
                                            <div class="price">
                                                <span
                                                    class="price-new"><?php echo number_format($prd['prd_current_price'],0,'.','.'); ?>₫</span>
                                                <span
                                                    class="price-old"><?php echo number_format($prd['prd_old_price'],0,'.','.'); ?>₫</span>
                                            </div>
                                        </div>
                                        <div class="tag">
                                            <span class="tag-new">New</span>
                                            <span class="tag-discount"><?= $prd['prd_promotion']?></span>
                                        </div>
                                        <div class="product-layout--hover"></div>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="footer-wrapper">
                    <div class="row g-0">
                        <div class="col-6">
                            <div class="title-module">
                                <h3 class="title-register">ĐĂNG KÝ NHẬN THÔNG TIN</h3>
                                <p>Đăng ký ngay để được cập nhật sớm nhất những thông tin hữu ích, ữu đãi vô cùng hấp
                                    dẫn và những
                                    món quà bất ngờ từ Myshoes.vn!</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="newsletter-form">
                                <div class="input-group">
                                    <input type="text" class="form-control newsletter-email"
                                        placeholder="Nhập email của bạn ">
                                    <div class="input-group-append d-flex">
                                        <button class="btn btn-danger btn-register" type="button"><i
                                                class="fa-solid fa-envelope"></i>Đăng Ký</button>
                                    </div>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tôi đã đọc và đồng ý với <span>Chính sách bảo mật</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-wrapper">
                    <div class="row g-0 mt-3">
                        <div class="col-5">
                            <div class="block-address">
                                <h3>MYSHOES.VN - GIÀY CHÍNH HÃNG</h3>
                                <div class="block-header">
                                    <img src="https://myshoes.vn/image/cache/catalog/logo/logo-myshoes-ok-90x90.png"
                                        alt="">
                                    <div class="block-wrapper">
                                        <span>Myshoes.vn được định hướng trở thành hệ thống thương mại điện tử bán giày
                                            chính hãng hàng đầu Việt Nam.</span>
                                        <span>Showroom: 249 Xã Đàn, Đống Đa, Hà Nội</span>
                                        <span>Hotline: 0973711868</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2-3">
                            <div class="about-us">
                                <h3>VỀ CHÚNG TÔI</h3>
                                <ul>
                                    <li><a style="color:#fff;" href="?redirect=about">Giới thiệu</a></li>
                                    <li><a>Điều khoản sử dụng</a></li>
                                    <li><a>Chính sách bảo mật</a></li>
                                    <li><a>Tin tức myshoes</a></li>
                                    <li><a>Cơ hội việc làm</a></li>
                                    <li><a>Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2-3">
                            <div class="about-us">
                                <h3>KHÁCH HÀNG</h3>
                                <ul>
                                    <li><a>Hướng dẫn mua hàng</a></li>
                                    <li><a>Chính sách đổi trả</a></li>
                                    <li><a>Chính sách bảo hành</a></li>
                                    <li><a>Khách hàng thân thiết</a></li>
                                    <li><a>Hướng dẫn chọn size</a></li>
                                    <li><a>Chương trình khuyến mại</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2-3">
                            <div class="about-us certificate">
                                <h3>KHÁCH HÀNG</h3>
                                <div class="certificate-img">
                                    <img src="https://images.dmca.com/Badges/DMCA_logo-grn-btn150w.png?ID=1ed4cd9e-5ee4-4b63-95dc-c70388edd3cb"
                                        alt="">
                                    <img src="https://myshoes.vn/image/catalog/logo/logo-bct.png" alt="" width="60%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-wrapper">
                    <div class="copyright">Copyright © 2023 Mygroup Tech.,JSC</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/project/Public/Js/Client/handleHoverImage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>