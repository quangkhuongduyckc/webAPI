<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/20/16
 * Time: 12:54
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$phim = $_REQUEST['phimid'];
$rs = $adb->query("SELECT videos.VideosID, linkphim, LIKES, Videos.Views, binhluan, status, tap
                  from Videos join status on videos.statusid = status.statusid
                  WHERE Videos.PhimID  = $phim");
$data = [];
if($adb->num_rows($rs) > 0){
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));