<?php

namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Nav;
use think\Request;

class AppController extends BaseController {
    public function __construct(Request $request = null) {
        parent::__construct($request);

    }

    public function index(Request $request) {
            $ad['bg']= Ad::getAdByPosition(12);
            $ad['phone']= Ad::getAdByPosition(13);
            $ad['app_wenzi']= Ad::getAdByPosition(14);
            $ad['app_download']= Ad::getAdByPosition(15);
            $ad['adroid_download']= Ad::getAdByPosition(16);
            $ad['app_erweima']= Ad::getAdByPosition(17);
                $seo = Nav::findOne(2);
        return $this->fetch('', compact('ad','seo'));
    }



}
