<?php
    foreach($arr['category'] as $item) {
?>
<li class="menu-item hvr-float-shadow">
    <a href="?redirect=category&cat_id=<?= $item['cat_id'];?>" class="item-link">
        <span class="item-name">Giày <?= $item['cat_name'] ?></span>
        <?php
            if($item['cat_name'] == 'Nike' || $item['cat_name'] == 'Lacoste' || $item['cat_name'] == 'New Balance' || $item['cat_name'] == 'Asics') {
                echo '<span class="item-label item-label--new">New</span>';
            } else {
                echo '<span class="item-label item-label--sale">Sale</span>';
            }
        ?>
    </a>
</li>
<?php } ?>