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
if(isset($_GET["idfacebook"])){
 //co
    $idfb = $_GET["idfacebook"];
    $rs = $adb->query("select * from luotxem WHERE idfacebook=$idfb AND videosid=$idvideo");
    if($adb->num_rows($rs) < 1) {
        $adb->query_with_params("insert into luotxem(idfacebook, videosid) VALUES (?,?)", ['ii', $idfb, $idvideo]);
    }
}
$adb->query_with_params("UPDATE `Videos` SET `Videos`.`Views` = `Videos`.`Views` + 1 WHERE `Videos`.`VideosID` = ?", ['i',$idvideo]);
