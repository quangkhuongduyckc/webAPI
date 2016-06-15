<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/21/16
 * Time: 11:38
 */

/*
 *
 *  SELECT *
 *  FROM Phim WHERE NgayDang > DATE_ADD((SELECT MAX(NgayDang) FROM Phim), INTERVAL -7 DAY)
 *  AND NgayDang <= (SELECT MAX(NgayDang) FROM Phim)
 * */

if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$pages = $_GET["pages"];
$from = $pages * pages::limitPages;
$rs = $adb->query("SELECT *
                  FROM Phim WHERE NgayDang > DATE_ADD((SELECT MAX(NgayDang) FROM Phim), INTERVAL -7 DAY)
                  AND NgayDang <= (SELECT MAX(NgayDang) FROM Phim limit $from ,".pages::limitPages.") and phim.xoa = 0");
$data = [];
if($adb->num_rows($rs) > 0){
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));