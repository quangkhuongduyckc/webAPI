<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/21/16
 * Time: 14:47
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$theloaiid = $_REQUEST['theloaiid'];
$pages = $_GET["pages"];
$from = $pages * pages::limitPages;
$rs = $adb->query("SELECT *
                  FROM Phim join theloai on phim.theloaiid = theloai.`TheLoaiID`
                  WHERE theloai.theloaiid = $theloaiid and theloai.xoa = 0 and phim.xoa = 0 limit $from,".pages::limitPages);
$data = [];
if($adb->num_rows($rs) > 0){
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));