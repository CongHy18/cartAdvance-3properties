<?php 
 $linkFilter = "./".@$lang_filter;

 $brands = [];
 $where2 = "";
 foreach (@$_REQUEST as $key => $value) {
     if (strpos($key, 'brand_') === 0) {
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
            $menuitem = $cache->get("select * from #_product_item where type = ? and id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham', $productCat['id']), 'result', 7200);
            ?>
            <div class="box-sticky">
                <div class="category-box">
                    <?php if (!empty($productcatsingle)) { ?>
                        <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thể Loại</span></div>
                        <div class="section__category section__item__category mb-2 ">
                            <ul class="box_category_list">
                                <li>
                                    <a href="<?= $productcatsingle['slugvi'] ?>" class="d-flex justify-content-start align-items-center <?php if ($idc ==  $value['id']) echo 'active'; ?> transition"><i class="fa-light fa-angles-right"></i><?= $productcatsingle[0]['name' . $lang] ?> </a>
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

                    <div class="title-category b-gradient"><span><i class="fas fa-bars"></i> Thương Hiệu</span></div>
                        <div class="section__category mb-2">
                            <?php include TEMPLATE . LAYOUT . "productfilter.php"; ?>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="grid-product">
                <?php if (!empty($product)) {
                    foreach ($product as $k => $v) {
                        $proSale = $func->getProSale($v['id']);
                        $v['name'] = $v['name' . $lang];
                        $v['href'] = $v[$sluglang];
                        $v['regular_price'] = $v['regular_price'];
                        $v['sale_price'] = $v['sale_price'];
                        $v['discount'] = $v['discount'];
                        $v['showCart'] = true;
                        $v['showQuickView'] = (!empty($config['LQD']['quickview']));
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
            <?php /*
            <div class="gr-100">
                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
            </div>
            */ ?>
        </div>
    </div>

</div>