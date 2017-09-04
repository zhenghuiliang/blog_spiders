<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller{
    public function Message(){
        $Cate = D('Cate');
        $cateList = $Cate->select();
        $Mess = D('Message');
        $messList = $Mess->select();
        
        
        $this->assign('messlist',$messList);
        $this->assign('catelist',$cateList);
        $this->display();
    }
    public function messAdd(){
        $Mess = D('Message');
        $messInfo = I('post.');
        
        if(!$Mess->create()){
            echo $Mess->getError();
            exit;
        }
        if($Mess-add()){
            echo 'success';
        }else{
            echo 'error';
        }
    }
}