<?php
require_once 'connect.php';
require_once 'page.php';
$classify = "嘈点";
$page = $_GET['p'];
$pageSize = 3;
$rs = ($page-1)*$pageSize;
$sql_stydy = "select * from article where classify='$classify' order by article_id desc limit ".$rs.",{$pageSize}";
$sql_stydy_1 = mysqli_query($link,$sql_stydy);
while($row = mysqli_fetch_array($sql_stydy_1)){
  	$rows[] = $row;
  }


// echo "<pre>";
// print_r($_SERVER);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>嘈点</title>
	<link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>

<?php foreach($rows as $row): ?>
	<?php echo "<br>";?>
	<a href="article.php?article_id=<?php echo $row['article_id'];?>"><?php echo $row['title'];?></a>
	<?php echo "<br>";?>
	<?php echo $row['content'];?>
<?php endforeach;?>

<!-- 分页 -->
<?php echo indexpage($classify,$link,$pageSize);?>



</body>
</html>