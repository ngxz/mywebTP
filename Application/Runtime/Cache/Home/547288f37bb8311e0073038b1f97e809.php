<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>资讯推荐</title>
		<link rel="icon" href="/mywebTP/Public/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="/mywebTP/Public/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/mywebTP/Public/css/common.css" />
		<style type="text/css">
			.contentLeft ul{overflow: hidden;}
			.contentLeft ul li{width:100%;overflow: hidden;margin-bottom: 10px;text-algin:center;}
			.contentLeft ul li img{float: left;width:200px;}
			.contentBox{float: left;margin-left: 20px;}
			.contentLeft ul li p{text-algin:center;}
			.contentBox span{color:gray;text-algin:center;display:block;width:100%;}
			.contentBox h4 a{font-size:18px;}
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
    			location.href = "/mywebTP/index.php?m=Home&c=MessagePage&a=message&pageNo ="+pageNo+"&pageNo="+pageNo;
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
		            <li class="active"><a href="#">资讯中心</a></li>
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
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>资讯列表</h2>
					<p><span>Created with <i class="sl-icon-heart"></i> by the fine folks at <a href="#">Freehtml5</a></span></p>
				</div>
				<div class="col-md-3 text-center">
					<h2>资讯分类</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="contentLeft">
						<ul>
							<?php if(is_array($data["rows"])): $i = 0; $__LIST__ = $data["rows"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><li>
								<a href="#"><img class="img-responsive" src="/mywebTP/Public/img/image_4.jpg"></a>
								<div class="contentBox">
									<h4><a href="/mywebTP/index.php/Home/ArticleContent/article_content/id/<?php echo ($rows["id"]); ?>"><?php echo ($rows["title"]); ?></a></h4>
									<span><?php echo ($rows["time"]); ?></span>
									<p><?php echo ($rows["summary"]); ?></p>
									<p><a href="/mywebTP/index.php/Home/ArticleContent/article_content/id/<?php echo ($rows["id"]); ?>" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
								</div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
					</div>
				</div>
				<!-- 分类 -->
				<div class="col-md-3">
					<ul>
 						<li>Lorem ipsum dolor sit amet</li>
 						<li>Duis aute irure dolor in culpa </li>
 						<li>Sunt in culpa qui illum</li>
 						<li>vel illum qui dolorem man </li>
 						<li>The wise man therefore culpa</li>
 						<li>Sunt in culpa qui officia</li>
 						<li>Lorem ipsum dolor sit qui</li>
 						<li>Duis aute irure dolor</li>
 						<li>Sunt in culpa qui officia</li>
 					</ul>
				</div>
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
		<!--底部-->
      	<div class="container footer">
      		<span>QQ : 1433210198 &nbsp; mail : NGXZ92@163.COM</span>
    		<span>Copyright © 2010 - 2017  南广轩主Yuanrb.com 版权所有</span>
      	</div>
	</body>
</html>