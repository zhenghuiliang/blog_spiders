<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客模板古典系列之――江南墨卷</title>
<meta name="keywords" content="个人博客模板古典系列之――江南墨卷" />
<meta name="description" content="个人博客模板古典系列之――江南墨卷" />
<link href="/Public/home/css/base.css" rel="stylesheet">
<link href="/Public/home/css/main.css" rel="stylesheet">
<link  rel="stylesheet" href="/Public/home/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Public/home/css/sinaFaceAndEffec.css" />
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
      <form action="<?php echo U('Home/index/index');?>" method="post" name="searchform" id="searchform">
        <input name="desc" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
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
              <li><a href="">个人日记</a></li>
              <li><a href="">学习笔记</a></li>
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
      <h2 class="nh1"><span>您现在的位置是：<a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a>>><a href="<?php echo U('Home/Cate/catelist',array('id'=>$artinfo[cid]));?>" target="_blank"><b><?php echo ($artinfo[mname]); ?></b></a></span></h2>
      <div class="dtxw box">
        <li>
          <h3><a href="<?php echo U('Home/article/article',array('id'=>$artinfo[id]));?>"><font size="5" color="blank"><b><?php echo ($artinfo[title]); ?></b></font></a></h3><br><br>
	      <ul>
	        <p><?php echo ($artinfo[desc]); ?></p>
	      </ul><br>
          <p class="dateview"><span><?php echo ($artinfo[new_time]); ?></span>&nbsp;&nbsp;&nbsp;<span>作者：<?php echo ($artinfo[admin_name]); ?></span>&nbsp;&nbsp;&nbsp;<span>个人博客：[<a href="<?php echo U('Home/cate/catelist',array('id'=>$artinfo[cid]));?>"><?php echo ($artinfo[mname]); ?></a>]</span></p>
          <br>
          <hr>
          <?php echo ($artinfo[content]); ?>
        </li>
      </div>
    </div>
  </div>
  
  <div id="content" style="width: 700px; height: auto;margin-left:300px;margin-top:40px">
	<div class="wrap">
	<p class="p_title" style="margin-left:0px"><b>说点什么</b></p>
		<div class="comment">
			<div class="head-face">
				<img src="/Public/home/images/1.jpg" / >
				<p>我是鸟</p>
			</div>
			<div class="content">
				<div class="cont-box">
					<textarea class="text" placeholder="请输入..."></textarea>
				</div>
				<div class="tools-box">
					<div class="operator-box-btn"><span class="face-icon"  >☺</span><span class="img-icon">▧</span></div>
					<div class="submit-btn"><input type="button" onClick="out()"value="提交评论" /></div>
				</div>
			</div>
		</div>
		<div id="info-show">
			<ul></ul>
		</div>
	</div>
</div>

<script type="text/javascript" src="/Public/home/js/main.js"></script>
<script type="text/javascript" src="/Public/home/js/sinaFaceAndEffec.js"></script>
<script type="text/javascript">
	// 绑定表情
	$('.face-icon').SinaEmotion($('.text'));
	// 测试本地解析
	function out() {
		var inputText = $('.text').val();
		$('#info-show ul').append(reply(AnalyticEmotion(inputText)));
	}
	
	var html;
	function reply(content){
		html  = '<li>';
		html += '<div class="head-face">';
		html += '<img src="/Public/home/images/1.jpg" / >';
		html += '</div>';
		html += '<div class="reply-cont">';
		html += '<p class="username">小小红色飞机</p>';
		html += '<p class="comment-body">'+content+'</p>';
		html += '<p class="comment-footer">2016年10月5日　回复　点赞54　转发12</p>';
		html += '</div>';
		html += '</li>';
		return html;
	}
</script>
<div style="text-align:center;">
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