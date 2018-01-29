<?php

namespace app\back\controller;

use think\Cache;
use think\Request;

use app\common\model\AdminLog;
class IndexController extends BaseController
{
   public function index(Request $request){
        $list_ = AdminLog::getLogs();

        return $this->fetch('index',['list_'=>$list_]);
   }
    public function clear_cache(){
        Cache::clear();
        $this->success('清除成功！',url('index'),'',1);
    }
}
