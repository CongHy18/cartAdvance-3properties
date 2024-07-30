<?php
if (!defined('SOURCES')) die("Error");

$gioithieu = $cache->get("select name$lang, desc$lang, photo from #_static where type = ? limit 0,1", array('gioi-thieu'), 'fetch', 7200);
$slider = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);
$brand = $cache->get("select name$lang, slugvi, slugen, id, photo from #_product_brand where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);
$tiktok = $cache->get("select * from #_news where type = ? and find_in_set('hienthi',status)", array('tiktok'), 'result', 7200);
$showroom = $cache->get("select * from #_product where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('showroom'), 'result', 7200);
$banner = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('banner'), 'result', 7200);
$banner2 = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('banner2'), 'result', 7200);

/* SEO */
$seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
if (!empty($seoDB['title' . $seolang])) $seo->set('h1', $seoDB['title' . $seolang]);
if (!empty($seoDB['title' . $seolang])) $seo->set('title', $seoDB['title' . $seolang]);
if (!empty($seoDB['keywords' . $seolang])) $seo->set('keywords', $seoDB['keywords' . $seolang]);
if (!empty($seoDB['description' . $seolang])) $seo->set('description', $seoDB['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($logo['options'])) ? json_decode($logo['options'], true) : null;
if (empty($imgJson) || ($imgJson['p'] != $logo['photo'])) {
    $imgJson = $func->getImgSize($logo['photo'], UPLOAD_PHOTO_L . $logo['photo']);
    $seo->updateSeoDB(json_encode($imgJson), 'photo', $logo['id']);
}
if (!empty($imgJson)) {
    $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_PHOTO_L . $logo['photo']);
    $seo->set('photo:width', $imgJson['w']);
    $seo->set('photo:height', $imgJson['h']);
    $seo->set('photo:type', $imgJson['m']);
}
