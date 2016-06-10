<?php /* Smarty version 3.1.24, created on 2016-06-10 14:47:32
         compiled from "/Users/quangkhuongduy/Desktop/webAPI//templates/qlbinhluan/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:192640815575ab6e4560f59_27468610%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5929f4b497a5cab28972adcfec9472eb8f095d7' => 
    array (
      0 => '/Users/quangkhuongduy/Desktop/webAPI//templates/qlbinhluan/index.tpl',
      1 => 1465131505,
      2 => 'file',
    ),
    '67bcc114f782a77993be33ebf2ef625b6d213298' => 
    array (
      0 => '/Users/quangkhuongduy/Desktop/webAPI//templates/master/masteradmin.tpl',
      1 => 1465401035,
      2 => 'file',
    ),
    '2a71d5a62ef18477afd714b2d41632dc670c3d57' => 
    array (
      0 => '2a71d5a62ef18477afd714b2d41632dc670c3d57',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '192640815575ab6e4560f59_27468610',
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_575ab6e45d4309_06173933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575ab6e45d4309_06173933')) {
function content_575ab6e45d4309_06173933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '192640815575ab6e4560f59_27468610';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản lý</title>

    <!-- Bootstrap -->
    <link href="../../content/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../content/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../../content/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../../content/css/custom.css" rel="stylesheet">
    <style type="text/css">
        table {
            width: 100%;
        }

        thead, tbody, tr, td, th { display: block; }

        tr:after {
            content: ' ';
            display: block;
            visibility: hidden;
            clear: both;
        }

        thead th {
            height: 100%;

            /*text-align: left;*/
        }

        tbody {
            height: 70vh;
            overflow-y: auto;
        }

        thead {
            /* fallback */
        }


        tbody td, thead th {
            width: 25%;
            float: left;
        }
        .stt{
            width: 5%;
        }
        .tenphim{
            width: 50%;
        }
        .soluotbinhluan{
            width: 20%;
        }
        .chucnang{
            width: 25%;
        }
        table thead tr th span{
            font-size: 125%;
        }
        .chucnangbinhluan{
            width: 15%;
        }
        .binhluan{
            width: 60%;
        }

        .tenfacebook{
            width: 35%;
        }
        .username{
            width: 35%;
        }
        .qlthanhvien td{
            height: 60px;
        }

    </style>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title">
                        <i class="fa fa-youtube-play"></i>
                <span>
                  Phim 24H
                </span>
                    </a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="../../admin/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</h3>
                        <ul class="nav side-menu">
                            <li><a href="/admin"><i class="fa fa-home"></i> Home </a>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="/qlbinhluan">Quản lý bình luận</a>
                                    </li>
                                    <li>
                                        <a href="/qlthanhvien">Quản lý thành viên</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-cloud-upload"></i> Cập nhật <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="/qlbinhluan">Phim</a>
                                    </li>
                                    <li>
                                        <a href="form_advanced.html">Thể loại</a>
                                    </li>
                                    <li>
                                        <a href="form_advanced.html">Đạo diễn</a>
                                    </li>
                                    <li>
                                        <a href="form_advanced.html">Diễn viên</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="../../admin/images/img.jpg" alt=""><?php echo $_smarty_tpl->tpl_vars['users']->value;?>

                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="/admin/?logout">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="right_col" role="main">
            <?php
$_smarty_tpl->properties['nocache_hash'] = '192640815575ab6e4560f59_27468610';
?>

    <div class="row">
        <div class="col-md-12 title_quanlybinhluan" style="background-color: #b9def0; padding: 10px">
            <div class="tite">
                <div class="col-md-5">
                    <span style="font-size: 150%">Quản lý bình luận</span>
                </div>
                <div class="col-md-7 text-right">
                    <span style="font-size: 150%">Tìm kiếm</span>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="stt text-center">
                        <span>STT</span>
                    </th>
                    <th class="tenphim text-center">
                        <span>Tên phim</span>
                    </th>
                    <th class="soluotbinhluan text-center">
                        <span>Lượt bình luận</span>
                    </th>
                    <th class="chucnang text-center">
                        <span>Chức năng</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['dtqlbinhluan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
                        <tr>
                            <td class="filterable-cell stt text-center"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                            <td class="filterable-cell tenphim text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['tenphim'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['tap'] > 0) {?>- tập: <?php echo $_smarty_tpl->tpl_vars['data']->value['tap'];
}?></td>
                            <td class="filterable-cell soluotbinhluan text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['tongbinhluan'];?>
</td>
                            <td class="filterable-cell chucnang text-center">
                                <a href="binhluan/?idvd=<?php echo $_smarty_tpl->tpl_vars['data']->value['videosid'];?>
">Xem chi tiết</a>
                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
    <br>

        </div>

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                <p>Đồ án tốt nghiệp khoá 2013 -2016</p>
                <p>Tên đồ án: Xây dựng ứng dụng xem phim trên IOS</p>
                <p>Giáo viên hướng dẫn: Trần Thanh Tuấn</p>
                <p>Sinh viên thực hiện: Quảng Khương Duy</p>
                <p>MSSV: 0306131097</p>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- compose -->
<div class="compose col-md-6 col-xs-12">
    <div class="compose-header">
        New Message
        <button type="button" class="close compose-close">
            <span>×</span>
        </button>
    </div>

    <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                        </a>
                    </li>
                    <li>
                        <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                        </a>
                    </li>
                    <li>
                        <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu input-append">
                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                    <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
            </div>

            <div class="btn-group">
                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
            </div>

            <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
            </div>
        </div>

        <div id="editor" class="editor-wrapper"></div>
    </div>

    <div class="compose-footer">
        <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
    </div>
</div>
<!-- /compose -->

<!-- jQuery -->
<?php echo '<script'; ?>
 src="../../content/vendors/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="../../content/vendors/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="../../content/vendors/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
<!-- NProgress -->
<?php echo '<script'; ?>
 src="../../content/vendors/nprogress/nprogress.js"><?php echo '</script'; ?>
>
<!-- bootstrap-wysiwyg -->
<?php echo '<script'; ?>
 src="../../content/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../content/vendors/jquery.hotkeys/jquery.hotkeys.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../content/vendors/google-code-prettify/src/prettify.js"><?php echo '</script'; ?>
>

<!-- Custom Theme Scripts -->
<?php echo '<script'; ?>
 src="../../content/js/custom.js"><?php echo '</script'; ?>
>

<!-- bootstrap-wysiwyg -->
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function(idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function() {
                        return false;
                    })
                    .change(function() {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function() {
                        this.value = '';
                        $(this).change();
                    });

            $('[data-role=magic-overlay]').each(function() {
                var overlay = $(this),
                        target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });

            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();

                $('.voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('.voiceBtn').hide();
            }
        }

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });

        prettyPrint();
    });
<?php echo '</script'; ?>
>
<!-- /bootstrap-wysiwyg -->

<!-- compose -->
<?php echo '<script'; ?>
>
    $('#compose, .compose-close').click(function(){
        $('.compose').slideToggle();
    });
<?php echo '</script'; ?>
>>
<!-- /compose -->
</body>
</html><?php }
}
?>