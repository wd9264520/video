<?php namespace system\service\HdForm;
	/** .-------------------------------------------------------------------
	 * |  Software: [HDPHP framework]
	 * |      Site: www.hdphp.com
	 * |-------------------------------------------------------------------
	 * |    Author: 向军 <2300071698@qq.com>
	 * |    WeChat: aihoudun
	 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
	 * '-------------------------------------------------------------------*/

//服务功能类
class HdForm {
	//构造函数
	public function __construct() {
		echo 'hdphp<br/>';
	}

	//测试方法
	public function test() {
		echo '恭喜你，服务创建成功! 这是服务方法执行的结果';
	}

	public function show() {
		echo 'show...';
	}

	public function play() {
		echo 'houdunren.com<br/>';
	}

	public function bind() {
		echo 'houdunwang.com';
	}
}