<?php
header("Content-type: text/html; charset=UTF-8"); 
require_once 'include.php';
?>
<html>
<head>
<meta charset="utf-8">	
<!-- <title>header</title> -->
<link rel="stylesheet" type="text/css" href="css/blog.css">
<link rel="stylesheet" type="text/css" href="css/blog2.css">

<script type="text/javascript" src="js/move.js"></script>
<script type="text/javascript" src="js/blog2.js"></script>
<script type="text/javascript" src="js/paging.js"></script>
</head>
<body>
<div id="header">
	<div id="logo"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"><img src="images/logo.png"></a></div>
	<ul id="menu">
		<li><a href="http://www.ibelievei.com">首页</a><span></span></li>
		<li><a href="index_study.php?p=1">Web前端</a><span></span></li>
		<li><a href="index_mobile.php?p=1">移动端</a><span></span></li>
		<li><a href="index_technology.php?p=1">科技•生活</a><span></span></li>
		<li><a href="index_travel.php?p=1">那山•那景</a><span></span></li>
		<li><a href="index_diary.php?p=1">那人•那事</a><span></span></li>
	</ul>
</div>