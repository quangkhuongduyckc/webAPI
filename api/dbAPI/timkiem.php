<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 5/1/16
 * Time: 15:34
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

global $adb;

$tuKhoa = $_GET['tukhoa'];
$pages = $_GET['pages'];
$from = $pages * pages::limitPages;
$data = [];
$rs = $adb->query("select DISTINCT tenphim, hinh, phim.phimid
from phim join videos on phim.phimid = videos.phimid
join theloai on phim.theloaiid = theloai.theloaiid
join loaiphim on phim.loaiphimid = loaiphim.`LoaiPhimID`
where phim.tenphim like '%$tuKhoa%' or phim.daodien LIKE '%$tuKhoa%' or phim.dienvien like '%$tuKhoa%' or phim.`NuocSanXuat` like '%$tuKhoa%'
or phim.noidungphim like '%$tuKhoa%' or loaiphim.`LoaiPhim` like '%$tuKhoa%' or theloai.`TenTheLoai` like '%$tuKhoa%' limit $from ,".pages::limitPages);
if($adb->num_rows($rs) > 0){
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));