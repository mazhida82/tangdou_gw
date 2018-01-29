<?php

namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Nav;
use app\common\model\Recruit;
use app\common\model\SeoSet;
use think\Controller;
use think\Request;

class AboutController extends BaseController {

    public function index() {
        $ad['banner'] = Ad::getAdByPosition(21);
        $ad['award'] = Ad::getAdByPosition(22);
        $seo = Nav::findOne(4);
        return $this->fetch('', compact('ad','seo'));
    }

    public function service() {

        return $this->fetch();
    }

    public function law() {
        return $this->fetch();
    }

    public function job() {
        $list_recruit = Recruit::getList([], ['st' => 1]);
        return $this->fetch('', ['list_recruit' => $list_recruit]);
    }

    public function contact() {
        return $this->fetch();
    }


}
