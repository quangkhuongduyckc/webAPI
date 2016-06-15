<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 5/22/16
 * Time: 16:50
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;

$username = $_GET["username"];
$email = $_GET["email"];
$passwork = $_GET["passwork"];
$phone = $_GET["phone"];
$birthday = $_GET["birthday"];
$hometown = $_GET["hometown"];
$data = [];
$rsUsers = $adb->query_with_params("select * from thanhvien WHERE (username = ? or email = ?) AND xoa = 0", ["ss",$username,$email]);
if($adb->num_rows($rsUsers) > 0){
    $data = $adb->fetch_assoc_to_array($rsUsers);
}else{
    $adb->query_with_params("insert into thanhvien(tenfacebook, linkfacebook, username, email, matkhau ,dienthoai, ngaysinh, quequan, xoa) VALUES (?,?,?,?,?,?,?,?,?)",
                                                ['ssssssssi',"", "", $username, $email, $passwork, $phone, $birthday, $hometown,0]);
}

echo json_encode(array("data"=>$data));