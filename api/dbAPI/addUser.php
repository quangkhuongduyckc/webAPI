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
$data = [];
if($adb->num_rows($ketquakiemtra) === 0){
    $rs = $adb->query_with_params("insert into thanhvien(idfacebook,tenfacebook,linkfacebook, xoa) VALUES(?,?,?)"
                                    ,['issi',$idFB,$tenFB,$linkFB,0],true);
    print_r($rs);
    $data[0]["thanhvienid"] = $rs;
    echo json_encode(array("data"=>$data));
}else{
    $data = $adb->fetch_assoc_to_array($ketquakiemtra);
    echo json_encode(array("data"=>$data));
}




