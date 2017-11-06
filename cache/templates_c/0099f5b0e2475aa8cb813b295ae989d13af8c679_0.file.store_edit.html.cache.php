<?php
/* Smarty version 3.1.29, created on 2017-07-12 11:51:23
  from "D:\www\yunjuke\application\admin\views\store_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59659cbb667f45_16373243',
  'file_dependency' => 
  array (
    '0099f5b0e2475aa8cb813b295ae989d13af8c679' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\store_edit.html',
      1 => 1496322119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_59659cbb667f45_16373243 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3101259659cbae95992_10810297';
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
</style>
	<body style="background-color: #FFF; overflow: auto;">
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>
		<div class="page">
			<div class="fixed-bar">
				<div class="item-title">
					<a class="back" href="javascript:history.back(-1)" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
					<div class="subject">
						<h3>门店管理 - 编辑添加门店</h3>
						<h5>平台中的所有新闻的管理</h5>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {?>
					<ul class="tab-base nc-row">
				        <li><a href="JavaScript:void(0);" class="current">基本信息</a></li>
				        <li><a href="store_of_goods?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">商品</a></li>
				        <li><a href="store_of_shopping_guide?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">导购</a></li>
				        <li><a href="store_of_freight_setting?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">运费</a></li>
				       <!--  <li><a href="store_of_notice_setting?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">通知</a></li> -->
				        <li><a href="store_of_other?op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
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
					<li> 若绑定洽客后为未认证公众号，之后通过了微信认证，请重新授权补充权限。</li>
					<li>仅微信认证后的服务号可使用完整洽客功能，若微信公众号接口异常，根据提示处理后请点击上方重新授权。</li>
					<li> 若公众号为订阅号，需通过微信认证才可支持微信支付；服务号均可支持。</li>
				</ul>
			</div>
			<form id="add_form" method="post" action="store_add" enctype="multipart/form-data">
			     <input type="hidden" name="store_id" id="store_id" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];
}?>">
				<div class="ncap-form-default">
					<dl class="row">
						<dt class="tit">
                    <label for="class_name"><em>*</em>门店名称</label>
                </dt>
						<dd class="opt">
							<input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_name'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_name'];
}?>" name="class_name" id="class_name" class="input-txt">
							<span class="err"></span>
							<p class="notic">门店名称不能为空且不能超过30个字</p>
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
					<dl class="row">
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
$__foreach_brand_3_saved_item = isset($_smarty_tpl->tpl_vars['brand']) ? $_smarty_tpl->tpl_vars['brand'] : false;
$_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brand']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
$__foreach_brand_3_saved_local_item = $_smarty_tpl->tpl_vars['brand'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['brands_auth']->value) && in_array($_smarty_tpl->tpl_vars['brand']->value['brand_id'],$_smarty_tpl->tpl_vars['brands_auth']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_name'];?>
</option>
									<?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_3_saved_local_item;
}
if ($__foreach_brand_3_saved_item) {
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_3_saved_item;
}
?>
								</select>
								<span class="err"></span></div>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort">门店类型</label>
                </dt>
						<dd class="opt">
							<div class="area-region-select">
								<select class="valid" name="class_type">
									<option value="">-请选择-</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 1) {?>selected<?php }
if (!isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type'])) {?>selected<?php }?>>加盟店</option>
									<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 2) {?>selected<?php }?>>直营店</option>
									<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 3) {?>selected<?php }?>>旗舰店</option>
									<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_type']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_type'] == 4) {?>selected<?php }?>>商场超市</option>
								</select>
								<span class="err"></span></div>
							
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort">门店形式</label>
                </dt>
						<dd class="opt">
							<div class="area-region-select">
								<input type="radio" id="store_cate_1" name="store_cate" value="1" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_cate'] == 1) {?>checked<?php }?>><label for="store_cate_1">线上</label>
								<input type="radio" id="store_cate_2" name="store_cate" value="2" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_cate'] == 2) {?>checked<?php }?>><label for="store_cate_2">线下</label>
								<input type="radio" id="store_cate_3" name="store_cate" value="3" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate']) && $_smarty_tpl->tpl_vars['store_data']->value['ous_cate'] == 3) {?>checked<?php }
if (!isset($_smarty_tpl->tpl_vars['store_data']->value['ous_cate'])) {?>checked<?php }?>><label for="store_cate_3">线上线下</label>
								<span class="err"></span></div>
							
							<p class="notic">线上代表只有微商城，线下只有线下收银，线上线下是指线上有微商城线下有实体收银部分</p>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for=""><?php if (!isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {?><em>*</em><?php }?>门店Logo</label>
                </dt>
						<dd class="opt">
							<div class="input-file-show"><span class="show">
                        <a class="nyroModal" rel="gal" href="">
                            <i class="fa fa-picture-o" id="" data-geo="<img src=&quot;<?php if (!empty($_smarty_tpl->tpl_vars['store_data']->value['ous_logo'])) {
echo base_url();
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_logo'];
} else {
echo base_url();?>
/application/admin/views/images/default_goods_image.jpg<?php }?>&quot; width=100px height=50px>"></i>
                        </a>
                    </span>
								<span class="type-file-box">
                        <input type="text" name="textfield" id="textfield" class="type-file-text"><input type="button" name="button" id="button1" value="选择上传..." class="type-file-button"><input class="type-file-file" id="default_goods_image" name="default_goods_image" type="file" size="30" hidefocus="true" nc_type="change_default_goods_image" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                     </span>
							</div>
							<p class="notic">建议300KB以下的图片(jpg/jpeg/png)，建议尺寸200*200</p>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for=""><?php if (!isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {?><em>*</em><?php }?>门店店招</label>
                </dt>
						<dd class="opt">
							<div class="input-file-show"><span class="show">
                        <a class="nyroModal" rel="gal" href="">
                            <i class="fa fa-picture-o" id="" data-geo="<img src=&quot;<?php if (!empty($_smarty_tpl->tpl_vars['store_data']->value['ous_shop_signs'])) {
echo base_url();
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_shop_signs'];
} else {
echo base_url();?>
/application/admin/views/images/default_goods_image.jpg<?php }?>&quot; width=100px height=50px>"></i>
                        </a>
                    </span>
								<span class="type-file-box">
                        <input type="text" name="textfield" id="textfield2" class="type-file-text"><input type="button" name="button" id="button1" value="选择上传..." class="type-file-button"><input class="type-file-file" id="default_goods_image2" name="default_goods_image2" type="file" size="30" hidefocus="true" nc_type="change_default_goods_image" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                     </span>
							</div>
							<p class="notic">建议300KB以下的图片(jpg/jpeg/png)，建议尺寸640*260</p>
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
							<input id="class_detail" name="class_detail" type="text" class="input-txt" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['ous_dec'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['ous_dec'];
}?>">
							<span class="err"></span>

						</dd>
					</dl>
					
					<dl class="row">
						<dt class="tit">
                    <label for="class_sort">地理位置</label>
                </dt>
						<dd class="opt">
							<input id="address_input" name="address_input" type="text" class="input-txt" value="" placeholder="输入标准地址如：成都市金牛区金泉路5号"><input class="btn radius btn-warning" name="sreachaddres" type="button" value="搜索">
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

  $(document).ready(function(){
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
          $("#textfield").val($(this).val());
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
			          default_goods_image: {
			            required: true,
			          },
			          default_goods_image2: {
			            required: true,
			          },
			        };
		  valid_msg = {
		    	  class_name : {
		              required : '<i class="icon-exclamation-sign">请输入店铺名</i>',
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
		            default_goods_image: {
		              required : '<i class="icon-exclamation-sign">请上传店铺LOGO图片</i>',
		            },
		            default_goods_image2: {
		              required : '<i class="icon-exclamation-sign">请上传店招图片</i>',
		            },
		          };
	  }else{
		  valid_rule = {
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
		    	  class_name : {
		              required : '<i class="icon-exclamation-sign">请输入店铺名</i>',
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
	  }
     $("#add_form").validate({
      errorPlacement: function(error, element){
        var error_td = element.parents('dl').find('span.err');
        error_td.append(error);
      },
      rules : valid_rule,
      messages : valid_msg
    });
  });
  <?php echo '</script'; ?>
>
	</html><?php }
}
