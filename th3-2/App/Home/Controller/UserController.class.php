<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $mod=D("User");
        $this->assign("list",$mod->select());
        $this->display("index");
    }

    //加载信息添加表单
    public function add(){
        $this->display("add");

    }

    //执行添加
    public function insert(){
        //实例化自定义UserModel类
        $mod=D("User");
        //初始化信息
        $mod->create();
        //执行添加
        if($mod->add()){
            $this->success("添加成功！",U("User/index"));
        }else{
            $this->error("添加失败！");
        }
    }

    //加载编辑表单
    public function edit($id=0){
        $this->assign("vo",D("User")->find($id));
        $this->display("edit");
    }
    //执行修改
    public function update(){
        //实例化自定义UserModel类
        $mod= D("user");
        //初始化信息
        $mod->create();
        //执行修改
        if($mod->save()){
            $this->success("修改成功！",U("User/select"));
        }else{
            $this->error("修改失败！");
        }
    }

    //执行删除
    public function del($id=0){
        //执行删除
       $m=D("User")->delete($id);
        //判断是否成功
        if($m > 0){
            $this->success("删除成功！",U("User/select"));
        }else{
            $this->error("删除失败！");
        }
    }
}