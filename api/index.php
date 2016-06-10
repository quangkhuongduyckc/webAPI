<?php
/**
 * Created by PhpStorm.
 * User: quangkhuongduy
 * Date: 3/3/16
 * Time: 15:06
 */
$id = $_REQUEST['id'];
if($id === 'phimmoi'){
    include 'dbAPI/getPhimMoi.php';
}elseif($id === 'phimle'){
    include 'dbAPI/getPhimLe.php';
}elseif($id === 'phimbo'){
    include 'dbAPI/getPhimBo.php';
}elseif($id === "theloai"){
    include 'dbAPI/getTheLoai.php';
}elseif($id === "about"){
    include 'dbAPI/getAbout.php';
}elseif($id === "getvideos"){
    include 'dbAPI/getVideos.php';
}elseif($id === "phimtheotheloai"){
    include 'dbAPI/getPhimTheoTheLoai.php';
}elseif($id === "adduser"){
    include 'dbAPI/addUser.php';
}elseif($id === "themluotxem"){
    include 'dbAPI/themLuotXem.php';
}elseif($id === "thich_khongthich"){
    include 'dbAPI/set_get_like.php';
}elseif($id === "binhluan"){
    include 'dbAPI/binhLuan.php';
}elseif($id === "soluonglikesviewsbinhluan"){
    include 'dbAPI/get_SoLuong_likes_Views_BinhLuan.php';
}elseif($id === "xuhuongtimkiem"){
    include 'dbAPI/getXuHuongTimKiem.php';
}elseif($id === "timkiem"){
    include "dbAPI/timkiem.php";
}elseif($id === "dangky"){
    include "dbAPI/dangky.php";
}elseif($id === "dangnhap"){
    include "dbAPI/dangnhap.php";
}

