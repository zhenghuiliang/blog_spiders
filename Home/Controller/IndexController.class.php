<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Art  = D('Article');
        $artList = $Art->select();
        $Cate = D('Cate');
        $cateList = $Cate->limit(5)->select();
        
        //文章搜索
        if(IS_POST){
            $desc = I('post.desc');
            $artList = $Art->where("`desc` like '%$desc%'")->select();
        }
    
        //查询该文章的分类
        $i = 0;
        foreach($artList as $artinfo ){
            $artList[$i]['new_time'] = date('Y-m-d H:i:s',$artinfo['new_time']);
            $artList[$i]['mname'] = $Cate->field('mname')->find($artinfo['cid'])['mname'];
            $i++;
        }
     
        //查询点击量前12的文章
        $checkList = $Art->order('check_count desc')->limit(12)->select();
        
        
        $this->assign('checklist',$checkList);
        $this->assign('artlist',$artList);
        $this->assign('catelist',$cateList);
        $this->display();
    }
    
    

}
