{extend name='public:base' /}
{block name="title"}{$modelName}{/block}
{block name="content"}
<style>
    .control-label {
        padding-right: 10px;
    }
</style>

<!--弹出添加用户窗口-->
<form class="form-horizontal" action="{:url($act)}" method="post" enctype="multipart/form-data">
    <?php if($act=='update'){?>
        <input type="hidden" name="id" value="{$row_->id}">
        <input type="hidden" name="referer" value="{$referer}">
    <?php }?>
    <div class="row">
        <div class="col-xs-8">
            <div class="text-center">
                <!---->
                <h4 class="modal-title" id="gridSystemModalLabel"><?php if($act=='save'){?>添加<?php }else{?>修改<?php }?> {$modelName}</h4>
            </div>
            <div class="">
                <div class="container-fluid">
                    <div class="form-group">
                        <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>姓名：</label>
                        <div class="col-xs-8 ">
                            <input type="text" class="form-control input-sm duiqi" name='name' value="{$row_->name|default=''}" id=""
                                   placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>头像：</label>
                        <div class="col-xs-4 ">
                            <?php if($act=='update'){?>
                                <img src="__IMGURL__{$row_->img}" alt="没有上传图片" width="188"/>
                            <?php }?>
                            <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（200*280），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>M。</span>

                        </div>

                    </div>
                    <div class="form-group" id="diliver_fee_wrap" style=";">
                        <label for="situation" class="col-xs-3 control-label">简介：</label>
                        <div class="col-xs-8">
                            <label class="control-label">
                                <textarea name="jianjie" id="" cols="50" rows="8">{$row_->jianjie|default=''}</textarea></label> &nbsp;

                        </div>
                    </div>
                </div>
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
    $(function () {
        $('form').bootstrapValidator({
            fields: {
                name: {
                    validators: {
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
        });

    });

</script>

{/block}
