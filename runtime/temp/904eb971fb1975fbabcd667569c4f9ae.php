<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\phpStudy\WWW\tangdou_gw\public/../application/back\view\setting\edit.html";i:1517208598;s:75:"E:\phpStudy\WWW\tangdou_gw\public/../application/back\view\public\base.html";i:1516953628;}*/ ?>
<!doctype html>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="管理 ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>网站设置</title>
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/slide.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/flat-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jquery.nouislider.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/bootstrapValidator.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="__PUBLIC__/js/respond.min.js"></script>
    <script src="__EDITOR__/kindeditor.js"></script>
    <script src="__EDITOR__/lang/zh_CN.js"></script>
    <script>

        function del_(obj) {
            var id = $(obj).attr('data-id');
            $('#del_id').val(id);
        }
        jQuery(function ($) {
            $.datepicker.regional['zh-CN'] = {
                closeText: '关闭',
                prevText: '<上月',
                nextText: '下月>',
                currentText: '今天',
                monthNames: ['一月', '二月', '三月', '四月', '五月', '六月',
                    '七月', '八月', '九月', '十月', '十一月', '十二月'],
                monthNamesShort: ['一', '二', '三', '四', '五', '六',
                    '七', '八', '九', '十', '十一', '十二'],
                dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
                dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
                dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
                weekHeader: '周',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: true,
                yearSuffix: '年'
            };
            $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
            $(".date_input").datepicker();
        });
    </script>

</head>

<body>
<div id="wrap" style="height:2000px;">
    <!-- 左侧菜单栏目块 -->
    
    <?php $list_first_menu = \app\common\model\MenuAdmin::getList() ?>
    <div class="leftMeun" id="leftMeun">
        <div id="logoDiv">
            欢迎使用<?php echo config('site_name'); ?>后台
            <p id="logoP">
                <!--<a href="<?php echo url('index/clear_cache'); ?>">
                    <button class="alert btn-xs">清理前台缓存</button>
                </a>
-->                </p>
        </div>
        <div id="personInfor">
            <p id="userName"><?php  if(session('admin_guoshu'))echo session('admin_guoshu')->name ?> <a
                        href="<?php echo Url('admin/logout'); ?>">&nbsp;&nbsp;&nbsp;&nbsp;退出登录</a></p>
            <p><a href="/" target="_blank">前台</a></p>
        <p><a href="<?php echo Url('menu_admin/index'); ?>">管理菜单</a></p>
            <p><a href="<?php echo Url('index/index'); ?>">登录日志</a></p>
        </div>
        <?php foreach ($list_first_menu as $k => $row_first_menu) { ?>
            <div class="meun-title"><?php echo $row_first_menu->name; ?></div>
            <?php foreach ($row_first_menu['childs'] as $k2 => $row_menu) { ?>
                <div class="meun-item <?php
                if (request()->controller() == $row_menu->controller && request()->action() == $row_menu->action )echo 'meun-item-active ';
                ?>">
                    <a href="<?php echo Url($row_menu->controller . '/' . $row_menu->action, $row_menu->param) ?>"><img
                                src="__PUBLIC__/images/icon_user_grey.png"><?php echo $row_menu->name; ?></a></div>
            <?php } } ?>
        <p style="color:white;margin-top:30px;text-align:left;">@weilaihexun</p>

    </div>
    
    <!-- 右侧具体内容栏目 -->
    <div id="rightContent" style="/*height:1200px;*/">

        <a class="toggle-btn" id="nimei">
            <i class="glyphicon glyphicon-align-justify"></i>
        </a>
        <!-- Tab panes -->
        <div class="tab-content">
            <!--变化的内容-->
            
<style>
    .control-label {
        padding-right: 10px;
    }
</style>
<!--弹出添加用户窗口-->
<form class="form-horizontal" action="<?php echo url($act); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-xs-8">
            <div class="text-center">
                <h4 class="modal-title" id="gridSystemModalLabel">平台设置</h4>
            </div>
            <div class="">
                <div class="container-fluid">
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景1-文字：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg1word' value="<?php echo (isset($list->bg1word) && ($list->bg1word !== '')?$list->bg1word:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景2-文字1：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg2word1' value="<?php echo (isset($list->bg2word1) && ($list->bg2word1 !== '')?$list->bg2word1:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景2-文字2：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg2word2' value="<?php echo (isset($list->bg2word2) && ($list->bg2word2 !== '')?$list->bg2word2:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景3-文字1：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg3word1' value="<?php echo (isset($list->bg3word1) && ($list->bg3word1 !== '')?$list->bg3word1:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景3-文字2：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg3word2' value="<?php echo (isset($list->bg3word2) && ($list->bg3word2 !== '')?$list->bg3word2:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景4-文字1：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg4word1' value="<?php echo (isset($list->bg4word1) && ($list->bg4word1 !== '')?$list->bg4word1:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景4-文字2：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg4word2' value="<?php echo (isset($list->bg4word2) && ($list->bg4word2 !== '')?$list->bg4word2:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景5-文字1：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg5word1' value="<?php echo (isset($list->bg5word1) && ($list->bg5word1 !== '')?$list->bg5word1:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">背景5-文字2：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='bg5word2' value="<?php echo (isset($list->bg5word2) && ($list->bg5word2 !== '')?$list->bg5word2:''); ?>" >
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  class="col-xs-5 control-label">备案号：</label>
                        <div class="col-xs-7 ">
                            <input type="text" class="form-control input-sm " name='beian' value="<?php echo (isset($list->beian) && ($list->beian !== '')?$list->beian:''); ?>" >
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-xs btn-white" data-dismiss="modal">取消</button>
                        <button type="submit" cla="btn btn-xs btn-green">修  改</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>

<script>

</script>


        </div>
    </div>

    <script src="__PUBLIC__/js/jquery.nouislider.js"></script>

    <script>
        //min/max slider
        function huadong(my, unit, def, max) {
            $(my).noUiSlider({
                range: [0, max],
                start: [def],
                handles: 1,
                connect: 'upper',
                slide: function () {
                    var val = Math.floor($(this).val());
                    $(this).find(".noUi-handle").text(
                        val + unit
                    );
                    console.log($(this).find(".noUi-handle").parent().parent().html());
                },
                set: function () {
                    var val = Math.floor($(this).val());
                    $(this).find(".noUi-handle").text(
                        val + unit
                    );
                }
            });
            $(my).val(def, true);
        }
        huadong('.slider-minmax1', "分钟", "5", 30);
        huadong('.slider-minmax2', "分钟", "6", 15);
        huadong('.slider-minmax3', "分钟", "10", 60);
        huadong('.slider-minmax4', "次", "2", 10);
        huadong('.slider-minmax5', "天", "3", 7);
        huadong('.slider-minmax6', "天", "8", 10);
    </script>
</body>
</html>
