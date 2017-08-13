<?php
	/**
	 *
	 * Created by PhpStorm.
	 * User: knight
	 * Date: 2017/8/11
	 * Time: 11:05
	 */
	namespace app\index\logic;
	use app\index\model\Member;
	class Login
	{
		private $model;

		/**
		 * 登录操作
		 * @access public
		 * @param $email
		 * @param $password
		 * @return void
		 * @author knight
		 */
		public function login($email,$password){
			$this->model = new Member();
			$info = $this->model->getMemberByEmail($email);
			if(md5($password.$info['salt']) === $info['password'] && $info->changeLastLoginIp()){

				return true;
			}
			return false;
		}

	}