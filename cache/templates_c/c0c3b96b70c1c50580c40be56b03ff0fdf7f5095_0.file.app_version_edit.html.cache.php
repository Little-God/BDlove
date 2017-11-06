<?php
/* Smarty version 3.1.29, created on 2017-08-01 17:49:45
  from "D:\www\yunjuke\application\admin\views\app_version_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59804eb9a853b3_63025754',
  'file_dependency' => 
  array (
    'c0c3b96b70c1c50580c40be56b03ff0fdf7f5095' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\app_version_edit.html',
      1 => 1496230488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_59804eb9a853b3_63025754 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '101559804eb984eca2_14003203';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 227px; top: 352px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
        <a class="back" href="javascript:history.back();" title="返回列表">
            <i class="fa fa-arrow-circle-o-left"></i>
        </a>
        <div class="subject">
            <h3>APP版本 - 添加编辑</h3>
            <h5>APP版本添加与管理</h5>
        </div>
    </div>
  </div>
    <div class="explanation" id="explanation">
        <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span id="explanationZoom" title="收起提示"></span>
        </div>
        <ul>
            <li>显示位置如果选择APP端，则显示在APP端。如果选择PC端就显示在PC端。</li>
        </ul>
    </div>
    <form id="form" method="post" action="">
        <?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {?>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
        <?php }?>
    <div class="ncap-form-default">
      <dl class="row">
        <dt class="tit">
          <label for="ac_name"><em>*</em>客户端设备</label>
        </dt>
        <dd class="opt">
          <select id="app" name="app_id">
              <option value="">--请选择--</option>
             <!-- <option value="1" id="ap1" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['app_id'] == 1) {?>selected<?php }?>>安卓pad</option>-->
              <option value="1" id="ap1" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['app_id'] == 1) {?>selected<?php }?>>安卓手机</option>
              <option value="2" id="ap2" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['app_id'] == 2) {?>selected<?php }?>>ios手机</option>
              <option value="3" id="ap3" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['app_id'] == 3) {?>selected<?php }?>>ipad</option>
              <!--<option value="5" id="ap5" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['app_id'] == 5) {?>selected<?php }?>>winphone</option>-->
          </select>
          <span class="err"></span>
          <p class="notic"></p>
        </dd>
      </dl>
        <dl class="row">
            <dt class="tit">
                <label for="ac_sort">小版本号</label>
            </dt>
            <dd class="opt">
                <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {
echo $_smarty_tpl->tpl_vars['row']->value['version_mini'];
}?>" name="version_mini" class="input-txt">
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="ac_sort">版本标识</label>
            </dt>
            <dd class="opt">
                <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {
echo $_smarty_tpl->tpl_vars['row']->value['version_code'];
}?>" name="version_code" class="input-txt">
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="ac_sort">安装包地址</label>
            </dt>
            <dd class="opt">
                <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {
echo $_smarty_tpl->tpl_vars['row']->value['apk_url'];
}?>" name="apk_url" class="input-txt">
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="ac_sort">升级提示</label>
            </dt>
            <dd class="opt">
                <textarea name="upgrade_point" class="tarea" rows="6"><?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {
echo $_smarty_tpl->tpl_vars['row']->value['upgrade_point'];
}?></textarea>
                <span class="err"></span>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="taobao_app_key">是否升级</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <!--<label for="cm_comment_0" class="btn radius isupdate <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?>selected btn-primary<?php } elseif (!isset($_smarty_tpl->tpl_vars['row']->value)) {?>selected btn-primary<?php }?>" title="不升级">不升级</label>-->
                    <label for="cm_comment_1" class="cb-enable <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['type'] == 1) {?>selected <?php } elseif (!isset($_smarty_tpl->tpl_vars['row']->value)) {?>selected <?php }?>" title="升级">升级</label>
                    <label for="cm_comment_2" class="cb-disable <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['type'] == 2) {?>selected <?php }?>" title="强制升级">强制升级</label>
                    <!--<input type="radio" id="cm_comment_0" name="type" value="0" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?>checked="checked"<?php } elseif (!isset($_smarty_tpl->tpl_vars['row']->value)) {?>checked="checked"<?php }?>>-->
                    <input type="radio" id="cm_comment_1" name="type" value="1" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['type'] == 1) {?>checked="checked"<?php }?>>
                    <input type="radio" id="cm_comment_2" name="type" value="2" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['type'] == 2) {?>checked="checked"<?php }?>>
                </div>
                <p class="notic"></p>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="taobao_app_key">是否可用</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="cms_comment_1" class="cb-enable <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?>selected<?php } elseif (!isset($_smarty_tpl->tpl_vars['row']->value)) {?>selected<?php }?>" id="cb" title="开启">可用</label>
                    <label for="cms_comment_0" class="cb-disable <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['status'] == 0) {?>selected<?php }?>" id="bc" title="关闭">不可用</label>
                    <input type="radio" id="cms_comment_1" name="status" value="1" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?>checked="checked"<?php } elseif (!isset($_smarty_tpl->tpl_vars['row']->value)) {?>checked="checked"<?php }?>>
                    <input type="radio" id="cms_comment_0" name="status" value="0" <?php if (isset($_smarty_tpl->tpl_vars['row']->value) && $_smarty_tpl->tpl_vars['row']->value['status'] == 0) {?>checked="checked"<?php }?>>
                </div>
                <p class="notic"></p>
            </dd>
        </dl>
      <div class="bot"><a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" id="sub">确认提交</a></div>
    </div>
  </form>
</div>
<?php echo '<script'; ?>
>
//按钮先执行验证再提交表单
$(function(){
    $("#sub").click(function(){
        if($("#form").valid()){
            var fomedata = $("#form").serialize();
            $.ajax({
                url:'../app_version_add_edit',
                type:'post',
                data:fomedata,
                dataType:'json',
                success:function(data){
                    if(data.state){
                        layer.msg('操作成功');
                        window.location.href = '../app_version_manage';

                    }else{
                        layer.msg('操作失败');
                    }
                }
            });
        }
    });
});
//
$(document).ready(function(){
    $('#form').validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('dd').children('span.err');
            error_td.append(error);
        },
        rules : {
            app_id : {
                required   : true
            },
            version_mini : {
                required   : true
            },
            version_code : {
                required   : true,
                rangelength : [0,10]
            },
            cate_name : {
            	required   : true
            },
            apk_url : {
            	required   : true
            }
        },
        messages : {
            app_id : {
                required   : '<i class="fa fa-exclamation-circle"></i>请选择客户端'
            },
            version_mini : {
                required   : '<i class="fa fa-exclamation-circle"></i>请填写版本号'
            },
            version_code : {
                required   : '<i class="fa fa-exclamation-circle"></i>请填写版本标识',
                rangelength : '<i class="fa fa-exclamation-circle"></i>请填写版本标识长度为10'
            },
            cate_name : {
                required : '<i class="fa fa-exclamation-circle"></i>请填写分类名称'
            },
            apk_url : {
                required : '<i class="fa fa-exclamation-circle"></i>请填写安装包链接'
            }
        }
    });
   
//    $('#app_id').each(function(){
//        if($(this).val()==1){
//            $("#ap1").attr("selected",true);
//        }else if($(this).val()==2){
//            $("#ap2").attr("selected",true);
//        }else if($(this).val()==3){
//            $("#ap3").attr("selected",true);
//        }else if($(this).val()==4){
//            $("#ap4").attr("selected",true);
//        }else if($(this).val()==5){
//            $("#ap5").attr("selected",true);
//        }
//    });
//
//    $('#statu').each(function(){
//        if($(this).val()==1 || $(this).val()==''){
//            $('input:radio[name=status]')[0].checked=true;
//        }else if($(this).val()==0){
//            $('input:radio[name=status]')[1].checked=true;
//            $('#cb').css('background','#ECF0F1');
//            $('#cb').css('color','#777');
//            $('#cb').css('border-color','#BEC3C7');
//            $('#bc').css('background','#96A6A6');
//            $('#bc').css('color','#FFF');
//            $('#bc').css('border-color','#808B8D');
//        }
//    });
//
});
//
//$(function(){
//        $('#app').on("change",function(){
//            $('#app_id').val($(this).find("option:selected").val());
//        });
//        $('#cb').click(function(){
//            $('#cb').css('background','#1BBC9D');
//            $('#cb').css('color','#FFF');
//            $('#cb').css('border-color','#16A086');
//            $('#bc').css('background','#ECF0F1');
//            $('#bc').css('color','#777');
//            $('#bc').css('border-color','#BEC3C7');
//        });
//    $('#bc').click(function(){
//        $('#cb').css('background','#ECF0F1');
//        $('#cb').css('color','#777');
//        $('#cb').css('border-color','#BEC3C7');
//        $('#bc').css('background','#96A6A6');
//        $('#bc').css('color','#FFF');
//        $('#bc').css('border-color','#808B8D');
//    });
//});

<?php echo '</script'; ?>
>
<div id="goTop" style="bottom: 30px;">
    <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
    <a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
</div>

<div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible">
    <div>返回列表</div>
</div>
</body>
</html><?php }
}
