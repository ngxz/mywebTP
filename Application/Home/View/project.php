<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>部分项目截图展示</title>
		<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../css/common.css" />
		<link rel="stylesheet" href="../css/index.css" />
		<style type="text/css">
            .container h4{background-color:#c0c0c0;padding:5px;}
            .picList img{height:450px;}
        </style>
		<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../bootstrap/dist/js/bootstrap.min.js" ></script>
	</head>
	<body>
		<!--导航开始-->
		<nav class="navbar navbar-default">
	      	<div class="container">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="index.php">Yuanrb.com</a>
		        </div>
		        <div id="navbar">
		          <ul class="nav navbar-nav">
		            <li><a href="#">首页</a></li>
		            <li><a href="message.php">资讯中心</a></li>
		            <li><a href="WEB.php">WEB前端</a></li>
		            <li><a href="PHP.php">PHP学习</a></li>
		            <li><a href="board.php">留言板</a></li>
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
		<div class="container">
			<div class="row picList">
				<div class="col-md-offset-2 col-md-8 col-sm-8 col-xs-8">
					<h4>人事管理系统</h4>
					<img alt="" src="../img/pro/person.png">
					<img alt="" src="../img/pro/personcontrol.png">
					<img alt="" src="../img/pro/personmessage.png">
				</div>
			</div>
			<div class="row picList">
				<div class="col-md-offset-2 col-md-8 col-sm-8 col-xs-8">
					<h4>单车租赁后台系统</h4>
					<img alt="" src="../img/pro/bicyclelist.png">
					<img alt="" src="../img/pro/bicycleactivity.png">
					<img alt="" src="../img/pro/bicyclesearch.png">
				</div>
			</div>
		</div>
      	<div class="container" class="footer">
    		<div class="col-md-offset-2 col-md-8 col-sm-8 col-xs-8">
    			<div class="row">
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt><a href="">加入我吧</a></dt>
	    				<dd><a href="">联系站主</a></dd>
	    				<dd><a href="">学习探讨</a></dd>
	    				<dd><a href="">支持建议</a></dd>
	    			</dl>
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt>分享本站</dt>
	    				<dd><a href="">QQ分享</a></dd>
	    				<dd><a href="">微信分享</a></dd>
	    				<dd><a href="">复制链接</a></dd>
	    			</dl>
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt>关于我们</dt>
	    				<dd><a href="">新浪微博</a></dd>
	    				<dd><a href="">腾讯微博</a></dd>
	    			</dl>
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt>友情链接</dt>
	    				<dd><a href="">链接</a></dd>
	    				<dd><a href="">链接</a></dd>
	    			</dl>
    			</div>
    		</div>
    		<div class="row">
    			<span class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="color: darkgray;font-size: 12px;">Copyright © 2010 - 2017  南广轩主Yuanrb.com 版权所有 | 消费者维权热线：4006067733 经营证照</span>
    		</div>
      	</div>
	</body>
</html>
