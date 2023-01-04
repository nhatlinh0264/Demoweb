<div id="banner">
	<div class="center">
		<div class="flex-banner">
			<?php if($logo) {?>
				<div class="logo d-flex align-items-center">
					<a href=""><img onerror="this.src='<?=THUMBS?>/120x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/120x100x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
				</div>
			<?php }?>
			<?php if($banner) {?>
				<div class="banner">
					<a href=""><img onerror="this.src='<?=THUMBS?>/730x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/730x120x2/<?=UPLOAD_PHOTO_L.$banner['photo']?>"/></a>
				</div>
			<?php }?>
			<div class="banner-ab">
				<div class="banner-hotline">
					<p>Hotline hỗ trợ:</p>
					<span><?=$optsetting['hotline']?></span>
				</div>
			</div>
		</div>
	</div>
</div>