<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://myshoes.vn/image/catalog/logo/logo-myshoes-nho.png" rel="icon">
    <title>Chỉnh sửa sản phẩm</title>
    <link rel="stylesheet" href="Public/Css/Admin/adduser.css?v=<?php echo time(); ?>">
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
            <div class="row">
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

                <div class="col-lg-10 bg-light">
                    <div class="container-fluid">
                        <div class="row">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex h-100 align-items-center">
                                    <li class="breadcrumb-item"><a href="product.php">Quản lí sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa sản phẩm</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="row">
                            <h1 class="page-header">CHỈNH SỬA SẢN PHẨM</h1>
                        </div>

                        <div class="row bg-white mb-4">
                            <div class="col-lg-8">
                                <?php 
                                    foreach($record['product'] as $prd) {
                                ?>
                                    <form
                                        action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=update&prd_id=<?= $prd['prd_id'] ?>"
                                        role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input value="<?= $prd['prd_name'] ?>" required name="prd_name"
                                                class="form-control" placeholder="">
                                        </div>
                                        <?php
                                            foreach($record['product_detail'] as $size) {
                                        ?>
                                                <div class="form-group">
                                                    <label>Số lượng sản phẩm (Size <?= $size['size_number'] ?>)</label>
                                                    <input value="<?= $size['prd_detail_quantity'] ?>" type="number" required name="prd_detail_quantity[<?= $size['size_id'] ?>]" class="form-control" placeholder="">
                                                </div>
                                        <?php
                                            }
                                        ?>
                                        <div class="form-group">
                                            <label>Giá sản phẩm niêm yết</label>
                                            <input value="<?= $prd['prd_old_price'] ?>" required name="prd_old_price"
                                                type="number" min="0" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm sau khi đã giảm</label>
                                            <input value="<?= $prd['prd_current_price'] ?>" required
                                                name="prd_current_price" type="number" min="0" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Lượt đánh giá</label>
                                            <input value="<?= $prd['prd_reviews'] ?>" required name="prd_reviews"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Bảo hành</label>
                                            <input value="<?= $prd['prd_warranty'] ?>" required name="prd_warranty"
                                                type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Khuyến mãi</label>
                                            <input value="<?= $prd['prd_promotion'] ?>" required name="prd_promotion"
                                                type="text" class="form-control">
                                        </div>
                                        <div class="form-group d-flex flex-column">
                                            <label>Ảnh sản phẩm</label>
                                            <input accept="image/*" type='file' multiple id="imgInp" name="prd_img[]" />
                                            <div id="img-upload-container" class="mt-3">
                                                <?php
                                                    $list_img = explode(',', $prd['prd_img']);
                                                    $length = count($list_img);
                                                    for ($i = 0; $i < $length; $i++) {
                                                        echo '<img id="img-upload" src="Public/Images/' . $list_img[$i] . '" alt="" />';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select name="cat_id" class="form-control">
                                            <?php
                                                foreach($record['category'] as $cate) {
                                            ?>
                                                    <option <?php if($prd['cat_id'] == $cate['cat_id']) {echo "selected";} ?>
                                                        value=<?php echo $cate['cat_id']; ?>>
                                                        <?php echo $cate['cat_name']; ?>
                                                    </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Trạng thái</label>
                                            <select name="prd_status" class="form-control">
                                                <option value=1 <?php if($prd['prd_status'] == 1) { echo 'selected'; } ?>
                                                    selected>Còn hàng
                                                </option>
                                                <option value=2 <?php if($prd['prd_status'] == 2) { echo 'selected'; } ?>>
                                                    Hết hàng
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="prd_new" id="prd_new"
                                                <?php if($prd['prd_new'] == 1) {echo 'checked';} ?>>
                                            <label class="form-check-label" for="prd_new">Sản phẩm mới</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="prd_featured"
                                                id="prd_featured" <?php if($prd['prd_featured'] == 1) {echo 'checked';} ?>>
                                            <label class="form-check-label" for="prd_featured">Sản phẩm nổi bật</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả sản phẩm</label>
                                            <textarea required name="prd_details" class="form-control"
                                                rows="3"><?= $prd['prd_details'] ?></textarea>
                                        </div>
                                        <input name="sbm" type="submit" value="Cập nhật" class="btn btn-primary"></input>
                                        <button type="reset" class="btn btn-light btn-reset"><a href="">Reset</a></button>
                                    </form>
                                <?php
                                    }
                                ?>
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
    <script src="Public/Js/Admin/uploadImage.js?v=<?php echo time(); ?>"></script>
    <script src="Public/Js/Admin/resetInputValue.js"></script>
</body>

</html>