<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学霸养成</title>
<link href="/topstudent/Public/home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/topstudent/Public/home/css/viewlist.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header">
	<div class="mybody">
    	<a href="#"><img src="/topstudent/Public/home/images/logo.jpg" alt="logo" /></a>
        <div class="login">
        	<a href="#">登陆</a> | <a href="#">注册</a>
        </div>
        <ul class="nav">
            <li ><a href="首页.html">首页</a></li>
            <li><a href="<?php echo U('Home/learnansq/index');?>">学霸问答</a></li>
            <li><a href="课本点读.html">课本点读</a></li>
            <li><a href="视频讲解.html">视频讲解</a></li>
            <li class="navnow"><a href="<?php echo U('Home/tests/toptests');?>">学霸试卷</a></li>
            <li><a href="<?php echo U('Home/personal/index');?>">个人中心</a></li>
        </ul>
    </div>
</div>
<div class="ad">
	<div class="mybody">
    	<img src="/topstudent/Public/home/images/ad.jpg" width="1200" height="100" alt="ad" />
    </div>
</div>
<div class="content">
<div class="mybody">
    	<div class="content_con">
        	<div class="bread"><span>您现在的位置</span> > <a href="首页.html">首页</a> > <a href="#">学霸试卷</a></div>
    	  	<div class="left">
        	<h1>热点视频 <span>hot videoes</span></h1>
            <ul class="lul">
                <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i; if(($key == 0 )): ?><li>
                        <span class="lulspan"><?php echo ($key+1); ?></span>
                        <div class="lfirst">
                            <img src="/topstudent/Public/<?php echo ($hot["video_img"]); ?>" width="88" height="59" alt="rd" /> 
                            <div class="lfright">
                                <h2><a href="<?php echo U('home/video/detail');?>/id/<?php echo ($hot["video_id"]); ?>"><?php echo ($hot["video_title"]); ?></a></h2>
                                <h3>播放次数：<?php echo ($hot["video_count"]); ?></h3>
                            </div>
                        </div>
                    </li><?php endif; ?>
                <?php if(($key == 1) OR ($key == 2)): ?><li>
                        <h2><?php echo ($key+1); ?>&nbsp;<a><?php echo ($hot["video_title"]); ?></a></h2>
                    </li><?php endif; ?>
                <?php if(($key > 2) AND ($key < 9)): ?><li class="tit2">
                        <h2><?php echo ($key+1); ?>&nbsp;<a><?php echo ($hot["video_title"]); ?></a></h2>
                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>

        </div>
        </div>
        <div class="right">
            	<h1 class="head">全部试卷 <span>All textpaper</span></h1>
                <div class="right_con">
                	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="video2">
                                <div class="vimg">
                                <a href="<?php echo U('home/tests/testdetails');?>/id/<?php echo ($data["test_id"]); ?>"><img src="/topstudent/Public/<?php echo ($data["test_img"]); ?>" width="194" height="127" alt="" /></a>
                                </div>

                                <p><a href="<?php echo U('home/tests/testdetails');?>/id/<?php echo ($data["test_id"]); ?>"><?php echo ($data["test_title"]); ?></a></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    
					  <div class="page">
                    	<ul>
                        	<?php echo ($page); ?>
                        </ul>
                    </div>
                </div>
      </div>
    </div>
</div>
    
</div>
</div>
</div>
<div class="footer">
	<div class="mybody">
    <p>版权所有：河北师范大学软件学院 永信指导小组 地址：石家庄市南二环东路20号 冀ICP备字201401号</p>
    </div>
</div>
</body>
</html>