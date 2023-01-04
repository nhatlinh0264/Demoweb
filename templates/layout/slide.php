<?php if(count($slider)) { ?>
    <div class="slideshow">
        <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
        <div class="owl-carousel owl-theme owl-slideshow">
            <?php for($i=0,$count=count($slider); $i < $count; $i++) { ?>
                <div>
                    <a class="img-slide1" href="<?=$slider[$i]['link']?>" target="_blank" title="<?=$slider[$i]['ten']?>"><img onerror="this.src='<?=THUMBS?>/1903x957x2/assets/images/noimage.png';" src="<?=THUMBS?>/1903x957x1/<?=UPLOAD_PHOTO_L.$slider[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>" title="<?=$slider[$i]['ten']?>"/></a>
                    <a class="img-slide2" href="<?=$slider[$i]['link']?>" target="_blank" title="<?=$slider[$i]['ten']?>"><img onerror="this.src='<?=THUMBS?>/600x400x2/assets/images/noimage.png';" src="<?=THUMBS?>/600x400x1/<?=UPLOAD_PHOTO_L.$slider[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>" title="<?=$slider[$i]['ten']?>"/></a>
                </div>
            <?php } ?>
        </div>
        <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
    </div>
<?php } ?>