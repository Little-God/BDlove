<?php
/* Smarty version 3.1.29, created on 2017-09-28 16:07:14
  from "D:\www\yunjuke\application\admin\views\goods_management_shop_goods.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ccadb23cc096_57940552',
  'file_dependency' => 
  array (
    'cbb3651f8cf553a111652db0457bc3a27389e30c' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\goods_management_shop_goods.html',
      1 => 1503556794,
      2 => 'file',
    ),
    'cf07a77062b9b954d4138b51e09410b1afb7a5cc' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\pageheader.html',
      1 => 1505983976,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_59ccadb23cc096_57940552 ($_smarty_tpl) {
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
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/common/common.js"></script>
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
<style>
    .flexigrid .bDiv td div, .colCopy div{height:auto}
    .flexigrid .hDiv th, .flexigrid .bDiv td{vertical-align: middle !important;}
    .new_goods{color:white;background-color: red;}
</style>
<body style="background-color: #FFF; overflow: auto;">
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>门店自建商品</h3>
                <h5>门店可自建商品并可以移到总库</h5>
            </div>
            <ul class="tab-base nc-row">
                                    <li><a class="current" href="goods_management?op=shop_goods&source=store"><span>门店自建</span></a></li>
                    <li><a href="goods_management?source=store"><span>全库商品</span></a></li>
                            </ul>
        </div>
    </div>
    <!-- 操作说明 -->
    <div class="explanation" id="explanation">
        <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span id="explanationZoom" title="收起提示"></span> </div>
        <ul>
            <li>门店自建商品为门店通过手机APP添家的商品，未移到总库时该商品数据只能供来源门店使用，需要馆理员审核移到总库，方可实现全库商品共享</li>
            <li>移到总库的商品，对同一商品SPU的不同SKU，将执行数据合并补全</li>
        </ul>
    </div>
    <div class="mt-10 mb-10">
        <form method="post" name="formSearch" id="formSearch">
            <div class="search mt-20 mb-10">
                <select name="year_to_market" placeholder="请选择" class=" mr-5 m_w_120 pd-5 mb-10">
                    <option value="" selected>-上市年份-</option>
                                        <option value="2021">
                        2021
                    </option>
                                        <option value="2020">
                        2020
                    </option>
                                        <option value="2019">
                        2019
                    </option>
                                        <option value="2018">
                        2018
                    </option>
                                        <option value="2017">
                        2017
                    </option>
                                        <option value="2016">
                        2016
                    </option>
                                        <option value="2015">
                        2015
                    </option>
                                        <option value="2014">
                        2014
                    </option>
                                        <option value="2013">
                        2013
                    </option>
                                        <option value="2012">
                        2012
                    </option>
                                    </select>
                <select name="season_to_market" placeholder="请选择" class=" mr-5 m_w_120 pd-5 mb-10">
                    <option value="" selected>-上市季节-</option>
                    <option value="1">春季</option>
                    <option value="2">夏季</option>
                    <option value="3">秋季</option>
                    <option value="4">冬季</option>
                </select>
                <select name="sex" placeholder="请选择" class=" mr-5 m_w_120 pd-5 mb-10">
                    <option value="" selected>-商品性别-</option>
                    <option value="2">男</option>
                    <option value="1">女</option>
                    <option value="3">通用</option>
                </select>
                <select name="available_coupons" placeholder="请选择" class=" mr-5 m_w_120 pd-5 mb-10">
                    <option value="" selected>-是否可用优惠券-</option>
                    <option value="1">支持</option>
                    <option value="0">不支持</option>
                </select>

                <select name="brand_id" placeholder="请选择" class=" mr-5 m_w_120 pd-5 mb-10">
                    <option value="">-全部品牌-</option>
                                                            <option value="378">ABC</option>
                                        <option value="381">adidas</option>
                                        <option value="379">大头儿子</option>
                                        <option value="384">Discovery</option>
                                        <option value="377">公主安娜</option>
                                        <option value="375">匡威</option>
                                        <option value="382">Levi’s</option>
                                        <option value="380">妮可贝贝</option>
                                        <option value="373">耐克</option>
                                        <option value="374">乔丹</option>
                                        <option value="385">企鹅仔仔</option>
                                        <option value="376">植木西</option>
                                                        </select>
                <select name="goods_tag" placeholder="请选择" class=" mr-5 m_w_120 pd-5 mb-10">
                    <option value="" selected>-全部标签-</option>
                    <option value="1">新品</option>
                    <option value="2">推荐</option>
                    <option value="3">特价</option>
                </select>
                <select name="goods_image" class="selecte  pd-5 mb-10 " style="min-width: 80px">
                    <option value="" selected>-是否有图-</option>
                    <option value="1">有图</option>
                    <option value="2">无图</option>
                </select>
                <br/>
                名称：
                <input type="text" name="goods_name" class="input-text input_text mb-10">
                款号：
                <input type="text" name="goods_spu" class="input-text input_text mb-10">
                货号：
                <input type="text" name="stocks_sku" class="input-text input_text mb-10">
                条形码：
                <input type="text" name="stocks_bar_code" class="input-text input_text mb-10">
                <input type="submit" class="btn btn-warning radius ml-10 mb-10" id="submit" name="submit" onclick="return false;" value="搜索">
            </div>
        </form>
    </div>
    <div id="flexigrid"></div>
</div>
<script type="text/javascript">
  $(function(){
	$('#submit').click(function(){
            var search = $("#formSearch").serialize();
            $("#flexigrid").flexOptions({url: 'get_shop_goods_list?source=store&'+search, method: 'post', qtype:'', query:'',}).flexReload();
	});
    $("#flexigrid").flexigrid({
      url: 'get_shop_goods_list?source=store',
      colModel : [
        {display: '操作', name: 'article_number', width: 120, sortable: false, align: 'center',className:'handle'},
        {display: '商品信息', name: 'goods', width: 200, sortable: false, align: 'center'},
        {display: '销售价', name: 'stocks_name', width: 80, sortable: false, align: 'center'},
        {display: '市场价', name: 'product_cate_name', width: 80, sortable: false, align: 'center'},
        {display: '总销量', name: 'num', width: 100, sortable: false, align: 'center'},
        {display: '来源门店', name: 'brand_name', width: 100, sortable: false, align: 'center'},
        {display: '添加时间', name: 'code_name', width: 120, sortable: false, align: 'center'},
      ],
      buttons : [
//        {display: '<i class="fa fa-file-excel-o"></i>导出数据', name : 'fg_export', bclass : 'fg_export', title : '将选定行数据导出excel文件,如果未选中则导出查询条件的全部数据',onpress : fg_export  },
//        {display: '<i class="fa fa-plus"></i>添加商品', name : 'add', bclass : 'add', title : '', onpress : fg_operate },
        {display: '<i class="fa fa-trash"></i>批量删除', name: 'del', bclass: 'del', title: '', onpress: fg_operate},
        {display: '<i class="fa fa-plus"></i>移到总库', name : 'move_to_pool', bclass : 'add', title : '', onpress : fg_operate }
      ],
//      searchitems : [
//        {display: 'SKU', name : 'goods_id'},
//        {display: '商品名称', name : 'goods_name'},
//        {display: '分类ID', name : 'gc_id'},
//        /*{display: '店铺ID', name : 'store_id'},
//        {display: '店铺名称', name : 'store_name'},*/
//        {display: '品牌ID', name : 'brand_id'},
//        {display: '品牌名称', name : 'brand_name'}
//      ],
      title: '商品列表'
    });
  });
	function fg_edit(goods_id){
		window.location.href = "goods_edit_goods_second?op=edit&goods_id="+goods_id;
	}
	//下架
	function fg_unshelve(goods_id){
		layer.confirm('您确定要将此商品下架吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(){
                $.ajax({
	            type: "GET",
	            dataType: "json",
	            url: "goods_unshelve?goods_id="+goods_id,
	            data: '',
	            success: function(data){
                        if(data.state=='403'){
                            login_ajax('shopadmin');
                        }else if(data.state==false){
                                layer.msg(data.msg);
                        }else if(data.state==true){
                                layer.msg(data.msg);
                        }
                        window.location.href="goods_management?op=shop_goods&type=sale_off";
                    }
	        });
            })
	}
	//上架
	function fg_putaway(goods_id){
		layer.confirm('您确定要将此商品上架吗？', {
		  btn: ['确定','取消'] //按钮
		}, function(){
			$.ajax({
	            type: "GET",
	            dataType: "json",
	            url: "goods_putaway?goods_id="+goods_id,
	            data: '',
	            success: function(data){
                        if(data.state=='403'){
                            login_ajax('shopadmin');
			}else if(data.state==false){
                            layer.msg(data.msg);
                        }else if(data.state==true){
                            layer.msg(data.msg);
                        }
                        window.location.href="goods_management?op=shop_goods&type=putaway";
		        }
	        });
		})
	}
  function fg_operate(name, grid) {
    if (name == 'add') {
        window.location.href = 'goods_add_goods_second';
    }else if (name == 'move_to_pool') {
        if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
                    itemlist.push($(this).attr('data-id'));
            });
            fg_move_to_pool(itemlist);
        }else{
            layer.msg('请至少选择一项！');
        }
    }else if (name == 'del') {
        if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
                    itemlist.push($(this).attr('data-id'));
            });
            fg_delete(itemlist);
        }else{
            layer.msg('请至少选择一项！');
        }
    }
  }
  function fg_export(name, grid){
//    var itemlist = new Array();
//    $(".create_tr table .trSelected").removeClass("trSelected");
//    if($('.trSelected',grid).length>0){
//        $('.trSelected',grid).each(function(){
//              itemlist.push($(this).attr('data-id'));
//        });
//    }
//    var id = itemlist.join(',');
//    var form = $("<form></form>");
//    form.attr('action','goods_export?type_id='+'&'+$("#formSearch").serialize());
//    form.attr('method','post');
//    input1 = $("<input type='hidden' name='id' />");
//    input1.attr('value',id);
//    form.append(input1);
//    form.appendTo("body");
//    form.css('display','none');
//    form.submit();
//    layer.msg('开始生成导出文件');
  }
  //移到总库
    function fg_move_to_pool(id){
        if (typeof id == 'number') {
            var id = new Array(id.toString());
        };
        layer.confirm('确认要将这 ' + id.length + ' 项移到总库吗？', {
            btn: ['确认','取消'] //按钮
          }, function(){
            id = id.join(',');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "goods_move_to_pool",
                data: "id="+id,
                success: function(data){
                    if(data.state=='403'){
                        login_ajax('shop',data);
                    }else if(data.state==false){
                        layer.alert(data.msg);
                    }else if(data.state==true){
                        layer.alert(data.msg);
                    }
                    $("#flexigrid").flexOptions({url: 'get_shop_goods_list?source=store& '+ $("#formSearch").serialize(), method: 'post', qtype: '', query: '', }).flexReload();
                }
            });
        });	    
    }
    function fg_delete(id) {
        if (typeof id == 'number') {
            var id = new Array(id.toString());
        };
        layer.confirm('确认要将这 ' + id.length + ' 项加入回收站吗？', {
            btn: ['确认','取消'] //按钮
          }, function(){
            id = id.join(',');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "goods_delete",
                data: "del_id="+id,
                success: function(data){
                    if(data.state=='403'){
                        login_ajax('shop',data);
                    }else if(data.state==false){
                        layer.msg(data.msg);
                    }else if(data.state==true){
                        layer.msg(data.msg);
                    }
                    $("#flexigrid").flexOptions({url: 'get_shop_goods_list?source=store& '+ $("#formSearch").serialize(), method: 'post', qtype: '', query: '', }).flexReload();
                }
            });
        });	    
    }
</script>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html><?php }
}
