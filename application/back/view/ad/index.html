{extend name='public:base' /}
{block name="title"}广告图列表{/block}
{block name="content"}
<style>
	.pagination li.disabled>a, .pagination li.disabled>span{color:inherit;}
	.pagination li>a, .pagination li>span{color:inherit}
</style>
<div role="tabpanel" class="tab-pane" id="user" style="display:block;">
	<div class="check-div form-inline row">
				<div class="col-xs-2">
                    <a href="{:url('create')}"><button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addUser" id="create">添加广告图</button></a>
		</div>
		<div class="col-xs-10">
			<form method="get" action="{:url('index')}">
			<select name="position" style="color:inherit">
				<option value="">--请选择位置--</option>
                <?php foreach($list_position as $category){if($category->id > 30)break;?>
				<option value="{$category->id}"  {eq name="Think.get.position" value="$category->id"}selected{/eq}>{$category->name}</option>
                <?php }?>
			</select>
			<input type="text" name="title" value="{$Think.get.title}" class="form-control input-sm" placeholder="输入名称搜索">
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
			<?php if(count($list_)>0){?>
			<?php foreach($list_ as $key=>$row_){?>
			<div class="row cont_nowrap">
                <div class="col-xs-1 ">
                    {$row_->id}
                </div>
				<div class="col-xs-1 " title="{$row_->title}">
					{$row_->title}
				</div>

                <div class="col-xs-1 " title="{$row_->url}">
                    <a href="{$row_->url}" target="_blank">
                    {$row_->url}
                    </a>
                </div>
                <div class="col-xs-1 ">
                    {$row_->new_window}
                </div>
				<div class="col-xs-2">
                    <a href="__IMGURL__{$row_->img}" target="_blank">
                        <img src="__IMGURL__{$row_->img}" style="height:65px;max-width:175px;"  alt="没有">
                    </a>
				</div>
                <div class="col-xs-1" title="{$row_->position}">
                    {$row_->position}
                </div>
                <div class="col-xs-2">
                    {$row_->update_time}
                </div>
                <div class="col-xs-1">
                    {$row_->st}
                </div>
				<div class="col-xs-2">
                    <a href="{:url('edit')}?id={$row_->id}"><button class="btn btn-success btn-xs edit_" >修改</button></a>
                    <button class="btn btn-danger btn-xs del_cate" data-toggle="modal" data-target="#deleteSource" data-id="<?= $row_['id']?>" onclick="del_(this)"> 删除</button>

				</div>

			</div>
			<?php }?>
			<?php }else{?>
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
		{$page_str}
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
					<form action="{:url('delete')}" method="post" >
						<input type="hidden" name="id" value="" id="del_id">
                        <input type="hidden" name="url" value="{$url}" id="del_id">
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
       $.get("{:url('edit')}",{id:id},function (data) {
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

{/block}