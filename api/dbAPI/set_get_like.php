<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 4/14/16
 * Time: 13:53
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;
$thich_KhongThich = $_GET["like"];
$idvideo = $_GET["videosid"];
$idtv = $_GET["idthanhvien"];
$data = [];
if($thich_KhongThich == "like"){
    $adb->query_with_params("insert into thich(idthanhvien, videosid) VALUES (?,?)", ["ii", $idtv, $idvideo]);
    $adb->query_with_params("UPDATE `Videos` SET `Videos`.`likes` = `Videos`.`likes` + 1 WHERE `Videos`.`VideosID` = ?", ['i',$idvideo]);

}elseif($thich_KhongThich == "unlike"){
    $adb->query_with_params("update thich set xoa = 1 WHERE idthanhvien=? and videosid=?",["ii", $idtv, $idvideo]);
//    $adb->query_with_params("UPDATE `Videos` SET `Videos`.`likes` = `Videos`.`likes` - 1 WHERE `Videos`.`VideosID` = ?", ['i',$idvideo]);
}elseif($thich_KhongThich === "getlike"){
    $rs = $adb->query("select * from thich WHERE idthanhvien=$idtv and videosid=$idvideo");
    if($adb->num_rows($rs) > 0){
        $data = $adb->fetch_assoc_to_array($rs);
    }
    echo json_encode(array("data"=>$data));
}