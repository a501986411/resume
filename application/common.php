<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 两次MD5加密
 * @access public
 * @param $str
 * @return string
 * @author knight
 */
function encrypt($str,$salt)
{
	return md5(md5($str).$salt);
}
/**
 * 数据调试
 * @param array $data 数据
 * @param string $pattern 输出类型
 * @return void
 */
function de_bug($data)
{
	header("Content-type: text/html; charset=utf-8");
	if (config('APP_DEBUG')) {
		echo '<pre>' . PHP_EOL;
		echo '[type] ' . gettype($data) . PHP_EOL;
		echo '[data] ';
		print_r($data);
		exit;
	}
}