<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
    
    //登入
    public function login(){
        if(IS_POST){
            $username = I('post.username');
            $pwd = md5(I('post.pwd'));//加密与数据中的密码进行比较
            $User = D('User');
            $userInfo = $User->where('name='.$username.'and password='.$pwd)->find();
            if($userInfo){
                session('username',$userInfo['name']);
                session('image',$userInfo['image']);
                $this->redirect("{:U('Home/Index/index')}");
            }else{
                $this->error('登入失败');
            }
        }
        
        $this->display();
    }
    
    //注册
    public function register(){
        if(IS_POST){
            $userInfo = I('post.');
            $User = D('User');
            
            //自动验证
            if(!$User->create()){
                $this->error($User->getError());
            }
            is_dir('./Public/Uploads/') ? '' : mkdir('./Public/Uploads/');//创建文件夹
            //头像上传
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Public/Uploads/';//设置上传根目录
            $upload->savePath  =      ''; // 设置附件上传目录
            // 上传文件
            $info   =   $upload->upload($userInfo['image']);
            if(!$info) {// 上传错误提示错误信息    
                $this->error($upload->getError());  
            }
            
            $path = $info['image']['savepath'].$info['image']['savename'];//上传之后的文件路径
            $User->image = $path;//
            $User->jiontime = time();
            if(!$User->add()){
                $this->error('注册失败');
            }
            $this->redirect("Home/User/login");
        }
        
        $this->display();
    }
    
    //注册成功
    public function success(){
        $this->display();
    }
    
    //用户注销
    public function layout(){
        session(null);
        $this->redirect("{:U('Home/User/login')}");
    }
}
