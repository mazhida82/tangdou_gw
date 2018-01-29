<?php

namespace app\back\controller;

use app\common\model\Article;
use think\Request;
use app\common\model\Cate;

class CateController extends BaseController {

    public function index(Request $request) {
        $data = $request->param();
        $list_ = Cate::getList($data);
        $url = $request->url();
        return $this->fetch('',['list_'=>$list_,'url'=>$url]);
    }
public function ajax_get_cate(Request $request){
        $data = $request->param();
        $rule = ['tp'=>'require'];
        $res = $this->validate($data,$rule);
        if($res!==true){
            return json(['code'=>2,'msg'=>$res]);
        }
        $list_ = Cate::getList(['tp'=>$data['tp']]);
        if(count($list_)==0){
            return json(['code'=>1,'msg'=>'暂无数据','data'=>[]]);
        }else{
            return json(['code'=>0,'data'=>['list_cate'=>$list_]]);
        }
}
    public function create() {

            return $this->fetch('', ['title'=>'添加分类','act'=>'save']);
    }

    public function save(Request $request) {
        $data = $request->param();
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        if((new Cate())->save($data)){
            $this->success('添加成功','index','',1);
        }else{
            $this->error('添加出错');
        }

    }

    public function edit(Request $request) {
        $data = $request->param();
        $referer= $request->header()['referer'];
        //dump($referer);
        $row_ = $this->findById($data['id'],new Cate());
        return $this->fetch('create',['row_'=>$row_,'referer'=>$referer,'title'=>'添加分类','act'=>'update']);

    }

    public function update(Request $request) {
        //return 233;
        $data = $request->param();
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        if($this->saveById($data['id'],new Cate(),$data)){
            $this->success('修改成功', $referer, '', 1);
        }else{
            $this->error('没有修改内容', $referer);
        }
    }

    public function delete(Request $request) {
        $data = $request->param();
         $list_good = Article::getListByCateId($data['id']);
        if(count($list_good)>0){
            $this->error('分类下有东西，不能直接删除');
        }
        if ($this->deleteStatusById($data['id'], new Cate())) {
            $this->success('删除成功', $data['url'], '', 1);
        } else {
            $this->error('删除失败', $data['url']);
        }
    }
}
