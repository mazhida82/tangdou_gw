<?php
namespace app\back\validate;

use think\Validate;

class SeoSetValidate extends Validate{
	protected $rule = [
		'nav_id'  =>  'require|in:1,2,3,4,5,6,7,8,9',
		'title' =>  'require',
		'keywords' =>  'require|max:255',
		//'description' =>  'require|max:255',

	];
	protected $message  =   [
		'nav_id.require' => '导航必须',
		'title.require'   => 'seo标题必须',
		'title.max'   => 'seo标题字数超限',
		'keywords.require'   => 'seo关键词必须',
		'keywords.max'   => 'seo关键词字数超限',
        'description.require'   => 'seo描述必须',
		'description.max'   => 'seo描述字数超限',


	];
	protected $scene = [
		//'goodnew'  =>  ['name','cate_id'],

	];

}