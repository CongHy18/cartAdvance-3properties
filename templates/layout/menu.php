<div class="menu posion-unset">
    <ul class="menu-main posion-unset">
        <?php foreach ($splist as $klist => $vlist) {
            $spcat = $d->rawQuery("select * from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
            <li class="posion-unset">
                <a class="has-child transition posion-unset" title="<?= $vlist['name' . $lang] ?>"><?= $vlist['name' . $lang] ?></a>
                <?php if (!empty($spcat)) { ?>
                    <ul class="menu-tab row">
                        <?php foreach ($spcat as $kcat => $vcat) {
                            $spitem = $d->rawQuery("select * from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                            <li class="col-4">
                                <div class="col__redicrect d-flex align-items-center py-2">
                                    <div class="image mr-2"> <?= $func->getImage(['isLazy' => false, 'sizes' => '40x40x3', 'upload' => UPLOAD_PRODUCT_L, 'image' => $vcat['photo'], 'alt' => $vcat['name' . $lang]]) ?></div>
                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php } ?>

        <a class="hotline__menu">
            <?= $func->getImage(['class' => 'animate__tada animate__animated animate__infinite', 'size-error' => '40x40x2', 'upload' => 'assets/images/', 'image' => 'hotline.png', 'alt' => 'Hotline']) ?>
            <p class="mb-0">Hotline 24/7 </p>
            <span><?= $optsetting['hotline'] ?></span>
        </a>
    </ul>
</div>