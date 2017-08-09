<?php
namespace app\index\controller;

use think\Request;
class Index
{
    public function index()
    {

    }

    public function login()
    {
        if(Request::instance()->isPost()){
            echo '登录成功';
        }else{
           return view();
        }
    }
}
