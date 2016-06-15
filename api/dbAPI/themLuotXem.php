<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 4/13/16
 * Time: 22:38
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;

$idvideo = $_GET["videosid"];
if(isset($_GET["thanhvienid"])){
 //co
    $thanhvienid = $_GET["thanhvienid"];
    $rs = $adb->query("select * from luotxem WHERE thanhvienid=$thanhvienid AND videosid=$idvideo");
    if($adb->num_rows($rs) < 1) {
        $adb->query_with_params("insert into luotxem(thanhvienid, videosid) VALUES (?,?)", ['ii', $thanhvienid, $idvideo]);
    }
}
$adb->query_with_params("UPDATE `Videos` SET `Videos`.`xem` = `Videos`.`xem` + 1 WHERE `Videos`.`VideosID` = ?", ['i',$idvideo]);
