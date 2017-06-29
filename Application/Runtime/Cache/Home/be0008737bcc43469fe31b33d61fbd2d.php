<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>留言板</title>
		<link rel="stylesheet" href="/mywebTP/Public/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/mywebTP/Public/css/common.css" />
		<style>
			.contentLeft ul{overflow: hidden;}
			.contentLeft ul li{width: 100%;overflow: hidden;margin-bottom: 5px;}
			.contentLeft ul li img{float: left;}
			.contentLeft ul li .contentBox{float: left;margin-left: 20px;}
			.contentBox span{color:gray;}
		</style>
		<script type="text/javascript" src="/mywebTP/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/mywebTP/Public/bootstrap/dist/js/bootstrap.min.js" ></script>
		<script type="text/javascript">
			//type值为0，下一页，为-1，上一页，为正到指定页
			function turnPage(pageNo,type){
				var pageNo = parseInt(pageNo);
				if(type == 0){
					pageNo += 1;
					if(pageNo > parseInt('<?php echo ($page["total"]); ?>'/10)+1){
						alert('已经是最后一页了！');
						pageNo = parseInt('<?php echo ($page["total"]); ?>'/10)+1;
						return;
					}
				}else if(type == -1){
					pageNo -= 1;
					if(pageNo == 0){
						alert('已经是第一页了！');
						pageNo = 1;
						return;
					}
				}else{
					pageNo = type;
				}
				location.href = "/mywebTP/index.php?c=boardPage&a=boardLoad&pageNo ="+pageNo+"&pageNo="+pageNo;
			}
		</script>
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
		            <li><a href="/mywebTP/index.php/Home/MessagePage/message">资讯中心</a></li>
		            <li><a href="/mywebTP/index.php/Home/WebPage/webLoad">WEB前端</a></li>
		            <li><a href="/mywebTP/index.php/Home/PhpPage/phpLoad">PHP学习</a></li>
		            <li class="active"><a href="#">留言板</a></li>
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
    	<!-- 本页独立 -->
    	<div class="container">
			<!--内容-->
			<div class="contentLeft">
				<ul>
					<?php if(is_array($data["rows"])): $i = 0; $__LIST__ = $data["rows"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><li>
							<a href="/mywebTP/index.php/Home/ArticleContent/article_content/id/<?php echo ($rows["id"]); ?>">
								<img src="/mywebTP/Public/img/ace.jpg" width="100px" height="100px" />
								<div class="contentBox">
									<h4><?php echo ($rows["title"]); ?></h4>
									<span><?php echo ($rows["author"]); ?> <?php echo ($rows["time"]); ?></span>
									<p><?php echo ($rows["content"]); ?></p>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
   		<!-- 分页 -->
		<nav aria-label="Page navigation" class="text-center">
		  <ul class="pagination">
		  	<li><a href="javascript:void(0);">第<?php echo ($data["pageNo"]); ?>页</a></li>
		    <li id="pageLeft">
		      <a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',-1);" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',1);">1</a></li>
		    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',2);">2</a></li>
		    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',3);">3</a></li>
		    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',4);">4</a></li>
		    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',5);">5</a></li>
		    <li>
		      <a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',0);" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		    <li><a href="javascript:void(0);">共<?php echo ($data["total"]); ?>条数据</a></li>
		  </ul>
		</nav>
      	<div class="container footer">
      		<span>QQ : 1433210198 &nbsp; mail : NGXZ92@163.COM</span>
    		<span>Copyright © 2010 - 2017  南广轩主Yuanrb.com 版权所有</span>
      	</div>
	</body>
</html>