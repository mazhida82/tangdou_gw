<?php

namespace app\back\controller;

use app\common\model\Func;
use think\Request;


class FuncController extends BaseController
{
    public function index(Request $request) {
        $data = $request->param();
        $list_ = Func::getList($data);
        $url = $request->url();
        return $this->fetch('',['list_'=>$list_,'url'=>$url]);
    }

    public function create() {

        return $this->fetch('', ['title'=>'添加案例功能','act'=>'save']);
    }

    public function save(Request $request) {
        $data = $request->param();
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        if((new Func())->save($data)){
            $this->success('添加成功','index','',1);
        }else{
            $this->error('添加出错');
        }

    }

    public function edit(Request $request) {
        $data = $request->param();
        $referer= $request->header()['referer'];
        //dump($referer);
        $row_ = $this->findById($data['id'],new Func());
        return $this->fetch('create',['row_'=>$row_,'referer'=>$referer,'title'=>'修改案例功能','act'=>'update']);

    }

    public function update(Request $request) {
        //return 233;
        $data = $request->param();
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        if($this->saveById($data['id'],new Func(),$data)){
            $this->success('修改成功', $referer, '', 1);
        }else{
            $this->error('没有修改内容', $referer);
        }
    }

    public function delete(Request $request) {
        $data = $request->param();

        if ($this->deleteStatusById($data['id'], new Func())) {
            $this->success('删除成功', $data['url'], '', 1);
        } else {
            $this->error('删除失败', $data['url']);
        }
    }
}
