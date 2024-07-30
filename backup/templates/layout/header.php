
<div class="header">
    <div class="header__top">
        <div class="wrap-content">
            <div class="row">
                <div class="col-md-7 col__header__left">
                    <div class="info__header notify__text d-flex justify-content-start align-items-center">
                        <div class="icon"><?= $func->getImage(['upload' => 'assets/images/set/icon/', 'image' => 'ring.png']) ?></div> <span class=""><?= $slogan['name' . $lang] ?></span>
                    </div>
                </div>

                <div class="col-md-5 col__header__right">
                    <div class="info__header d-flex justify-content-end align-items-center">
                        <div class="link__redirect d-flex justify-content-center align-items-center">
                            <span class="icon"><?= $func->getImage(['upload' => 'assets/images/set/icon/', 'image' => 'location.png']) ?></span> <a href="showroom" class="color__hover">Showroom</a>
                        </div>
                        <div class="link__redirect d-flex justify-content-center align-items-center">
                            <span class="icon"><?= $func->getImage(['upload' => 'assets/images/set/icon/', 'image' => 'news.png']) ?></span> <a href="tin-tuc" class="color__hover">Tin tức</a>
                        </div>
                        <div class="link__redirect d-flex justify-content-center align-items-center">
                            <span class="icon"><?= $func->getImage(['upload' => 'assets/images/set/icon/', 'image' => 'contact.png']) ?></span> <a href="lien-he" class="color__hover">Liên hệ</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="header__bottom">
        <div class="wrap-content">
            <div class="d-flex align-items-center justify-content-between flex_menu">
                <div class="col__logo">
                    <a class="logo__header peShiner" href=""><?= $func->getImage(['upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?></a>
                </div>
                <div class="col__menu">
                    <div class="col__top d-flex justify-content-between align-items-center">
                        <div class="search w-clear">
                            <input type="text" id="keyword" placeholder="Bạn cần tìm sản phẩm nào ?" onkeypress="doEnter(event,'keyword');" />
                            <p onclick="onSearch('keyword');">TÌM KIẾM</p>
                        </div>
                        <a href="da-xem" class="watched">
                            <div class="icon"><?= $func->getImage(['upload' => 'assets/images/set/', 'image' => 'wireframe.png']) ?></div>
                            Đã xem
                        </a>
                    </div>
                        
                    <?php  include TEMPLATE . LAYOUT . "menu.php";  ?>
                </div>
            </div>
        </div>
    </div>

</div>