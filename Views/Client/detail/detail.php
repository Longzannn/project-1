<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Giày Adidas Chính Hãng | Myshoes.vn</title>
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/reset.css">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/root.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
    <link rel="stylesheet" href="Views/Client/detail/detail.css?v=<?php echo time(); ?>">
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
                            <span class="quantity">0</span>
                            <!-- <div class="cart-empty">
                                <span>Không có sản phẩm trong giỏ hàng!</span>
                            </div> -->

                            <div class="cart-products">
                                <div class="list-products-cart">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="td-img" scope="row">
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg"
                                                        alt="">
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
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg"
                                                        alt="">
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
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg"
                                                        alt="">
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
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg"
                                                        alt="">
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
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg"
                                                        alt="">
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
                                                    <img src="https://myshoes.vn/image/cache/catalog/2023/lacoste/112/giay-lacoste-powercourt-1121-nam-den-01-60x60.jpg"
                                                        alt="">
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
                            </div>
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
                                <a href="" class="item-link">
                                    <span class="item-name"><i class="mail-icon fa-regular fa-envelope"></i>Liên
                                        Hệ</span>
                                </a>
                            </li>
                            <li class="menu-item hvr-float-shadow">
                                <a href="" class="item-link">
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
                <li class="breadcrumb-item"><a href="">Giày Adidas chính hãng</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="row g-0">
                <div class="col-9-5">
                    <div class="content">
                        <?php
                            foreach($arr['product'] as $prd) {
                        ?>
                            <div class="product-info">
                                <div class="product-left">
                                    <div class="product-img">
                                        <div class="additional-imgs">
                                            <div class="additional-img"><img src="Public/Images/<?php 
                                                    $list_img = explode(',',$prd['prd_img']);
                                                    $main_pic = $list_img[0];
                                                    echo $main_pic;
                                                ?>" alt=""></div>
                                            <div class="additional-img"><img src="Public/Images/<?php 
                                                    $list_img = explode(',',$prd['prd_img']);
                                                    $main_pic = $list_img[1];
                                                    echo $main_pic;
                                                ?>" alt=""></div>
                                            <div class="additional-img"><img src="Public/Images/<?php 
                                                    $list_img = explode(',',$prd['prd_img']);
                                                    $main_pic = $list_img[2];
                                                    echo $main_pic;
                                                ?>" alt=""></div>
                                            <div class="additional-img"><img src="Public/Images/<?php 
                                                    $list_img = explode(',',$prd['prd_img']);
                                                    $main_pic = $list_img[3];
                                                    echo $main_pic;
                                                ?>" alt=""></div>
                                            <div class="additional-img"><img src="Public/Images/<?php 
                                                    $list_img = explode(',',$prd['prd_img']);
                                                    $main_pic = $list_img[4];
                                                    echo $main_pic;
                                                ?>" alt=""></div>
                                        </div>
                                        <div class="main-img">
                                            <img src="Public/Images/<?php 
                                                    $list_img = explode(',',$prd['prd_img']);
                                                    $main_pic = $list_img[0];
                                                    echo $main_pic;
                                                ?>" alt="">
                                            <div class="cover"></div>
                                        </div>
                                    </div>
                                    <div class="product-banner">
                                        <img src="https://myshoes.vn/image/cache/catalog/2023/banner/sale/sieu-sale-nho-3.3-690x305.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name"><?= $prd['prd_name'] ?></div>
                                    <div class="product-rating">
                                        <div class="rating-stars">
                                            <i class="rated fa-sharp fa-solid fa-star"></i>
                                            <i class="rated fa-sharp fa-solid fa-star"></i>
                                            <i class="rated fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <div class="rating-reviews"><?= $prd['prd_reviews'] ?> đánh giá</div>
                                    </div>
                                    <div class="countdown-wrapper">
                                        <h5 class="countdown-title">⚡ GIÁ SALE HAPPY WOMEN'S DAY 4.3 - 8.3 ⚡</h5>
                                        <div class="countdown">
                                            <div class="days">
                                                <span></span>
                                                <span>Ngày</span>
                                            </div>
                                            <div class="hours">
                                                <span></span>
                                                <span>Giờ</span>
                                            </div>
                                            <div class="minutes">
                                                <span></span>
                                                <span>Phút</span>
                                            </div>
                                            <div class="seconds">
                                                <span></span>
                                                <span>Giây</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-price-group">
                                        <div class="price-wrapper">
                                            <div class="product-price-new hvr-float">
                                                <?php echo number_format($prd['prd_current_price'],0,'.','.'); ?>₫</div>
                                            <div class="product-old-new">
                                                <?php echo number_format($prd['prd_old_price'],0,'.','.'); ?>₫</div>
                                        </div>
                                        <div class="product-stats">
                                            <div class="product-stocks">
                                                <i class="fa-solid fa-check">
                                                </i> Kho hàng: 
                                                <b> 
                                                    <?php
                                                        $connect = mysqli_connect('localhost', 'root', '', 'submit');

                                                        $prd_id = (int)$_GET['prd_id'];

                                                        if(isset($_GET['size'])) {
                                                            $size = (int)$_GET['size'];

                                                            $product_detail_query = mysqli_query($connect, "SELECT * FROM product_detail
                                                            JOIN product ON product_detail.prd_id = product.prd_id
                                                            JOIN size ON product_detail.size_id = size.size_id
                                                            WHERE product_detail.prd_id = '$prd_id' AND size.size_number = '$size'"
                                                        );
                                                            $product_detail = mysqli_fetch_assoc($product_detail_query);

                                                            if ($product_detail['prd_detail_quantity'] == 0) {
                                                                echo "Hết hàng";
                                                            } else {
                                                                echo "Còn hàng";
                                                            }
                                                        } else {
                                                            echo " Bạn chưa chọn size!";
                                                        }
                                                        mysqli_close($connect);
                                                    ?>
                                                </b>
                                            </div>
                                            <div class="product-model"><i class="fa-solid fa-circle"></i> Mã sản phẩm:
                                                <span>MSN1030</span></div>
                                            <div class="product-brand">
                                                <img src="https://myshoes.vn/image/cache/data/logo/nike-70x70w.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <form class="product-options">
                                        <div class="options-title">Chọn size</div>
                                        <?php
                                            foreach($arr['product_detail'] as $prd_detail) {
                                        ?>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="option-size-<?= $prd_detail['size_number'] ?>" id="option-size-<?= $prd_detail['size_number'] ?>"
                                                    value="<?= $prd_detail['size_number'] ?>">
                                                <label class="form-check-label hvr-glow" for="option-size-<?= $prd_detail['size_number'] ?>"><?= $prd_detail['size_number'] ?></label>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                        <div class="tutorial-size">Hướng dẫn chọn size</div>
                                        <div class="button-group-page">
                                            <div class="product-quantity">
                                                <input name="quantity" type="number" min="1" max="9" step="1" value="1">
                                                <span class="plus hvr-fade-for-icon">+</span>
                                                <span class="minus hvr-fade-for-icon">-</span>
                                            </div>
                                            <button class="button-cart hvr-sweep-to-right"><a>THÊM VÀO GIỎ</a></button>
                                            <button class="button-buy hvr-sweep-to-left"><a>MUA HÀNG NGAY</a></button>
                                        </div>
                                        <div class="hotline hvr-shrink">Hotline:<span> 0973 711 868</span></div>
                                        <div class="content-top">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <span>Hàng chính hãng, chât lượng cao</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="fa-solid fa-rotate"></i>
                                                    <span>Đổi hàng 30 ngày, thủ tục đơn giản</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="fa-solid fa-truck"></i>
                                                    <span>Miễn phí giao hành với đơn > 500k</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        <div class="product-blocks">
                            <div class="blocks-heading hvr-icon-down">
                                <h4>NHỮNG SẢN PHẨM CHĂM SÓC GIÀY BẠN CẦN CÓ</h4>
                                <i class="toogle-btn fa-solid fa-arrow-down hvr-icon"></i>
                            </div>
                            <div class="bundled-products mt-4">
                                <div class="row g-3">
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="178"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="178"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="178"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="178"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="178"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tabs">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="tab-container">
                                        <ul class="nav-tabs">
                                            <li class="tab-item tab--active"><span>MÔ TẢ SẢN PHẨM</span></li>
                                            <li class="tab-item"><span>ĐÁNH GIÁ</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php
                                        foreach($arr['product'] as $prd) {
                                    ?>
                                        <div class="tab-pane show">
                                            <p><?= $prd['prd_name'] ?> một mẫu giày thể thao đa dụng, thiết kế gọn
                                                gàng mang lại cảm giác
                                                cực kỳ tự nhiên khi sử dụng. Trọng lượng siêu nhẹ, chất liệu êm ái giúp bạn
                                                di chuyển cả ngày mà không
                                                mệt mỏi.</p>
                                            <h4><?= $prd['prd_name'] ?> tại Myshoes.vn được nhập khẩu chính hãng.
                                                Full box, đầy đủ phụ kiện.</h4>
                                            <div class="detail-img">
                                                <img src="Public/Images/<?php 
                                                        $list_img = explode(',',$prd['prd_img']);
                                                        $main_pic = $list_img[0];
                                                        echo $main_pic;
                                                    ?>" alt="">
                                                <img src="Public/Images/<?php 
                                                        $list_img = explode(',',$prd['prd_img']);
                                                        $main_pic = $list_img[1];
                                                        echo $main_pic;
                                                    ?>" alt="">
                                                <img src="Public/Images/<?php 
                                                        $list_img = explode(',',$prd['prd_img']);
                                                        $main_pic = $list_img[2];
                                                        echo $main_pic;
                                                    ?>" alt="">
                                                <img src="Public/Images/<?php 
                                                        $list_img = explode(',',$prd['prd_img']);
                                                        $main_pic = $list_img[3];
                                                        echo $main_pic;
                                                    ?>" alt="">
                                                <img src="Public/Images/<?php 
                                                        $list_img = explode(',',$prd['prd_img']);
                                                        $main_pic = $list_img[4];
                                                        echo $main_pic;
                                                    ?>" alt="">
                                            </div>
                                            <p style="color:red">* Myshoes.vn cam kết:</p>
                                            <p>- <?= $prd['prd_name'] ?> chính hãng 100%. Phát hiện hàng Fake đền
                                                tiền gấp 2 lần giá sản phẩm.</p>
                                            <p>- Myshoes.vn miễn phí giao hàng toàn quốc (với đơn hàng từ 500.000 vnđ).</p>
                                            <p>- Đổi hàng trong 30 ngày đơn giản dễ dàng</p>
                                            <p style="color:red">* Cách thức mua hàng:</p>
                                            <p>- Khách hàng tiến hành MUA HÀNG trực tiếp trên website hoặc gọi điện tới
                                                Hotline: 0973 711 868 để được tư vấn.</p>
                                            <p>- Khách hàng sẽ nhận được sản phẩm sau 1 - 3 ngày kể từ khi đặt hàng.</p>
                                            <p style="color:red">* Thông tin liên hệ Myshoes.vn:</p>
                                            <p>+ Showroom: 249 Xã Đàn, Hà Nội. </p>
                                            <p>+ Điện thoại: 0903 479 488 / Hotline: 0973 711 868 (Zalo, Viber)</p>
                                            <p>+ Email: cskh@myshoes.vn</p>
                                            <p>+ Website: https://myshoes.vn</p>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="tab-pane">
                                        <div class="text-alert">Không có đánh giá cho sản phẩm này</div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Tên bạn">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Đánh giá của bạn"></textarea>
                                        </div>
                                        <div class="text-note">Lưu ý: <span> Không hỗ trợ HTML!</span></div>
                                        <button type="button" class="btn btn-primary w-100">TIẾP TỤC</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2-5">
                    <div class="column-right">
                        <div class="product-blocks">
                            <div class="blocks-heading hvr-icon-down">
                                <h4>SẢN PHẨM TƯƠNG TỰ</h4>
                                <i class="toogle-btn fa-solid fa-arrow-down hvr-icon"></i>
                            </div>
                            <div class="bundled-products mt-4">
                                <div class="row">
                                    <?php
                                        foreach ($arr['product_limit_1'] as $prd) {
                                    ?>
                                        <div class="col-12">
                                            <div class="product-layout">
                                                <a href="?redirect=detail&prd_id=<?= $prd['prd_id'] ?>"
                                                    class="product-image">
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
                        <div class="customer">
                            <h4>ẢNH KHÁCH HÀNG</h4>
                            <div class="customer-img">
                                <img src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_181711-60x60.jpg" alt="">
                                <img src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_1061-60x60.jpg" alt="">
                                <img src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_0955-60x60.jpg" alt="">
                                <img src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_1064-60x60.jpg" alt="">
                                <img src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_1816-60x60.JPG" alt="">
                                <img src="https://myshoes.vn/image/cache/catalog/lookbook/IMG_1431-60x60.JPG" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-content">
                <div class="row">
                    <div class="col-12">
                        <div class="products-wrapper">
                            <div class="title-wrapper">
                                <h3>SẢN PHẨM MỚI</h3>
                            </div>
                            <div class="main-products">
                                <div class="row g-0">
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="main-products-wrapper">
                            <div class="title-wrapper mt-4">
                                <h3>SẢN PHẨM BẠN VỪA XEM</h3>
                            </div>
                            <div class="slider-card">
                                <div class="swipper">
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                    <div class="col-2-4 swipper-slide pe-4">
                                        <div class="product-layout">
                                            <a href="" class="product-image">
                                                <img src="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    newSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-02-500x500.jpg"
                                                    oldSrc="https://myshoes.vn/image/cache/catalog/2023/adidas/adi3/giay-adidas-pureboost-22-jet-nam-trang-01-500x500.jpg"
                                                    width="100%" height="238.387"
                                                    alt="Giày adidas Pureboost 22 Jet Nam - Trắng"
                                                    title="Giày adidas Pureboost 22 Jet Nam - Trắng">
                                            </a>
                                            <div class="product-caption">
                                                <div class="brand">
                                                    <a href="" class="brand-title">Adidas</a>
                                                </div>
                                                <div class="name">
                                                    <a
                                                        href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html">Giày
                                                        adidas Pureboost 22 Jet Nam - Trắng</a>
                                                </div>
                                                <div class="price">
                                                    <span class="price-new">2.590.000₫</span>
                                                    <span class="price-old">3.500.000₫</span>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <span class="tag-new">New</span>
                                                <span class="tag-discount">-26 %</span>
                                            </div>
                                            <div class="product-layout--hover"></div>
                                        </div>
                                    </div>
                                </div>
                                <button id="prev">
                                    < </button>
                                        <button id="next"> > </button>
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

    <!-- Popup Modal -->
    <div class="slide-show">
        <?php
            foreach($arr['product'] as $prd) {
        ?>
        <div class="top">
            <div class="number"></div>
            <div class="control">
                <i class="zoom-out fa-solid fa-magnifying-glass-minus"></i>
                <i class="zoom-in fa-solid fa-magnifying-glass-plus"></i>
                <i class="close fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="mid">
            <div class="current-img">
                <img src="Public/Images/<?php 
                    $list_img = explode(',',$prd['prd_img']);
                    $main_pic = $list_img[0];
                    echo $main_pic;
                ?>" alt="">
            </div>
            <div class="button-prev">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="button-next">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
        <div class="bottom">
            <div class="item-img">
                <img src="Public/Images/<?php 
                    $list_img = explode(',',$prd['prd_img']);
                    $main_pic = $list_img[0];
                    echo $main_pic;
                ?>" alt="">
            </div>
            <div class="item-img">
                <img src="Public/Images/<?php 
                    $list_img = explode(',',$prd['prd_img']);
                    $main_pic = $list_img[1];
                    echo $main_pic;
                ?>" alt="">
            </div>
            <div class="item-img">
                <img src="Public/Images/<?php 
                    $list_img = explode(',',$prd['prd_img']);
                    $main_pic = $list_img[2];
                    echo $main_pic;
                ?>" alt="">
            </div>
            <div class="item-img">
                <img src="Public/Images/<?php 
                    $list_img = explode(',',$prd['prd_img']);
                    $main_pic = $list_img[3];
                    echo $main_pic;
                ?>" alt="">
            </div>
            <div class="item-img">
                <img src="Public/Images/<?php 
                    $list_img = explode(',',$prd['prd_img']);
                    $main_pic = $list_img[4];
                    echo $main_pic;
                ?>" alt="">
            </div>
        </div>
        <?php
            }
        ?>
    </div>

    <script src="Public/Js/Client/zoomImage.js"></script>
    <script src="Public/Js/Client/showImage.js"></script>
    <script src="Public/Js/Client/handleSlideShow.js"></script>
    <script src="Public/Js/Client/controlModal.js"></script>
    <script src="Public/Js/Client/setCountdown.js"></script>
    <script src="Public/Js/Client/handleHoverImage.js"></script>
    <script src="Public/Js/Client/handleUITabs.js"></script>
    <script src="Public/Js/Client/handleQuantity.js"></script>
    <script src="Public/Js/Client/handleCardSlider.js"></script>
    <script src="Public/Js/Client/toogleListProduct.js"></script>
    <script src="Views/Client/detail/handleCheckboxSize.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>