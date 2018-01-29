<?php

namespace app\back\controller;

use app\common\model\Article;
use app\common\model\Base;

use app\common\model\Cate;
use think\Request;


class ArticleController extends BaseController {
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request) {
       // echo 123;exit;
        $data = $request->param();
        $list_ = Article::getList(10,$data);
        $page_str = $list_->render();
        $page_str = Base::getPageStr($data,$page_str);
        $url = $request->url();
        $list_cate = Cate::getList();
        return $this->fetch('index', ['list_' => $list_,'url'=>$url,'page_str'=>$page_str,'list_cate'=>$list_cate]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create() {
        $list_cate = Cate::getList();
        return $this->fetch('',['title'=>'添加资讯','act'=>'save','list_cate'=>$list_cate]);

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
        $res = $this->validate($data,"ArticleValidate");
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

        $path_name = 'article';
        $arr = $this->dealImg($file, $path_name);
        $data['img'] = $arr['save_url_path'];
        $Article = new Article();
        $Article->save($data);
        $this->success('添加成功', 'index', '', 1);
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit(Request $request) {
//       return 23;
        $data = $request->param();
        $row_ = $this->findById($data['id'],new Article());
        $referer = $request->header()['referer'];
        $list_cate = Cate::getList();
        return $this->fetch('',['act'=>'update','title'=>'修改资讯 '.$row_->name,'row_'=>$row_,'referer'=>$referer,'list_cate'=>$list_cate]);
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
        $referer = $data['referer'];unset($data['referer']);
        $res = $this->validate($data,'ArticleValidate');
        if ($res !== true) {
            $this->error($res);
        }
        $row_ = $this->findById($data['id'],new Article());

//        dump($data);exit;
        $file = $request->file('img');
        if(!empty($file)){
            $path_name = 'article';
            $size = $file->getSize();
            if ($size > config('upload_size') ) {
                $this->error('图片大小超过限定！');
            }
            $this->deleteImg($row_->img);
            $arr = $this->dealImg($file, $path_name);
            $data['img'] = $arr['save_url_path'];
        }
        if($this->saveById($data['id'],new Article(),$data)){

            $this->success('编辑成功', $referer, '', 1);
        }else{
            $this->error('编辑失败', $referer, '', 3);
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
        if( $this->deleteStatusById($data['id'],new Article())){
            $this->success('删除成功', $data['url'], '', 1);
        }else{
            $this->error('删除失败', $data['url'], '', 3);
        }
    }


}
