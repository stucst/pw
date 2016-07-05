<?php
//自定义用户信息UserModel类
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
//    protected $tablePreFix="";//指定表前缀
//    protected $tableName='stu';//制定当前model真实表名
//    protected  $trueTableName="think_user";//指定包含表前缀的真实表名
//    protected $dbname="think";//执行真实表名
    //指定当前表的字段说明信息
    protected  $fields=array('id','username','name','email','addtime');
}