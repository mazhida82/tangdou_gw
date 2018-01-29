{extend name='public:base' /}
{block name="title"}{$modelName}{/block}
{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>

	<!--弹出添加用户窗口-->
<form id="addForm" class="form-horizontal" action="{:url($act)}" method="post" enctype="multipart/form-data" >
    <?php if($act=='update'){?>
        <input type="hidden" name="id" value="{$row_->id}">
        <input type="hidden" name="referer" value="{$referer}">
    <?php }?>

		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<!---->
					<h4 class="modal-title" id="gridSystemModalLabel"><?php if($act=='save'){?>添加<?php }else{?>修改<?php }?> {$modelName}</h4>
				</div>
				<div class="">
					<div class="container-fluid">

                        <div class="form-group">
                            <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>分类：</label>
                            <div class="col-xs-8">
                                <select class=" form-control select-duiqi" name="cate_id" id="sel_cate"><?php if($act=='save'){?>
                                   <?php foreach($list_cate as $row_cate){?>
                                    <option value="{$row_cate->id}" >{$row_cate->name}</option>
                                    <?php }?>
<?php }else{?>
                                        <?php foreach($list_cate as $row_cate){?>
                                            <option <?php echo $row_->cate_id==$row_cate->id?'selected':''?> value="{$row_cate->id}" >{$row_cate->name}</option>
                                        <?php }?>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
							<div class="form-group ">
                                <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>名称：</label>
								<div class="col-xs-8 ">
									<input type="text" class="form-control input-sm" name='name' value="{$row_->name|default=''}" id="" placeholder="">
								</div>
							</div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>腾讯视频(flash)：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm" name='vid' value="{$row_->vid|default=''}" id="" placeholder=""><span>视频flash地址</span>
                            </div>
                        </div>
                        <?php if($act=='update'){?>
                            <div class="form-group" id="diliver_fee_wrap" style=";">
                                <label for="situation" class="col-xs-3 control-label">排序：</label>
                                <div class="col-xs-8">
                                    <label class="control-label">
                                        <input type="number" name="sort" class="form-control input-sm duiqi" id=""
                                               value="{$row_->sort}"></label> &nbsp;

                                </div>
                            </div>
                        <?php }?>


                        <div class="form-group">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>小图：</label>
                            <div class="col-xs-4 ">
<?php if($act=='update'){?>
    <img src="__IMGURL__{$row_->img}" alt="没有上传图片" width="188"/>
                                <?php }?>
                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（400*200），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>M。</span>

                            </div>

                        </div>

                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">关键字：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm " name='keywords' value="{$row_->keywords|default=''}" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">描述：</label>
                            <div class="col-xs-8 ">
                                <textarea name="description" id="" cols="50" rows="5">{$row_->description|default=''}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">首页推荐：</label>
                            <?php if($act=='update'){?>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="index_show" class="index_show yes" value="1" <?= $row_->index_show=='是'?'checked':'';?> >是</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="index_show" class="index_show no" value="0" <?= $row_->index_show=='否'?'checked':''?>> 否</label>
                                <?php }else{?>
                                    <label class="control-label" >
                                        <input type="radio" name="index_show" class="index_show yes" value="1" >是</label> &nbsp;
                                    <label class="control-label">
                                        <input type="radio" name="index_show" class="index_show no" value="0" checked> 否</label>
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group" id="img_big" style="display:{$img_big_show};">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>大图：</label>
                            <div class="col-xs-4 ">
                                <?php if($act=='update'){?>
                                    <img src="__IMGURL__{$row_->img_index}" alt="没有上传图片" width="288"/>
                                <?php }?>
                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img_index" placeholder=""><span style="color:red">尺寸要求（788*400），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>M。</span>

                            </div>
                        </div>
                        <?php if($act=='update'){?>
                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">状态：</label>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="st" id="" value="1" <?php echo $row_->st=='正常'?'checked':''?>>正常</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="st" id="" value="2" <?php echo $row_->st=='不显示'?'checked':''?>> 不显示</label>
                            </div>
                        </div>
                        <?php }?>

                    </div>
				<div class="text-center">
                    <a href="javascript:history.back()">
                        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">返回</button>
                    </a>
					<button type="submit" class="btn btn-xs btn-green">保 存</button>
				</div>
			</div>
		</div>
</form>

<script>

    $('.index_show').click(function () {
        if($(this).hasClass('yes')){
            $('#img_big').show()
        }else{
            $('#img_big').hide()
        }
    });

    var obj_v = {
        fields: {
            name: {
                validators:
                    {
                        notEmpty: {
                            message: '名称不能为空'
                        }
                    }

            },
            cate_id: {
                validators:
                    {
                        notEmpty: {
                            message: '不能为空'
                        }
                    }

            },
            <?php if($act=='save'){?>
            img: {
                validators: {
                    notEmpty: {
                        message: '不能为空'
                    }
                }
            },
            <?php }?>

        }
    };


      $(function () {

        $('form').bootstrapValidator(obj_v);

    });

</script>

{/block}
