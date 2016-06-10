<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 5/26/16
 * Time: 01:27
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;

$username = $_GET["username"];
$passwork = $_GET["passwork"];
$data = [];
$rsUsers = $adb->query_with_params("select * from thanhvien WHERE (username = ? or email = ?) AND matkhau = ? AND xoa = 0", ["sss",$username,$username, $passwork]);
if($adb->num_rows($rsUsers) > 0){
    $data = $adb->fetch_assoc_to_array($rsUsers);
}

echo json_encode(array("data"=>$data));