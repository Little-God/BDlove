<?php
/* Smarty version 3.1.29, created on 2017-08-04 10:36:15
  from "D:\www\yunjuke\application\pay\views\account-takeCash.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5983dd9f49f5c0_69843560',
  'file_dependency' => 
  array (
    'eb99674728ef9000c20f07621121807f7f9c099a' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\account-takeCash.html',
      1 => 1501581895,
      2 => 'file',
    ),
    '940fa3e7a5fc658c974a607afc3fab9d110f7f64' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\lib\\footer.html',
      1 => 1499676757,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5983dd9f49f5c0_69843560 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" href="http://[::1]/yunjuke/application/pay/views/css/iconfont.css" />
<title>账户提现</title>
<style type="text/css">
	.recharge-content{
		border: 1px solid #ccc;
		padding: 15px;
	}
	.illustrate{
		border: 1px solid #ddd;
		background: #f9f9f9;
		padding: 10px;
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
	.clear{
		clear: both
	}
	.layui-layer-page .layui-layer-content {
	    position: relative;
	    overflow: hidden !important;
	}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 账户管理 <span class="c-gray en">&gt;</span> 账户提现 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="illustrate">		
		1、提现金额只能提现至绑定的银行卡、微信、或者支付宝, 详细参见FAQ;<br>
		2、支付宝方式提现实时到账；银行卡提现预计3个工作日到账；<br>
		3、单次提现金额上限为30000元;7天内最多提现4次。
	</div>
	<div class="illustrate mt-10">		
		<h4 class="l">可提现余额：<span class="cl-o" style="font-weight: bold;">￥99994010.00</span></h4>
		<input class="btn btn-success radius l mt-10 ml-20" type="button" id="nowtake" value="立即提现">
		<div class="clear"></div>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20" style="border-left: 4px solid #888;">提现记录</div>
	<form action="takeCash" method="post">
		<div class="text-l f-12 mt-10 ml-10"> 申请提现时间范围：
			<input type="text" onfocus="WdatePicker()" id="datemin" class="input-text Wdate" style="width:150px;" name="datemin">
			至
			<input type="text" onfocus="WdatePicker()" id="datemax" class="input-text Wdate" style="width:150px;" name="datemax">
			<button type="submit" class="btn btn-default" id="" name="">查询</button>
		</div>
	</form>
<div>
	<table class="table table-border table-bordered table-bg mt-10">
		<thead>
			<tr class="text-c">
				<th width="150">提现账号</th>
				<th width="150">提现账号名</th>
				<th width="60">金额</th>
				<th width="90">状态</th>
				<th width="90">提现方式</th>
				<th width="150">申请提现时间</th>
				<th width="130">操作完成时间</th>

			</tr>
		</thead>
		<tbody>
						<tr class="text-c"><td colspan="7" style="height:50px"><i class="Hui-iconfont f-18 cl-b">&#xe6e0;</i>您目前没有提现记录</td></tr>
			
		</tbody>
	</table>
</div>

	<div style="width: 400px;margin: 20px auto;">
		<ul class="pagination">

		</ul>
	</div>
	
				
</div>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/laypage/1.2/laypage.js"></script>
<link href="http://[::1]/yunjuke/plugins/layer/skin/layer.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/plugins/layer/skin/laypage.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://[::1]/yunjuke//plugins/layer/layer.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/layer/laypage.js"></script>

<script type="text/javascript">
//	如果表格里没有内容就显示无内容

	var total="0";
	var page="1";

	page_curr(total,page);
	function page_curr(pages,curr){
    	laypage({
        	cont: $('ul.pagination'), //容器。值支持id名、原生dom对象，jquery对象。【如该容器为】：<div id="page1"></div>
        	pages: pages, //通过后台拿到的总页数
        	curr:  curr || 1, //当前页
        	first: '首页',
        	last: '末页',
        	groups:5,
        	jump: function(obj, first){ //触发分页后的回调
            	if(!first){ //点击跳页触发函数自身，并传递当前页：obj.curr
                	location.href = 'takeCash?op=page&page='+obj.curr;
            	}
        	}
    	});
	}
	
	
	$('#nowtake').click(function(){
		var htm = '<form action="" method="post" class="form form-horizontal" id="demoform-1">'+
					'<div class="row cl">'+
						'<label class="form-label col-xs-4 col-sm-3">可线上提现金额：</label>'+
						'<div class="formControls col-xs-8 col-sm-9 cl-o">'+
							'￥99994010.00' +
						'</div>' +
					'</div>' +
					'<div class="row cl">'+
						'<label class="form-label col-xs-4 col-sm-3"><span class="cl-o">*</span>提现金额：</label>' +
						'<div class="formControls col-xs-8 col-sm-9">' +
							'<input type="number" class="input-text mr-10" id="amount"  name="amount" autocomplete="off" placeholder="" style="width: 160px;">元' +
						'</div>' +
					'</div>' +
					'<div class="row cl">' +
						'<label class="form-label col-xs-4 col-sm-3">提现方式：</label>' +
						'<div class="formControls skin-minimal col-xs-8 col-sm-9">' +
							'<div class="radio-box" style="padding-left: 0;">' +
								'<input type="radio" id="pay-2" name="pay" value="2">' +
								'<label for="pay-2">绑定的支付宝</label>' +
							'</div>' +
							'<div class="radio-box" style="padding-left: 0;">' +
								'<input type="radio" id="pay-1" name="pay" value="1">' +
								'<label for="pay-1">绑定的微信</label> '+
							'</div>' +
							'<div class="radio-box" style="padding-left: 0;">' +
								'<input type="radio" id="pay-0" name="pay" value="0" checked>' +
								'<label for="pay-0">银行卡</label>' +
							'</div>' +
						'</div>' +
					'</div>' +
					'<div class="row cl">' +
						'<label class="form-label col-xs-4 col-sm-3">账户名：</label>' +
						'<div class="formControls col-xs-8 col-sm-9 cl-o" id="usn">' +
							'建设银行'+
						'</div>' +
					'</div>' +
					'<div class="row cl alipy" hidden>' +
						'<label class="form-label col-xs-4 col-sm-3"><span class="cl-o">*</span>账号：</label>' +
						'<div class="formControls col-xs-8 col-sm-9">' +
							'<input type="text" class="input-text" id="usn1" autocomplete="off" style="width: 180px;" value="6226555546481568425" disabled>' +
						'</div>' +
					'</div>' +
				'</form>'+
            '<div class="row cl mt-50">' +
				'<a class="btn btn-primary radius col-xs-offset-5 col-sm-offset-4" id="sure">&nbsp;&nbsp;确定&nbsp;&nbsp;</a>'+
            '<a class="btn btn-default radius ml-10" id="quxiao">&nbsp;&nbsp;取消&nbsp;&nbsp;</a>'+
			'</div>';
        $.ajax({
            url:'takeCash?op=apply',
            type:'post',
            dataType:'json',
            success:function(data){
                if(data.state == '403'){
                    layer.msg(data.msg);
                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                }else if(data.state == '401'){
                    layer.msg(data.msg);
                }else if(data.state){
                    layer.open({
                        type: 1,
                        title:'提现',
                        skin: 'layui-layer-rim', //加上边框
                        area: ['600px', '420px'], //宽高
                        content: htm
                    })
					if($("#usn").text()!='未绑定'){
                        $(".alipy").show();
					}
                }else{
                    layer.msg(data.msg);
                }
            }
        });

	});
	
$("body").on('click',"#quxiao",function(){
    $(".layui-layer-shade").remove();
    $(".layui-layer").remove();
});

$("body").on('click',"#sure",function(){
        var amount = $("#amount").val();
    	var type=$("input[type='radio']:checked").val();
    	if($("#usn").text()=='未绑定'){
    	    layer.alert('请先绑定账号，或换其他提现方式');
        	return;
    	}
    	if(amount==''){
            layer.alert('金额不能为空');
            return;
		}
        $.ajax({
            url:'sure_cash?op=sure',
            type:'post',
            data:{amount:amount,type:type},
            dataType:'json',
            success:function(data){
                if(data.state == '403'){
                    layer.msg(data.msg);
                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                }else if(data.state == '401'){
                    layer.msg(data.msg);
                }else if(data.state){
                    layer.msg('申请成功，请等待管理员审核');
                    window.location.href='takeCash';
                }else {
                    layer.msg(data.msg);
                }
            }
        });
    $(".layui-layer-shade").remove();
    $(".layui-layer").remove();

});


$("body").on('click',".radio-box",function(){
    var type=$("input[type='radio']:checked").val();
    $.ajax({
        url:'sure_cash?op=type',
        type:'post',
        data:{type:type},
        dataType:'json',
        success:function(data){
            if(data.state == '403'){
                layer.msg(data.msg);
                window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
            }else if(data.state == '401'){
                layer.msg(data.msg);
            }else if(data.state){
                $('#usn').html(data.usn_name);
                if($("#usn").text()!='未绑定'){
                    $(".alipy").show();
                    $("#usn1").val(data.usn);
                }else {
                    $(".alipy").hide();
				}
			}else {
                layer.msg('发生错误，请稍后再试');
			}

        }
    });

});



	
</script>
</body>
</html><?php }
}
