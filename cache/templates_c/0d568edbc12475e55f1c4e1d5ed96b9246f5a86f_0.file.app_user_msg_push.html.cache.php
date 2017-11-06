<?php
/* Smarty version 3.1.29, created on 2017-08-01 18:02:41
  from "D:\www\yunjuke\application\admin\views\app_user_msg_push.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598051c1d121e9_51293625',
  'file_dependency' => 
  array (
    '0d568edbc12475e55f1c4e1d5ed96b9246f5a86f' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\app_user_msg_push.html',
      1 => 1501581745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_598051c1d121e9_51293625 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4826598051c1c89647_91175286';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--
&lt;!&ndash;地区选择插件&ndash;&gt;
{insert_scripts files="../plugins/spinner/jquery-ui-1.10.4.custom.min.js,../plugins/dropdown/js/dependent-dropdown.min.js"}
-->
<style>
    .opt{
        position: relative;
    }
    #nameul{
        position: absolute;
        top:30px;
        left:0;
        width:170px;
        padding:5px;
        z-index:99;
        background: #fff;
        border:1px solid #ccc;
        display: none;
    }
</style>
<body style="background-color: #FFF; overflow: auto;">

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="subject">
        <h3>推送消息</h3>
        <h5>创建推送</h5>
      </div>
      <ul class="tab-base nc-row">
						<li>
							<a href="app_user_msg_push_group.html">群推</a>
						</li>
						<li>
							<a  class="current">个推</a>
						</li>
					</ul>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
      <span id="explanationZoom" title="收起提示"></span> </div>
      <ul>
      	<li>设置向用户推送消息</li>
      </ul>
  </div>
  <form method="post" action="" id="form1" name="form1">
    <div class="ncap-form-default">
      <dl class="row">
        <dt class="tit">
          <label for="site_name"><em>*</em>标题：</label>
        </dt>
        <dd class="opt">
          <input id="title" name="title" value="" class="input-txt" type="text" />
          <span class="err"></span>
          <p class="notic"></p>
        </dd>
      </dl>
      <dl class="row">
        <dt class="tit">
          <label for="site_name"><em>*</em>用户：</label>
        </dt>
        <dd class="opt">
        <input type="text" value="" name="class_name" id="class_name" class="input-txt"/>
							<span class="err"></span>
							<p class="notic">输入用户的手机号、名字检索</p>
            <div id="nameul">
                <ul class="nameul">

                </ul>
            </div>
            <input name="spg_id" value="" id="spg_id" type="hidden">
        </dd>

      </dl>
       <dl class="row">
        <dt class="tit">
          <label for="site_name"><em></em>角色：</label>
        </dt>
        <dd class="opt" id="role">
         --
							<span class="err"></span>
							
        </dd>
      </dl>
       <dl class="row">
        <dt class="tit">
          <label for="site_name"><em></em>所属店：</label>
        </dt>
        <dd class="opt" id="store">
         --
							<span class="err"></span>
							
        </dd>
      </dl>
      <dl class="row">
        <dt class="tit">
          <label for="discrimination"><em>*</em>内容：</label>
        </dt>
        <dd class="opt">
          <textarea name="note" rows="6" class="tarea" id="note"></textarea>
          <span class="err"></span>
        </dd>
      </dl>
      <div class="bot">
          <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
          <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" id="submitBtnc">继续提交</a>
      </div>

    </div>
  </form>
</div>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
    <a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
</div>

</body>
</html>
<?php echo '<script'; ?>
>

//按钮先执行验证再提交表单
$("#submitBtn").click(function(){
    if($("#form1").valid()){
        var fomedata = $("#form1").serialize();
        $.ajax({
            url:'../App/message_management',
            type:'post',
            data:fomedata,
            dataType:'json',
            success:function(data){
                if(data.state){
                    layer.msg('发送成功');
                    window.location.href = '../App/app_user_msg_manage';
                }else{
                    layer.msg('发送失败');
                }
            }
        });
    	/*$("#form1").submit();*/
	}
});


$("#submitBtnc").click(function(){
    if($("#form1").valid()){
        var fomedata = $("#form1").serialize();
        $.ajax({
            url:'../App/message_management',
            type:'post',
            data:fomedata,
            dataType:'json',
            success:function(data){
                if(data.state){
                    layer.msg('发送成功');
                    //window.location.href = '../App/app_user_msg_manage';
                }else{
                    layer.msg('发送失败');
                }
            }
        });
        /*$("#form1").submit();*/
    }
});


//搜索用户
$("#class_name").keyup(function(){
    var class_name = $(this).val();
    $.ajax({
        url:'../App/guide_name',
        type:'post',
        data:"name="+class_name,
        dataType:'json',
        success:function(data){
            if(data.state){
                $(".notic").hide();
                $("#nameul").show();
                $(".nameul").show();
                var htmlstr='';
                $.each(data.result,function (index,obj) {
                    htmlstr+="<li class='nameclick'><a><span class='hidespan' style='display: none'>"+obj.spg_id+"</span><span class='showspan'>"+obj.spg_name +"</span>&"+ obj.spg_tel+"</a></li>";
                });
                $(".nameul").html(htmlstr);
            }else{
                $(".nameul").html('');
                $("#nameul").hide();
            }
        }
    });
});

//点击选中
$("body").on("click",".nameclick",function() {
    $("#class_name").val($(this).find(".showspan").html());
    $(this).parent().hide();
    var id = $(this).find(".hidespan").html();
    $("#spg_id").val(id);
    $.ajax({
        url: '../App/store_name',
        type: 'post',
        data: "id=" + id,
        dataType: 'json',
        success: function (data) {
            if (data.state) {
                $("#store").text(data.result.store_name);
                if(data.result.role_type==1){
                    $("#role").text('导购');
                }else {
                    $("#role").text('店长');
                }
                $("#nameul").hide();
            } else {
                $("#nameul").hide();
                layer.msg('无门店信息');
            }
        }
    })
});

$("#form1").validate({
	errorPlacement: function(error, element){
		var error_td = element.parent('dd').children('span.err');
        error_td.append(error);
    },
    rules : {
        title : {
            required : true,
        },
        note : {
            required : true,
        },
        class_name:{
            required : true,
        }
    },
    messages : {
    	title : {
            required : '<i class="fa fa-exclamation-circle"></i>标题不能为空',
        },
        note : {
            required : '<i class="fa fa-exclamation-circle"></i>内容不能为空',
        },
        class_name : {
            required : '<i class="fa fa-exclamation-circle"></i>接收者不能为空',
        }
    }
});

// 高级搜索 获取地区
/*$("#city_id").depdrop({
    url: 'api.php?act=address',
    depends: ['province_id']
});
$("#area_id").depdrop({
    url: 'api.php?act=address',
    depends: ['city_id']
});*/

<?php echo '</script'; ?>
><?php }
}
