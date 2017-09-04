<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends Controller{
    public function catelist(){
        $id = I('id');//获取分类id
        $Cate = D('Cate');
        $cateinfo = $Cate->find($id);//选中的分类信息
        $cateList = $Cate->select();//所有分类信息
        $Art = D('Article');
        
        //分页处理
        $count      = $Art->where('cid='.$id)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(6)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $artList = $Art->where('cid='.$id)->order('new_time')->limit($Page->firstRow.','.$Page->listRows)->select();
       

        
        $i = 0;
        //为文章信息添加一个分类名元素,将时间戳转化为时间
        foreach ($artList as $artinfo){
            $artList[$i]['mname'] = $cateinfo['mname'];
            $artList[$i]['new_time'] = date('Y-m-d H:i:s',$artinfo['new_time']);
        }
        
        
        $this->assign('cate',$cateinfo);
        $this->assign('catelist',$cateList);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('artlist',$artList);//数据集输出
        $this->display();
    }
} 