<?php

namespace app\back\controller;

use app\common\model\Setting;
use think\Request;
use think\Session;


class SettingController extends BaseController {
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index() {
        $list = Setting::getSet();
//        dump($list);exit;
        return $this->fetch('edit',['list'=>$list,'act'=>'save']);
    }


    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request) {
        $data = $request->param();
        foreach($data as $k=>$v){
            $data[$k]=htmlspecialchars($v);
        }
        if($row_ =Setting::getSet()){
            if($this->saveById(1,new Setting(),$data)){
                $this->success('编辑成功', 'index', '',1);
            }else{
                $this->error('没有修改', 'index', 1);
            }
        }else{
            $Ad = new Setting();
            $Ad->save($data);
            $this->success('添加成功', 'index', '', 1);
        }


    }







}
