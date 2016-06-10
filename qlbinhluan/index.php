<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 6/4/16
 * Time: 20:52
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
    $rsqlbinhluan = $adb->query("select * from (
                                    select count(binhluan.`videosID`) as tongbinhluan, tap, tenphim, binhluan.`videosID`
                                    from binhluan left join videos on binhluan.`videosID` = videos.`VideosID`
                                    join phim on videos.`PhimID` = phim.`PhimID`
                                    where binhluan.xoa=0 and videos.xoa=0 and phim.xoa=0
                                    group by binhluan.`videosID`
                                ) as tongbinhluan
                                order by tongbinhluan.tongbinhluan desc");
    $dtqlbinhluan = [];
    if($adb->num_rows($rsqlbinhluan) > 0){
        $dtqlbinhluan = $adb->fetch_assoc_to_array($rsqlbinhluan);
    }
}
$smarty->assign("dtqlbinhluan", $dtqlbinhluan);
$smarty->assign("users", getsession("users"));
$smarty->display("qlbinhluan/index.tpl");