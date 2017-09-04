<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller{
    //显示文章
    public function Article(){
        $id = I('id');
        $Art = D('Article');
        $artInfo = $Art->find($id);
        $Cate = D('Cate');
        $cateList = $Cate->select();
        $artInfo['new_time'] = date('Y-m-d H:i:s',$artInfo['new_time']);
        $artInfo['mname'] = $Cate->field('mname')->find($artInfo['cid'])['mname'];
        $artInfo['content'] = html_entity_decode($artInfo['content']);//将内容转换为html代码
        //记录浏览次数
        $Art->check_count = $Art->check_count + 1;
        $Art->where('id='.$id)->save();
        //文章评论
        $commList = $this->CommList($id);
        
        $this->assign('commlist',$commList);
        $this->assign('catelist',$cateList);
        $this->assign('artinfo',$artInfo);
        $this->display();
    }
    
    //评论的显示
    public function CommList($id){
        $Comm = D('Comment');
        //查询该文章的想的评论
        $commList = $Comm->where('aid='.$id)->select();
        $i=0;
        foreach ($commList as $comminfo){
            $commList[i]['ctime'] = date('Y-m-d H:i:s',$comminfo['ctime']);
            $i++;
        }
        return $commList;
        
    }
    
    //提交评论
    public function CommAdd(){
        $commInfo = I('post.');
        $Comm = D('Comment');
        if(!$Comm->create()){
           echo $Comm->getError();
           exit;
        }
        if($Comm->add()){
            echo 'success';
        }else{
            echo 'error';
        }
    }
}