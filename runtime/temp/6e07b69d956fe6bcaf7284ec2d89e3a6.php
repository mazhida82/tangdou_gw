<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"E:\phpStudy\WWW\tangdou_gw\public/../application/back\view\index\index.html";i:1514453534;s:75:"E:\phpStudy\WWW\tangdou_gw\public/../application/back\view\public\base.html";i:1516953628;}*/ ?>
<!doctype html>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="管理 ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>后台首页-登录记录</title>
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
    .pagination li.disabled>a, .pagination li.disabled>span{color:inherit;}
    .pagination li>a, .pagination li>span{color:inherit}
</style>
<!-- 分类管理模块 -->
<div role="tabpanel" class="tab-pane active" id="sour">
    <div class="data-div">
        <div class="row tableHeader">
            <div class="col-xs-1 ">
                编码
            </div>
            <div class="col-xs-3">
                管理员
            </div>
            <div class="col-xs-3">
                登录ip
            </div>
            <div class="col-xs-1">
                登录次数
            </div>
            <div class=" col-xs-">
                登录时间
            </div>

        </div>
        <div class="tablebody">
            <?php foreach($list_ as $key=>$row_){?>
            <div class="row" >
                <div class="col-xs-1">
                    <?= $row_['id']?>
                </div>
                <div  class="col-xs-3">
                    <span><?= $row_['admin_name']?></span>
                </div>
                <div class="col-xs-3">
                    <?= $row_['ip']?>
                </div>
                <div class="col-xs-1">
                    <?= $row_['times']?>
                </div>
                <div class="col-xs-">
                    <?= $row_['create_time']?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<!-- /.modal -->
<!--页码块-->
<footer class="footer">
    <?php echo $list_->render(); ?>
</footer>

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
