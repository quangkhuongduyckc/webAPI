<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 4/9/16
 * Time: 22:51
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$idFB = $_GET["idfacebook"];
$tenFB = $_GET["tenfacebook"];
$linkFB = $_GET["linkfacebook"];
$ketquakiemtra = $adb->query("select * from thanhvien WHERE idfacebook = $idFB");
if($adb->num_rows($ketquakiemtra) === 0){
    $rs = $adb->query_with_params("insert into thanhvien(idfacebook,tenfacebook,linkfacebook) VALUES(?,?,?)"
                                    ,['iss',$idFB,$tenFB,$linkFB],true);
//    if($rs > -1){
//
//    }

    echo json_encode("them thanh cong");
}


