<div class="menu-res">
    <div class="d-flex justify-content-between align-items-center menu__bar__top">
        <a id="hamburger" class="mmenu-menu-mobile" href="#menu" title="Menu"><span></span></a>
        <div class="logos-menu text-center">
            <a class="logo-menu" href="">
                <?= $func->getImage(['sizes' => '330x70x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a>
        </div>
        <a class="cart-menu text-decoration-none" href="gio-hang" title="Giỏ hàng">
            <i class="fa-regular fa-bag-shopping"></i>
            <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
        </a>
    </div>
    <div class="menu-bar-res">
        <div class="search search-res-w100 w-clear">
            <input type="text" id="keyword-res" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword-res');" />
            <p onclick="onSearch('keyword-res');">Tìm Kiếm</p>
        </div>
        <a href="da-xem" class="watched">
            <div class="icon"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'wireframe.png']) ?></div>
            Đã xem
        </a>
    </div>
    <div class="opacity-menu"></div>
    <div class="mmenu-fixwidth">
        <div class="section wrap-menu">
            <a class="logo-menu my-2 mx-auto" href="">
                <?= $func->getImage(['sizes' => '330x70x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a>
            <nav class="nav-menu">
                <ul>
                    <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>

                    <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>

                    <li>
                        <a class="has-child <?php if ($com == 'san-pham') echo 'active'; ?> transition" title="<?= sanpham ?>"><?= sanpham ?></a>
                        <?php if (count($splistall)) { ?>
                            <span class="btn-dropdown-menu "></span>
                            <ul class="none">
                                <?php foreach ($splistall as $klist => $vlist) {
                                    $spcat = $d->rawQuery("select * from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                    <li>
                                        <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>"><?= $vlist['name' . $lang] ?></a>
                                        <?php if (!empty($spcat)) { ?>
                                            <span class="btn-dropdown-menu "></span>
                                            <ul class="none">
                                                <?php foreach ($spcat as $kcat => $vcat) {
                                                    $spitem = $d->rawQuery("select * from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                    <li class="d-flex align-items-center box__cat__mmenu justify-content-between">
                                                        <div class="image px-2 py-2 pr-0"> <?= $func->getImage(['class' => 'lazy', 'sizes' => '40x40x3', 'upload' => UPLOAD_PRODUCT_L, 'image' => $vcat['photo'], 'alt' => $vcat['name' . $lang]]) ?></div>
                                                        <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>


                    <li><a class="<?php if ($com == 'showroom') echo 'active'; ?> transition" href="showroom" title="Showroom">Showroom</a></li>

                    <li><a class="<?php if ($com == 'chi-nhanh') echo 'active'; ?> transition" href="chi-nhanh" title="Chi nhánh">Chi nhánh</a></li>

                    <li><a class="<?php if ($com == 'bang-bao-gia') echo 'active'; ?> transition" href="bang-bao-gia" title="Bảng báo giá">Bảng báo giá</a></li>

                    <li><a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin tức</a>
                    </li>

                    <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>



<?php /*?>
Thêm none vào class ul
<?php */ ?>