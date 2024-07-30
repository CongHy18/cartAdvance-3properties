<div class="title-main"><span><?= $titleMain ?></span>
    <div class="animate-border m-auto"></div>
</div>
<div class="content-main form-row">
    <?php if (!empty($product)) {
        foreach ($product as $k => $v) {
            $gallery = $cache->get("select name$lang,photo,id_parent from #_gallery where type = ? and id_parent = ? and find_in_set('hienthi',status) order by numb,id desc ", array('showroom', $v['id']), 'result', 7200); ?>
            <div class="album col-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                <div class="items-showroom">
                    <div class="name__showroom"><?= $v['name' . $lang] ?></div>
                    <div class="address__showroom"><?= $v['address'] ?></div>
                    <div class="inner__showroom">
                        <div class="image__showroom d-block scale-img hover_xam" data-fancybox="img-<?= $v['id'] ?>" href="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" target="_blank">
                            <?= $func->getImage(['isLazy' => false, 'class' => 'w-100', 'sizes' => '380x380x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                        <div class="owl-page owl-gallery owl-carousel owl-theme" data-items="screen:0|items:2|margin:5,screen:425|items:2|margin:5,screen:575|items:2|margin:5,screen:767|items:3|margin:5,screen:991|items:4|margin:5,screen:1199|items:5|margin:5" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="1500" data-autoplaytimeout="3500" data-dots="0" data-nav="1" data-navcontainer=".control-news">
                            <?php foreach ($gallery as $key => $value) { ?>
                                <div class="gallery__showroom">
                                    <a class="image__gallery__showroom scale-img hover_xam" data-fancybox="img-<?= $v['id'] ?>" href="<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" target="_blank">
                                        <?= $func->getImage(['isLazy' => false, 'class' => 'w-100', 'sizes' => '70x75x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $value['photo'], 'alt' => $value['name' . $lang]]) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="text-center btn-maps">
                        <a href="<?= $v['link'] ?>" class="btn-custom" target="_blank">Chỉ đường</a>
                    </div>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>