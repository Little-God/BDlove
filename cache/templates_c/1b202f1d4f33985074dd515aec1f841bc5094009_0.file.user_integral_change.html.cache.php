<?php
/* Smarty version 3.1.29, created on 2017-08-01 14:42:11
  from "D:\www\yunjuke\application\admin\views\user_integral_change.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598022c3e56a52_25670077',
  'file_dependency' => 
  array (
    '1b202f1d4f33985074dd515aec1f841bc5094009' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\user_integral_change.html',
      1 => 1492225943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_598022c3e56a52_25670077 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9813598022c3de55b6_82222021';
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
        <li><a href="user_integral_detail" >积分明细</a></li>
        <li><a href="user_rule_set" >规则设置</a></li>
        <li><a href="JavaScript:void(0);" class="current">积分增减</a></li>
        <li><a href="user_integral_rate">积分抵用比率</a></li>
        <li><a href="user_integral_grade">积分等级</a></li>
      </ul>
    </div>
  </div>
  <form id="points_form" method="post" name="form1">
    <div class="ncap-form-default">
      <dl class="row">
        <dt class="tit">
          <label><em>*</em>会员名称</label>
        </dt>
        <dd class="opt">
          <input type="text" name="member_name" id="member_name" onchange="check_name_jf(this)" class="input-txt">
          <span class="err"></span>
          <p class="notic"></p>
        </dd>
      </dl>
      <dl class="row" id="tr_memberinfo" style="display: none;">
        <dt class="tit"><label><em>*</em>符合条件的会员</label></dt>
        <dd class="opt" id="td_memberinfo"></dd>
      </dl>
      <dl class="row">
        <dt class="tit">
          <label>增减类型</label>
        </dt>
        <dd class="opt">
          <select id="operatetype" name="operatetype">
            <option value="1">增加</option>
            <option value="2">减少</option>
          </select>
          <span class="err"></span>
          <p class="notic"></p>
        </dd>
      </dl>
      <dl class="row">
        <dt class="tit">
          <label><em>*</em>积分值</label>
        </dt>
        <dd class="opt">
          <input type="text" id="member_points" name="member_points" class="input-txt">
          <span class="err"></span>
          <p class="notic"></p>
        </dd>
      </dl>
      <dl class="row">
        <dt class="tit">
          <label>描述</label>
        </dt>
        <dd class="opt">
          <textarea name="pointsdesc" rows="6" class="tarea"></textarea>
          <span class="err"></span>
          <p class="notic">描述信息将显示在积分明细相关页，会员和管理员都可见</p>
        </dd>
      </dl>
      <div class="bot"><a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a></div>
    </div>
  </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function check_name_jf(obj){
        var name = $(obj).val();
        $.ajax({
            url:'check_name_jf',
            data:'name='+name,
            type:'post',
            dataType:'json',
            success:function(data){
			if(data.state=='403'){
				login_ajax('shopadmin');return false;
			}
                if(data.state){
                	var str = '<select name="member_id"><option value="">-请选择-</option>';
                	$.each(data.info,function(k,v){
                		var integral = v.integral>0?v.integral:0;
                		str +='<option value="'+v.user_id+'">'+v.user_name+'(当前积分'+integral+')'+'</option>';
                	})
                	str +='</select><span class="err"></span>';
                    $('#td_memberinfo').html(str);
                    $('#tr_memberinfo').show();
                }else{
                    $(obj).val('');
                    layer.alert('请输入正确的会员名');
                }
            }
        });
    }
   
        //表单验证
        $("#submitBtn").click(function(){
            if($("#points_form").valid()){
                $.ajax({
                    url:'integral_change',
                    data:$('#points_form').serialize(),
                    type:'post',
                    dataType:'json',
                    success:function(data){
                    	if(data.state==403){
                    		login_ajax('shopadmin');return false;
                    	}else{
                    		layer.alert(data);
                    	}
                            
                    }
                });
            }
        });
        $("#points_form").validate({
            errorPlacement: function(error, element){
                var error_td = element.parents('dd').children('span.err');
                error_td.append(error);
            },
            rules : {
                member_name : {
                    required : true
                },
                member_id : {
                    required : true
                },
                member_points : {
                    required : true,
                    number:true
                },
            },
            messages : {
                member_name : {
                    required : '<i class="fa fa-exclamation-circle"></i>请输入会员名称'
                },
                member_id : {
                    required : '<i class="fa fa-exclamation-circle"></i>请选择要修改的会员'
                },
                member_points : {
                    required : '<i class="fa fa-exclamation-circle"></i>请输入积分值',
                    number : '<i class="fa fa-exclamation-circle"></i>请输入数字'
                }
            }
        });
    
<?php echo '</script'; ?>
>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html><?php }
}
