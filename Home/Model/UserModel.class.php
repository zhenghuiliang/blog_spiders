<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    public $_validate = array(
        array('username','','用户名不能为空','1','notequal',3),
        array('pwd','','密码不能为空','1','notequal',3),
        array('email','email','email格式不正确','1','',3)
    );
}