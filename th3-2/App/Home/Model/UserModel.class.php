<?php
 namespace Home\Model;
 use Think\Model;

class UserModel extends  Model{
    //自动验证


    //自动完成

    protected  $_auto = array(
        array("userpass",'md5',1,"function"),
        array("addtime",'time',1,"function"),
        array("state",'0',1),
    );
}