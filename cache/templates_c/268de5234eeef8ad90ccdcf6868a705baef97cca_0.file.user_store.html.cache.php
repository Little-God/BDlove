<?php
/* Smarty version 3.1.29, created on 2017-10-09 14:04:18
  from "D:\www\yunjuke\application\vmall\views\user_store.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59db116202fb21_53287093',
  'file_dependency' => 
  array (
    '268de5234eeef8ad90ccdcf6868a705baef97cca' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\vmall\\views\\user_store.html',
      1 => 1504928369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db116202fb21_53287093 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3195259db1161e93473_10448372';
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
<link rel="shortcut icon" href="https://qncdn.qiakr.com/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
<link rel="dns-prefetch" href="//static.qiakr.com/">
<meta name="apple-mobile-web-app-capable" content="yes" >
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="full-screen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black" >
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<link href="<?php echo TEMPLE;?>
css/weui.css" rel="stylesheet" type="text/css">
<link href="<?php echo TEMPLE;?>
css/weui1.css" rel="stylesheet" type="text/css">
<link href="<?php echo TEMPLE;?>
css/example.css" rel="stylesheet" type="text/css">
<link href="<?php echo TEMPLE;?>
css/style.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo TEMPLE;?>
js/jquery-2.1.1.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
  (function(doc, win) {
    // 移动端REM自适应
    var docEl = doc.documentElement, 
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
          var clientWidth=docEl.clientWidth||320;
          var docCls = docEl.classList;
          var width = clientWidth < 320 ? 320 : clientWidth > 640 ? 640 : clientWidth;
          docEl.style.fontSize = 100 * (width / 320) + 'px';
          docEl.style.opacity=1;

          // 添加屏幕标识，便于文字调整
          if(375 <= clientWidth && clientWidth < 414){
            docCls.add('view6');
          }else if(414 <= clientWidth){
            docCls.add('view6s');
          }else{
            docCls.remove('view6');
            docCls.remove('view6s');
          }
        };
    docEl.style.opacity=0;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
    // IOS8下1px线条改为0.5px
    if (/iP(hone|od|ad)/.test(navigator.userAgent)) {
        var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/),
            version = parseInt(v[1], 10);
        if(version >= 8){
            document.documentElement.classList.add('hairlines');
        }
    }
    })(document, window);
<?php echo '</script'; ?>
><title>线下门店</title>
<style>
body,.storeList{background: #f0f0f0;}
.tips{padding: 0 15px;color: #9b9b9b;line-height: 30px;}
/* 清除浮 动*/
.fix{*zoom:1;}
.fix:after{display:table; content:''; clear:both;}
/* 基于display:table-cell的自适应布局 */
.tbl-cell{display:table-cell; *display:inline-block; width:2000px; *width:auto;}
.storeList li.noResult{padding-top: 30%;}
.store-card {margin-bottom: 10px; background-color: #fff;}
.store-info-wrap {width: 220px;}
.store-actions {height: 35px; line-height: 35px;}
.store-img {width: 40px;height: 40px;background-size: contain;border: 1px solid #EFEFEF;border-radius: 3px;overflow: hidden;background-position: center;background-repeat: no-repeat;}
.btn-store-in { border: 1px solid; padding: 4px; border-radius: 3px;}
.store-name-con {width: 70%;}

.store-card.active {border-top:2px solid #f44336;}

.brand{
    width:70%;
    display:block;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
    color: red;
}
    .address{
        width:70%;
        display:block;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    }
</style>
</head>
<body>
<div id="loadingToast" style="display: block">
	<div class="weui-mask_transparent"></div>
	<div class="weui-toast">
		<i class="weui-loading weui-icon_toast"></i>
		<p class="weui-toast__content">正在为您查找附近的门店</p>
	</div>
</div>

<input type="hidden" id="bindingStore" value="">
<input type="hidden" id="redirect" value="">
<input type="hidden" id="openRadius" value="false">
<input type="hidden" value="0"><!--客服模式  0-导购模式 1-导购&多客服模式 2-多客服模式-->
<div class="tips appointment fn-hide">预约过的门店</div>
<div class="">
    <div class="storeList" id="storeAppointment">
    </div>
</div>
<div class="tips visited fn-hide"  id="storeVisited1">访问过的门店</div>
    <div class="storeList" id="storeVisited">
    </div>
<div class="tips fn-hide" id="storeAround1">附近的门店</div>
 <div class="storeList" id="storeAround">
</div>
<?php echo '<script'; ?>
>
$(function(){
	
	$.ajax({
		type: "post",
	       url: "stores",
	       data: {
	    	   flag:"storeAround",
	       },
	       dataType: "json",
	       success: function(data){
		       	if(data.state1){
		       		var list = data.data1;
		       		    store_head_portrait = "<?php echo DEFAULTIMAGE;?>
"+"<?php echo $_smarty_tpl->tpl_vars['config_images']->value['store_avatar'];?>
";
	        			str ='';
	        			$.each(list,function(k,v){
	        				str+='<div class="store-card bde4-t">'+
	        				'<a href="../index/index?storeId='+v.store_id+'" class="block fix pt10 pb10 store-link" data-id="'+v.store_id+'">'+
	        					'<div class="tbl-cell pct20 vt tc">'+
	        					'<span class="store-img dib" style="background-image: url('+v.default_log+')"></span></div>'+
	        					'<div class="store-name tbl-cell"><div>'+
	        					'<p class="store-name-con ell dib vt">'+v.store_name+'</p>'+
	        					'<span class="c-or fs12 fr" style="margin-right: 6%;">&nbsp;&nbsp;'+v.distance+'km</span>'+
	        						'</div>';
	        						if(v.province_name=='' || v.province_name==null){
	        							v.province_name = '';
	        						}
	        						if(v.city_name=='' || v.city_name==null){
	        							v.city_name = '';
	        						}
	        						if(v.area_name=='' || v.area_name==null){
	        							v.area_name = '';
	        						}
	        						if(v.ous_address=='' || v.ous_address==null){
	        							v.ous_address = '';
	        						}
	        						if(v.brand_result==''){
	        							v.brand_result=='';
	        						}
	        						str+='<p class="c-8 fs12 address">'+v.province_name+v.city_name+v.area_name+v.ous_address+'</p>'+
	        						'<p class="c-8 fs12"><span class="brand">'+v.brand_result+'</span><span class="btn-store-in c-rd fs12 fr" style="margin: -30px 6% 0 0;">进店</span></p>'+
	        						'<p class="tr"></p>'+
	        					'</div>'+
	        				'</a>'+
	        				'<div class="ui-flex tc store-actions bde4-t bde4-b">'+
	        					'<div class="cell bde4-r">';
	        				 if(v.ous_longitude && v.ous_latitude){
	        					 str+='<a href="https://m.amap.com?q='+v.ous_latitude+','+v.ous_longitude+'&amp;name='+v.store_name+'" class="block">查看地图</a>';
	        			        }else{
	        			         str+='<a class="c-9" href="javascript:;">查看地图</a>';
	        			        }
	        					str+='</div>'+
	        			 		'<div class="cell">'+
	        						'<a href="shopping_guide_list?storeId='+v.store_id+'" class="block">选择导购</a>'+
	        					'</div>'+ 
	        				'</div>'+
	        			'</div>';
	        			})
	        			$('#storeAround').html(str);
	        			$('#storeAround1').removeClass("fn-hide");
		       	}
		       	if(data.state2){
		       		var list = data.data2;
	        			str ='';
	        			$.each(list,function(k,v){
	        				str+='<div class="store-card bde4-t">'+
	        				'<a href="../index/index?storeId='+v.store_id+'" class="block fix pt10 pb10 store-link" data-id="'+v.store_id+'">'+
	        					'<div class="tbl-cell pct20 vt tc">'+
	        						'<span class="store-img dib" style="background-image: url('+v.default_log+')"></span>'+
	        					'</div>'+
	        					'<div class="store-name tbl-cell"><div>'+
	        					'<p class="store-name-con ell dib vt">'+v.store_name+'</p>'+
	                        /*if(v.ous_type==1){
        					 str+='<p class="store-name-con ell dib vt">'+v.store_name+'(加盟店 )</p>';
        			        }else if(v.ous_type==2){
        			        	str+='<p class="store-name-con ell dib vt">'+v.store_name+'(旗舰店)</p>';
        			        }else if(v.ous_type==3){
        			        	str+='<p class="store-name-con ell dib vt">'+v.store_name+'(直营店)</p>';
        			        }else if(v.ous_type==4){
        			        	str+='<p class="store-name-con ell dib vt">'+v.store_name+'(超市店)</p>';
        			        } */
	        			
	   					      '<span class="c-or fs12 fr" style="margin-right: 6%;">&nbsp;&nbsp;'+v.distance+'km</span>'+
	        						'</div>';
	        				if(v.province_name=='' || v.province_name==null){
    							v.province_name = '';
    						}
    						if(v.city_name=='' || v.city_name==null){
    							v.city_name = '';
    						}
    						if(v.area_name=='' || v.area_name==null){
    							v.area_name = '';
    						}
    						if(v.ous_address=='' || v.ous_address==null){
    							v.ous_address = '';
    						}
    						if(v.brand_result==''){
    							v.brand_result=='';
    						}
    						str+='<p class="c-8 fs12 address">'+v.province_name+v.city_name+v.area_name+v.ous_address+'</p>'+
    						     '<p class="c-8 fs12"><span class="brand">'+v.brand_result+'</span><span class="btn-store-in c-rd fs12 fr" style="margin: -30px 6% 0 0;">进店</span></p>'+
	        						'<p class="tr"></p>'+
	        					'</div>'+
	        				'</a>'+
	        				'<div class="ui-flex tc store-actions bde4-t bde4-b">'+
	        					'<div class="cell bde4-r">';
	        				 if(v.ous_longitude && v.ous_latitude){
	        					 str+='<a href="https://m.amap.com?q='+v.ous_latitude+','+v.ous_longitude+'&amp;name='+v.store_name+'" class="block">查看地图</a>';
	        			        }else{
	        			         str+='<a class="c-9" href="javascript:;">查看地图</a>';
	        			        }
	        					
	        					str+='</div>'+
	        					'<div class="cell">'+
        						'<a href="shopping_guide_list?storeId='+v.store_id+'" class="block">选择导购</a>'+
        						'</div>'+ 
	        				'</div>'+
	        			'</div>';
	        			})
	        			$('#storeVisited').html(str);
	        			$('#storeVisited1').removeClass("fn-hide");
		       	}
		       	$('#loadingToast').css("display","none");
		       	
		       	
	       }
    });
});


<?php echo '</script'; ?>
>

</body>
</html><?php }
}
