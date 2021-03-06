<?php
/* Smarty version 3.1.29, created on 2017-07-26 15:13:57
  from "D:\www\yunjuke\application\admin\views\role.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59784135e32365_33645494',
  'file_dependency' => 
  array (
    '805ec8e6d71c8271fa7e4aadab03a5f8718db0e7' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\role.html',
      1 => 1492225943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_59784135e32365_33645494 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '837359784135db5347_77204588';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>角色设置</h3>
        <h5>管理中心操作权限角色设置</h5>
      </div>
      <ul class="tab-base nc-row"><li><a  href="admin"><span>管理员</span></a></li><li><a class="current"><span>角色</span></a></li></ul>
     
      </div>
  </div>
    <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span> </div>
    <ul>
      <li>可添加一个权限组，并为其命名，方便添加管理员时使用。</li>
      <li>可在标题处全选所有功能或根据功能模块逐一选择操作权限，提交保存后生效。</li>
    </ul>
  </div>
  <div id="flexigrid"></div> 
</div>
<?php echo '<script'; ?>
>
$(function(){

    $("#flexigrid").flexigrid({
        url: 'role?op=list',
        dataType: 'xml',
        colModel : [
            {display: '操作', name : 'operation', width : 150, sortable : false, align: 'center', className: 'handle'},
            {display: '角色名称', name : 'role_name', width : 100, sortable : false, align: 'left'},
            {display: '角色备注', name : 'role_comments', width : 100, sortable : false, align: 'left'},
            ],
        buttons : [
            {display: '<i class="fa fa-plus"></i>新增角色', name : 'add', bclass : 'add', title : '新增角色', onpress : fg_operate }
            ],
        searchitems : [
            {display: '角色名称', name : 'admin_name'}
            ],
        sortname: "",
        sortorder: "",
        rp: 10,
        title: '角色列表'
    });
});

function fg_operate(name, grid) {
    if (name == 'add') {
        window.location.href = 'role?op=add_role';
    }
}
//可传更多参数
function fg_delete(role_id){
	layer.confirm('确定要删除此管理员吗？', {
		  btn: ['确认','取消'] //按钮
		}, function(){
			$.getJSON('role?op=del_role',{role_id:role_id},function(result){
				if(result.state){
					layer.msg(result.msg);
					$("#flexigrid").flexReload();
				}else{
					layer.msg(result.msg);
				}
			});
		});
}
<?php echo '</script'; ?>
>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html><?php }
}
