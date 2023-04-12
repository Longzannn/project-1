                        <!-- Sản phẩm -->
                        <div class="main-products-wrapper">
                            <div class="title-wrapper">
                                <h3>SẢN PHẨM MỚI</h3>
                                <div class="title-divider"></div>
                                <div class="subtitle">#NEW</div>
                            </div>
                            <div class="main-products">
                                <div class="row g-0">
                                    <?php
                                        foreach ($arr['prd_new'] as $prd) {
                                    ?>
                                    <div class="col-2-4">
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

                        <!-- Sản phẩm nổi bật -->
                        <div class="main-products-wrapper">
                            <div class="title-wrapper">
                                <h3>SẢN PHẨM NỔI BẬT</h3>
                                <div class="title-divider"></div>
                                <div class="subtitle">#FEATURE</div>
                            </div>
                            <div class="main-products">
                                <div class="row g-0">
                                    <?php
                                        foreach ($arr['prd_featured'] as $prd) {
                                    ?>
                                    <div class="col-2-4">
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

                        <!-- Thương hiệu nổi bật -->
                        <div class="main-products-wrapper">
                            <div class="title-wrapper">
                                <h3>THƯƠNG HIỆU NỔI BẬT</h3>
                                <div class="title-divider"></div>
                                <div class="subtitle">#BRAND</div>
                            </div>
                            <div class="main-products">
                                <div class="row g-0">
                                    <div class="col-3">
                                        <div class="master-slider">
                                            <img width="100%"
                                                src="https://myshoes.vn/image/cache/catalog/slide/giay-poster-ok-400x958h.jpg"
                                                alt="">
                                            <span>GIÀY CHÍNH HÃNG</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row g-0">
                                            <div class="col-12">
                                                <div class="tab-container">
                                                    <ul class="nav-tabs">
                                                        <li class="tab-item tab--active"><span>NIKE</span></li>
                                                        <li class="tab-item"><span>ADIDAS</span></li>
                                                        <li class="tab-item"><span>LACOSTE</span></li>
                                                        <li class="tab-item"><span>PUMA</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="tab-pane show">
                                                    <div class="row g-0">
                                                        <?php
                                                            foreach ($arr['prd_nike'] as $prd) {
                                                        ?>
                                                            <div class="col-3">
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
                                                                            <a href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html"><?= $prd['prd_name'] ?></a>
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
                                                                        <span
                                                                            class="tag-discount"><?= $prd['prd_promotion']?></span>
                                                                    </div>
                                                                    <div class="product-layout--hover"></div>
                                                                </div>
                                                            </div>
                                                        <?php 
                                                            } 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">
                                                    <div class="row g-0">
                                                        <?php
                                                            foreach ($arr['prd_adidas'] as $prd) {
                                                        ?>
                                                            <div class="col-3">
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
                                                                            <a href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html"><?= $prd['prd_name'] ?></a>
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
                                                                        <span
                                                                            class="tag-discount"><?= $prd['prd_promotion']?></span>
                                                                    </div>
                                                                    <div class="product-layout--hover"></div>
                                                                </div>
                                                            </div>
                                                        <?php 
                                                            } 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">
                                                    <div class="row g-0">
                                                        <?php
                                                            foreach ($arr['prd_lacoste'] as $prd) {
                                                        ?>
                                                            <div class="col-3">
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
                                                                            <a href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html"><?= $prd['prd_name'] ?></a>
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
                                                                        <span
                                                                            class="tag-discount"><?= $prd['prd_promotion']?></span>
                                                                    </div>
                                                                    <div class="product-layout--hover"></div>
                                                                </div>
                                                            </div>
                                                        <?php 
                                                            } 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane">
                                                    <div class="row g-0">
                                                        <?php
                                                            foreach ($arr['prd_puma'] as $prd) {
                                                        ?>
                                                            <div class="col-3">
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
                                                                            <a href="https://myshoes.vn/giay-adidas/giay-adidas-pureboost-22-jet-nam-trang.html"><?= $prd['prd_name'] ?></a>
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
                                                                        <span
                                                                            class="tag-discount"><?= $prd['prd_promotion']?></span>
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
                            </div>
                        </div>

                        <!-- Sản phẩm bạn vừa xem -->
                        <div class="main-products-wrapper">
                            <div class="title-wrapper">
                                <h3>SẢN PHẨM BẠN VỪA XEM</h3>
                                <div class="title-divider"></div>
                                <div class="subtitle">#VIEW</div>
                            </div>
                            <div class="main-products">
                                <div class="row g-0">
                                    <?php
                                        foreach ($arr['prd_featured'] as $prd) {
                                    ?>
                                    <div class="col-2-4">
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