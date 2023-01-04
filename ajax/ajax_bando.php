<?php 
include "ajax_config.php";

/* Paginations */
include LIBRARIES."class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$id = (isset($_GET['id']) && $_GET['id'] > 0) ? htmlspecialchars($_GET['id']) : 0;
$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p-1) * $pagingAjax->perpage;

$tempLink = "";


/* Math url */

$tempLink .= "&p=";


/* Get data */
$getmap = $d->rawQueryOne("select mota$lang as mota from #_news where id='".$id."' and type='chi-nhanh' and hienthi > 0 order by stt,id desc");

echo htmlspecialchars_decode($getmap['mota']);
?>

