<?php

namespace app\common\model;

use think\Model;

class Ad extends model {

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }

    public function getNewWindowAttr($value) {
        $status = [0 => '否', 1 => '是'];
        return $status[$value];
    }

    public function getPositionAttr($value) {
        $status = [1 => 'logo', 2 => '首页图－背景图1', 3 => '首页图－背景图2', 4 => '首页图－背景图3', 5 => '首页图－背景图4',6=>'首页图－手机1',7 => '首页图－手机2',8 => '首页图－手机3',9 => '二维码'
        ];
        return $status[$value];
    }

    public static function getPositions() {
        $arr = [
            1 => (object)[
                'id' => 1,
                'name' => 'logo',
                'width' => ' 210',
                'height' => '210',
            ],
            2 => (object)[
                'id' => 2,
                'name' => '首页图－背景图1',
                'width' => '1903',
                'height' => '900',
            ],
            3 => (object)[
                'id' => 3,
                'name' => '首页图－背景图2',
                'width' => '1903',
                'height' => '900',
            ],
            4 => (object)[
                'id' => 4,
                'name' => '首页图－背景图3',
                'width' => '1903',
                'height' => '900',
            ],
            5 => (object)[
                'id' => 5,
                'name' => '首页图－背景图4',
                'width' => ' 1903',
                'height' => '900',
            ],
            6 => (object)[
                'id' => 6,
                'name' => '首页图－手机1',
                'width' => '450',
                'height' => '700',
            ],
            7 => (object)[
                'id' => 7,
                'name' => '首页图－手机2',
                'width' => '410',
                'height' => '800',
            ],
            8 => (object)[
                'id' => 8,
                'name' => '首页图－手机3',
                'width' => '410',
                'height' => '800',
            ],
            9 => (object)[
                'id' => 9,
                'name' => '二维码',
                'width' => '300',
                'height' => '300',
            ]
        ];
        return $arr;
    }
    public static function getAdByPosition($position) {
        $where = ['st' => ['=', 1], 'position' => $position];
        $row_ = self::where($where)->order('create_time desc')->find();
        if (!$row_) {
            return (object)[
                'img' => '',
                'url'=>'',
                'new_window'=>''
            ];
        }
        return $row_;
    }

    public static function getAdsByPosition($position) {
        $where = ['st' => ['=', 1], 'position' => $position];
        $list_ = self::where($where)->order('create_time desc')->select();
        return $list_;
    }

    public static function getList($data=[]) {
        $where = ['st' => ['<>', 0]];
        $order = 'create_time desc';
        if (!empty($data['position'])) {
            $where['position'] = $data['position'];
        }
        if (!empty($data['title'])) {
            $where['title'] = ['like', '%' . $data['title'] . '%'];
        }
        if (!empty($data['paixu'])) {
            $order = 'ad.' . $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = 'ad.' . $data['paixu'] . ' desc';
        }
        $list_ = self::where($where)->order($order)->paginate();
        return $list_;
    }





    public static function urlOpen($url, $new_window) {
        $str = '';
        if (!empty($url)) {
            $str .= "href='$url'";
            if ($new_window == '是') {
                $str .= " target='_blank'";
            }
        }


        return $str;
    }

}
