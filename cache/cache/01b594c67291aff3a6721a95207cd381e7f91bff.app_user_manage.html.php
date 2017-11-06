<?php
/* Smarty version 3.1.29, created on 2017-08-01 17:53:10
  from "D:\www\yunjuke\application\admin\views\app_user_manage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59804f861fe726_56171657',
  'file_dependency' => 
  array (
    '01b594c67291aff3a6721a95207cd381e7f91bff' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\app_user_manage.html',
      1 => 1496923836,
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
function content_59804f861fe726_56171657 ($_smarty_tpl) {
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
        <h3>APP客户端管理</h3>
        <h5>管理APP使用的用户</h5>
      </div>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span> </div>
    <ul>
      <li>区别于平台协议，可在文章列表页点击查看。</li>
    </ul>
  </div>
  <div id="flexigrid"></div>
  <!--<div class="ncap-search-ban-s" id="searchBarOpen"><i class="fa fa-search-plus"></i>高级搜索</div>
  <div class="ncap-search-bar">
    <div class="handle-btn" id="searchBarClose"><i class="fa fa-search-minus"></i>收起边栏</div>
    <div class="title">
      <h3>高级搜索</h3>
    </div>
    <form method="get" name="formSearch" id="formSearch">
      <div id="searchCon" class="content">
        <div class="layout-box">
          <dl>
            <dt>在线状态</dt>
            <dd>
              <label>
                <select class="s-select" name="online" id="online" >
                <option >请选择...</option>
                <option value='1'>在线</option>
                <option value='0'>离线</option>
                </select>
              </label>
            </dd>
          </dl>
          <dl>
            <dt>用户类型</dt>
            <dd>
              <label>
                <select class="s-select" name="user_type" id="user_type" >
                <option >请选择...</option>
                <option value='android'>android</option>
                <option value='ios'>ios</option>
                </select>
              </label>
            </dd>
          </dl>
          
        </div>
      </div>
      <div class="bottom"> <a href="javascript:void(0);" id="ncsubmit" class="ncap-btn ncap-btn-green mr5">提交查询</a><a href="javascript:void(0);" id="ncreset" class="ncap-btn ncap-btn-orange" title="撤销查询结果，还原列表项所有内容"><i class="fa fa-retweet"></i>撤销</a></div>
    </form>
  </div>-->
</div>

<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
    <a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
</div>
</body>
<script type="text/javascript">
/*$('#ncsubmit').click(function(){
    $("#flexigrid").flexOptions({url: 'app_customer.php?act=app&op=table&'+$("#formSearch").serialize(),query:'',qtype:''}).flexReload();
});
// 高级搜索重置
$('#ncreset').click(function(){
    $("#flexigrid").flexOptions({url: 'app_customer.php?act=app&op=table'}).flexReload();
    $("#formSearch")[0].reset();
});*/
    $(function(){
        $("#flexigrid").flexigrid({
            url: 'get_app_user_manage',
            dataType: 'xml',
            colModel : [
                {display: '操作', name : 'operation', width : 100, sortable : false, align: 'center', className: 'handle'},
                {display: '编号', name : 'user_id', width : 65, sortable : false, align: 'center'},
                {display: 'APP类型', name : 'name', width : 105, sortable : false, align: 'center'},
                {display: '用户昵称', name : 'username', width : 95, sortable : false, align: 'center'},
                {display: '电话号码', name : 'tel', width : 95, sortable : false, align: 'center'},
                {display: '是否在线', name : 'online', width : 95, sortable : false, align: 'center'},
				{display: '推送客户端号', name : 'cid', width : 240, sortable : false, align: 'center'},
                {display: '是否加密', name : 'is_ban', width : 60, sortable : false, align: 'center'},
                {display: '状态', name : 'address', width : 60, sortable : false, align: 'center'},
                {display: '添加时间', name : 'hss_cate_name', width : 115, sortable : false, align: 'center'},
                {display: '更新时间', name : 'hss_cate_name', width : 115, sortable : false, align: 'center'}
            ],
            /*buttons : [
                {display: '<i class="fa fa-trash"></i>批量删除', name : 'delete', bclass : 'del', title : '将选定行数据批量删除', onpress : fg_operate }              ],
               */
            searchitems : [
                {display: 'APP类型', name : 'name'},
                {display: '用户昵称', name : 'username'},
                {display: '电话号码', name : 'tel'},
            ],
            sortname: "",
            sortorder: "",
            rp: 40,
            title: 'APP用户列表'
        });
    });

    function fg_operate(name,grid){
        if (name == 'delete') {
            if($('.trSelected',grid).length>0){
                var itemlist = new Array();
                $('.trSelected',grid).each(function(){
                    itemlist.push($(this).attr('data-id'));
                });
                fg_delete(itemlist);
            } else {
                return false;
            }
        }
    }

    function fg_delete(id) {
        if (typeof id == 'number') {
            var id = new Array(id.toString());
        }
      /* if(confirm('确认删除操作吗？')){
            id = id.join(',');
        } else {
            return false;
        }*/
        layer.confirm('确认要删除吗', {
            btn: ['确认','取消'] //按钮
        }, function(){
            id = id.join(',');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "",
            data: "id="+id,
            success: function(data){
                //layer.msg(123);
                if (data.state){
                    $("#flexigrid").flexReload();
                } else {
                	layer.msg(data.msg);
                }
            }
        });
    })
        }

function update_state(id,state){
    $.ajax({
        url:'user_update_state',
        data:{'id':id,'state':state==1?0:1},
        type:'post',
        dataType:'json',
        success:function(data){
            if (data.state){
                layer.msg(data.msg);
                $("#flexigrid").flexReload();
            } else {
                layer.msg(data.msg);
            }
        }
    });
}


</script>
</html><?php }
}
