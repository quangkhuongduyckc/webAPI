<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 4/27/16
 * Time: 15:54
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

$videosid = $_GET["videosid"];

//$rs = $adb->query_with_params("select likes,views,binhluan from videos WHERE videosid = ?",["i",$videosid]);
$rs = $adb->query_with_params("select xem as views,count(DISTINCT binhluan.binhluanid) as binhluan, count(DISTINCT thich.thichid) as likes
from videos join binhluan on videos.videosid = binhluan.videosid join thich on binhluan.videosid = thich.videosid
where videos.videosid = ? and videos.xoa = 0 and binhluan.xoa = 0",["i",$videosid]);
$data = [];
if($adb->num_rows($rs) > 0){
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));
