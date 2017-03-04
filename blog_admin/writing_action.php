<?php
header("Content-type: text/html; charset=UTF-8");
include_once 'upload.func.php';
require_once '../connect.php';

switch ($_GET['action']) {
// 发布文章
case 'add':
	$title=$_POST['title'];

	$fileInfo=$_FILES['digest_img'];
	$newName=uploadFile($fileInfo);
	$digest_img = 'blog_admin/'.$newName;

	$digest_content=$_POST['digest_content'];
	$content=$_POST['content'];
	$publish_time=$_POST['publish_time'];
	$classify=$_POST['classify'];
	$is_home=$_POST['is_home'];

	$sql_add = "insert into article (title,digest_img,digest_content,content,publish_time,classify,is_home)VALUES
('$title','$digest_img','$digest_content','$content','$publish_time','$classify','$is_home')";
$result = mysqli_query($link,$sql_add);
if ($result) {
	echo "发布成功";
	echo "<br><h1><a href='index.php'>查看文章</a></h1>";
}else{
	echo "发布失败";
	echo "<br><h1><a href='index.php'>查看文章</a></h1>";
}
break;
	
// 更新文章
case 'update':
	$article_id=$_GET['article_id'];
	$title=$_POST['title'];

	$fileInfo=$_FILES['digest_img'];
	$newName=uploadFile($fileInfo);
	$digest_img = 'blog_admin/'.$newName;

	$digest_content=$_POST['digest_content'];
	$content=$_POST['content'];
	$publish_time=$_POST['publish_time'];
	$classify=$_POST['classify'];
	$is_home=$_POST['is_home'];	

	$sql_update = "update article set title = '$title',digest_img = '$digest_img',
	digest_content = '$digest_content',content = '$content',publish_time = '$publish_time',
	classify = '$classify',is_home = '$is_home' where article_id = '$article_id'";
$result = mysqli_query($link,$sql_update);
if ($result) {
	echo "更新成功";
	echo "<br><h1><a href='index.php'>查看文章</a></h1>";
}else{
	echo "更新失败";
	echo "<br><h1><a href='index.php'>查看文章</a></h1>";
}
break;

// 删除文章
case 'delete':
	$article_id=$_POST['article_id'];
	echo($article_id);
	// $title=$_POST['title'];
	// $digest_img=$_POST["digest_img"];
	// $digest_content=$_POST['digest_content'];
	// $content=$_POST['content'];
	// $publish_time=$_POST['publish_time'];
	// $classify=$_POST['classify'];
	
$sql_delete = "delete from article where article_id = '$article_id'";
$result = mysqli_query($link,$sql_delete);
if ($result) {
	echo "删除成功";
	echo "<br><h1><a href='index.php'>查看文章</a></h1>";
}else{
	echo "删除失败";
	echo "<br><h1><a href='index.php'>查看文章</a></h1>";
}
break;




	default:
		echo("你确定你的操作是对的？？？");
		break;
}

?>