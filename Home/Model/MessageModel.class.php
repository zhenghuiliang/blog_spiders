<?php
namespace Home\Model;
use Think\Model;
class MessageModel extends Model{
    public $_validate = array(
        array('content','3,120','留言的内容在3-120字符之间','1','length',3),
    );
}