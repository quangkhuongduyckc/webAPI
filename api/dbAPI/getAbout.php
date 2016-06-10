<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/20/16
 * Time: 11:31
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

$phimid = $_REQUEST["phimid"];
$rs = $adb->query("select phim.PhimID,DaoDien,hinh, tenphim ,dienvien, status.status, namphathanh, noidungphim
                  from phim JOIN Videos on phim.phimid = Videos.PhimID
                  JOIN status on Videos.StatusID = status.statusID
                  WHERE phim.phimid = $phimid");
$data = [];
if($adb->num_rows($rs) > 0) {
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));
