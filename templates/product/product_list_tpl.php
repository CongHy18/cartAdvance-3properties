<div class="content-main">
    <?php if (!empty($productList['photo2'])) { ?>
        <div class="banner-list mb-5">
            <?= $func->getImage([
                'class' => 'w-100',
                'sizes' => '1300x450x1',
                'isWatermark' => true,
                'prefix' => 'product',
                'upload' => UPLOAD_PRODUCT_L,
                'image' => $productList['photo2'],
                'alt' => $v['name' . $lang]
            ]) ?>
        </div>
    <?php } ?>

    <div class="title-main">
        <span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>
        <div class="animate-border m-auto"></div>
    </div>

    <?php 
    $productcatv = $cache->get("select * from #_product_cat where type = ? and id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham', $idl), 'result', 7200);
    $productcatall = $cache->get("select * from #_product_cat where type = ? and id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham', $productList['id']), 'result', 7200);
    ?>
    <?php if (count($productcatall)) { ?>
        <div class="tab__product">
            <?php foreach ($productcatall as $v) { ?>
                <div class="inner__cat">
                    <div class="image__cat">
                        <a href="<?= $v['slug' . $lang] ?>" class="scale-img">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '80x120x3', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </div>
                    <div class="name__cat">
                        <a class="text-split color__hover" href="<?= $v['slug' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <?php
    $type = ($type == 'san-pham') ? 'san-pham' : 'combo';
    if (!empty($productList)) {
        $productcatall = $cache->get("select * from #_product_cat where type = ? and id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($type, $productList['id']), 'result', 7200);
    }
    ?>
    <?php /*
        <div class="row">
        <div class="col-md-3 mgb-res">
            <div class="box-sticky">
                <div class="category-box">
                    <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thể Loại</span></div>
                    <div class="section__category section__item__category mb-2 ">
                        <ul class="box_category_list">
                            <li>
                                <a href="<?= $productList['slugvi'] ?>" class="d-flex justify-content-start align-items-center <?php if ($idc ==  $value['id']) echo 'active'; ?> transition"><i class="fa-light fa-angles-right"></i><?= $productList['name' . $lang] ?> </a>
                                <ul>
                                    <?php foreach ($productcatall as $v) { ?>
                                        <li>
                                            <a href="<?= $v['slugvi'] ?>" class="d-flex justify-content-start align-items-center <?php if ($idc ==  $v['id']) echo 'active'; ?> transition"><i class="fa-light fa-angles-right"></i><?= $v['name' . $lang] ?> </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thương Hiệu</span></div>
                    <div class="section__category mb-2">
                        <ul class="box_category_list">
                            <?php foreach ($brand as $key => $value) { ?>
                                <li><a href="<?= $value['slugvi'] ?>" class="d-flex justify-content-start align-items-center"><i class="fa-light fa-angles-right"></i><?= $value['name' . $lang] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <?php foreach ($productcatall as $klist => $vlist) {
                $items = $cache->get("select * from #_product where type = ? and id_cat = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,4", array('san-pham', $vlist['id']), 'result', 7200);
            ?>
                <div class="section__item">
                    <div class="d-flex flex-item justify-content-between align-items-center">
                        <div class="title-item"><?= $vlist['name' . $lang] ?></div>
                        <div class="line"></div>
                    </div>
                    <div class="grid-product-v2">
                        <?php if (!empty($items)) {
                            foreach ($items as $k => $v) { ?>
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
                    <?php if (!empty($items)) { ?>
                        <div class="redicrect-item">
                            <a href="<?= $vlist['slugvi'] ?>">Xem Thêm </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="gr-100">
                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
            </div>
        </div>
    </div>
    */ ?>
    </div>

<script>
    if (isExist($('.owl-page'))) {
        $('.owl-page').each(function() {
            NN_FRAMEWORK.OwlData($(this));
        });
    }
</script>