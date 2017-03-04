<?php
header("Content-type: text/html; charset=UTF-8"); 
require_once '../connect.php';
require_once '../include.php';
checkLogined();
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>writing</title>
    <link type="text/css" href="css/admin.css" rel="stylesheet" />
    <link type="text/css" href="css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
    <link type="text/css" href="css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="js/jquery-ui-timepicker-zh-CN.js"></script>

    <script type="text/javascript" src="js/laydate.dev.js"></script>
    <script type="text/javascript">
    window.onload=function()
    {
        oBtn = document.getElementById('J-xl-2-btn');
        oBtn.onclick = function(){
                laydate({
                    elem: '#J-xl-2'
                });
            }
    }

    // $(function () {
    //     $(".ui_timepicker").datetimepicker({
    //         //showOn: "button",
    //         //buttonImage: "./css/images/icon_calendar.gif",
    //         //buttonImageOnly: true,
    //         showSecond: true,
    //         timeFormat: 'hh:mm:ss',
    //         stepHour: 1,
    //         stepMinute: 1,
    //         stepSecond: 1
    //     })
    // })
    </script>
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
    </div>
    <div class="left_write">
        <h1>编辑文章</h1>
        <form action="writing_action.php?action=add" method="post" enctype="multipart/form-data" style="line-height:20px;">
            <table class="admin_table" cellspacing="0">
                <tr> 
                    <td>文章标题：</td>
                    <td><input type="text" name="title" placeholder="文章标题"></td>
                </tr>
                <tr>
                    <td>摘要图片：</td>
                    <td><input type="file" name="digest_img" placeholder="摘要图片"></td>
                </tr>
                <tr>
                    <td>文章摘要：</td>
                    <td><input type="text" name="digest_content" placeholder="文章摘要"></td>
                </tr>
                <tr style="flout:right">
                    <td>发布时间：</td>
                    <!-- <td><input type="text" name="publish_time" class="ui_timepicker"></td> -->

                    <td>
                        <input type="text" name="publish_time" id="J-xl-2" class="time">
                        <input type="button" id="J-xl-2-btn" value="打开" class="time">
                    </td>
                </tr>
                <tr>
                    <td>文章分类：</td>
                    <td>
                        <select name="classify">
                            <option value="前端分享">前端分享</option>
                            <option value="移动端">移动端</option>
                            <option value="日记">日记</option>
                            <option value="搞机">搞机</option>
                            <option value="随笔">随笔</option>
                            <option value="嘈点">嘈点</option>
                            <option value="旅行">旅行</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>是否在首页显示:</td>
                    <td>
                        <select name="is_home">
                            <option value="否">否</option>
                            <option value="首页">是</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>文章内容：</td>
                    <td>
                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="content" type="text/plain" placeholder="文章内容">
                
                        </script>
                    </td>
                </tr>
            </table>
            <p><input class="article_submit" type="submit" value="发布" style="color:#fff;font-size:20px;font-weight:bold;"></p>
        </form>
        <!-- 配置文件 -->
        <script type="text/javascript" src="ueditor/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
        <script type="text/javascript" src="ueditor/ueditor.all.js"></script>
        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var editor = UE.getEditor('container');
            // var editor = new UE.ui.Editor({ initialFrameWidth:910 });
            // editor.render("textarea");
        </script>
        <h1 class="footer_writing"><a href='index.php'>查看文章</a></h1>
    </div>
</body>

</html>