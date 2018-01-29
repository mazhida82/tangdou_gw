<?php

namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Article;
use app\common\model\Cate;
use app\common\model\Nav;
use think\Request;

class ArticleController extends BaseController {
    public function __construct(Request $request = null) {
        parent::__construct($request);

    }

    public function index(Request $request) {
        $list_cate = Cate::getList();
        $ad = Ad::getAdByPosition(20);
        $list_new=Article::getList(10,['cate_id'=>$list_cate[0]->id,'paixu'=>'sort'], ['article.st' => ['=', 1]]);
        if($list_new->lastPage()>1){
           $more=true;
        }else{
            $more=false;
        }
        $seo = Nav::findOne(3);
        return $this->fetch('', compact('ad', 'list_cate','list_new','more','seo'));
    }
//ajax
    public function get_list(Request $request) {
        $data = $request->get();
        $per=10;
        if($request->get('page')>1){
            $per=6;
        }
        $list_new = Article::getList($per,['cate_id' => $data['cate_id'],'paixu'=>'sort'], ['article.st' => 1]);

        if($list_new->isEmpty()){
              return ['code'=>__LINE__,'msg'=>'暂无内容'];
        }
        return ['code'=>0,'data'=>$list_new];

    }

    public function read(Request $request) {
        //用新而已
        $data = $request->param();

        $row_ = Article::findOne($data['id']);
        if (!$row_) {
            $this->error('暂无数据');
        }
        $row_->setInc('click');
        $seo = (object)[
            'title' => $row_->name . '_' . $row_->cate . '_' . config('site_name'),
            'keywords' => $row_->keywords,
            'description' => $row_->description,
        ];
        // dump($row_->cate);exit;
        return $this->fetch('', ['row_' => $row_, 'seo' => $seo]);

    }


}
