<?php

namespace app\back\controller;

use app\common\model\Friend;
use app\common\model\Base;

use think\Request;


class FriendController extends BaseController {
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request) {
        $data = $request->param();

        $m_ = new Friend();
        $list_ = $m_->getList($data);
        $page_str = $list_->render();
        $page_str = Base::getPageStr($data,$page_str);
        $url = $request->url();
        return $this->fetch('index', ['list_' => $list_, 'page_str'=>$page_str,'url'=>$url]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create() {

        return $this->fetch('');

    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request) {
       // dump($request->param());exit;

        $data = $request->param();

        $res = $this->validate($data, 'FriendValidate');
        if ($res !== true) {
            $this->error($res);
        }
        $file = $request->file('img');

        if (!empty($file)) {
            $size = $file->getSize();
            if ($size > config('upload_size')) {
                $this->error('图片大小超过限定！');
            }
            $path_name = 'friend';
            $arr = $this->dealImg($file, $path_name);
            $data['logo'] = $arr['save_url_path'];
        }


        $Friend = new Friend();
        $Friend->save($data);
        $this->success('添加成功', 'index', '', 1);
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit(Request $request) {
//        return 23;
        $referer = $request->header()['referer'];
        $data = $request->param();
        $row_ = $this->findById($data['id'],new Friend());
        return $this->fetch('',['row_'=>$row_,'referer'=>$referer]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request) {
        $data = $request->param();
//        dump($data);
//        exit;
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data, 'FriendValidate');
        if ($res !== true) {
            $this->error($res);
        }

        $file = $request->file('img');
        $row_ = $this->findById($data['id'],new Friend());
        if(!empty($file)){
            $path_name = 'friend';
            $size = $file->getSize();
            if ($size > config('upload_size') ) {
                $this->error('图片大小超过限定！');
            }
            $this->deleteImg($row_->logo);
            $arr = $this->dealImg($file, $path_name);
            $data['logo'] = $arr['save_url_path'];
        }
        if($data['type']==1){
            $this->deleteImg($row_->logo);
            $data['logo']= '';
        }
        if($this->saveById($data['id'],new Friend(),$data)){

            $this->success('编辑成功', $referer ,'', 1);
        }else{
            $this->error('编辑失败',$referer, '', 3);
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
        if( $this->deleteStatusById($data['id'],new Friend())){
            $this->success('删除成功', $data['url'], '', 1);
        }else{
            $this->error('删除失败', $data['url'], '', 3);
        }
    }


}
