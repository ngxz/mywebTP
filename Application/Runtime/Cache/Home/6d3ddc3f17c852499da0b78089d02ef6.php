<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="/mywebTP/Public/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/mywebTP/Public/css/common.css" />
		<link rel="stylesheet" href="/mywebTP/Public/css/index.css" />
		<style type="text/css">
			.contentBox{text-align: center;}
			.contentBox h5{color: darkgray;}
			.contentBox p{margin-bottom:20px;text-indent: 2em;}
		</style>
		<script type="text/javascript" src="/mywebTP/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/mywebTP/Public/bootstrap/dist/js/bootstrap.min.js" ></script>
	</head>
	<body>
		<!--导航开始-->
		<nav class="navbar navbar-default">
	      	<div class="container">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="/mywebTP/index.php/Home/IndexPage/indexLoad">Yuanrb.com</a>
		        </div>
		        <div id="navbar">
		          <ul class="nav navbar-nav">
		            <li><a href="/mywebTP/index.php/Home/IndexPage/indexLoad">首页</a></li>
		            <li class="active"><a href="news.html">资讯中心</a></li>
		            <li><a href="/mywebTP/index.php/Home/WebPage/webLoad">WEB前端</a></li>
		            <li><a href="/mywebTP/index.php/Home/PhpPage/phpLoad">PHP学习</a></li>
		            <li><a href="/mywebTP/index.php/Home/BoardPage/boardLoad">留言板</a></li>
		            <li><a href="/mywebTP/index.php/Home/Aboutme/aboutme">关于我</a></li>
		          </ul>
		          <!--搜索框-->
		          <div class="nav navbar-nav navbar-right">
		          		<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="请输入">
							</div>
							<button type="submit" class="btn btn-default">搜索</button>
						</form>
		          </div>
		        </div>
	      	</div>
    	</nav>
		<!--本页独立内容-->
		<div class="container contentBox">
			<h3><?php echo ($row[0]["title"]); ?></h3>
			<h5><?php echo ($row[0]["time"]); ?></h5>
			<p><?php echo ($row[0]["content"]); ?></p>
		</div>
		<!--footer-->
      	<div class="container footer">
      		<span>QQ : 1433210198 &nbsp; mail : NGXZ92@163.COM</span>
    		<span>Copyright © 2010 - 2017  南广轩主Yuanrb.com 版权所有</span>
      	</div>
	</body>
</html>