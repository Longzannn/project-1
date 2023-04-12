<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <link rel="stylesheet" href="/project/Public/Css/Admin/admin.css">
    <link rel="stylesheet" href="/project/Public/Css/Admin/user.css">
    <link rel="stylesheet" href="/project/Public/Css/Admin/addcategory.css">
    <link rel="stylesheet" href="/project/Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="app">
        <nav class="navbar">
            <div class="container-fluid h-100">
                <a class="navbar-brand" href="#">
                    <img src="https://myshoes.vn/image/cache/catalog/logo/logo_ms-565x195.png" alt="Bootstrap">
                </a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span>Admin</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-user"></i>
                                My profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-money-check"></i>
                                My balance
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-envelope"></i>
                                Inbox
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main">
            <div class="sidebar-left">
                <div class="user-profile">
                    <div class="user-pic">
                        <img src="https://i.pinimg.com/736x/7e/ce/c4/7ecec434137d1fcbe023db38e06c1260.jpg"
                            alt="">
                    </div>
                    <div class="user-content">
                        <div class="user-name">
                            <span>Steve Jobs</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="user-email">longvan1173@gmail.com</div>
                    </div>

                    <ul class="user-menu">
                        <li>
                            <a href="">
                                <i class="fa-solid fa-user"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-money-check"></i>
                                <span>My Balance</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-envelope"></i>
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-gear"></i>
                                <span>Account Setting</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="nav-menu">
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="">
                            <i class="fa-solid fa-gauge"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="?controller=admin&redirect=user">
                            <i class="fa-solid fa-user"></i>
                            <span>Quản lí thành viên</span>
                        </a>
                    </li>
                    <li class="nav-item nav-item--active">
                        <a href="?controller=admin&redirect=category">
                            <i class="fa-solid fa-list"></i>
                            <span>Quản lí danh mục</span>
                        </a>
                    </li>
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="?controller=admin&redirect=product">
                            <i class="fa-solid fa-list"></i>
                            <span>Quản lí sản phẩm</span>
                        </a>
                    </li>
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="">
                            <i class="fa-solid fa-list"></i>
                            <span>Quản lí đơn hàng</span>
                        </a>
                    </li>
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="">
                            <i class="fa-solid fa-list"></i>
                            <span>Quản lí bình luận</span>
                        </a>
                    </li>
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="">
                            <i class="fa-solid fa-list"></i>
                            <span>Quản lí quảng cáo</span>
                        </a>
                    </li>
                    <li class="nav-item hvr-fade-for-nav-admin">
                        <a href="">
                            <i class="fa-solid fa-gear"></i>
                            <span>Cấu hình</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex h-100 align-items-center">
                                <li class="breadcrumb-item"><a href="category.php">Quản lí danh mục</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <h1 class="page-header">THÊM DANH MỤC SẢN PHẨM MỚI</h1>
                    </div>

                    <div class="row bg-white">
                        <div class="col-lg-8">
                            <div class="page-user">
                                <div class="page-table">
                                    <!-- <div class="alert alert-danger">Danh mục đã tồn tại !</div> -->
                                    <form role="form" method="post" action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=store">
                                        <div class="form-group">
                                            <label>Tên danh mục:</label>
                                            <input type="text" name="cat_name" class="form-control" placeholder="Tên danh mục...">
                                        </div>
                                        <input type="submit" name="sbm" value="Thêm mới"
                                            class="btn btn-primary"></input>
                                        <button type="reset" class="btn btn-light btn-reset">Làm mới</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="/Public/Js/Admin/resetInputValue.js"></script>
</body>

</html>