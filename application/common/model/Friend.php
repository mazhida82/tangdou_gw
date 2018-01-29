<?php

namespace app\common\model;

use think\Model;

class Friend extends model {
    protected $insert = ['st' => 1];

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }
    public function getTypeAttr($value) {
        $status = [ 1 => '友情链接', 2 => '战略合作'];
        return $status[$value];
    }

    public static function getList($data=[]) {
        $where = ['st' => ['<>',0]];
        if(!empty($data['name'])){
            $where['name']=['like','%'.$data['name'].'%'];
        }
        if(!empty($data['type'])){
            $where['type']=$data['type'];
        }
        $list_ = self::where($where)->order('create_time asc')->paginate();
        return $list_;
    }


}
