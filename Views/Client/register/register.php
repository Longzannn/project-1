<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/reset.css">
    <link rel="stylesheet" type="text/css" href="Public/Css/Client/base/root.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
    <link rel="stylesheet" href="register.css">
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
                            <!-- Chưa login -->
                            <a href="" class="accounts-link">
                                <i class="fa-solid fa-user"></i>
                                <div class="links-text">
                                    <span>Tài khoản</span>
                                    <span>Đăng nhập/ Đăng ký</span>
                                </div>
                            </a>
                            <div class="dropdown-menu-accounts">
                                <span class="login"><i class="fa-solid fa-arrow-right-to-bracket"></i>Đăng nhập</span>
                                <span class="logout"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>Đăng ký</span>
                            </div>

                            <!-- Đã login -->
                            <!-- <a href="" class="accounts-link">
                                <i class="fa-solid fa-user"></i>
                                <div class="links-text">
                                    <span>Tài khoản</span>
                                    <span>Chỉnh sửa / Thoát</span>
                                </div>
                            </a>
                            <div class="dropdown-menu-accounts logined">
                                <span class="login"><i class="fa-solid fa-user"></i>Tài khoản của tôi</span>
                                <span class="logout"><i class="fa-solid fa-cart-shopping"></i>Đơn hàng của tôi</span>
                                <span class="exit"><i class="fa-solid fa-arrow-right-to-bracket"></i>Thoát</span>
                            </div> -->
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
                <li class="breadcrumb-item"><a href="">Tài khoản</a></li>
                <li class="breadcrumb-item"><a href="">Đăng ký</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="row g-0">
                <div class="col-2-4 border-right">
                    <div class="column-left">
                        <a href="">
                            <img src="https://myshoes.vn/image/cache/catalog/2022/banner/slide-trai-20-300x500h.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-7-2">
                    <div class="register">
                        <h2>THÔNG TIN ĐĂNG KÝ</h2>
                        <form action="">
                            <div class="register-form">
                                <input type="text" placeholder="Họ và tên: " name="email" id="name" required>
                                <input type="text" placeholder="Email: " name="email" id="email" required>
                                <input type="text" placeholder="Điện thoại: " name="email" id="phone" required>
                                <input type="password" placeholder="Mật khẩu: " name="password" id="password" required>
                                <input type="password" placeholder="Nhập lại mật khẩu: " name="repassword" id="repassword" required>
                                <button type="submit" class="registerbtn"><a>ĐĂNG KÝ</a></button>
                            </div>
                          </form>
                    </div>
                </div>
                <div class="col-2-4 border-left">
                    <div class="column-right">
                        <a href="">
                            <img src="https://myshoes.vn/image/cache/catalog/slide/xit-khu-mui-jpg-300x500h.jpg" alt="">
                        </a>
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