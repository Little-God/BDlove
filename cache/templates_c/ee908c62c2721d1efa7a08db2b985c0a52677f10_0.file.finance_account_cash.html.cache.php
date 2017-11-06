<?php
/* Smarty version 3.1.29, created on 2017-08-01 17:09:50
  from "D:\www\yunjuke\application\admin\views\finance_account_cash.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5980455e5b4484_51253316',
  'file_dependency' => 
  array (
    'ee908c62c2721d1efa7a08db2b985c0a52677f10' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\finance_account_cash.html',
      1 => 1501578582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_5980455e5b4484_51253316 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '50295980455e4d59d7_46488243';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>提现申请管理</h3>
        <h5>提现申请相关信息</h5>
      </div>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span> </div>
    <ul>
      <li>可设置提现管理列表，显示哪些信息</li>
      <li>可根据信息搜索查看提现记录</li>
    </ul>
  </div>

  <div class="mt-20 mb-10 c-666">
    <form method="post" name="formSearch" id="formSearch">
      申请时间：<input type="text" name="startime" onclick="laydate()" id="startime" class=" w120 mr-5">
      — <input type="text" name="endtime" onclick="laydate()" id="endtime" class=" w120 ml-5 mr-30">
      申请类型：<input type="radio" name="apply_type"  class="w20" value="1">会员
                <input type="radio" name="apply_type"  class="w20" value="2">店铺
                <input type="radio" name="apply_type"  class="w20" value="3">平台
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
            $("#flexigrid").flexOptions({url: 'get_finance_account_cash?' + search}).flexReload();
        });

        $("#flexigrid").flexigrid({
            url: 'get_finance_account_cash',
            dataType: 'xml',
            colModel : [
                {display: '操作', name : 'operation', width : 60, sortable : false, align: 'center', className: 'handle'},
                {display: '账户', name : 'account', width : 60, sortable : false, align: 'center'},
                {display: '申请人', name : 'apply_name', width : 60, sortable : false, align: 'center'},
                {display: '提现金额', name : 'cash', width : 60, sortable : false, align: 'center'},
                {display: '提现账户名', name : 'bank', width : 90, sortable : false, align : 'center'},
                {display: '提现账号', name : 'bank_code', width : 150, sortable : false, align: 'center'},
                {display: '收款人', name : 'receive_name', width : 60, sortable : false, align: 'center'},
                {display: '申请类型', name : 'apply_type', width : 60, sortable : false, align: 'center'},
                {display: '提现方式', name : 'bank_type', width : 60, sortable : false, align: 'center'},
                {display: '状态', name : 'status', width : 60, sortable : false, align: 'center'},
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
            title: '提现管理列表'
        });
    });



    
    function cash_sure(id){
        layer.confirm('确认要同意此提现申请吗', {
            btn: ['确认','取消'] //按钮
        }, function(){
          $.ajax({
              url:'cash_update_status_sure',
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

    function cash_close(id) {
        layer.confirm('确认要关闭此提现申请吗', {
            btn: ['确认', '取消'] //按钮
        }, function () {
            $.ajax({
                url: 'cash_update_status_close',
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
