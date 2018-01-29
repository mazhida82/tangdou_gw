<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"E:\phpStudy\WWW\tangdou_gw\public/../application/back\view\ad\index.html";i:1514453530;s:75:"E:\phpStudy\WWW\tangdou_gw\public/../application/back\view\public\base.html";i:1516953628;}*/ ?>
<!doctype html>
<html lang="ch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="管理 ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>广告图列表</title>
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
<div role="tabpanel" class="tab-pane" id="user" style="display:block;">
	<div class="check-div form-inline row">
				<div class="col-xs-2">
                    <a href="<?php echo url('create'); ?>"><button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addUser" id="create">添加广告图</button></a>
		</div>
		<div class="col-xs-10">
			<form method="get" action="<?php echo url('index'); ?>">
			<select name="position" style="color:inherit">
				<option value="">--请选择位置--</option>
                <?php foreach($list_position as $category){if($category->id > 30)break;?>
				<option value="<?php echo $category->id; ?>"  <?php if(\think\Request::instance()->get('position') == $category->id): ?>selected<?php endif; ?>><?php echo $category->name; ?></option>
                <?php }?>
			</select>
			<input type="text" name="title" value="<?php echo \think\Request::instance()->get('title'); ?>" class="form-control input-sm" placeholder="输入名称搜索">
			<button class="btn btn-white btn-xs " type="submit">查 询 </button>
			</form>
		</div>
		<!--<div class="col-lg-3 col-lg-offset-2 col-xs-4" style=" padding-right: 40px;text-align: right;">
			<label for="paixu">排序:&nbsp;</label>
			<select class=" form-control">
				<option>地区</option>
				<option>地区</option>
				<option>班期</option>
				<option>性别</option>
				<option>年龄</option>
				<option>份数</option>
			</select>
		</div>-->
	</div>
	<div class="data-div">
		<div class="row tableHeader">
            <div class="col-xs-1 ">
                编 号
            </div>
			<div class="col-xs-1">
                名称
			</div>
            <div class="col-xs-1">
                链接
            </div>
            <div class="col-xs-1">
                新窗口
            </div>
			<div class="col-xs-2">
                广告图
			</div>
           <div class="col-xs-1">
               位置
           </div>
            <div class="col-xs-2">
                修改时间
            </div>
            <div class="col-xs-1">
				状 态
			</div>
			<div class="col-xs-2">
				操 作
			</div>
		</div>
		<div class="tablebody">
			<?php if(count($list_)>0){foreach($list_ as $key=>$row_){?>
			<div class="row cont_nowrap">
                <div class="col-xs-1 ">
                    <?php echo $row_->id; ?>
                </div>
				<div class="col-xs-1 " title="<?php echo $row_->title; ?>">
					<?php echo $row_->title; ?>
				</div>

                <div class="col-xs-1 " title="<?php echo $row_->url; ?>">
                    <a href="<?php echo $row_->url; ?>" target="_blank">
                    <?php echo $row_->url; ?>
                    </a>
                </div>
                <div class="col-xs-1 ">
                    <?php echo $row_->new_window; ?>
                </div>
				<div class="col-xs-2">
                    <a href="__IMGURL__<?php echo $row_->img; ?>" target="_blank">
                        <img src="__IMGURL__<?php echo $row_->img; ?>" style="height:65px;max-width:175px;"  alt="没有">
                    </a>
				</div>
                <div class="col-xs-1" title="<?php echo $row_->position; ?>">
                    <?php echo $row_->position; ?>
                </div>
                <div class="col-xs-2">
                    <?php echo $row_->update_time; ?>
                </div>
                <div class="col-xs-1">
                    <?php echo $row_->st; ?>
                </div>
				<div class="col-xs-2">
                    <a href="<?php echo url('edit'); ?>?id=<?php echo $row_->id; ?>"><button class="btn btn-success btn-xs edit_" >修改</button></a>
                    <button class="btn btn-danger btn-xs del_cate" data-toggle="modal" data-target="#deleteSource" data-id="<?= $row_['id']?>" onclick="del_(this)"> 删除</button>

				</div>

			</div>
			<?php }}else{?>
				<div class="row">
					<div class="col-xs-12 ">
						<h3 class="" align="center" style="color:red;font-size:18px">结果不存在</h3>
					</div>
				</div>
			<?php }?>

		</div>

	</div>

	<!--页码块-->
	<footer class="footer">
		<?php echo $page_str; ?>
	</footer>


	<!--弹出删除用户警告窗口-->
	<div class="modal fade" id="deleteSource" role="dialog" aria-labelledby="gridSystemModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						确定删除数据吗？
					</div>
				</div>
				<div class="modal-footer">
					<form action="<?php echo url('delete'); ?>" method="post" >
						<input type="hidden" name="id" value="" id="del_id">
                        <input type="hidden" name="url" value="<?php echo $url; ?>" id="del_id">
						<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
						<button type="submit" class="btn  btn-xs btn-danger">确 定</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
</div>
<script>
    $(function () {
        $('#form_u').bootstrapValidator({
            fields: {
                true_name: {
                    validators:
                        {
                            notEmpty: {
                                message: '姓名不能为空'
                            },
                            stringLength: {
                                min: 2,
                                max: 20,
                                message: '姓名长度必须在2到20位之间'
                            }
                        }

                },
                mobile: {
                    validators: {
                        notEmpty: {
                            message: '手机不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 11,
                            message: '手机长度不对'
                        }

                    }
                },
                addr: {
                    validators: {
                        notEmpty: {
                            message: '地址不能为空'
                        }
                    }
                }
            }
        });

    });
	function del_(obj) {
		var id = $(obj).attr('data-id');
		$('#del_id').val(id);
    }
    /*function edit_(obj) {
        var id = $(obj).attr('data-id');
       $.get("<?php echo url('edit'); ?>",{id:id},function (data) {
           if(data.code!=0){
               alert(data.msg);
           }else{
               //
               var sex_str='';
               var sex={'男':1,"女":0};
               $('#id_u').val(data.row.id);
               $('#true_name_u').val(data.row.true_name);
               $('#mobile_u').val(data.row.mobile);

               if(data.row.sex=='男'){
                   sex_str= $('<label  class="col-xs-3 control-label"><input type="radio" name="sex" value="1" checked> 男</label>'
                       +'<label  class="col-xs-3 control-label"> <input type="radio" name="sex" value="0"> 女</label>');
               }else{
                   sex_str= $('<label  class="col-xs-3 control-label"><input type="radio" name="sex" value="1"> 男</label>'
                       +'<label  class="col-xs-3 control-label"> <input type="radio" name="sex" value="0" checked> 女</label>');
               }
                $('#sex_wrap_u').html(sex_str);
               $('#addr_u').val(data.row.addr);
           }
       });
    }*/
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
