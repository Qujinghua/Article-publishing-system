<?php
require_once 'connect.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>myblog</title>
<link rel="stylesheet" type="text/css" href="css/blog.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/blog.js"></script>
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<a href="/" class="logo"><img class="logo_img" src="images/logo.jpg"></a>
			<p class="title">Uncommon</p>
			<!-- <ul>
				<li><a href="#" target="_blank"><img src="images/github1.jpg"></a></li>
			</ul> -->
			<div class="about">
				<a href="#">About</a>
			</div>
		</div>
	</div>



	<div id="content">
		<div class="article">
			<ul>
				<li>
					<span class="article_date">
						<?php echo date("M d , Y"); ?>
					</span>
					<h2></h2>
				</li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>



	<div id="footer">
		<p>Copyright 2016 Uncommon. 豫ICP备16016062</p>
	</div>
</body>
</html>




