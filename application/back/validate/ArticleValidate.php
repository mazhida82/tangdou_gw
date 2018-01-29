<?php
namespace app\back\validate;

use think\Validate;

class ArticleValidate extends Validate{
	protected $rule = [
		'name'  =>  'require',
		'cate_id' =>  'require|number',
		'cont' =>  'require',
		'sort' =>  'number',
		'index_show' =>  'boolean',


	];
	protected $message  =   [
		'name.require' => '名称必须',
		'cate_id.require'   => '分类必须',
		'cont.require'   => '内容必须',


	];
	protected $scene = [
		//'goodnew'  =>  ['name','cate_id'],

	];

}