<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客模板古典系列之――江南墨卷</title>
<meta name="keywords" content="个人博客模板古典系列之――江南墨卷" />
<meta name="description" content="个人博客模板古典系列之――江南墨卷" />
<link href="/Public/home/css/base.css" rel="stylesheet">
<link href="/Public/home/css/index.css" rel="stylesheet">
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
                <li><a href="newslistpic.html">个人日记</a></li>
                <li><a href="newslistpic.html">学习笔记</a></li>
              </ul>
            </li>
            <li><a href="#">技术文章</a>
              <ul>
              	<?php if(is_array($catelist)): foreach($catelist as $key=>$cateinfo): ?><li><a href="<?php echo U('Home/cate/catelist',array('id'=>$cateinfo[id]));?>"><?php echo ($cateinfo[mname]); ?></a></li><?php endforeach; endif; ?>
              </ul>
            </li>
            <li><a href="<?php echo U('Home/Message/message');?>">给我留言</a></li>
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
  <div class="jztop"></div>
  <div class="container">
    <div class="bloglist f_l">
     <?php if(is_array($artlist)): foreach($artlist as $key=>$artinfo): ?><h3><a href="<?php echo U('Home/article/article',array('id'=>$artinfo[id]));?>"><?php echo ($artinfo[title]); ?></a></h3>
      <figure><img src="<?php echo ($artinfo[thumb_image]); ?>" alt="<?php echo ($artinfo[title]); ?>"></figure>
      <ul>
        <p><?php echo ($artinfo[desc]); ?></p>
        <a title="<?php echo ($artinfo[title]); ?>" href="<?php echo U('Home/article/article',array('id'=>$artinfo[id]));?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
      </ul>
      <p class="dateview"><span><?php echo ($artinfo[new_time]); ?></span><span>作者：<?php echo ($artinfo[admin_name]); ?></span><span>个人博客：[<a href="<?php echo U('Home/cate/catelist',array('id'=>$artinfo[cid]));?>"><?php echo ($artinfo[mname]); ?></a>]</span><span>浏览次数：<?php echo ($artinfo[check_count]); ?></span></p><?php endforeach; endif; ?>
    </div>
    <div class="r_box f_r">
      <div class="tit01">
        <h3 class="tit">关注我</h3>
        <div class="gzwm">
          <ul>
            <li><a class="email" href="#" target="_blank">我的电话</a></li>
            <li><a class="qq" href="#mailto:admin@admin.com" target="_blank">我的邮箱</a></li>
            <li><a class="tel" href="#" target="_blank">我的QQ</a></li>
            <li><a class="prize" href="#">个人奖项</a></li>
          </ul>
        </div>
      </div>
      <!--tit01 end-->
      
      <div class="tuwen">
        <h3 class="tit">图文推荐</h3>
        <ul>
          <li><a href="/"><img src="/Public/home/images/01.jpg"><b>住在手机里的朋友</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="/Public/home/images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="/Public/home/images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="/Public/home/images/06.jpg"><b>住在手机里的朋友</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="/Public/home/images/04.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="/Public/home/images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="/Public/home/images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
        </ul>
      </div>
      <div class="ph">
        <h3 class="tit">点击排行</h3>
        <ul class="rank">
         <?php if(is_array($checklist)): foreach($checklist as $key=>$checkinfo): ?><li><a href="<?php echo U('Home/Article/article',array('id'=>$checkinfo[id]));?>" title="<?php echo ($artinfo[title]); ?>" target="_blank"><?php echo ($artinfo[desc]); ?></a></li><?php endforeach; endif; ?>
        </ul>
      </div>
      <div class="ad"> <img src="/Public/home/images/03.jpg"> </div>
    </div>
  </div>
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