<?php

namespace app\back\controller;


use app\common\model\Ad;

use app\common\model\Base;
use think\Request;


class AdController extends BaseController {
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request) {
        $data = $request->param();
        $rule = ['position' => 'number'];
        $res = $this->validate($data, $rule);
        if ($res !== true) {
            $this->error($res);
        }
        $m_ = new Ad();
        $list_ = $m_->getList($data);
        //$page = $list_->currentPage();
        $page_str = $list_->render();
        $page_str = Base::getPageStr($data,$page_str);
        $list_position = Ad::getPositions();
//        dump($list_);
        $url = $request->url();
        return $this->fetch('index', ['list_' => $list_, 'list_position' => $list_position,'page_str'=>$page_str,'url'=>$url]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create() {

        $list_position = Ad::getPositions();

        return $this->fetch('', ['list_position' => $list_position]);

    }


    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request) {
        $data = $request->param();
        //dump($data);exit;
        $res = $this->validate($data, 'AdValidate');
        if ($res !== true) {
            $this->error($res);
        }
        $file = $request->file('img');

        if (empty($file)) {
            $this->error('请上传图片或检查图片大小！');
        }
        $size = $file->getSize();
        if ($size > config('upload_size')) {
            $this->error('图片大小超过限定！');
        }
        $path_name = 'ad';
        $arr = $this->dealImg($file, $path_name);
//        dump($arr);exit;
        $data['img'] = $arr['save_url_path'];
        $Ad = new Ad();
        $Ad->save($data);
        $this->success('添加成功', 'index', '', 1);
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit(Request $request) {
        $data = $request->param();
        $row_ = $this->findById($data['id'],new Ad());
        $referer = $request->header()['referer'];
        $list_position = Ad::getPositions();
        //dump($row_);
        return $this->fetch('',['row_'=>$row_,'list_position'=>$list_position,'referer'=>$referer]);
    }

    public function mobile_edit(Request $request) {
        $data = $request->param();
        $row_ = $this->findById($data['id'],new Ad());
        $list_position = Ad::getPositions();
        $prefer_url = $request->header()['referer'];
        return $this->fetch('',['row_'=>$row_,'list_position'=>$list_position,'prefer_url'=>$prefer_url]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request) {
        //dump($request->param());exit;
        $data = $request->param();
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data, 'AdValidate');
        if ($res !== true) {
            $this->error($res);
        }
        $file = $request->file('img');
        $row_ = $this->findById($data['id'],new Ad());
        if(!empty($file)){
            $path_name = 'ad';
            $size = $file->getSize();
            if ($size > config('upload_size') ) {
                $this->error('图片大小超过限定！');
            }
            $this->deleteImg($row_->img);
            $arr = $this->dealImg($file, $path_name);
            $data['img'] = $arr['save_url_path'];
        }
        if($this->saveById($data['id'],new Ad(),$data)){

            $this->success('编辑成功', $referer, '', 1);
        }else{
            $this->error('编辑失败', $referer, '', 1);
        }
    }


    /**
     * soft-delete 指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete(Request $request) {
        $data = $request->param();
        if( $this->deleteStatusById($data['id'],new Ad())){
            $this->success('删除成功', $data['url'], '', 1);
        }else{
            $this->error('删除失败', $data['url'], '', 3);
        }
    }



}
