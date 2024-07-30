<div class="content-main">
    <div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>
        <div class="animate-border m-auto"></div>
    </div>
    <div class="grid-product">
        <?php /*Giao diện thay đổi trong libraries/sample/product*/ ?>
        <?php $max = count($_SESSION['viewed_products']);
        if (!empty($max)) {
            // Đảo ngược mảng
            $arrTamp = array_reverse($_SESSION['viewed_products']);
            for ($i = 0; $i < $max; $i++) {
                $pid = $arrTamp[$i]['productid'];
                $proinfo = $cart->getProductInfo($pid);
                $proinfo['name'] = $proinfo['name' . $lang];
                $proinfo['href'] = $proinfo[$sluglang];
                $proinfo['showCart'] = false;
                $proinfo['showQuickView'] = (!empty($config['LQD']['quickview'])); ?>
                <?= $func->getProductItem($proinfo) ?>
            <?php }
        } else { ?>
            <div class="gr-100">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?= khongtimthayketqua ?></strong>
                </div>
            </div>
        <?php  } ?>
    </div>