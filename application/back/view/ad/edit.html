{extend name='public:base' /}
{block name="title"}编辑广告图{/block}

{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>

	<!--弹出添加用户窗口--><form class="form-horizontal" action="{:url('update')}" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="{$row_->id}">
    <input type="hidden" name="referer" value="{$referer}">
		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<h4 class="modal-title" id="gridSystemModalLabel">编辑广告图</h4>
				</div>
				<div class="">
					<div class="container-fluid">

							<div class="form-group ">
								<label for="sName" class="col-xs-3 control-label">名称：</label>
								<div class="col-xs-8 ">
									<input type="text" class="form-control input-sm duiqi" name='title' value="{$row_->title}" id="sName" placeholder="">
								</div>
							</div>
                        <div class="form-group">
                            <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>位置：</label>
                            <div class="col-xs-8">
                                <select onchange="changePix(this)" class=" form-control select-duiqi" name="position" id="sel_pos">
                                    <?php foreach ($list_position as $k=>$row_pos){if($row_pos->id > 30)break;?>
                                        <option pic_width="{$row_pos->width}" pic_height="{$row_pos->height}" value="{$row_pos->id}" <?php echo $row_pos->name==$row_->position?'selected':''?>>{$row_pos->name}</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>广告图：</label>
                            <div class="col-xs-4 ">
                                <img src="__IMGURL__{$row_->img}" alt="没有上传图片" height="150"/>

                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（<b id="pix_require">1920*600</b>），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>M。不选择表示不修改。</span>

                            </div>

                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">图片链接：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm" name='url' value="{$row_->url}" id="" placeholder="请添加开头有http://" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">打开新窗口：</label>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="new_window" id="" value="1" <?php echo $row_->new_window=='是'?'checked':''?>>是</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="new_window" id="" value="0" <?php echo $row_->new_window=='否'?'checked':''?>> 否</label>
                            </div>
                        </div>
                       <!-- <div class="form-group "  id="word_index_banner" style="display:<?php /*echo $row_->position=='首页'?'block':'none'*/?>;">
                            <label for="sName" class="col-xs-3 control-label">描述：</label>
                            <div class="col-xs-8 ">
                                <textarea name="word" style="width:700px;height:300px;">{$row_->word}</textarea>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">状态：</label>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="st" id="" value="1" <?php echo $row_->st=='正常'?'checked':''?>>正常</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="st" id="" value="2" <?php echo $row_->st=='不显示'?'checked':''?>> 不显示</label>
                            </div>
                        </div>

                    </div>
					</div>
            </div></div>
				<div class="text-center">
                    <a href="{:url('index')}"><button type="button" class="btn btn-xs btn-white" data-dismiss="modal">返回列表 </button></a>
					<button type="submit" class="btn btn-xs btn-green">保 存</button>
				</div>
			</div>
		</div>
</form>

<script>
    var pic_width = $('#sel_pos').find('option:selected').attr("pic_width");
    var pic_height = $('#sel_pos').find('option:selected').attr('pic_height');
    $('#pix_require').html(pic_width +'*'+pic_height);
    function changePix(obj){
        if(obj.value==1){
            $('#word_index_banner').show();
        }else{
            $('#word_index_banner').hide();
        }
        // alert(obj)
        // var pic_width = $(obj).val('value');
        pic_width = $(obj).find('option:selected').attr("pic_width");
        pic_height = $(obj).find('option:selected').attr('pic_height');
        $('#pix_require').html(pic_width +'*'+pic_height);

    }
    $(function () {
        $('form').bootstrapValidator({
            fields: {
                position: {
                    validators: {
                        notEmpty: {
                            message: '请选择位置'
                        }


                    }
                },


            }
        });

    });
</script>

{/block}
