<?php /* */ ?>


    <?php if (!$func->isGoogleSpeed()) { ?>
        <?php if (count($tiktok)) { ?>
            <div class="wrap__tiktok py50">
                <div class="wrap-content">
                    <div class="title-main d-flex align-items-center">
                        <div class="line-text"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'line-text.png']) ?></div>
                        <span>KÊNH TIKTOK CHÍNH THỨC, VỚI HÀNG TRĂM COMBO ƯU ĐÃI & REVIEW CHI TIẾT</span>
                    </div>
                    <div class="section__tiktok position-relative">
                        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:1|margin:10,screen:575|items:1|margin:10,screen:767|items:2|margin:20,screen:991|items:3|margin:20,screen:1199|items:4|margin:15" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-tiktok">
                            <?php foreach ($tiktok as $v) { ?>
                                <div class="items__tiktok">
                                    <blockquote class="tiktok-embed" cite="<?= $v['name' . $lang] ?>" data-video-id="<?= $func->getTiktok($v['link']) ?>" style="width: 100%;">
                                        <section> </section>
                                    </blockquote>
                                    <script async src="https://www.tiktok.com/embed.js"></script>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="control-tiktok control-owl transition"></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

    <div class="section__product py50">
        <?php foreach ($splistnb as $klist => $vlist) {
            $spcat = $func->getProductCat($vlist['id']); ?>
            <div class="wrap__product position-relative">
                <div class="wrap-content">
                    <div class="title__list d-flex align-items-center justify-content-between">
                        <div class="title-main d-flex align-items-center">
                            <div class="line-text"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'line-text.png']) ?></div>
                            <span><?= $vlist['name' . $lang] ?></span>
                        </div>
                        <a href="<?= $vlist['slug' . $lang] ?>" class="watch__all color__hover">Xem tất cả</a>
                    </div>
                    <div class="items__cat ">
                        <?php if (!empty($spcat)) { ?>
                            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:10,screen:425|items:3|margin:10,screen:575|items:3|margin:20,screen:767|items:4|margin:30,screen:991|items:5|margin:20,screen:1199|items:8|margin:20" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-cat-<?=$vlist['id']?>">
                                <?php foreach ($spcat as $v) { ?>
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
                        <?php } else { ?>
                            <div class="alert alert-warning w-100 text-center" role="alert">
                                <strong><?= sanphamdangcapnhat ?>!</strong>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="control-cat control-cat-<?=$vlist['id']?> control-owl transition"></div>
            </div>
        <?php } ?>
    </div>

    <?php if (!$func->isGoogleSpeed()) { ?>

        <?php if (count($banner)) { ?>
            <div class="wrap__banner">
                <div class="wrap-content">
                    <?php if ($deviceType == 'computer') { ?>
                        <div class="section__banner">
                            <div class="image__banner">
                                <a href="<?= $banner[0]['link'] ?>" target="blank" class="scale-img hover_xam">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '590x590x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner[0]['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            </div>
                            <div class="image__banner">
                                <a href="<?= $banner[1]['link'] ?>" target="blank" class="scale-img hover_xam">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '590x590x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner[1]['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:20,screen:991|items:3|margin:20,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-news">
                            <?php foreach ($banner as $v) { ?>
                                <div class="image__banner">
                                    <a href="<?= $v['link'] ?>" target="blank" class="scale-img hover_xam">
                                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '590x270x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <div class="wrap__combo py50">
            <?php foreach ($combolist as $klist => $vlist) {
                $sp = $func->getProduct($vlist['id']); ?>
                <div class="wrap-content position-relative">
                    <div class="title__list d-flex align-items-center justify-content-between">
                        <div class="title-main d-flex align-items-center">
                            <div class="line-text"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'line-text.png']) ?></div>
                            <span><?= $vlist['name' . $lang] ?></span>
                        </div>
                        <div class="text-right">
                            <a href="<?= $vlist['slug' . $lang] ?>" class="watch__all ">XEM TẤT CẢ</a>
                        </div>
                    </div>
                    <div class="items__cat ">
                        <?php if (!empty($sp)) { ?>
                            <div class="owl-page  owl-product owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:3|margin:30,screen:991|items:4|margin:20,screen:1199|items:5|margin:20" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-combo">
                                <?php foreach ($sp as $v) { ?>
                                    <div class="product">
                                        <div class="box-product text-decoration-none">
                                            <div class="position-relative overflow-hidden">
                                                <a class="pic-product" href="<?= $v['href'] ?>" title="<?= $v['name' . $lang] ?>">
                                                    <?= $func->getImage(['isWebp' => false, 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                                </a>
                                            </div>

                                            <div class="info-product">
                                                <div class="name-product"><a class="text-split regular color__hover" href="<?= $v['href'] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></div>
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
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-warning w-100 text-center" role="alert">
                                <strong><?= sanphamdangcapnhat ?>!</strong>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="control-cat control-combo control-owl transition"></div>
                </div>
            <?php } ?>
        </div>

        <?php if (count($banner2)) { ?>
            <div class="wrap__banner">
                <div class="wrap-content">
                    <?php if ($deviceType == 'computer') { ?>
                        <div class="section__banner">
                            <div class="image__banner">
                                <a href="<?= $banner2[0]['link'] ?>" target="blank" class="scale-img hover_xam">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '590x590x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner2[0]['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            </div>
                            <div class="image__banner">
                                <a href="<?= $banner2[1]['link'] ?>" target="blank" class="scale-img hover_xam">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '590x590x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner2[1]['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:20,screen:991|items:3|margin:20,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-news">
                            <?php foreach ($banner2 as $v) { ?>
                                <div class="image__banner">
                                    <a href="<?= $v['link'] ?>" target="blank" class="scale-img hover_xam">
                                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '590x270x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <?php if (count($showroom)) { ?>
            <div class="wrap__showroom py50">
                <div class="wrap-content">
                    <div class="section__showroom">
                        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:0,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:20,screen:991|items:3|margin:20,screen:1199|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-news">
                            <?php foreach ($showroom as $v) {
                                $gallery = $cache->get("select name$lang,photo,id_parent from #_gallery where type = ? and id_parent = ? and find_in_set('hienthi',status) order by numb,id desc ", array('showroom', $v['id']), 'result', 7200); ?>
                                <div class="items-showroom">
                                    <div class="name__showroom"><?= $v['name' . $lang] ?></div>
                                    <div class="address__showroom"><?= $v['address'] ?></div>
                                    <div class="inner__showroom">
                                        <div class="image__showroom d-block scale-img hover_xam" data-fancybox="img-<?= $v['id'] ?>" href="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" target="_blank">
                                            <?= $func->getImage(['isLazy' => false, 'class' => 'w-100', 'sizes' => '380x380x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                        </div>
                                        <div class="owl-page owl-gallery owl-carousel owl-theme" data-items="screen:0|items:2|margin:5,screen:425|items:2|margin:5,screen:575|items:2|margin:5,screen:767|items:3|margin:5,screen:991|items:4|margin:5,screen:1199|items:5|margin:5" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-news">
                                            <?php foreach ($gallery as $key => $value) { ?>
                                                <div class="gallery__showroom">
                                                    <a class="image__gallery__showroom scale-img hover_xam" data-fancybox="img-<?= $v['id'] ?>" href="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" target="_blank">
                                                        <?= $func->getImage(['isLazy' => false, 'class' => 'w-100', 'sizes' => '70x75x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $value['photo'], 'alt' => $value['name' . $lang]]) ?>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    <?php } ?>
