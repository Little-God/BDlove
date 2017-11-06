<?php
/* Smarty version 3.1.29, created on 2017-08-16 17:56:05
  from "D:\www\yunjuke\application\pay\views\import_order.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599416b5dd2d39_96450683',
  'file_dependency' => 
  array (
    '3cc1b1a8de0f8ddf4c6dc26ca25fa7c3c549d754' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\import_order.html',
      1 => 1502676817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_599416b5dd2d39_96450683 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14055599416b5c40751_93243785';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
.newtit{
	text-align: left !important;width: 100% !important;margin-left: 1% !important;
}
a:hover{
	color: #333;
}
.newselect{
	width: 120px;
    margin: 0px 10px;
	margin-right: 20px !important;
	a:hover{
		color: #333;
	}
	
 .span{
	    border-top: 1px solid #ddd;
    background-color: #f5f5f5;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
    display: inline-block;
    float: left;
    height: 30px;
    line-height: 30px;
    padding: 0 15px;
 }	
.newtit span.current {
    background-color: #fff;
    border-top: 2px solid #0099CC;
    border-bottom: 0;
}
}
.illustrate{
		border: 1px solid #ddd;
		background: #f9f9f9;
		padding: 6px 10px;
		font-size: 12px;
		overflow: hidden;
	}
#inout{
	cursor: pointer;
}

</style>
<body style="background-color: #FFF; overflow: auto;">
<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i>订单管理 <span class="c-gray en">&gt;</span>订单导入
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="page pt-20">
	<div class="fixed-bar">

	</div>
	  <!-- 操作说明 -->
  <div class="illustrate mb-10">
    <div class="title mb-5"><i class="fa fa-lightbulb-o" style="margin-top: -3px;"></i>
      <span title="提示相关设置操作时应注意的要点" class="f-16" id="inout">操作提示</span>
      <span id="explanationZoom" title="收起提示"></span> </div>
    	 <ul>
            <li>1.支持excel文件的.xls文件格式，查看零售订单批量导入模板（淘宝格式）。</li>
             <li>2.数据量较大时，导入数据需要较长时间，请耐心等候，不要进行其他操作！。</li>
             <li>3.资料上传选择文件之后会自动提交到服务器。此过程中开始导入、或者网页无响应请耐心等候。</li>
             <li>订单“淘宝格式”导入模版下载。<span><a href="javascript:window.location.href = 'order_tp/yes'" style="color:red;">下载格式文件。</a></span></li>
             <li>订单“非淘宝格式”导入模版下载。<span><a href="javascript:window.location.href = 'order_tp/not'" style="color:red;">下载格式文件。</a></span></li>
         </ul>
  </div>
		
		<div class="ncap-form-default">
			<div id="tab_demo" class="HuiTab mb-20">
				<div class="tabBar clearfix tit newtit">
					<a href="javascript:;"><span class="spantit" value="1">淘宝格式</span></a>
					<a href="javascript:;"><span class="spantit" value="2">非淘宝格式</span></a>
				</div>
			</div>
			<dl class="row">
				<dd class="opt" style="margin-left: 1% !important">
					选择文件: &nbsp;&nbsp;&nbsp;&nbsp;
					<div class="input-file-show"> 
						<span class="show"> 
							<a class="nyroModal" rel="gal" href=""> <i class="fa fa-file-excel-o"></i> </a> 
						</span> 
						<span class="type-file-box">
						<form id="formType"  enctype="multipart/form-data"> 
							<input type="text" name="" id="textfield2" class="type-file-text"> 
							<input type="button" name="" id="button2" value="选择导入..." class="type-file-button"> 
							<input class="type-file-file valid" id="import_excel" onchange="import_change()" name="file_" type="file" hidefocus="true">
						</form>
						</span>
					</div>
				</dd>
			</dl>
			
			<div class="bot" style="padding: 12px 0 10px 1.5%"><a href="JavaScript:;" class="btn btn-success radius" id="submitBtn">开始导入</a></div>
		</div>


</div>
<?php echo '<script'; ?>
>
	var n=1;
	$("#inout").click(function(){
		if(n==1){
			$('.illustrate').animate({
			'width':'90px',
			'height':'25px',
			'border-radius':'4px'
		})
			n=2;
		}else{
			$('.illustrate').animate({
			'width':'98%',
			'height':'140px',
			'border-radius':'0px'
		})
			n=1;
		}
		
	})
	
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
	
var names = '';
var names1='';
function import_change(){
	
	  var form_data = new FormData($('#formType')[0]);
	  console.log(form_data);
 		 $.ajax({
				type: "post",
		        url: "<?php echo base_url('admin.php');?>
/write_import/excel_upload",
		        data: form_data,
		        dataType: "json",
		        cache: false,
		        processData: false,
	            contentType: false,
		        success: function(data){
                    if(data.state == '403'){
                        layer.msg(data.msg);
                        window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                    }else if(data.state == '401'){
                        layer.msg(data.msg);
                    }else if(data['state'] == false){
						layer.alert(data['msg']);
					}else{
						names = data.name;
						$("#textfield2").val(data.name);
            			layer.closeAll();
					}
		        }
			});
 		
}


var type = '1';
$("body").on("click",'.newtit .spantit',function(){
	type = $(this).attr("value");
});


    //排队
    var int ='';
    //成功进入操作队列
    function queue_action(id,url,type,names)
    {
        int = clearInterval(int);
        var i = 10;
        layer.confirm('是否开始操作？取消倒计时:<span id="time">10</span>', {
            title:'请确认：',
            btn: ['开始执行'], //按钮
            cancel: function(index){      //关闭询问框
                quite_queue(id);
                layer.msg('取消操作');
                return false;
            }
        },function(){       //确定操作
            int = clearInterval(int);   //结束轮询
			layer.closeAll();
            form_submit(url,type,names,id);    //执行操作
            return false;
        });
        int = setInterval(function (){    //轮询，倒计时
            i--;
            if(i==0){
                quite_queue(id);
                layer.msg('取消操作');
                return false;
            }
            $('#time').html(i);
        },1000);
    }
    //得到位置
    function get_queue_place(id)
    {
        var place = 1;
        $.ajax({
            async: false,
            type:'get',
            dataType:'json',
            url: '<?php echo base_url("pay.php/store/");?>
get_queue_place?task_id='+id,
            success:function(data) {      //得到队列中的排队人数place
                if(data.state == '403'){
                    layer.msg(data.msg);
                    window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                }else if(data.state == '401'){
                    layer.msg(data.msg);
                }else if(data.state){
                    place = data.place;
                }
            }
        })
        return place;
    }
    //当用户退出排队队列或者关闭浏览器时的操作
    function quite_queue(id)
    {
        $.ajax({
            async: false,
            type:'get',
            dataType:'json',
            url: '<?php echo base_url("pay.php/store/");?>
quit_queue?task_id='+id,
            success:function(data){
                int = clearInterval(int);   //结束轮询
                if(data.state == '403'){
                    layer.msg(data.msg);
                    window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                }else if(data.state == '401'){
                    layer.msg(data.msg);
                }
                return false;
            }
        })
    }



$("#submitBtn").on("click",function(){
	 if(type==''){
		 layer.alert("请选择导入格式");
		 return false;
	 }
	 if($("#textfield2").val()==''){
		 layer.alert("请上传导入文件");
		 return false;
	 }
/* 	if(names1==$("#textfield2").val()){
		 layer.alert("该文件已导入,请重新选择导入文件");
		 return false;
	} */
	 var url='order_import';

    $.ajax({
        type:'get',
        dataType:'json',
        url: '<?php echo base_url("pay.php/store/");?>
queue?task_type=7',
        success:function(data){     //成功进入排队队列
            if(data.state == '403'){
                layer.msg(data.msg);
                window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
            }else if(data.state == '401'){
                layer.msg(data.msg);
            }else if(data.state) {
                if(data.queue){     //操作队列有空闲，直接执行任务
                    form_submit(url,type,names,false);    //执行操作
                    return false;
                }
                var place = get_queue_place(data.task);
                if (place>0){
                    layer.confirm('当前正在排队人数：<span id="place">'+place+'</span>', {
                        title:'当前操作人数较多，需要排队：',
                        btn: ['取消排队'], //按钮
                        cancel: function(index){      //关闭询问框
                            quite_queue(data.task);
                            layer.closeAll();
                            layer.msg('取消排队');
                        }
                    }, function(){      //取消排队
                        quite_queue(data.task);
                        layer.closeAll();
                        layer.msg('取消排队');
                    });
                    int = setInterval(function () {    //轮询
                        place = get_queue_place(data.task);
                        if(place==0){
                            queue_action(data.task,url,type,names);         //执行操作
                            return false;
                        }
                        $('#place').html(place);
                    },1000);
                } else {
                    queue_action(data.task);
                }
                window.onbeforeunload=function() {  //关闭，刷新浏览器事件，删除排队
                    layer.closeAll();
                    quite_queue(data.task);
                };
            } else {
                layer.msg(data.msg);
            }
        }
    });
	 names1 = names;
})

	function form_submit(url,type,names,id)
	{
        layer.open({
            type: 2,
            title: '导入明细',
            scrollbar:false,
            shade: 0.8,
            area: ['60%', '520px'],
            content: url+'?type='+type+'&name='+names
        });
        if(id)quite_queue(id);
	}


<?php echo '</script'; ?>
>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
</html>
<?php }
}
