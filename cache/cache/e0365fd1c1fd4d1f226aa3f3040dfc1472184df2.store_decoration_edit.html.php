<?php
/* Smarty version 3.1.29, created on 2017-08-21 16:10:58
  from "D:\www\yunjuke\application\admin\views\store_decoration_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599a9592253660_31163468',
  'file_dependency' => 
  array (
    'e0365fd1c1fd4d1f226aa3f3040dfc1472184df2' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\store_decoration_edit.html',
      1 => 1503297154,
      2 => 'file',
    ),
    'cf07a77062b9b954d4138b51e09410b1afb7a5cc' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\pageheader.html',
      1 => 1500948915,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_599a9592253660_31163468 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<link type="text/css" rel="stylesheet" href="http://[::1]/yunjuke/plugins/select2/css/select2.min.css">
<link href="http://[::1]/yunjuke/application/admin/views/css/index.css" rel="stylesheet" type="text/css">
<link href="http://[::1]/yunjuke/application/admin/views/css/index_1.css" rel="stylesheet" type="text/css">
<link href="http://[::1]/yunjuke/application/admin/views/css/font-awesome.min.css" rel="stylesheet" />
<link href="http://[::1]/yunjuke/application/admin/views/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/application/admin/views/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/plugins/layer/skin/layer.css" rel="stylesheet" type="text/css"/>
<link href="http://[::1]/yunjuke/plugins/layer/skin/laypage.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/application/admin/views/css/H-ui.min.css" />

<!--
<link type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
-->
<style type="text/css">
    html, body { overflow: visible;}
</style>

<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/common.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/script.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/zh-CN.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/admin.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/flexigrid.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.validation.min.js"></script>
<!-- <script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/jquery.picTip.js"></script> -->
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/layer/layer.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/layer/laypage.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/laydate/laydate.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/select2/js/select2.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/spinner/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/dropdown/js/dependent-dropdown.min.js"></script>

<script type="text/javascript">
/*ajax过期登录*/
function login_ajax(demo,data){
    layer.msg(data.msg);
     setTimeout(function(){
            if(demo=='agent'){
                window.location.href="http://[::1]/yunjuke/index.php/login";
            }else if(demo=='supp'){
                window.location.href="http://[::1]/yunjuke/supplier.php/login";
            }else if(demo=='admin'){
                window.location.href="http://[::1]/yunjuke/admin.php/login";
            }else if(demo=='shop'){
                window.location.href="http://[::1]/yunjuke/index.php/index/login";
            }else if(demo=='shopadmin'){
                window.location.href="http://[::1]/yunjuke/admin.php/index/login";
            }
        },2000);
}
</script>
</head>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/UEditor/ueditor.config.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/UEditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/UEditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" href="http://[::1]/yunjuke/application/admin/views/css/module-page.css" />
<link rel="stylesheet" href="http://[::1]/yunjuke/application/admin/views/css/common.new.min.css" />
	<style type="text/css">
		@font-face {
  font-family: 'icon-yun';  /* project id 337006 */
  src: url('//at.alicdn.com/t/font_ndc5dyjagybsxlxr.eot');
  src: url('//at.alicdn.com/t/font_ndc5dyjagybsxlxr.eot?#iefix') format('embedded-opentype'),
  url('//at.alicdn.com/t/font_ndc5dyjagybsxlxr.woff') format('woff'),
  url('//at.alicdn.com/t/font_ndc5dyjagybsxlxr.ttf') format('truetype'),
  url('//at.alicdn.com/t/font_ndc5dyjagybsxlxr.svg#iconfont') format('svg');
}
.handle-rec-box .left, .handle-rec-box .right {
    width: 280px;
}
	  .closeblock{
		display: none;
	  }
  .openblock{
		display: block;
	  }
	.icon-yun{
		font-family: icon-yun;
		font-size: 14px;
	}
	.m_search_wrap:after {
	    font-family: 'icon-yun';
	    font-size: 26px;
	    content: '\e60b';
	}
	.more{
		font-family: icon-yun;
		font-size: 26px;
	    color: #fff;
	    height: 45px;
	    line-height: 45px;
	}
	.checkbox input[type=checkbox]:checked+label::after {
	    content: "\e605";
	    font-family: icon-yun;
	}
	.box-edit-wrap {
	        position: absolute;
		    left: 355px;
		    top: 0px;
		    z-index: 600;
		    background-color: white;
		    min-width: 600px;
		    min-height: 750px;
		    max-width: 700px;
	}
	input[type="text"] {
	    line-height: 30px;
	    height: 30px;
	    overflow: hidden;
	}
	input[type="file"] {
	    display: none;
	}
	.ui-dialog {
	    width: auto;
	}
			#edui1{
		height: 580px;
		overflow: auto;
	}
	.ui_form_row{
		width: 570px;
	}
	.ui_mask_wrapper{
	z-index: 999;
	}
	.box-drag-wrap {
	     min-width: auto!important; 
	}
	.shop_mod_html #dragWrap{
		margin-right: 0!important;
	}
	.shop_mod_html .checkbox {
	    padding-left: 0px!important;
	    margin-right: 0px!important;
	}
	.shop_mod_html .mr10{
		margin-right: 0px!important;
	}
	
	</style>
	
	<body style="background-color: #FFF; overflow: auto;">
	   <input  id ="TEMPLEimg" type="hidden" value="http://[::1]/yunjuke/application/admin/views/" >
	   <input  id ="defaultMid" type="hidden" value="18" >
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>

		<div class="page">
			<div class="fixed-bar">
				<div class="item-title">
					<a class="back" href="javascript:history.back(-1)" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
					<div class="subject" style="height: 50px;">
						<h3 style="margin: 0;">店铺微商城装修</h3>
						<h5 style="margin: 0;">设计装修店铺微商城的版式</h5>
					</div>
				</div>
			</div>
		<!--门店装修内容-->
		<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default" id="decWrap">
			<div class="panel-body">
				<div class="ovh mb20">
					<div class="form-inline dib l mr10">
						<label>模板名称：</label>
						<input type="text" class="form-control w180" id="tplName" placeholder="请输入模板名称" style="height: 30px;" value="33">
					</div>
	<!-- 				<div class="form-inline dib l dn" id="tplTypeChkBox">
						<p class="form-control-static"><b>模板类型：</b> <span>自定义装修</span></p>
					</div> -->
					<div class="text-left dib r">
						<span class="btn btn-default btn-md ml10 r" id="btnSaveConf" style="height: auto;"><i class="iconfont"></i> 保存装修</span>
					</div>
				</div>
				<div id="tplChkWrap"><div>
				
				

<!--S 操作区-->
<div class="ovh rel" id="mainwrapper">
    <div id="dragWrap" class="box-drag-wrap l">
        <!--S 模拟器-->
        <div class="phone_wrapper l mr10" id="phoneWrap">
            <div class="phone_simulator">
                <div class="phone_container" id="phoneContainer">
                    <!--编辑module时的遮罩-->
                    <div class="ui_overlay" style="width: 320px;z-index: 2; height: 1138px; display: none;"></div>
                    <!--S 视窗-->
                    <div class="viewport ui-sortable" id="shopview" style="min-height: 660px;">
                    
                    <div class="wx_mod ui-sortable-handle" modid="1000" id="m1000">
                            <div class="bd">
                                <div class="v3_shop_bar">
                                    <div class="v3_shop_header mui-flex">
                                        <div class="category_menu cell fixed">
                                            <span class="more category_menu_icon"></span>
                                        </div>
                                        <div class="mobile_search cell">
                                            <div class="m_search_wrap">
                                                <input type="text" name="" id="" class="search_input" placeholder="搜索店内商品">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="wx_mod ui-sortable-handle" modid="1011" id="m1011">
        	               <div class="title" style="padding: 10px; display: none;">店招模块</div>
        	               <div class="bd" style="display: block;">
        	               <a href="javascript:;" class="db"><img src="http://[::1]/yunjuke/application/admin/views/images/home_banner.jpg" class="wx-top-banner"></a>
        	               </div>
        	               </div><div class="wx_mod ui-sortable-handle" modid="1012" id="m1012">
        	               <div class="title" style="padding: 10px; display: none;">店铺信息模块</div>
        	               <div class="bd" style="display: block;">
        	               <div class="wx-shop-info">
        	               <div class="info-l">
        	               <img class="shop-logo" src="http://[::1]/yunjuke/application/admin/views/images/iconfont-stroe.png">
        	               <h2>射洪  品牌店 </h2>
        	               <p>导购 某某某 正在为您服务</p>
        	               </div>
        	               <div class="info-r">
        	               <span class="icon-yun shop-qrcode" style="display: block;"></span>
        	               </div>
        	               </div>
        	               </div>
        	               </div><div class="wx_mod sortable-item sortable-item" modtitle="文本" modid="1005" id="m1005">
                	               <div class="title" style="padding: 10px; display: none;">文本</div>
                	               <div class="bd" style="display: block;">
                	               <div class="shop_mod_text">
                	                      123
                	               </div>
                	               </div><div class="ui_mask_wrapper  newssave" style="">
                    <div class="ui_mask">
                        <a data-tag="removeBtn" href="javascript:;" class="btn_trash"><span><i class="icon_trash"></i>删除</span></a>
                        <a href="javascript:;" data-tag="editBtn" class="btn_edit"><span><i class="icon_pencil"></i>编辑</span></a>
                        <a href="javascript:;" data-tag="foldBtn" class="btn_fold"><span class="fold_up"><i class="icon_fold_up"></i>收起</span><span class="fold_down"><i class="icon_fold_down"></i>展开</span></a>
                    </div>
                </div></div> <div class="wx_mod sortable-item" modtitle="自定义代码" modid="1008" id="m1008">
	                            <div class="title" style="display: none;padding: 10px;">自定义代码</div>
                                <div class="bd">
                                    <div class="shop_mod_html">
                                        <div id="dragWrap" class="box-drag-wrap l" style="color:#797979;font-family:&quot;font-size:14px;background-color:#FFFFFF;">
                            	           <div id="zxShop" class="l rel">
                            		          <div class="form-group form-inline" id="chkViewBox">
                            			         <div class="checkbox checkbox-info dib mr10" style="vertical-align:middle;">
                            				        <span style="font-weight:700;background-color:white;font-family:&quot;font-size:14px;"><p><img src="/data/UEditor/upload/image/20170821/1503295312893339.jpg" title="1503295312893339.jpg" _src="/data/UEditor/upload/image/20170821/1503295312893339.jpg" alt="11.jpg"></p></span>
                            			         </div>
                            		          </div>
                            	           </div>
                                        </div>
                                    </div>
                                </div><div class="ui_mask_wrapper  newssave" style="">
                    <div class="ui_mask">
                        <a data-tag="removeBtn" href="javascript:;" class="btn_trash"><span><i class="icon_trash"></i>删除</span></a>
                        <a href="javascript:;" data-tag="editBtn" class="btn_edit"><span><i class="icon_pencil"></i>编辑</span></a>
                        <a href="javascript:;" data-tag="foldBtn" class="btn_fold"><span class="fold_up"><i class="icon_fold_up"></i>收起</span><span class="fold_down"><i class="icon_fold_down"></i>展开</span></a>
                    </div>
                </div></div><div class="wx_mod sortable-item sortable-item m1001-d844" modtitle="图片轮播" modid="1001" id="m1001">
        	                    <div class="title" style="display: none;padding: 10px;">轮播广告</div>
                                <div class="bd">
                                    <div class="swiper-container" style="height: 320px;">
                                        <div class="swiper-wrapper">
                                    <a href="http://www.jukeyunduan.com/vmall.php/index" class="swiper-slide">
                                      <div class="shop_slider_img" style="height:320px; background-image:url(http://[::1]/yunjuke/application/vmall/views/images/20170821140610599a785251614_storeDecoration.jpg)"></div>
                                    </a>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div><div class="ui_mask_wrapper  newssave" style="">
                    <div class="ui_mask">
                        <a data-tag="removeBtn" href="javascript:;" class="btn_trash"><span><i class="icon_trash"></i>删除</span></a>
                        <a href="javascript:;" data-tag="editBtn" class="btn_edit"><span><i class="icon_pencil"></i>编辑</span></a>
                        <a href="javascript:;" data-tag="foldBtn" class="btn_fold"><span class="fold_up"><i class="icon_fold_up"></i>收起</span><span class="fold_down"><i class="icon_fold_down"></i>展开</span></a>
                    </div>
                </div>
	                     </div>
    	
    <!-- /活动导航 -->
    <div id="wx_mod_replace">请拖拽模块到此处</div>

         <footer class="store_footer ui-state-disabled hide" id="storeFooter">
           <ul class="mui-flex list-unstyled">
             <li class="cell"><a href="javascript:;" class="store_ft_nav active">联系卖家</a></li>
             <li class="">|</li>
             <li class="cell"><a href="javascript:;" class="store_ft_nav">门店信息</a></li>
             <li class="">|</li>
             <li class="cell"><a href="javascript:;" class="store_ft_nav">个人中心</a></li>
           </ul>
         </footer><!-- /底部导航 -->
                    </div>
                    <!--E 视窗-->
                </div>
            </div>
        </div>
        <!--E 模拟器-->


        <!-- S 装修模块 -->
        <div id="zxShop" class="l rel" style="z-index: 100;">
            <div>
                <h4>显示设置</h4>
                <div class="form-group form-inline" id="chkViewBox">
                    <div class="checkbox checkbox-info dib mr10">
                        <input type="checkbox" name="show" id="chkIptSearch" value="m1000" checked="" >
                        <label for="chkIptSearch">搜索</label>
                    </div>
                    <div class="checkbox checkbox-info dib mr10">
                        <input type="checkbox" name="show" id="chkIptBanner" value="m1011" checked="">
                        <label for="chkIptBanner">店招</label>
                    </div>
                    <div class="checkbox checkbox-info dib mr10">
                        <input type="checkbox" name="show" id="chkIptInfo" value="m1012" checked="">
                        <label for="chkIptInfo">店铺信息</label>
                    </div>
                </div>
            </div>
            <div class="mb15">
                <h4>添加模块</h4>
                <p>请拖拽下列模块到预览区域</p>
            </div>
            <div class="mod mod_modules">
                <div class="mod_bd ovh" id="moduleList" style="width:380px">
                    <!-- <div class="mod_item mod_item10 ui-draggable" moduleid="1011"><a href="javascript:;">店招</a></div> -->
                    <!-- <div class="mod_item mod_item11 ui-draggable" moduleid="1012"><a href="javascript:;">店铺信息</a></div> -->
                    <div class="mod_item mod_item1 ui-draggable" moduleid="1001"><a href="javascript:;">轮播广告</a></div>
                    <div class="mod_item mod_item2 ui-draggable" moduleid="1002"><a href="javascript:;">通栏广告</a></div>
                    <div class="mod_item mod_item3 ui-draggable" moduleid="1003"><a href="javascript:;">两栏广告</a></div>
                    <div class="mod_item mod_item4 ui-draggable" moduleid="1004"><a href="javascript:;">商品推荐</a></div>
                    <div class="mod_item mod_item5 ui-draggable" moduleid="1005"><a href="javascript:;">文本</a></div>
                <!--     <div class="mod_item mod_item6 ui-draggable" moduleid="1006"><a href="javascript:;">活动导航</a></div> -->
                    <div class="mod_item mod_item9 ui-draggable" moduleid="1007"><a href="javascript:;">品牌导航</a></div>
                    <div class="mod_item mod_item8 ui-draggable" moduleid="1009"><a href="javascript:;">类目导航</a></div>
            <!--         <div class="mod_item mod_item12 ui-draggable" moduleid="1010"><a href="javascript:;">自定义分类导航</a></div> -->
                    <div class="mod_item mod_item7 ui-draggable" moduleid="1008"><a href="javascript:;">自定义区域</a></div>
                </div>
            </div>
        </div>
        <!-- E 装修模块 -->




     <div id="editWrap" class="box-edit-wrap l rel" >
	    
	    <!-- 轮播广告编辑界面 -->
	    <div class="ui_dialog_wrapper carousel trans " data-tag="carousel" id="me1001">
	        <div class="ui_dialog">
            <div class="ui_dialog_header rel">
                <h4>轮播广告设置</h4>
                <a class="ui_dialog_close" href="javascript:;" title="关闭">×</a>
            </div>
            <div class="ui_dialog_container">
                <div class="ui_form">
                    <div class="ui_form_row row_image_height">
                        <div class="row_title">选择图片高度</div>
                        <div class="row_content" id="carouselImgHheightSelectme1001-4f6e">
                            <div class="radio radio-primary dib">
                                <input type="radio" name="imgHeight" id="radio101" value="100">
                                <label for="radio101">100px</label>
                            </div> 
                            <div class="radio radio-primary dib">
                                <input type="radio" name="imgHeight" id="radio102" value="320" checked="">
                                <label for="radio102">320px</label>
                            </div> 
                            <div class="radio radio-primary dib">
                                <input type="radio" name="imgHeight" id="radio103" value="640">
                                <label for="radio103">640px</label>
                            </div>
                        </div>
                        <p class="text-muted">超出的部分将不展示</p>
                    </div>
                    <div class="ui_form_row">
                        <div class="row_title">添加图片</div>
                        <div class="row_content" id="carouselUploaderBoxme1001-4f6e">
                            <div class="mb10">
                                <a class="btn btn-primary btn-sm file_picker webuploader-container" href="javascript:;">
	                                <div class="webuploader-pick"><i class="iconfont"></i> 添加广告</div>
	                                <div id="rt_rt_1bklk8jrn40017im1a1216af1r461" style="position: absolute; top: 212px; left: 13px; width: 63px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
		                                <input type="file" name="file1001" typefile="1001"   id="typefile1001" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png" >
		                                <label for="typefile1001"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
	                                </div>
                                </a>
                                <span>
                                	<b class="text-warning n">最多添加 5 张广告图片</b> 
                                	<span class="text-muted">(图片尺寸：640×<span id="carousel-tips-heightme1001-4f6e">320</span>, 大小不大于1M, 类型：jpg/png)</span>
                                </span>
                            </div>
                            <table class="ui_table table">
                                <colgroup>
                                    <col class="pct10">
                                    <col class="pct30">
                                    <col class="pct45">
                                    <col class="pct15">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>排序值</th>
                                        <th>图片</th>
                                        <th>链接地址</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody id="carouselListTbdme1001-4f6e">

								</tbody>

                            </table>
                        </div>
                    </div>
     <!--                <div class="ui_form_row ">
                        <div class="row_title"><i class="icon_step">3</i>是否保留与下方模块的间隙</div>
                        <div class="row_content">
                            <div class="ui_select_checkbox">
                                <input type="checkbox" class="chk_ipt carousel-margin">
                                <label for="" class="chk_lab"> 有间隙</label>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="ui_dialog_footer hide mt20 text-center">
                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1001-4f6e">暂存</a>
            </div>
        </div>
	    </div>
	    
        <!-- 通栏广告编辑界面 -->
    	<div class="ui_dialog_wrapper fullcolumn trans" id="me1002">
        <div class="ui_dialog">
            <div class="ui_dialog_header rel">
                <h4>编辑通栏广告</h4>
                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
            </div>
            <div class="ui_dialog_container">
                <div class="ui_form">
                    <div class="ui_form_row">
                        <div class="row_title">图片设置</div>
                        <div class="row_content clearfix" id="onecolumnUploaderme1002-8ded">
                            <div class="ui_form_uploader">
                                <a href="javascript:;" class="file_picker btn btn-info btn-sm webuploader-container">
	                                <div class="webuploader-pick">选择图片</div>
		                            <div id="rt_rt_1bkbkf3fh19k4gbril71v181v5b7" style="position: absolute; top: 102px; left: 11px; width: 48px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
		                                <input type="file" name="file1002" typefile="1002"   id="typefile1002" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png">
		                                <label for="typefile1002"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
	                                </div>
                                </a>
                            </div>
                            <input type="hidden" name="imgUrl" class="uploader_resimg" value="https://qncdn.qiakr.com/qk_v3/fullcolumn.png">
                            <a class="select_img" href="javascript:;" style="width: 320px; display:block; ">
                                <img class="ui_image_preview"  src="https://qncdn.qiakr.com/qk_v3/fullcolumn.png" width="320" style="min-height: 50px;" data-tag="img-thumb">
                            </a>
                        </div>
                        <p class="ui_tip text-muted mt10">
                            图片尺寸：<span data-tag="allow-width">640</span> x <span data-tag="allow-height">320</span>, 大小不大于
                            1M, 类型：jpg/png
                        </p>
                    </div>
                    <div class="ui_form_row">
                        <div class="row_title">链接地址</div>
                        <div class="row_content clearfix" id="linkSltme1002-8ded">
                            <select name="imgLinkType" class="form-control input-sm w300" style="display: block; margin-bottom: 10px;" tabindex="-1" title="">
                                   <option value="1" selected="">微商城首页</option>
                                    <option value="2">个人中心</option>
                                    <option value="3">我的导购</option>
                                    <option value="4">我的订单</option>
                                    <option value="5">我的购物车</option>
                                    <option value="6">我的收藏</option>
                                    <option value="0" >自定义链接</option>
                            </select>
                            <input class="ui_form_text input_xlarge form-control input-sm w300" name="customerLinkUrl" type="text" placeholder="请输入图片的跳转链接，以http或https开头" style="display:none;width:400px;" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui_dialog_footer hide mt20 text-center">
                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1002-8ded">暂存</a>
            </div>
        </div>
    </div>
    
    
        <!-- 两栏广告编辑界面 -->
    	<div class="ui_dialog_wrapper twocolumn trans " id="me1003">
        <div class="ui_dialog" id="me1003-3545">
            <div class="ui_dialog_header rel">
                <h4>编辑两栏广告</h4>
                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
            </div>
            <div class="ui_dialog_container">
                <div class="ui_form">
                    <div class="ui_form_row clearfix">
                        <div class="row_title">左侧广告</div>
                        <div class="row_content" id="twocolumnLeftUploaderme1003-3545">
                            <div class="ui_form_uploader">
                                <a href="javascript:;" class="file_picker btn btn-info btn-sm webuploader-container">
	                                <div class="webuploader-pick">选择图片</div>
	                                <div id="rt_rt_1bkbkodab39761cp5n4071phta" style="position: absolute; top: 112px; left: 11px; width: 48px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
		                                <input type="file" name="file1003l" typefile="1003"  flag="left" id="typefile1003l" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png">
		                                <label for="typefile1003l"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
	                                </div>
                                </a>
                            </div>
                            <a href="javascript:;" class="select_img">
                            	<img class="ui_image_preview  1003left" src="https://qncdn.qiakr.com/qk_v3/left.png" width="96" height="96">
                            </a>
                            <input type="hidden" name="leftImgUrl" class="uploader_resimg form-control input-sm" value="https://qncdn.qiakr.com/qk_v3/left.png">
                            <span class="twocolumn-linkme1003-3545 dib  dibleft">
	                              <select name="imgLinkType" class="form-control input-sm w300" style="display: block; margin-bottom: 10px;" tabindex="-1" title="">
                                     <option value="1" selected="">微商城首页</option>
                                    <option value="2">个人中心</option>
                                    <option value="3">我的导购</option>
                                    <option value="4">我的订单</option>
                                    <option value="5">我的购物车</option>
                                    <option value="6">我的收藏</option>
                                    <option value="0" >自定义链接</option>
                                </select>
                                <input class="ui_form_text form-control input-sm dib w300" name="customerLinkUrl" type="text" placeholder="请输入图片的跳转链接，以http或https开头" style="display:none" value="">
                            </span>
                            <p class="ui_tip text-muted">图片类型为jpg/jpeg/png，建议图片宽度320px,大小不大于1M</p>
                        </div>
                    </div>
                    <div class="ui_form_row clearfix">
                        <div class="row_title">右侧广告</div>
                        <div class="row_content" id="twocolumnRightUploaderme1003-3545">
                            <div class="ui_form_uploader">
                                <a href="javascript:;" class="file_picker btn btn-info btn-sm webuploader-container">
	                                <div class="webuploader-pick">选择图片</div>
		                            <div id="rt_rt_1bkbkodab15b01ucc1ak51q1q1fb5d" style="position: absolute; top: 41%; left: 11px; width: 48px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
		                                <input type="file" name="file1003r" typefile="1003"  flag="right" id="typefile1003r" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png">
		                                <label for="typefile1003r"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
	                                </div>
                                </a>
                            </div>
                            <a href="javascript:;" class="select_img">
                            	<img class="ui_image_preview 1003right"  src="https://qncdn.qiakr.com/qk_v3/right.png" width="96" height="96">
                            </a>
                            <input type="hidden" name="rightImgUrl" class="uploader_resimg form-control input-sm" value="https://qncdn.qiakr.com/qk_v3/right.png">
                            <span class="twocolumn-linkme1003-3545 dib dibright">
	                              <select name="imgLinkType" class="form-control input-sm w300" style="display: block; margin-bottom: 10px;" tabindex="-1" title="">
                                    <option value="1" selected="">微商城首页</option>
                                    <option value="2">个人中心</option>
                                    <option value="3">我的导购</option>
                                    <option value="4">我的订单</option>
                                    <option value="5">我的购物车</option>
                                    <option value="6">我的收藏</option>
                                    <option value="0" >自定义链接</option>
                                </select>
                                <input class="ui_form_text form-control input-sm dib w300" name="customerLinkUrl" type="text" placeholder="请输入图片的跳转链接，以http或https开头" style="display:none" value="">
                            </span>
                            <p class="ui_tip text-muted">图片类型为jpg/jpeg/png，建议图片宽度320px,大小不大于1M</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui_dialog_footer hide mt20 text-center">
                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1003-3545">暂存</a>
            </div>
        </div>
    </div>
    
    
        <!-- 商品推荐编辑界面 -->
        <div class="ui_dialog_wrapper recommendcommod trans " id="me1004">
        <div class="ui_dialog">
            <div class="ui_dialog_header rel rel">
                <h4>商品推荐设置</h4>
                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="closeBtn">×</a>
            </div>
            <div class="ui_dialog_container">
                <div class="ui_form" data-tag="maincontent">

                    <div class="ui_form_row row_recommend_way" id="recommendWayme1004-70cc">
                        <div class="row_title">推荐方式</div>
                        <div class="row_content">
                            <div class="radio radio-info dib">
                                <input type="radio" name="autoRecommend" id="radio121" checked="" value="auto">
                                <label for="radio121"> 自动推荐</label>
                            </div> 
                            <div class="radio radio-info dib">
                                <input type="radio" name="autoRecommend" id="radio122">
                                <label for="radio122">手动推荐</label>
                            </div>
                        </div>
                    </div>

                    <div id="autoRecSettingsme1004" class="auto-rec-setting">
                        <form class="form mt10">
                            <div class="form-group form-inline">
                                <label class="w100 text-right">商品类别：</label>
                                
                                    <div id="sltShowTypeme1004-70cc" class="dib">
                                        <div class="radio radio-info dib">
                                            <input id="radio11" type="radio" name="showListType" checked="" value="category">
                                            <label for="radio11">按类目</label>
                                        </div> 
                                        <div class="radio radio-info dib">
                                            <input id="radio11x" type="radio" name="showListType" value="group">
                                            <label for="radio11x">按自定义分类</label>
                                        </div> 
                                        <div class="radio radio-info dib">
                                            <input id="radio12" type="radio" name="showListType" value="brand">
                                            <label for="radio12">  按品牌</label>
                                        </div> 
                                        <div class="radio radio-info dib radio-info_divs">
                                            <input id="radio13" type="radio" name="showListType" value="new">
                                            <label for="radio13"> 按新品</label>
                                        </div> 
                                        <div class="radio radio-info dib radio-info_divs">
                                            <input id="radio14" type="radio" name="showListType" value="offer">
                                            <label for="radio14"> 按特价</label>
                                        </div>
                                    </div>
                                    <div class="mt10  div_select" style="margin-left: 104px;">
                                        <select name="categorySlt" class="form-control input-sm  w200" id="sltCategoryme1004-70cc">
                                            <option value='100106' >精品童装</option><option value='100110' >童衣</option><option value='100114' >儿童T恤</option><option value='100115' >儿童外套</option><option value='100116' >儿童衬衫</option><option value='100117' >儿童裙子</option><option value='100118' >儿童背心</option><option value='100137' >儿童哈衣</option><option value='100138' >儿童家居服</option><option value='100139' >儿童羽绒服</option><option value='100140' >儿童棉服</option><option value='100141' >儿童针织衫</option><option value='100142' >儿童套装</option><option value='100111' >童裤</option><option value='100119' >儿童长裤</option><option value='100120' >儿童短裤</option><option value='100121' >儿童打底裤</option><option value='100112' >童鞋</option><option value='100122' >儿童运动鞋</option><option value='100123' >儿童帆布鞋</option><option value='100124' >儿童皮鞋</option><option value='100125' >儿童凉鞋</option><option value='100126' >儿童雨鞋</option><option value='100127' >学步鞋</option><option value='100113' >儿童配件</option><option value='100128' >儿童帽子</option><option value='100129' >儿童袜子</option><option value='100130' >儿童书包</option><option value='100131' >其他配饰</option><option value='100107' >母婴类</option><option value='100108' >运动服饰</option><option value='100109' >男装女装</option><option value='100132' >上衣</option><option value='100135' >羽绒服</option><option value='100136' >大衣</option><option value='100133' >裤子</option><option value='100134' >鞋子</option>                                        </select>
                                        <select name="groupSlt" class="form-control input-sm hide w200" id="sltGroupme1004-70cc">
                                            <option value='100106' >精品童装</option><option value='100110' >童衣</option><option value='100114' >儿童T恤</option><option value='100115' >儿童外套</option><option value='100116' >儿童衬衫</option><option value='100117' >儿童裙子</option><option value='100118' >儿童背心</option><option value='100137' >儿童哈衣</option><option value='100138' >儿童家居服</option><option value='100139' >儿童羽绒服</option><option value='100140' >儿童棉服</option><option value='100141' >儿童针织衫</option><option value='100142' >儿童套装</option><option value='100111' >童裤</option><option value='100119' >儿童长裤</option><option value='100120' >儿童短裤</option><option value='100121' >儿童打底裤</option><option value='100112' >童鞋</option><option value='100122' >儿童运动鞋</option><option value='100123' >儿童帆布鞋</option><option value='100124' >儿童皮鞋</option><option value='100125' >儿童凉鞋</option><option value='100126' >儿童雨鞋</option><option value='100127' >学步鞋</option><option value='100113' >儿童配件</option><option value='100128' >儿童帽子</option><option value='100129' >儿童袜子</option><option value='100130' >儿童书包</option><option value='100131' >其他配饰</option><option value='100107' >母婴类</option><option value='100108' >运动服饰</option><option value='100109' >男装女装</option><option value='100132' >上衣</option><option value='100135' >羽绒服</option><option value='100136' >大衣</option><option value='100133' >裤子</option><option value='100134' >鞋子</option>                                        </select>
                                        
                                        <select name="brandSlt" class="form-control input-sm hide w200" id="sltBrandme1004-70cc">
                                            <option value='378' >ABC KIDS</option><option value='389' >艾勒蓓力</option><option value='377' >公主安娜</option><option value='387' >米朵贝尔</option><option value='380' >妮可贝贝</option><option value='385' >企鹅仔仔</option><option value='386' >雅鹿</option><option value='388' >伊诺艾儿</option><option value='376' >植木西</option>                                        </select>
                                        
                                    </div>
                                
                            </div>
                            <div class="form-group form-inline">
                                <label class="w100 text-right">关键字筛选：</label>
                                <input class="ui_form_text form-control w200" name="keywords" type="text" placeholder="请输入商品名称关键字" value="">
                                [选填]
                            </div>
                            <div class="form-group form-inline">
                                <label class="w100 text-right">商品个数：</label>
                                <select name="limitNum" class="form-control input-sm w200">
                                    
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="8">8</option>
                                        <option value="10" selected="">10</option>
                                    
                                </select>
                            </div>
                            <div class="form-group form-inline">
                                <label class="w100 text-right">排序方式：</label>
                                <select name="orderType" class="form-control input-sm w200">
                                    
                                    <option value="0" selectedselected="">新上架的商品排前</option>
                                    <option value="1">价格由高到低</option>
                                    <option value="2">价格由低到高</option>
                                    <option value="3">销量由高到低</option>
                                    <option value="4">销量由低到高</option>
                                    
                                </select>
                            </div>
                        </form>
                    </div><!-- /自动推荐 -->

                    <div id="handleRecSettingsme1004" class="hide">
                        <div class="form-group form-inline">
                            <label class="text-right w100">模块标题：</label>
                            
                            <input class="ui_form_text form-control w200" type="text" placeholder="商品推荐" maxlength="8" name="recTitle" value="">
                            

                            <div class="checkbox checkbox-info dib">
                                <input id="checkbox41" type="checkbox"  name="hasTitle">
                                <label for="checkbox41">  显示模块标题</label>
                            </div>
                        </div>

                        <div class="ui_form_row handle-rec-box" style="width:600px;">
                            <div class="left bdr-r">
                                <div class="actions">
                                    <div class="form-group form-inline mb0">
                                        <label>关键字：</label>
                                        <div class="input-group w180">
                                          <input type="text" class="form-control input-sm" placeholder="请输入商品名或款号" id="keywordme1004-70cc">
                                          <span class="input-group-addon btn btn-primary btn-sm" id="searchProsme1004-70cc">搜索</span>
                                        </div>
                                    </div>
                                </div>
                                <table class="ui_table table table-condensed pct100">
                                    <thead>
                                        <tr>
                                            <th>商品信息</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody class="choose-rec-pro" id="proRecTbdme1004-70cc">
                        
                                    </tbody>
                                </table>
                                <!-- 分页 -->
                                <div class="page-nav">
                                    <nav>
                                        <ul class="pagination" id="navgationme1004-70cc"></ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="right" style="height: 550px;overflow: auto;margin-left: 5px;">
                                <div style="height: 45px; line-height: 40px; padding-left: 10px; background-color: #E3F3FF; font-size: 14px;"> 已推荐的商品</div>
                                <table class="ui_table table table-condensed pct100">
                                    <thead>
                                        <tr>
                                            <th style="width:30px;"></th>
                                            <th>商品信息</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody class="choose-rec-pro" id="proRecResTbdme1004-70cc">
                                    
                                        
                                    
                                    </tbody>
                                </table>
                                <div>
                                <div class="pl10 pr10">
                                    <span class="text-muted">您还可以推荐 <b class="remainRec text-warning">10</b> 件商品，已推荐 <b class="selectedRec text-success">0</b> 件商品 </span><br>
                                    <span class="text-warning">(注：已上架微商城的商品才会在手机端显示！)</span></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /手动推荐 -->
                </div>
            </div>
            <div class="ui_dialog_footer hide mt20 text-center">
                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1004-70cc">暂存</a>
            </div>
        </div>
    </div>
    
        
        <!-- 文本编辑界面 -->
	    <div class="ui_dialog_wrapper text trans" id="me1005">
	        <div class="ui_dialog">
	            <div class="ui_dialog_header rel">
	                <h4>文本设置</h4>
	                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
	            </div>
	            <div class="ui_dialog_container">
	                <div class="ui_form">
	                    <div class="ui_form_row">
	                        <div class="row_title">文本内容</div>
	                        <div class="row_content">
	                            <span><textarea class="ui_form_text form-control charcount" row="5" col="10" id="textModContentme1005-f105" maxlength="500"></textarea><span class="charcount-display charcount-position-after">还可以输入500字</span></span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="ui_dialog_footer hide mt20 text-center">
	                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1005-f105">暂存</a>
	            </div>
	        </div>
	    </div>
	    
	    <!-- 活动导航编辑界面 -->
<!-- 	    <div class="ui_dialog_wrapper activitynavigation trans" id="me1006">
	        <div class="ui_dialog">
	            <div class="ui_dialog_header rel">
	                <h4>编辑活动导航</h4>
	                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
	            </div>
	            <div class="ui_dialog_container">
	                <div class="ui_form">
	                    <div class="ui_form_row">
	                        <div class="row_title">活动显示和隐藏</div>
	                        <div class="row_content">
	                            <div class="ui_checkbox_group">
	                                <div class="checkbox checkbox-info dib mr10" style="margin-top: -5px;">
	                                    <input type="checkbox" name="hasCoupon" id="radio111" >
	                                    <label for="radio111">优惠券</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib mr10">
	                                    <input type="checkbox" name="hasMiaosha" id="radio112" >
	                                    <label for="radio112">秒杀</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib mr10">
	                                    <input type="checkbox" name="hasNewhot" id="radio114" >
	                                    <label for="radio114">上新</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib">
	                                    <input type="checkbox" name="hasClass" id="radio116" >
	                                    <label for="radio116">分类</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib mr10">
	                                    <input type="checkbox" name="hasHongbao" id="radio113" >
	                                    <label for="radio113">抢红包</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib">
	                                    <input type="checkbox" name="appointment" id="radio115" >
	                                    <label for="radio115">预约</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib">
	                                    <input type="checkbox" name="hasSign" id="radio117" >
	                                    <label for="radio117">签到</label>
	                                </div>
	                                <div class="checkbox checkbox-info dib">
	                                    <input type="checkbox" name="hasExchange" id="radio118" >
	                                    <label for="radio118">积分兑换</label>
	                                </div>
	                                                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="ui_dialog_footer hide mt20 text-center">
	                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1006-3926">暂存</a>
	            </div>
	        </div>
	    </div> -->
	    
	    <!-- 品牌导航编辑界面 -->
	    <div class="ui_dialog_wrapper brandnavigation trans " id="me1007">
	        <div class="ui_dialog">
	            <div class="ui_dialog_header rel">
	                <h4>品牌导航设置</h4>
	                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
	            </div>
	            <div class="ui_dialog_container">
	                <div class="ui_form">
	                    <div class="ui_form_row">
	                        <div class="row_title">标题设置</div>
	                        <div class="form-group form-inline">
	                            <span><input class="ui_form_text form-control input-sm w200 charcount" type="text" placeholder="品牌精选" id="brandnavigationme1007" name="modTitle" value="" maxlength="8"><span class="charcount-display charcount-position-after">还可以输入8字</span></span>
	                        </div>
	                    </div>
	                    <div class="ui_form_row">
	                        <div class="row_title">图片设置</div>
	                        <div class="row_content" id="brandnavigationUploaderme1007-09d5">
	                            <div class="mb10">
	                                <a class="btn btn-info btn-sm file_picker webuploader-container" href="javascript:;">
		                                <div class="webuploader-pick" typefile="1007"   id="typefile1007">
		                                	<i class="iconfont" ></i> 添加品牌
		                                </div>
		                           <!--      <div id="rt_rt_1bkble2f154lnh7gf7tc1jp31" style="position: absolute; top: 30%; left: 10px; width: 98px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
		                                	<input type="file" name="file1007" typefile="1007"   id="typefile1007" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png">
		                                   <label for="typefile1007"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
		                                </div> -->
		                            </a>
	                                <!-- <span class="text-muted">(图片尺寸：120 × 120, 大小不大于1M, 类型为jpg/png)</span> -->
	                            </div>
	                            <table class="ui_table table">
	                                <thead>
	                                    <tr>
	                                        <th style="width: 50px;">顺序</th>
	                                        <!-- <th style="width: 85px;">选择图片</th> -->
	                                        <th>选择品牌</th>
	                                        <th style="width: 105px;">操作</th>
	                                    </tr>
	                                </thead>
	                                <tbody id="brandListTbdme1007-09d5">

	    </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="ui_dialog_footer hide mt20 text-center">
	                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1007-09d5">暂存</a>
	            </div>
	        </div>
	    </div>
	    
	    <!-- 类目导航编辑界面 -->
		<div class="ui_dialog_wrapper categoryNav trans " id="me1009">
		        <div class="ui_dialog">
		            <div class="ui_dialog_header rel">
		                <h4>类目导航设置</h4>
		                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
		            </div>
		            <div class="ui_dialog_container">
		                <div class="ui_form">
		                    <div class="ui_form_row">
		                        <div class="row_title">标题设置</div>
		                        <div class="form-group form-inline">
		                            <span><input class="ui_form_text form-control input-sm w200 charcount  form-group_ui_form_row" ids ="1009" type="text" placeholder="主题街" name="modTitle" value="" maxlength="8"><span class="charcount-display charcount-position-after">还可以输入8字</span></span>
		                        </div>
		                    </div>
		                    <div class="ui_form_row">
		                        <div class="row_title">图片设置</div>
		                        <div class="row_content" id="categoryNavUploaderme1009-1485">
		                            <div class="mb10">
		                                <a class="btn btn-info btn-sm file_picker webuploader-container" href="javascript:;">
			                                <div class="webuploader-pick"><i class="iconfont"></i> 添加图片</div>
			                                <div id="rt_rt_1bkdco54hkk71l7qe481rpjb7g1" style="position: absolute; top: 30%; left: 10px; width: 63px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
				                                <input type="file" name="file1009" typefile="1009"   id="typefile1009" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png">
		                                        <label for="typefile1009"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
			                                </div>
		                                </a>
		                                <span class="text-muted">(图片尺寸为120 × 120, 大小不大于1M, 类型为jpg/png)</span>
		                            </div>
		                            <table class="ui_table  table">
		                                <thead>
		                                    <tr>
		                                        <th style="width: 50px;">顺序</th>
		                                        <th style="width: 85px;">选择图片</th>
		                                        <th>选择类目</th>
		                                        <th>主题名称</th>
		                                        <th style="width: 105px;">操作</th>
		                                    </tr>
		                                </thead>
		                                <tbody id="categoryListTblme1009-1485">
		   
		   
		   
		   </tbody>
		                            </table>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="ui_dialog_footer hide mt20 text-center">
		                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1009-1485">暂存</a>
		            </div>
		        </div>
		    </div>
	    
	    <!-- 自定义分类导航编辑界面 
	    <div class="ui_dialog_wrapper groupNav trans " id="me1010">
	        <div class="ui_dialog">
	            <div class="ui_dialog_header rel">
	                <h4>自定义分类导航设置</h4>
	                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
	            </div>
	            <div class="ui_dialog_container">
	                <div class="ui_form">
	                    <div class="ui_form_row">
	                        <div class="row_title">标题设置</div>
	                        <div class="form-group form-inline">
	                            <span><input class="ui_form_text form-control input-sm w200 charcount  form-group_ui_form_row"  ids ="1010" type="text" placeholder="有特色" name="modTitle" value="" maxlength="8"><span class="charcount-display charcount-position-after">还可以输入8字</span></span>
	                        </div>
	                    </div>
	                    <div class="ui_form_row">
	                        <p class="text-muted hide">暂无分类数据</p>
	                        <div class="row_title">图片设置</div>
	                        <div class="row_content" id="groupNavUploaderme1010-58c9">
	                            <div class="mb10">
	                                <a class="btn btn-info btn-sm file_picker webuploader-container" href="javascript:;">
		                                <div class="webuploader-pick"><i class="iconfont"></i> 添加图片</div>
		                                <div id="rt_rt_1bkblom6mgc51adpsgeau82nl1" style="position: absolute; top:30%; left: 10px; width: 63px; height: 14px; overflow: hidden; bottom: auto; right: auto;">
			                                 <input type="file" name="file1010" typefile="1010"   id="typefile1010" class="typefile webuploader-element-invisible" accept="image/jpg,image/jpeg,image/png">
		                                     <label for="typefile1010"  style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
		                                </div>
	                                </a>
	                                <span class="text-muted">(图片尺寸为150 × 150, 大小不大于1M, 类型为jpg/png)</span>
	                            </div>
	                            <table class="ui_table  table">
	                                <thead>
	                                    <tr>
	                                        <th class="pct10">顺序</th>
	                                        <th class="pct20">选择图片</th>
	                                        <th class="pct30">选择分类</th>
	                                        <th class="pct30">显示名称</th>
	                                        <th class="pct10">操作</th>
	                                    </tr>
	                                </thead>
	                                <tbody id="groupListTblme1010-58c9">
	                                
	                               </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="ui_dialog_footer hide mt20 text-center">
	                <a href="javascript:;" class="btn btn-primary btn-md" data-tag="save" data-id="me1010-58c9">暂存</a>
	            </div>
	        </div>
	    </div>
	    -->
	    
	    <!-- 自定义编辑界面 -->
	    <div class="ui_dialog_wrapper custom_module trans " id="me1008">
	        <div class="ui_dialog">
	            <div class="ui_dialog_header rel">
	                <h4>自定义内容</h4>
	                <a class="ui_dialog_close" href="javascript:;" title="关闭" data-tag="close">×</a>
	            </div>
	            <div class="ui_dialog_container">
	                <div class="ui_form">
	                    <div class="ui_form_row">
	                        <div class="row_title">HTML自定义内容</div>
	                        <div class="row_content">
                            	<textarea type="text/plain" class="ui_form_text" id="customEditorme1008" style="height:420px; width:95%;"></textarea>
                                    <!-- 实例化编辑器 -->
                                    <script type="text/javascript">
                                        var appcontent = UE.getEditor('customEditorme1008');
                                    </script>
                            </div>
	                        <div class="row_content">
	                            <p class="text-muted mt10 f12">注：代码有风险，编辑需谨慎。</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="ui_dialog_footer mt20 text-center">
	                <a href="javascript:;" class="btn btn-primary btn-md" id="btn-primaryme1008"data-tag="save" data-id="me1008-ddd5">暂存</a>
	            </div>
	        </div>
	    </div>

    
    </div>
    

    
















        
        <div id="shopPreView" class="l ml20" style="padding-left: 61.5px;">
            <div class="mb15">
                <h4>店铺预览</h4>
                <p>扫描二维码进行预览</p>
            </div>
            <div class="qrcode" id="qrcodeImg">
                <div class="tc fix">
                    <div id="QrCodeImg" title=""><canvas width="120" height="120" style="display: none;"></canvas><img alt="Scan me!" src="" style="display: block;"></div>
                </div>
            </div>
        </div>
    </div>




   
    
    
    
    
    
</div>
<!--S 操作区-->




					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--ms-include-end-->
		</div>


		<div id="goTop">
			<a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
			<a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
		</div>
	</body>
	<script type="text/javascript" src="http://[::1]/yunjuke/application/admin/views/js/juke-decoration.js"></script>
	
	</html><?php }
}
