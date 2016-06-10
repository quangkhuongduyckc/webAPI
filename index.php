<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 10/3/15
 * Time: 21:50
 */

if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';

checkauth();
$smarty = new config_Smarty();

