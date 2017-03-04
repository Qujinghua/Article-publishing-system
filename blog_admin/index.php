<?php
header("Content-type: text/html; charset=UTF-8"); 
require_once '../connect.php';
require_once '../include.php';
checkLogined();


?>
<html>
<head>
    <meta charset="utf-8">
    <title>后台文章主页</title>
    <link type="text/css" href="css/admin.css" rel="stylesheet" />
</head>
<body>
    <div class="header">
        <h1>后台文章管理</h1>     
    </div>
    <div class="header_bottom">
        <sapn>管理员：

            <?php 
                if(isset($_SESSION['adminName'])){
                    echo $_SESSION['adminName'];
                }elseif(isset($_COOKIE['adminName'])){
                    echo $_COOKIE['adminName'];
                }
            ?>

            登陆成功！
        </span>
    </div>
    <div class="content">
        <div class="content_left">
            <p>文章分类</p>
            <ul>
                <li><a href="show_study.php?p=1">前端攻城</a></li>
                <li><a href="show_mobile.php?p=1">移动端</a></li>
                <li><a href="show_diary.php?p=1">日记</a></li>
                <li><a href="show_technology.php?p=1">搞机</a></li>
                <li><a href="show_travel.php?p=1">旅行</a></li>
                <li><a href="show_laugh.php?p=1">嘈点</a></li>
                <li><a href="show_essay.php?p=1">随笔</a></li>
            </ul>
        </div>
        <div>
            <h1 class="index_h1"><a href="writing.php">添加文章</a></h1>
        </div>
    </div>
</body>
</html>