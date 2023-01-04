<div class="title-main">
    <h1><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h1>
    <p><?=$slogan['ten']?></p>
</div>
<div class="w-clear">
    <?php if(isset($product) && count($product) > 0) { ?>
        <div class="div-sanpham">
            <?php for($i=0,$count=count($product); $i < $count; $i++) { ?>
                <div class="wrap-sanpham">
                    <div class="box-sanpham">
                        <div class="img-sanpham">
                            <a class="scale-img" href="<?=$product[$i][$sluglang]?>"><img onerror="this.src='<?=THUMBS?>/233x297x2/assets/images/noimage.png';" src="<?=THUMBS?>/233x297x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo']?>" alt="<?=$product[$i]['ten']?>"/></a>
                        </div>
                        <div class="text-sanpham">
                            <h3><a href="<?=$product[$i][$sluglang]?>"><?=$product[$i]['ten']?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home mgt-25"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>