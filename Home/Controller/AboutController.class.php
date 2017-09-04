<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller{
    public function about(){
        $Cate = D('Cate');
        $cateList = $Cate->select();
        
        $this->assign('catelist',$cateList);
        $this->display();
    }
}