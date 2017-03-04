<?php
header("Content-type: text/html; charset=UTF-8"); 
require_once '../connect.php';
require_once 'admin_page.php';
require_once '../include.php';
checkLogined();

$classify = "旅行";
$page = $_GET['p'];
//每页数量
$pageSize = 5;
$rs = ($page-1)*$pageSize;
$sql_stydy = "select * from article where classify='$classify' order by article_id desc limit ".$rs.",{$pageSize}";
$sql_stydy_1 = mysqli_query($link,$sql_stydy);
while($row = mysqli_fetch_array($sql_stydy_1)){
  	$rows[] = $row;
  }

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
    </div>    <div class="content">
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
            <form action="writing_action.php?action=delete" method="post">
				<table border="1" cellspacing="0" class="show_table">	
					<tr>
						<td>序号</td>
						<td>标题</td>
						<td>摘要图</td>
						<!-- <td>文章摘要</td> -->
						<!-- <td>内容</td> -->
						<td>发布时间</td>
						<td>浏览量</td>
						<td>所属分类</td>	
						<td>操作</td>
						<td>操作</td>
						<td>操作</td>	
					</tr>
					
						<?php foreach($rows as $row): ?>
						
						<tr>
							<td><?php echo $row['article_id'];?></td>
							<td><?php echo $row['title'];?></a></td>
							<td><?php echo $row['digest_img'];?></td>
							<!-- <td><?php echo $row['digest_content'];?></td> -->
							<!-- <td><?php echo $row['content'];?></td> -->
							<td><?php echo $row['publish_time'];?></td>
							<td><?php echo $row['views'];?></td>
							<td><?php echo $row['classify'];?></td>
							<td class="button_update"><a href="update_study.php?article_id=<?php echo $row['article_id'];?>">更新</a></td>
							<td align="center"><input type="checkbox" name="article_id" value="<?php echo $row['article_id'];?>"></td>
							<td><input type="submit" class="delete" value="删除"></td>
						</tr>
					<?php endforeach;?>
				</table>
			</form>
			<?php echo page($classify,$link,$pageSize);?>
        </div>
        <h1 class="show_travel_bottom"><a href="writing.php">添加文章</a></h1>
    </div>
</body>
</html>