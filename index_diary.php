<?php
require_once 'include.php';
require_once 'header.php';
$classify = "日记";
$page = $_GET['p'];
$pageSize = 5;
$rs = ($page-1)*$pageSize;
$sql_stydy = "select * from article where classify='$classify' order by article_id desc limit ".$rs.",{$pageSize}";
$sql_stydy_1 = mysqli_query($link,$sql_stydy);
while($row = mysqli_fetch_array($sql_stydy_1)){
  	$rows[] = $row;
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

// echo "<pre>";
// print_r($_SERVER);
?>

<div class="content_next">
	<div class="content_next_left">
		<div class="article article_size">
			<div class="new_article">
				<div class="new_article_title">
					<h2>最新文章</h2>
				</div>
				<?php foreach($rows as $row): ?>
					<div class="new_article_content">
						<article class="new_article_content_1">
							<div class="new_article_content_1_inner">
								<h2><a href="article.php?article_id=<?php echo $row['article_id'];?>">“<?php echo $row['title'];?>”</a></h2>
								<a class="new_article_img" href="article.php?article_id=<?php echo $row['article_id'];?>"><img src="<?php echo $row['digest_img'] ;?>"></a>
								<section><?php  echo $row['digest_content'];?></section>
								<div class="new_article_date"><span><?php echo $row['publish_time'];?></span><span class="new_article_date_down"></span></div>
								<footer class="new_article_footer"><span><?php echo $row['views'];?>次浏览</span></footer>
							</div>
						</article>
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<?php echo indexpage($classify,$link,$pageSize);?>
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

<div class="clear"></div>

<div id="footer">
	<div class="footer_content">
		Copyright 2016 <a href="http://www.ibelievei.com">爱•不凡</a> &nbsp;|&nbsp; 豫ICP备16016062号
	</div>
</div>
