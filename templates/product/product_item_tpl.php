<?php
$linkFilter = "./" . @$lang_filter;

$brands = [];
$where2 = "";
foreach (@$_REQUEST as $key => $value) {
    if (strpos($key, 'brand-') === 0) {
        $brands[] = htmlspecialchars($value);
    }
}

if (!empty($brands)) {
    $brandString = implode(',', $brands);
    $where2 .= " and id_brand in ($brandString)";
}
?>


<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>
    <div class="animate-border m-auto"></div>
</div>
<div class="content-main">
    <div class="row">
        <div class="col-md-3 mgb-res">
            <?php
            $type = ($type == 'san-pham') ? 'san-pham' : 'combo';
            $productcatsingle = $cache->get("select * from #_product_cat where type = ? and id = ? and find_in_set('hienthi',status) order by numb,id desc", array($type, $productCat['id']), 'result', 7200);
            $productitemsingle = $cache->get("select * from #_product_item where type = ? and id = ? and find_in_set('hienthi',status) order by numb,id desc", array($type, $productItem['id']), 'result', 7200);
            $menuitem = $cache->get("select * from #_product_item where type = ? and id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham', $productCat['id']), 'result', 7200);
            $productitem = $cache->get("select * from #_product where type = ? and id_item = ? and find_in_set('hienthi',status) $where2 order by numb,id desc", array($type, $productitemsingle[0]['id']), 'result', 7200);
            ?>
            <div class="box-sticky">
                <div class="category-box">
                    <?php if (!empty($productcatsingle)) { ?>
                        <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thể Loại</span></div>
                        <div class="section__category section__item__category mb-2 ">
                            <ul class="box_category_list">
                                <li>
                                    <a href="<?= $productcatsingle['slugvi'] ?>" class="d-flex justify-content-start align-items-center active transition"><i class="fa-light fa-angles-right"></i><?= $productcatsingle[0]['name' . $lang] ?> </a>
                                    <ul>
                                        <?php foreach ($menuitem as $v) { ?>
                                            <li>
                                                <a href="<?= $v['slugvi'] ?>" class="d-flex justify-content-start align-items-center transition"><i class="fa-light fa-angles-right"></i><?= $v['name' . $lang] ?> </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>

                    <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thương Hiệu</span></div>
                    <div class="section__category mb-2">
                        <?php include TEMPLATE . LAYOUT . "productfilter.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="grid-product">
                <?php if (!empty($productitem)) {
                    foreach ($productitem as $k => $v) { ?>
                        <div class="product">
                            <div class="box-product text-decoration-none">
                                <div class="position-relative overflow-hidden">
                                    <a class="pic-product" href="<?= $v['slugvi'] ?>" title="<?= $v['name'] ?>">
                                        <?= $func->getImage(['isWebp' => false, 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name']]) ?>
                                    </a>
                                </div>
                            </div>

                            <div class="info-product">
                                <div class="name-product"><a class="text-split regular color__hover" href="<?= $v['slugvi'] ?>" title="<?= $v['name'] ?>"><?= $v['name' . $lang] ?></a></div>
                                <div class="price-product d-flex align-items-center">
                                    <div class="price-left">
                                        <?php if ($v['discount']) { ?>
                                            <div class="price-old"><?= $func->formatMoney($v['regular_price']) ?></div>
                                            <div class="price-new"><?= $func->formatMoney($v['sale_price']) ?></div>
                                        <?php } else { ?>
                                            <div class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></div>
                                        <?php } ?>
                                    </div>
                                    <?php if ($v['discount']) { ?>
                                        <div class="price-right">
                                            <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php if (!empty($v['showCart'])) { ?>
                                    <p class="cart-product w-clear text-center mt-15">
                                        <span class="btn-add cart-add addcart" data-id="<?= $v['id'] ?>" data-action="addnow">Thêm vào giỏ</span>
                                    </p>
                                <?php } ?>
                            </div>

                        </div>
                    <?php }
                } else { ?>
                    <div class="gr-100">
                        <div class="alert alert-warning w-100" role="alert">
                            <strong><?= khongtimthayketqua ?></strong>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>