<?php
/* Smarty version 3.1.29, created on 2017-08-21 16:10:49
  from "D:\www\yunjuke\application\admin\views\store_decoration_template.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599a95895b8888_76091769',
  'file_dependency' => 
  array (
    'eb7079924c5830c75d88159e49237bddb07244d1' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\store_decoration_template.html',
      1 => 1501581794,
      2 => 'file',
    ),
    'cf07a77062b9b954d4138b51e09410b1afb7a5cc' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\pageheader.html',
      1 => 1500948915,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_599a95895b8888_76091769 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<link type="text/css" rel="stylesheet" href="http://[::1]/yunjuke/plugins/select2/css/select2.min.css">
<link href="http://[::1]/yunjuke/application/admin/views/css/index.css" rel="stylesheet" type="text/css">
<link href="http://[::1]/yunjuke/application/admin/views/css/index_1.css" rel="stylesheet" type="text/css">
<link href="http://[::1]/yunjuke/application/admin/views/css/font-awesome.min.css" rel="stylesheet" />
<link href="http://[::1]/yunjuke/application/admin/views/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/application/admin/views/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/plugins/layer/skin/layer.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/plugins/layer/skin/laypage.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/application/admin/views/css/H-ui.min.css" />

<!--
<link type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
-->
<style type="text/css">
    html, body { overflow: visible;}
</style>

<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/common.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/script.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/zh-CN.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/admin.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/flexigrid.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.validation.min.js"></script>
<!-- <script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.picTip.js"></script> -->
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/layer/layer.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/layer/laypage.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/laydate/laydate.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/select2/js/select2.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/spinner/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/dropdown/js/dependent-dropdown.min.js"></script>

<script type="text/javascript">
/*ajax过期登录*/
function login_ajax(demo,data){
    layer.msg(data.msg);
     setTimeout(function(){
            if(demo=='agent'){
                window.location.href="http://[::1]/yunjuke/index.php/login";
            }else if(demo=='supp'){
                window.location.href="http://[::1]/yunjuke/supplier.php/login";
            }else if(demo=='admin'){
                window.location.href="http://[::1]/yunjuke/admin.php/login";
            }else if(demo=='shop'){
                window.location.href="http://[::1]/yunjuke/index.php/index/login";
            }else if(demo=='shopadmin'){
                window.location.href="http://[::1]/yunjuke/admin.php/index/login";
            }
        },2000);
}
</script>
</head>

	<body style="background-color: #FFF; overflow: auto;">
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>

		<div class="page">
			<div class="fixed-bar">
				<div class="item-title">
					<div class="subject">
						<h3>店铺微商城装修</h3>
						<h5>设计装修店铺微商城的版式</h5>
					</div>
					<ul class="tab-base nc-row">
						<li>
							<a href="store_decoration.html">门店列表</a>
						</li>
						<li>
							<a  class="current">装修模版管理</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- 操作说明 -->
			<div class="explanation" id="explanation">
				<div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
					<h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
					<span id="explanationZoom" title="收起提示"></span> </div>
				<ul>
					<li>可新增，删除或编辑模板内容</li>
				</ul>
		     </div>
            <div id="flexigrid">
            </div>
	</div>
	<script>
$(function(){

	$("#flexigrid").flexigrid({
		url: 'get_store_decoration_template',
		colModel : [
			{display: '操作', name : 'operation', width : 200, sortable : false, align: 'center', className: 'handle-s'},
			{display: '创建者', name : 'member_name', width : 400, sortable : true, align: 'left'},
			{display: '模版名称', name : 'member_name', width : 400, sortable : true, align: 'left'},
			{display: '使用门店数', name : 'name', width : 300, sortable : true, align: 'left'},
			
		],
		buttons : [
			{display: '<i class="fa fa-plus"></i>批量删除', name : 'delete', bclass : 'delete', title : '批量删除', onpress : fg_operate },
			{display: '<i class="fa fa-plus"></i>新增模版', name : 'add', bclass : 'add', title : '新增模版', onpress : fg_operate },
		
		],
		
		title: '装修模版列表'
	});
	function fg_operate(name, grid) {
    if (name == 'delete') {
        if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
            fg_delete(itemlist);
        }else{
            return false;
        }
    }else if (name == 'add') {
    	window.location.href="store_decoration_add";
    }
}
});


//编辑
function fg_edit(id){
	window.location.href="store_decoration_edit?id="+id;
}
//删除
function fg_delete(id,name){
	var stname = '';
	if(typeof(id)=='object'){
		var size = id.length;
		stname = '这'+size+'个模板';
		id = id.join(',');
	}else{
		stname = name;
	}
	layer.confirm('确认删除'+stname+'吗？',
	   {btn: ['确认','取消']}, 
	   function(){
		   $.ajax({
		        type: "post",
		        dataType: "json",
		        url: "store_decoration_del",
		        data: "id="+id,
		        success: function(data){
				  if(data.state=='403'){
			           login_ajax('shopadmin');
		            }else{
		            	layer.msg(data.msg);
		            	$("#flexigrid").flexReload();
		            }
		        }
		   })
	   }
	)
	//console.log(typeof(id))
}
</script>
			<div id="goTop">
				<a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
				<a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
			</div>
	</body>

	</html><?php }
}
