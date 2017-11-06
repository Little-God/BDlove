<?php
/* Smarty version 3.1.29, created on 2017-11-01 13:42:19
  from "D:\www\yunjuke\application\admin\views\promotion_coupon_of_newman.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f95ebb495750_42390370',
  'file_dependency' => 
  array (
    '3be64bf78ead4296abf63163881ef97f56f80c19' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\promotion_coupon_of_newman.html',
      1 => 1501573995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_59f95ebb495750_42390370 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '637459f95ebb378499_82429263';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
td.active-time div{padding:2px !important;height:38px !important;line-height:18px !important;}
.stop:hover{
	color: #F37B1D!important;
	border: 1px space #F37B1D!important;
}
</style>
	<body style="background-color: #FFF; overflow: auto;">
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>
		<div class="page">
			<div class="fixed-bar">
				<div class="item-title">
							<div class="subject">
								<h3>新会员送券</h3>
								<h5>平台中的所有优惠卷的管理</h5>
							</div>
		                <ul class="tab-base nc-row">
						       
						        <li><a <?php if ($_smarty_tpl->tpl_vars['op']->value == 1) {?>class="current"<?php } else { ?>href="couponOfNewman?op=1"<?php }?> >进行中</a></li>
						        <li><a <?php if ($_smarty_tpl->tpl_vars['op']->value == 2) {?>class="current"<?php } else { ?>href="couponOfNewman?op=2"<?php }?> >未开始</a></li>
						        <li><a <?php if ($_smarty_tpl->tpl_vars['op']->value == 3) {?>class="current"<?php } else { ?>href="couponOfNewman?op=3"<?php }?> >已结束</a></li>
						      
					      </ul>
		            </div>
			</div>
			<!-- 操作说明 -->
			<div class="explanation" id="explanation">
				<div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
					<h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
					<span id="explanationZoom" title="收起提示"></span> </div>
				<ul>
					<li> 创建并管理新会员送券活动</li>
				</ul>
		     </div>
		    
            <div id="flexigrid">
            </div>
	</div>
	<?php echo '<script'; ?>
>
$(function(){

	$("#flexigrid").flexigrid({
		url: 'get_couponOfNewman?op=<?php if (isset($_smarty_tpl->tpl_vars['op']->value)) {
echo $_smarty_tpl->tpl_vars['op']->value;
}?>',
		colModel : [
			{display: '操作', name : 'operation', width : 150, sortable : false, align: 'center', className: 'handle-s'},
			{display: '活动时间', name : 'storelogo', width : 150, sortable : true, align: 'center',className: 'active-time'},
			{display: '被领取数', name : 'member_email', width : 150, sortable : true, align: 'left'},
			{display: '优惠券名称', name : 'member_email', width : 150, sortable : true, align: 'left'},
			{display: '优惠卷', name : 'member_email', width : 150, sortable : true, align: 'left'},
			{display: '活动备注', name : 'member_email', width : 150, sortable : true, align: 'left'},
			{display: '使用说明', name : 'member_email', width : 150, sortable : true, align: 'left'},
		],
		buttons : [
			{display: '<i class="fa fa-plus"></i>创建新会员送券', name : 'add', bclass : 'add', title : '创建新会员送券', onpress : fg_operate },
			{display: '<i class="fa fa-trash-o"></i>结束活动', name : 'stop', bclass : 'stop', title : '结束活动', onpress : fg_operate },
		],
		searchitems : [
			{display: '优惠券类型', name : 'ous_tel'},
		],
		title: '新会员送券活动列表'
	});
	function fg_operate(name, grid) {
    if (name == 'del') {
        if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
            fg_delete(itemlist);
        }else{
           layer.msg('请至少选择一个活动',{icon:2}); return false;
        }
    }else if (name == 'add') {
    	window.location.href="PromotionCouponOfNewman_edit";
    }else if(name=='stop'){
    	var itemlist = new Array();
    	if($('.trSelected',grid).length>0){
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
        }
    	fg_stop(itemlist);
    }
}
});
function fg_edit(id){
	window.location.href="PromotionCouponOfNewman_edit?id="+id;
}
/*删除*/
function fg_delete(id,name){
	title = '';
	if(!name){
		title = '这'+id.length+'个活动';
		id = id.join(',');
		
	}else{
		title = '活动优惠卷’'+name+'’';
	}
	layer.confirm('确认删除'+title+'吗？',
			   {btn: ['确认','取消']}, 
			   function(){
				   $.ajax({
				        type: "post",
				        dataType: "json",
				        url: "del_promotionCouponOfNewman",
				        data: {id:id},
				        success: function(data){
						  if(data.state=='403'){
					           login_ajax('shopadmin');
				            }else if(data.state){
				            	layer.msg(data.msg);
				            	$("#flexigrid").flexReload();
				            	layer.close(index);
				            }else{
				            	$("#flexigrid").flexReload();
				            	layer.alert(data.msg);
				            }
				        }
				   })
			   }
	)
}
function fg_stop(id) {
    if (typeof id == 'number') {
        var id = new Array(id.toString());
    }
    layer.confirm('确认要结束这 ' + id.length + ' 项吗？', {
        btn: ['确认','取消'] //按钮
    }, function(){
        ids = id.join(',');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "stop_activity?type=1&id="+ids,
            data: '',
            success: function(data){
                if(data.state=='403'){
                    login_ajax('shopadmin');
                }else if(data.state==false){
                    layer.msg(data.msg);
                }else if(data.state==true){
                    layer.msg(data.msg);
                }
                    window.location.href="couponOfNewman";
                }
        });
    });
}
        <?php echo '</script'; ?>
>
        <div id="goTop">
            <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
            <a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
        </div>
        </body>

</html><?php }
}
