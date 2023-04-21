<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Thêm thành viên</title>
    <link rel="stylesheet" href="Public/Css/Admin/adduser.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                            <a class="dropdown-item" href="index.php?">
                                <i class="fa-solid fa-money-check"></i>
                                Website
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

        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-lg-2">
                    <div class="user-profile">
                        <div class="user-pic">
                            <img src="https://i.pinimg.com/736x/7e/ce/c4/7ecec434137d1fcbe023db38e06c1260.jpg" alt="">
                        </div>
                        <div class="user-content">
                            <div class="user-name">
                                <span>Steve Jobs</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="user-email">varun@gmail.com</div>
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
                        <li class="nav-item nav-item--active hvr-fade-for-nav-admin">
                            <a href="?controller=admin&redirect=user">
                                <i class="fa-solid fa-user"></i>
                                <span>Quản lí thành viên</span>
                            </a>
                        </li>
                        <li class="nav-item hvr-fade-for-nav-admin">
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
                        
                    </ul>
                </div>

                <div class="col-lg-10 bg-light ps-4">
                    <div class="container-fluid">
                        <div class="row">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex h-100 align-items-center">
                                    <li class="breadcrumb-item"><a href="">Quản lí thành viên</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thêm thành viên</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="row">
                            <h1 class="page-header">THÊM THÀNH VIÊN MỚI</h1>
                        </div>

                        <div class="row bg-white mb-4">
                            <div class="col-lg-8">
                                <div class="page-user">
                                    <div class="page-table">
                                        <!-- <div class="alert alert-danger">Danh mục đã tồn tại !</div> -->
                                        <form role="form" method="post"
                                            action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=store">
                                            <div class="form-group">
                                                <label>Họ & Tên</label>
                                                <input name="user_name" required class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="user_email" required type="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="user_password" required type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Số Điện Thoại</label>
                                                <input name="user_phone" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Địa Chỉ</label>
                                                <input name="user_address" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Vai trò:</label>
                                                <select name="user_role" class="form-control">
                                                    <option value="admin">Admin</option>
                                                    <option value="member">Member</option>
                                                </select>
                                            </div>
                                            <input value="Thêm mới" name="sbm" type="submit"
                                                class="btn btn-success"></input>
                                            <button type="reset" class="btn btn-default">Làm mới</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="/project/views/pages/Admin/js/resetInputValue.js"></script>
</body>

</html>