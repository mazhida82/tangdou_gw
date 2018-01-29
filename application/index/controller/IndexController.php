<?php
namespace app\index\controller;

use app\common\model\Setting;
use app\common\model\Ad;

class IndexController extends BaseController {

    public function index() {

        $ad['logo'] = Ad::getAdByPosition(1);
        $ad['bg1'] = Ad::getAdByPosition(2);
        $ad['bg2'] = Ad::getAdByPosition(3);
        $ad['bg3'] = Ad::getAdByPosition(4);
        $ad['bg4'] = Ad::getAdByPosition(5);
        $ad['phone1'] = Ad::getAdByPosition(6);
        $ad['phone2'] = Ad::getAdByPosition(7);
        $ad['phone3'] = Ad::getAdByPosition(8);
        $ad['code'] = Ad::getAdByPosition(9);
        $setting = Setting::getSet();


        return $this->fetch('', compact('ad','setting'));
    }
}
