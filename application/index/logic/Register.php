<?php
/**
 * Created by PhpStorm.
 * User: CHL
 * Date: 2017/8/13
 * Time: 9:14
 */

namespace app\index\logic;
use app\index\model\Member;
class Register
{
    private $model;
    /**
     * 注册
     */
    public function register($data)
    {
        $this->model = new Member();
        $this->model->email = $data['email'];
        $this->model->nick_name = $data['nick_name'];
        $this->model->salt = $this->crateSalt();
        $this->model->password = md5($data['password'].$this->model->salt);
        if($this->model->save())
        {
            return true;
        }
        return false;
    }

    /**
     * 获取加密附加字符串 salt
     * @return string
     */
    protected function crateSalt()
    {
       return createStr(Member::SALT_LEN);
    }
}