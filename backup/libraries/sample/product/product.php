<div class="product">
    <div class="box-product text-decoration-none">
        <div class="position-relative overflow-hidden">
            <a class="pic-product" href="<?= $params['product']['href'] ?>" title="<?= $params['product']['name'] ?>">
                <?= $this->getImage(['isWebp' => false, 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $params['product']['photo'], 'alt' => $params['product']['name']]) ?>
            </a>
        </div>

        <div class="info-product">
            <div class="name-product"><a class="text-split regular color__hover" href="<?= $params['product']['href'] ?>" title="<?= $params['product']['name'] ?>"><?= $params['product']['name'] ?></a></div>
            <div class="price-product d-flex align-items-center">
                <div class="price-left">
                    <?php if ($params['product']['discount']) { ?>
                        <div class="price-old"><?= $this->formatMoney($params['product']['regular_price']) ?></div>
                        <div class="price-new"><?= $this->formatMoney($params['product']['sale_price']) ?></div>
                    <?php } else { ?>
                        <div class="price-new"><?= ($params['product']['regular_price']) ? $this->formatMoney($params['product']['regular_price']) : lienhe ?></div>
                    <?php } ?>
                </div>
                <?php if ($params['product']['discount']) { ?>
                    <div class="price-right">
                        <span class="price-per"><?= '-' . $params['product']['discount'] . '%' ?></span>
                    </div>
                <?php } ?>
            </div>
            <?php if (!empty($params['product']['showCart'])) { ?>
                <p class="cart-product w-clear text-center mt-15">
                    <span class="btn-add cart-add addcart" data-id="<?= $params['product']['id'] ?>" data-action="addnow">Thêm vào giỏ</span>
                </p>
            <?php } ?>
        </div>
    </div>
</div>