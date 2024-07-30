<?php /*
<div class="title-main d-flex align-items-center">
    <div class="line-text"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'line-text.png']) ?></div>
    <span><?= $rowDetail['name' . $lang] ?></span>
</div>
*/ ?>

<div class="row">
    <div class="col-md-3 col__category mgb-res">

   



        <div class="box-sticky">
            <div class="category-box">
                <?php if (!empty($productList)) {
                    $menuitem = $cache->get("select * from #_product_item where type = ? and id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham', $productCat['id']), 'result', 7200);
                ?>
                    <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thể Loại</span></div>
                    <div class="section__category section__item__category mb-2 ">
                        <ul class="box_category_list">
                            <li>
                                <a href="<?= $productcatsingle['slugvi'] ?>" class="d-flex justify-content-start align-items-center <?php if ($idc ==  $value['id']) echo 'active'; ?> transition"><i class="fa-light fa-angles-right"></i><?= $productCat['name' . $lang] ?> </a>
                                <ul>
                                    <?php foreach ($menuitem as $v) { ?>
                                        <li>
                                            <a href="<?= $v['slugvi'] ?>" class="d-flex justify-content-start align-items-center <?php if ($idc ==  $v['id']) echo 'active'; ?> transition"><i class="fa-light fa-angles-right"></i><?= $v['name' . $lang] ?> </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php } ?>

                <?php if (!empty($productBrand['id'])) { ?>
                    <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thương Hiệu</span></div>
                    <div class="section__category mb-2">
                        <ul class="box_category_list">

                            <li><a href="<?= $productBrand[$sluglang] ?>" class="d-flex justify-content-start align-items-center"><i class="fa-light fa-angles-right"></i><?= $productBrand['name' . $lang] ?></a>
                            </li>

                        </ul>
                    </div>
                <?php } ?>

            </div>
        </div>


    </div>
    <div class="col-md-9 col__detail">
        <div class="grid-pro-detail w-clear">
            <div class="row">
                <div class="left-pro-detail col-md-6 col-lg-6 mb-4">
                    <div class="left-image-detail">
                        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                            <?= $func->getImage(['isLazy' => false,  'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                        </a>
                        <?php if ($rowDetailPhoto) {
                            if (count($rowDetailPhoto) > 0) { ?>
                                <div class="gallery-thumb-pro">
                                    <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-items="screen:0|items:3|margin:15" data-nav="1" data-navcontainer=".control-pro-detail">
                                        <div>
                                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                                <?= $func->getImage(['isLazy' => false,  'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                            </a>
                                        </div>
                                        <?php foreach ($rowDetailPhoto as $v) { ?>
                                            <div>
                                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                                    <?= $func->getImage(['isLazy' => false,  'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="control-pro-detail control-owl transition"></div>
                                </div>
                        <?php }
                        } ?>
                    </div>




                </div>

                <div class="right-pro-detail col-md-6 col-lg-6 mb-0">
                    <div class="title-main text-left">
                        <span style="color:#000"><?= $rowDetail['name' . $lang] ?></span>
                    </div>

                    <ul class="attr-pro-detail">
                        <li class="w-clear price_box">
                            <?php if (isset($config['LQD']['cartadvanced']) && $config['LQD']['cartadvanced'] == false || (empty($rowColor) || empty($rowSize))) { ?>
                                <div class="attr-content-pro-detail price__detail">
                                    <?php if ($rowDetail['discount']) { ?>
                                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                                        <span class="price-old-pro-detail ml-2"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                                        <span class="price-per price-per-detail "><?= '-' . $rowDetail['discount'] . '%' ?></span>
                                    <?php } else { ?>
                                        <span class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </li>
                    </ul>

                    <ul class="attr-pro-detail">
                        <?php if (!empty($rowSize)) { ?>
                            <li class="size-block-pro-detail w-clear">
                                <label class="attr-label-pro-detail d-block"><?= kichthuoc ?>:</label>
                                <div class="attr-content-pro-detail d-block">
                                    <div class="form-row">
                                        <?php foreach ($rowSize as $k => $v) { ?>
                                            <div class="col__size col-6">
                                                <label for="size-pro-detail-<?= $v['id'] ?>" class="size-pro-detail sale-pro-detail text-decoration-none load_price <?= ($config['LQD']['cartadvanced'] == true && $k == 0) ? 'active' : '' ?>" data-idproduct="<?= $rowDetail['id'] ?>" data-type="<?= $rowDetail['type'] ?>">
                                                    <input type="radio" value="<?= $v['id'] ?>" id="size-pro-detail-<?= $v['id'] ?>" name="size-pro-detail" <?= ($config['LQD']['cartadvanced'] == true && $k == 0) ? 'checked' : '' ?>>
                                                    <?= $v['name' . $lang] ?>
                                                </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                        <?php if (!empty($rowColor)) { ?>
                            <li class="color-block-pro-detail w-clear">
                                <label class="attr-label-pro-detail d-block"><?= mausac ?>:</label>
                                <div class="attr-content-pro-detail d-block">
                                    <div class="form-row">
                                        <?php foreach ($rowColor as $k => $v) {
                                        ?>
                                            <?php if ($v['type_show'] == 1) { ?>
                                                <label for="color-pro-detail-<?= $v['id'] ?>" class=" color-pro-detail sale-pro-detail text-decoration-none load_price <?= ($config['LQD']['cartadvanced'] == true && $k == 0) ? 'active' : '' ?>" data-idproduct="<?= $rowDetail['id'] ?>" data-type="<?= $rowDetail['type'] ?>" style="background-image: url(<?= UPLOAD_COLOR_L . $v['photo'] ?>)">
                                                    <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>" name="color-pro-detail" <?= ($config['LQD']['cartadvanced'] == true && $k == 0) ? 'checked' : '' ?>>
                                                </label>
                                            <?php } else { ?>
                                                <div class="col__color col-6">
                                                    <div class="items__color d-flex align-items-center">
                                                        <label for="color-pro-detail-<?= $v['id'] ?>" class="sale-pro-detail mb-0 color-pro-detail text-decoration-none load_price <?= ($config['LQD']['cartadvanced'] == true && $k == 0) ? 'active' : '' ?>" data-idproduct="<?= $rowDetail['id'] ?>" data-type="<?= $rowDetail['type'] ?>" style="background-color: #<?= $v['color'] ?>">
                                                            <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>" name="color-pro-detail" <?= ($config['LQD']['cartadvanced'] == true && $k == 0) ? 'checked' : '' ?>>
                                                        </label>
                                                        <div class="name__color"><?= $v['name' . $lang] ?></div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>

                                </div>
                            </li>
                        <?php } ?>


                        <?php if ($deviceType == 'mobile') { ?>
                            <?php if (!empty($rowDetail['promotions' . $lang])) { ?>
                                <div class="promotions-pro-detail text-left mb-3">
                                    <?= $func->decodeHtmlChars($rowDetail['promotions' . $lang]) ?>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <div class="desc-pro-detail"><?= $func->decodeHtmlChars($rowDetail['desc' . $lang]) ?></div>


                        <?php /*
                        <?php if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) { ?>
                            <li class="w-clear">
                                <div class="d-flex justify-content-start align-items-center flex-wrap quantity-detail">
                                    <div class="attr-content-pro-detail d-block">
                                        <div class="quantity-pro-detail">
                                            <span class="quantity-minus-pro-detail">-</span>
                                            <input type="number" class="qty-pro" min="1" value="1" readonly />
                                            <span class="quantity-plus-pro-detail">+</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        */ ?>


                    </ul>


                    <?php /*

                    <?php if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) { ?>
                        <div class="cart-pro-detail d-flex justify-content-between align-items-center flex-wrap">
                            <a class="btn btn-dark addcart" data-id="<?= $rowDetail['id'] ?>" data-action="buynow">
                                <span>Đặt Hàng Ngay</span>
                            </a>
                            <a class="btn btn-white addcart" data-id="<?= $rowDetail['id'] ?>" data-action="addnow">
                                <span>Thêm vào giỏ</span>
                            </a>
                        </div>
                    <?php } ?>
                        */ ?>

                </div>
            </div>

            <?php if ($deviceType == 'computer') { ?>
                <?php if (!empty($rowDetail['promotions' . $lang])) { ?>
                    <div class="promotions-pro-detail text-left mb-3">
                        <?= $func->decodeHtmlChars($rowDetail['promotions' . $lang]) ?>
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="tags-pro-detail w-clear">
                <?php if (!empty($rowTags)) {
                    foreach ($rowTags as $v) { ?>
                        <a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><i class="fas fa-tags"></i><?= $v['name' . $lang] ?></a>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>


<?php if (!empty($rowDetail['content' . $lang])) { ?>
    <div class="tabs-pro-detail mt-0">

        <div class="tab-content pt-4 pb-4 pt-0" id="tabsProDetailContent">
            <div class="tab-pane fade show active w-pro-detail" id="info-pro-detail" role="tabpanel">
                <?php /*Toc*/ if ((isset($config['LQD']['toc']) && $config['LQD']['toc'] == true) && ($config['LQD']['tocvip'] == false)) { ?>
                    <div class="meta-toc">
                        <div class="box-readmore">
                            <ul class="toc-list"></ul>
                        </div>
                    </div>
                <?php } ?>

                <div id="ftwp-postcontent">
                    <?php /*Toc vip*/ if (isset($config['LQD']['tocvip']) && $config['LQD']['tocvip'] == true) { ?>
                        <div id="ftwp-container-outer" class="ftwp-in-post ftwp-float-none" style="height: auto;">
                            <div id="ftwp-container" class="ftwp-wrap ftwp-middle-right ftwp-minimize">
                                <button type="button" id="ftwp-trigger" class="ftwp-shape-round ftwp-border-medium"><span class="ftwp-trigger-icon ftwp-icon-menu"></span></button>
                                <nav id="ftwp-contents" class="ftwp-shape-round ftwp-border-thin" data-colexp="collapse" style="height: auto;"> </nav>
                            </div>
                        </div>
                    <?php } ?>
                    <div id="toc-content" class="img-auto <?= (isset($config['LQD']['showcontent']) && $config['LQD']['showcontent'] == true) ? 'content_product' : '' ?>  "><?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?></div>
                </div>

                <?php /*Xem thêm nội dung*/ if (isset($config['LQD']['showcontent']) && $config['LQD']['showcontent'] == true) { ?>
                    <div class="show-more btn_read text-center add-none">
                        <a class="btn btn-primary btn-sm btn-click">
                            <span class="d-block">Xem thêm <i class="fa-regular fa-circle-chevron-down"></i></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (empty($quickview)) { ?>

    <div class="title-main"><span><?= sanphamcungloai ?></span></div>
    <div class="content-main">
        <div class="grid-product">
            <?php /*Giao diện thay đổi trong libraries/sample/product*/ ?>
            <?php if (!empty($product)) {
                foreach ($product as $k => $v) {
                    $proSale = $func->getProSale($v['id']);
                    $v['name'] = $v['name' . $lang];
                    $v['href'] = $v[$sluglang];
                    $v['regular_price'] = ($proSale['regular_price'] > 0) ? $proSale['regular_price'] : $v['regular_price'];
                    $v['sale_price'] = ($proSale['regular_price'] > 0) ? $proSale['sale_price'] : $v['sale_price'];
                    $v['discount'] = ($proSale['regular_price'] > 0) ? $proSale['discount'] : $v['discount'];
                    $v['showCart'] = true;
                    /* Lấy màu */
                    $productColor = $d->rawQuery("select id_color from #_product_sale where id_parent = ?", array($v['id']));
                    $productColor = (!empty($productColor)) ? $func->joinCols($productColor, 'id_color') : array();
                    $v['rowColor'] = [];
                    if (!empty($productColor)) {
                        $v['rowColor'] = $d->rawQuery("select id from #_color where type='" . $type . "' and id in ($productColor) and find_in_set('hienthi',status) order by numb,id desc");
                    }
                    /* Lấy size */
                    $productSize = $d->rawQuery("select id_size from #_product_sale where id_parent = ?", array($v['id']));
                    $productSize = (!empty($productSize)) ? $func->joinCols($productSize, 'id_size') : array();
                    $v['rowSize'] = [];
                    if (!empty($productSize)) {
                        $v['rowSize'] = $d->rawQuery("select id, name$lang from #_size where type='" . $type . "' and id in ($productSize) and find_in_set('hienthi',status) order by numb,id desc");
                    }
            ?>
                    <?= $func->getProductItem($v) ?>
                <?php }
            } else { ?>
                <div class="gr-100">
                    <div class="alert alert-warning w-100" role="alert">
                        <strong><?= khongtimthayketqua ?></strong>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="gr-100">
            <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
        </div>
    </div>
<?php } ?>