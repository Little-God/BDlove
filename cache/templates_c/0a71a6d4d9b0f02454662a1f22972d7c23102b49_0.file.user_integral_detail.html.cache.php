<?php
/* Smarty version 3.1.29, created on 2017-08-01 14:41:58
  from "D:\www\yunjuke\application\admin\views\user_integral_detail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598022b6458e80_80766126',
  'file_dependency' => 
  array (
    '0a71a6d4d9b0f02454662a1f22972d7c23102b49' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\user_integral_detail.html',
      1 => 1492225943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_598022b6458e80_80766126 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2457598022b6357146_93211382';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body style="background-color: #FFF; overflow: auto;">
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>积分管理</h3>
        <h5>商城会员积分管理及获取日志</h5>
      </div>
      <ul class="tab-base nc-row">
        <li><a href="JavaScript:void(0);" class="current">积分明细</a></li>
        <li><a href="user_rule_set">规则设置</a></li>
        <li><a href="user_integral_change">积分增减</a></li>
        <li><a href="user_integral_rate">积分抵用比率</a></li>
        <li><a href="user_integral_grade">积分等级</a></li>
      </ul>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span> </div>
    <ul>
      <li>积分明细，展示了被操作人员（会员）、操作人员（管理员）、操作积分数（积分值，“-”表示减少，无符号表示增加）、操作时间（添加时间）等信息</li>
    </ul>
  </div>
  <div id="flexigrid"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

  $(function(){
    $("#flexigrid").flexigrid({
      url: 'integral_log',
      colModel : [
        {display: '操作', name : 'operation', width : 60, sortable : false, align: 'center', className: 'handle-s'},
        {display: '日志ID', name : 'pl_id', width : 60, sortable : true, align: 'center'},
        {display: '会员ID', name : 'pl_memberid', width : 60, sortable : true, align: 'center'},
        {display: '会员名称', name : 'pl_membername', width : 100, sortable : true, align: 'left'},
        {display: '积分', name : 'pl_points', width : 80, sortable : true, align: 'center'},
        {display: '操作阶段', name : 'pl_stage', width : 80, sortable : false, align: 'left'},
        {display: '操作时间', name : 'pl_addtime', width : 120, sortable : true, align: 'center'},
        {display: '操作描述', name : 'pl_desc', width : 300, sortable : false, align: 'left'},
        {display: '管理员名称', name : 'pl_adminname', width : 100, sortable : false, align: 'left'}
      ],
      searchitems : [
        {display: '会员ID', name : 'pl_memberid'},
        {display: '会员名称', name : 'pl_membername'},
        {display: '管理员名称', name : 'pl_adminname'}
      ],
      title: '积分明细日志列表'
    });
  });

<?php echo '</script'; ?>
>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html><?php }
}
