<div class="box-sticky sticky-news">
    <div class="category-box">
        <div class="title-category b-gradient"><span>Bài Viết Nổi Bật</span></div>
        <ul class="box_category_list">
            <?php foreach ($newsnb as $key => $value) : ?>
                <li class="d-flex justify-content-start align-items-center">
                    <span class="numb"> <?php if ($key < 9) {
                                            echo ('0' . $key + 1);
                                        } else {
                                            echo  $key + 1;
                                        } ?></span>
                    <a href="<?= $value['slugvi'] ?>" class="text-split"><?= $value['name' . $lang] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>