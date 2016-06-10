<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 10/3/15
 * Time: 22:01
 */
if(!defined('APP_BASE_PATH')) define('APP_BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once APP_BASE_PATH.'config_smarty.php';
require_once APP_BASE_PATH.'common/utilities.php';
require_once APP_BASE_PATH.'common/contants.php';
require_once APP_BASE_PATH.'common/config.php';
require_once APP_BASE_PATH.'db/db.php';

function checkauth(){

    redirect('/login');
}
function redirect($url,$statusCode = 303){
    header('Location:'.$url,true,$statusCode);
    die();
}
function setsession($key,$data)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION[$key] = $data;
}
function getsession($key)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    return $_SESSION[$key];
}

function checksession($key){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION[$key])  && !empty($_SESSION[$key]) ){
        return true;
    }
    return false;
}

function removeAllsession(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    session_destroy();
}
function removesession($key){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    unset($_SESSION[$key]);
}