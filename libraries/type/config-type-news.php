<?php
/* Chính sách */
$nametype = "tiktok";
$config['news'][$nametype]['title_main'] = "Tiktok";
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['link'] = true;

/* Tin tức */
$nametype = "tin-tuc";
$config['news'][$nametype]['title_main'] = "Tin tức";
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['tags'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật","hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['file'] = false;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['width'] = 340;
$config['news'][$nametype]['height'] = 255;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['news'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';


/* Chính sách */
$nametype = "chinh-sach";
$config['news'][$nametype]['title_main'] = "Chính sách";
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['schema'] = true;


if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) {
    /* Hình thức thanh toán */
    $nametype = "hinh-thuc-thanh-toan";
    $config['news']['hinh-thuc-thanh-toan']['title_main'] = "Hình thức thanh toán";
    $config['news']['hinh-thuc-thanh-toan']['check'] = array("hienthi" => "Hiển thị");
    $config['news']['hinh-thuc-thanh-toan']['copy'] = true;
    $config['news']['hinh-thuc-thanh-toan']['desc'] = true;
}

/* Quản lý mục (Không cấp) */
if (isset($config['news'])) {
    foreach ($config['news'] as $key => $value) {
        if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
            $config['shownews'] = 1;
            break;
        }
    }
}
