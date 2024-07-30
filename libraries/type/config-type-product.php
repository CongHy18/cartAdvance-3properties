<?php
/* Sản phẩm */
$nametype = "san-pham";
$config['product'][$nametype]['title_main'] = "Sản Phẩm";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['cat'] = true;
$config['product'][$nametype]['item'] = true;
$config['product'][$nametype]['brand'] = true;
$config['product'][$nametype]['size'] = true;
$config['product'][$nametype]['color'] = true;
$config['product'][$nametype]['version'] = true;
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['comment'] = false;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh sản phẩm",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 1,
        "images_photo" => true,
        "cart_photo" => true,
        "avatar_photo" => true,
        "name_photo" => false,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    ),
);
$config['product'][$nametype]['code'] = false;
$config['product'][$nametype]['regular_price'] = true;
$config['product'][$nametype]['sale_price'] = true;
$config['product'][$nametype]['discount'] = true;
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['desc_cke'] = true;
$config['product'][$nametype]['promotions'] = true;
$config['product'][$nametype]['promotions_cke'] = true;
$config['product'][$nametype]['content'] = true;
$config['product'][$nametype]['content_cke'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['schema'] = true;
$config['product'][$nametype]['width'] = 415;
$config['product'][$nametype]['height'] = 415;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (List) */
$config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
$config['product'][$nametype]['images_list'] = true;
$config['product'][$nametype]['show_images_list'] = true;
$config['product'][$nametype]['images_list2'] = true;
$config['product'][$nametype]['show_images_list2'] = true;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array( "menu" => "Menu","noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['seo_list'] = true;
$config['product'][$nametype]['width_list'] = 250;
$config['product'][$nametype]['height_list'] = 250;
$config['product'][$nametype]['thumb_list'] = '100x100x1';
$config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['product'][$nametype]['width_list2'] = 1200;
$config['product'][$nametype]['height_list2'] = 450;
$config['product'][$nametype]['thumb_list2'] = '200x100x2';
$config['product'][$nametype]['img_type_list2'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (Cat) */
$config['product'][$nametype]['title_main_cat'] = "Sản phẩm cấp 2";
$config['product'][$nametype]['images_cat'] = true;
$config['product'][$nametype]['show_images_cat'] = true;
$config['product'][$nametype]['images_cat2'] = true;
$config['product'][$nametype]['show_images_cat2'] = true;
$config['product'][$nametype]['images_cat3'] = true;
$config['product'][$nametype]['show_images_cat3'] = true;
$config['product'][$nametype]['slug_cat'] = true;
$config['product'][$nametype]['check_cat'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_cat'] = true;
$config['product'][$nametype]['seo_cat'] = true;
$config['product'][$nametype]['width_cat'] = 250;
$config['product'][$nametype]['height_cat'] = 250;
$config['product'][$nametype]['thumb_cat'] = '100x100x1';
$config['product'][$nametype]['img_type_cat'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['product'][$nametype]['width_cat2'] = 1200;
$config['product'][$nametype]['height_cat2'] = 450;
$config['product'][$nametype]['thumb_cat2'] = '200x100x2';
$config['product'][$nametype]['img_type_cat2'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['product'][$nametype]['width_cat3'] = 1200;
$config['product'][$nametype]['height_cat3'] = 450;
$config['product'][$nametype]['thumb_cat3'] = '200x100x2';
$config['product'][$nametype]['img_type_cat3'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (Cat) */
$config['product'][$nametype]['title_main_item'] = "Sản phẩm cấp 3";
$config['product'][$nametype]['images_item'] = true;
$config['product'][$nametype]['show_images_item'] = true;
$config['product'][$nametype]['slug_item'] = true;
$config['product'][$nametype]['check_item'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_item'] = true;
$config['product'][$nametype]['seo_item'] = true;
$config['product'][$nametype]['width_item'] = 250;
$config['product'][$nametype]['height_item'] = 250;
$config['product'][$nametype]['thumb_item'] = '100x100x1';
$config['product'][$nametype]['img_type_item'] = '.jpg|.gif|.png|.jpeg|.gif';


/* Sản phẩm (Size) */
$config['product'][$nametype]['check_size'] = array("hienthi" => "Hiển thị");

/* Sản phẩm (Phiên bản) */
$config['product'][$nametype]['check_version'] = array("hienthi" => "Hiển thị");

/* Sản phẩm (Color) */
$config['product'][$nametype]['check_color'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['color_images'] = false;
$config['product'][$nametype]['color_code'] = true;
$config['product'][$nametype]['color_type'] = true;
$config['product'][$nametype]['width_color'] = 30;
$config['product'][$nametype]['height_color'] = 30;
$config['product'][$nametype]['thumb_color'] = '100x100x1';
$config['product'][$nametype]['img_type_color'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (Hãng) */
$config['product'][$nametype]['title_main_brand'] = "Hãng sản phẩm";
$config['product'][$nametype]['images_brand'] = false;
$config['product'][$nametype]['show_images_brand'] = false;
$config['product'][$nametype]['slug_brand'] = true;
$config['product'][$nametype]['check_brand'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['seo_brand'] = true;
$config['product'][$nametype]['width_brand'] = 150;
$config['product'][$nametype]['height_brand'] = 150;
$config['product'][$nametype]['thumb_brand'] = '100x100x1';
$config['product'][$nametype]['img_type_brand'] = '.jpg|.gif|.png|.jpeg|.gif';




/* Thư viện ảnh */
$nametype = "showroom";
$config['product'][$nametype]['title_main'] = "Showroom";
$config['product'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['link'] = true;
$config['product'][$nametype]['address'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh thư viện ảnh",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 145,
        "height_photo" => 145,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width'] = 380;
$config['product'][$nametype]['height'] = 380;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
