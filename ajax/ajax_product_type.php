<?php 
include "ajax_config.php";
$eShow = htmlspecialchars($_GET['eShow']);
$type = $_GET['type'];
$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
$where = "";
/* Math url */
if($type=='spbc')
{
	$where .= " and banchay > 0";;
}
if($type=='spyt')
{
	$where .= " and yeuthich > 0";
}
if($type=='spbst')
{
	$where .= " and bosuutap > 0";
}
/* Get data */
$sql = "select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo, gia, giamoi, giakm, type from #_product where type='san-pham' $where and hienthi > 0 order by stt,id desc";
$sqlCache = $sql;
$items = $cache->getCache($sqlCache,'result',7200);
/* Count all data */
$countItems = count($cache->getCache($sql,'result',7200));
?>
<?php if($countItems) { ?>
	<div class="slick-tab">
		<?php for($i=0,$count=count($items); $i < $count; $i++) { ?>
			<div>
				<div class="wrap-sanpham-slick">
					<div class="img-sanpham">
						<a class="scale-img" href="<?=$items[$i][$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/285x330x2/assets/images/noimage.png';" src="<?=THUMBS?>/285x330x1/<?=UPLOAD_PRODUCT_L.$items[$i]['photo']?>" alt="<?=$items[$i]['ten']?>"></a>
						<div class="text-sanpham hover-text">
							<h3><a href="<?=$items[$i][$sluglang]?>"><?=$items[$i]['ten']?></a></h3>
							<?php if($items[$i]['giamoi'] > 0) {?>
								<div class="flex-gia-sanpham">
									<div class="gia-sanpham">
										<span class="giacu-sanpham">Giá cũ: <?=$func->format_money($items[$i]['gia'])?></span>
										<p><span>Giá mới:</span> <?=$func->format_money($items[$i]['giamoi'])?></p>
									</div>
									<div class="cart-sanpham">
										<a class="add-giohang addcart " data-id="<?=$items[$i]['id']?>" data-action="addnow">Mua ngay</a>
									</div>
								</div>
							<?php }elseif($items[$i]['gia'] > 0) {?>
								<div class="flex-gia-sanpham">
									<div class="gia-sanpham">
										<p><span>Giá:</span> <?=$func->format_money($items[$i]['gia'])?></p>
									</div>
									<div class="cart-sanpham">
										<a class="add-giohang addcart " data-id="<?=$items[$i]['id']?>" data-action="addnow">Mua ngay</a>
									</div>
								</div>
							<?php }else {?>
								<div class="flex-gia-sanpham">
									<div class="gia-sanpham">
										<p>Liên hệ</p>
									</div>
									<div class="cart-sanpham">
										<a class="add-giohang addcart " data-id="<?=$items[$i]['id']?>" data-action="addnow">Mua ngay</a>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
<?php } ?>
