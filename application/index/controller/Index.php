<?php
namespace app\index\controller;

use app\index\logic\Login;
use app\index\logic\Register;
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
            if($this->validate(input(),['__token__'=>'token'])===true && $logic->login(input('email'),input('password'))){
                echo '登录成功';
            }else{
                return view('',['msg'=>'登录信息错误']);
            }
        }else{
           return view();
        }
    }

    /**
     * 用户注册
     * @return \think\response\View
     */
    public function register()
    {
        if(Request::instance()->isPost()){

            $checkResult = $this->validate(input(),'Member.register');
            if($checkResult !== true){
                $this->error($checkResult);
            }
            $logic = new Register();
            if($logic->register(input())){
                echo '注册成功';
            }else{
                $this->error('注册失败');
            }


        }else{
            return view();
        }
    }
}
