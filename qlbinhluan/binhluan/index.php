<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 6/5/16
 * Time: 16:58
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
}else {
    if(isset($_POST['xoa']))
    {
        print_r($_POST,true);
        $idbinhluan = $_POST['xoa'];
        $query = "update binhluan set xoa=1 WHERE id=".$idbinhluan;
//        echo $query;
        $adb->query($query);
    }
    if(isset($_GET["idvd"])){
        $idvideos = $_GET["idvd"];
        $query = "select thanhvien.id, thanhvien.username, binhluan.videosid, phim.tenphim, videos.tap, binhluan.`id` as idbinhluan, binhluan.loibinhluan, binhluan.ngaybinhluan, videos.videosid
                                        from binhluan join videos on binhluan.videosid=videos.videosid
                                        left join thanhvien on binhluan.idthanhvien=thanhvien.id
                                        join phim on videos.phimid=phim.phimid
                                        where binhluan.videosid=".$idvideos."
                                        and videos.xoa=0 and binhluan.xoa=0 and thanhvien.xoa=0 and phim.xoa=0
                                        order by binhluan.ngaybinhluan desc";
        $rsbinhluan = $adb->query($query);
        $dtbinhluan = [];
        if($adb->num_rows($rsbinhluan) > 0){
            $dtbinhluan = $adb->fetch_assoc_to_array($rsbinhluan);
        }

    }else{
        redirect("/qlbinhluan");
    }
}

$smarty->assign("dtbinhluan",$dtbinhluan);
$smarty->assign("users", getsession("users"));
$smarty->display("qlbinhluan/binhluan/index.tpl");