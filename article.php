<?php
require_once 'include.php';
require_once 'header.php';

$article_id = $_GET['article_id'];
// 更新浏览量
$sql_views = "update article set views = views+1 where article_id= '$article_id' ";
mysqli_query($link,$sql_views);

$sql_stydy = "select * from article where article_id='$article_id'";
$sql_stydy_1 = mysqli_query($link,$sql_stydy);
$row = mysqli_fetch_array($sql_stydy_1);

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

<div class="article_content_next">
	<div class="article_content_next_content">
		<div class="article_content_next_left">
			<article class="article_content_next_left_content">
				<div class="article_inner">
					<header class="article_title"><h1><?php echo $row['title'];?></h1></header>
				
				<div class=article_publish_info>
					<time class="article_publish_time"><?php echo $row['publish_time'];?></time>
					<span class="article_read_num article_publish_time"><?php echo $row['views'];?>次浏览</span>
				</div>
				<div class="article_content"><?php echo $row['content'];?></div>

				
				</div>
				
				<!-- UY BEGIN -->
				<div id="uyan_frame"></div>
				<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2119816"></script>
				<!-- UY END -->
			</article>	
		</div>


		<div class="sidebar">
			<div class="sidebar_content">
				<div class="sidebar_content_search">
					<form method="get" class="search_form" action="">
						<input type="text" class="search_form_text" name="search" placeholder="输入关键字搜索相关文章"/>
						<input type="submit" class="search_form_button" value="搜索" />
					</form>
				</div>
				<div class="sidebar_content_article">
					<section>
						<h4 class="action" style="background:#39f;" id="hot">热门文章</h4>
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
	
</div>
	


<div class="clear"></div>

<div id="footer">
	<div class="footer_content">
		Copyright 2016 <a href="http://www.ibelievei.com">爱•不凡</a> &nbsp;|&nbsp; 豫ICP备16016062号
	</div>
</div>
