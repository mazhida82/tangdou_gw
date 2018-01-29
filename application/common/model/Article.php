<?php

namespace app\common\model;

use think\Model;
use app\common\model\GoodAttr;

class Article extends Base {

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }


    public static function getListByCateId($cate_id) {
        return self::getList(10,['cate_id'=>$cate_id]);
    }

    public static function getList($per,$data = [],$where = ['article.st' => ['<>', 0]]) {
        $filed = 'article.*,cate.name cate';
//     echo $per;exit;
       // $where = ['article.st' => ['<>', 0]];
        $order = "create_time desc";
        if (!empty($data['cate_id'])) {
            $where['cate_id'] = $data['cate_id'];
        }

        if (!empty($data['name'])) {
            $where['article.name'] = ['like', '%' . $data['name'] . '%'];
        }
        if (!empty($data['index_show'])) {
            $where['index_show'] = $data['index_show'];
        }
        if (!empty($data['paixu'])) {
            $order = 'article.' . $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = 'article.' . $data['paixu'] . ' desc';
        }


        $list_ = self::where($where)->field($filed)->join('cate','cate_id=cate.id')->order($order)->paginate($per);


        foreach ($list_ as $k => $value) {
            if (mb_strlen($value->charm, "UTF8") >129 ) {
                $list_[$k]->charm = mb_substr($value->charm, 0, 130, 'utf-8') . '......';
            }
        }
//        dump($list_);exit;
        return $list_;
    }
    public static function findOne($id){
        return self::where(['article.id'=>$id,'article.st'=>1])->field('article.*,cate.name cate')->join('cate','cate_id=cate.id')->find();
    }
  public function getCateId($cate_name){
      $status = ['媒体报道'=>1, '行业资讯'=>2, '企业动态'=>3];
      return $status[$cate_name];
  }
}
