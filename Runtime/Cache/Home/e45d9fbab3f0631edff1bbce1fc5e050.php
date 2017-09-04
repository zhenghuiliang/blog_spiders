<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客模板古典系列之――江南墨卷</title>
<meta name="keywords" content="个人博客模板古典系列之――江南墨卷" />
<meta name="description" content="个人博客模板古典系列之――江南墨卷" />
<link href="/Public/home/css/base.css" rel="stylesheet">
<link href="/Public/home/css/main.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="/Public/home/js/modernizr.js"></script>
<![endif]-->
<script type="text/javascript" src="/Public/home/js/jquery.js"></script>
</head>
<body>
<div id="wrapper">
<header>
  <div class="headtop"></div>
  <div class="contenttop">
    <div class="logo f_l">个人博客模板古典系列之――江南墨卷</div>
    <div class="search f_r">
      <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <div class="blank"></div>
    <nav>
      <div  class="navigation">
        <ul class="menu">
          <li><a href="<?php echo U('Home/index/index');?>">网站首页</a></li>
          <li><a href="#">关于我</a>
            <ul>
              <li><a href="<?php echo U('Home/About/about');?>">个人简介</a></li>
              <li><a href="listpic.html">个人相册</a></li>
            </ul>
          </li>
          <li><a href="#">我的日记</a>
            <ul>
              <li><a href="newslistpic.html">个人日记</a></li>
              <li><a href="newslistpic.html">学习笔记</a></li>
            </ul>
          </li>
          <li><a href="newslistpic.html">技术文章</a>
           <ul>
	          <?php if(is_array($catelist)): foreach($catelist as $key=>$cateinfo): ?><li><a href="<?php echo U('Home/cate/catelist',array('id'=>$cateinfo[id]));?>"><?php echo ($cateinfo[mname]); ?></a></li><?php endforeach; endif; ?>
           </ul>
          </li>
          <li><a href="<?php echo U('Home/Message/message');?>">给我留言</a> </li>
        </ul>
      </div>
    </nav>
    <SCRIPT type=text/javascript>
	// Navigation Menu
	$(function() {
		$(".menu ul").css({display: "none"}); // Opera Fix
		$(".menu li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown("normal");
		},function(){
			$(this).find('ul:first').css({visibility: "hidden"});
		});
	});
</SCRIPT> 
  </div>
</header>
<div class="container">
  <div class="con_content">
    <div class="about_box">
      <h2 class="nh1"><span>您现在的位置是：<a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a>>><a href="<?php echo U('Home/cate/catelist',array('id'=>$cate[id]));?>" target="_blank"><?php echo ($cate[mname]); ?></a></h2>
      <div class="dtxw box">
        <?php if(is_array($artlist)): foreach($artlist as $key=>$artinfo): ?><li>
          <div class="dttext f_l">
            <ul>
              <h2><a href="<?php echo U('Home/Article/article',array('id'=>$artinfo[id]));?>"><?php echo ($artinfo[title]); ?></a></h2>
              <p><?php echo ($artinfo[desc]); ?></p>
              <span><?php echo ($artinfo[new_time]); ?></span>
            </ul>
          </div>
          <div class="xwpic f_r"><a href="/"><img src="/Public/home/images/02.jpg"></a></div>
        </li><?php endforeach; endif; ?>
      </div>
      <div class="pagelist"><?php echo ($show); ?></div>
    </div>
  </div>
  <div class="blank"></div>
  <!-- container代码 结束 -->
  
  <footer>
    <div class="footer">
      <div class="f_l">
        <p>All Rights Reserved 版权所有：<a href="http://www.yangqq.com">杨青个人博客</a> 备案号：蜀ICP备00000000号</p>
      </div>
      <div class="f_r textr">
        <p>Design by DanceSmile</p>
      </div>
    </div>
  </footer>
</div>
</body>
</html>