<?php
include "config.php";
// Lấy tham số từ yêu cầu AJAX
$id_parent = (isset($_POST['id_parent'])) ? $_POST['id_parent'] : 0;
$type = (isset($_POST['type'])) ? $_POST['type'] : '';
$ColorList = (isset($_POST['ColorList'])) ? $_POST['ColorList'] : '';
$SizeList = (isset($_POST['SizeList'])) ? $_POST['SizeList'] : '';
$VersionList = (isset($_POST['VersionList'])) ? $_POST['VersionList'] : '';
$listColor = explode(',', $ColorList);
$listSize = explode(',', $SizeList);
$listVersion = explode(',', $VersionList);



$items = [];

if (!empty($listColor) || !empty($listSize) || !empty($listVersion)) {
    foreach ($listColor ?? [null] as $color) {
        foreach ($listSize ?? [null] as $size) {
            foreach ($listVersion ?? [null] as $version) {
                $item = [];
                if ($color !== null) $item['idColor'] = $color;
                if ($size !== null) $item['idSize'] = $size;
                if ($version !== null) $item['idVersion'] = $version;
                $items[] = $item;
            }
        }
    }
}



/*
$items = [];
if (!empty($listColor) && !empty($listSize) && !empty($listVersion)) {
    foreach ($listColor as $color) {
        foreach ($listSize as $size) {
            foreach ($listVersion as $version) {
                $items[] = ['idColor' => $color, 'idSize' => $size, 'idVersion' => $version];
            }
        }
    }
}
elseif (!empty($listColor) && !empty($listSize)) {
    foreach ($listColor as $color) {
        foreach ($listSize as $size) {
            $items[] = ['idColor' => $color, 'idSize' => $size];
        }
    }
}

elseif (!empty($listColor) && !empty($listVersion)) {
    foreach ($listColor as $color) {
        foreach ($listVersion as $version) {
            $items[] = ['idColor' => $color, 'idVersion' => $version];
        }
    }
}

elseif (!empty($listSize) && !empty($listVersion)) {
    foreach ($listSize as $size) {
        foreach ($listVersion as $version) {
            $items[] = ['idSize' => $size, 'idVersion' => $version];
        }
    }
}


elseif (!empty($listColor)) {
    foreach ($listColor as $color) {
        $items[] = ['idColor' => $color];
    }
}


elseif (!empty($listSize)) {
    foreach ($listSize as $size) {
        $items[] = ['idSize' => $size];
    }
}


elseif (!empty($listVersion)) {
    foreach ($listVersion as $version) {
        $items[] = ['idVersion' => $version];
    }
}
*/




$response = [
    "check" => (empty($items)) ? "null" : "not_null",
    "count" => count($items),
    "items" => []
];

if (!empty($items)) {
    foreach ($items as $k => $v) {
        $color_detail = $d->rawQueryOne("select id, namevi from #_color where type = ? and id = ? limit 0,1", array($type, $v['idColor']));
        $size_detail = $d->rawQueryOne("select id, namevi from #_size where type = ? and id = ? limit 0,1", array($type, $v['idSize']));
        $version_detail = $d->rawQueryOne("select id, namevi from #_version where type = ? and id = ? limit 0,1", array($type, $v['idVersion']));
        $pro_sale_detail = $d->rawQueryOne("select regular_price,sale_price,discount from #_product_sale where id_parent = ? and id_color = ? and id_size = ? and id_version = ? limit 0,1", array($id_parent, $v['idColor'], $v['idSize'], $v['idVersion']));
        $v['nameColor'] = $color_detail['namevi'];
        $v['nameSize'] = $size_detail['namevi'];
        $v['nameVersion'] = $version_detail['namevi'];
        $v['k'] = $k;
        $v['regular_price_new'] = $pro_sale_detail['regular_price'];
        $v['sale_price_new'] = $pro_sale_detail['sale_price'];
        $v['discount_new'] = $pro_sale_detail['discount'];
        $itemHtml = $func->getProductSale($v);
        $response["items"][] = $itemHtml;
    }
}



echo json_encode($response);
