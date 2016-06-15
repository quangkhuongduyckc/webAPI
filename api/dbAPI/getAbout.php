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

$rs = $adb->query_with_params("select p.phimid, dd.tendaodien, p.namphathanh, p.noidungphim, p.hinh, p.tenphim, tendienvien
                                    from phim p inner join daodien dd on p.daodienid = dd.daodienid
                                    inner join phim_dienvien pdv on p.phimid = pdv.phimid
                                        inner join dienvien dv on pdv.dienvienid = dv.dienvienid
                                    where p.xoa = 0 and dd.xoa = 0 and  p.phimid = ?",["i",$phimid]);

$data = [];
if($adb->num_rows($rs) > 0) {
    $data = $adb->fetch_assoc_to_array($rs);
}
echo json_encode(array("data"=>$data));
