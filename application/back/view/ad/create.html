{extend name='public:base' /}
{block name="title"}添加广告图{/block}
{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>
<script src="__EDITOR__/kindeditor.js"></script>
<script src="__EDITOR__/lang/zh_CN.js"></script>
<script>
    KindEditor.ready(function (K) {
        // var editor = K.create('#desc_textarea');
        var editor = K.create('textarea[name="word"]',{
            themeType: 'simple',
            resizeType: 1,
            uploadJson: '__EDITOR__/php/upload_json.php',
            fileManagerJson: '__EDITOR__/php/file_manager_json.php',
            allowFileManager: true,
            //下面这行代码就是关键的所在，当失去焦点时执行 this.sync();
            afterBlur: function(){this.sync();}
        });

    });

</script>
	<!--弹出添加用户窗口--><form class="form-horizontal" action="{:url('save')}" method="post" enctype="multipart/form-data" >
		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<!---->
					<h4 class="modal-title" id="gridSystemModalLabel">添加广告图</h4>
				</div>
				<div class="">
					<div class="container-fluid">

							<div class="form-group ">
                                <label for="sName" class="col-xs-3 control-label">名称：</label>
								<div class="col-xs-8 ">
									<input type="text" class="form-control input-sm duiqi" name='title' value="" id="" placeholder="">
								</div>
							</div>

                            <div class="form-group">
                                <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>位置：</label>
                                <div class="col-xs-8">
                                    <select onchange="changePix(this)" class=" form-control select-duiqi" name="position" id="">
                                   <!--     <option value="">--请选择--</option>-->
                                        <?php foreach ($list_position as $k=>$category){if($category->id > 30)break;?>
                                        <option pic_width="{$category->width}" pic_height="{$category->height}" value="{$category->id}" ">{$category->name}</option>
<?php }?>
                                    </select>

                                </div>
                            </div>

                        <div class="form-group">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>广告图：</label>
                            <div class="col-xs-4 ">
                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（<b id="pix_require">1920*600</b>），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>M。</span>
                            </div>

                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">图片链接：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm" name='url' value="" id="" placeholder="请添加开头有http://" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">打开新窗口：</label>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="new_window" id="" value="1" >是</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="new_window" id="" value="0" checked> 否</label>
                            </div>
                        </div>
                       <!-- <div class="form-group " style="display:block" id="word_index_banner">
                            <label for="sName" class="col-xs-3 control-label">描述：</label>
                            <div class="col-xs-8 ">
                                <textarea  name="word" style="width:700px;height:300px;"></textarea>
                            </div>
                        </div>-->

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
    function changePix(obj){
        if(obj.value==1 || obj.value==10){
            $('#word_index_banner').show();
        }else{
            $('#word_index_banner').hide();
        }
        var pic_width = $(obj).find('option:selected').attr("pic_width");
        var pic_height = $(obj).find('option:selected').attr('pic_height');
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

                img: {
                    validators: {
                        notEmpty: {
                            message: '请添加广告图'
                        }
                    }
                }

            }
        });

    });

</script>

{/block}
