<?php

namespace app\back\controller;

use app\common\model\Anli;
use think\Request;
use app\common\model\Host;

class HostController extends BaseController {
    public function __construct() {
    parent::__construct();
    $this->assign(['modelName'=>'主持人']);
    }

    public function index(Request $request) {
        $data = $request->param();
        $list_ = Host::getList($data);
        $url = $request->url();
        return $this->fetch('',['list_'=>$list_,'url'=>$url]);
    }

    public function create() {

            return $this->fetch('', ['act'=>'save']);
    }

    public function save(Request $request) {
        $data = $request->param();
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        $file = $request->file('img');
        $data['img']=$this->uploadImg($file,'host');
        if((new Host())->save($data)){
            $this->success('添加成功','index','',1);
        }else{
            $this->error('添加出错');
        }

    }

    public function edit(Request $request) {
        $data = $request->param();
        $referer= $request->header()['referer'];
        //dump($referer);
        $row_ = $this->findById($data['id'],new Host());
        return $this->fetch('create',['row_'=>$row_,'referer'=>$referer,'act'=>'update']);

    }

    public function update(Request $request) {
        //return 233;
        $data = $request->param();
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data,'CateValidate');
        if($res!==true){
            $this->error($res);
        }
        $row_ = $this->findById($data['id'],new Host());
        $file = $request->file('img');
        if(!empty($file)){
            $path_name = 'host';
            $size = $file->getSize();
            if ($size > config('upload_size') ) {
                $this->error('图片大小超过限定！');
            }
            $this->deleteImg($row_->img);
            $arr = $this->dealImg($file, $path_name);
            $data['img'] = $arr['save_url_path'];
        }
        if($this->saveById($data['id'],new Host(),$data)){
            $this->success('修改成功', $referer, '', 1);
        }else{
            $this->error('没有修改内容', $referer);
        }
    }

    public function delete(Request $request) {
        $data = $request->param();

        if ($this->deleteStatusById($data['id'], new Host())) {
            $this->success('删除成功', $data['url'], '', 1);
        } else {
            $this->error('删除失败', $data['url']);
        }
    }
}
