<?php

namespace app\common\model;

use think\Model;

class Admin extends model {

    public static function pwdGenerate($pass) {
        return md5(md5($pass) . 'weilai');
    }
}
