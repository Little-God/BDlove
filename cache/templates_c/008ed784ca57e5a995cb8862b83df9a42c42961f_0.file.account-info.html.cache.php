<?php
/* Smarty version 3.1.29, created on 2017-09-13 16:38:13
  from "D:\www\yunjuke\application\pay\views\account-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59b8ee757964c7_89253484',
  'file_dependency' => 
  array (
    '008ed784ca57e5a995cb8862b83df9a42c42961f' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\account-info.html',
      1 => 1502676817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lib/footer.html' => 1,
  ),
),false)) {
function content_59b8ee757964c7_89253484 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '410459b8ee753507c7_91245697';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/H-ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/H-ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/H-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/H-ui/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/select2/css/select2.min.css" />
<link rel="stylesheet" href="<?php echo TEMPLE;?>
css/iconfont.css" />
<link rel="stylesheet" href="<?php echo TEMPLE;?>
css/kalendae.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TEMPLE;?>
js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TEMPLE;?>
js/kalendae.standalone.js"><?php echo '</script'; ?>
>
<title>账户资料</title>
<style type="text/css">
	label, .placeholder,body{
    	font-size: 12px;
	}
	.cl-b{
		color: #009dd9;
	}
	.cl-g{
		color:#44b549
	}
	.cl-o{
		color: #f90;
	}
	.input-text, .btn, .input-text.size-M, .btn.size-M {
	    font-size: 12px;
	    height: 28px;
	}
	.illustrate{
		border: 1px solid #ddd;
		background: #f9f9f9;
		padding: 6px 10px;
		font-size: 12px;
	}
.kalendae .k-calendar {
    display: inline-block;
    zoom:1;
    *display:inline;
    /* width改为100% width:155px;*/ 
    width: 300px; 
    vertical-align:top;
}
.kalendae .k-title,
.kalendae .k-header,
.kalendae .k-days {
    /* width改为100% */
    /* width:154px; */
    width: 300px;
    display:block;
    overflow:hidden;
}
.kalendae .k-header span {
    text-align:center;
    font-weight:bold;
    /* 这里的width要和.kalendae .k-days span 里面的相等 */
    width:12.8%;
    padding:1px 0;
    color:#666;
}
.kalendae .k-days span {
    /* 水平居中 */
    text-align:center;
    width:12.8%;
    /* 高度 4.5em效果比较好 height等于line-height就能垂直居中了 */
    height:2.5em;
    line-height:2.5em;
    padding:2px 3px 2px 2px;
    border:1px solid transparent;
    border-radius:3px;
    color:#999;
}
.check-box{
	padding-left: 0px;
	padding-right: 25px;
}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 账户管理 <span class="c-gray en">&gt;</span> 账户资料 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<article class="page-container">
	<p class="illustrate mb-20">请完善以下信息，方便我们更好的为您服务</p>
	<form action="edit_info" method="post" class="form form-horizontal" id="form-member-add" enctype="multipart/form-data">
		<h5>基本信息</h5>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>单位名称：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
				<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['company_name'];?>

			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-10 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio" id="sex-1" checked>
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="sex">
					<label for="sex-2">女</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" name="sex">
					<label for="sex-3">保密</label>
				</div>
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>银行卡类型：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_bank_name'];?>
" placeholder="" id="bank" name="bank"  style="width: 160px;" disabled>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>银行卡号：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_bank_usn'];?>
" placeholder="" id="banknum" name="banknum" style="width: 160px;" disabled>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>银行卡开户人：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_bank_uname'];?>
" placeholder="" id="bankuname" name="bankuname" style="width: 160px;" disabled>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>授权品牌：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<?php echo $_smarty_tpl->tpl_vars['brands']->value;?>

			</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 2) {?>
		<div class="row cl dianshang">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>授权门店：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<!--<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_ecstore_name'];?>
" placeholder="" name="store" style="width: 160px;">-->
				<?php echo $_smarty_tpl->tpl_vars['auth_stores']->value;?>

			</div>
		</div>
		<?php }?>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>支付密码：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
				<input type="password" class="input-text" value="" placeholder="******" id="paypwd" name="paypwd" style="width: 160px;">
				<button class="btn btn-secondary radius ml-10" style="font-size: 14px;" type="button" id="paypwd_edit">修改</button>
			</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 1) {?>
		<h5 class="shiti">通知信息</h5>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2">自提订单提货码：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<select id="e1" name="pick_up">
			        <option value="1">仅微信公众号提醒</option>
			        <option value="2">短信提醒及微信公众号提醒</option>
			    </select>
			    <p class="c-666" style="width: 400px;">门店自提订单，发送提货码短信给用户；方便未关注用户购买后可直接查询短信；已关注用户48小时内公众号会有推送提醒，在订单内也可查询到。</p>
			</div>
		</div>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2">预约订单状态变更：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<select id="e2" name="order">
			        <option value="1">仅微信公众号提醒</option>
			        <option value="2">短信提醒及微信公众号提醒</option>
			    </select>
			    <p class="c-666" style="width: 400px;">预约订单任何状态变更都会提醒给消费者，如预约订单被确认，被拒绝；已关注用户48小时内公众号会有推送提醒，在订单内也可查询到订单状态。</p>
			</div>
		</div>
		<?php }?>
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">附件：</label>
			<div class="formControls col-xs-8 col-sm-10"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile" id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">所在城市：</label>
			<div class="formControls col-xs-8 col-sm-10"> <span class="select-box">
				<select class="select" size="1" name="city">
					<option value="" selected>请选择城市</option>
					<option value="1">北京</option>
					<option value="2">上海</option>
					<option value="3">广州</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">备注：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<textarea name="beizhu" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" onKeyUp="$.Huitextarealength(this,100)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>-->
		<h5>门店信息</h5>
		<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] != 2) {?>
		<div class="row cl shiti gongyin">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>门店名称：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['store_name'];?>
" placeholder="" name="store-name" style="width: 160px;" id="store-name">
			</div>
		</div>
		<div class="row cl shiti gongyin">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>外部编码：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['ous_out_sn'];?>
" placeholder="" name="code" style="width: 160px;">
			</div>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 1) {?>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>门店类型：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<select id="e3" name="ous_tag">
			        <option value="0">-请选择-</option>
			        <option value="1" <?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_tag'] == 1) {?> selected<?php }?> >加盟店</option>
			        <option value="2" <?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_tag'] == 2) {?> selected<?php }?>>旗舰店</option>
			        <option value="3" <?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_tag'] == 3) {?> selected<?php }?>>直营店</option>
			        <option value="4" <?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_tag'] == 4) {?> selected<?php }?>>商场超市店</option>
			   </select>
			</div>
		</div>
		<?php }?>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>门店形式：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
				<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 1) {?>实体门店<?php } elseif ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 2) {?>电商门店<?php } else { ?>供应门店<?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 1) {?>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>限制兼职导购数量：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['partime_jobs_limit'];?>
" placeholder="" name="part-time-guide" style="width: 160px;">
			</div>
		</div>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>门店logo：</label>
			<div class="formControls col-xs-8 col-sm-10"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile1" id="uploadfile1" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"> 选择上传...</a>
				<input type="file" multiple name="file-1" class="input-file">
				</span> 
				<p class="c-999">建议300KB以下的图片（jpg/jpeg/png）,建议尺寸640*260</p>
			</div>
		</div>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>门店店招：</label>
			<div class="formControls col-xs-8 col-sm-10"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile2" id="uploadfile2" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"> 选择上传...</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> 
				<p class="c-999">建议300KB以下的图片（jpg/jpeg/png）,建议尺寸640*260</p>
			</div>
		</div>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2">营业时间：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['ous_business_hours'];?>
" id="datemin" class="input-text" name="time" style="width:150px;">
			</div>
		</div>
		<div class="row cl shiti">
			<label class="form-label col-xs-4 col-sm-2">门店介绍：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<textarea name="beizhu" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" id="intro"><?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['ous_dec'];?>
</textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['ous_type'] == 2) {?>
		<?php if (empty($_smarty_tpl->tpl_vars['storeinfo']->value['bind_token_session'])) {?>
		<div class="row cl dianshang">
		    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>绑定店名称：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
			    
				<button class="btn btn-warning radius" onclick="sync_store()" style="font-size: 14px;" type="button">绑定店铺</button>
			</div>
		</div>
		<?php } else { ?>
		<div class="row cl dianshang">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>绑定店名称：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
				<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_ecstore_name'];?>

				<button class="btn btn-secondary radius ml-10" onclick="sync_store_r(<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_ecstore_type'];?>
)" style="font-size: 14px;" type="button">重新授权</button>
				<button class="btn btn-success radius ml-10" onclick="sync_store_c()" style="font-size: 14px;" type="button">更换店铺</button>
			</div>
		</div>
		<div class="row cl dianshang">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>店铺类型：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
				<?php if ($_smarty_tpl->tpl_vars['storeinfo']->value['bind_ecstore_type'] == 1) {?>京东<?php } else { ?>淘宝<?php }?>
			</div>
		</div>
		<div class="row cl dianshang">
			<label class="form-label col-xs-4 col-sm-2">店铺描述：</label>
			<div class="formControls col-xs-8 col-sm-10" style="margin-top: 3px;">
				<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['bind_ecstore_desc'];?>

			</div>
		</div>
		<?php }?>
		
		<?php }?>
			
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">发货时间：</label>
			<div class="col-xs-8">
				<input type="time" name="delivery_time" id="delivery_time" value="<?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_time'])) {
echo $_smarty_tpl->tpl_vars['storeinfo']->value['delivery_time'];
}?>" class="input-text" style="width: 80px;"/>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">发货日期：</label>
			<div class="col-xs-8">
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="1" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'1') !== false) {?>checked<?php }?>>
				    <label for="checkbox-1">周一</label>
				</div>
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="2" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'2') !== false) {?>checked<?php }?>>
				    <label for="checkbox-2">周二</label>
				</div>
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="3" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'3') !== false) {?>checked<?php }?>>
				    <label for="checkbox-3">周三</label>
				</div>
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="4" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'4') !== false) {?>checked<?php }?>>
				    <label for="checkbox-4">周四</label>
				</div>
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="5" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'5') !== false) {?>checked<?php }?>>
				    <label for="checkbox-5">周五</label>
				</div>
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="6" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'6') !== false) {?>checked<?php }?>>
				    <label for="checkbox-5">周六</label>
				</div>
				<div class="check-box">
				    <input type="checkbox" name="delivery_date[]" value="7" <?php if (strpos($_smarty_tpl->tpl_vars['storeinfo']->value['delivery_date'],'7') !== false) {?>checked<?php }?>>
				    <label for="checkbox-5">周日</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">不能发货时间：</label>
			<div class="col-xs-8">
				<input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['not_delivery_time'])) {
echo $_smarty_tpl->tpl_vars['storeinfo']->value['not_delivery_time'];
}?>" name="not_delivery_time" id="not_delivery_time" class="auto-kal input-text radius" data-kal="mode:'multiple'" style="width: 60%;">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所在地区：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<select id="e4" style="width: 150px;"  name="class_province">
					<option value="0">-请选择-</option>
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
" <?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['province_id']) && $_smarty_tpl->tpl_vars['storeinfo']->value['province_id'] == $_smarty_tpl->tpl_vars['v']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
			   </select>
			   <select id="e5" style="width: 150px;" name="class_city">
				   <?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['province_id'])) {?>
				   <?php
$_from = $_smarty_tpl->tpl_vars['area_data']->value[$_smarty_tpl->tpl_vars['storeinfo']->value['province_id']];
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
" <?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['city_id']) && $_smarty_tpl->tpl_vars['storeinfo']->value['city_id'] == $_smarty_tpl->tpl_vars['v']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
				   <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
?>
				   <?php } else { ?><option value="0">-请选择-</option>
				   <?php }?>
			   </select>
				<select id="e6" style="width: 150px;" name="class_area">
					<?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['city_id'])) {?>
					<?php
$_from = $_smarty_tpl->tpl_vars['area_data']->value[$_smarty_tpl->tpl_vars['storeinfo']->value['city_id']];
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
" <?php if (isset($_smarty_tpl->tpl_vars['storeinfo']->value['area_id']) && $_smarty_tpl->tpl_vars['storeinfo']->value['area_id'] == $_smarty_tpl->tpl_vars['v']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value[1];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
?>
					<?php } else { ?><option value="0">-请选择-</option>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">街道地址：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['ous_address'];?>
" placeholder="" name="address" style="width: 360px;">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">联系电话：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['storeinfo']->value['ous_tel'];?>
" placeholder="例如：0571-88888888" name="tel" style="width: 360px;">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">地理位置：</label>
			<div class="formControls col-xs-8 col-sm-10">
				<input type="text" class="input-text" value="" placeholder="输入标准地址如：成都市金牛区金泉路5号" style="width: 360px;">
				<a class="btn btn-warning radius" id="search" herf="javascript:;">搜索</a>
				<p class="c-error mt-10">点击地图选取地址，地图支持鼠标拖拽，鼠标滚轮放大/缩小</p>
				<div id="map" style="width: 300px;height: 300px;" class="mt-10"></div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2 mt-20">
				<input class="btn btn-success size-L radius" type="submit" id="submit" value="&nbsp;&nbsp;确认提交&nbsp;&nbsp;">
			</div>
		</div>
		
	</form>
</article>
		
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/H-ui/lib/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/H-ui/lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/H-ui/lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/select2/js/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/jQuery_md5/jQuery.md5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/jQuery_md5/jQuery.md5.add.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7MH97gy8hQKq7T4iiQ4GWdzxIudjKGh5"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        //	初始化select2
        $("#e1").select2();
        $("#e2").select2();
        $("#e3").select2();
        $("#e4").select2();
        $("#e5").select2();
        $("#e6").select2();

		/*地区列表加载*/
        var area_data = <?php echo $_smarty_tpl->tpl_vars['area_datajs']->value;?>
;
        $('#e4').change(function(){
            $('#e6').html('<option value="0">-请选择-</option>');
            var str_city = '';province = $(this).val();
            if(!province){
                str_city = '<option value="0">-请选择-</option>';
            }else{
                province = parseInt(province);
                str_city = '<option value="0">-请选择-</option>';
                $.each(area_data[province],function(k,v){
                    str_city +='<option value="'+v[0]+'">'+v[1]+'</option>';
                })
            }

            $('#e5').html(str_city);
        });

        $('#e5').change(function(){
            var str_area = '';city = $(this).val();
            if(!city){
                str_area = '<option value="0">-请选择-</option>';
            }else{
                city = parseInt(city);
                str_area = '<option value="0">-请选择-</option>';
                $.each(area_data[city],function(k,v){
                    str_area +='<option value="'+v[0]+'">'+v[1]+'</option>';
                })
            }
            $('#e6').html(str_area);
        });

        // 百度地图API功能
        var map = new BMap.Map("map");
        map.enableScrollWheelZoom(true);
        map.centerAndZoom("成都",11);      // 初始化地图,用城市名设置地图中心点
        var local = new BMap.LocalSearch(map, {
            renderOptions:{map: map}
        });
        //	地图搜索
        $("#search").click(function(){
            local.search($("input[name='search']").val());
        })

        $("#submit").click(function(){
            /*var bankusn=$("#banknum").val();
            var bankname=$("#bank").val();
            var bankuname=$("#bankuname").val();
            if(bankusn!=''){
                var reg = /^(\d{16}|\d{19})$/;
                if(!reg.test(bankusn)){
                    layer.msg('银行卡号不正确');
                    return false;
                }
            }
            if(bankusn!=''&&(bankname=='' || bankuname=='')){
            	layer.msg('银行名称和银行开户人必填,方便交易时核对信息',{time:3000});
            	return false;
            }*/
			var storename=$("#store-name").val();
            if(storename==''){
                layer.msg('门店名称必填');
                return false;
            }

            var paypwd=$("#paypwd").val();
            if(paypwd!='')
            {
                $("#paypwd").val(pwd_addMD5(paypwd));
            }

        });

        $("body").on('click','#paypwd_edit',function () {
			if ($('#paypwd').val().length<6) {
			    layer.msg('密码长度不能小于6位!');
			    return false;
            }
            if ($('#paypwd').val().length>20) {
			    layer.msg('密码长度不能大于20位!');
			    return false;
            }
            var pass = pwd_addMD5($('#paypwd').val());
            $.ajax({
                url:'store_paypwd',
                type:'post',
                data:{pwd:pass},
                dataType:'json',
                success:function(data) {
                    if(data.state == '403'){
                        layer.msg(data.msg);
                        window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                    }else if(data.state == '401'){
                        layer.msg(data.msg);
                        return false;
                    }else{
                        layer.msg(data.msg);
                    }
                }
        	});
        });


        $("body").on('click','#sure',function () {
			var old_p=$("#old_p").val();
			var old_pa=pwd_addMD5(old_p);
            $.ajax({
                url:'store_paypwd',
                type:'post',
                data:{old_p:old_pa},
                dataType:'json',
                success:function(data) {
                    if(data.state=='403'){
                        layer.msg(data.msg);
                        window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                    }else if(data.state == '401'){
                        layer.msg(data.msg);
                    }else if (data.state) {
                        $(".layui-layer-shade").remove();
                        $(".layui-layer").remove();
                        $('#paypwd').removeAttr("disabled");
                        $('#paypwd').focus();
                    } else {
                        layer.msg(data.msg);
                    }
                }
            })
        });


        $("body").on('click',"#quxiao",function(){
            $(".layui-layer-shade").remove();
            $(".layui-layer").remove();
        });

    });
    function sync_store(){
    	layer.open({
   	        type: 1,
   	        title:'绑定类型',
   	        skin: 'layui-layer-rim', //加上边框
   	        area: ['300px', '150px'], //宽高
   	        content: '<div style="margin:15px 50px;">绑定店铺类型：<select name="bind_store_type" id="bind_store_type">'+
			       '<option value="">-请选择-</option>'+
			       '<option value="2">淘宝</option>'+
			       '<option value="1">京东</option> '+
			    '</select></div>',
   	        btn: ['确认', '关闭'],
   	        yes:function(){
   	        	type=$('#bind_store_type').val()
   	     	if(type==''){
   	     		layer.msg('请先选择绑定店铺类型！',{icon:2});return false;
   	     	}
   	     	$.ajax({
   	             url:'store_sync',
   	             type:'post',
   	             data:{type:type},
   	             dataType:'json',
   	             success:function(data) {
                     if(data.state=='403'){
                         layer.msg(data.msg);
                         window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                     }else if(data.state == '401'){
                         layer.msg(data.msg);
                     }else if (data.state) {
   	                 	layer.open({
   	                	        type: 1,
   	                	        title:'绑定提示',
   	                	        skin: 'layui-layer-rim', //加上边框
   	                	        area: ['400px', '150px'], //宽高
   	                	        content: '<div style="margin:15px 50px;">去绑定前，请先确定是否已订阅，如未订阅，请先点此<a href="'+data.obj.subscription_url+'" target="_blank"><span style="color:#FF0000;">订阅</span></a></div>',
   	                	        btn: ['确认', '关闭'],
   	                	        yes:function(){
   	                	            var url = data.obj.auth_url+'authorize?response_type=code&client_id='+data.obj.AppKey+'&store_type='+data.obj.ecs_code_name+
   	                	            		'&redirect_uri=<?php echo base_url("pay.php/account/");?>
'+data.obj.callback_url+'&state='+data.obj.user_id+'|'+data.obj.ecs_code;
   	                	            
   	                	            window.open(url);
   	                	            layer.closeAll();
   	                	            layer.confirm('是否授权成功？      如未订阅，请点此<a href="'+data.obj.subscription_url+'" target="_blank"><span style="color:#FF0000;">订阅</span></a>',{btn: ['已授权成功','我已订购，重试一次']},
   	                	                function(){
   	                	                    layer.closeAll();
   	                	                     window.location.reload();
   	                	                },
   	                	                function(){
   	                	                    layer.closeAll();
   	                	                    accredit(data.obj);
   	                	                });
   	                	        },
   	                	        no:function(){
   	                	            
   	                	        }
   	                	    });
   	                 } else {
   	                     layer.msg(data.msg,{icon:2});return false;
   	                 }
   	             }
   	         })
   	        },no:function(){}
    	})
    }
    //重新授权
    function sync_store_r(type){
    	$.ajax({
	             url:'store_sync_info',
	             type:'post',
	             data:{type:type},
	             dataType:'json',
	             success:function(data) {
                     if(data.state=='403'){
                         layer.msg(data.msg);
                         window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                     }else if(data.state == '401'){
                         layer.msg(data.msg);
                     }else if (data.state) {
	            		 accredit(data.obj);
	            	 }else{
	            		 layer.msg(data.msg,{icon:2});return false;
	            	 }
	             }
    	})
    }
  //更改店铺
    function sync_store_c(){
    	sync_store();
    }
    function accredit(obj){
        layer.open({
            type: 1,
            title:'授权提示',
            skin: 'layui-layer-rim', //加上边框
            area: ['400px', '150px'], //宽高
            content: '<div style="margin:15px 50px;">去授权前，请先确定是否已订阅，如未订阅，请先点此<a href="'+obj.subscription_url+'" target="_blank"><span style="color:#FF0000;">订阅</span></a></div>',
            btn: ['确认', '关闭'],
            yes:function(){
               
            	if(obj.u_ecs_id !=undefined && obj.u_ecs_id !=''){
            		var url = obj.auth_url+'authorize?response_type=code&client_id='+obj.AppKey+'&store_type='+obj.ecs_code_name+
            				'&redirect_uri=<?php echo base_url("pay.php/account/");?>
'+obj.callback_url+'&state=reenabled|'+obj.u_ecs_id;
            	}else{
            		 var url = obj.auth_url+'authorize?response_type=code&client_id='+obj.AppKey+'&store_type='+obj.ecs_code_name+
                		'&redirect_uri=<?php echo base_url("pay.php/account/");?>
'+obj.callback_url+
                		'&state='+obj.user_id+'|'+obj.ecs_code;
            	}
            	
                window.open(url);
                layer.closeAll();
                layer.confirm('是否授权成功？      如未订阅，请点此<a href="'+obj.subscription_url+'" target="_blank"><span style="color:#FF0000;">订阅</span></a>',{btn: ['已授权成功','我已订购，重试一次']},
                    function(){
                        layer.closeAll();
                        window.location.reload();
                    },
                    function(){
                        layer.closeAll();
                        accredit(obj);
                    });
            },
            no:function(){
                
            }
        });
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
