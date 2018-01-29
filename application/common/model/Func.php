<?php

namespace app\common\model;

use think\Model;

class Func extends Model
{

	public function getStAttr($value)
	{
		$status = [0=>'delete',1=>'正常'];
		return $status[$value];
	}

    //分页查询
	public static function getList($data=[]){
        $where = ['st' => ['=',1]];
        $order = "create_time desc";
        if (!empty($data['paixu'])) {
            $order =  $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order =  $data['paixu'] . ' desc';
        }
        $list_ = self::where($where)->order($order)->select();

        return $list_;
	}
}
