<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 10/3/15
 * Time: 21:52
 */

if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'.'']);

class config
{
    const app_dir = APP_BASE_PATH;
    const db_host = "localhost";
    const db_user = "root";
    const db_pass = "";
    const db_name = "phimonline";
}
