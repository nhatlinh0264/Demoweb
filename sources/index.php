<?php  
if(!defined('SOURCES')) die("Error");

$slider = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));

$handth = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc limit 0,5",array('haa-ndth'));

$hasanxuat = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('ha-sanxuat'));

$gioithieu = $d->rawQueryOne("select id, type, ten$lang as ten, mota$lang as mota, photo, ngaytao, ngaysua from #_static where type = ? limit 0,1",array('gioi-thieu'));

    // $brand = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo from #_product_brand where type = ? and hienthi > 0 order by stt,id desc",array('san-pham'));
$danhmuc1sanphamnb = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, noibat from #_product_list where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));

$sanphamnb = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo, gia, giamoi, giakm, type from #_product where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));

$sanphamid = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo, gia, giamoi, giakm, type from #_product where type = ? and hienthi > 0 order by stt,id desc",array('san-pham'));


$ungdungnb = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc limit 0,5",array('ung-dung'));

$dacdiemnoibat = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc limit 0,2",array('dac-diem-noi-bat'));

$nhandienthuonghieu = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc limit 0,4",array('nhan-dien-thuong-hieu'));

$camket = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('cam-ket'));

$chinhsachdoitac = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('chinh-sach-doi-tac'));

$lydo = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('4-ly-do'));

$xuhuong = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('xu-huong'));

$tintucnb = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('xu-huong'));

$hinhanhthicong = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_product where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('hinh-anh-thi-cong'));

$hanbln1 = $d->rawQueryOne("select ten$lang as ten, photo, link, hienthi from #_photo where hienthi > 0 and type = ? and act = ? limit 0,1",array('ha-nbln','photo_static'));

$hanbln2 = $d->rawQueryOne("select ten$lang as ten, photo, link, hienthi from #_photo where hienthi > 0 and type = ? and act = ? limit 0,1",array('ha-nbln2','photo_static'));

$video = $d->rawQueryOne("select link_video from #_photo where hienthi > 0 and type = ? and act = ? limit 0,1",array('video','photo_static'));

$habg = $d->rawQueryOne("select ten$lang as ten, photo, link, hienthi from #_photo where hienthi > 0 and type = ? and act = ? limit 0,1",array('ha-banggia','photo_static'));

$hacnkh = $d->rawQueryOne("select ten$lang as ten, photo, link, hienthi from #_photo where hienthi > 0 and type = ? and act = ? limit 0,1",array('ha-cnkh','photo_static'));

$bgck = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and hienthi > 0 limit 0,1",array('bg-camket','photo_static'));
$bgxh = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and hienthi > 0 limit 0,1",array('bg-xuhuong','photo_static'));
$bgld = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and hienthi > 0 limit 0,1",array('bg-lydo','photo_static'));

$videonb = $d->rawQuery("select id from #_photo where noibat > 0 and type = ? and hienthi > 0",array('video'));

$doitac = $d->rawQuery("select ten$lang as ten, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('doitac'));

$popup = $d->rawQueryOne("select ten$lang as ten, photo, link, hienthi from #_photo where type = ? and act = ? limit 0,1",array('popup','photo_static'));

/* SEO */
$seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
$seo->setSeo('h1',$seoDB['title'.$seolang]);
$seo->setSeo('title',$seoDB['title'.$seolang]);
$seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
$seo->setSeo('description',$seoDB['description'.$seolang]);
$seo->setSeo('url',$func->getPageURL());
$img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
{
    $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
    $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
}
$seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
$seo->setSeo('photo:width',$img_json_bar['w']);
$seo->setSeo('photo:height',$img_json_bar['h']);
$seo->setSeo('photo:type',$img_json_bar['m']);
?>