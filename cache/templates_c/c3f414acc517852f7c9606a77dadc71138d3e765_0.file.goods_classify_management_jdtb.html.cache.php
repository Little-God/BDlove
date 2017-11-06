<?php
/* Smarty version 3.1.29, created on 2017-08-14 15:30:58
  from "D:\www\yunjuke\application\admin\views\goods_classify_management_jdtb.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599151b2c94148_28429983',
  'file_dependency' => 
  array (
    'c3f414acc517852f7c9606a77dadc71138d3e765' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\goods_classify_management_jdtb.html',
      1 => 1502172126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_599151b2c94148_28429983 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10956599151b2acb065_87623299';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" type="text/css" href="<?php echo PLUGIN;?>
plugins/bigcolorpicker/jquery.bigcolorpicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/bigcolorpicker/jquery.bigcolorpicker.min.js"><?php echo '</script'; ?>
>
<body style="background-color: #FFF; overflow: auto;">
<style>
.cl-red{
	color:red;
}
	.layui-layer-btn{
		text-align: center;
	}
	.layui-layer-btn a{
		padding: 0 20px;
		margin: 0 20px;
	}
	.layui-layer-btn a.layui-layer-btn0{
		background-color: #F37B1D;
		border:1px solid #C85E0B;
	}
.hDivBox>table{width:600px;}
.name input, .name , .name .editable2 {
    width: 150px;
    border:0;
}
.editable{
    border:0;
    background-color: transparent;
}
.name .editable{
    width: auto;
    border:0;
    background-color: transparent;
}
#treet1 td{
    border: 1px solid #E6E6E6;
}
#treet1 tr:nth-child(odd){background:#fff;}
#treet1 tr:nth-child(even){background:#FDFDFD;}
.flexigrid .bDiv .sign div{max-width: 36px !important;  }
.layui-layer{
	max-width:80% !important;
}
.check-style{
	border: 1px dashed #eee;
	padding: 10px;
	display: block;
	max-height: 200px;
	overflow-y: auto;
}
.check-dl{
	border-bottom: 1px solid #eee;
	padding: 5px 0;
}
.check-dl dd label{
	display: inline-block;
	width: 150px;
	margin-right: 10px;
	vertical-align:top;
	zoom: 1;
}
.check-dl input{
	margin-right: 5px;
}
.check-dl dt{
	font-weight: bold;
	margin-bottom: 5px;
}
.check-dl dd{
	padding:0 10px;
}
</style>
<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
  <div class="fixed-bar">
            <div class="item-title">
                <div class="subject">
                     <h3>分类管理</h3>
                     <h5>对系统货品（商品）的分类进行增、删、改管理</h5>
                </div>
                <ul class="tab-base nc-row">
                                            <li><a class="<?php if (empty($_smarty_tpl->tpl_vars['type']->value)) {?>current<?php }?>" href="goods_classify_management"><span>平台分类</span></a></li>
                        <li><a class="<?php if ($_smarty_tpl->tpl_vars['type']->value == 'tb') {?>current<?php }?>" href="goods_classify_management?type=tb"><span>淘宝分类</span></a></li>
                        <li><a class="<?php if ($_smarty_tpl->tpl_vars['type']->value == 'jd') {?>current<?php }?>" href="goods_classify_management?type=jd"><span>京东分类</span></a></li>
                                    </ul>
            </div>
        </div>
  <!-- 操作说明 -->
   <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span>
    </div>
    <ul>
      <li>当店主添加商品时可选择商品分类，用户可根据分类查询商品列表</li>
      <li>每个子分类必需关联上级分类</li>
      <li>设置中可选则分类属性，分类的属性可在类型管理中设置</li>
      <li>设置分类关键词和描述有利于搜索引擎和用户搜索</li>
    </ul>
  </div>
  <div id="flexigrid">
  <table class="flex-table" id="form-table">
      <thead>
        <tr>
          <th width="36" align="center" class="sign"><i class="ico-check"></i></th>
          <th width="100" align="center" class="ec_scid">序号</th>
          <!--<th width="120" align="center" class="gc_ico">图标</th>-->
          <th width="160" align="center" class="ec_name">类目命</th>
          <th width="100" align="center" class="ec_is_parent">是否为父类</th>
          <th width="150" align="center" class="ec_type">网店类型</th>
          <th width="100" align="center" class="is_valid">是否为启用</th>
<!--          <th width="120" align="center" class="gc_virtual">发布虚拟产品</th>
          <th width="80" align="center" class="gc_show">前台显示</th>
          <th width="120" align="center" class="gc_nav_show">导航显示</th>-->
          <th></th>
        </tr>
      </thead>
      <tbody id="treet1">
      </tbody>
    </table>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	
//定义变量，点击返回上一级、新增分类自动获取当前父类时用到
var his_parent_ids = [0],cur_parent_id = 0,h_type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
$(function(){

	
	
	
	$("#color_button").bigColorpicker("color");
	
	var body_str = '';
	var body_data = <?php echo $_smarty_tpl->tpl_vars['cate_js']->value;?>
;
	var color = 1;
	var color_arr = new Array();
	color_arr[1] = '';color_arr[2] = '#f3e0e0';color_arr[3] = '#fdefd5';color_arr[4] = '#d5e5af';color_arr[5] = '#c9dedd';
	function body_cate(body_str,data,color){
		$.each(data,function(k,v){
			if(v.ec_is_parent){
				v.ec_is_parent ='是';
			}else{
				v.ec_is_parent ='否';
			}
			if(v.ec_type==1){
				v.ec_type ='京东';
			}else{
				v.ec_type ='淘宝';
			}
			if(v.is_valid){
				v.is_valid ='已启用';
			}else{
				v.is_valid ='未启用';
			}
			
			var img = '';
			if(v.product_son_cate!=''&&typeof(v.product_son_cate)=='object'){
				img = '<img src="<?php echo TEMPLE;?>
images/tv-collapsable.gif" fieldid="'+v.ec_cid+'" status="close" class="va-t mt-5" nc_type="flex">';
		    }
			body_str+='<tr  nctype="'+v.ec_parent_cid+'" data-id="'+v.ec_cid+'"  style="background-color:'+color_arr[color]+';">'+
	      '<td class="sign" ><i class="ico-check"></i>'+
	      img+  
	      '</td><td class="ec_cid"><span title="" ajax_branch="article_class_sort"  fieldid="'+v.ec_cid+'" fieldname="ec_cid" nc_type="inline_edit" class="editable">'+v.ec_cid+'</span></td>'+
	      '<td class="ec_name"><span title="" ajax_branch="article_class_sort"  fieldid="'+v.ec_name+'" fieldname="ec_name" nc_type="inline_edit" class="editable">'+v.ec_name+'</span></td>'+  
	      '<td class="ec_is_parent"><span title="" ajax_branch="article_class_gc_keywords"  fieldid="'+v.ec_is_parent+'" fieldname="ec_is_parent" nc_type="inline_edit" class="editable">'+v.ec_is_parent+'</span></td>'+  
	      '<td class="ec_type"><span title="" ajax_branch="article_class_gc_description"  fieldid="'+v.ec_type+'" fieldname="ac_gc_description" nc_type="inline_edit" class="editable">'+v.ec_type+'</span></td>'+  
	      '<td class="is_valid"><span title="" ajax_branch="article_class_gc_description"  fieldid="'+v.is_valid+'" fieldname="ac_gc_description" nc_type="inline_edit" class="editable">'+v.is_valid+'</span></td>'+  
	      '<td></td></tr>';
	      son_str = '';
	      if(v.product_son_cate!=''&&typeof(v.product_son_cate)=='object'){
	    	  color1 =color+1; 
	    	  
	    	  son_str += body_cate(son_str,v.product_son_cate,color1);
	    	  
	      }
	      body_str +=son_str;
		})
		return body_str;
	}
	
	str_htm = body_cate(body_str,body_data,color);
	//console.log(str_htm);
	$('#treet1').html(str_htm);
	h_type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
	btn = [
			{display: '<i class="fa fa-ban"></i>批量启用', name : 'start', bclass : 'start', title : '批量启用', onpress : fg_operate },
           {display: '<i class="fa fa-ban"></i>批量停用', name : 'stop', bclass : 'stop', title : '批量停用', onpress : fg_operate },
           {display: '<i class="fa fa-plus"></i>初始化分类', name : 'begin', bclass : 'begin', title : '初始化分类', onpress : fg_operate },
           {display: '<i class="fa fa-refresh"></i>同步分类', name : 'sync', bclass : 'sync', title : '同步分类', onpress : fg_operate },
       ];
    $("#flexigrid").flexigrid({
    	height:'auto',// 高度自动
		usepager: false,// 不翻页
		striped:false,// 不使用斑马线
		resizable: false,// 不调节大小
		title: '分类列表',
		reload: false,// 不使用刷新
		columnControl: false,// 不使用列控制
        buttons : btn    
    });
    //+ - 收缩按键
    /*$('img[nc_type="flex"]').toggle(
            function(){
                $('tr[nctype="' + $(this).attr('fieldid') + '"]').hide();
                $(this).attr('src', '<?php echo TEMPLE;?>
images/tv-expandable.gif');
            },function(){
                $('tr[nctype="' + $(this).attr('fieldid') + '"]').show();
                $(this).attr('src', '<?php echo TEMPLE;?>
images/tv-collapsable.gif');
            }
	);*/
	
	$('.mDiv').append('<div class="sDiv">'+
  	'<div class="sDiv2">'+
  		'<select name="qtype" class="select">'+
  			'<option value="spg_tel">导购电话&nbsp;&nbsp;</option>'+
  		'</select>'+
  		'<input type="text" name="q" id="q" size="30" class="qsbox" placeholder="搜索相关数据..."/>'+
  		'<input type="text" class="btn" value="搜索" style="width:50px"/>'+
  	'</div>'+
 '</div>');
	
	$('img[nc_type="flex"]').toggle(
            function(){
                $('tr[nctype="' + $(this).attr('fieldid') + '"]').hide();
                $(this).attr('src', '<?php echo TEMPLE;?>
images/tv-expandable.gif');
                gc_id = $(this).attr('fieldid');
                $.ajax({
            		data:'gc_id='+gc_id,
                	type:'post',
                	url:'product_son_cate',
                	dataType:'json',
                	success:function(data){
					if(data.state=='403'){
				login_ajax('shopadmin');
			}else
                		if(data.state){
                			$.each(data.data,function(k,v){
                				$('tr[nctype="' + v.gc_id + '"]').hide();
                				//$('tr[nctype="' + v.product_cate_id + '"]').attr('src', '<?php echo TEMPLE;?>
images/tv-expandable.gif');
                			})
                		}
                	}
            	});
                
            },function(){
                $('tr[nctype="' + $(this).attr('fieldid') + '"]').show();
                $(this).attr('src', '<?php echo TEMPLE;?>
images/tv-collapsable.gif');
                gc_id = $(this).attr('fieldid');
                $.ajax({
            		data:'gc_id='+gc_id,
                	type:'post',
                	url:'product_son_cate',
                	dataType:'json',
                	success:function(data){
					if(data.state=='403'){
				login_ajax('shopadmin');
			}else
                		if(data.state){
                			$.each(data.data,function(k,v){
                				$('tr[nctype="' + v.gc_id + '"]').show();
                				//$('tr[nctype="' + v.product_cate_id + '"]').attr('src', '<?php echo TEMPLE;?>
images/tv-expandable.gif');
                			})
                		}
                	}
            	});
            }
        );
});



function fg_operate(name, grid) {
    if (name == 'csv') {
    	var itemlist = new Array();
        if($('.trSelected',grid).length>0){
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
        }
        fg_csv(itemlist);
    }else if (name == 'delete') {
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
        add_cate();
    }else if (name == 'begin') {
    	$.ajax({
	        type: "post",
	        dataType: "json",
	        url: "begin_class",
	        data: "type="+h_type,
	        beforeSend:function(){
	        	layer.msg('初始化中请稍等...',{time:0});
	        },
	        success: function(data){
	        	layer.closeAll();
	        	if(data.state){
	        		layer.msg('初始化完成');
	        	}else{
	        		layer.msg(data.msg);
	        	}
	        	setTimeout(function(){
	        		window.location.reload();
	        	},2000)
	        	
	        }
	    });
    }else if (name == 'stop') {
    	if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
            stop_op(itemlist);
        }else{
            return false;
        }
    }else if (name == 'start') {
    	if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
            start_op(itemlist);
        }else{
            return false;
        }
    }else if (name == 'sync') {
    	var itemlist = new Array();
    	if($('.trSelected',grid).length>0){
            
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
        }
    	if(itemlist.length>0){
    		str = '确定同步选中分类及其所有子分类';
    	}else{
    		str = '确定同步所有启用的分类及其子分类';
    	}
    	id = itemlist.join(',');
    	layer.confirm(str, {
		  btn: ['确定','取消'] //按钮
		}, function(){
    	$.ajax({
	        type: "post",
	        dataType: "json",
	        url: "begin_class?op=sync",
	        data: {type:h_type,id:id},
	        beforeSend:function(){
	        	layer.msg('分类同步中请稍等...',{time:0});
	        },
	        success: function(data){
	        	layer.closeAll();
	        	if(data.state){
	        		layer.msg('同步完成');
	        	}else{
	        		layer.msg(data.msg);
	        	}
	        	setTimeout(function(){
	        		window.location.reload();
	        	},2000)
	        }
	    });
		})
    }
}


function start_op(id, name) {
	if (typeof id == 'number') {
    	var id = new Array(id.toString());
	};
	if(typeof name == 'undefined'){
		var str = '确认启用 这' + id.length + ' 项以及其子类吗？';
	}else{
		var str = '确认启用 ' + name + ' 以及其子类吗？';
	};
	layer.confirm(str, {
		  btn: ['确定','取消'] //按钮
		}, function(){
		  layer.msg('启用中', {icon: 1});
		  $.ajax({
		        type: "post",
		        dataType: "json",
		        url: "start_stop_ec_scid?op=start",
		        data: "id="+id,
		        success: function(data){
		        	layer.msg(data.msg);
		        	setTimeout("window.location.href='goods_classify_management?type="+h_type+"';",2000)
		        	
		        }
		    });
		}, function(){
		    return ;
    });
}

function stop_op(id, name) {
	if (typeof id == 'number') {
    	var id = new Array(id.toString());
	};
	if(typeof name == 'undefined'){
		var str = '确认停用 这' + id.length + ' 项以及其子类吗？';
	}else{
		var str = '确认停用 ' + name + ' 以及其子类吗？';
	};
	layer.confirm(str, {
		  btn: ['确定','取消'] //按钮
		}, function(){
		  layer.msg('停用中', {icon: 1});
		  $.ajax({
		        type: "post",
		        dataType: "json",
		        url: "start_stop_ec_scid?op=stop",
		        data: "id="+id,
		        success: function(data){
		        	layer.msg(data.msg);
		        	setTimeout("window.location.href='goods_classify_management?type="+h_type+"';",2000)
		        	
		        }
		    });
		}, function(){
		    return ;
    });
}



/*function fg_csv(ids) {
    id = ids.join(',');
    window.location.href = 'class_excel?id='+id;
}*/
function fg_delete(id, name) {
	if (typeof id == 'number') {
    	var id = new Array(id.toString());
	};
	if(typeof name == 'undefined'){
		var str = '删除后将不能恢复，确认删除 这' + id.length + ' 项以及其子类吗？';
	}else{
		var str = '删除后将不能恢复，确认删除 ' + name + ' 以及其子类吗？';
	};
	layer.confirm(str, {
		  btn: ['确定','取消'] //按钮
		}, function(){
		  layer.msg('删除中', {icon: 1});
		  $.ajax({
		        type: "post",
		        dataType: "json",
		        url: "del_class",
		        data: "id="+id,
		        success: function(data){
		        	layer.msg(data.info);
		        	setTimeout("window.location.href='goods_classify_management';",5000)
		        	
		        }
		    });
		}, function(){
		    return ;
    });
}


function show_children(id, pid) {
	his_parent_ids.push(pid);
    //alert(his_parent_ids);
    cur_parent_id = id;
	$("#flexigrid").flexOptions({url: 'get_class_list/'+id}).flexReload();
}
function go_back(){
	if (his_parent_ids.length == 0) {
		his_parent_ids.push(0);
	}
	$("#flexigrid").flexOptions({url: 'get_class_list/'+his_parent_ids[his_parent_ids.length-1]}).flexReload();
	cur_parent_id = his_parent_ids[his_parent_ids.length-1];
    //alert(cur_parent_id);
	his_parent_ids.pop();
}

//快键定位
 $("body").on("change","#get_type_spec",function(){
 	var v = $(this).val();
 	var srctop = $("input[value="+v+"]").offset().top - $(".check-style").offset().top;
 	$('.check-style').scrollTop(srctop-3);
 })
 
// 点击全选
$("body").on("change",".check-dl input",function(){
if($(this).attr("checked")){
	$(this).parent().next().find("label input").attr("checked",true);
}else{
	$(this).parent().next().find("label input").attr("checked",false);
}
})
 
<?php echo '</script'; ?>
> 
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
<?php }
}
