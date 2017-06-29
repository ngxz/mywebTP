<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>袁茹兵个人首页V1.0</title>
		<link rel="icon" href="/mywebTP/Public/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="/mywebTP/Public/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/mywebTP/Public/css/common.css" />
		<link rel="stylesheet" href="/mywebTP/Public/css/index.css" />
		<script type="text/javascript" src="/mywebTP/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/mywebTP/Public/bootstrap/dist/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="/mywebTP/Public/js/index.js"></script>
		<script type="text/javascript">
    		$(function(){
    			
    		});
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
		            <li class="active"><a href="#">首页</a></li>
		            <li><a href="/mywebTP/index.php/Home/MessagePage/message">资讯中心</a></li>
		            <li><a href="/mywebTP/index.php/Home/WebPage/webLoad">WEB前端</a></li>
		            <li><a href="/mywebTP/index.php/Home/PhpPage/phpLoad">PHP学习</a></li>
		            <li><a href="/mywebTP/index.php/Home/BoardPage/boardLoad">留言板</a></li>
		            <li><a href="/mywebTP/index.php/Home/Aboutme/aboutme">关于我</a></li>
		          </ul>
		          
		          <!--注册登录-->
		          <div class="nav navbar-nav navbar-right">
		          		<div class="navbar-form navbar-left">
							<a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">登录</a>    
			            	<a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">注册</a>
						</div>
		          		
		          </div>
		        </div>
	      	</div>
    	</nav>
    	<div class="container">
    		<div id="carousel-example-generic" class="carousel slide center-block" data-ride="carousel" style="width:100%;margin-top: -15px;">
		        <ol class="carousel-indicators" style="top: 300px;">
		          	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		          	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		          	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		          	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		        </ol>
		        <div class="carousel-inner" role="listbox">
		          	<div class="item active">
		            	<img src="/mywebTP/Public/img/bimg1.jpg">
		          	</div>
		          	<div class="item">
		            	<img src="/mywebTP/Public/img/bimg2.jpg">
		          	</div>
		          	<div class="item">
		            	<img src="/mywebTP/Public/img/bimg3.jpg">
		          	</div>
		          	<div class="item">
		            	<img src="/mywebTP/Public/img/bimg4.jpg">
		          	</div>
		        </div>
		        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="left: -50px;background:none">
		          <span class="glyphicon glyphicon-chevron-left"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="right: -50px;background:none">
		          <span class="glyphicon glyphicon-chevron-right"></span>
		          <span class="sr-only">Next</span>
		        </a>
	      	</div>
    	</div>
		
      	<!--内容开始-->
      	<div class="container center-block" style="margin-top: 20px;">
			<!--主体内容-->
			<div class="news">
				<h3><img style="margin-left: -15px;margin-right: 5px;" src="/mywebTP/Public/img/jian.gif">新闻中心</h3>
				<ul>
					<?php if(is_array($rows["news"])): $i = 0; $__LIST__ = $rows["news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li><a href='/mywebTP/index.php/Home/ArticleContent/article_content/id/<?php echo ($news["id"]); ?>'><?php echo ($news["title"]); ?><span><?php echo ($news["time"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!--左边主体内容里面文章列表-->
			<div class="articleLeft">
				<h3>热文推荐</h3>
				<ul>
					<?php if(is_array($rows["artic"])): $i = 0; $__LIST__ = $rows["artic"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$artic): $mod = ($i % 2 );++$i;?><li>
						<a href="/mywebTP/index.php/Home/ArticleContent/article_content/id/<?php echo ($artic["id"]); ?>">
	   					<h4><?php echo ($artic["title"]); ?></h4>
	   					<div class="tipsContent">
	   						<img src="/mywebTP/Public/img/ace.jpg" />
	   						<p><?php echo ($artic["summary"]); ?></p>
	   					</div>
	  					</a>
	  				</li><?php endforeach; endif; else: echo "" ;endif; ?>
	 			</ul>
			</div>
      	</div>
      	<!-- 图文 -->
      	<div class="container footer">
      		<span>QQ : 1433210198 &nbsp; mail : NGXZ92@163.COM</span>
    		<span>Copyright © 2010 - 2017  南广轩主Yuanrb.com 版权所有</span>
      	</div>
      	<!-- form -->
		<div class="modal fade login" id="loginModal">
	      <div class="modal-dialog login animated">
	  		      <div class="modal-content">
	  		         <div class="modal-header">
	                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	                      <h4 class="modal-title">用户登录</h4>
	                  </div> 
	                  <div class="modal-body">  
	                      <div class="box">
	                           <div class="content">
	                              <div class="error"></div>
	                              <div class="form loginBox">
	                                  <form method="post" action="/mywebTP/index.php/Admin/Admin/login" accept-charset="UTF-8">
	                                  <input id="uid" class="form-control" type="text" placeholder="帐号" name="uid">
	                                  <input id="pwd" class="form-control" type="password" placeholder="密码" name="pwd">
	                                  <input class="btn btn-default btn-login" type="submit" value="登录">
	                                  </form>
	                              </div>
	                           </div>
	                      </div>
	                      <div class="box">
	                          <div class="content registerBox" style="display:none;">
	                           <div class="form">
	                              <form method="post" data-remote="true" action="/register" accept-charset="UTF-8">
	                              <input id="uid" class="form-control" type="text" placeholder="帐号" name="uid">
	                              <input id="pwd" class="form-control" type="password" placeholder="密码" name="pwd">
	                              <input class="btn btn-default btn-register" type="submit" value="注册">
	                              </form>
	                              </div>
	                          </div>
	                      </div>
	                      <div></div>
	                  </div>
	                  <div class="modal-footer">
	                      <div class="forgot login-footer">
	                          <span>没有帐号？ 
	                               <a href="javascript: showRegisterForm();">注册一个</a>
	                          </span>
	                      </div>
	                      <div class="forgot register-footer" style="display:none">
	                           <span>已有账号?</span>
	                           <a href="javascript: showLoginForm();">登录</a>
	                      </div>
	                  </div>        
	  		      </div>
	      </div>
	  </div>
	</body>
</html>