<?php
	/**
	 *
	 * Created by PhpStorm.
	 * User: knight
	 * Date: 2017/8/9
	 * Time: 11:22
	 */

	namespace app\index\controller;


	class Resume
	{

		public function index()
		{
			return view();
		}

		/**
		 * 创建简历
		 * @access public
		 * @return \think\response\View
		 * @author knight
		 */
		public function create()
		{
			return view();
		}

		/**
		 * 添加工作经验
		 * @access public
		 * @return \think\response\View
		 * @author knight
		 */
		public function addWork()
		{
			return view('work');
		}

		public function showResume()
		{
			dump(input());
		}
	}