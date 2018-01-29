<?php

namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Base;
use app\common\model\Friend;
use app\common\model\Func;
use app\common\model\Nav;
use app\common\model\SeoSet;
use app\common\model\Setting;
use think\Controller;
use think\Request;

class BaseController extends Controller {

    public function __construct(Request $request = null) {

        parent::__construct($request);

        $logo = Ad::getAdByPosition(1);
        $weixin_erweima = Ad::getAdByPosition(18);
        $sina_erweima = Ad::getAdByPosition(19);
        $friends = Friend::getList(['type'=>1]);
        $setting=Setting::getSet();
        $list_nav=  Nav::getList();
        $this->assign(compact('logo','weixin_erweima','sina_erweima','friends','setting','list_nav'));

    }



}
