<?php if(count($sanphamnb)) {?>
	<div class="main-sanpham">
		<div class="center">
			<div class="slick-sanpham">
				<?php foreach ($sanphamnb as $q => $w): ?>
					<div>
						<div class="wrap-sanpham-slick">
							<div class="box-sanpham">
								<div class="img-sanpham">
									<a class="scale-img" href="<?=$w[$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/233x297x2/assets/images/noimage.png';" src="<?=THUMBS?>/233x297x1/<?=UPLOAD_PRODUCT_L.$w['photo']?>" alt="<?=$w['ten']?>"/></a>
								</div>
								<div class="text-sanpham">
									<h3><a href="<?=$w[$sluglang]?>"><?=$w['ten']?></a></h3>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>	
<?php }?>	
<?php if(count($hasanxuat)) {?>
	<div class="main-sanxuat">
		<div class="center">
			<div class="title-main">
				<h2>Được sản xuất từ nhà máy của chúng tôi</h2>
			</div>
			<div class="pos-sanxuat">
				<p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
				<div class="owl-carousel owl-theme owl-slideshow">
					<?php for($i=0,$count=count($hasanxuat); $i < $count; $i++) { ?>
						<div>
							<a href="<?=$hasanxuat[$i]['link']?>" target="_blank" title="<?=$hasanxuat[$i]['ten']?>"><img onerror="this.src='<?=THUMBS?>/1200x523x2/assets/images/noimage.png';" src="<?=THUMBS?>/1200x523x1/<?=UPLOAD_PHOTO_L.$hasanxuat[$i]['photo']?>" alt="<?=$hasanxuat[$i]['ten']?>" title="<?=$hasanxuat[$i]['ten']?>"/></a>
						</div>
					<?php } ?>
				</div>
				<p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
			</div>
		</div>
	</div>
<?php }?>
<?php if(count($ungdungnb)) {?>
	<div id="ungdung" class="main-ungdung">
		<div class="center">
			<div class="title-main">
				<h2>Ứng dụng</h2>
			</div>
			<div class="grid-ungdung">
				<?php foreach ($ungdungnb as $q => $w): ?>
					<div class="img-ungdung">
						<a href="<?=$w[$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/480x320x2/assets/images/noimage.png';" src="<?=UPLOAD_NEWS_L.$w['photo']?>" alt="<?=$w['ten']?>">
							<span><?=$w['ten']?></span>
						</a>
					</div>
				<?php endforeach ?>
			</div>	
		</div>
	</div>
<?php }?>
<div id="banggia" class="main-banggia">
	<div class="center">
		<div class="title-main">
			<h2>Sản phẩm của chúng tôi</h2>
			
		</div>
		<div class="div-sanpham">
			<?php for($i=0,$count=count($sanphamid); $i < $count; $i++) { ?>
				<div class="wrap-sanpham">
					<div class="box-sanpham">
						<div class="img-sanpham">
							<a class="scale-img" href="<?=$sanphamid[$i][$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/233x297x2/assets/images/noimage.png';" src="<?=THUMBS?>/233x297x1/<?=UPLOAD_PRODUCT_L.$sanphamid[$i]['photo']?>" alt="<?=$sanphamid[$i]['ten']?>"/></a>
						</div>
						<div class="text-sanpham">
							<h3><a href="<?=$sanphamid[$i][$sluglang]?>"><?=$sanphamid[$i]['ten']?></a></h3>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php /*
<div id="banggia" class="main-banggia">
	<div class="center">
		<div class="title-main">
			<h2>Bảng giá vật tư và thi công</h2>
			<p>( Bảo hành trong nhà trên 10 năm )</p>
		</div>
		<div class="img-banggia">
			<img onerror="this.src='<?=THUMBS?>/1127x2967x2/assets/images/noimage.png';" src="<?=UPLOAD_PHOTO_L.$habg['photo']?>" alt="Hình ảnh bảng giá" title="Hình ảnh bảng giá"/>
		</div>
	</div>
</div>
*/ ?>
<?php if(count($nhandienthuonghieu)) {?>
	<div id="nhandienthuonghieu" class="main-nhandienthuonghieu">
		<div class="center">
			<div class="title-main">
				<h2>Nhận diện thương hiệu nhựa gỗ An Phúc</h2>
				<p class="blink_me"><?=$sloganndth['ten']?></p>
			</div>
			<div class="ha-nhandienthuonghieu">
				<div class="box-nhandienthuonghieu">
					<p>Nhựa gỗ</p>
					<h3>An Phúc</h3>
				</div>
				<div class="grid-nhandienthuonghieu">
					<?php foreach ($handth as $q => $w): ?>
						<div class="item-nhandienthuonghieu">
							<a class="scale-img" href="<?=$w['link']?>"><img onerror="this.src='<?=THUMBS?>/267x311x2/assets/images/noimage.png';" src="<?=UPLOAD_PHOTO_L.$w['photo']?>" alt="<?=$w['ten']?>" title="<?=$w['ten']?>"/></a>
						</div>
					<?php endforeach ?>
				</div>	
			</div>	
			<div class="pos-nhandienthuonghieu">
				<div class="div-nhandienthuonghieu">
					<?php foreach ($nhandienthuonghieu as $q => $w): ?>
						<div class="wrap-nhandienthuonghieu">
							<div class="img-nhandienthuonghieu">
								<a class="scale-img" href="<?=$w[$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/325x200x2/assets/images/noimage.png';" src="<?=THUMBS?>/325x200x1/<?=UPLOAD_NEWS_L.$w['photo']?>" alt="<?=$w['ten']?>"></a>
							</div>
							<div class="text-nhandienthuonghieu">
								<h3><a href="<?=$w[$sluglang]?>"><?=$w['ten']?></a></h3>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<p class="slogan-ndth"><?=$sloganndth2['ten']?></p>
		</div>
	</div>
<?php }?>
<?php if($video['link_video']) {?>
	<div class="main-video">
		<div class="center">
			<div class="iframe-video">
				<iframe width="100%" height="100%" src="//www.youtube.com/embed/<?=$func->getYoutube($video['link_video'])?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<?php }?>
<div class="main-uudaigiamgia">
	<div class="center">
		<div class="text-uudaigiamgia">
			<h3><?=$nhanuudaigiamgia['ten']?></h3>
			<a href="#newsletter" onclick="goToByScroll('#newsletter')" class="blink_me"><img src="assets/images/icon_uudai.png" alt="Nhận ưu đãi giảm giá"></a>
			<p><?=$nhanuudaigiamgia['noidung']?></p>
		</div>
	</div>
</div>
<?php if(count($dacdiemnoibat)) {?>
	<div id="dacdiemnoibat" class="main-noibatlamnhua">
		<div class="center">
			<div class="title-noibatlamnhua">
				<h2>Đặc điểm nổi bật của lam nhựa</h2>
			</div>
			<div class="mw-1047">
				<div class="div-noibatlamnhua">
					<?php foreach ($dacdiemnoibat as $q => $w): ?>
						<div class="wrap-noibatlamnhua">
							<div class="img-noibatlamnhua">
								<img onerror="this.src='<?=THUMBS?>/421x519x2/assets/images/noimage.png';" src="<?=THUMBS?>/421x519x1/<?=UPLOAD_NEWS_L.$w['photo']?>" alt="<?=$w['ten']?>">
							</div>
							<div class="text-noibatlamnhua">
								<h3><?=$w['ten']?></h3>
							</div>
						</div>
					<?php endforeach ?>
				</div>	
			</div>
			<div class="banner-noibatlamnhua1">
				<a href="<?=$hanbln1['link']?>"><img onerror="this.src='<?=THUMBS?>/1200x254x2/assets/images/noimage.png';" src="<?=THUMBS?>/1200x254x1/<?=UPLOAD_PHOTO_L.$hanbln1['photo']?>" alt="Hình ảnh nổi bật lam nhựa 1" title="Hình ảnh nổi bật lam nhựa 1"/></a>
			</div>
			<div class="banner-noibatlamnhua2">
				<a href="<?=$hanbln2['link']?>"><img onerror="this.src='<?=THUMBS?>/1200x402x2/assets/images/noimage.png';" src="<?=THUMBS?>/1200x402x1/<?=UPLOAD_PHOTO_L.$hanbln2['photo']?>" alt="Hình ảnh nổi bật lam nhựa 2" title="Hình ảnh nổi bật lam nhựa 2"/></a>
			</div>
		</div>
	</div>
<?php }?>
<?php if(count($lydo)) {?>
	<div id="4lydo" class="main-lydo" style="background: url(<?=UPLOAD_PHOTO_L.$bgld['photo']?>) top center no-repeat; background-size: cover;">
		<div class="center">
			<div class="title-lydo">
				<h2>4 lý do</h2>
				<p>Lựa chọn Lam nhựa gỗ An Phúc</p>
			</div>
			<div class="div-lydo">
				<?php foreach ($lydo as $q => $w): ?>
					<div class="wrap-lydo">
						<div class="text-lydo">
							<h3 class="ten-lydo"><span>0<?=$q+1?></span> <a href="<?=$w[$sluglang]?>"><?=$w['ten']?></a></h3>
							<div class="deslydo">
								<?=htmlspecialchars_decode($w['mota'])?>
							</div>
						</div>
						<div class="img-lydo">
							<a href="<?=$w[$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/145x145x2/assets/images/noimage.png';" src="<?=THUMBS?>/145x145x2/<?=UPLOAD_NEWS_L.$w['photo']?>" alt="<?=$w['ten']?>"></a>
						</div>
					</div>
				<?php endforeach ?>
			</div>	
		</div>
	</div>
<?php }?>
<?php if(count($xuhuong)) {?>
	<div id="xuhuongthanthien" class="main-xuhuong" style="background: url(<?=UPLOAD_PHOTO_L.$bgxh['photo']?>) top center no-repeat; background-size: cover;">
		<div class="center">
			<div class="title-xuhuong">
				<h2>XU HƯỚNG THÂN THIỆN VỚI MÔI TRƯỜNG</h2>
			</div>
			<div class="div-xuhuong">
				<?php foreach ($xuhuong as $q => $w): ?>
					<div class="wrap-xuhuong">
						<div class="img-xuhuong">
							<img onerror="this.src='<?=THUMBS?>/697x453x2/assets/images/noimage.png';" src="<?=THUMBS?>/697x453x1/<?=UPLOAD_NEWS_L.$w['photo']?>" alt="<?=$w['ten']?>">
						</div>
						<div class="text-xuhuong">
							<h3 class="ten-xuhuong"><?=$w['ten']?></h3>
							<div class="des-xuhuong">
								<?=htmlspecialchars_decode($w['mota'])?>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>	
		</div>
	</div>
<?php }?>
<?php if(count($hinhanhthicong)) {?>
	<div id="hinhanhthicong" class="main-hinhanhthicong">
		<div class="center">
			<div class="title-main">
				<h2>Hình ảnh thi công</h2>
			</div>
			<div class="slick-hinhanhthicong1">
				<?php foreach ($hinhanhthicong as $q => $w): ?>
					<?php 
					$hinhanhtc = $d->rawQuery("select photo from #_gallery where id_photo = ? and com='product' and type = ? and kind='man' and val = ? and hienthi > 0 order by stt,id desc",array($w['id'],'hinh-anh-thi-cong','hinh-anh-thi-cong'));
					?>
					<div>
						<div class="img-hinhanhthicong">
							<a href="<?=UPLOAD_PRODUCT_L.$w['photo']?>" data-fancybox="hinhanhthicong<?=$q?>"><img onerror="this.src='<?=THUMBS?>/1200x523x2/assets/images/noimage.png';" src="<?=THUMBS?>/1200x523x1/<?=UPLOAD_PRODUCT_L.$w['photo']?>" alt="<?=$w['ten']?>"/></a>
							<div class="img-hinhanhtc">
								<?php foreach ($hinhanhtc as $j => $k): ?>
									<a href="<?=UPLOAD_PRODUCT_L.$k['photo']?>" data-fancybox="hinhanhthicong<?=$q?>"><img onerror="this.src='<?=THUMBS?>/1200x523x2/assets/images/noimage.png';" src="<?=THUMBS?>/1200x523x1/<?=UPLOAD_PRODUCT_L.$k['photo']?>" alt="<?=$k['ten']?>"/></a>
								<?php endforeach ?>
							</div>	
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<div class="slick-hinhanhthicong2">
				<?php foreach ($hinhanhthicong as $q => $w): ?>
					<div>
						<div class="img-hinhanhthicong">
							<img onerror="this.src='<?=THUMBS?>/234x271x2/assets/images/noimage.png';" src="<?=THUMBS?>/234x271x1/<?=UPLOAD_PRODUCT_L.$w['photo']?>" alt="<?=$w['ten']?>"/>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
<?php }?>
<?php if(count($chinhsachdoitac)) {?>
	<div class="main-chinhsach">
		<div class="center">
			<div class="title-main">
				<h2>CHÍNH SÁCH TRỞ THÀNH ĐỐI TÁC</h2>
			</div>
			<div class="box-chinhsach">
				<?php foreach ($chinhsachdoitac as $q => $w): ?>
					<div class="text-chinhsach hover-text skew">
						<h3>
							<a href="<?=$w[$sluglang]?>"><span><img onerror="this.src='<?=THUMBS?>/26x28x2/assets/images/noimage.png';" src="<?=THUMBS?>/26x28x2/<?=UPLOAD_NEWS_L.$w['photo']?>" alt="<?=$w['ten']?>"></span> <span><?=$w['ten']?></span>
							</a></h3>
						</div>
					<?php endforeach ?>
					<span class="icon-chinhsach"><img src="assets/images/icon_chinhsach.png" alt="Chính sách đối tác"></span>
				</div>		
			</div>
		</div>
	<?php }?>
	<div class="title-main">
		<h2>Cam kết của chúng tôi</h2>
	</div>
	<?php if($camket) {?>
		<div class="main-camket" style="background: url(<?=UPLOAD_PHOTO_L.$bgck['photo']?>) top center no-repeat; background-size: cover;">
			<div class="center">
				<div class="flex-camket">
					<div class="cot1-camket">
						<?php if($logock) {?>
							<div class="logo-ck d-flex align-items-center">
								<a href=""><img onerror="this.src='<?=THUMBS?>/216x222x2/assets/images/noimage.png';" src="<?=THUMBS?>/216x222x2/<?=UPLOAD_PHOTO_L.$logock['photo']?>" alt="Hình ảnh cam kết"/></a>
							</div>
						<?php }?>
					</div>
					<div class="cot2-camket">
						<?php foreach ($camket as $q => $w): ?>
							<div class="text-camket">
								<h3><img src="assets/images/icon_camket.png" alt="<?=$w['ten']?>"> <?=$w['ten']?></h3>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>