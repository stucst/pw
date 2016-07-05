<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $url=U("User/demo");//生产控制器与方法的访问地址
        echo"<h4><a href='{$url}'>1、测试UserModel的使用 ";

        $url=U("User/fun");//生产控制器与方法的访问地址
        echo"<h4><a href='{$url}'>2、测试UserModel的使用(增、删、改） ";
    }
}