<?php
/* Smarty version 3.1.29, created on 2017-08-21 14:15:48
  from "D:\www\yunjuke\application\admin\views\public_store_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599a7a9430c561_91659689',
  'file_dependency' => 
  array (
    'd00146c72b202d5347875275ada2607e46a6485b' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\public_store_edit.html',
      1 => 1501668868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_599a7a9430c561_91659689 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2568599a7a93d3da36_03323067';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- <link href="<?php echo PLUGIN;?>
plugins/muitipleSelect/sumoselect.css" rel="stylesheet" type="text/css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/muitipleSelect/jquery.sumoselect.min.js"><?php echo '</script'; ?>
> -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>
plugins/select2/css/select2.min.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
plugins/select2/js/select2.min.js"><?php echo '</script'; ?>
>
<style>
	#allmap{width: 300px;height: 300px;}
    .select2{width:auto !important;min-width:100px;}
    .ncap-account-container h4 {
    	margin-top: 4px;
    }
    .nobs{
    	border-bottom: 1px dotted #ccc!important;
    	border-left: 1px dotted #ccc!important;
    	border-right: 1px dotted #ccc!important;
    }
    .ncap-account-container-list li{
	width:165px;margin-left: 15px;
    }
    .ncap-title{
    	width: 81.5%;
    	position: absolute;
    	background: #fff;
    	border-bottom: dotted 1px #CCC;
    }
    @media only screen and (max-width: 1290px) {
    	.storename{
    		width: 80%!important;
    	}
    }
</style>
	<body style="background-color: #FFF; overflow: auto;">
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>
		<div class="page">
			<div class="fixed-bar">
				<div class="item-title">
					<a class="back" href="javascript:history.back(-1)" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
					<div class="subject">
						<h3>店铺管理 - <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_name'])) {?>编辑<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_name'];
} else { ?>添加门店<?php }?></h3>
						<h5><?php if (isset($_smarty_tpl->tpl_vars['role']->value) && $_smarty_tpl->tpl_vars['role']->value == 'w') {?>微商城<?php } elseif ($_smarty_tpl->tpl_vars['role']->value == 'd') {?>电商<?php } elseif ($_smarty_tpl->tpl_vars['role']->value == 'g') {?>供应仓库<?php } else { ?>平台<?php }?>中的所有门店管理</h5>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {?>
					<ul class="tab-base nc-row">
				        <li><a href="JavaScript:void(0);" class="current">基本信息</a></li>
				        <li><a href="store_of_goods?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">商品</a></li>
				        <li><a href="store_of_shopping_guide?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">导购</a></li>
				        <li><a href="mall_express_tools?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">运费</a></li>
				       <!--  <li><a href="store_of_notice_setting?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">通知</a></li> -->
				        <li><a href="store_of_other?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">其他</a></li>
			      </ul>
			      <?php }?>
				</div>
			</div>
			<!-- 操作说明 -->
			<div class="explanation" id="explanation">
				<div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
					<h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
					<span id="explanationZoom" title="收起提示"></span> </div>
				<ul>
					<li> 若绑定云聚客后为未认证公众号，之后通过了微信认证，请重新授权补充权限。</li>
					<li>仅微信认证后的服务号可使用完整云聚客功能，若微信公众号接口异常，根据提示处理后请点击上方重新授权。</li>
					<li> 若公众号为订阅号，需通过微信认证才可支持微信支付；服务号均可支持。</li>
				</ul>
			</div>
			<form id="add_form" method="post" action="store_add?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>" enctype="multipart/form-data">
			     <input type="hidden" name="store_id" id="store_id" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];
}?>">
				<div class="ncap-form-default">
					<dl class="row">
						<dt class="tit">
							<label for="company_name"><em>*</em>单位名称</label>
						</dt>
						<dd class="opt">
							<input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['company_name'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['company_name'];
}?>" name="company_name" id="company_name" class="input-txt">
							<span class="err"></span>
							<p class="notic">公司营业执照全称或者个人的真实姓名</p>
						</dd>
					</dl>
				
					
				<dl class="row">
						<dt class="tit">
                    <label for="class_name"><em>*</em>门店名称</label>
                </dt>
						<dd class="opt storename" style="width:400px;">
							<input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_name'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_name'];
}?>" name="class_name" id="class_name" class="input-txt  class_name">
							<span class="err"></span>
							<p class="notic">门店名称不能为空且不能超过30个字</p>
						</dd>

						<dt class="tit">
                    <label for="short_store_name"><em>*</em>简称</label>
                </dt>
						<dd class="opt" style="width: 450px;">
							<input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['short_store_name'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['short_store_name'];
}?>" name="short_store_name" id="short_store_name" class="short_store_name input-txt">
							<span class="err"></span>
							<p class="notic">门店简称不能为空且不能超过8个字</p>
						</dd>
					</dl>
					
					
					
					
					
					
					
					
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort"><em>*</em>外部编码</label>
                </dt>
						<dd class="opt">
							<input id="class_sort" name="class_code" id="class_code" type="text" class="input-txt" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_out_sn'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_out_sn'];
}?>" placeholder="每个门店的编码是唯一的">
							<span class="err"></span>
                            <p class="notic">外部编码应设置在4(包含)-6(包含)位之间</p>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort"><em>*</em>联系地址</label>
                </dt>
						<dd class="opt">
							<div class="area-region-select">
								<select class="valid select2" id="addr" name="class_province">
								<option value="">-请选择-</option>
								<?php
$_from = $_smarty_tpl->tpl_vars['area_data']->value[0];
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
								 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['province_id']) && $_smarty_tpl->tpl_vars['store_data']->value['province_id'] == $_smarty_tpl->tpl_vars['v']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
								</select>
								<select name="class_city" class="select2" id="addr_city">
								 <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['province_id'])) {?>
								<?php
$_from = $_smarty_tpl->tpl_vars['area_data']->value[$_smarty_tpl->tpl_vars['store_data']->value['province_id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
								 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['city_id']) && $_smarty_tpl->tpl_vars['store_data']->value['city_id'] == $_smarty_tpl->tpl_vars['v']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
?>
								<?php } else { ?><option value="">-请选择-</option>
								<?php }?>
								
								</select>
								<select name="class_area" class="select2" id="addr_area">
								<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['city_id'])) {?>
								<?php
$_from = $_smarty_tpl->tpl_vars['area_data']->value[$_smarty_tpl->tpl_vars['store_data']->value['city_id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
								 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['area_id']) && $_smarty_tpl->tpl_vars['store_data']->value['area_id'] == $_smarty_tpl->tpl_vars['v']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
?>
								<?php } else { ?><option value="">-请选择-</option>
								<?php }?>
								 </select>
								<input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_address'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_address'];
}?>" name="class_address" id="class_address" style="margin-top:-8px;padding:2px 0;" class="input-txt"> <span class="err"></span></div>

							<p class="notic">系统将根据所选择的上级菜单层级决定新增项的所在级，即选择上级菜单为“北京”，则新增项为北京地区的下级区域，以此类推。</p>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort"><em>*</em>联系电话</label>
                </dt>
						<dd class="opt">
							<input id="class_mobile" name="class_mobile" type="text" class="input-txt" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_tel'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_tel'];
}?>">
							<span class="err"></span>
							<p class="notic"></p>
						</dd>
					</dl>
					
					<?php if (empty($_smarty_tpl->tpl_vars['role']->value)) {?>
					<dl class="row">
						<dt class="tit">
							<label for="class_sort"><em>*</em>门店类型</label>
						</dt>
						<dd class="opt">
							<div class="area-region-select">
								<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type'])) {?>
								<input name="" type="text"  class="input-txt" value="<?php if ($_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 1) {?>实体店<?php } elseif ($_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 2) {?>电商店<?php } else { ?>供应店<?php }?>" disabled>
								<input name="class_type" id="class_type_input"  type="hidden" class="input-txt" value="<?php if ($_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 1) {?>1<?php } elseif ($_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 2) {?>2<?php } else { ?>3<?php }?>">
								<?php } else { ?>
								<select class="valid" name="class_type" id="sele_type"  onchange="updatemodul(this)" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_type'];?>
<else>''<?php }?>">
									<option value="">-请选择-</option>
									<option value="1">实体店</option>
									<option value="2">电商店</option>
									<option value="3">供应店</option>
								</select>
								<?php }?>
								<span class="err"></span></div>
						</dd>
					</dl>
					<?php }?>
					
					
					
					<dl class="row" id="row_brand_ids" style="display:<?php if ($_smarty_tpl->tpl_vars['role']->value == 'd') {?>block<?php } else { ?>none<?php }?>">
						<dt class="tit">
		                    <label for="class_sort">授权渠道</label>
		                </dt>
						<dd class="opt nobg nopd nobd nobs" style="max-height: 300px;overflow: auto;">
							      	<div class="ncap-account-container ncap-title">
										<h4>授权品牌</h4>
										<ul class="ncap-account-container-list" style="width: 40%; padding-left: 2%;">
										       <h4 style="width: 50%;text-align: left;margin-left: 18px;">授权门店</h4>
										</ul>
										<ul class="ncap-account-container-list" style="width: 40%; padding-left: 2%;">
										      <h4 style="width: 50%;text-align: left;margin-left: 18px;"> 授权仓库</h4>
										</ul>
									</div>
						   <?php if (!empty($_smarty_tpl->tpl_vars['brands']->value)) {?>
						      	<?php
$_from = $_smarty_tpl->tpl_vars['brands']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_3_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_3_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
									<div class="ncap-account-container">
										<h4><input <?php if (!empty($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['v']->value['has_brand'] == 1) {?>checked<?php }?> class="checkbox va-b" type="checkbox" nctype="groupAll" name="brand_ids[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][]"class="va-b" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['brand_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value['brand_name'];?>
</h4>
										
										<ul class="ncap-account-container-list" style="width: 40%;    padding-left: 2%;">
										     <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['w_store'])) {?>
						      					<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['w_store'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vs_4_saved_item = isset($_smarty_tpl->tpl_vars['vs']) ? $_smarty_tpl->tpl_vars['vs'] : false;
$__foreach_vs_4_saved_key = isset($_smarty_tpl->tpl_vars['ks']) ? $_smarty_tpl->tpl_vars['ks'] : false;
$_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vs']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ks']->value => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
$__foreach_vs_4_saved_local_item = $_smarty_tpl->tpl_vars['vs'];
?>
										    		<li><input  <?php if (!empty($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['vs']->value['has_store'] == 1) {?>checked<?php }?> class="checkbox va-m" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vs']->value['store_id'];?>
" name="store_ids[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][]"><span class="err"></span><?php echo $_smarty_tpl->tpl_vars['vs']->value['store_name'];?>
</li>
										    	<?php
$_smarty_tpl->tpl_vars['vs'] = $__foreach_vs_4_saved_local_item;
}
if ($__foreach_vs_4_saved_item) {
$_smarty_tpl->tpl_vars['vs'] = $__foreach_vs_4_saved_item;
}
if ($__foreach_vs_4_saved_key) {
$_smarty_tpl->tpl_vars['ks'] = $__foreach_vs_4_saved_key;
}
?>
										    <?php } else { ?>
										    	<li></li>	
											<?php }?>
										</ul>
										
										<ul class="ncap-account-container-list" style="width: 40%; padding-left: 2%;">
										     <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['g_store'])) {?>
						      					<?php
$_from = $_smarty_tpl->tpl_vars['v']->value['g_store'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_5_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_5_saved_key = isset($_smarty_tpl->tpl_vars['kes']) ? $_smarty_tpl->tpl_vars['kes'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['kes'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['kes']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_5_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
										    		<li><input <?php if (!empty($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['val']->value['has_store'] == 1) {?>checked<?php }?> class="checkbox va-m" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['store_id'];?>
" name="store_ids[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][]"><span class="err"></span><?php echo $_smarty_tpl->tpl_vars['val']->value['store_name'];?>
</li>
										    	<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_5_saved_local_item;
}
if ($__foreach_val_5_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_5_saved_item;
}
if ($__foreach_val_5_saved_key) {
$_smarty_tpl->tpl_vars['kes'] = $__foreach_val_5_saved_key;
}
?>
										    <?php } else { ?>
										    	<li></li>
											<?php }?>
										</ul>
									</div>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_local_item;
}
if ($__foreach_v_3_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved_item;
}
if ($__foreach_v_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_3_saved_key;
}
?>
							<?php }?>
							<?php echo '<script'; ?>
 type="text/javascript">
								$(".ncap-account-container-list input").on("click",function(){
									if($(this).is(':checked')){
										if($(this).closest(".ncap-account-container").find("h4 input").prop('checked')){
											
										}else{
											$(this).closest(".ncap-account-container").find("h4 input").attr("checked","checked")
										}
										
									}
								});
								
								
								//单个品牌全不选
								$('input[nctype="groupAll"]').click(function(){
									if($(this).is(':checked')){
										
									}else{
										$(this).parents('h4:first').parent().find('input[type="checkbox"]').prop('checked',false);
									}
								    
								});
								<?php echo '</script'; ?>
>
							
						</dd>
					</dl>


 
      
					<dl class="row" id="row_class_brand_auth" style="display:<?php if ($_smarty_tpl->tpl_vars['role']->value == 'w' || $_smarty_tpl->tpl_vars['role']->value == 'g') {?>block<?php } else { ?>none<?php }?>">
						<dt class="tit">
                    <label for="class_sort">品牌授权</label>
                </dt>
						<dd class="opt">
							<div class="area-region-select">
								<select class="valid selecte pd-5 mb-10 select2" multiple="multiple"  name="class_brand_auth[]">
									<?php
$_from = $_smarty_tpl->tpl_vars['brands']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brand_6_saved_item = isset($_smarty_tpl->tpl_vars['brand']) ? $_smarty_tpl->tpl_vars['brand'] : false;
$_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
$__foreach_brand_6_saved_local_item = $_smarty_tpl->tpl_vars['brand'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['brands_auth']->value) && in_array($_smarty_tpl->tpl_vars['brand']->value['brand_id'],$_smarty_tpl->tpl_vars['brands_auth']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_name'];?>
</option>
									<?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_6_saved_local_item;
}
if ($__foreach_brand_6_saved_item) {
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_6_saved_item;
}
?>
								</select>
								<span class="err"></span></div>
						</dd>
					</dl>

    
					<dl class="row"  id="row_is_share_store" style="display:<?php if ($_smarty_tpl->tpl_vars['role']->value == 'w') {?>block<?php } else { ?>none<?php }?>">
						<dt class="tit"><label>是否开放兼职导购</label></dt>
						<dd class="opt">
							<div class="area-region-select">
								<input type="radio" name="is_share_store" id="store_share1" value="1" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['is_share_store']) && $_smarty_tpl->tpl_vars['store_data']->value['is_share_store'] == 1) {?>checked<?php }?>> <label>是</label>
								<input type="radio" name="is_share_store" id="store_share0" value="0" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['is_share_store']) && $_smarty_tpl->tpl_vars['store_data']->value['is_share_store'] == 0) {?>checked<?php }?>> <label>否</label>
							</div>
						</dd>
					</dl>

					<dl class="row" id="num" style="display: none;">
						<dt class="tit"><label>限制数量</label></dt>
						<dd class="opt">
							<input id="store_share_num" name="partime_jobs_limit" type="text" class="input-txt" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['partime_jobs_limit'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['partime_jobs_limit'];
}?>" >
							<span class="err"></span>
							<p class="notic"></p>
						</dd>
					</dl>



					<dl class="row" id="row_ous_cate" style="display:<?php if ($_smarty_tpl->tpl_vars['role']->value == 'w') {?>block<?php } else { ?>none<?php }?>">
						<dt class="tit">
                    <label for="class_sort">门店形式</label>
                </dt>
						<dd class="opt">
							<div class="area-region-select">
								<input type="radio" id="store_cate_1" name="store_cate" value="1" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_cate'] == 1) {?>checked<?php }?>><label for="store_cate_1">线上</label>
								<input type="radio" id="store_cate_2" name="store_cate" value="2" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_cate'] == 2) {?>checked<?php }?>><label for="store_cate_2">线下</label>
								<input type="radio" id="store_cate_3" name="store_cate" value="3" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_cate'] == 3) {?>checked<?php }?>><label for="store_cate_3">线上线下</label>
								<span class="err"></span></div>
							
							<p class="notic">线上代表只有微商城，线下只有线下收银，线上线下是指线上有微商城线下有实体收银部分</p>
						</dd>
					</dl>
					
					
					
				<dl class="row" id="row_ous_tag" style="display:<?php if ($_smarty_tpl->tpl_vars['role']->value == 'w') {?>block<?php } else { ?>none<?php }?>">
						<dt class="tit">
                    <label for="class_ous_tag">店铺类型</label>
                </dt>
						<dd class="opt">
							<div class="area-region-select">
								<input type="radio" id="ous_tag_1" name="ous_tag" value="1" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_tag']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_tag'] == 1) {?>checked<?php }?>><label for="ous_tag_1">加盟店</label>
								<input type="radio" id="ous_tag_2" name="ous_tag" value="2" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_tag']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_tag'] == 2) {?>checked<?php }?>><label for="ous_tag_2">旗舰店</label>
								<input type="radio" id="ous_tag_3" name="ous_tag" value="3" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_tag']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_tag'] == 3) {?>checked<?php }?>><label for="ous_tag_3">直营店</label>
								<input type="radio" id="ous_tag_4" name="ous_tag" value="4" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_tag']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_tag'] == 4) {?>checked<?php }?>><label for="ous_tag_4">商场超市</label>
								<span class="err"></span></div>
							
							<p class="notic"></p>
						</dd>
					</dl>
					
					
					
					
					<dl class="row">
						<dt class="tit">
							<label for="">门店Logo</label>
						</dt>
							<dd class="opt">
								<div class="input-file-show"><span class="show">
							<a class="nyroModal" rel="gal" >
								<i class="fa fa-picture-o" id="img-data" data-geo="<img src=&quot;<?php if (!empty($_smarty_tpl->tpl_vars['store_data']->value['ous_logo'])) {
echo base_url();
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_logo'];
} else {
echo base_url();?>
/application/admin/views/images/default_goods_image.jpg<?php }?>&quot; width=100px height=50px>"></i>
							</a>
							</span>
									<span class="type-file-box">
							<input type="text" name="textfield1" id="textfield1" class="type-file-text"><input type="button" name="button"  value="选择上传..." class="type-file-button"><input class="type-file-file" id="default_goods_image" name="default_goods_image" type="file" size="30" hidefocus="true" nc_type="change_default_goods_image" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
						 </span>
								</div>
								<p class="notic">建议300KB以下的图片(jpg/jpeg/png)，建议尺寸200*200    <span class="err"></span></p>
							</dd>
					</dl>
					
					
					<dl class="row">
						<dt class="tit">
                    <label for="">门店店招</label>
                </dt>
						<dd class="opt">
							<div class="input-file-show"><span class="show">
                        <a class="nyroModal" rel="gal" >
                            <i class="fa fa-picture-o" id="img-data2" data-geo="<img src=&quot;<?php if (!empty($_smarty_tpl->tpl_vars['store_data']->value['ous_shop_signs'])) {
echo base_url();
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_shop_signs'];
} else {
echo base_url();?>
/application/admin/views/images/default_goods_image.jpg<?php }?>&quot; width=100px height=50px>"></i>
                        </a>
                    </span>
								<span class="type-file-box">
                        <input type="text" name="textfield2" id="textfield2" class="type-file-text"><input type="button" name="button" id="button1" value="选择上传..." class="type-file-button"><input class="type-file-file" id="default_goods_image2" name="default_goods_image2" type="file" size="30" hidefocus="true" nc_type="change_default_goods_image" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                     </span>
							</div>
							
							<p class="notic">建议300KB以下的图片(jpg/jpeg/png)，建议尺寸640*260   <span class="err"></span></p>
						</dd>
					</dl>

					<dl class="row">
						<dt class="tit">
                    <label for="class_sort">营业时间	</label>
                </dt>
						<dd class="opt">
							<input id="class_sort" name="class_time" type="text" placeholder="08:00-24:00" class="input-txt" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_business_hours'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_business_hours'];
}?>">
							<span class="err"></span>

						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort">简单介绍</label>
                </dt>
						<dd class="opt">
							<textarea id="class_detail" name="class_detail" type="text" style="width: 500px;height: 100px;padding: 5px;"><?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_dec'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_dec'];
}?></textarea>
							<span class="err"></span>

						</dd>
					</dl>
					
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort">地理位置</label>
                </dt>
						<dd class="opt">
							<input id="address_input" name="address_input" type="text" class="input-txt" value="" placeholder="输入标准地址如：成都市金牛区金泉路5号"><input class="btn radius btn-warning ml-10 size-S" name="sreachaddres" type="button" value="搜索">
							<span class="err"></span>
							<p class="notic">点击地图选取地址，地图支持鼠标拖拽，鼠标滚轮放大/缩小</p>
							<?php echo '<script'; ?>
 type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=VjyztFQmLt7QVmbB7i760SHTar7DB6hD"><?php echo '</script'; ?>
>
                             <div id="allmap"></div>
                             <?php echo '<script'; ?>
 type="text/javascript">
								// 百度地图API功能
								var map = new BMap.Map("allmap");
								var point = new BMap.Point('<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_longitude'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_longitude'];
} else { ?>104.020775<?php }?>','<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_latitude'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_latitude'];
} else { ?>30.721598<?php }?>');
								map.centerAndZoom(point,12);
							    map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
	                            map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
								// 创建地址解析器实例
								map.centerAndZoom(point, 16);
								map.addOverlay(new BMap.Marker(point));
								
								$("input[name='sreachaddres']").click(function(){
									     var addres=$("input[id='address_input']").val();
													// 将地址解析结果显示在地图上,并调整地图视野
									    var map = new BMap.Map("allmap");
									    var myGeo = new BMap.Geocoder();
										myGeo.getPoint(addres, function(point){
										if (point) {
											$("input[id='lngX']").attr("value",point.lng);
											$("input[id='latY']").attr("value",point.lat);
									        map.centerAndZoom(point, 16);
											map.addOverlay(new BMap.Marker(point));
										}else{
											layer.msg('没找到搜索的地点');
											var lny=$("input[id='lngX']").val();
											var lat=$("input[id='latY']").val();
											var point = new BMap.Point(lny,lat);
										    map.centerAndZoom(point, 16);
											map.addOverlay(new BMap.Marker(point));}
										}, "成都市");
									     
									  });
							<?php echo '</script'; ?>
>
							<input type="hidden" id="lngX" name="longitude" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_longitude'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_longitude'];
} else { ?>104.020775<?php }?>">
							<input type="hidden" id="latY" name="latitude" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_latitude'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_latitude'];
} else { ?>30.721598<?php }?>">
						</dd>
					</dl>
					<div class="bot">
						<a id="submit" href="javascript:void(0)" class="btn btn-success radius">确认提交</a>
					</div>
				</div>
			</form>
		</div>

		<div id="goTop">
			<a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
			<a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
		</div>
	</body>
<?php echo '<script'; ?>
 type="text/javascript">
	$(".ncap-title").next().css('margin-top','45px');
	
var role = "<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
} else { ?>''<?php }?>";
//单个品牌全选
/* $('input[nctype="groupAll"]').click(function(){
    $(this).parents('h4:first').next().find('input[type="checkbox"]').attr('checked',$(this).attr('checked') == 'checked');
}); */
$(function(){
	var num = $("#class_type_input").val();
	if(num==1){
		$("#row_class_brand_auth").css("display","block");
		$("#row_is_share_store").css("display","block");
		$("#row_ous_cate").css("display","block");
		$("#row_ous_tag").css("display","block");
		
		$("#row_brand_ids").css("display","none");
	}else if(num==2){
		$("#row_brand_ids").css("display","block");
		
		$("#row_class_brand_auth").css("display","none");
		$("#row_is_share_store").css("display","none");
		$("#row_ous_cate").css("display","none");
		$("#row_ous_tag").css("display","none");
		$('#num').css("display","none");
	}else if(num==3){
		$("#row_class_brand_auth").css("display","block");
		
        $("#row_brand_ids").css("display","none");
		$("#row_is_share_store").css("display","none");
		$("#row_ous_cate").css("display","none");
		$("#row_ous_tag").css("display","none");
		$('#num').css("display","none");
	}
});
function updatemodul(e){
	if($(e).val()==1){
		$("#row_class_brand_auth").css("display","block");
		$("#row_is_share_store").css("display","block");
		$("#row_ous_cate").css("display","block");
		$("#row_ous_tag").css("display","block");
		
		$("#row_brand_ids").css("display","none");
	}else if($(e).val()==2){
		$("#row_brand_ids").css("display","block");
		
		$("#row_class_brand_auth").css("display","none");
		$("#row_is_share_store").css("display","none");
		$("#row_ous_cate").css("display","none");
		$("#row_ous_tag").css("display","none");
		$('#num').css("display","none");
	}else if($(e).val()==3){
		$("#row_class_brand_auth").css("display","block");
		
        $("#row_brand_ids").css("display","none");
		$("#row_is_share_store").css("display","none");
		$("#row_ous_cate").css("display","none");
		$("#row_ous_tag").css("display","none");
		$('#num').css("display","none");
	}
	
}
  $(document).ready(function(){
	  if($('#store_share1').attr("checked")){$('#num').show();}
	  //多炫
	  /* window.searchSelAll = $('.search-box-sel-all').SumoSelect({ 
            csvDispCount: 3,
            selectAll:true,
            search: true,
            searchText:'请选择.',
            okCancelInMulti:true ,
            floatWidth: 50,
        }); */
        $(".select2").select2();
	  $("#default_goods_image").change(function () {
          $("#textfield1").val($(this).val());
      });
      $("#default_goods_image2").change(function () {
          $("#textfield2").val($(this).val());
      });
	  $(".select2").select2();
	  /*地区列表加载*/
	  var area_data = <?php echo $_smarty_tpl->tpl_vars['area_datajs']->value;?>
;
	  $('#addr').change(function(){
		  $('#addr_area').html('<option value="">-请选择-</option>');
		  var str_city = '';province = $(this).val();
		  if(!province){
			  str_city = '<option value="">-请选择-</option>';
		  }else{
			  province = parseInt(province);
			  str_city = '<option value="">-请选择-</option>';
			  $.each(area_data[province],function(k,v){
				  str_city +='<option value="'+v[0]+'">'+v[1]+'</option>';
			  })
		  }
		  
		  $('#addr_city').html(str_city);
	  })
 	$('#addr_city').change(function(){
		  var str_area = '';city = $(this).val();
		  if(!city){
			  str_area = '<option value="">-请选择-</option>';
		  }else{
			  city = parseInt(city);
			  str_area = '<option value="">-请选择-</option>';
			  $.each(area_data[city],function(k,v){
				  str_area +='<option value="'+v[0]+'">'+v[1]+'</option>';
			  })
		  }
		  
		  $('#addr_area').html(str_area);
	  })
	var store_id = "<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];
}?>";

  	
	  $('#submit').click(function(){
		  if($("#add_form").valid()){
			  $('#add_form').submit();
		  }
	  })
	  /*验证编码为数字或字母*/
	   	jQuery.validator.addMethod("numberAndLettersVal",function(value,element){  
	           return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);  
	          },$.validator.format("请输入字母或数字")  
	          ); 
	  /*验证为正确的电话号码*/
   	  jQuery.validator.addMethod("isMobile", function(value, element) { 
   		  var length = value.length; 
   		  var mobile = /^(((13[0-9]{1})|(15[0-9]{1}|(18[0-9]{1})|(17[0-9]{1})))+\d{8})$/; 
   		  return this.optional(element) || (length == 11 && mobile.test(value)); 
   		}, "请正确填写您的手机号码"); 
	  //验证表单
	  if(!parseInt(store_id)){
		  valid_rule = {
				  company_name :{
			            required : true,
			            maxlength : 30
		          },
			        class_name : {
			            required : true,
			            remote	: {
                            url :'check_storeName',
                            type:'post',
                            cache:false,
    	                    async:false,
                            data:{
                            	store_name : function(){
                                    return $('#class_name').val();
                                }
                            }
                        },
			            maxlength : 30
			          },
			          short_store_name : {
				            required : true,
				            remote	: {
	                            url :'check_shortStoreName',
	                            type:'post',
	                            cache:false,
	    	                    async:false,
	                            data:{
	                            	short_store_name : function(){
	                                    return $('#short_store_name').val();
	                                }
	                            }
	                        },
				            maxlength : 30
				          },
			          class_code : {
			            required : true,
			            numberAndLettersVal : true,
			            minlength : 4,
			            maxlength : 6,
			            remote : {
                            url :'check_storeCode',
                            type:'post',
                            cache:false,
    	                    async:false,
                            data:{
                            	store_code : function(){
                                    return $('#class_code').val();
                                }
                            }
                        },
			          },
			          class_province : {
			            required : true,
			          },
			          class_city : {
			            required : true,
			          },
			          class_area: {
			            required: true,
			          },
			          class_mobile: {
			            required: true,
			            isMobile:true,
			          },
			        };
		  valid_msg = {
				  company_name: {
		              required : '<i class="icon-exclamation-sign">请输单位名称</i>',
		              maxlength : '<i class="icon-exclamation-sign">最多输入30个字</i>',
		            },
		    	  class_name : {
		              required : '<i class="icon-exclamation-sign">请输入店铺名</i>',
		              remote   : '<i class="fa fa-exclamation-circle"></i>该名称已存在',
		              maxlength : '<i class="icon-exclamation-sign">最多输入30个字</i>',
		            },
		            short_store_name : {
			              required : '<i class="icon-exclamation-sign">请输入店铺简称</i>',
			              remote   : '<i class="fa fa-exclamation-circle"></i>该名称已存在',
			              maxlength : '<i class="icon-exclamation-sign">最多输入30个字</i>',
			            },
		            class_code : {
		              required : '<i class="icon-exclamation-sign">编码必填</i>',
		              numberAndLettersVal   : '<i class="fa fa-exclamation-circle"></i>编码只能为数字或字母',
		              minlength : '<i class="icon-exclamation-sign">编码应不低于4位</i>',
		              maxlength : '<i class="icon-exclamation-sign">编码应不超过6位</i>',
		              remote   : '<i class="fa fa-exclamation-circle"></i>该编码已占用',
		            },
		            class_province : {
		              required : '<i class="icon-exclamation-sign">请选择省</i>',
		            },
		            class_city : {
		              required : '<i class="icon-exclamation-sign">请选择市</i>',
		            },
		            class_area: {
		              required : '<i class="icon-exclamation-sign">请选择区</i>',
		            },
		            class_mobile: {
		              required : '<i class="icon-exclamation-sign">请输入联系电话</i>',
		              isMobile : '<i class="icon-exclamation-sign">请输入正确的手机号码</i>',
		            },
		          };
	  }else{
		  valid_rule = {
				  company_name :{
			            required : true,
			            maxlength : 30
		          },
			        class_name : {
			            required : true,
			            remote	: {
                            url :'check_storeName',
                            type:'post',
                            cache:false,
    	                    async:false,
                            data:{
                            	store_name : function(){
                                    return $('#class_name').val();
                                },
                            	store_id : function(){
                                    return $('#store_id').val();
                                },
                            }
                        },
			            maxlength : 30
			          },
			          
			          
			          short_store_name : {
				            required : true,
				            remote	: {
	                            url :'check_shortStoreName',
	                            type:'post',
	                            cache:false,
	    	                    async:false,
	                            data:{
	                            	
	                            	short_store_name : function(){
	                                    return $('#short_store_name').val();
	                                },
	                            	store_id : function(){
	                                    return $('#store_id').val();
	                                },
	                            }
	                        },
				            maxlength : 30
				          },
				          
			          class_code : {
				            required : true,
				            numberAndLettersVal : true,
				            minlength : 4,
				            maxlength : 6,
				            remote : {
	                            url :'check_storeCode',
	                            type:'post',
	                            cache:false,
	    	                    async:false,
	                            data:{
	                            	store_code : function(){
	                                    return $('#class_code').val();
	                                },
	                                store_id : function(){
	                                    return $('#store_id').val();
	                                },
	                            }
	                        },
				          },
			          class_province : {
			            required : true,
			          },
			          class_city : {
			            required : true,
			          },
			          class_area: {
			            required: true,
			          },
			          class_mobile: {
			            required: true,
			            isMobile:true,
			          },
			        };
		  valid_msg = {
				  company_name: {
		              required : '<i class="icon-exclamation-sign">请输单位名称</i>',
		              maxlength : '<i class="icon-exclamation-sign">最多输入30个字</i>',
		            },
		    	  class_name : {
		              required : '<i class="icon-exclamation-sign">请输入店铺名</i>',
		              remote   : '<i class="fa fa-exclamation-circle"></i>该名称已存在',
		              maxlength : '<i class="icon-exclamation-sign">最多输入30个字</i>',
		            },
		            short_store_name : {
			              required : '<i class="icon-exclamation-sign">请输入店铺简称</i>',
			              remote   : '<i class="fa fa-exclamation-circle"></i>该名称已存在',
			              maxlength : '<i class="icon-exclamation-sign">最多输入30个字</i>',
			            },
			            
		            class_code : {
			              required : '<i class="icon-exclamation-sign">编码必填</i>',
			              numberAndLettersVal   : '<i class="fa fa-exclamation-circle"></i>编码只能为数字或字母',
			              minlength : '<i class="icon-exclamation-sign">编码应不低于4位</i>',
			              maxlength : '<i class="icon-exclamation-sign">编码应不超过6位</i>',
			              remote   : '<i class="fa fa-exclamation-circle"></i>该编码已占用',
			            },
		            class_province : {
		              required : '<i class="icon-exclamation-sign">请选择省</i>',
		            },
		            class_city : {
		              required : '<i class="icon-exclamation-sign">请选择市</i>',
		            },
		            class_area: {
		              required : '<i class="icon-exclamation-sign">请选择区</i>',
		            },
		            class_mobile: {
		              required : '<i class="icon-exclamation-sign">请输入联系电话</i>',
		              isMobile : '<i class="icon-exclamation-sign">请输入正确的手机号码</i>',
		            },
		          };
	  };
     $("#add_form").validate({
      errorPlacement: function(error, element){
    	  if($(element).hasClass("short_store_name") || $(element).hasClass("class_name")){
    		  var error_td = element.parents('dd').find('span.err');
    	  }else{
    		  var error_td = element.parents('dl').find('span.err');
    	  }
    	  error_td.append(error);
      },
      rules : valid_rule,
      messages : valid_msg
    });

//	  门店logo
      $("#default_goods_image").change(function(){
          var objUrl = getObjectURL(this.files[0]) ;
          console.log("objUrl = "+objUrl) ;
          if (objUrl) {
              $("#img-data").data('geo','<img src="'+objUrl+'" />');
          }
      });

      function getObjectURL(file) {		//建立一個可存取该file的url
          var url = null ;
          if (window.createObjectURL!=undefined) { // basic
              url = window.createObjectURL(file) ;
          } else if (window.URL!=undefined) { // mozilla(firefox)
              url = window.URL.createObjectURL(file) ;
          } else if (window.webkitURL!=undefined) { // webkit or chrome
              url = window.webkitURL.createObjectURL(file) ;
          }
          return url ;
      }

      //门店店招
      $("#default_goods_image2").change(function(){
          var objUrl = getObjectURL2(this.files[0]) ;
          console.log("objUrl = "+objUrl) ;
          if (objUrl) {
              $("#img-data2").data('geo','<img src="'+objUrl+'" />');
          }
      });

      function getObjectURL2(file) {		//建立一個可存取该file的url
          var url = null ;
          if (window.createObjectURL!=undefined) { // basic
              url = window.createObjectURL(file) ;
          } else if (window.URL!=undefined) { // mozilla(firefox)
              url = window.URL.createObjectURL(file) ;
          } else if (window.webkitURL!=undefined) { // webkit or chrome
              url = window.webkitURL.createObjectURL(file) ;
          }
          return url ;
      }

      //是否共享店铺
	  $('#store_share0').click(function () {
		  $('#num').hide();
	  });

	  $('#store_share1').click(function () {
          $('#num').show();
	  });
  });
  <?php echo '</script'; ?>
>
	</html><?php }
}
