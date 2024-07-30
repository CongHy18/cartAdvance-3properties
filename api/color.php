<?php
include "config.php";

$id_color = (!empty($_POST['id_color'])) ? htmlspecialchars($_POST['id_color']) : 0;
$id_size = (!empty($_POST['id_size'])) ? htmlspecialchars($_POST['id_size']) : 0;
$id_version = (!empty($_POST['id_version'])) ? htmlspecialchars($_POST['id_version']) : 0;
$id_pro = (!empty($_POST['id_pro'])) ? htmlspecialchars($_POST['id_pro']) : 0;
$type = (isset($_POST['type'])) ? $_POST['type'] : '';


$rowDetailPhoto = $d->rawQuery("select photo, id_parent, id from #_gallery where id_color = ? and id_size = ? and id_version = ? and id_parent = ? and com = ? and type = ? and kind = ? and val = ?", array($id_color, $id_size, $id_version, $id_pro, 'product', $type, 'man', $type));
$rowDetail = $d->rawQueryOne("select * from #_product where id = ? and type = ? limit 0,1", array($id_pro, $type));

if (!empty($rowDetailPhoto)) {
?>
    <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= UPLOAD_PRODUCT_L . $rowDetailPhoto[0]['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
        <?= $func->getImage(['isLazy' => false, 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetailPhoto[0]['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
    </a>
    <div class="gallery-thumb-pro">
        <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-items="screen:0|items:3|margin:15" data-nav="1" data-navcontainer=".control-pro-detail">
            <?php foreach ($rowDetailPhoto as $v) { ?>
                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                    <?= $func->getImage(['isLazy' => false, 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                </a>
            <?php } ?>
        </div>
        <div class="control-pro-detail control-owl transition"></div>
    </div>
<?php
}
?>