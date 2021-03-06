<?php
/* Smarty version 3.1.29, created on 2017-06-06 10:46:10
  from "D:\www\yunjuke\application\pay\views\store_printer_manage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_593617726dbb55_99028446',
  'file_dependency' => 
  array (
    'efc20a901ebbf82c14ecad6aaad7e9de9393c805' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\store_printer_manage.html',
      1 => 1495588444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lib/link.html' => 1,
    'file:lib/header.html' => 1,
    'file:lib/footer.html' => 1,
  ),
),false)) {
function content_593617726dbb55_99028446 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '25838593617725ddc91_61414155';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>云聚客门店收银系统 | 智慧店铺</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/link.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<style>
          
        </style>
	</head>

	<body>
		<div id="wrapper">
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>打印配置</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a>智慧店铺</a>
                        </li>
                        <li>
                            <a>配置设置</a>
                        </li>
                        <li class="active">
                            <strong>打印配置</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content">
            <div class="row">
            	<div class="col-lg-10">
            	    <div class="ibox float-e-margins">
            	        <div class="ibox-title clearfix">
            	            <h5 style="margin: 10px 0 0px;">打印配置</h5>
            	        </div>
            	        <div class="ibox-content">
						<div class="alert alert-warning">
							温馨提示：
							1、如果开启了打印机，并且配置好打印机相关配置，系统将在客户成功付款后打印出小票<br>
							<strong style="color:red;">2、特别提醒：您必须要有台小票打印机</strong>
						 </div>
						 <button class="btn  btn-primary" style="margin-bottom: 15px;" onClick="SelectAsDefaultPrinter()" data-toggle="modal" data-target="#addPrintSet"><i class="fa fa-plus"></i> 添加打印机</button>
						 <!-- <button class="btn  btn-primary" style="margin-bottom: 15px;" onClick="Print()" data-toggle="modal" data-target="#addPrintSet"><i class="fa fa-plus"></i> 打印测试</button> -->
						<table class="ui-table ui-table-list table table-striped default no-paging footable-loaded footable" data-page-size="100" style="padding: 0px;">
						<thead class="js-list-header-region tableFloatingHeaderOriginal">
							<tr class="widget-list-header">
							<th class="footable-visible footable-first-column footable-sortable">开关<span class="footable-sort-indicator"></span></th>
							<th class="footable-visible footable-sortable">描述<span class="footable-sort-indicator"></span></th>
							<th data-hide="phone" class="footable-visible footable-sortable">门店<span class="footable-sort-indicator"></span></th>
							<th data-hide="phone" class="footable-visible footable-sortable">绑定手机号<span class="footable-sort-indicator"></span></th>
							<th data-hide="phone" class="footable-visible footable-sortable">终端号<span class="footable-sort-indicator"></span></th>
							<th class="footable-visible footable-last-column footable-sortable">操作<span class="footable-sort-indicator"></span></th>
							</tr>
							</thead>
							<tbody class="js-list-body-region" id="table-list-body">
							 								<tr class="footable-even" style="display: table-row;"><td colspan="7" class="footable-visible footable-last-column footable-first-column"><span class="footable-toggle"></span>您还没有添加打印机，请添加一台</td></tr>
																</tbody>
            	            </table>
            	        </div>
            	    </div>
            	</div>
            </div>
        </div>
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       <?php echo '<script'; ?>
 language="javascript" src="<?php echo PLUGIN;?>
/plugins/Lodop/LodopFuncs.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
		var LODOP; //声明为全局变量   
        function SelectAsDefaultPrinter() {
		    LODOP=getLodop();  
			if (LODOP.CVERSION) {
				LODOP.On_Return=function(TaskID,Value){if(Value>=0) swal({title:'',text:'选择成功', type:"success",timer:2000}); else swal({title:'',text:'选择失败', type:"error",timer:2000});};
				LODOP.SELECT_PRINTER();
				return;
			 };
        	if (LODOP.SELECT_PRINTER()>=0) 
        		swal({title:'',text:'选择成功', type:"success",timer:2000}); else swal({title:'',text:'选择失败', type:"error",timer:2000});
	     };
	     function Print() {
	 		CreatePrintPage();
	 		LODOP.PRINT();	
	 	};
	     function CreatePrintPage() {	
	 		LODOP=getLodop();  	
	 		LODOP.PRINT_INIT("打印控件功能演示_Lodop功能_测试页一");
	 		LODOP.SET_PRINT_PAGESIZE(3,480,10);
	 		LODOP.ADD_PRINT_TEXT(91,10,70,21,"测试页标题");
	 		LODOP.ADD_PRINT_TEXT(201,10,120,20,"测试页内容");
	 		LODOP.ADD_PRINT_TEXT(129,10,120,20,"测试内容一:9号宋体字是默认字体");
	 		LODOP.ADD_PRINT_TEXT(161,10,120,20,"测试内容二:11号普通宋体字正体");	
	 	};
	     <?php echo '</script'; ?>
>

</body>
</html><?php }
}
