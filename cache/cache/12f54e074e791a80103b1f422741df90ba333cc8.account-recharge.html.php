<?php
/* Smarty version 3.1.29, created on 2017-08-04 10:36:12
  from "D:\www\yunjuke\application\pay\views\account-recharge.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5983dd9c347ee4_57846077',
  'file_dependency' => 
  array (
    '12f54e074e791a80103b1f422741df90ba333cc8' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\account-recharge.html',
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
function content_5983dd9c347ee4_57846077 ($_smarty_tpl) {
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
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/select2/css/select2.min.css" />
<link rel="stylesheet" href="http://[::1]/yunjuke/application/pay/views/css/iconfont.css" />
<title>账户充值</title>
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
	.table th{
		width: 80px;
		font-size: 14px;
		color: #666;
		font-weight: 100;
	}
	.payway{
		position: relative;
		width: 160px;
		height:32px;
		background: #eaedf1;
	}
	.payway.active{
		border: 1px solid #44b549;
		height: 30px;
		background: #fff;
	}
	.payway.active:after{
		font-family: iconfont;
		font-size: 14px;
		content: "\e643";
		position: absolute;
		top: 6px;
		left: 120px;
		color: #44b549;
	}
</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 账户管理 <span class="c-gray en">&gt;</span> 账户充值 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="recharge-content">
		<h4 style="font-weight: bold;">余额：<span class="cl-o">￥99994010.00</span></h4>
		<div id="tab_demo" class="HuiTab">
		  	<div class="tabBar clearfix"><span>在线充值</span><span>打款充值</span></div>
		  	<div class="tabCon">
		  		<div class="illustrate mt-20">		
					1、提现金额只能提现至绑定的银行卡、微信、或者支付宝, 详细参见FAQ;<br>
					2、支付宝方式提现实时到账；银行卡提现预计3个工作日到账；<br>
					3、单次提现金额上限为30000元;7天内最多提现4次。
				</div>
				<table class="table mt-20">
					<tr>
						<th>充值金额：</th>
						<td>
							<input type="number" class="input-text" value="" placeholder="" id="money" name="" style="width: 160px;">&nbsp;&nbsp;元
						</td>
					</tr>
					<tr>
						<th>支付方式：</th>
						<td>
							<div class="payway l active">
								<i class="iconfont mr-10 f-22 l ml-40 cl-g" style="line-height: 35px;">&#xe615;</i>
								<p class="f-14 l" style="line-height: 32px;">微信</p>
							</div>
							<div class="payway l ml-5 ">
								<i class="iconfont mr-10 f-22 l ml-40 cl-b" style="line-height: 35px;">&#xe63b;</i>
								<p class="f-14 l" style="line-height: 32px;">支付宝</p>
							</div>
						</td>
					</tr>
				</table>
				<input class="btn btn-success size-L mt-40 mb-15" type="button" id="sure"  value="确认订单" style="width: 130px;margin-left: 105px;">
			</div>
			<div class="tabCon">
				<div class="illustrate mt-20">
					预付款充值说明：<br>
					1、银行账号，请找系统索取，并确认<br>
					2、转账时可以进行相关备注。转账完成后，填写此申请。付款人姓名，请正确填写。<br>
					3、银行转账的请截图给财务QQ：2014882889以方便审核。<br>
					4、虚拟充值：工单，售后之外的补偿，返点，奖励等
				</div>
				<table class="table mt-20">
					<tr>
						<th style="width: 120px;" class="text-r">姓名：</th>
						<td>
							<input type="text" class="input-text" value="" placeholder="" id="uname" name="" style="width: 200px;">
						</td>
					</tr>
					<tr>
						<th style="width: 120px;" class="text-r">充值金额：</th>
						<td>
							<input type="number" class="input-text" value="" placeholder="" id="cash" name="" style="width: 200px;">
						</td>
					</tr>
					<tr>
						<th style="width: 120px;" class="text-r">资金账号：</th>
						<td>
							<select id="e1" style="width: 200px;">
						        <option value="1">-请选择-</option>
																<option value="3">建设银行(6226555546481568425)</option>
								
						   </select>
						</td>
					</tr>
					<tr>
						<th style="width: 120px;" class="text-r">备注：</th>
						<td>
							<textarea name="beizhu" cols="" rows="4" class="textarea" id="note" style="width: 400px;"></textarea>
						</td>
					</tr>
					
				</table>
				
				<input class="btn btn-success size-L mt-20 mb-15" type="button" id="sure1"  value="充值申请提交" style="width: 140px;margin-left:145px ;">
			</div>
		</div>
	</div>
	
</div>


<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script>

<script type="text/javascript" src="http://[::1]/yunjuke/plugins/select2/js/select2.min.js"></script>
<script type="text/javascript">
	//	初始化select2
	 $("#e1").select2();
	
	//	实现tab切换的源码
	jQuery.Huitab =function(tabBar,tabCon,class_name,tabEvent,i){
	var $tab_menu=$(tabBar);
	  // 初始化操作
	  $tab_menu.removeClass(class_name);
	  $(tabBar).eq(i).addClass(class_name);
	  $(tabCon).hide();
	  $(tabCon).eq(i).show();
  
  	$tab_menu.bind(tabEvent,function(){
  	  $tab_menu.removeClass(class_name);
      $(this).addClass(class_name);
      var index=$tab_menu.index(this);
      $(tabCon).hide();
      $(tabCon).eq(index).show()})}
    $.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","0");
    
	
	$(".payway").click(function(){
		$(".payway").removeClass("active");
		$(this).addClass("active");
	})

	/*在线充值*/
	$("#sure").click(function () {
        var type = $(".payway").index($(".active"));
	    var money=$("#money").val();
	    if(isNaN(money)){
            layer.msg('请输入数字');
            return false;
		}
	    if(money==''){
            layer.msg('充值金额不能为空');
            return false;
		}
		if(money<=0){
            layer.msg('充值金额必须大于0');
            return false;
		}
        $.ajax({
            url:'recharge?tag=recharge',
            type:'post',
            data:{type:type,money:money},
            dataType:'json',
            success:function(data){
                if(data.state=='403'){
                    layer.msg(data.msg);
                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                }else if(data.state == '401'){
                    layer.msg(data.msg);
                }else if(data.state){
                	layer.open({
						type: 1,
						title:data.type,
						skin: 'layui-layer-rim', //加上边框
						area: ['280px', '320px'], //宽高
						content: '<img src="'+data.code+'" width="260px" height="260px"/>'
					});
                    check_success(data.paysn);
                }else{
                    layer.msg('充值失败，请稍后重试');
                }
            }
        });

    });


	/*检查支付是否成功*/
    function check_success(paysn){
       var time = setInterval(function(){
            $.ajax({
                url:'check_pay',
                type:'post',
                data:{paysn:paysn},
                dataType:'json',
                success:function(data){
                    if(data.state=='403'){
                        layer.msg(data.msg);
                        window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                    }else if(data.state == '401'){
                        layer.msg(data.msg);
                    }else if(data.state){
                        layer.msg('支付成功！');
                        window.location.href = 'recharge';
                        clearInterval(time);
                    }
                }
            });
        },2000);
    }

    /*打款充值*/
    $("#sure1").click(function () {
        var uname=$("#uname").val();
        var cash=$("#cash").val();
        var note=$("#note").val();
        var type=$('#e1 option:selected').val();
		if(uname==''){
            layer.msg('姓名不能为空');
            return false;
		}
        if(cash==''){
            layer.msg('充值金额不能为空');
            return false;
        }
        if(cash<=0){
            layer.msg('充值金额必须大于0');
            return false;
        }
        if(type==1){
            layer.msg('请选择账号类型，如果没有请先绑定');
            return false;
		}
        $.ajax({
            url:'recharge?tag=cash',
            type:'post',
            data:{cash:cash,uname:uname,note:note,type:type},
            dataType:'json',
            success:function(data){
                if(data.state == '403'){
                    layer.msg(data.msg);
                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                }else if(data.state == '401'){
                    layer.msg(data.msg);
                }else if(data.state){
                    layer.msg(data.msg);
                    window.location.href = 'recharge';
                }else{
                    layer.msg(data.msg);
                }
            }
        });

    });




</script>
</body>
</html><?php }
}
