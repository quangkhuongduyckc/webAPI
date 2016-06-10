<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 10/3/15
 * Time: 21:50
 */

if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'.'/']);
require_once APP_BASE_PATH.'smarty/libs/Smarty.class.php';
require_once APP_BASE_PATH.'common/config.php';

class config_smarty extends Smarty{
    function config_Smarty()
    {
        $this->template_dir = config::app_dir.'templates';
        $this->compile_dir = config::app_dir.'smarty/templates_c';
        $this->config_dir = config::app_dir.'smarty/configs';
    }
}

/*
	    
    <link rel="stylesheet" type="text/css" href="../../content/bootstraps/css/bootstrap.min.css">
    
    
    
    
    <link rel="stylesheet" type="text/css" href="../content/css/styes.css">
*/