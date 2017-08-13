<?php

	/**
	 *
	 * 会员数据模型
	 * User: knight
	 * Date: 2017/8/11
	 * Time: 11:10
	 */
	namespace app\index\model;


	use think\Model;

	class Member extends Model
	{	const TYPE_MEMBER =1;//会员
		const SALT_LEN = 9;
		protected  $insert = ['register_time'];
		public function getMemberByEmail($email){
			return $this->where('email',$email)->find();
		}

		/**
		 * 设置注册时间
		 * @return int
		 */
		protected function setRegisterTimeAttr()
		{
			return time();
		}

		/**
		 * 改变最后一次带登录IP
		 */
		public function changeLastLoginIp()
		{
			$this->last_login_ip = request()->ip();
			if($this->isUpdate(true)->save()){
				return true;
			}
			return false;
		}
	}