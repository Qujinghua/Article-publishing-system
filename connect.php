<?php
error_reporting(E_ALL & ~E_DEPRECATED);
header("Content-type: text/html; charset=UTF-8"); 

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PWD", "");
define("DB_DBNAME", "myblog");
define("DB_CHARSET", "utf8");

function connect(){
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME) or die("数据库连接失败：".mysqli_errno().":".mysqli_error());
	mysqli_set_charset($link,DB_CHARSET);
	// mysql_select_db(DB_DBNAME) or die("指定数据库打开失败".mysqli_errno().":".mysqli_error());
	return $link;
}
$link = connect();
connect();
?>