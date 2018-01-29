<?php

namespace app\common\model;

use think\Model;

class Base extends model {
    //分页点击时有查询参数
    public static function getPageStr($data,$page_str) {
        if(isset($data['page'])){
            unset($data['page']);
        }
        if(count($data)>0){

            $query_str = '';
            foreach($data as $k=>$v){
                $query_str.= $k.'='.$v.'&';
            }
            $page_str = preg_replace("/(page=)/im", $query_str.'page=', $page_str);
        }
        return $page_str;
    }
    protected static function getListCommon($data=[],$where = ['st' => ['<>', 0]]){

        $order = "create_time desc";

        if (!empty($data['title'])) {
            $where['title'] = ['like', '%' . $data['title'] . '%'];
        }
        if (!empty($data['paixu'])) {
            $order = $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = $data['paixu'] . ' desc';
        }
        $list_ = self::where($where)->order($order)->paginate();

        return $list_;
    }
    public static function getNavs(){
        $nav = [
            ['name' => '首页', 'link' => 'index/index','controller'=>'index','childs'=>[]],
            ['name' => '业务体系', 'link' => 'yewu/index','controller'=>'yewu',
                'childs' => [
                    ['name' => '全案营销专家', 'link' => 'yewu/index','param'=>''],
                    ['name' => '金牌托管管家', 'link' => 'yewu/tuoguan','param'=>''],
                    ['name' => '轻应用联盟', 'link' => 'yewu/qyy','param'=>''],
                    //这个是外链
                    ['name' => '云服务平台', 'link' => 'http://yfw.weilaihexun.com/', 'out' => true],

                ]
            ],
            ['name' => '品牌案例', 'link' => 'anli/index','controller'=>'anli',
                'childs' => [

                ]
            ],
            ['name' => '资讯中心', 'link' => 'news/index','controller'=>'news',
                'childs' => [
                    ['name' => '媒体报道', 'link' => 'news/get_list','param'=>'cate=1'],
                    ['name' => '行业资讯', 'link' => 'news/get_list','param'=>'cate=2'],
                    ['name' => '企业动态', 'link' => 'news/get_list','param'=>'cate=3'],
                    ['name' => '运营课堂', 'link' => 'news/chuangke','param'=>''],

                ]
            ],
            ['name' => '渠道与招商', 'link' => 'channel/index','controller'=>'channel','childs'=>[]],
            ['name' => '关于我们', 'link' => 'about/index','controller'=>'about',
                'childs' => [
                    ['name' => '公司简介', 'link' => 'about/index','param'=>''],
                    ['name' => '客户服务', 'link' => 'about/service','param'=>''],
                    ['name' => '法律声明', 'link' => 'about/law','param'=>''],
                    ['name' => '招贤纳士', 'link' => 'about/job','param'=>''],
                    ['name' => '联系我们', 'link' => 'about/contact','param'=>''],

                ]
            ],
        ];
        $list_cate = CateAnli::getList(['paixu'=>'sort']);
        foreach($list_cate as $k=>$cate){
              if($k==3)break;
            $nav[2]['childs'][] = ['name'=>$cate['name'],'link'=>'anli/index','param'=>"cate_anli_id=".$cate->id];
        }
        $nav[2]['childs'][] = ['name' => '更多案例', 'link' => 'anli/index','param'=>''];

        return $nav;
    }


}