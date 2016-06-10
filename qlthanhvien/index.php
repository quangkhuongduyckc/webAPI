<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 6/7/16
 * Time: 20:55
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
    if(isset($_POST["xoa"])){
        $idthanhvien = $_POST["xoa"];
        $query = "update thanhvien set xoa=1 WHERE id=".$idthanhvien;
        $adb->query($query);
    }
    $rsqlthanhvien = $adb->query("select * from thanhvien where xoa=0 order by id desc");
    if($adb->num_rows($rsqlthanhvien) > 0){
        $dtqlthanhvien = $adb->fetch_assoc_to_array($rsqlthanhvien);
    }
}

$smarty->assign("dtqlthanhvien",$dtqlthanhvien);
$smarty->assign("users", getsession("users"));
$smarty->display("qlthanhvien/index.tpl");