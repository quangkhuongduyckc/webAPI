<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/20/16
 * Time: 10:31
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
 $rs = $adb->query("select * from theloai ORDER BY tentheloai ASC");
$data = [];
if($adb->num_rows($rs) > 0){
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));