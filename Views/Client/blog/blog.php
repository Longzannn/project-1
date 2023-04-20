<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Tin Tức Myshoes.vn</title>
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/reset.css">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/root.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
    <link rel="stylesheet" href="Views/Client/blog/blog.css">
</head>
<body>
    <div class="site-wrapper">
        <header class="header">
            <div class="header-wrapper">
                <div class="header-navbar">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img src="https://myshoes.vn/image/cache/catalog/logo/logo_ms-565x195.png" alt="" class="logo-img">
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
                                    <a href='?controller=login&action=login' class='accounts-link'>
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
                                    <a href='?controller=login&action=login' class='accounts-link'>
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
                                    <span class="item-name item-name--supersale"><i class="fa-brands fa-salesforce"></i>SIÊU SALES</span>
                                </a>
                            </li>
                            <li class="menu-item hvr-float-shadow">
                                <a href="?redirect=contact" class="item-link">
                                    <span class="item-name"><i class="mail-icon fa-regular fa-envelope"></i>Liên Hệ</span>
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
                <li class="breadcrumb-item"><a href="">Tin tức Myshoes</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="row g-0">
                <div class="col-9 content--border">
                    <div class="main-products-wrapper">
                        <h1>BÀI VIẾT MỚI NHẤT</h1>
                        <div class="title-wrapper">
                            <h3>TIN TỨC MYSHOES.VN</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#BLOG</div>
                        </div>
                        <div class="slider-card">
                            <div class="swipper">
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 swipper-slide px-2">
                                    <div class="card-item">
                                        <a class="card-img">
                                            <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                            <div class="card-author">Myshoes.vn</div>
                                        </a>
                                        <div class="card-caption">
                                            <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                            <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="prev"> < </button>
                            <button id="next"> > </button>
                        </div>
                    </div>

                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>BÀI VIẾT XEM NHIỀU NHẤT</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#BLOG</div>
                        </div>
                        <div class="slider-card">
                            <div class="swipper no-overflow">
                                <div class="row">
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-products-wrapper">
                        <div class="title-wrapper">
                            <h3>TẤT CẢ BÀI VIẾT</h3>
                            <div class="title-divider"></div>
                            <div class="subtitle">#ALLBLOG</div>
                        </div>
                        <div class="slider-card">
                            <div class="swipper no-overflow">
                                <div class="row">
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 swipper-slide px-2 mb-5">
                                        <div class="card-item">
                                            <a class="card-img">
                                                <img src="https://myshoes.vn/image/cache/catalog/blog/03.01/chon-nuoc-hoa-theo-tam-trang-elle-man-cover-1-400x250h.jpeg" alt="">
                                                <div class="card-author">Myshoes.vn</div>
                                            </a>
                                            <div class="card-caption">
                                                <a class="card-name">Top những mùi hương nước hoa nam được yêu thích nhất năm 2023</a>
                                                <span class="card-desc">Nếu bạn đang muốn gây ấn tượng và thu hút sự chú ý của người phụ nữ mà bạn đang để mắt tới. Đầu tiên..</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="side-column">
                        <img src="https://myshoes.vn/image/cache/catalog/2023/banner/banner-sale-side-240x390.png" alt="">
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
        </div>
        <footer>
            <div class="footer" >
               <div class="footer-wrapper">
                    <div class="row g-0">
                        <div class="col-6">
                            <div class="title-module">
                                <h3 class="title-register">ĐĂNG KÝ NHẬN THÔNG TIN</h3>
                                <p>Đăng ký ngay để được cập nhật sớm nhất những thông tin hữu ích, ữu đãi vô cùng hấp dẫn và những
                                món quà bất ngờ từ Myshoes.vn!</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="newsletter-form">
                                <div class="input-group">
                                    <input type="text" class="form-control newsletter-email" placeholder="Nhập email của bạn ">
                                    <div class="input-group-append d-flex">
                                        <button class="btn btn-danger btn-register" type="button"><i class="fa-solid fa-envelope"></i>Đăng Ký</button>
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
            <div class="footer" >
                <div class="footer-wrapper">
                     <div class="row g-0 mt-3">
                            <div class="col-5">
                                <div class="block-address">
                                    <h3>MYSHOES.VN - GIÀY CHÍNH HÃNG</h3>
                                    <div class="block-header">
                                        <img src="https://myshoes.vn/image/cache/catalog/logo/logo-myshoes-ok-90x90.png" alt="">
                                        <div class="block-wrapper">
                                            <span>Myshoes.vn được định hướng trở thành hệ thống thương mại điện tử bán giày chính hãng hàng đầu Việt Nam.</span>
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
                                        <img src="https://images.dmca.com/Badges/DMCA_logo-grn-btn150w.png?ID=1ed4cd9e-5ee4-4b63-95dc-c70388edd3cb" alt="">
                                        <img src="https://myshoes.vn/image/catalog/logo/logo-bct.png" alt="" width="60%">
                                    </div>
                                </div>
                            </div>
                     </div>
                </div>
            </div>
            <div class="footer" >
                <div class="footer-wrapper">
                    <div class="copyright">Copyright © 2023 Mygroup Tech.,JSC</div>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>