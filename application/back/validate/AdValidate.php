<?php
namespace app\back\validate;

use think\Validate;

class AdValidate extends Validate{
	protected $rule = [
		'position'  =>  'require|number',
		'url' =>  'url',

	];
	protected $message  =   [
		'position.require' => '位置必须',
		'url'   => '链接不合法',


	];
	protected $scene = [
		//'goodnew'  =>  ['name','cate_id'],

	];

}