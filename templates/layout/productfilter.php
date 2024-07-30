<?php 
    $linkFilter = "./".@$lang_filter;
    $khoanggia = $cache->get("select price_from, price_to, name$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('khoang-gia'), 'result', 7200);
?>
<div class="menu_box">
    <div class="menu_box_ul mt-2">
        <form class="form-filter mgb30" method="post" action="" enctype="multipart/form-data">
            <?php if(!empty($brand)){ ?>
            <div class="filter-brand">
                <?php foreach ($brand as $k => $v) { ?>
                <label class="container"><?=$v['name'.$lang]?><input type="checkbox" name="brand-<?=$v['id']?>"
                        value="<?=$v['id']?>"
                        <?= (isset($_REQUEST[$v['id']]) && ($v['id'] == $_REQUEST['brand-'.$v['id']])) ? "checked" : '' ?>>
                    <span class="checkmark"></span>
                </label>
                <?php }?>
            </div>
            <?php }?>
        </form>
    </div>
</div>

<style>
    .container{display:block;position:relative;padding-left:25px;margin-bottom:12px;cursor:pointer;-moz-user-select:none;-ms-user-select:none;user-select:none;font-family: var(--font-medium);font-size: 14px; color: #666;}
    .container:hover{color: #fd0000;}
    .container input{position:absolute;opacity:0;cursor:pointer}
    .container input:checked~.checkmark{background-color:#fff}
    .container input:checked~.checkmark:after{display:block}
    .checkmark{position:absolute;top:50%;left:0;height:20px;width:20px;border:none;border-radius:0;transform:translateY(-50%)}
    .checkmark:after{content:"";position:absolute;display:none}
    .container .checkmark::after{background:url(./assets/images/tick.png)!important;background-size:100% 100%!important;width:100%;height:100%}
    .title-filter{font-family:var(--f-bold);font-size:22px;color:var(--color-main)}
    .name-filter{font-family:var(--f-bold);background-color:#333;display:block;padding:8px 15px}
    .btn-fil i{font-size:20px;color:var(--color-main)}
</style>
