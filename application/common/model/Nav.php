<?php

namespace app\common\model;

use think\Model;

class Nav extends model {

    public function getTpAttr($value) {
        $status = [1 => '资讯', 2 => '案例'];
        return $status[$value];
    }
    public static function getList($data=[]) {

        $where = ['st' => ['=',1]];
        $order = "sort asc";
      /*  if (!empty($data['tp'])) {
            $where['tp'] = $data['tp'];
        }*/
        if (!empty($data['paixu'])) {
            $order =  $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order =  $data['paixu'] . ' desc';
        }
        $list_ = self::where($where)->order($order)->select();

        return $list_;
    }

    public static  function findOne($id) {
        $row_=self::where(['id'=>$id,'st'=>1])->find();
        if($row_){
            return $row_;
        }
        return (object)[
            'title'=>'welove首页',
            'keywords'=>'welove首页keywords',
            'description'=>'welove首页description',
        ];
    }

}
