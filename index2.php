<?php
header("Content-type: text/html; charset=UTF-8"); 
require_once 'include.php';
$classify = "前端分享";
$sql_stydy = "select * from article where classify='$classify' order by article_id desc limit 0,3";
$sql_stydy_1 = mysqli_query($link,$sql_stydy);
while($row = mysqli_fetch_array($sql_stydy_1)){
  	$rows[] = $row;
  }

$sql_mobile = "select * from article where classify='移动端' order by article_id desc limit 0,3";
$sql_mobile_1 = mysqli_query($link,$sql_mobile);
while($mobile = mysqli_fetch_array($sql_mobile_1)){
  	$mobiles[] = $mobile;
  }

$sql_technology = "select * from article where classify='搞机' order by article_id desc limit 0,3";
$sql_technology_1 = mysqli_query($link,$sql_technology);
while($technology = mysqli_fetch_array($sql_technology_1)){
  	$technologys[] = $technology;
  }

$sql_homepage = "select * from article where is_home='首页' order by article_id desc limit 0,5";
$sql_homepage_1 = mysqli_query($link,$sql_homepage);
while($homepage = mysqli_fetch_array($sql_homepage_1)){
  	$homepages[] = $homepage;
  }

$sql_new = "select * from article where is_home='首页' order by article_id desc limit 0,10";
$sql_new_1 = mysqli_query($link,$sql_new);
while($new = mysqli_fetch_array($sql_new_1)){
  	$news[] = $new;
  }

$sql_hot = "select * from article where is_home='首页' order by views desc limit 0,10";
$sql_hot_1 = mysqli_query($link,$sql_hot);
while($hot = mysqli_fetch_array($sql_hot_1)){
  	$hots[] = $hot;
  }
?>

<html>
<head>
<meta charset="utf-8">	
<title>index</title>
<link rel="stylesheet" type="text/css" href="css/blog.css">
<link rel="stylesheet" type="text/css" href="css/blog2.css">

<script type="text/javascript" src="js/move.js"></script>
<script type="text/javascript" src="js/blog2.js"></script>
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

<div id="content">
	<div id="playimages" class="play">
		<ul class="play_pic">

			<div class="prev"></div>
			<div class="next"></div>

			<li  style="z-index:1;"><a href="javascript:;"><img src="images/pic1.jpg"></a></li>
			<li><a href="javascript:;"><img src="images/pic2.jpg"></a></li>
			<li><a href="javascript:;"><img src="images/pic3.jpg"></a></li>
			<li><a href="javascript:;"><img src="images/pic4.jpg"></a></li>
		</ul>
		<div class="dot">
			<div class="dot_pic">
				<ul class="dot_pic_ul">
					<li class="now_dot"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="content_next">
	<div class="content_next_left">

		<div class="article article_size">
			
			<div class="article_web">
				<div class="article_web_title">
					<h2 class="web_title">
						<a href="index_study.php?p=1">Web前端</a>
					</h2>
				</div>
				<ul class="article_web_ul">
					<?php foreach($rows as $row): ;?>
						<li>
							<div class="article_img"><a href="article.php?article_id=<?php echo $row['article_id'];?>"><img src="<?php echo $row['digest_img'] ;?>"></a></div>
							<h3><a href="article.php?article_id=<?php echo $row['article_id'];?>"><?php echo $row['title'];?></a></h3>
							<div class="article_digest"><?php echo $row['digest_content'];?></div>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
			
			<div class="clear"></div>
			<div class="article_web">
				<div class="article_web_title">
					<h2 class="web_title">
						<a href="index_mobile.php?p=1">移动端</a>
					</h2>
				</div>
				<ul class="article_web_ul">
					<?php foreach($mobiles as $mobile): ;?>
						<li>
							<div class="article_img"><a href="article.php?article_id=<?php echo $mobile['article_id'];?>"><img src="<?php echo $mobile['digest_img'] ;?>"></a></div>
							<h3><a href="article.php?article_id=<?php echo $mobile['article_id'];?>"><?php echo $mobile['title'];?></a></h3>
							<div class="article_digest"><?php echo $mobile['digest_content'];?></div>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="article_web">
				<div class="article_web_title">
					<h2 class="web_title">
						<a href="index_technology.php?p=1">生活•科技之美</a>
					</h2>
				</div>
				<ul class="article_web_ul">
					<?php foreach($technologys as $technology): ;?>
						<li>
							<div class="article_img"><a href="article.php?article_id=<?php echo $technology['article_id'];?>"><img src="<?php echo $technology['digest_img'] ;?>"></a></div>
							<h3><a href="article.php?article_id=<?php echo $technology['article_id'];?>"><?php echo $technology['title'];?></a></h3>
							<div class="article_digest"><?php echo $technology['digest_content'];?></div>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
			<div class="clear"></div>

			<div class="new_article">
				<div class="new_article_title">
					<h2>最新文章</h2>
				</div>
				<?php foreach($homepages as $homepage): ?>
					<div class="new_article_content">
						<article class="new_article_content_1">
							<div class="new_article_content_1_inner">
								<h2><a href="article.php?article_id=<?php echo $homepage['article_id'];?>">“<?php echo $homepage['title'];?>”</a></h2>
								<a class="new_article_img" href="article.php?article_id=<?php echo $homepage['article_id'];?>"><img src="<?php echo $homepage['digest_img'] ;?>"></a>
								<section><?php  echo $homepage['digest_content'];?></section>
								<div class="new_article_date"><span><?php echo $homepage['publish_time'];?></span><span class="new_article_date_down"></span></div>
								<footer class="new_article_footer"><span><?php echo $homepage['views'];?>次浏览</span></footer>
							</div>
						</article>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>

	<div class="sidebar">
		<div class="sidebar_content">
			<div class="sidebar_content_search">
				<form class="search_form" action="search_result.php" method="post">
					<input type="text" class="search_form_text" name="search" placeholder="输入关键字搜索相关文章"/>
					<input type="submit" class="search_form_button" value="搜索" />
				</form>
			</div>
			<div class="sidebar_content_article">
				<section>
					<h4 class="action" style="background:#39f;" id="hot">最热文章</h4>
					<h4 id="new">最新文章</h4>
				</section>
				<ul class="sidebar_content_article_hot" style="display:block;">

					<?php  foreach($hots as $hot): ;?>
						<li><a href="article.php?article_id=<?php echo $hot['article_id'];?>"><?php echo $hot['title'];?></a><span>(<?php echo $hot['views'];?>)</span></li>
					<?php endforeach;?>
				</ul>
				<ul class="sidebar_content_article_new" style="display:none;">

					<?php  foreach($news as $new): ;?>
						<li><a href="article.php?article_id=<?php echo $new['article_id'];?>"><?php echo $new['title'];?></a><span>(<?php echo $new['views'];?>)</span></li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>

</div>

<div class="clear"></div>

<div id="footer">
	<div class="footer_content">
		Copyright 2016 <a href="http://www.ibelievei.com">爱•不凡</a> &nbsp;|&nbsp; 豫ICP备16016062号
	</div>
</div>
</body>
</html>