<?php
/* Smarty version 3.1.29, created on 2017-08-04 14:37:19
  from "D:\www\yunjuke\application\admin\views\area.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5984161f34f2f1_27728747',
  'file_dependency' => 
  array (
    '695284a61cb39ecb19e208c372b071dafbe52f24' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\area.html',
      1 => 1492225944,
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
function content_5984161f34f2f1_27728747 ($_smarty_tpl) {
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
<body style="overflow: auto; cursor: default; background-color: rgb(255, 255, 255);">

<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 650px; top: 412px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>地区设置</h3>
        <h5>可对系统内置的地区进行编辑</h5>
      </div>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span>
    </div>
    <ul>
      <li>全站所有涉及的地区均来源于此处，强烈建议对此处谨慎操作。</li>
      <li>编辑地区信息后，需手动更新地区缓存(平台  &gt; 设置 &gt; 清理缓存 &gt; 地区)，前台才会生效。</li>
      <li>所属大区为默认的全国性的几大区域，只有省级地区才需要填写大区域，目前全国几大区域有：华北、东北、华东、华南、华中、西南、西北、港澳台、海外</li>
      <li>所在层级为该地区的所在的层级深度，如北京&gt;北京市&gt;朝阳区,其中北京层级为1，北京市层级为2，朝阳区层级为3</li>
    </ul>
  </div>
  <div class="flexigrid">
    <div class="bDiv" style="height: auto;">
        <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">

        </div>
	    <div class="iDiv" style="display: none;"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
//定义变量，点击返回上一级、新增分类自动获取当前父类时用到
var his_parent_ids = [0],cur_parent_id = 0;
/*--------------------------------此代码为控制表头的*/
$(function(){

    $("#flexigrid").flexigrid({
        url: 'area?op=get_secondLevel',
        dataType: 'xml',
        colModel : [
            {display: '操作', name : 'operation', width : 150, sortable : false, align: 'center', className: 'handle'},
            {display: '地区', name : 'area_name', width : 200, sortable : false, align: 'left'},
            {display: '所属大区', name : 'area_region', width : 120, sortable : false, align: 'left'},
			{display: '所在层级', name : 'area_deep', width : 100, sortable : false, align : 'left'},
			{display: '上级地区ID', name : 'area_parent_id', width : 140, sortable : false, align: 'center'}
            ],
        buttons : [
            {display: '<i class="fa fa-plus"></i>新增数据', name : 'add', bclass : 'add', title : '新增数据', onpress : fg_operate },
            {display: '<i class="fa fa-trash"></i>批量删除', name : 'delete', bclass : 'del', title : '将选定行数据批量删除', onpress : fg_operate },
            {display: '<i class="fa fa-level-up"></i>返回上级地区', name : 'up', bclass : 'back', title : '返回上级地区', onpress : fg_operate }
            ],
        searchitems : [
            {display: '地区', name : 'area_name'}
            ],
        sortname: "",
        sortorder: "",
        rp: 40,
        title: '地区列表'
    });
});

function fg_operate(name, grid) {
    if (name == 'add') {
        window.location.href = 'newArea?op=judge&judge=add&parent_id='+cur_parent_id;
    }else if (name == 'delete') {
        if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
            fg_delete(itemlist);
        } else {
            return false;
        }
    }else if (name == 'up') {
    	fg_up();
    }
}

function fg_delete(id) {
	if (typeof id == 'number') {
    	var id = new Array(id.toString());
	}
	layer.confirm('系统将会把选中地区及所有子地区删除，确认操作吗？', {
		  btn: ['确认','取消'] //按钮
		}, function(){
			id = id.join(',');
			$.ajax({
		        type: "GET",
		        dataType: "json",
		        url: "area?op=del",
		        data: "area_id="+id,
		        success: function(data){
		            //alert(123);
					if(data.state=='403'){
							    login_ajax('admin',data);
							}else
		            if (data.state){
		            	layer.msg(data.msg);
		                $("#flexigrid").flexReload();
		            } else {
		            	layer.msg(data.msg);
		            }
		        }
		    });
		});
	
}

function fg_show_children(area_id,parent_id) {
    $("#flexigrid").flexOptions({url: 'area?op=get_secondLevel&parent_id='+area_id}).flexReload();
    his_parent_ids.push(parent_id);
    //alert(his_parent_ids);
    cur_parent_id = area_id;
}

/*function rc_show_children(area_deep){
    //alert(area_deep);
    if(area_deep != 1){
        javascript:history.back(-1);
    }
}*/

/*function refresh(){
    location.reload();
}*/
function fg_up() {
	if (his_parent_ids.length == 0) {
		his_parent_ids.push(0);
	}
	$("#flexigrid").flexOptions({url: 'area?op=get_secondLevel&parent_id='+his_parent_ids[his_parent_ids.length-1]}).flexReload();
	cur_parent_id = his_parent_ids[his_parent_ids.length-1];
    //alert(cur_parent_id);
	his_parent_ids.pop();
}
</script>
</body>
</html><?php }
}
