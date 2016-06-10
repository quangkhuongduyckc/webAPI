<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 5/30/16
 * Time: 21:40
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$smarty = new config_Smarty();
if(!checksession("admin")){
    redirect("/login");
}else{
    $rsthich = $adb->query("select count(likeid) as thich from thich");
    $dtthich;
    if($adb->num_rows($rsthich) > 0){
        $dtthich = $adb->fetch_assoc($rsthich);
    }

    $rsxem = $adb->query("select count(xem) as luotxem from videos");
    $dtluotxem;
    if($adb->num_rows($rsxem) > 0){
        $dtluotxem = $adb->fetch_assoc($rsxem);
    }

    $rsbinhluan = $adb->query("select count(id) as binhluan from binhluan");
    $dtbinhluan;
    if($adb->num_rows($rsbinhluan) > 0){
        $dtbinhluan = $adb->fetch_assoc($rsbinhluan);
    }

    $rstop10 = $adb->query("select videos.xem as tongluotxem, luotxem.videosid, tenphim, hinh,
                            count(thich.`videosid`) as tongluotthich, count(binhluan.`videosID`) as tongbinhluan
                            from luotxem join videos on luotxem.`videosid` = videos.`VideosID`
                            left join thich on videos.`VideosID` = thich.`videosid`
                            left join binhluan on thich.`videosid` = binhluan.`videosID`
                            join phim on videos.`PhimID`=phim.`PhimID`
                            group by videos.xem
                            limit 0,10");
    $dttop10;
    if($adb->num_rows($rstop10) > 0){
        $dttop10 = $adb->fetch_assoc_to_array($rstop10);
    }
}
if(isset($_GET["logout"])){
    removeAllsession();
    redirect("/login");
}


$smarty->assign("tongLuotThich",$dtthich);
$smarty->assign("tongLuotXem",$dtluotxem);
$smarty->assign("tongBinhLuan",$dtbinhluan);
$smarty->assign("dttop10",$dttop10);
$smarty->assign("users", getsession("users"));
$smarty->display("admin/index.tpl");