<?php

/**
 * 会员验证类
 * User: CHL
 * Date: 2017/8/13
 * Time: 10:07
 */
namespace  app\index\validate;
use think\Validate;

class Member extends  Validate
{
    /**
     * 根据email获取用户信息
     * @access public
     * @param $email 邮箱
     * @return mixed
     * @author knight
     */
    protected $rule = [
        '__token__' => 'token',
        'email'=>'email|unique:Member',
        'password'=>'require',
        'password_again'=>'require|confirm:password'
    ];

    protected $scene = [
        'register'=>['password','email','password_again', '__token__'],
        'login'=>['email','password']
    ];

    protected $msg = [
        'email'=>'邮箱格式不正确',
        'password'=>'请输入密码',
        'password_again'=>'两次密码输入不一致'
    ];
}