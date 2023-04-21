<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Quản lí sản phẩm</title>
    <link rel="stylesheet" href="Public/Css/Admin/adduser.css">
    <link rel="stylesheet" href="Public/Icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="Public/Css/Client/Effects/hover.css">
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
                        <li class="nav-item hvr-fade-for-nav-admin">
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
                        <li class="nav-item nav-item--active hvr-fade-for-nav-admin">
                            <a href="?controller=admin&redirect=product">
                                <i class="fa-solid fa-list"></i>
                                <span>Quản lí sản phẩm</span>
                            </a>
                        </li>
                        <li class="nav-item hvr-fade-for-nav-admin">
                            <a href="?controller=admin&redirect=order">
                                <i class="fa-solid fa-list"></i>
                                <span>Quản lí đơn hàng</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>

                <div class="col-lg-10 ps-4 bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex h-100 align-items-center">
                                    <li class="breadcrumb-item"><a href="#">Quản lí sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="row">
                            <h1 class="page-header">DANH SÁCH ĐIỆN THOẠI ĐÃ CÓ TRÊN CỬA HÀNG</h1>
                        </div>

                        <div class="row bg-white mb-4">
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-info btn-add"><a
                                        href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=create">Thêm
                                        sản phẩm mới</a></button>
                            </div>
                            <div class="col-lg-12">
                                <div class="page-user">
                                    <div class="page-table">
                                        <table data-toolbar="#toolbar" class="table" data-toggle="table">
                                            <thead>
                                                <tr class="bg-light">
                                                    <th data-field="id" data-sortable="true">ID</th>
                                                    <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                                    <th data-field="price" data-sortable="true">Giá</th>
                                                    <th>Ảnh sản phẩm</th>
                                                    <th>Trạng thái</th>
                                                    <th>Danh mục</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $stt = 1;
                                                    foreach ($arr['product'] as $prd) {
                                                ?>
                                                <tr>
                                                    <td class="align-middle"><?= $stt ?></td>
                                                    <td class="align-middle"><?= $prd['prd_name'] ?></td>
                                                    <td class="align-middle">
                                                        <?php echo number_format($prd['prd_current_price'],0,'.','.'); ?>₫
                                                    </td>
                                                    <td style="text-align: left" id="product-img">
                                                        <img width="90" height="120" style="object-fit: contain;" src="Public/Images/<?php 
                                                            $list_img = explode(',',$prd['prd_img']);
                                                            $main_pic = $list_img[0];
                                                            echo $main_pic;
                                                        ?>" 
                                                    />
                                                    </td>
                                                    <td class="align-middle">
                                                        <span style="font-weight: bold; color: green;" class="label">
                                                            <?php 
                                                                if($prd['prd_status'] == 1) {
                                                                    echo '<span style="font-weight: bold; color: green;" class="label">Còn hàng</span>';
                                                                } else {
                                                                    echo '<span style="font-weight: bold; color: red;" class="label">Hết hàng</span>';
                                                                }
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?php
                                                        foreach ($arr['category'] as $cat) {
                                                            if($prd['cat_id'] == $cat['cat_id']) {
                                                                echo $cat['cat_name'];
                                                            }
                                                        }
                                                    ?></td>
                                                    <td class="form-group align-middle">
                                                        <button type="button" class="btn btn-info">
                                                            <a
                                                                href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=edit&prd_id=<?= $prd['prd_id'] ?>">Sửa
                                                            </a>
                                                        </button>
                                                        <button type="button" class="btn btn-danger">
                                                            <a
                                                                href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=destroy&prd_id=<?= $prd['prd_id'] ?>">Xóa
                                                            </a>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                                        $stt++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php
                                            $current_page = $arr['current_page'];
                                            $total_page = $arr['total_page'];
                                        ?>
                                        <?php
                                            if($current_page > 1 && $total_page > 1) {
                                                $prev = $current_page - 1;
                                                echo '  <li class="page-item">
                                                            <a class="page-link" href="index.php?controller=admin&redirect=product&current_page='.$prev.'" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>';
                                            }
                                        ?>

                                        <?php
                                            for($i = 1; $i < $total_page; $i++) {
                                                if($i == $current_page ) {
                                                    echo '<li class="page-item active"><a class="page-link" href="#">'.$i.'</a></li>';
                                                } else {
                                                    echo '<li class="page-item"><a class="page-link" href="index.php?controller=admin&redirect=product&current_page='.$i.'">'.$i.'</a></li>';
                                                }
                                            }
                                        ?>

                                        <?php
                                            if($current_page < $total_page && $total_page > 1) {
                                                $next = $current_page + 1;
                                                echo '  <li class="page-item">
                                                            <a class="page-link" href="index.php?controller=admin&redirect=product&current_page='.$next.'" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>';
                                            }
                                        ?>
                                    </ul>
                                </nav>
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
</body>

</html>