<?php

namespace app\common\model;

use think\Model;

class Anli extends Base {

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }
    public function getIndexShowAttr($value) {
        $status = [0 => '否', 1 => '是'];
        return $status[$value];
    }

    public static function getListByCateId($cate_anli_id) {
        $list_ = self::where(['cate_anli_id'=>$cate_anli_id])->select();
        return $list_;
    }

    public static function getList($data = []) {
        $filed = 'anli.*,ca.name cate_name';
        $where = ['anli.st' => ['<>', 0]];
        $order = "create_time desc";
        if (!empty($data['cate_anli_id'])) {
            $where['cate_anli_id'] = $data['cate_anli_id'];
        }

        if (!empty($data['name'])) {
            $where['anli.name'] = ['like', '%' . $data['name'] . '%'];
        }
        if (!empty($data['index_show'])) {
            $where['index_show'] = $data['index_show'];
        }
        if (!empty($data['paixu'])) {
            $order = 'anli.' . $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = 'anli.' . $data['paixu'] . ' desc';
        }

        $list_ = self::where($where)->join('cate_anli ca','ca.id=anli.cate_anli_id')->field($filed)->order($order)->paginate(12);
//funcs

        return $list_;
    }
    public static function getOne($id){
        return self::where(['anli.id'=>$id,'anli.st'=>1])->field('anli.*,ca.name cate_name')->join('cate_anli ca','ca.id=anli.cate_anli_id')->find();
    }


}
