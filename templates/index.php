<!DOCTYPE html>
<html lang="<?=$config['website']['lang-doc']?>">
<head>
    <?php include TEMPLATE.LAYOUT."head.php"; ?>
    <?php include TEMPLATE.LAYOUT."css.php"; ?>
</head>
<body <?php if($source=='index'){ echo 'class="index"'; } ?>>
    <?php
    include TEMPLATE.LAYOUT."seo.php";
    
    // include TEMPLATE.LAYOUT."banner.php";
    include TEMPLATE.LAYOUT."menu.php";
    //include TEMPLATE.LAYOUT."mmenu.php";
    if($source=='index') include TEMPLATE.LAYOUT."slide.php";
    else include TEMPLATE.LAYOUT."breadcrumb.php";
    ?>
    <?php if($source=='index'){ ?>
        <?php include TEMPLATE.$template."_tpl.php"; ?>
    <?php } else { ?>
        <div id="container" class="center w-clear">
            <?php include TEMPLATE.$template."_tpl.php"; ?>
        </div>
    <?php } ?>
    <?php
    include TEMPLATE.LAYOUT."footer.php";
    include TEMPLATE.LAYOUT."support.php";
    include TEMPLATE.LAYOUT."modal.php";
    include TEMPLATE.LAYOUT."js.php";
        // if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
    ?>
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
</body>
</html>