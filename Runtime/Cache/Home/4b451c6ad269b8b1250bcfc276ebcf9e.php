<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>登陆页面</title>
         <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta http-equiv="Access-Control-Allow-Origin" content="*">
        <link href="/Public/home/css/login.css" type="text/css" rel="stylesheet">
        <link href="/Public/home/css/global.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/home/js/login.js"></script>
    </head>
    <body>
        <div class="login">
            <div class="login-title"><p>推浪网登录</p>
                <i></i>
            </div>
            <form method="post" action="<?php echo U('Home/User/login');?>">
            <div class="login-bar">
                <ul>
                    <li><img src="/Public/home/images/login_user.png"><input type="text" class="text" placeholder="请输入用户名" /></li>
                    <li><img src="/Public/home/images/login_pwd.png"><input type="password" class="psd" placeholder="请输入确认密码" /></li>
                </ul>
            </div>
            <div class="login-btn">
                <button class="submit" type="submit">登陆</button>
                <a href="<?php echo U('Home/User/register');?>"><div class="login-reg"><p>莫有账号，先注册</p></div></a>
            </div>
            </form>
        </div>
		<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>

    </body>
</html>