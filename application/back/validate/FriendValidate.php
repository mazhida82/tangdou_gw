<?php
namespace app\back\validate;

use think\Validate;

class FriendValidate extends Validate{
	protected $rule = [
        'type'=>'require',
		'url' =>  'url',



	];
	protected $message  =   [
        'type'   => 'type 不能为空',
		'url'   => '链接不合法',


	];
	protected $scene = [
		//'goodnew'  =>  ['name','cate_id'],

	];

}