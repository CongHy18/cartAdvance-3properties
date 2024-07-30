<?php if (!$func->isGoogleSpeed()) { ?>
    <div class="footer">
        <div class="footer__article">
            <div class="wrap-content">
                <div class="row justify-content-between">
                    <div class="footer__news col-sm-3 mgb-res">
                        <a class="logo__footer peShiner" href=""><?= $func->getImage(['upload' => UPLOAD_PHOTO_L, 'image' => $logo_ft['photo'], 'alt' => $setting['name' . $lang]]) ?></a>
                        <ul class="footer__ul mt-3">
                            <li><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                            <li><a href="chi-nhanh" title="Chi nhánh">Chi nhánh</a></li>
                            <li><a href="bang-bao-gia" title="Bảng báo giá">Bảng báo giá</a></li>
                        </ul>
                    </div>
                    <div class="footer__news col-sm-4 mgb-res">
                        <h2 class="footer__title up"><?= $footer['name' . $lang] ?></h2>
                        <div class="footer__info"><?= $func->decodeHtmlChars($footer['content' . $lang]) ?></div>
                        <ul class="social__footer d-flex align-items-center justify-content-center mb-0 list-unstyled p-0">
                            <?php foreach ($social as $k => $v) { ?>
                                <li class="d-flex align-items-center justify-content-center align-top mr-2">
                                    <a href="<?= $v['link'] ?>" target="_blank" class="hvr-float-shadow">
                                        <?= $func->getImage(['sizes' => '20x20x3', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="footer__news col-sm-2 mgb-res">
                        <h2 class="footer__title up">CHÍNH SÁCH</h2>
                        <ul class="footer__ul">
                            <?php foreach ($policy as $v) { ?>
                                <li><a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="footer__news col-sm-3">
                        <h2 class="footer__title up">fanpage</h2>
                        <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
                    </div>
                </div>
                <div class="social__redicrect d-flex justify-content-center align-items-center">
                    <a href="<?= $optsetting['tiktok'] ?>" target="_blank">
                        <?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'tiktok.png']) ?>
                    </a>
                    <a href="<?= $optsetting['youtube'] ?>" class="mx-4" target="_blank">
                        <?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'youtube.png']) ?>
                    </a>
                    <a href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>" target="_blank">
                        <?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'zalo.png']) ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__powered">
            <div class="wrap-content text-center">
                <div class="footer__copyright">© Copyright <?= $setting['name' . $lang] ?>. Designed by Nina</div>
            </div>
        </div>
    </div>
    <?php /*
    <?php if  (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) {
        if ($com != 'gio-hang') { ?>
            <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
                <i class="fa-regular fa-cart-plus"></i>
                <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
            </a>
    <?php } } ?>
    */ ?>
    <div class="scrollToTop cursor-pointer active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 0;"></path>
        </svg>
    </div>

<?php } ?>