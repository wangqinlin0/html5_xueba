<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/all/topstudent/Public/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/all/topstudent/Public/home/css/indexstyle.css" rel="stylesheet">
    <link href="/all/topstudent/Public/home/css/public.css" rel="stylesheet">
</head>

<body>
<div class="header">
	<div class="mybody">
    	<a href="#"><img src="/all/topstudent/Public/home/images/logo.jpg" alt="logo" /></a>
        <div class="login">
        	<?php
 if(!isset($_SESSION['user_username'])||$_SESSION['user_username']==''){ echo "<a href='".U('users/login')."'>登录</a> | <a href='".U('users/register')."'>注册</a>"; } else{ echo "欢迎你&nbsp;".$_SESSION['user_username']."&nbsp;&nbsp;<a href='/all/topstudent/index.php/Home/users/logout'>退出</a>"; } ?>
        </div>
        <ul class="nav">
            <li class="navnow"><a href="<?php echo U('Home/index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Home/learnansq/index');?>">学霸问答</a></li>
            <li><a href="<?php echo U('Home/book/index');?>">课本点读</a></li>
            <li><a href="<?php echo U('Home/video/index');?>">视频讲解</a></li>
            <li><a href="<?php echo U('Home/tests/index');?>">学霸试卷</a></li>
            <li><a href="<?php echo U('Home/personal/index');?>">个人中心</a></li>
        </ul>
    </div>
</div>
<!-- top部分 -->
<div class="top container-fluid">
	<!-- banner -->
</div>
<div class="top1 container-fluid">
	<div class="row">
    	<div class="col-md-2 col-sm-2"></div>
        <div class="col-md-1 col-sm-1 rqq"></div>
        <div class="col-md-4 col-sm-4 jczy">
        	<h1>检查作业</h1>
            <p>千万题库，难题不愁准确便捷，助你解决难题<br>点击查看，学霸君让作业辅导更简单</p>
        </div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-3 col-sm-3 sj"></div>
    </div>
</div>
<div class="top2 container-fluid">
	<div class="row spjj">
    	<div class="col-md-1 col-sm-1"></div>
    	<div class="col-md-4 pc col-sm-4"></div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-3 col-sm-3">
        	<h1>视频讲解</h1>
            <p>不仅有文字，更有免费名师讲解视频，准确便捷，助你解决难题；不止是搜题 还能在线聆听名师上课。</p>
        </div>
    </div>
</div>
<div class="top3 container-fluid">
<div class="row">
    <div class="col-md-12 col-sm-12 ft">
    <p>版权所有·河北师范大学 地址：河北省石家庄市南二环东路20号 邮编：050024<br>  
	冀ICP备字030002号</p>
    </div>	
</div>
</div>
<div class="a">
</div>
<script src="/all/topstudent/Public/home/js/jquery.min.js"></script>
<script src="/all/topstudent/Public/home/js/bootstrap.min.js"></script>

</body>
</html>