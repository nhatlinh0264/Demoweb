<div class="grid-pro-detail w-clear">
    <div class="left-pro-detail w-clear">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: on; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=THUMBS?>/1000x0x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten']?>"><img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=THUMBS?>/540x540x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten']?>"></a>
        <?php if(isset($hinhanhsp) && count($hinhanhsp) > 0) { ?>
            <div class="gallery-thumb-pro">
                <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                <div class="owl-carousel owl-theme owl-thumb-pro">
                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=THUMBS?>/1000x0x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten']?>"><img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=THUMBS?>/540x540x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten']?>"></a>
                    <?php for($i=0,$count=count($hinhanhsp); $i < $count; $i++) { ?>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=THUMBS?>/1000x0x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" title="<?=$row_detail['ten']?>">
                            <img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=THUMBS?>/540x540x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" alt="<?=$row_detail['ten']?>">
                        </a>
                    <?php } ?>
                </div>
                <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
            </div>
        <?php } ?>
    </div>

    <div class="right-pro-detail w-clear">
        <h1 class="title-pro-detail"><?=$row_detail['ten']?></h1>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
        <div class="desc-pro-detail"><?=(isset($row_detail['mota']) && $row_detail['mota'] != '') ? htmlspecialchars_decode($row_detail['mota']) : ''?></div>
        <ul class="attr-pro-detail">
            <?php if(isset($row_detail['masp']) && $row_detail['masp'] != '') { ?>
                <li class="w-clear"> 
                    <label class="attr-label-pro-detail"><?=masp?>:</label>
                    <div class="attr-content-pro-detail"><?=$row_detail['masp']?></div>
                </li>
            <?php } ?>
            <?php if(isset($pro_brand['id']) && $pro_brand['id'] > 0) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?=thuonghieu?>:</label>
                    <div class="attr-content-pro-detail"><a class="text-decoration-none" href="<?=$pro_brand[$sluglang]?>" title="<?=$pro_brand['ten']?>"><?=$pro_brand['ten']?></a></div>
                </li>
            <?php } ?>
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?=gia?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if($row_detail['giamoi']) { ?>
                        <span class="price-new-pro-detail"><?=$func->format_money($row_detail['giamoi'])?></span>
                        <span class="price-old-pro-detail"><?=$func->format_money($row_detail['gia'])?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?=($row_detail['gia']) ? $func->format_money($row_detail['gia']) : lienhe?></span>
                    <?php } ?>
                </div>
            </li>
            <?php /*<?php 
            $getnametygia = $func->get_search_index($product[$i]['id_tygia'],'tygia');
            $tygia = $getnametygia['ten'.$lang];
            ?>*/ ?>
            <?php if(isset($mau) && count($mau)>0){ ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail d-block"><?=mausac?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <?php for($i=0; $i<count($mau); $i++) { ?>
                            <?php if($mau[$i]['loaihienthi']==1) { ?>
                                <a class="color-pro-detail text-decoration-none" data-idpro="<?=$row_detail['id']?>">
                                    <input style="background-image: url(<?=UPLOAD_COLOR_L.$mau[$i]['photo']?>)" type="radio" value="<?=$mau[$i]['id']?>" name="color-pro-detail">
                                </a>
                            <?php } else { ?>
                                <a class="color-pro-detail text-decoration-none" data-idpro="<?=$row_detail['id']?>">
                                    <input style="background-color: #<?=$mau[$i]['mau']?>" type="radio" value="<?=$mau[$i]['id']?>" name="color-pro-detail">
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </li>
            <?php } ?>
            <?php if(isset($size) && count($size)>0){ ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail d-block"><?=kichthuoc?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <?php for($i=0; $i<count($size); $i++) { ?>
                            <a class="size-pro-detail text-decoration-none">
                                <input type="radio" value="<?=$size[$i]['id']?>" name="size-pro-detail">
                                <?=$size[$i]['ten']?>
                            </a>
                        <?php } ?>
                    </div> 
                </li>
            <?php } ?>
            <li class="w-clear"> 
                <label class="attr-label-pro-detail"><?=luotxem?>:</label>
                <div class="attr-content-pro-detail"><?=$row_detail['luotxem']?></div>
            </li>
            <?php if(isset($config['cart']['active']) && $config['cart']['active']==true) { ?>
                <li class="w-clear"> 
                    <label class="attr-label-pro-detail d-block"><?=soluong?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <div class="quantity-pro-detail">
                            <span class="quantity-minus-pro-detail">-</span>
                            <input type="number" class="qty-pro" min="1" value="1" readonly />
                            <span class="quantity-plus-pro-detail">+</span>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <?php if(isset($config['cart']['active']) && $config['cart']['active']==true) { ?>
            <div class="cart-pro-detail">
                <a class="transition addnow addcart text-decoration-none" data-id="<?=$row_detail['id']?>" data-action="addnow"><i class="fas fa-shopping-bag"></i><span>Thêm vào giỏ hàng</span></a>
                <a class="transition buynow addcart text-decoration-none" data-id="<?=$row_detail['id']?>" data-action="buynow"><i class="fas fa-shopping-bag"></i><span>Đặt hàng</span></a>
            </div>
        <?php } ?>
    </div>

    <div class="clear"></div>

    <div class="tags-pro-detail w-clear">
        <?php if(isset($pro_tags) && count($pro_tags) > 0) { ?>
            <?php for($i=0,$count=count($pro_tags); $i < $count; $i++) { ?>
                <a class="transition text-decoration-none w-clear" href="<?=$pro_tags[$i][$sluglang]?>" title="<?=$pro_tags[$i]['ten']?>"><i class="fas fa-tags"></i><?=$pro_tags[$i]['ten']?></a>
            <?php } ?>
        <?php } ?>
    </div>

    <div class="clear"></div>

    <div class="tabs-pro-detail">
        <ul class="ul-tabs-pro-detail w-clear">
            <li class="active transition" data-tabs="info-pro-detail"><?=thongtinsanpham?></li>
            <li class="transition" data-tabs="commentfb-pro-detail"><?=binhluan?></li>
        </ul>
        <div class="content-tabs-pro-detail info-pro-detail active"><?=(isset($row_detail['noidung']) && $row_detail['noidung'] != '') ? htmlspecialchars_decode($row_detail['noidung']) : ''?></div>
        <div class="content-tabs-pro-detail commentfb-pro-detail"><div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div></div>
    </div>
</div>

<?php if(isset($product) && count($product) > 0) { ?>
   <div class="title-main"><span><?=sanphamcungloai?></span></div>
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
<div class="clear"></div>
<div class="pagination-home mgt-25"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>

<?php }?>
