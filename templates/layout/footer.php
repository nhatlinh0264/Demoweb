<div id="footer">
    <div class="main-camnhankhachhang">
        <div class="center">
            <div class="bg-camnhankhachhaang">
                <?php if($hacnkh) {?>
                    <div class="img-camnhankhachhang">
                        <img onerror="this.src='<?=THUMBS?>/1002x877x2/assets/images/noimage.png';" src="<?=THUMBS?>/1002x877x1/<?=UPLOAD_PHOTO_L.$hacnkh['photo']?>" alt="Hình ảnh cảm nhận khách hàng"/>
                    </div>
                <?php }?>
                <div id="newsletter" class="newsletter">
                    <h2>Nhanh tay lên</h2>
                    <form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                        <h3>Đăng ký ngay để nhận làm đại lý</h3>
                        <p>Mời bạn nhập thêm thông tin bên dưới</p>
                        <div class="newsletter-input">
                            <input type="ten" class="form-control input" id="ten-newsletter" name="ten-newsletter" placeholder="Họ và tên" required />
                        </div>
                        <div class="newsletter-input">
                            <input type="dienthoai" class="form-control input" id="dienthoai-newsletter" name="dienthoai-newsletter" placeholder="Số điện thoại" required />
                        </div>
                        <div class="newsletter-input">
                            <input type="email" class="form-control input" id="email-newsletter" name="email-newsletter" placeholder="Email" required />
                        </div>
                        <div class="newsletter-button">
                            <input type="submit" name="submit-newsletter" value="Đăng ký ngay" disabled>
                            <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-top">
        <div class="center d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-1">
                <?php if($logoft) {?>
                    <div class="logo-ft d-flex align-items-center">
                        <a href=""><img onerror="this.src='<?=THUMBS?>/126x84x2/assets/images/noimage.png';" src="<?=THUMBS?>/126x84x2/<?=UPLOAD_PHOTO_L.$logoft['photo']?>" alt="Logo footer"/></a>
                    </div>
                <?php }?>
                <div class="footer-content"><?=htmlspecialchars_decode($giomocua['noidung'])?></div>
                <?php if(count($mxh)>0){ ?>
                    <ul class="mxh footer-mxh">
                        <?php for($i=0,$count=count($mxh); $i<$count; $i++) { ?>
                            <li>
                                <a href="<?=$mxh[$i]['link']?>" target="_blank">
                                    <img onerror="this.src='<?=THUMBS?>/31x30x2/assets/images/noimage.png';" src="<?=THUMBS?>/31x30x2/<?=UPLOAD_PHOTO_L.$mxh[$i]['photo']?>" alt="<?=$mxh[$i]['ten']?>">
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="footer-2">
               <div class="footer-content"><?=htmlspecialchars_decode($footer['noidung'])?></div>
           </div>
           <div class="footer-3">
            <div class="footer-tit">Hướng dẫn và thông tin</div>
            <?php if(isset($huongdanthongtin)){ ?>
                <ul class="footer-list"> 
                    <?php for($i=0,$count=count($huongdanthongtin); $i < $count; $i++) { ?>
                        <li><a class="text-decoration-none" href="<?=$huongdanthongtin[$i][$sluglang]?>" title="<?=$huongdanthongtin[$i]['ten']?>">- <?=$huongdanthongtin[$i]['ten']?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <div class="footer-tit footer-tit-edit">Chính sách</div>
            <?php if(isset($chinhsach)){ ?>
                <ul class="footer-list">
                    <?php for($i=0,$count=count($chinhsach); $i < $count; $i++) { ?>
                        <li><a class="text-decoration-none" href="<?=$chinhsach[$i][$sluglang]?>" title="<?=$chinhsach[$i]['ten']?>">- <?=$chinhsach[$i]['ten']?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <div class="footer-4">
            <div class="footer-tit">Phương thức thanh toán</div>
            <?php if(count($pttt)>0){ ?>
                <ul class="mxh footer-pttt">
                    <?php for($i=0,$count=count($pttt); $i<$count; $i++) { ?>
                        <li>
                            <a href="<?=$pttt[$i]['link']?>" target="_blank">
                                <img onerror="this.src='<?=THUMBS?>/51x30x2/assets/images/noimage.png';" src="<?=THUMBS?>/51x30x2/<?=UPLOAD_PHOTO_L.$pttt[$i]['photo']?>" alt="<?=$pttt[$i]['ten']?>">
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="center d-flex flex-wrap align-items-center justify-content-between">
        <p class="copyright">Copyright © 2022 <a href=""><?=$setting["ten$lang"]?></a>. All Rights Reserved</p>
    </div>
</div>
</div>