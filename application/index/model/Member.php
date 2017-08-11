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
		];
		public function getMemberByEmail($email){
			return $this->where('email',$email)->find();
		}
	}