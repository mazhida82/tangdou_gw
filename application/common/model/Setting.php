<?php

namespace app\common\model;

use think\Model;

class Setting extends Base {

    public static function  getSet(){
        $list = self::where('')->order('create_time asc')->find();
        return $list;
    }


}
