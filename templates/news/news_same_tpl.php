<div class="title-main">
    <span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span>
    <div class="animate-border m-auto"></div>
</div>
<div class="content-main row">
    <?php if (!empty($news)) {
        foreach ($news as $k => $v) { ?>
            <div class="news col-md-3">
                    <a class="news-image" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                        <span class="scale-img">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '320x240x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </span>
                    </a>
                    <div class="news--info mt-3 text-center">
                        <h3 class="news-name">
                            <a class="text-decoration-none text-split transition up bold" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </h3>
                        <div class="news-desc text-split"><?= $v['desc' . $lang] ?></div>
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