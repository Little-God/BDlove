<?php
/* Smarty version 3.1.29, created on 2017-08-01 10:38:04
  from "D:\www\yunjuke\application\admin\views\type_val_add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_597fe98ca32af1_46558923',
  'file_dependency' => 
  array (
    '8ba6653d97ad653beafa0414a9ab95b8bf8cae03' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\type_val_add.html',
      1 => 1500948914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_597fe98ca32af1_46558923 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13055597fe98c871713_93641175';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color: #FFF; overflow: auto;">
    <div class="page">
        <div class="fixed-bar">
            <div class="item-title"><a class="back" href="javascript:history.back(-1)" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>

                <div class="subject">
                    <h3>类型管理 - <?php if (isset($_smarty_tpl->tpl_vars['type_val']->value)) {?>编辑属性<?php } else { ?>新增属性<?php }?></h3>
                    <h5>商品类型的管理可用于绑定商品分类</h5>
                </div>
            </div>
        </div>
        <div class="explanation" id="explanation">
            <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
                <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                <span id="explanationZoom" title="收起提示"></span></div>
            <ul>
                <li>关联规格不是必选项，它会影响商品发布时的规格及价格的录入。不选为没有规格。</li>
                <li>关联品牌不是必选项，它会影响商品发布时的品牌选择。</li>
                <li>属性值可以添加多个，每个属性值之间需要使用逗号隔开。</li>
                <li>选中属性的“显示”选项，该属性将会在商品列表页显示。</li>
                <li>自定义属性只需要填写属性名称，属性值由商家自行填写。注意：自定义属性不作为商品检索项使用。</li>
            </ul>
        </div>
        <form id="type_form" action="type_val_submit" method="post">
            <?php if (isset($_smarty_tpl->tpl_vars['type_val']->value)) {?>
            <input type="hidden" name="param[type_id]" value="<?php echo $_smarty_tpl->tpl_vars['type_val']->value['sp_id'];?>
">
            <?php }?>
            <div class="ncap-form-default">
                <dl class="row">
                    <dt class="tit">
                        <label for="t_mane"><em>*</em>属性名称</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" name="param[type_name]" id="t_mane" value="<?php if (isset($_smarty_tpl->tpl_vars['type_val']->value)) {
echo $_smarty_tpl->tpl_vars['type_val']->value['sp_name'];
}?>">
                        <span class="err"></span>

                       <p class="notic">属性名称应在2-10个字符之间</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label class="" for="s_sort">所属商品类型</label>
                    </dt>
                    <dd class="opt">
                        <div id="">
                            <input type="hidden" value=""  class="mls_id">
                            <input type="hidden" value="" name="param[class_name]" class="mls_name">
                            <select class="class-select mr-5" name="param[class_id]" onchange="get_next_classes(this)" data-data="add_spec"  validate="required:true" min="1">
                                <option value="0" selected>-请选择-</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['type']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['type_id']->value == $_smarty_tpl->tpl_vars['v']->value['sp_cl_id']) {?>
                                        <option selected value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sp_cl_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sp_cl_name'];?>
</option>
                                    <?php } else { ?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sp_cl_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sp_cl_name'];?>
</option>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
                            </select>
                        </div>
                        <p class="notic">选择分类，可关联到任意级分类。（关系到商品添加时该分类下的所有可以操作的品牌、属性、自定义属性）</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="t_sort"><em>*</em>属性是否可选</label>
                    </dt>
                    <dd class="opt">

                        <input type="radio" class=""   checked  name="param[check]"  value="1">唯一属性
                        <input type="radio" class=""  <?php if (isset($_smarty_tpl->tpl_vars['type_val']->value) && $_smarty_tpl->tpl_vars['type_val']->value['sp_is_select'] == 2) {?> checked <?php }?>  name="param[check]"  value="2">单选属性
                        <input type="radio" class=""  <?php if (isset($_smarty_tpl->tpl_vars['type_val']->value) && $_smarty_tpl->tpl_vars['type_val']->value['sp_is_select'] == 3) {?> checked <?php }?>  name="param[check]"  value="3">复选属性
                        <span class="err"></span>

                        <p class="notic">选择"单选/复选属性"时，可以对商品该属性设置多个值，同时还能对不同属性值指定不同的价格加价，用户购买商品时需要选定具体的属性值。选择"唯一属性"时，商品的该属性值只能设置一个值，用户只能查看该值。</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>该属性值的录入方式</label>
                    </dt>
                    <dd class="opt">
                        <input type="radio" class=""  checked  name="param[check_type]"  value="1">手工录入
                        <input type="radio" class="" <?php if (isset($_smarty_tpl->tpl_vars['type_val']->value) && $_smarty_tpl->tpl_vars['type_val']->value['sp_input_type'] == 2) {?> checked <?php }?> name="param[check_type]"  value="2">从下面的列表中选择（一行代表一个可选值）
                        <input type="radio" class="" <?php if (isset($_smarty_tpl->tpl_vars['type_val']->value) && $_smarty_tpl->tpl_vars['type_val']->value['sp_input_type'] == 3) {?> checked <?php }?> name="param[check_type]"  value="3">多行文本框
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">可选值列表</dt>
                    <dd class="opt">
                      <textarea id="textarea" name="param[check_value]"  style="width:300px;height:100px;" disabled><?php if (isset($_smarty_tpl->tpl_vars['type_val']->value) && $_smarty_tpl->tpl_vars['type_val']->value['sp_input_type']) {
echo $_smarty_tpl->tpl_vars['type_val']->value['sp_select_lists'];
}?></textarea>
                       <span class="err red" id="texterr">可选值不能为空</span>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="t_mane">属性排序</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" name="param[sp_sort]"  value="<?php if (isset($_smarty_tpl->tpl_vars['type_val']->value) && $_smarty_tpl->tpl_vars['type_val']->value['sp_sort']) {
echo $_smarty_tpl->tpl_vars['type_val']->value['sp_sort'];
} else { ?>127<?php }?>" id="sp_sort">
                        <span class="err"></span>

                       <p class="notic"></p>
                    </dd>
                </dl>

                    <div class="bot"><a id="submitBtn" class="ncap-btn-big ncap-btn-green" href="JavaScript:void(0);">确认提交</a></div>

            </div>
        </form>
    </div>
    <?php echo '<script'; ?>
>
    check_val_type();

    function check_val_type() {
        if ($('input[name="param[check_type]"]:checked').val()==2){
            $('textarea[name="param[check_value]"]').attr('disabled',false);
        }

    }
     $(function(){
         $('#texterr').hide();
         $(":radio").click(function(){
             if($('input[name="param[check_type]"]:checked').val()==2){
                 $('textarea[name="param[check_value]"]').attr('disabled',false);
             }else{
                 $('textarea[name="param[check_value]"]').attr('disabled',true);
                 $('#texterr').hide();
             }
         });

         $('#textarea').focus(function () {
             $('#texterr').hide();
         });

    	 $('#type_form').validate({
             errorPlacement: function (error, element) {
                 __formSubmit = false;
                 $(element).nextAll('span.err').append(error);
             },
             rules: {
             	"param[type_name]": {
                     required: true,
                     minlength: 2,
                     maxlength: 10
                 },
             },
             messages: {
          	   "param[type_name]": {
                     required: '<i class="fa fa-exclamation-circle"></i>属性名不能为空',
                     minlength: '<i class="fa fa-exclamation-circle"></i>长度最少2个字符',
                     maxlength: '<i class="fa fa-exclamation-circle"></i>不能超过10个字符',
                 },
             }
    	 });
    	 $('#submitBtn').click(function(){
    		 if($('#type_form').valid()){
                 if($('input[name="param[check_type]"]:checked').val()==2) {
                     if (trim($('textarea[name="param[check_value]"]').val()).length < 1) {
                         $('#texterr').show();
                         return false;
                     }
                 }
                 $('#type_form').submit();
    		 }
         });

         $('input[name="param[check_type]"]').click(function(){
        	 if($(this).is(':checked')){
        		 if($(this).val()==2){
        			 $('textarea[name="param[check_value]"]').attr('disabled',false);
        		 }else{
        			 //$('textarea[name="param[check_value]"]').text('');
        			 $('textarea[name="param[check_value]"]').attr('disabled',true);
        		 }
        	 }
         })
     })
    <?php echo '</script'; ?>
>
    <div id="goTop"><a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a
            href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html><?php }
}
