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

		public function addResume()
		{
			dump(input());
		}

		public function showResume()
		{
			dump(input());
		}
	}