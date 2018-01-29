<?php
namespace app\index\validate;

use think\Validate;

class GoodValidate extends Validate{
	protected $rule = [
		'name'  =>  'require',
		'cate_id' =>  'require|number',
		'desc' =>  'require',


	];
	protected $message  =   [
		'name.require' => '名称必须',
		'cate_id.require'   => '分类必须',
		'desc'   => '描述必须',


	];
	protected $scene = [
		'goodnew'  =>  ['name','cate_id'],

	];

}