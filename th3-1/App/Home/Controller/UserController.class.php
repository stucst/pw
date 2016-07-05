<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function demo(){
//       实例化自定义的Model类UserModel
//        $mod = D("User");
//
//        dump($mod->select());
        //数据查询
//        $list= $mod->where("username='admin'")->select();
//        $list= $mod->order("addtime desc")->select();//降序
//        $list=$mod->limit(2)->select();//降序

        $mod=M("stu");

//      封装搜索条件
        $map['age']=array('between',"0,29");
        $map['sex']='0';
        $map['name']=array("like","u%");

        $list=$mod->where($map)->select();
        dump($list);
    }

    public function fun(){
        $mod=M("User");
      /*  //添加操作
        $data['username']='list'.rand(1000,9999);
        $data['userpass']=md5('123');
        $data['name']='demo';
        $data['email']="aa@126.com";
        $data['addtime']=time();
        $data['state']=0;
        //执行添加
        $mod->add($data);*/


        /*获取id号的数据
        $vo=$mod->find(4);
        dump($vo);
        //修改
        $mod->name="admin";
        $mod->email="admin@qq.com";
        //执行修改
        $mod->save();*/


        echo $mod->where("id in(5,6)")->delete();

    }
}