<?php
/* Smarty version 3.1.29, created on 2017-08-01 17:36:33
  from "D:\www\yunjuke\application\admin\views\finance_account_recharge.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59804ba19ad886_85200028',
  'file_dependency' => 
  array (
    '80a92be4d7c32af42fe047e7038eb7d1ba04d9a8' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\finance_account_recharge.html',
      1 => 1501580174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_59804ba19ad886_85200028 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1936059804ba18ea355_48832589';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>充值申请管理</h3>
        <h5>充值申请相关信息</h5>
      </div>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span> </div>
    <ul>
      <li>可查看充值申请记录并设置充值申请记录表显示哪些内容</li>
      <li>可对充值申请进行操作包括同意申请或关闭申请</li>
    </ul>
  </div>

  <div class="mt-20 mb-10 c-666">
    <form method="post" name="formSearch" id="formSearch">
      申请时间：<input type="text" name="startime" onclick="laydate()" id="startime" class=" w120 mr-5">
      — <input type="text" name="endtime" onclick="laydate()" id="endtime" class=" w120 ml-5 mr-30">
      申请类型：<input type="radio" name="apply_type"  class="w20" value="1">店铺
                <input type="radio" name="apply_type"  class="w20" value="2">会员
                <input type="radio" name="apply_type"  class="w20" value="3">导购
      <label style="margin-left: 30px">申请人：</label><input type="text" name="apply_name" id="apply_name" class="w130">
      <input type="button" class="ml-10 btn btn-warning radius" id="searchsubmit"  value="搜索">
    </form>
  </div>

  <div id="flexigrid"></div>
</div>



<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
    <a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){

        $('#searchsubmit').click(function () {
            var search = $("#formSearch").serialize();
            $("#flexigrid").flexOptions({url: 'get_finance_account_recharge?' + search}).flexReload();
        });

        $("#flexigrid").flexigrid({
            url: 'get_finance_account_recharge',
            dataType: 'xml',
            colModel : [
                {display: '操作', name : 'operation', width : 60, sortable : false, align: 'center', className: 'handle'},
                {display: '账户', name : 'account', width : 60, sortable : false, align: 'center'},
                {display: '申请人', name : 'apply_name', width : 60, sortable : false, align: 'center'},
                {display: '充值金额', name : 'cash', width : 60, sortable : false, align: 'center'},
                {display: '充值账户名', name : 'bank', width : 90, sortable : false, align : 'center'},
                {display: '申请类型', name : 'apply_type', width : 60, sortable : false, align: 'center'},
                {display: '充值方式', name : 'bank_type', width : 60, sortable : false, align: 'center'},
                {display: '状态', name : 'status', width : 60, sortable : false, align: 'center'},
                {display: '备注', name : 'note', width : 200, sortable : false, align: 'center'},
                {display: '提交申请时间', name : 'apply_time', width : 125, sortable : false, align: 'center'},
                {display: '操作时间', name : 'operate_time', width : 125, sortable : false, align: 'center'},
                {display: '操作人', name : 'operate_name', width : 60, sortable : false, align: 'center'}
            ],
            /*searchitems : [
                {display: '门店', name : 'id'}
            ],*/
            sortname: "",
            sortorder: "",
            rp: 40,
            title: '充值管理列表'
        });
    });



    
    function recharge_sure(id){
        layer.confirm('确认要同意此充值申请吗', {
            btn: ['确认','取消'] //按钮
        }, function(){
          $.ajax({
              url:'recharge_update_status_sure',
              data:{'id':id},
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
      })
    }

    function recharge_close(id) {
        layer.confirm('确认要关闭此充值申请吗', {
            btn: ['确认', '取消'] //按钮
        }, function () {
            $.ajax({
                url: 'recharge_update_status_close',
                data: {'id':id},
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    if (data.state) {
                        layer.msg(data.msg);
                        $("#flexigrid").flexReload();
                    } else {
                        layer.msg(data.msg);
                    }
                }
            });
        })
    }

<?php echo '</script'; ?>
>
</html><?php }
}
