<?php
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;

$videosid = -1;
$data = [];
$videosid = $_GET['videosid'];
if(isset($_GET["guibinhluan"])){
    $idfacebook = $_GET["idfacebook"];
    $binhluan = $_GET["guibinhluan"];
    $dateNow = date("Y-m-d H:i:s");
    $id = $adb->query_with_params("insert into binhluan(idfacebook, videosid, loibinhluan, ngaybinhluan)
                                  VALUES (?,?,?,?)",["iiss",$idfacebook,$videosid,$binhluan, $dateNow],true);
    $adb->query_with_params("UPDATE `Videos` SET `Videos`.`binhluan` = `Videos`.`binhluan` + 1 WHERE `Videos`.`VideosID` = ?", ['i',$videosid]);
    if($id > 0){
        $rs = $adb->query_with_params("select *
                                      from thanhvien join  binhluan on thanhvien.`idFacebook` = binhluan.`idFacebook`
                                      join videos on binhluan.`videosID` = videos.`VideosID`
                                      where binhluan.`videosID` = ? ORDER BY binhluan.ngaybinhluan ASC ",["i",$videosid]);
        if($adb->num_rows($rs) > 0){
            $data = $adb->fetch_assoc_to_array($rs);
        }
        echo json_encode(array("data"=>$data));
    }
}else{
    $rs = $adb->query_with_params("select *
                                  from thanhvien join  binhluan on thanhvien.`idFacebook` = binhluan.`idFacebook`
                                  join videos on binhluan.`videosID` = videos.`VideosID`
                                  where binhluan.`videosID` = ? ORDER BY binhluan.ngaybinhluan ASC ",["i",$videosid]);
    if($adb->num_rows($rs) > 0){
        $data = $adb->fetch_assoc_to_array($rs);
    }
    echo json_encode(array("data"=>$data));
}
