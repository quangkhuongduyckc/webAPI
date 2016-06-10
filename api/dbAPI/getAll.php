<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/3/16
 * Time: 16:50
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$amount = 20;
$pages = $_REQUEST['pages'];
if($pages > -1){
    $getLimit = $pages * $amount;
    $rs = $adb->query("select * from phim limit $getLimit,$amount");
    if($adb->num_rows($rs) > 0){
        echo json_encode(array("data"=>$adb->fetch_assoc_to_array($rs)));
    }
}
