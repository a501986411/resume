<?php
namespace app\index\controller;

use app\index\logic\Login;
use think\Controller;
use think\Request;
class Index extends Controller
{
    public function index()
    {

    }

    public function login()
    {
        if(Request::instance()->isPost()){
            $logic = new Login();
            $logic->type = $logic::TYPE_MEMBER;
            $logic->email = input('email');
            $logic->password = input('password');
            if($this->validate(input(),['__token__'=>'token'])===true && $logic->login()){
                echo '登录成功';
            }else{
                return view('',['msg'=>'登录信息错误']);
            }
        }else{
           return view();
        }
    }

    public function register()
    {
        if(Request::instance()->input()){

        }else{
            return view();
        }
    }
}
