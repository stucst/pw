<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
            echo"<h2>Thinkphp框架实例</h2>";


            $url =U("User/index");
            echo "<h4><a href='{$url}'>1,完整用户信息管理</a></h4> ";
    }
}