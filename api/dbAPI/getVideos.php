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

//$rs = $adb->query_with_params("select count(DISTINCT thich.thichid) as likes, count(DISTINCT binhluan.binhluanid) as binhluan, xem as Views, videos.VideosID, linkphim, status, tap
//                            from videos inner join thich on videos.videosid = thich.videosid
//                            inner join binhluan on videos.videosid = binhluan.videosid
//                            inner join status on videos.statusid = status.statusid
//                            where videos.phimid = ? and thich.xoa = 0 and binhluan.xoa = 0 and videos.xoa = 0",["i",$phim]);

$rsvideo = $adb->query_with_params("select xem as Views, videos.VideosID, linkphim, status, tap
                                    from videos inner join status on videos.statusid = status.statusid
                                    where videos.xoa = 0 and status.xoa = 0 and videos.phimid = ?", ["i", $phim]);

$rstongluotthich = $adb->query_with_params("select count(thich.thichid) as likes
                                            from thich
                                            where thich.videosid = ? and thich.xoa = 0", ["i", $phim]);

$rstongluotbinhluan = $adb->query_with_params("select count(binhluan.binhluanid) as binhluan
                                            from binhluan
                                            where binhluan.xoa = 0 and binhluan.videosid = ?", ["i", $phim]);
$data = [];
if($adb->num_rows($rstongluotthich) > 0 && $adb->num_rows($rsvideo) > 0 && $adb->num_rows($rstongluotbinhluan) > 0){
    $data = $adb->fetch_assoc_to_array($rsvideo);
    $thich = $adb->fetch_assoc($rstongluotthich);
    $binhluan = $adb->fetch_assoc($rstongluotbinhluan);
    $data[0]["likes"] = $thich["likes"];
    $data[0]["binhluan"] = $binhluan["binhluan"];

}
echo json_encode(array("data"=>$data));