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
		const TYPE_MEMBER =1;//会员
		public $password; //密码
		public $email; //邮箱
		public $type; //用户类型
		protected  $model;

		/**
		 * 登录操作
		 * @access public
		 * @return void
		 * @author knight
		 */
		public function login(){
			if($this->type==self::TYPE_MEMBER){
				$this->model = new Member();
			}
			$info = $this->model->getMemberByEmail($this->email);
			if(md5($this->password.$info['salt']) === $info['password']){
				return true;
			}
			return false;
		}
	}