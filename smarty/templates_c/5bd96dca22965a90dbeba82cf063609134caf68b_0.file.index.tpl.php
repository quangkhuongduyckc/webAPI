<?php /* Smarty version 3.1.24, created on 2016-06-10 14:12:04
         compiled from "/Users/quangkhuongduy/Desktop/webAPI//templates/login/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1796187574575aae94db5d23_64958467%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bd96dca22965a90dbeba82cf063609134caf68b' => 
    array (
      0 => '/Users/quangkhuongduy/Desktop/webAPI//templates/login/index.tpl',
      1 => 1464705698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796187574575aae94db5d23_64958467',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_575aae94dea1c7_56293450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575aae94dea1c7_56293450')) {
function content_575aae94dea1c7_56293450 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1796187574575aae94db5d23_64958467';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập</title>

    <!-- Bootstrap -->
    <link href="../content/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../content/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../content/css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form method="post" action="">
              <h1>Đăng nhập admin</h1>
              <div>
                <input type="text" class="form-control" placeholder="Tên đăng nhập" required="" name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="passwork"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Đăng nhập</button>
                <a class="reset_pass" href="#">Quên mật khẩu?</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <h4><i class="fa fa-paw" style="font-size: 26px;"></i> Đồ án tốt nghiệp khoá 2013-2016</h4>
                  <p>Tên đề tài: Xây dựng </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class=" form">
          <section class="login_content">
            <form method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" href="index.html">Submit</button>
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                <p class="change_link">Already a member ?
                  <a href="#tologin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                  <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html><?php }
}
?>