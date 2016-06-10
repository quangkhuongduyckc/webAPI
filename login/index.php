<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 5/31/16
 * Time: 21:05
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$smarty = new config_Smarty();

if(checksession("admin")){
    redirect("/admin");
}
if(isset($_POST['username']) && isset($_POST['passwork'])){
    $username = $_POST['username'];
    $passwork = $_POST['passwork'];
    $rs = $adb->query_with_params("select * from thanhvien WHERE username=? AND matkhau=? and xoa = 0",["ss", $username, $passwork]);
    if($adb->num_rows($rs) >  0){
        $info = $adb->fetch_assoc($rs);
        setsession("admin", $info['id']);
        setsession("users", $info["username"]);
        redirect("/admin");
    }
}

$smarty->display("login/index.tpl");