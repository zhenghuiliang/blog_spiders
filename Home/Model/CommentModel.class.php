<?php
namespace Home\Model;
use  Think\Model;
class CommentModel extends Model{
    //array(验证字段1，验证规则，错误提示，[验证条件，附加规则，验证时间])
    public $_validate=array(
        array('content','3,120','输入的留言3-120字符之间','1','length',3),
    );
}









































