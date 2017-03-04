<?php
header("Content-type: text/html; charset=UTF-8"); 
require_once 'connect.php';
require_once 'page.php';
session_start();

//检查是否有管理员登陆
function checkLogined(){
  if ($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
    echo "<script>alert('请先登录'); window.location.href='login.php';</script> ";
  	}
  }

