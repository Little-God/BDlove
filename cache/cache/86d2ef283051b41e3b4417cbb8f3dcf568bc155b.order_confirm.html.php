<?php
/* Smarty version 3.1.29, created on 2017-10-17 10:24:55
  from "D:\www\yunjuke\application\vmall\views\order_confirm.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59e569f7e75fb0_55523316',
  'file_dependency' => 
  array (
    '86d2ef283051b41e3b4417cbb8f3dcf568bc155b' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\vmall\\views\\order_confirm.html',
      1 => 1508206587,
      2 => 'file',
    ),
    '5cea575055325e574f9e509e31fe0032e5018982' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\vmall\\views\\lib\\Hlink.html',
      1 => 1505370736,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_59e569f7e75fb0_55523316 ($_smarty_tpl) {
?>
<html lang="zh-cn" style="opacity: 1; font-size: 200px;" class="view6s"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="full-screen" content="yes">
<link href="favicon.ico" rel="shortcut icon" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link rel="Bookmark" href="favicon.ico" />
<meta content="成都云聚客科技有限公司" name="author" />
<meta content="Copyright 1999-2017. www.jukeyunduan.cn . All Rights Reserved." name="copyright" />
<meta name="application-name" content="云聚客" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" href="http://[::1]/yunjuke//favicon.ico">
<link href="http://[::1]/yunjuke/application/vmall/views/css/weui.css" rel="stylesheet" type="text/css">
<link href="http://[::1]/yunjuke/application/vmall/views/css/style.css" rel="stylesheet" type="text/css">

<script>
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








</script>
    <head>
        <title>确认订单</title>
        <link rel="stylesheet" href="http://[::1]/yunjuke/application/vmall/views/css/weui1.css">
        <link rel="stylesheet" href="http://[::1]/yunjuke/application/vmall/views/css/example.css">
        <link rel="stylesheet" href="http://[::1]/yunjuke/application/vmall/views/css/LArea.css">
    </head>
    <style>
        #show-edit{
            color: red;
            line-height: 50px;
        }
        .paySubmit{background:#f44336;color: #fff;}
        .cancelSubmit{background:#ccc;}
        .addres{
            color: #979797;
        }
        .weui-tabbar{
            z-index: inherit;
        }
        .weui-cells:before{z-index:0}
        .weui-cell:before{z-index:0}
        .weui-cells:after{z-index:0}

        .content{
             padding:.13rem;
         }
        .money{
            background: url("http://[::1]/yunjuke/application/vmall/views/images/coupon_money.png");
            height:.84rem;
            background-size: 100% 100%;
            color: #fff7bb;
            position: relative;
            margin-bottom: .05rem;

        }
        .reduce{
            background: url("http://[::1]/yunjuke/application/vmall/views/images/coupon_reduce.png");
            height:.84rem;
            background-size: 100% 100%;
            color: #fff7bb;
            position: relative;
            margin-bottom: .05rem;
        }
        .sale{
            background: url("http://[::1]/yunjuke/application/vmall/views/images/coupon_sale.png");
            width:100%;
            height:.84rem;
            background-size: 100% 100%;
            color: #fff7bb;
            position: relative;
            margin-bottom: .05rem;
        }
        .store_name{
            margin-left:.1rem;
            font-size: .12rem;
            padding-top:.05rem;
        }
        .coupon_text{
            text-align: center;
            font-size: .14rem;
        }
        .coupon_text span{
            font-size: .24rem;
        }
        .coupon_bottom{
            height:.18rem;
            display: flex;
            width:100%;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: 0.07rem;
        }
        .coupon_time{
            font-weight: 200;
            font-size: .105rem;
            margin-left:.1rem;
        }
        .coupon_bottom a{
            color: #fff7bb;
            margin-right:.1rem;
        }
        .goods_img{
            width:.32rem;
            height:.32rem;
            border-radius: 50%;
            margin-bottom: .1rem;
            margin-left: .15rem;
        }
        #coup .weui-icon-checked:before{
            color: #fff!important;
            font-size: 14px!important;
            background: #ff5600;
            border-radius: 50%;
            width: .18rem;
            height: .18rem;
            text-align: center;
            line-height: .18rem;
        }
        #coup .weui-cell__ft{
            position: absolute;
            top:.41rem;
            right:.38rem;
        }
        .rad{
            position: absolute;
            top:.41rem;
            right:.41rem;
            border-radius: 50%;
            width: .16rem;
            height: .16rem;
            border:1px solid #fff;
        }
        .sure_confirm{
            position: absolute;
            bottom: 0;
            width:100%;
            height:.5rem;
            background:#ff5001;
            color: #fff;
            line-height: .5rem;
            font-size: .16rem;
            text-align: center;
        }
        .no_use .weui-cell__ft{
            top:.1rem!important;
        }
        #coup .weui-picker__bd{
            height:2.7rem;
            margin-bottom: .4rem;
        }
        .weui-picker__bd .weui-picker__hd:after{
            border:none;
        }
        .weui-picker__bd .weui-cells{
            margin-top: 0;
        }
        .weui-picker__bd .weui-cells:before{
            border:none;
        }
        .mask{
            position: fixed;
            top:0;
            left:0;
            right:0;
            bottom: 0;
            background: #000;
            opacity: .5;
            z-index: 99999;
        }
        .icc.weui-cells:after,.icc.weui-cells:before{
            border:none;
        }
        .showPicker{
            padding:0 .1rem;
            margin:0 .2rem .15rem .6rem;
            color:#53bded!important;
            font-size: .15rem;
            background:#f1f2f6;
        }
    </style>
<body ontouchstart>
<form method="post" action="post_order" id="formSubmit">
    <input type="hidden" name="goods" id="postGoods" value=""/>
    <input type="hidden" name="goods_price" id="postGoodsPrice" value=""/>
    <input type="hidden" name="order_price" id="postOrderPrice" value=""/>
    <input type="hidden" name="shipType" id="shipType" value="1"/>
    <input type="hidden" name="coupon_source" id="coupon_source" value="coupon"/>
    <input type="hidden" name="orderPostCode" id="orderPostCode" value="8057"/>
    <div class="weui-tab">
        <div class="weui-tab__panel">
            <div class="weui-cells" style="margin-top: 0">
                <a class="weui-cell weui-cell_access" href="javascript:;">
                    <div class="weui-cell__bd weui-cell__primary">
                        <div id="show">
                                                        <p>李 18384148955 <span class="weui-btn weui-btn_mini weui-btn_warn" style="line-height: 18px;padding: 0 5px">默认</span></p>
                            <p class="addres">四川省,成都市,青羊区口头</p>
                                                    </div>
                    </div>
                    <div class="weui-cell__ft">
                    </div>
                    <input type="hidden" name="address" id="reciveAddr" value="16"/>
                </a>
            </div>
                        <div class="mask" style="display: none"></div>
            <div class="weui-cells goods-cells">
                <input type="hidden" class="goods_coupon_id" name="goods_coupon[311318]"  value=""/>
                <input type="hidden" class="goods_pay_price" name="goods_pay_price[311318]"  value=""/>
                <input type="hidden" class="goods_coupon_amount" name="coupon_amount[311318]"  value=""/>
                <input type="hidden" class="promotions_id" name="promotions_id[311318]"  value=""/>
                <input type="hidden" class="activity_type" name="activity_type[311318]"  value=""/>
                <input type="hidden" class="user_coupon_id" name="user_coupon_id[311318]"  value=""/>
                <input type="hidden" class="coupon_list" name="coupon_list[311318]"  value=""/>
                <div class="weui-cell">
                    <div class="weui-cell__hd">
                        <img src="http://www.juketz.com/data/shop/album_pic/1_201710091616076.jpg"  onerror="javascript:this.src='http://[::1]/yunjuke/data/images/default_goods_image.jpg'" alt="mygoods" style="width: 40px;margin-right: 5px;display: block;">
                    </div>
                    <div class="weui-cell__bd">
                        <p>AE15软壳外套</p>
                        <p style="color: #8A8586;">S/红色</p>
                    </div>
                    <div class="weui-cell__ft">
                        <p>￥0.01</p>
                        <p>x1</p>
                    </div>
                </div>
                                                <div class="weui-cells icc" style="margin-top: 0;">
                    <a class="weui-cell weui-cell_access showPicker" href="javascript:;" >
                        <div class="weui-cell__bd weui-cell__primary">
                            <p class="choose">有优惠劵可用：点击选择</p>
                        </div>
                        <div class="weui-cell__ft">
                        </div>
                    </a>
                </div>
                                                <!--优惠方式弹出选择框-->
                <div class="weui-picker weui-animate-slide-up coupon" id="coup" style="display:none;z-index: 999999">
                    <div class="weui-picker__hd" style="font-size: .14rem;justify-content: center">
                        <!--<a href="javascript:;" data-action="acncel" class="weui-picker__action couponcancel" >取消</a>-->
                        <!--<a href="javascript:;" data-action="select" class="weui-picker__action weui-picker-confirm" >确定</a>-->
                        店铺优惠
                    </div>
                    <div class="weui-picker__bd">
                        <div class="weui-cells weui-cells_radio" style="overflow-y: scroll;width: 100%;">
                                                      
                                                        
                            <label for="257851_362" class="weui-cell weui-check__label 257851_362">
                                <input type="hidden" class="coupon_id" name="coupon_id"  value="17"/>
                                <input type="hidden" class="c_activity_id" name="c_activity_id"  value="16"/>
                                <input type="hidden" class="c_activity_type" name="c_activity_id"  value="5"/>
                                <input type="hidden" class="user_coupon_id" name="user_coupon_id"  value="362"/>
                                <input type="hidden" class="user_coupon_list" name="user_coupon_list"  value="362"/>
                                <div class="sale">
                                    
                                    <input class="prize_type" type="hidden" value="1">                                    <div class="store_name">探路者旗舰店铺</div>
                                    <p class="coupon_text"><span class="text_money">7折全球最低</span>折扣券<img class="goods_img" src="http://www.juketz.com/data/shop/album_pic/1_201710091616076.jpg" alt=""><span class="num"></span>
                                    </p>
                                    <div class="coupon_bottom">
                                        <p class="coupon_time">有效期：10-04 00:00-10-31 00:00</p>
                                    </div>
                                </div>
                                <div class="rad"></div>
                                <!--<p>7折优惠券&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;20</p>-->
                                <div class="weui-cell__ft">
                                    <input type="radio" class="weui-check" id="257851_362" name="257851" value="0.70"/>                                    <span class="weui-icon-checked"></span>
                                    <span class="label_remove" style="display:none">362</span>
                                </div>
                            </label>
                            
                                                        <label for="257851_0" class="weui-cell weui-check__label no_use">
                                <input type="hidden" class="coupon_id" name="coupon_id"  value=""/>
                                <input type="hidden" class="c_activity_id" name="c_activity_id"  value=""/>
                                <input type="hidden" class="c_activity_type" name="c_activity_id"  value=""/>
                                <input type="hidden" class="user_coupon_id" name="user_coupon_id"  value=""/>


                                <input class="prize_type" type="hidden" value="">
                                <div class="store_name"></div>
                                <p class="coupon_text"><a class="text_money">不使用优惠券</a></p>
                                <div class="rad" style="top: .1rem;border: 1px solid #a0a7b1;right: .41rem;"></div>

                                <!--<p>7折优惠券&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;20</p>-->
                                <div class="weui-cell__ft">
                                    <input type="radio" class="weui-check" id="257851_0" name="257851" value=""/>
                                    <span class="weui-icon-checked"></span>
                                    <span class="label_remove" style="display:none"></span>
                                </div>
                            </label>
                                                    </div>
                    </div>
                    <div class="sure_confirm weui-picker-confirm">确定</div>
                </div>
                <div class="weui-cell">
                    <div class="weui-cell__bd">
                        <p>数量：1</p>
                    </div>
                    <div class="weui-cell__ft">
                        <p style="color: red"  price="108.00" >金额：￥<span class="single_price_show">0.01</span><span class="single_price" style="display:none">0.01</span></p>
                    </div>
                </div>
            </div>
            

            <div class="weui-cells weui-cells_radio">
                <label class="weui-cell weui-check__label" for="x1">
                    <div class="weui-cell__hd">
                        <span class="iconfont" style="font-size: 22px;color: #08be14;margin-right: 5px;margin-top: 3px;">&#xe609;</span>
                    </div>
                    <div class="weui-cell__bd">
                        <p>微信支付</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input type="radio" class="weui-check" checked name="radio1" value="1" id="x1">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x2">
                    <div class="weui-cell__hd">
                        <span class="iconfont" style="font-size: 22px;color: #1cacea;margin-right: 5px;margin-top: 3px;">&#xe647;</span>
                    </div>
                    <div class="weui-cell__bd">
                        <p>支付宝支付(暂不支持)</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input type="radio" class="weui-check" name="radio1" value="2" id="x2">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
                <label class="weui-cell weui-check__label" for="x3">
                    <div class="weui-cell__hd">
                        <span class="iconfont" style="font-size: 22px;color: #f8a848;margin-right: 5px;margin-top: 3px;">&#xe608;</span>
                    </div>
                    <div class="weui-cell__bd">
                        <p>余额支付</p>
                    </div>
                    <div class="weui-cell__ft">
                        <input type="radio" class="weui-check" name="radio1" value="3" id="x3">
                        <span class="weui-icon-checked"></span>
                    </div>
                </label>
            </div>

            <div class="weui-cells weui-cells_form">
                <div class="weui-cell">
                    <div class="weui-cell__hd">
                        <label class="weui-label">订单备注</label>
                    </div>
                    <div class="weui-cell__bd">
                        <input type="text" name="note" class="weui-input" placeholder="请填写您的特别需求">
                    </div>
                </div>
            </div>

            <div class="weui-cells weui-cells_form">
                <div class="weui-cell">
                    <div class="weui-cell__hd">
                        <label class="weui-label">运费</label>
                    </div>
                    <div class="weui-cell__bd" style="color: red">
                        ￥0.00元
                    </div>
                </div>
                <div class="weui-cell">
                    <div class="weui-cell__hd">
                        <label class="weui-label">会员折扣</label>
                    </div>
                    <div class="weui-cell__bd discount_total" style="color: red">
                        -￥0.00元
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="weui-tabbar">
        <div style="height: 50px;width: 100%;">
            <div style="width: 70%;float: left;line-height: 50px;padding-left: 3%;">共需支付：&nbsp;&nbsp;&nbsp;<span class="total_price_show" style="color: red">0.01</span>元<span class="total_price" style="display:none">0.01</span></div>
            <div id="paySubmit" class="paySubmit" style="width: 27%;float: left;line-height: 50px;text-align: center;">确认支付</div>
        </div>
    </div>

</form>

<!--选择收货人picker-->

<div id="choice" style="display: none">
    <div class="weui-mask weui-animate-fade-in"></div>
    <div class="weui-picker weui-animate-slide-up">

        <div class="weui-picker__hd">
            <a href="javascript:;" class="weui-picker__action"></a>
            <!--			<p id="show-edits">编辑收货人</p>-->
            <p id="show-edits">选择收货人</p>
            <a href="javascript:;" class="weui-picker__action" id="choice-cancel" style="color: red">取消</a>
        </div>

        <!--
                <div class="weui-picker__bd">

                </div>
        -->
        <div class="weui-picker__bd" id="choicepeople">


            <div class="weui-cells weui-cells_checkbox" style="width: 100%;">
                <label class="weui-cell weui-check__label" for="people">
                    <div class="weui-cell__hd">
                        <input type="radio" class="weui-check" id="people">
                        <i class="weui-icon-checked"></i>
                    </div>
                    <div class="weui-cell__bd">
                        <p>小小神 13183881016</p>
                        <p class="addres">成都市金牛区金泉路5号</p>
                    </div>
                    <div class="weui-cell__ft"><img src="http://[::1]/yunjuke/application/vmall/views/images/write.png" alt="" style="width: 30px;height: 30px;"></div>
                </label>
                <div class="weui-cell">
                    <a href="javascript:;" class="weui-picker__action"></a>
                    <p id="show-edit">新增地址</p>
                    <a href="javascript:;" class="weui-picker__action"></a>
                </div>
            </div>
        </div>
    </div>

</div>

<!--编辑收货人picker-->

<div id="edit" style="display: none">
    <div class="weui-mask weui-animate-fade-in"></div>
    <div class="weui-picker weui-animate-slide-up  weui-picker_main">
        <div class="weui-picker__hd" id="weui-picker_son">
            <a href="javascript:;" class="weui-picker__action"></a>
            <p>编辑收货人</p>
            <a href="javascript:;" class="weui-picker__action" id="edit-cancel" style="color: red">取消</a>
        </div>
    </div>
</div>

<div id="toast" style="opacity: 0; display: none;">
    <div class="weui-mask_transparent"></div>
    <div class="weui-toast">
        <i class="weui-icon-success-no-circle weui-icon_toast"></i>
        <p class="weui-toast__content">已完成</p>
    </div>
</div>
</body>
<script type="text/javascript" src="http://[::1]/yunjuke/application/vmall/views/js/zepto.min.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/application/vmall/views/js/framework7.picker.min.js"></script>
<script src="http://[::1]/yunjuke/application/vmall/views/js/base.js"></script>
<script src="http://[::1]/yunjuke/application/vmall/views/js/LArea.js"></script>
<script>
   /*  $(function(){
        var available = "0";
        if(available=="0"){
            $('.showPicker').css("background-color","#cccccc");
        }
    })
 */

    //	弹出优惠券方法
    $('.showPicker').on('click', function () {
//        num_high=$(this).parents('.weui-cells').find('.'+label_remove).find('.num_txt').html();
        num_array=$('.weui-check:checked').parents('.weui-check__label').find('.num_txt').html();
//        alert(num_array);
        var available_coupons = 1;
        if(available_coupons=="0"){
            return false;
        }
        var length=$(this).parents('.weui-cells').find('.sale').length;
        $(this).parent().next(".coupon").show();
        $(".weui-tabbar").hide();
        if(length>0) {
            $(this).parents('.weui-cells').find('.none_coupons').hide();
        }
        $(".mask").css('display','block');
    });
    //  优惠券点击取消
    $(".couponcancel").on('click',function(){

        $(this).parents(".coupon").hide();
        $(".weui-tabbar").show();
    })
   $(".mask").click(function(){
        $(this).hide();
       $(".weui-picker").hide();
   })

    //优惠券选择改变事件
    $(".weui-picker").find('input.weui-check').on('change',function() {
    	
        var data_coupon = $(this).parents('.weui-cells').find('.weui-picker__bd').attr('n_data_coupon');//用户优惠卷ID
        var data_coupon_id = $(this).parents('label').find('input.coupon_id').val();//优惠卷ID
        var data_user_coupon_id = $(this).parents('label').find('input.user_coupon_id').val();//优惠卷ID
        var data_user_coupon_list = $(this).parents('label').find('input.user_coupon_list').val();//优惠卷ID
        var coupon_num_n = parseInt($(this).parents('label').find('.num_txt_'+data_coupon_id).text());
        
        if(coupon_num_n<1){
        	mobileAlert("此券已用光，请选择其他券！");return false;
        }else{
        	if(data_coupon){
        		var coupon_num_o = parseInt($('.num_txt_'+data_coupon).html());
                $('.num_txt_'+data_coupon).text(coupon_num_o+1);
        	}
        	//console.log(data_coupon);console.log(data_coupon_id);console.log(coupon_num_n);
            $('.num_txt_'+data_coupon_id).text(coupon_num_n-1);
            $(this).parents('.weui-picker__bd').attr('n_data_coupon',data_coupon_id);
            $(this).parents('.weui-picker__bd').attr('n_data_user_coupon',data_user_coupon_id);
            $(this).parents('.weui-picker__bd').attr('n_data_user_coupon_list',data_user_coupon_list);
        }
        
    })

    //  优惠券点击确认
    $(".weui-picker-confirm").on('click',function(){
        $(".mask").hide();
        choose_coupon = $(this).parent().siblings('.weui-picker__bd');
    	choose_coupon.attr('data_coupon',choose_coupon.attr('n_data_coupon'));
    	choose_coupon.attr('data_user_coupon',choose_coupon.attr('n_data_user_coupon'));
    	choose_coupon.attr('data_user_coupon_list',choose_coupon.attr('n_data_user_coupon_list'));
        var prize_type=$(this).parents('.weui-cells').find('.prize_type').val();//1为折扣劵，2为满减劵
        var reduce_val = $(this).parents('.weui-cells').find('.weui-check:checked').val();
        var coupon_id=$(this).parents('.weui-picker').find('.weui-check:checked').parents('.weui-check__label').find('.coupon_id').val();
        var promotions_id=$(this).parents('.weui-picker').find('.weui-check:checked').parents('.weui-check__label').find('.c_activity_id').val();
        var activity_type=$(this).parents('.weui-picker').find('.weui-check:checked').parents('.weui-check__label').find('.c_activity_type').val();
        var user_coupon_id=$(this).parents('.weui-picker').find('.weui-check:checked').parents('.weui-check__label').find('.c_activity_type').val();
        var goods_price=$(this).parents('.weui-cells').find('.single_price').html();
        console.log(prize_type);console.log(reduce_val);console.log(coupon_id);console.log(promotions_id);console.log(activity_type);
        console.log(user_coupon_id);console.log(goods_price);
        if(prize_type==1){
            var pay_price=parseFloat(goods_price*reduce_val);
            pay_price=pay_price.toFixed(2);
            var coupon_amount=parseFloat(goods_price*(1-reduce_val));
            coupon_amount=coupon_amount.toFixed(2);
        }
//        var coupon_amount=$(this).parents('.weui-cells').find('.single_price').html();
//        alert(pay_price);alert(coupon_amount);
        $(this).parents('.weui-cells').find('.goods_coupon_id').val(coupon_id);
        $(this).parents('.weui-cells').find('.goods_pay_price').val(pay_price);
        $(this).parents('.weui-cells').find('.goods_coupon_amount').val(coupon_amount);
        $(this).parents('.weui-cells').find('.promotions_id').val(promotions_id);
        $(this).parents('.weui-cells').find('.activity_type').val(activity_type);
        $(this).parents('.weui-cells').find('.user_coupon_id').val(user_coupon_id);
        var goods_coupon_id=$(this).parents('.weui-cells').find('.goods_coupon_id').val();
        var goods_pay_price=$(this).parents('.weui-cells').find('.goods_pay_price').val();
        var goods_coupon_amount=$(this).parents('.weui-cells').find('.goods_coupon_amount').val();
//        console.log(goods_coupon_id);

        var length=$(this).parents('.weui-cells').find('.weui-check:checked').length;
        $(this).parents(".coupon").hide();
        $(".weui-tabbar").show();
        if(length>0) {
            var prize_type=$(this).parents('.weui-cells').find('.prize_type').val();//1为折扣劵，2为满减劵
            var single_show=$(this).parents('.weui-cells').find('.single_price_show');
            var single_price_show=single_show.html();
            var single_price=$(this).parents('.weui-cells').find('.single_price').html();
//			var s_price=$(this).parents('.weui-cells').siblings().find('.single_price_show').html();
//			alert(s_price);
            var total_price=$('.total_price').html();
            var total_price_show=$('.total_price_show').html();
            var remain_price=parseFloat(parseFloat(total_price_show)-parseFloat(single_price_show)+parseFloat(single_price));
//            alert(remain_price);
            var coupon_name=$(this).parents('.weui-cells').find('.weui-check:checked').parents('.weui-check__label').find('.text_money').html();
            var label_remove=$(this).parents('.weui-cells').find('.weui-check:checked').parent('.weui-cell__ft').find('.label_remove').html();
//			alert(label_remove);
//            console.log($('.'+label_remove+':not(:checked)'));
            var num_txt=$(this).parents('.weui-cells').find('.weui-check:checked').parents('.weui-check__label').find('.num_txt').html();

            var data_coupon=$(this).parents('.weui-cells').find('.weui-picker__bd').attr('data_coupon');
            if(num_txt<=0){
                $(this).parents('.weui-cells').find('.weui-check:checked').parents('.weui-check__label').show();
                $(this).parents('.weui-cells').siblings().find('.'+label_remove).find('.weui-check:not(:checked)').parents('.'+label_remove).hide();
            }
            var reduce_val = '';
            if(data_coupon){
            	reduce_val = $(this).parents('.weui-cells').find('.weui-check:checked').val();
            }
//            if(prize_type==1){
//                var html = '您已选择使用' + coupon_name;
//            }
//            $(this).parents('.weui-cells').find('.choose').html(html);
            var change_html=$(this).parents('.weui-cells').find('.choose');
            var total_pay=$('.discount_total');
            $.ajax({
                url: 'changeCash',
                type: 'post',
                data: {'prize_type':prize_type,'single_price':single_price,'total_price_show':total_price_show,'total_price':total_price,'reduce_val':reduce_val,'remain_price':remain_price},
                async: true,
                dataType:'json',
                success:function (data) {
                    single_show.html(data['discount_price']);
                    $('.total_price_show').html(data['discount_total_price']);
                    if(reduce_val==''){
                    	 change_html.html('不使用优惠券');
                    }else{
                    	 change_html.html('您已选择使用' + coupon_name+',共优惠'+data['reduce_price']+'元');
                    }
                   
                    total_pay.html('￥'+data['total_discount']+'元');
                }
            });
        }
    })
    //	根据下面收货人的个数判断弹出框的高
    get_choiceHeight();
    function get_choiceHeight(){
        var labelnum = $("#choicepeople label").length;
        $("#choicepeople").css("height",labelnum*60+100);
    }
    function check_addr(addrInfo){
        st_default='';
        if(addrInfo.is_default==1){
            st_default = '<span class="weui-btn weui-btn_mini weui-btn_warn" style="line-height: 18px;padding: 0 5px">默认</span>';
        }
        str = '<p>'+addrInfo.rec_name+' '+addrInfo.tel+' '+st_default+'</p><p class="addres">'+addrInfo.addressPicker+addrInfo.address+'</p>';
        console.log(str);
        ua_id = addrInfo.ua_id;$('#formSubmit').find('#reciveAddr').val(ua_id);
        $('#formSubmit').find('#show').html(str);
    }
    function select_address(obj){
        $("#choice").hide();
        obj = $(obj).parent('label').find('div.show-edit');
        addrInfo = get_info(obj);console.log(addrInfo)
        check_addr(addrInfo);
    }

    var addressinfo = {"ua_id":"16","user_id":"94","is_default":"1","province_id":"1009","city_id":"1310","area_id":"3437","address":"\u53e3\u5934","postcode":null,"tel":"18384148955","tel_2":null,"is_valid":"0","rec_name":"\u674e","addressPicker":"\u56db\u5ddd\u7701,\u6210\u90fd\u5e02,\u9752\u7f8a\u533a","addressPickers":"1009,1310,3437"};
    $("#show").click(function(){
        $("#choice").show();
        $.ajax({
            type:'post',
            dataType:'json',
            url:'ajax_get_addresss',
            success:function(res){
                add_str = '<div class="weui-cell"><a href="javascript:;" class="weui-picker__action"></a><p id="show-edit">新增地址</p><a href="javascript:;" class="weui-picker__action"></a></div>';
                if(res){
                    str = '';
                    $.each(res,function(k,v){
                        check='';
                        if(v.is_default==1){
                            check = 'checked';
                        }
                        str+='<label class="weui-cell weui-check__label" for="people'+k+'">'+
                            '<div class="weui-cell__hd weui-cell__seelct" >'+
                            '<input type="radio" class="weui-check" name="peopleaddres" id="people'+k+'">'+
                            '<i class="weui-icon-checked"></i>'+
                            '</div>'+
                            '<div class="weui-cell__bd weui-cell__seelct" onclick="select_address(this)">'+
                            '<p>'+v.rec_name+' '+v.tel+'</p>	'+
                            '<p class="addres">'+v.addr+v.address+'</p>'+
                            '</div>'+
                            '<div class="weui-cell__ft show-edit" data-id="'+v.ua_id+'" data-default="'+v.is_default+'"  data-name="'+v.rec_name+'" data-tel="'+v.tel+'" data-area="'+v.province_id+','+v.city_id+','+v.area_id+'" data-address="'+v.address+'" data-para="'+v.addr+'"><img src="http://[::1]/yunjuke/application/vmall/views//images/write.png" alt="" style="width: 30px;height: 30px;"></div>'+
                            '</label>';
                    })
                    str+=add_str;
                    $('div.weui-cells_checkbox').html(str);
                    var addres = $("#show").find(".addres").html();
                    $("div .weui-cells_checkbox label").each(function(){
                        if($(this).find(".addres").html()==addres){
                            $(this).find(".weui-check").attr("checked",true);
                        }else{
                        }
                    })
                }else{
                    $('div.weui-cells_checkbox').html(add_str);
                }
                get_choiceHeight();
            }
        })
        //console.log(addressinfo)


    })
    $("#choice-cancel").click(function(){
        $("#choice").hide();
    })
    $('#choice').delegate("#show-edit","click",function(){
        get_address("1");
        $("#choice").hide();
        $(("#edit")).show();
    })
    $('#choice').delegate("#show-edits","click",function(){
        get_address(addressinfo);
        $("#choice").hide();
        $(("#edit")).show();
    })
    function get_info(obj){
        id = obj.attr('data-id');name = obj.attr('data-name');
        tel = obj.attr('data-tel');addr = obj.attr('data-para');
        addrInfo = {
            'rec_name':name,'tel':tel,'address':obj.attr('data-address'),
            'ua_id':id,'tel':tel,'addressPickers':obj.attr('data-area'),
            'addressPicker':obj.attr('data-para'),'is_default':obj.attr('data-default'),
        };
        return addrInfo;
    }
    $('#choice').delegate(".show-edit","click",function(){
        obj = $(this);
        info = get_info(obj);
        get_address(info);
        $("#choice").hide();
        $(("#edit")).show();

    })
    $("#edit-cancel").click(function(){
        $("#edit").hide();
    })


    function get_address(address){
        checck = 'checked';ua_id='';checck_val = 1;
        if(typeof(address)== "string"){
            $("#weui-picker_son p").html("新增收货人");
        }else{
            $("#weui-picker_son p").html("编辑收货人");
            checck = '';
            if(address.is_default==1){
                checck = 'checked';
            }else{
                checck_val = 0;
            }
            ua_id = address.ua_id;
        }

        var    htmlstr ='<form id="receive-address"><input type="hidden" name="ua_id" value="'+ua_id+'"><div class="weui-picker__bd" style="height: 300px;">'+
            '<div class="weui-cells weui-cells_form" style="margin: 0 auto">'+
            '<div class="weui-cell">'+
            '<div class="weui-cell__hd">'+
            '<label class="weui-label">收货人</label>'+
            '</div>'+
            '<div class="weui-cell__bd">';

        if(typeof(address)== "string"){
            htmlstr +='<input type="text" class="weui-input" name="rec_name" notice="收货人不能为空！" placeholder="收货人名字" >';
        }else{
            htmlstr +='<input type="text" class="weui-input" name="rec_name" notice="收货人不能为空！" placeholder="收货人名字" value="'+address.rec_name+'" >';
        }
        htmlstr +='</div>'+
            '</div>'+
            '<div class="weui-cell">'+
            '<div class="weui-cell__hd">'+
            '<label class="weui-label">联系电话</label>'+
            '</div>'+
            '<div class="weui-cell__bd">';

        if(typeof(address)== "string"){
            htmlstr +='<input type="text" class="weui-input" name="tel" notice="手机号不能为空！" placeholder="请填写手机号码" >';
        }else{
            htmlstr +='<input type="text" class="weui-input" name="tel" notice="手机号不能为空！" placeholder="请填写手机号码" value="'+address.tel+'" >';
        }
        htmlstr +='</div>'+
            '</div>'+
            '<div class="weui-cell weui-cell_access">'+
            '<div class="weui-cell__hd">'+
            '<label class="weui-label">选择地址</label>'+
            '</div>'+
            '<div class="weui-cell__bd addressPicke">';
        if(typeof(address)== "string"){
            htmlstr +='<input id="addressPicker" type="text" name="region" class="weui-input" notice="收货地区不能为空！"  placeholder="点击选择省市区" readonly="true"  onfocus=this.blur() >'+
                '<input id="addressPickers" name="area" type="hidden" >';
        }else{
            htmlstr +='<input id="addressPicker" type="text" name="region" class="weui-input" notice="收货地区不能为空！"  placeholder="点击选择省市区" readonly="true"   onfocus=this.blur() value="'+address.addressPicker+'" >'+
                '<input id="addressPickers" type="hidden" name="area"  value="'+address.addressPickers+'" >';
        }

        htmlstr +='</div>'+
            '<div class="weui-cell__ft"></div>'+
            '</div>'+
            '<div class="weui-cell">'+
            '<div class="weui-cell__hd">'+
            '<label class="weui-label">详细地址</label>'+
            '</div>'+
            '<div class="weui-cell__bd">';
        if(typeof(address)== "string"){
            htmlstr +='<input type="text" class="weui-input" notice="收货详细地址不能为空！" placeholder="街道门牌信息" name="address">';
        }else{
            htmlstr +='<input type="text" class="weui-input" notice="收货详细地址不能为空！" placeholder="街道门牌信息" name="address" value="'+address.address+'">';
        }
        htmlstr +='</div>'+
            '</div>'+
            '<label for="weuiAgree" class="weui-agree" id="setDefault">'+
            '<input type="checkbox" id="weuiAgree" class="" '+checck+'  value="'+checck_val+'" name="is_default">'+
            '<span class="weui-agree__text" style="vertical-align: middle;margin-left: 5px;">设为默认地址</span>'+
            '</label>'+
            '<div class="weui-btn-area">'+
            '<a href="javascript:;" class="weui-btn weui-btn_warn" id="showTooltips" style="color: #fff">保存</a>'+
            '</div>'+
            '</div>'+
            '</div></form>';
        if(typeof($(".weui-picker_main .weui-picker__bd"))!=undefined){
            $(".weui-picker_main .weui-picker__bd").remove();
        }
        $('#weui-picker_son').after(htmlstr);
        var provs_data =[{"text":"北京","value":"1000"},{"text":"上海","value":"1001"},{"text":"天津","value":"1002"},{"text":"重庆","value":"1003"},{"text":"浙江省","value":"1004"},{"text":"广东省","value":"1005"},{"text":"江苏省","value":"1006"},{"text":"河北省","value":"1007"},{"text":"山西省","value":"1008"},{"text":"四川省","value":"1009"},{"text":"河南省","value":"1010"},{"text":"辽宁省","value":"1011"},{"text":"吉林省","value":"1012"},{"text":"黑龙江省","value":"1013"},{"text":"山东省","value":"1014"},{"text":"安徽省","value":"1015"},{"text":"福建省","value":"1016"},{"text":"湖北省","value":"1017"},{"text":"湖南省","value":"1018"},{"text":"海南省","value":"1019"},{"text":"江西省","value":"1020"},{"text":"贵州省","value":"1021"},{"text":"云南省","value":"1022"},{"text":"陕西省","value":"1023"},{"text":"甘肃省","value":"1024"},{"text":"广西区","value":"1025"},{"text":"宁夏区","value":"1026"},{"text":"青海省","value":"1027"},{"text":"新疆区","value":"1028"},{"text":"西藏区","value":"1029"},{"text":"内蒙古区","value":"1030"},{"text":"香港","value":"1031"},{"text":"澳门","value":"1032"},{"text":"台湾","value":"1033"}];
        var citys_data ={1000:[{"text":"北京市","value":"1368"}],1001:[{"text":"上海市","value":"1369"}],1002:[{"text":"天津市","value":"1370"}],1003:[{"text":"重庆市","value":"1371"}],1004:[{"text":"衢州市","value":"1353"},{"text":"丽水市","value":"1354"},{"text":"绍兴市","value":"1355"},{"text":"温州市","value":"1356"},{"text":"台州市","value":"1357"},{"text":"宁波市","value":"1358"},{"text":"舟山市","value":"1359"},{"text":"杭州市","value":"1360"},{"text":"湖州市","value":"1361"},{"text":"嘉兴市","value":"1362"},{"text":"金华市","value":"1363"}],1005:[{"text":"茂名市","value":"1074"},{"text":"梅州市","value":"1075"},{"text":"清远市","value":"1076"},{"text":"汕尾市","value":"1077"},{"text":"汕头市","value":"1078"},{"text":"深圳市","value":"1079"},{"text":"韶关市","value":"1080"},{"text":"阳江市","value":"1081"},{"text":"云浮市","value":"1082"},{"text":"湛江市","value":"1083"},{"text":"肇庆市","value":"1084"},{"text":"中山市","value":"1085"},{"text":"珠海市","value":"1086"},{"text":"潮州市","value":"1087"},{"text":"东莞市","value":"1088"},{"text":"佛山市","value":"1089"},{"text":"广州市","value":"1090"},{"text":"河源市","value":"1091"},{"text":"惠州市","value":"1092"},{"text":"揭阳市","value":"1093"},{"text":"江门市","value":"1094"}],1006:[{"text":"连云港市","value":"1197"},{"text":"徐州市","value":"1198"},{"text":"苏州市","value":"1199"},{"text":"宿迁市","value":"1200"},{"text":"泰州市","value":"1201"},{"text":"无锡市","value":"1202"},{"text":"扬州市","value":"1203"},{"text":"盐城市","value":"1204"},{"text":"镇江市","value":"1205"},{"text":"南通市","value":"1206"},{"text":"南京市","value":"1207"},{"text":"常州市","value":"1208"},{"text":"淮安市","value":"1209"},{"text":"吴中市","value":"4314"},{"text":"昆山市","value":"4315"}],1007:[{"text":"廊坊市","value":"1120"},{"text":"秦皇岛市","value":"1121"},{"text":"邢台市","value":"1122"},{"text":"石家庄市","value":"1123"},{"text":"唐山市","value":"1124"},{"text":"张家口市","value":"1125"},{"text":"保定市","value":"1126"},{"text":"沧州市","value":"1127"},{"text":"承德市","value":"1128"},{"text":"衡水市","value":"1129"},{"text":"邯郸市","value":"1130"}],1008:[{"text":"吕梁市","value":"1276"},{"text":"临汾市","value":"1277"},{"text":"忻州市","value":"1278"},{"text":"朔州市","value":"1279"},{"text":"太原市","value":"1280"},{"text":"阳泉市","value":"1281"},{"text":"运城市","value":"1282"},{"text":"长治市","value":"1283"},{"text":"大同市","value":"1284"},{"text":"晋中市","value":"1285"},{"text":"晋城市","value":"1286"}],1009:[{"text":"绵阳市","value":"1297"},{"text":"泸州市","value":"1298"},{"text":"乐山市","value":"1299"},{"text":"凉山彝族自治州","value":"1300"},{"text":"眉山市","value":"1301"},{"text":"遂宁市","value":"1302"},{"text":"雅安市","value":"1303"},{"text":"宜宾市","value":"1304"},{"text":"攀枝花市","value":"1305"},{"text":"南充市","value":"1306"},{"text":"内江市","value":"1307"},{"text":"巴中市","value":"1308"},{"text":"阿坝藏族羌族自治州","value":"1309"},{"text":"成都市","value":"1310"},{"text":"达州市","value":"1311"},{"text":"德阳市","value":"1312"},{"text":"甘孜藏族自治州","value":"1313"},{"text":"广元市","value":"1314"},{"text":"广安市","value":"1315"},{"text":"资阳市","value":"1316"},{"text":"自贡市","value":"1317"}],1010:[{"text":"洛阳市","value":"1131"},{"text":"新乡市","value":"1132"},{"text":"许昌市","value":"1133"},{"text":"信阳市","value":"1134"},{"text":"商丘市","value":"1135"},{"text":"三门峡市","value":"1136"},{"text":"濮阳市","value":"1137"},{"text":"漯河市","value":"1138"},{"text":"南阳市","value":"1139"},{"text":"平顶山市","value":"1140"},{"text":"周口市","value":"1141"},{"text":"郑州市","value":"1142"},{"text":"安阳市","value":"1143"},{"text":"鹤壁市","value":"1144"},{"text":"焦作市","value":"1145"},{"text":"开封市","value":"1146"},{"text":"驻马店市","value":"1147"},{"text":"济源市","value":"1391"}],1011:[{"text":"辽阳市","value":"1221"},{"text":"沈阳市","value":"1222"},{"text":"铁岭市","value":"1223"},{"text":"营口市","value":"1224"},{"text":"盘锦市","value":"1225"},{"text":"鞍山市","value":"1226"},{"text":"本溪市","value":"1227"},{"text":"朝阳市","value":"1228"},{"text":"大连市","value":"1229"},{"text":"丹东市","value":"1230"},{"text":"抚顺市","value":"1231"},{"text":"阜新市","value":"1232"},{"text":"葫芦岛市","value":"1233"},{"text":"锦州市","value":"1234"}],1012:[{"text":"辽源市","value":"1188"},{"text":"松原市","value":"1189"},{"text":"四平市","value":"1190"},{"text":"通化市","value":"1191"},{"text":"延边朝鲜族自治州","value":"1192"},{"text":"白山市","value":"1193"},{"text":"白城市","value":"1194"},{"text":"长春市","value":"1195"},{"text":"吉林市","value":"1196"}],1013:[{"text":"绥化市","value":"1148"},{"text":"双鸭山市","value":"1149"},{"text":"伊春市","value":"1150"},{"text":"齐齐哈尔市","value":"1151"},{"text":"牡丹江市","value":"1152"},{"text":"七台河市","value":"1153"},{"text":"大庆市","value":"1154"},{"text":"大兴安岭地区","value":"1155"},{"text":"哈尔滨市","value":"1156"},{"text":"黑河市","value":"1157"},{"text":"鹤岗市","value":"1158"},{"text":"佳木斯市","value":"1159"},{"text":"鸡西市","value":"1160"}],1014:[{"text":"临沂市","value":"1259"},{"text":"聊城市","value":"1260"},{"text":"莱芜市","value":"1261"},{"text":"青岛市","value":"1262"},{"text":"日照市","value":"1263"},{"text":"泰安市","value":"1264"},{"text":"潍坊市","value":"1265"},{"text":"威海市","value":"1266"},{"text":"烟台市","value":"1267"},{"text":"枣庄市","value":"1268"},{"text":"滨州市","value":"1269"},{"text":"德州市","value":"1270"},{"text":"东营市","value":"1271"},{"text":"菏泽市","value":"1272"},{"text":"济南市","value":"1273"},{"text":"济宁市","value":"1274"},{"text":"淄博市","value":"1275"}],1015:[{"text":"马鞍山市","value":"1034"},{"text":"六安市","value":"1035"},{"text":"宣城市","value":"1036"},{"text":"宿州市","value":"1037"},{"text":"铜陵市","value":"1038"},{"text":"芜湖市","value":"1039"},{"text":"亳州市","value":"1040"},{"text":"蚌埠市","value":"1041"},{"text":"安庆市","value":"1042"},{"text":"滁州市","value":"1043"},{"text":"阜阳市","value":"1045"},{"text":"池州市","value":"1046"},{"text":"合肥市","value":"1047"},{"text":"黄山市","value":"1048"},{"text":"淮南市","value":"1049"},{"text":"淮北市","value":"1050"},{"text":"巢湖","value":"4313"}],1016:[{"text":"龙岩市","value":"1051"},{"text":"三明市","value":"1052"},{"text":"泉州市","value":"1053"},{"text":"厦门市","value":"1054"},{"text":"漳州市","value":"1055"},{"text":"莆田市","value":"1056"},{"text":"南平市","value":"1057"},{"text":"宁德市","value":"1058"},{"text":"福州市","value":"1059"}],1017:[{"text":"孝感市","value":"1161"},{"text":"随州市","value":"1162"},{"text":"十堰市","value":"1163"},{"text":"咸宁市","value":"1164"},{"text":"襄阳市","value":"1165"},{"text":"武汉市","value":"1166"},{"text":"宜昌市","value":"1167"},{"text":"鄂州市","value":"1168"},{"text":"恩施市","value":"1169"},{"text":"黄石市","value":"1170"},{"text":"黄冈市","value":"1171"},{"text":"荆门市","value":"1172"},{"text":"荆州市","value":"1173"},{"text":"潜江市","value":"1392"},{"text":"神农架林区","value":"1393"},{"text":"天门市","value":"1394"},{"text":"仙桃市","value":"1395"},{"text":"武昌","value":"4310"}],1018:[{"text":"娄底市","value":"1174"},{"text":"邵阳市","value":"1175"},{"text":"湘潭市","value":"1176"},{"text":"湘西土家族苗族自治州","value":"1177"},{"text":"岳阳市","value":"1178"},{"text":"永州市","value":"1179"},{"text":"张家界市","value":"1180"},{"text":"益阳市","value":"1181"},{"text":"株洲市","value":"1182"},{"text":"常德市","value":"1183"},{"text":"长沙市","value":"1184"},{"text":"郴州市","value":"1185"},{"text":"衡阳市","value":"1186"},{"text":"怀化市","value":"1187"}],1019:[{"text":"三亚市","value":"1118"},{"text":"海口市","value":"1119"},{"text":"白沙黎族自治县","value":"1375"},{"text":"保亭黎族苗族自治县","value":"1376"},{"text":"昌江黎族自治县","value":"1377"},{"text":"澄迈县","value":"1378"},{"text":"定安县","value":"1379"},{"text":"东方市","value":"1380"},{"text":"乐东黎族自治县","value":"1381"},{"text":"临高县","value":"1382"},{"text":"陵水黎族自治县","value":"1383"},{"text":"琼海市","value":"1384"},{"text":"琼中黎族苗族自治县","value":"1385"},{"text":"屯昌县","value":"1386"},{"text":"万宁市","value":"1387"},{"text":"文昌市","value":"1388"},{"text":"五指山市","value":"1389"},{"text":"儋州市","value":"1390"},{"text":"琼山市","value":"3306"},{"text":"保亭黎族苗族自治县","value":"4335"}],1020:[{"text":"新余市","value":"1210"},{"text":"上饶市","value":"1211"},{"text":"宜春市","value":"1212"},{"text":"鹰潭市","value":"1213"},{"text":"南昌市","value":"1214"},{"text":"萍乡市","value":"1215"},{"text":"赣州市","value":"1216"},{"text":"抚州市","value":"1217"},{"text":"吉安市","value":"1218"},{"text":"九江市","value":"1219"},{"text":"景德镇市","value":"1220"},{"text":"红谷滩新区","value":"4324"}],1021:[{"text":"六盘水市","value":"1109"},{"text":"黔西南布依族苗族自治州","value":"1110"},{"text":"黔南布依族苗族自治州","value":"1111"},{"text":"黔东南苗族侗族自治州","value":"1112"},{"text":"铜仁地区","value":"1113"},{"text":"安顺市","value":"1114"},{"text":"毕节地区","value":"1115"},{"text":"贵阳市","value":"1116"},{"text":"遵义市","value":"1117"}],1022:[{"text":"临沧市","value":"1337"},{"text":"丽江市","value":"1338"},{"text":"昆明市","value":"1339"},{"text":"德宏傣族景颇族自治州","value":"1340"},{"text":"曲靖市","value":"1341"},{"text":"普洱市","value":"1342"},{"text":"文山壮族苗族自治州","value":"1343"},{"text":"昭通市","value":"1344"},{"text":"玉溪市","value":"1345"},{"text":"怒江傈僳族自治州","value":"1346"},{"text":"保山市","value":"1347"},{"text":"楚雄彝族自治州","value":"1348"},{"text":"大理白族自治州","value":"1349"},{"text":"迪庆藏族自治州","value":"1350"},{"text":"红河哈尼族彝族自治州","value":"1351"},{"text":"西双版纳傣族自治州","value":"1352"},{"text":"文山市","value":"4334"},{"text":"西双版纳","value":"4336"},{"text":"红河","value":"4337"},{"text":"德宏","value":"4339"}],1023:[{"text":"咸阳市","value":"1288"},{"text":"铜川市","value":"1289"},{"text":"渭南市","value":"1290"},{"text":"西安市","value":"1291"},{"text":"延安市","value":"1292"},{"text":"榆林市","value":"1293"},{"text":"安康市","value":"1294"},{"text":"宝鸡市","value":"1295"},{"text":"汉中市","value":"1296"},{"text":"韩城市","value":"4291"},{"text":"西安","value":"4340"}],1024:[{"text":"临夏回族自治州","value":"1060"},{"text":"陇南市","value":"1061"},{"text":"兰州市","value":"1062"},{"text":"天水市","value":"1063"},{"text":"武威市","value":"1064"},{"text":"庆阳市","value":"1065"},{"text":"张掖市","value":"1066"},{"text":"平凉市","value":"1067"},{"text":"白银市","value":"1068"},{"text":"定西市","value":"1069"},{"text":"甘南藏族自治州","value":"1070"},{"text":"嘉峪关市","value":"1071"},{"text":"金昌市","value":"1072"},{"text":"酒泉市","value":"1073"},{"text":"玉门市","value":"4012"},{"text":"敦煌市","value":"4013"}],1025:[{"text":"柳州市","value":"1095"},{"text":"崇左市","value":"1096"},{"text":"钦州市","value":"1097"},{"text":"梧州市","value":"1098"},{"text":"玉林市","value":"1099"},{"text":"南宁市","value":"1100"},{"text":"来宾市","value":"1101"},{"text":"百色市","value":"1102"},{"text":"北海市","value":"1103"},{"text":"防城港市","value":"1104"},{"text":"桂林市","value":"1105"},{"text":"贵港市","value":"1106"},{"text":"河池市","value":"1107"},{"text":"贺州市","value":"1108"}],1026:[{"text":"石嘴山市","value":"1247"},{"text":"吴忠市","value":"1248"},{"text":"银川市","value":"1249"},{"text":"固原市","value":"1250"},{"text":"中卫市","value":"4268"}],1027:[{"text":"西宁市","value":"1251"},{"text":"玉树藏族自治州","value":"1252"},{"text":"果洛藏族自治州","value":"1253"},{"text":"海西蒙古族藏族自治州","value":"1254"},{"text":"海南藏族自治州","value":"1255"},{"text":"海北藏族自治州","value":"1256"},{"text":"海东地区","value":"1257"},{"text":"黄南藏族自治州","value":"1258"}],1028:[{"text":"吐鲁番地区","value":"1325"},{"text":"乌鲁木齐市","value":"1326"},{"text":"伊犁哈萨克自治州","value":"1327"},{"text":"克孜勒苏柯尔克孜自治州","value":"1328"},{"text":"阿克苏地区","value":"1329"},{"text":"昌吉回族自治州","value":"1330"},{"text":"博尔塔拉蒙古自治州","value":"1331"},{"text":"哈密地区","value":"1332"},{"text":"和田地区","value":"1333"},{"text":"巴音郭楞蒙古自治州","value":"1334"},{"text":"克拉玛依市","value":"1335"},{"text":"喀什地区","value":"1336"},{"text":"石河子市","value":"1364"},{"text":"阿拉尔市","value":"1365"},{"text":"图木舒克市","value":"1366"},{"text":"五家渠市","value":"1367"},{"text":"阿勒泰地区","value":"4302"},{"text":"伊犁","value":"4338"}],1029:[{"text":"林芝地区","value":"1318"},{"text":"拉萨市","value":"1319"},{"text":"日喀则地区","value":"1320"},{"text":"山南地区","value":"1321"},{"text":"那曲地区","value":"1322"},{"text":"阿里地区","value":"1323"},{"text":"昌都地区","value":"1324"}],1030:[{"text":"兴安盟","value":"1235"},{"text":"乌兰察布市","value":"1236"},{"text":"乌海市","value":"1237"},{"text":"锡林郭勒盟","value":"1238"},{"text":"通辽市","value":"1239"},{"text":"巴彦淖尔市","value":"1240"},{"text":"包头市","value":"1241"},{"text":"阿拉善盟","value":"1242"},{"text":"赤峰市","value":"1243"},{"text":"鄂尔多斯市","value":"1244"},{"text":"呼伦贝尔市","value":"1245"},{"text":"呼和浩特市","value":"1246"}],1031:[{"text":"香港","value":"1372"}],1032:[{"text":"澳门","value":"1373"}],1033:[{"text":"台北市","value":"4277"},{"text":"高雄市","value":"4278"},{"text":"新竹市","value":"4279"},{"text":"台中市","value":"4280"},{"text":"嘉义市","value":"4281"},{"text":"台南市","value":"4282"}]};
        var dists_data ={1368:[{"text":"东城区","value":"1397"},{"text":"西城区","value":"1398"},{"text":"崇文区","value":"1399"},{"text":"宣武区","value":"1400"},{"text":"朝阳区","value":"1401"},{"text":"海淀区","value":"1402"},{"text":"丰台区","value":"1403"},{"text":"石景山区","value":"1404"},{"text":"房山区","value":"1405"},{"text":"通州区","value":"1406"},{"text":"顺义区","value":"1407"},{"text":"门头沟区","value":"1408"},{"text":"昌平区","value":"1409"},{"text":"大兴区","value":"1410"},{"text":"怀柔区","value":"1411"},{"text":"平谷区","value":"1412"},{"text":"密云县","value":"1413"},{"text":"延庆县","value":"1414"},{"text":"丰台区","value":"4318"},{"text":"大兴区","value":"4319"}],1369:[{"text":"黄浦区","value":"1433"},{"text":"卢湾区","value":"1434"},{"text":"徐汇区","value":"1435"},{"text":"长宁区","value":"1436"},{"text":"静安区","value":"1437"},{"text":"普陀区","value":"1438"},{"text":"闸北区","value":"1439"},{"text":"虹口区","value":"1440"},{"text":"杨浦区","value":"1441"},{"text":"宝山区","value":"1442"},{"text":"闵行区","value":"1443"},{"text":"嘉定区","value":"1444"},{"text":"松江区","value":"1445"},{"text":"金山区","value":"1446"},{"text":"青浦区","value":"1447"},{"text":"浦东新区","value":"1448"},{"text":"南汇区","value":"1449"},{"text":"奉贤区","value":"1450"},{"text":"崇明县","value":"1451"}],1370:[{"text":"和平区","value":"1415"},{"text":"河东区","value":"1416"},{"text":"河西区","value":"1417"},{"text":"南开区","value":"1418"},{"text":"河北区","value":"1419"},{"text":"红桥区","value":"1420"},{"text":"塘沽区","value":"1421"},{"text":"汉沽区","value":"1422"},{"text":"滨海新区","value":"1423"},{"text":"东丽区","value":"1424"},{"text":"西青区","value":"1425"},{"text":"北辰区","value":"1426"},{"text":"津南区","value":"1427"},{"text":"武清区","value":"1428"},{"text":"宝坻区","value":"1429"},{"text":"静海县","value":"1430"},{"text":"宁河县","value":"1431"},{"text":"蓟县","value":"1432"},{"text":"大港区","value":"4312"}],1371:[{"text":"渝中区","value":"1452"},{"text":"大渡口区","value":"1453"},{"text":"江北区","value":"1454"},{"text":"沙坪坝区","value":"1455"},{"text":"九龙坡区","value":"1456"},{"text":"南岸区","value":"1457"},{"text":"北碚区","value":"1458"},{"text":"渝北区","value":"1461"},{"text":"巴南区","value":"1462"},{"text":"万州区","value":"1463"},{"text":"涪陵区","value":"1464"},{"text":"黔江区","value":"1465"},{"text":"长寿区","value":"1466"},{"text":"永川市","value":"1467"},{"text":"合川市","value":"1468"},{"text":"江津市","value":"1469"},{"text":"南川市","value":"1470"},{"text":"綦江区","value":"1471"},{"text":"潼南县","value":"1472"},{"text":"荣昌县","value":"1473"},{"text":"璧山县","value":"1474"},{"text":"大足区","value":"1475"},{"text":"铜梁县","value":"1476"},{"text":"梁平县","value":"1477"},{"text":"城口县","value":"1478"},{"text":"垫江县","value":"1479"},{"text":"武隆县","value":"1480"},{"text":"丰都县","value":"1481"},{"text":"奉节县","value":"1482"},{"text":"开县","value":"1483"},{"text":"云阳县","value":"1484"},{"text":"忠县","value":"1485"},{"text":"巫溪县","value":"1486"},{"text":"巫山县","value":"1487"},{"text":"石柱土家族自治县","value":"1488"},{"text":"秀山土家族苗族自治县","value":"1489"},{"text":"酉阳土家族苗族自治县","value":"1490"},{"text":"彭水苗族土家族自治县","value":"1491"}],1353:[{"text":"柯城区","value":"2344"},{"text":"衢江区","value":"2345"},{"text":"江山市","value":"2346"},{"text":"龙游县","value":"2347"},{"text":"常山县","value":"2348"},{"text":"开化县","value":"2349"}],1354:[{"text":"莲都区","value":"2363"},{"text":"龙泉市","value":"2364"},{"text":"缙云县","value":"2365"},{"text":"青田县","value":"2366"},{"text":"云和县","value":"2367"},{"text":"遂昌县","value":"2368"},{"text":"松阳县","value":"2369"},{"text":"庆元县","value":"2370"},{"text":"景宁畲族自治县","value":"2371"}],1355:[{"text":"越城区","value":"2329"},{"text":"诸暨市","value":"2330"},{"text":"上虞市","value":"2331"},{"text":"嵊州市","value":"2332"},{"text":"绍兴县","value":"2333"},{"text":"新昌县","value":"2334"}],1356:[{"text":"鹿城区","value":"2306"},{"text":"龙湾区","value":"2307"},{"text":"瓯海区","value":"2308"},{"text":"瑞安市","value":"2309"},{"text":"乐清市","value":"2310"},{"text":"永嘉县","value":"2311"},{"text":"洞头县","value":"2312"},{"text":"平阳县","value":"2313"},{"text":"苍南县","value":"2314"},{"text":"文成县","value":"2315"},{"text":"泰顺县","value":"2316"}],1357:[{"text":"椒江区","value":"2354"},{"text":"黄岩区","value":"2355"},{"text":"路桥区","value":"2356"},{"text":"临海市","value":"2357"},{"text":"温岭市","value":"2358"},{"text":"玉环县","value":"2359"},{"text":"天台县","value":"2360"},{"text":"仙居县","value":"2361"},{"text":"三门县","value":"2362"}],1358:[{"text":"海曙区","value":"2295"},{"text":"江东区","value":"2296"},{"text":"江北区","value":"2297"},{"text":"镇海区","value":"2298"},{"text":"北仑区","value":"2299"},{"text":"鄞州区","value":"2300"},{"text":"余姚市","value":"2301"},{"text":"慈溪市","value":"2302"},{"text":"奉化市","value":"2303"},{"text":"宁海县","value":"2304"},{"text":"象山县","value":"2305"}],1359:[{"text":"定海区","value":"2350"},{"text":"普陀区","value":"2351"},{"text":"岱山县","value":"2352"},{"text":"嵊泗县","value":"2353"}],1360:[{"text":"拱墅区","value":"2282"},{"text":"西湖区","value":"2283"},{"text":"上城区","value":"2284"},{"text":"下城区","value":"2285"},{"text":"江干区","value":"2286"},{"text":"滨江区","value":"2287"},{"text":"余杭区","value":"2288"},{"text":"萧山区","value":"2289"},{"text":"建德市","value":"2290"},{"text":"富阳市","value":"2291"},{"text":"临安市","value":"2292"},{"text":"桐庐县","value":"2293"},{"text":"淳安县","value":"2294"}],1361:[{"text":"吴兴区","value":"2324"},{"text":"南浔区","value":"2325"},{"text":"长兴县","value":"2326"},{"text":"德清县","value":"2327"},{"text":"安吉县","value":"2328"}],1362:[{"text":"秀城区","value":"2317"},{"text":"秀洲区","value":"2318"},{"text":"海宁市","value":"2319"},{"text":"平湖市","value":"2320"},{"text":"桐乡市","value":"2321"},{"text":"嘉善县","value":"2322"},{"text":"海盐县","value":"2323"},{"text":"海宁市","value":"4311"}],1363:[{"text":"婺城区","value":"2335"},{"text":"金东区","value":"2336"},{"text":"兰溪市","value":"2337"},{"text":"义乌市","value":"2338"},{"text":"东阳市","value":"2339"},{"text":"永康市","value":"2340"},{"text":"武义县","value":"2341"},{"text":"浦江县","value":"2342"},{"text":"磐安县","value":"2343"}],1074:[{"text":"茂南区","value":"3271"},{"text":"茂港区","value":"3272"},{"text":"高州市","value":"3273"},{"text":"化州市","value":"3274"},{"text":"信宜市","value":"3275"},{"text":"电白县","value":"3276"}],1075:[{"text":"梅江区","value":"3227"},{"text":"兴宁市","value":"3228"},{"text":"梅县","value":"3229"},{"text":"蕉岭县","value":"3230"},{"text":"大埔县","value":"3231"},{"text":"丰顺县","value":"3232"},{"text":"五华县","value":"3233"},{"text":"平远县","value":"3234"}],1076:[{"text":"清城区","value":"3285"},{"text":"英德市","value":"3286"},{"text":"连州市","value":"3287"},{"text":"佛冈县","value":"3288"},{"text":"阳山县","value":"3289"},{"text":"清新县","value":"3290"},{"text":"连山壮族瑶族自治县","value":"3291"},{"text":"连南瑶族自治县","value":"3292"}],1077:[{"text":"城区","value":"3240"},{"text":"陆丰市","value":"3241"},{"text":"海丰县","value":"3242"},{"text":"陆河县","value":"3243"}],1078:[{"text":"潮阳区","value":"3203"},{"text":"潮南区","value":"3204"},{"text":"澄海区","value":"3205"},{"text":"濠江区","value":"3206"},{"text":"金平区","value":"3207"},{"text":"龙湖区","value":"3208"},{"text":"南澳县","value":"3209"}],1079:[{"text":"福田区","value":"3194"},{"text":"罗湖区","value":"3195"},{"text":"南山区","value":"3196"},{"text":"宝安区","value":"3197"},{"text":"龙岗区","value":"3198"},{"text":"盐田区","value":"3199"}],1080:[{"text":"北江区","value":"3210"},{"text":"浈江区","value":"3211"},{"text":"武江区","value":"3212"},{"text":"乐昌市","value":"3213"},{"text":"南雄市","value":"3214"},{"text":"仁化县","value":"3215"},{"text":"始兴县","value":"3216"},{"text":"翁源县","value":"3217"},{"text":"曲江县","value":"3218"},{"text":"新丰县","value":"3219"},{"text":"乳源瑶族自治县","value":"3220"}],1081:[{"text":"江城区","value":"3258"},{"text":"阳春市","value":"3259"},{"text":"阳西县","value":"3260"},{"text":"阳东县","value":"3261"}],1082:[{"text":"云城区","value":"3301"},{"text":"罗定市","value":"3302"},{"text":"云安县","value":"3303"},{"text":"新兴县","value":"3304"},{"text":"郁南县","value":"3305"}],1083:[{"text":"赤坎区","value":"3262"},{"text":"霞山区","value":"3263"},{"text":"坡头区","value":"3264"},{"text":"麻章区","value":"3265"},{"text":"廉江市","value":"3266"},{"text":"雷州市","value":"3267"},{"text":"吴川市","value":"3268"},{"text":"遂溪县","value":"3269"},{"text":"徐闻县","value":"3270"}],1084:[{"text":"端州区","value":"3277"},{"text":"鼎湖区","value":"3278"},{"text":"高要市","value":"3279"},{"text":"四会市","value":"3280"},{"text":"广宁县","value":"3281"},{"text":"德庆县","value":"3282"},{"text":"封开县","value":"3283"},{"text":"怀集县","value":"3284"}],1085:[{"text":"中山市","value":"3245"},{"text":"港口镇","value":"4325"},{"text":"石岐区","value":"4326"}],1086:[{"text":"香洲区","value":"3200"},{"text":"斗门区","value":"3201"},{"text":"金湾区","value":"3202"}],1087:[{"text":"湘桥区","value":"3293"},{"text":"潮安县","value":"3294"},{"text":"饶平县","value":"3295"}],1088:[{"text":"东莞市","value":"3244"},{"text":"万江区","value":"4327"},{"text":"凤岗镇","value":"4328"},{"text":"常平镇","value":"4329"},{"text":"樟木头镇","value":"4330"},{"text":"茶山镇","value":"4331"}],1089:[{"text":"顺德区","value":"3253"},{"text":"南海区","value":"3254"},{"text":"三水区","value":"3255"},{"text":"高明区","value":"3256"},{"text":"禅城区","value":"3257"}],1090:[{"text":"越秀区","value":"3182"},{"text":"东山区","value":"3183"},{"text":"海珠区","value":"3184"},{"text":"荔湾区","value":"3185"},{"text":"天河区","value":"3186"},{"text":"白云区","value":"3187"},{"text":"黄埔区","value":"3188"},{"text":"花都区","value":"3190"},{"text":"番禺区","value":"3191"},{"text":"从化市","value":"3192"},{"text":"增城市","value":"3193"}],1091:[{"text":"源城区","value":"3221"},{"text":"和平县","value":"3222"},{"text":"龙川县","value":"3223"},{"text":"紫金县","value":"3224"},{"text":"连平县","value":"3225"},{"text":"东源县","value":"3226"}],1092:[{"text":"惠城区","value":"3235"},{"text":"惠阳市","value":"3236"},{"text":"惠东县","value":"3237"},{"text":"博罗县","value":"3238"},{"text":"龙门县","value":"3239"}],1093:[{"text":"榕城区","value":"3296"},{"text":"普宁市","value":"3297"},{"text":"揭东县","value":"3298"},{"text":"揭西县","value":"3299"},{"text":"惠来县","value":"3300"}],1094:[{"text":"江海区","value":"3246"},{"text":"蓬江区","value":"3247"},{"text":"新会区","value":"3248"},{"text":"台山市","value":"3249"},{"text":"开平市","value":"3250"},{"text":"鹤山市","value":"3251"},{"text":"恩平市","value":"3252"}],1197:[{"text":"新浦区","value":"2200"},{"text":"连云区","value":"2201"},{"text":"海州区","value":"2202"},{"text":"东海县","value":"2203"},{"text":"灌云县","value":"2204"},{"text":"赣榆县","value":"2205"},{"text":"灌南县","value":"2206"}],1198:[{"text":"云龙区","value":"2189"},{"text":"鼓楼区","value":"2190"},{"text":"九里区","value":"2191"},{"text":"贾汪区","value":"2192"},{"text":"贾汪区","value":"2193"},{"text":"邳州市","value":"2194"},{"text":"新沂市","value":"2195"},{"text":"铜山县","value":"2196"},{"text":"睢宁县","value":"2197"},{"text":"沛县","value":"2198"},{"text":"丰县","value":"2199"}],1199:[{"text":"沧浪区","value":"2271"},{"text":"金阊区","value":"2272"},{"text":"平江区","value":"2273"},{"text":"虎丘区","value":"2274"},{"text":"吴中区","value":"2275"},{"text":"相城区","value":"2276"},{"text":"常熟市","value":"2277"},{"text":"张家港市","value":"2278"},{"text":"太仓市","value":"2279"},{"text":"昆山市","value":"2280"},{"text":"吴江市","value":"2281"},{"text":"园区","value":"4332"}],1200:[{"text":"宿城区","value":"2215"},{"text":"宿豫县","value":"2216"},{"text":"沭阳县","value":"2217"},{"text":"泗阳县","value":"2218"},{"text":"泗洪县","value":"2219"}],1201:[{"text":"海陵区","value":"2236"},{"text":"高港区","value":"2237"},{"text":"泰兴市","value":"2238"},{"text":"姜堰市","value":"2239"},{"text":"靖江市","value":"2240"},{"text":"兴化市","value":"2241"}],1202:[{"text":"崇安区","value":"2263"},{"text":"北塘区","value":"2264"},{"text":"南长区","value":"2265"},{"text":"锡山区","value":"2266"},{"text":"惠山区","value":"2267"},{"text":"滨湖区","value":"2268"},{"text":"江阴市","value":"2269"},{"text":"宜兴市","value":"2270"}],1203:[{"text":"广陵区","value":"2229"},{"text":"维扬区","value":"2230"},{"text":"邗江区","value":"2231"},{"text":"高邮市","value":"2232"},{"text":"江都市","value":"2233"},{"text":"仪征市","value":"2234"},{"text":"宝应县","value":"2235"}],1204:[{"text":"城区","value":"2220"},{"text":"东台市","value":"2221"},{"text":"大丰市","value":"2222"},{"text":"盐都县","value":"2223"},{"text":"建湖县","value":"2224"},{"text":"响水县","value":"2225"},{"text":"阜宁县","value":"2226"},{"text":"射阳县","value":"2227"},{"text":"滨海县","value":"2228"}],1205:[{"text":"京口区","value":"2250"},{"text":"润州区","value":"2251"},{"text":"丹阳市","value":"2252"},{"text":"扬中市","value":"2253"},{"text":"句容市","value":"2254"},{"text":"丹徒县","value":"2255"}],1206:[{"text":"崇川区","value":"2242"},{"text":"港闸区","value":"2243"},{"text":"如皋市","value":"2244"},{"text":"通州区","value":"2245"},{"text":"海门市","value":"2246"},{"text":"启东市","value":"2247"},{"text":"海安县","value":"2248"},{"text":"如东县","value":"2249"}],1207:[{"text":"玄武区","value":"2174"},{"text":"鼓楼区","value":"2175"},{"text":"建邺区","value":"2176"},{"text":"白下区","value":"2177"},{"text":"秦淮区","value":"2178"},{"text":"下关区","value":"2179"},{"text":"雨花台区","value":"2180"},{"text":"浦口区","value":"2181"},{"text":"栖霞区","value":"2182"},{"text":"大厂区","value":"2183"},{"text":"江宁区","value":"2184"},{"text":"溧水县","value":"2185"},{"text":"高淳县","value":"2186"},{"text":"六合县","value":"2187"},{"text":"浦口区","value":"2188"}],1208:[{"text":"钟楼区","value":"2256"},{"text":"天宁区","value":"2257"},{"text":"戚墅堰区","value":"2258"},{"text":"郊区","value":"2259"},{"text":"金坛市","value":"2260"},{"text":"溧阳市","value":"2261"},{"text":"武进市","value":"2262"}],1209:[{"text":"清河区","value":"2207"},{"text":"清浦区","value":"2208"},{"text":"楚州区","value":"2209"},{"text":"淮阴区","value":"2210"},{"text":"涟水县","value":"2211"},{"text":"洪泽县","value":"2212"},{"text":"金湖县","value":"2213"},{"text":"盱眙县","value":"2214"}],4315:[{"text":"巴城镇","value":"4316"}],1120:[{"text":"安次区","value":"1643"},{"text":"广阳区","value":"1644"},{"text":"霸州市","value":"1645"},{"text":"三河市","value":"1646"},{"text":"固安县","value":"1647"},{"text":"永清县","value":"1648"},{"text":"香河县","value":"1649"},{"text":"大城县","value":"1650"},{"text":"文安县","value":"1651"},{"text":"大厂回族自治县","value":"1652"}],1121:[{"text":"海港区","value":"1529"},{"text":"山海关区","value":"1530"},{"text":"北戴河区","value":"1531"},{"text":"昌黎县","value":"1532"},{"text":"卢龙县","value":"1533"},{"text":"抚宁县","value":"1534"},{"text":"青龙满族自治县","value":"1535"}],1122:[{"text":"桥东区","value":"1555"},{"text":"桥西区","value":"1556"},{"text":"南宫市","value":"1557"},{"text":"沙河市","value":"1558"},{"text":"邢台县","value":"1559"},{"text":"柏乡县","value":"1560"},{"text":"任县","value":"1561"},{"text":"清河县","value":"1562"},{"text":"宁晋县","value":"1563"},{"text":"威县","value":"1564"},{"text":"隆尧县","value":"1565"},{"text":"临城县","value":"1566"},{"text":"广宗县","value":"1567"},{"text":"临西县","value":"1568"},{"text":"内丘县","value":"1569"},{"text":"平乡县","value":"1570"},{"text":"巨鹿县","value":"1571"},{"text":"新河县","value":"1572"},{"text":"南和县","value":"1573"}],1123:[{"text":"长安区","value":"1492"},{"text":"桥东区","value":"1493"},{"text":"桥西区","value":"1494"},{"text":"新华区","value":"1495"},{"text":"裕华区","value":"1496"},{"text":"井陉矿区","value":"1497"},{"text":"辛集市","value":"1498"},{"text":"藁城市","value":"1499"},{"text":"晋州市","value":"1500"},{"text":"新乐市","value":"1501"},{"text":"鹿泉市","value":"1502"},{"text":"平山县","value":"1503"},{"text":"井陉县","value":"1504"},{"text":"栾城县","value":"1505"},{"text":"正定县","value":"1506"},{"text":"行唐县","value":"1507"},{"text":"灵寿县","value":"1508"},{"text":"高邑县","value":"1509"},{"text":"赵县","value":"1510"},{"text":"赞皇县","value":"1511"},{"text":"深泽县","value":"1512"},{"text":"无极县","value":"1513"},{"text":"元氏县","value":"1514"}],1124:[{"text":"路北区","value":"1515"},{"text":"路南区","value":"1516"},{"text":"古冶区","value":"1517"},{"text":"开平区","value":"1518"},{"text":"丰南区","value":"1519"},{"text":"丰润区","value":"1520"},{"text":"遵化市","value":"1521"},{"text":"迁安市","value":"1522"},{"text":"迁西县","value":"1523"},{"text":"滦南县","value":"1524"},{"text":"玉田县","value":"1525"},{"text":"唐海县","value":"1526"},{"text":"乐亭县","value":"1527"},{"text":"滦县","value":"1528"}],1125:[{"text":"桥西区","value":"1599"},{"text":"桥东区","value":"1600"},{"text":"宣化区","value":"1601"},{"text":"下花园区","value":"1602"},{"text":"宣化县","value":"1603"},{"text":"阳原县","value":"1604"},{"text":"赤城县","value":"1605"},{"text":"沽源县","value":"1606"},{"text":"怀安县","value":"1607"},{"text":"怀来县","value":"1608"},{"text":"崇礼县","value":"1609"},{"text":"尚义县","value":"1610"},{"text":"蔚县","value":"1611"},{"text":"涿鹿县","value":"1612"},{"text":"万全县","value":"1613"},{"text":"康保县","value":"1614"},{"text":"张北县","value":"1615"}],1126:[{"text":"新市区","value":"1574"},{"text":"南市区","value":"1575"},{"text":"北市区","value":"1576"},{"text":"涿州市","value":"1577"},{"text":"定州市","value":"1578"},{"text":"安国市","value":"1579"},{"text":"高碑店市","value":"1580"},{"text":"满城县","value":"1581"},{"text":"清苑县","value":"1582"},{"text":"涞水县","value":"1583"},{"text":"阜平县","value":"1584"},{"text":"徐水县","value":"1585"},{"text":"定兴县","value":"1586"},{"text":"唐县","value":"1587"},{"text":"高阳县","value":"1588"},{"text":"容城县","value":"1589"},{"text":"涞源县","value":"1590"},{"text":"望都县","value":"1591"},{"text":"安新县","value":"1592"},{"text":"易县","value":"1593"},{"text":"曲阳县","value":"1594"},{"text":"蠡县","value":"1595"},{"text":"顺平县","value":"1596"},{"text":"博野县","value":"1597"},{"text":"雄县","value":"1598"}],1127:[{"text":"运河区","value":"1627"},{"text":"新华区","value":"1628"},{"text":"泊头市","value":"1629"},{"text":"任丘市","value":"1630"},{"text":"黄骅市","value":"1631"},{"text":"河间市","value":"1632"},{"text":"沧县","value":"1633"},{"text":"青县","value":"1634"},{"text":"献县","value":"1635"},{"text":"东光县","value":"1636"},{"text":"海兴县","value":"1637"},{"text":"盐山县","value":"1638"},{"text":"肃宁县","value":"1639"},{"text":"南皮县","value":"1640"},{"text":"吴桥县","value":"1641"},{"text":"孟村回族自治县","value":"1642"}],1128:[{"text":"双桥区","value":"1616"},{"text":"双滦区","value":"1617"},{"text":"鹰手营子矿区","value":"1618"},{"text":"承德县","value":"1619"},{"text":"兴隆县","value":"1620"},{"text":"隆化县","value":"1621"},{"text":"平泉县","value":"1622"},{"text":"滦平县","value":"1623"},{"text":"丰宁满族自治县","value":"1624"},{"text":"围场满族蒙古族自治县","value":"1625"},{"text":"宽城满族自治县","value":"1626"}],1129:[{"text":"桃城区","value":"1653"},{"text":"冀州市","value":"1654"},{"text":"深州市","value":"1655"},{"text":"饶阳县","value":"1656"},{"text":"枣强县","value":"1657"},{"text":"故城县","value":"1658"},{"text":"阜城县","value":"1659"},{"text":"安平县","value":"1660"},{"text":"武邑县","value":"1661"},{"text":"景县","value":"1662"},{"text":"武强县","value":"1663"}],1130:[{"text":"从台区","value":"1536"},{"text":"复兴区","value":"1537"},{"text":"邯山区","value":"1538"},{"text":"峰峰矿区","value":"1539"},{"text":"武安市","value":"1540"},{"text":"邯郸县","value":"1541"},{"text":"永年县","value":"1542"},{"text":"曲周县","value":"1543"},{"text":"馆陶县","value":"1544"},{"text":"魏县","value":"1545"},{"text":"成安县","value":"1546"},{"text":"大名县","value":"1547"},{"text":"涉县","value":"1548"},{"text":"鸡泽县","value":"1549"},{"text":"邱县","value":"1550"},{"text":"广平县","value":"1551"},{"text":"肥乡县","value":"1552"},{"text":"临漳县","value":"1553"},{"text":"磁县","value":"1554"}],1276:[{"text":"离石区","value":"1770"},{"text":"孝义市","value":"1771"},{"text":"汾阳市","value":"1772"},{"text":"文水县","value":"1773"},{"text":"中阳县","value":"1774"},{"text":"兴县","value":"1775"},{"text":"临县","value":"1776"},{"text":"方山县","value":"1777"},{"text":"柳林县","value":"1778"},{"text":"岚县","value":"1779"},{"text":"交口县","value":"1780"},{"text":"交城县","value":"1781"},{"text":"石楼县","value":"1782"}],1277:[{"text":"尧都区","value":"1740"},{"text":"侯马市","value":"1741"},{"text":"霍州市","value":"1742"},{"text":"汾西县","value":"1743"},{"text":"吉县","value":"1744"},{"text":"安泽县","value":"1745"},{"text":"大宁县","value":"1746"},{"text":"浮山县","value":"1747"},{"text":"古县","value":"1748"},{"text":"隰县","value":"1749"},{"text":"襄汾县","value":"1750"},{"text":"翼城县","value":"1751"},{"text":"永和县","value":"1752"},{"text":"乡宁县","value":"1753"},{"text":"曲沃县","value":"1754"},{"text":"洪洞县","value":"1755"},{"text":"蒲县","value":"1756"}],1278:[{"text":"忻府区","value":"1726"},{"text":"原平市","value":"1727"},{"text":"代县","value":"1728"},{"text":"神池县","value":"1729"},{"text":"五寨县","value":"1730"},{"text":"五台县","value":"1731"},{"text":"偏关县","value":"1732"},{"text":"宁武县","value":"1733"},{"text":"静乐县","value":"1734"},{"text":"繁峙县","value":"1735"},{"text":"河曲县","value":"1736"},{"text":"保德县","value":"1737"},{"text":"定襄县","value":"1738"},{"text":"岢岚县","value":"1739"}],1279:[{"text":"朔城区","value":"1709"},{"text":"平鲁区","value":"1710"},{"text":"山阴县","value":"1711"},{"text":"右玉县","value":"1712"},{"text":"应县","value":"1713"},{"text":"怀仁县","value":"1714"}],1280:[{"text":"杏花岭区","value":"1664"},{"text":"小店区","value":"1665"},{"text":"迎泽区","value":"1666"},{"text":"尖草坪区","value":"1667"},{"text":"万柏林区","value":"1668"},{"text":"晋源区","value":"1669"},{"text":"古交市","value":"1670"},{"text":"阳曲县","value":"1671"},{"text":"清徐县","value":"1672"},{"text":"娄烦县","value":"1673"}],1281:[{"text":"城区","value":"1685"},{"text":"矿区","value":"1686"},{"text":"郊区","value":"1687"},{"text":"平定县","value":"1688"},{"text":"盂县","value":"1689"}],1282:[{"text":"盐湖区","value":"1757"},{"text":"河津市","value":"1758"},{"text":"永济市","value":"1759"},{"text":"闻喜县","value":"1760"},{"text":"新绛县","value":"1761"},{"text":"平陆县","value":"1762"},{"text":"垣曲县","value":"1763"},{"text":"绛县","value":"1764"},{"text":"稷山县","value":"1765"},{"text":"芮城县","value":"1766"},{"text":"夏县","value":"1767"},{"text":"万荣县","value":"1768"},{"text":"临猗县","value":"1769"}],1283:[{"text":"城区","value":"1690"},{"text":"郊区","value":"1691"},{"text":"潞城市","value":"1692"},{"text":"长治县","value":"1693"},{"text":"长子县","value":"1694"},{"text":"平顺县","value":"1695"},{"text":"襄垣县","value":"1696"},{"text":"沁源县","value":"1697"},{"text":"屯留县","value":"1698"},{"text":"黎城县","value":"1699"},{"text":"武乡县","value":"1700"},{"text":"沁县","value":"1701"},{"text":"壶关县","value":"1702"}],1284:[{"text":"城区","value":"1674"},{"text":"矿区","value":"1675"},{"text":"南郊区","value":"1676"},{"text":"新荣区","value":"1677"},{"text":"大同县","value":"1678"},{"text":"天镇县","value":"1679"},{"text":"灵丘县","value":"1680"},{"text":"阳高县","value":"1681"},{"text":"左云县","value":"1682"},{"text":"广灵县","value":"1683"},{"text":"浑源县","value":"1684"}],1285:[{"text":"榆次区","value":"1715"},{"text":"介休市","value":"1716"},{"text":"昔阳县","value":"1717"},{"text":"灵石县","value":"1718"},{"text":"祁县","value":"1719"},{"text":"左权县","value":"1720"},{"text":"寿阳县","value":"1721"},{"text":"太谷县","value":"1722"},{"text":"和顺县","value":"1723"},{"text":"平遥县","value":"1724"},{"text":"榆社县","value":"1725"}],1286:[{"text":"城区","value":"1703"},{"text":"高平市","value":"1704"},{"text":"泽州县","value":"1705"},{"text":"陵川县","value":"1706"},{"text":"阳城县","value":"1707"},{"text":"沁水县","value":"1708"}],1297:[{"text":"涪城区","value":"3480"},{"text":"游仙区","value":"3481"},{"text":"江油市","value":"3482"},{"text":"盐亭县","value":"3483"},{"text":"三台县","value":"3484"},{"text":"平武县","value":"3485"},{"text":"北川县","value":"3486"},{"text":"安县","value":"3487"},{"text":"梓潼县","value":"3488"}],1298:[{"text":"江阳区","value":"3467"},{"text":"纳溪区","value":"3468"},{"text":"龙马潭区","value":"3469"},{"text":"泸县","value":"3470"},{"text":"合江县","value":"3471"},{"text":"叙永县","value":"3472"},{"text":"古蔺县","value":"3473"}],1299:[{"text":"市中区","value":"3505"},{"text":"五通桥区","value":"3506"},{"text":"沙湾区","value":"3507"},{"text":"金口河区","value":"3508"},{"text":"峨眉山市","value":"3509"},{"text":"夹江县","value":"3510"},{"text":"井研县","value":"3511"},{"text":"犍为县","value":"3512"},{"text":"沐川县","value":"3513"},{"text":"马边彝族自治县","value":"3514"},{"text":"峨边彝族自治县","value":"3515"}],1300:[{"text":"西昌市","value":"3600"},{"text":"美姑县","value":"3601"},{"text":"昭觉县","value":"3602"},{"text":"金阳县","value":"3603"},{"text":"甘洛县","value":"3604"},{"text":"布拖县","value":"3605"},{"text":"雷波县","value":"3606"},{"text":"普格县","value":"3607"},{"text":"宁南县","value":"3608"},{"text":"喜德县","value":"3609"},{"text":"会东县","value":"3610"},{"text":"越西县","value":"3611"},{"text":"会理县","value":"3612"},{"text":"盐源县","value":"3613"},{"text":"德昌县","value":"3614"},{"text":"冕宁县","value":"3615"},{"text":"木里藏族自治县","value":"3616"}],1301:[{"text":"东坡区","value":"3559"},{"text":"仁寿县","value":"3560"},{"text":"彭山县","value":"3561"},{"text":"洪雅县","value":"3562"},{"text":"丹棱县","value":"3563"},{"text":"青神县","value":"3564"}],1302:[{"text":"市中区","value":"3496"},{"text":"射洪县","value":"3497"},{"text":"蓬溪县","value":"3498"},{"text":"大英县","value":"3499"},{"text":"船山区","value":"4322"}],1303:[{"text":"雨城区","value":"3551"},{"text":"芦山县","value":"3552"},{"text":"石棉县","value":"3553"},{"text":"名山县","value":"3554"},{"text":"天全县","value":"3555"},{"text":"荥经县","value":"3556"},{"text":"宝兴县","value":"3557"},{"text":"汉源县","value":"3558"}],1304:[{"text":"翠屏区","value":"3525"},{"text":"宜宾县","value":"3526"},{"text":"兴文县","value":"3527"},{"text":"南溪县","value":"3528"},{"text":"珙县","value":"3529"},{"text":"江安县","value":"3530"},{"text":"筠连县","value":"3531"},{"text":"屏山县","value":"3532"},{"text":"长宁县","value":"3533"},{"text":"高县","value":"3534"}],1305:[{"text":"东区","value":"3462"},{"text":"西区","value":"3463"},{"text":"仁和区","value":"3464"},{"text":"米易县","value":"3465"},{"text":"盐边县","value":"3466"}],1306:[{"text":"顺庆区","value":"3516"},{"text":"高坪区","value":"3517"},{"text":"嘉陵区","value":"3518"},{"text":"阆中市","value":"3519"},{"text":"营山县","value":"3520"},{"text":"蓬安县","value":"3521"},{"text":"仪陇县","value":"3522"},{"text":"南部县","value":"3523"},{"text":"西充县","value":"3524"}],1307:[{"text":"市中区","value":"3500"},{"text":"东兴区","value":"3501"},{"text":"资中县","value":"3502"},{"text":"隆昌县","value":"3503"},{"text":"威远县","value":"3504"}],1308:[{"text":"巴州区","value":"3547"},{"text":"南江县","value":"3548"},{"text":"平昌县","value":"3549"},{"text":"通江县","value":"3550"}],1309:[{"text":"马尔康县","value":"3569"},{"text":"九寨沟县","value":"3570"},{"text":"红原县","value":"3571"},{"text":"汶川县","value":"3572"},{"text":"阿坝县","value":"3573"},{"text":"理县","value":"3574"},{"text":"若尔盖县","value":"3575"},{"text":"小金县","value":"3576"},{"text":"黑水县","value":"3577"},{"text":"金川县","value":"3578"},{"text":"松潘县","value":"3579"},{"text":"壤塘县","value":"3580"},{"text":"茂县","value":"3581"}],1310:[{"text":"青羊区","value":"3437"},{"text":"锦江区","value":"3438"},{"text":"金牛区","value":"3439"},{"text":"武侯区","value":"3440"},{"text":"成华区","value":"3441"},{"text":"龙泉驿区","value":"3442"},{"text":"青白江区","value":"3443"},{"text":"新都区","value":"3444"},{"text":"都江堰市","value":"3445"},{"text":"彭州市","value":"3446"},{"text":"邛崃市","value":"3447"},{"text":"崇州市","value":"3448"},{"text":"金堂县","value":"3449"},{"text":"温江区","value":"3450"},{"text":"郫县","value":"3451"},{"text":"新津县","value":"3452"},{"text":"双流县","value":"3453"},{"text":"蒲江县","value":"3454"},{"text":"大邑县","value":"3455"}],1311:[{"text":"通川区","value":"3540"},{"text":"","value":"3541"},{"text":"达县","value":"3542"},{"text":"渠县","value":"3543"},{"text":"宣汉县","value":"3544"},{"text":"开江县","value":"3545"},{"text":"大竹县","value":"3546"}],1312:[{"text":"旌阳区","value":"3474"},{"text":"广汉市","value":"3475"},{"text":"什邡市","value":"3476"},{"text":"绵竹市","value":"3477"},{"text":"罗江县","value":"3478"},{"text":"中江县","value":"3479"}],1313:[{"text":"康定县","value":"3582"},{"text":"丹巴县","value":"3583"},{"text":"炉霍县","value":"3584"},{"text":"九龙县","value":"3585"},{"text":"甘孜县","value":"3586"},{"text":"雅江县","value":"3587"},{"text":"新龙县","value":"3588"},{"text":"道孚县","value":"3589"},{"text":"白玉县","value":"3590"},{"text":"理塘县","value":"3591"},{"text":"德格县","value":"3592"},{"text":"乡城县","value":"3593"},{"text":"石渠县","value":"3594"},{"text":"稻城县","value":"3595"},{"text":"色达县","value":"3596"},{"text":"巴塘县","value":"3597"},{"text":"泸定县","value":"3598"},{"text":"得荣县","value":"3599"}],1314:[{"text":"市中区","value":"3489"},{"text":"元坝区","value":"3490"},{"text":"朝天区","value":"3491"},{"text":"青川县","value":"3492"},{"text":"旺苍县","value":"3493"},{"text":"剑阁县","value":"3494"},{"text":"苍溪县","value":"3495"},{"text":"利州区","value":"4323"}],1315:[{"text":"广安区","value":"3535"},{"text":"华蓥市","value":"3536"},{"text":"岳池县","value":"3537"},{"text":"邻水县","value":"3538"},{"text":"武胜县","value":"3539"}],1316:[{"text":"雁江区","value":"3565"},{"text":"简阳市","value":"3566"},{"text":"安岳县","value":"3567"},{"text":"乐至县","value":"3568"}],1317:[{"text":"大安区","value":"3456"},{"text":"自流井区","value":"3457"},{"text":"贡井区","value":"3458"},{"text":"沿滩区","value":"3459"},{"text":"荣县","value":"3460"},{"text":"富顺县","value":"3461"}],1131:[{"text":"西工区","value":"2822"},{"text":"老城区","value":"2823"},{"text":"涧西区","value":"2824"},{"text":"瀍河回族区","value":"2825"},{"text":"洛龙区","value":"2826"},{"text":"吉利区","value":"2827"},{"text":"偃师市","value":"2828"},{"text":"孟津县","value":"2829"},{"text":"汝阳县","value":"2830"},{"text":"伊川县","value":"2831"},{"text":"洛宁县","value":"2832"},{"text":"嵩县","value":"2833"},{"text":"宜阳县","value":"2834"},{"text":"新安县","value":"2835"},{"text":"栾川县","value":"2836"}],1132:[{"text":"新华区","value":"2862"},{"text":"北站区","value":"2864"},{"text":"郊区","value":"2865"},{"text":"卫辉市","value":"2866"},{"text":"辉县市","value":"2867"},{"text":"新乡县","value":"2868"},{"text":"获嘉县","value":"2869"},{"text":"原阳县","value":"2870"},{"text":"长垣县","value":"2871"},{"text":"封丘县","value":"2872"},{"text":"延津县","value":"2873"}],1133:[{"text":"魏都区","value":"2889"},{"text":"禹州市","value":"2890"},{"text":"长葛市","value":"2891"},{"text":"许昌县","value":"2892"},{"text":"鄢陵县","value":"2893"},{"text":"襄城县","value":"2894"}],1134:[{"text":"浉河区","value":"2927"},{"text":"平桥区","value":"2928"},{"text":"潢川县","value":"2929"},{"text":"淮滨县","value":"2930"},{"text":"息县","value":"2931"},{"text":"新县","value":"2932"},{"text":"商城县","value":"2933"},{"text":"固始县","value":"2934"},{"text":"罗山县","value":"2935"},{"text":"光山县","value":"2936"}],1135:[{"text":"梁园区","value":"2918"},{"text":"睢阳区","value":"2919"},{"text":"永城市","value":"2920"},{"text":"宁陵县","value":"2921"},{"text":"虞城县","value":"2922"},{"text":"民权县","value":"2923"},{"text":"夏邑县","value":"2924"},{"text":"柘城县","value":"2925"},{"text":"睢县","value":"2926"}],1136:[{"text":"湖滨区","value":"2899"},{"text":"义马市","value":"2900"},{"text":"灵宝市","value":"2901"},{"text":"渑池县","value":"2902"},{"text":"卢氏县","value":"2903"},{"text":"陕县","value":"2904"}],1137:[{"text":"华龙区","value":"2883"},{"text":"濮阳县","value":"2884"},{"text":"南乐县","value":"2885"},{"text":"台前县","value":"2886"},{"text":"清丰县","value":"2887"},{"text":"范县","value":"2888"}],1138:[{"text":"源汇区","value":"2895"},{"text":"郾城县","value":"2896"},{"text":"临颍县","value":"2897"},{"text":"舞阳县","value":"2898"}],1139:[{"text":"卧龙区","value":"2905"},{"text":"宛城区","value":"2906"},{"text":"邓州市","value":"2907"},{"text":"桐柏县","value":"2908"},{"text":"方城县","value":"2909"},{"text":"淅川县","value":"2910"},{"text":"镇平县","value":"2911"},{"text":"唐河县","value":"2912"},{"text":"南召县","value":"2913"},{"text":"内乡县","value":"2914"},{"text":"新野县","value":"2915"},{"text":"社旗县","value":"2916"},{"text":"西峡县","value":"2917"}],1140:[{"text":"新华区","value":"2837"},{"text":"卫东区","value":"2838"},{"text":"石龙区","value":"2840"},{"text":"汝州市","value":"2841"},{"text":"舞钢市","value":"2842"},{"text":"宝丰县","value":"2843"},{"text":"叶县","value":"2844"},{"text":"郏县","value":"2845"},{"text":"鲁山县","value":"2846"}],1141:[{"text":"川汇区","value":"2937"},{"text":"项城市","value":"2938"},{"text":"商水县","value":"2939"},{"text":"淮阳县","value":"2940"},{"text":"太康县","value":"2941"},{"text":"鹿邑县","value":"2942"},{"text":"西华县","value":"2943"},{"text":"扶沟县","value":"2944"},{"text":"沈丘县","value":"2945"},{"text":"郸城县","value":"2946"}],1142:[{"text":"中原区","value":"2800"},{"text":"金水区","value":"2801"},{"text":"二七区","value":"2802"},{"text":"管城回族区","value":"2803"},{"text":"上街区","value":"2804"},{"text":"惠济区","value":"2805"},{"text":"巩义市","value":"2806"},{"text":"新郑市","value":"2807"},{"text":"新密市","value":"2808"},{"text":"登封市","value":"2809"},{"text":"荥阳市","value":"2810"},{"text":"中牟县","value":"2811"}],1143:[{"text":"北关区","value":"2874"},{"text":"文峰区","value":"2875"},{"text":"殷都区","value":"2876"},{"text":"龙安区","value":"2877"},{"text":"林州市","value":"2878"},{"text":"安阳县","value":"2879"},{"text":"滑县","value":"2880"},{"text":"内黄县","value":"2881"},{"text":"汤阴县","value":"2882"}],1144:[{"text":"淇滨区","value":"2857"},{"text":"山城区","value":"2858"},{"text":"鹤山区","value":"2859"},{"text":"浚县","value":"2860"},{"text":"淇县","value":"2861"}],1145:[{"text":"解放区","value":"2847"},{"text":"中站区","value":"2848"},{"text":"马村区","value":"2849"},{"text":"山阳区","value":"2850"},{"text":"沁阳市","value":"2851"},{"text":"孟州市","value":"2852"},{"text":"修武县","value":"2853"},{"text":"温县","value":"2854"},{"text":"武陟县","value":"2855"},{"text":"博爱县","value":"2856"}],1146:[{"text":"鼓楼区","value":"2812"},{"text":"龙亭区","value":"2813"},{"text":"顺河回族区","value":"2814"},{"text":"南关区","value":"2815"},{"text":"禹王台区","value":"2816"},{"text":"开封县","value":"2817"},{"text":"尉氏县","value":"2818"},{"text":"兰考县","value":"2819"},{"text":"杞县","value":"2820"},{"text":"通许县","value":"2821"}],1147:[{"text":"驿城区","value":"2947"},{"text":"确山县","value":"2948"},{"text":"新蔡县","value":"2949"},{"text":"上蔡县","value":"2950"},{"text":"西平县","value":"2951"},{"text":"泌阳县","value":"2952"},{"text":"平舆县","value":"2953"},{"text":"汝南县","value":"2954"},{"text":"遂平县","value":"2955"},{"text":"正阳县","value":"2956"}],1391:[{"text":"济源市","value":"2957"}],1221:[{"text":"白塔区","value":"1862"},{"text":"文圣区","value":"1863"},{"text":"宏伟区","value":"1864"},{"text":"太子河区","value":"1865"},{"text":"弓长岭区","value":"1866"},{"text":"灯塔市","value":"1867"},{"text":"辽阳县","value":"1868"}],1222:[{"text":"沈河区","value":"1783"},{"text":"皇姑区","value":"1784"},{"text":"和平区","value":"1785"},{"text":"大东区","value":"1786"},{"text":"铁西区","value":"1787"},{"text":"苏家屯区","value":"1788"},{"text":"东陵区","value":"1789"},{"text":"沈北新区","value":"1790"},{"text":"于洪区","value":"1791"},{"text":"新民市","value":"1792"},{"text":"法库县","value":"1793"},{"text":"辽中县","value":"1794"},{"text":"康平县","value":"1795"}],1223:[{"text":"银州区","value":"1869"},{"text":"清河区","value":"1870"},{"text":"调兵山市","value":"1871"},{"text":"开原市","value":"1872"},{"text":"铁岭县","value":"1873"},{"text":"昌图县","value":"1874"},{"text":"西丰县","value":"1875"}],1224:[{"text":"站前区","value":"1845"},{"text":"西市区","value":"1846"},{"text":"鲅鱼圈区","value":"1847"},{"text":"老边区","value":"1848"},{"text":"大石桥市","value":"1849"},{"text":"盖州市","value":"1850"}],1225:[{"text":"双台子区","value":"1851"},{"text":"兴隆台区","value":"1852"},{"text":"盘山县","value":"1853"},{"text":"大洼县","value":"1854"}],1226:[{"text":"铁东区","value":"1806"},{"text":"铁西区","value":"1807"},{"text":"立山区","value":"1808"},{"text":"千山区","value":"1809"},{"text":"海城市","value":"1810"},{"text":"台安县","value":"1811"},{"text":"岫岩满族自治县","value":"1812"}],1227:[{"text":"平山区","value":"1820"},{"text":"明山区","value":"1821"},{"text":"溪湖区","value":"1822"},{"text":"南芬区","value":"1823"},{"text":"本溪满族自治县","value":"1824"},{"text":"桓仁满族自治县","value":"1825"}],1228:[{"text":"双塔区","value":"1876"},{"text":"龙城区","value":"1877"},{"text":"凌源市","value":"1878"},{"text":"北票市","value":"1879"},{"text":"朝阳县","value":"1880"},{"text":"建平县","value":"1881"},{"text":"喀喇沁左翼蒙古族自治县","value":"1882"}],1229:[{"text":"西岗区","value":"1796"},{"text":"中山区","value":"1797"},{"text":"沙河口区","value":"1798"},{"text":"甘井子区","value":"1799"},{"text":"旅顺口区","value":"1800"},{"text":"金州区","value":"1801"},{"text":"瓦房店市","value":"1802"},{"text":"普兰店市","value":"1803"},{"text":"庄河市","value":"1804"},{"text":"长海县","value":"1805"},{"text":"开发区","value":"4317"}],1230:[{"text":"振兴区","value":"1826"},{"text":"元宝区","value":"1827"},{"text":"振安区","value":"1828"},{"text":"东港市","value":"1829"},{"text":"凤城市","value":"1830"},{"text":"宽甸满族自治县","value":"1831"}],1231:[{"text":"新抚区","value":"1813"},{"text":"东洲区","value":"1814"},{"text":"望花区","value":"1815"},{"text":"顺城区","value":"1816"},{"text":"抚顺县","value":"1817"},{"text":"清原满族自治县","value":"1818"},{"text":"新宾满族自治县","value":"1819"}],1232:[{"text":"海州区","value":"1855"},{"text":"新邱区","value":"1856"},{"text":"太平区","value":"1857"},{"text":"清河门区","value":"1858"},{"text":"细河区","value":"1859"},{"text":"彰武县","value":"1860"},{"text":"阜新蒙古族自治县","value":"1861"}],1233:[{"text":"龙港区","value":"1839"},{"text":"南票区","value":"1840"},{"text":"连山区","value":"1841"},{"text":"兴城市","value":"1842"},{"text":"绥中县","value":"1843"},{"text":"建昌县","value":"1844"}],1234:[{"text":"太和区","value":"1832"},{"text":"古塔区","value":"1833"},{"text":"凌河区","value":"1834"},{"text":"凌海市","value":"1835"},{"text":"北宁市","value":"1836"},{"text":"黑山县","value":"1837"},{"text":"义县","value":"1838"}],1188:[{"text":"龙山区","value":"1908"},{"text":"西安区","value":"1909"},{"text":"东辽县","value":"1910"},{"text":"东丰县","value":"1911"}],1189:[{"text":"宁江区","value":"1925"},{"text":"乾安县","value":"1926"},{"text":"长岭县","value":"1927"},{"text":"扶余县","value":"1928"},{"text":"前郭尔罗斯蒙古族自治县","value":"1929"}],1190:[{"text":"铁西区","value":"1902"},{"text":"铁东区","value":"1903"},{"text":"公主岭市","value":"1904"},{"text":"双辽市","value":"1905"},{"text":"梨树县","value":"1906"},{"text":"伊通满族自治县","value":"1907"}],1191:[{"text":"东昌区","value":"1912"},{"text":"二道江区","value":"1913"},{"text":"梅河口市","value":"1914"},{"text":"集安市","value":"1915"},{"text":"通化县","value":"1916"},{"text":"辉南县","value":"1917"},{"text":"柳河县","value":"1918"}],1192:[{"text":"延吉市","value":"1935"},{"text":"图们市","value":"1936"},{"text":"敦化市","value":"1937"},{"text":"龙井市","value":"1938"},{"text":"珲春市","value":"1939"},{"text":"和龙市","value":"1940"},{"text":"安图县","value":"1941"},{"text":"汪清县","value":"1942"}],1193:[{"text":"浑江区","value":"1919"},{"text":"临江市","value":"1920"},{"text":"靖宇县","value":"1921"},{"text":"抚松县","value":"1922"},{"text":"江源区","value":"1923"},{"text":"长白朝鲜族自治县","value":"1924"}],1194:[{"text":"洮北区","value":"1930"},{"text":"大安市","value":"1931"},{"text":"洮南市","value":"1932"},{"text":"镇赉县","value":"1933"},{"text":"通榆县","value":"1934"}],1195:[{"text":"朝阳区","value":"1883"},{"text":"宽城区","value":"1884"},{"text":"二道区","value":"1885"},{"text":"南关区","value":"1886"},{"text":"绿圆区","value":"1887"},{"text":"双阳区","value":"1888"},{"text":"九台市","value":"1889"},{"text":"榆树市","value":"1890"},{"text":"德惠市","value":"1891"},{"text":"农安县","value":"1892"}],1196:[{"text":"船营区","value":"1893"},{"text":"昌邑区","value":"1894"},{"text":"龙潭区","value":"1895"},{"text":"丰满区","value":"1896"},{"text":"舒兰市","value":"1897"},{"text":"桦甸市","value":"1898"},{"text":"蛟河市","value":"1899"},{"text":"磐石市","value":"1900"},{"text":"永吉县","value":"1901"}],1148:[{"text":"北林区","value":"2060"},{"text":"安达市","value":"2061"},{"text":"肇东市","value":"2062"},{"text":"海伦市","value":"2063"},{"text":"绥棱县","value":"2064"},{"text":"兰西县","value":"2065"},{"text":"明水县","value":"2066"},{"text":"青冈县","value":"2067"},{"text":"庆安县","value":"2068"},{"text":"望奎县","value":"2069"}],1149:[{"text":"尖山区","value":"1986"},{"text":"岭东区","value":"1987"},{"text":"四方台区","value":"1988"},{"text":"宝山区","value":"1989"},{"text":"集贤县","value":"1990"},{"text":"宝清县","value":"1991"},{"text":"友谊县","value":"1992"},{"text":"饶河县","value":"1993"}],1150:[{"text":"伊春区","value":"2012"},{"text":"带岭区","value":"2013"},{"text":"南岔区","value":"2014"},{"text":"金山屯区","value":"2015"},{"text":"西林区","value":"2016"},{"text":"美溪区","value":"2017"},{"text":"乌马河区","value":"2018"},{"text":"翠峦区","value":"2019"},{"text":"友好区","value":"2020"},{"text":"上甘岭区","value":"2021"},{"text":"五营区","value":"2022"},{"text":"红星区","value":"2023"},{"text":"新青区","value":"2024"},{"text":"汤旺河区","value":"2025"},{"text":"乌伊岭区","value":"2026"},{"text":"铁力市","value":"2027"},{"text":"嘉荫县","value":"2028"}],1151:[{"text":"龙沙区","value":"1962"},{"text":"昂昂溪区","value":"1963"},{"text":"铁峰区","value":"1964"},{"text":"建华区","value":"1965"},{"text":"富拉尔基区","value":"1966"},{"text":"碾子山区","value":"1967"},{"text":"梅里斯达斡尔区","value":"1968"},{"text":"讷河市","value":"1969"},{"text":"富裕县","value":"1970"},{"text":"拜泉县","value":"1971"},{"text":"甘南县","value":"1972"},{"text":"依安县","value":"1973"},{"text":"克山县","value":"1974"},{"text":"泰来县","value":"1975"},{"text":"克东县","value":"1976"},{"text":"龙江县","value":"1977"}],1152:[{"text":"爱民区","value":"2029"},{"text":"东安区","value":"2030"},{"text":"阳明区","value":"2031"},{"text":"西安区","value":"2032"},{"text":"绥芬河市","value":"2033"},{"text":"宁安市","value":"2034"},{"text":"海林市","value":"2035"},{"text":"穆棱市","value":"2036"},{"text":"林口县","value":"2037"},{"text":"东宁县","value":"2038"}],1153:[{"text":"桃山区","value":"2050"},{"text":"新兴区","value":"2051"},{"text":"茄子河区","value":"2052"},{"text":"勃利县","value":"2053"}],1154:[{"text":"萨尔图区","value":"2003"},{"text":"红岗区","value":"2004"},{"text":"龙凤区","value":"2005"},{"text":"让胡路区","value":"2006"},{"text":"大同区","value":"2007"},{"text":"林甸县","value":"2008"},{"text":"肇州县","value":"2009"},{"text":"肇源县","value":"2010"},{"text":"杜尔伯特蒙古族自治县","value":"2011"}],1155:[{"text":"呼玛县","value":"2070"},{"text":"塔河县","value":"2071"},{"text":"漠河县","value":"2072"}],1156:[{"text":"道里区","value":"1943"},{"text":"南岗区","value":"1944"},{"text":"动力区","value":"1945"},{"text":"平房区","value":"1946"},{"text":"香坊区","value":"1947"},{"text":"松北区","value":"1948"},{"text":"呼兰区","value":"1949"},{"text":"道外区","value":"1950"},{"text":"阿城市","value":"1951"},{"text":"尚志市","value":"1952"},{"text":"双城市","value":"1953"},{"text":"五常市","value":"1954"},{"text":"方正县","value":"1955"},{"text":"宾县","value":"1956"},{"text":"依兰县","value":"1957"},{"text":"巴彦县","value":"1958"},{"text":"通河县","value":"1959"},{"text":"木兰县","value":"1960"},{"text":"延寿县","value":"1961"}],1157:[{"text":"爱辉区","value":"2054"},{"text":"北安市","value":"2055"},{"text":"五大连池市","value":"2056"},{"text":"逊克县","value":"2057"},{"text":"嫩江县","value":"2058"},{"text":"孙吴县","value":"2059"}],1158:[{"text":"兴山区","value":"1978"},{"text":"工农区","value":"1979"},{"text":"南山区","value":"1980"},{"text":"兴安区","value":"1981"},{"text":"向阳区","value":"1982"},{"text":"东山区","value":"1983"},{"text":"萝北县","value":"1984"},{"text":"绥滨县","value":"1985"}],1159:[{"text":"前进区","value":"2039"},{"text":"永红区","value":"2040"},{"text":"向阳区","value":"2041"},{"text":"东风区","value":"2042"},{"text":"郊区","value":"2043"},{"text":"同江市","value":"2044"},{"text":"富锦市","value":"2045"},{"text":"桦川县","value":"2046"},{"text":"抚远县","value":"2047"},{"text":"桦南县","value":"2048"},{"text":"汤原县","value":"2049"}],1160:[{"text":"鸡冠区","value":"1994"},{"text":"恒山区","value":"1995"},{"text":"城子河区","value":"1996"},{"text":"滴道区","value":"1997"},{"text":"梨树区","value":"1998"},{"text":"麻山区","value":"1999"},{"text":"密山市","value":"2000"},{"text":"虎林市","value":"2001"},{"text":"鸡东县","value":"2002"}],1259:[{"text":"兰山区","value":"2764"},{"text":"罗庄区","value":"2765"},{"text":"河东区","value":"2766"},{"text":"沂南县","value":"2767"},{"text":"郯城县","value":"2768"},{"text":"沂水县","value":"2769"},{"text":"苍山县","value":"2770"},{"text":"费县","value":"2771"},{"text":"平邑县","value":"2772"},{"text":"莒南县","value":"2773"},{"text":"蒙阴县","value":"2774"},{"text":"临沭县","value":"2775"}],1260:[{"text":"东昌府区","value":"2776"},{"text":"临清市","value":"2777"},{"text":"高唐县","value":"2778"},{"text":"阳谷县","value":"2779"},{"text":"茌平县","value":"2780"},{"text":"莘县","value":"2781"},{"text":"东阿县","value":"2782"},{"text":"冠县","value":"2783"}],1261:[{"text":"莱城区","value":"2751"},{"text":"钢城区","value":"2752"}],1262:[{"text":"市南区","value":"2671"},{"text":"市北区","value":"2672"},{"text":"城阳区","value":"2673"},{"text":"四方区","value":"2674"},{"text":"李沧区","value":"2675"},{"text":"黄岛区","value":"2676"},{"text":"崂山区","value":"2677"},{"text":"胶南市","value":"2678"},{"text":"胶州市","value":"2679"},{"text":"平度市","value":"2680"},{"text":"莱西市","value":"2681"},{"text":"即墨市","value":"2682"}],1263:[{"text":"东港区","value":"2748"},{"text":"五莲县","value":"2749"},{"text":"莒县","value":"2750"}],1264:[{"text":"泰山区","value":"2742"},{"text":"岱岳区","value":"2743"},{"text":"新泰市","value":"2744"},{"text":"肥城市","value":"2745"},{"text":"宁阳县","value":"2746"},{"text":"东平县","value":"2747"}],1265:[{"text":"潍城区","value":"2702"},{"text":"寒亭区","value":"2703"},{"text":"坊子区","value":"2704"},{"text":"奎文区","value":"2705"},{"text":"青州市","value":"2706"},{"text":"诸城市","value":"2707"},{"text":"寿光市","value":"2708"},{"text":"安丘市","value":"2709"},{"text":"高密市","value":"2710"},{"text":"昌邑市","value":"2711"},{"text":"昌乐县","value":"2712"},{"text":"临朐县","value":"2713"}],1266:[{"text":"环翠区","value":"2726"},{"text":"乳山市","value":"2727"},{"text":"文登市","value":"2728"},{"text":"荣成市","value":"2729"}],1267:[{"text":"芝罘区","value":"2714"},{"text":"福山区","value":"2715"},{"text":"牟平区","value":"2716"},{"text":"莱山区","value":"2717"},{"text":"龙口市","value":"2718"},{"text":"莱阳市","value":"2719"},{"text":"莱州市","value":"2720"},{"text":"招远市","value":"2721"},{"text":"蓬莱市","value":"2722"},{"text":"栖霞市","value":"2723"},{"text":"海阳市","value":"2724"},{"text":"长岛县","value":"2725"}],1268:[{"text":"市中区","value":"2691"},{"text":"山亭区","value":"2692"},{"text":"峄城区","value":"2693"},{"text":"台儿庄区","value":"2694"},{"text":"薛城区","value":"2695"},{"text":"滕州市","value":"2696"}],1269:[{"text":"滨城区","value":"2784"},{"text":"邹平县","value":"2785"},{"text":"沾化县","value":"2786"},{"text":"惠民县","value":"2787"},{"text":"博兴县","value":"2788"},{"text":"阳信县","value":"2789"},{"text":"无棣县","value":"2790"}],1270:[{"text":"德城区","value":"2753"},{"text":"乐陵市","value":"2754"},{"text":"禹城市","value":"2755"},{"text":"陵县","value":"2756"},{"text":"宁津县","value":"2757"},{"text":"齐河县","value":"2758"},{"text":"武城县","value":"2759"},{"text":"庆云县","value":"2760"},{"text":"平原县","value":"2761"},{"text":"夏津县","value":"2762"},{"text":"临邑县","value":"2763"}],1271:[{"text":"东营区","value":"2697"},{"text":"河口区","value":"2698"},{"text":"垦利县","value":"2699"},{"text":"广饶县","value":"2700"},{"text":"利津县","value":"2701"}],1272:[{"text":"牡丹区","value":"2791"},{"text":"鄄城县","value":"2792"},{"text":"单县","value":"2793"},{"text":"郓城县","value":"2794"},{"text":"曹县","value":"2795"},{"text":"定陶县","value":"2796"},{"text":"巨野县","value":"2797"},{"text":"东明县","value":"2798"},{"text":"成武县","value":"2799"}],1273:[{"text":"市中区","value":"2661"},{"text":"历下区","value":"2662"},{"text":"天桥区","value":"2663"},{"text":"槐荫区","value":"2664"},{"text":"历城区","value":"2665"},{"text":"长清区","value":"2666"},{"text":"章丘市","value":"2667"},{"text":"平阴县","value":"2668"},{"text":"济阳县","value":"2669"},{"text":"商河县","value":"2670"}],1274:[{"text":"市中区","value":"2730"},{"text":"任城区","value":"2731"},{"text":"曲阜市","value":"2732"},{"text":"兖州市","value":"2733"},{"text":"邹城市","value":"2734"},{"text":"鱼台县","value":"2735"},{"text":"金乡县","value":"2736"},{"text":"嘉祥县","value":"2737"},{"text":"微山县","value":"2738"},{"text":"汶上县","value":"2739"},{"text":"泗水县","value":"2740"},{"text":"梁山县","value":"2741"}],1275:[{"text":"张店区","value":"2683"},{"text":"临淄区","value":"2684"},{"text":"淄川区","value":"2685"},{"text":"博山区","value":"2686"},{"text":"周村区","value":"2687"},{"text":"桓台县","value":"2688"},{"text":"高青县","value":"2689"},{"text":"沂源县","value":"2690"}],1034:[{"text":"雨山区","value":"2399"},{"text":"花山区","value":"2400"},{"text":"博望区","value":"2401"},{"text":"当涂县","value":"2402"},{"text":"含山县","value":"4287"},{"text":"和县","value":"4288"},{"text":"金家庄区","value":"4321"}],1035:[{"text":"金安区","value":"2455"},{"text":"裕安区","value":"2456"},{"text":"寿县","value":"2457"},{"text":"霍山县","value":"2458"},{"text":"霍邱县","value":"2459"},{"text":"舒城县","value":"2460"},{"text":"金寨县","value":"2461"}],1036:[{"text":"宣州区","value":"2466"},{"text":"宁国市","value":"2467"},{"text":"广德县","value":"2468"},{"text":"郎溪县","value":"2469"},{"text":"泾县","value":"2470"},{"text":"旌德县","value":"2471"},{"text":"绩溪县","value":"2472"}],1037:[{"text":"埇桥区","value":"2445"},{"text":"萧县","value":"2446"},{"text":"泗县","value":"2447"},{"text":"砀山县","value":"2448"},{"text":"灵璧县","value":"2449"}],1038:[{"text":"铜官山区","value":"2407"},{"text":"狮子山区","value":"2408"},{"text":"郊区","value":"2409"},{"text":"铜陵县","value":"2410"}],1039:[{"text":"镜湖区","value":"2379"},{"text":"鸠江区","value":"2382"},{"text":"芜湖县","value":"2383"},{"text":"南陵县","value":"2384"},{"text":"繁昌县","value":"2385"},{"text":"三山区","value":"4283"},{"text":"无为县","value":"4284"}],1040:[{"text":"谯城区","value":"2462"},{"text":"利辛县","value":"2463"},{"text":"涡阳县","value":"2464"},{"text":"蒙城县","value":"2465"}],1041:[{"text":"蚌山区","value":"2386"},{"text":"禹会区","value":"2387"},{"text":"龙子湖区","value":"2388"},{"text":"淮上区","value":"2389"},{"text":"怀远县","value":"2390"},{"text":"固镇县","value":"2391"},{"text":"五河县","value":"2392"},{"text":"高新区","value":"4289"},{"text":"经开区","value":"4290"}],1042:[{"text":"迎江区","value":"2411"},{"text":"大观区","value":"2412"},{"text":"宜秀区","value":"2413"},{"text":"桐城市","value":"2414"},{"text":"宿松县","value":"2415"},{"text":"枞阳县","value":"2416"},{"text":"太湖县","value":"2417"},{"text":"怀宁县","value":"2418"},{"text":"岳西县","value":"2419"},{"text":"望江县","value":"2420"},{"text":"潜山县","value":"2421"}],1043:[{"text":"琅琊区","value":"2429"},{"text":"南谯区","value":"2430"},{"text":"天长市","value":"2431"},{"text":"明光市","value":"2432"},{"text":"全椒县","value":"2433"},{"text":"来安县","value":"2434"},{"text":"定远县","value":"2435"},{"text":"凤阳县","value":"2436"}],1045:[{"text":"颖州区","value":"2437"},{"text":"颖东区","value":"2438"},{"text":"颖泉区","value":"2439"},{"text":"界首市","value":"2440"},{"text":"临泉县","value":"2441"},{"text":"颖上县","value":"2442"},{"text":"阜南县","value":"2443"},{"text":"太和县","value":"2444"}],1046:[{"text":"贵池区","value":"2473"},{"text":"东至县","value":"2474"},{"text":"石台县","value":"2475"},{"text":"青阳县","value":"2476"}],1047:[{"text":"庐阳区","value":"2372"},{"text":"瑶海区","value":"2373"},{"text":"蜀山区","value":"2374"},{"text":"包河区","value":"2375"},{"text":"长丰县","value":"2376"},{"text":"肥东县","value":"2377"},{"text":"肥西县","value":"2378"},{"text":"巢湖市","value":"4285"},{"text":"庐江县","value":"4286"}],1048:[{"text":"屯溪区","value":"2422"},{"text":"黄山区","value":"2423"},{"text":"徽州区","value":"2424"},{"text":"休宁县","value":"2425"},{"text":"歙县","value":"2426"},{"text":"祁门县","value":"2427"},{"text":"黟县","value":"2428"}],1049:[{"text":"田家庵区","value":"2393"},{"text":"大通区","value":"2394"},{"text":"谢家集区","value":"2395"},{"text":"八公山区","value":"2396"},{"text":"潘集区","value":"2397"},{"text":"凤台县","value":"2398"}],1050:[{"text":"相山区","value":"2403"},{"text":"杜集区","value":"2404"},{"text":"烈山区","value":"2405"},{"text":"濉溪县","value":"2406"}],1051:[{"text":"新罗区","value":"2546"},{"text":"漳平市","value":"2547"},{"text":"长汀县","value":"2548"},{"text":"武平县","value":"2549"},{"text":"上杭县","value":"2550"},{"text":"永定县","value":"2551"},{"text":"连城县","value":"2552"}],1052:[{"text":"梅列区","value":"2496"},{"text":"三元区","value":"2497"},{"text":"永安市","value":"2498"},{"text":"明溪县","value":"2499"},{"text":"将乐县","value":"2500"},{"text":"大田县","value":"2501"},{"text":"宁化县","value":"2502"},{"text":"建宁县","value":"2503"},{"text":"沙县","value":"2504"},{"text":"尤溪县","value":"2505"},{"text":"清流县","value":"2506"},{"text":"泰宁县","value":"2507"}],1053:[{"text":"鲤城区","value":"2513"},{"text":"丰泽区","value":"2514"},{"text":"洛江区","value":"2515"},{"text":"泉港区","value":"2516"},{"text":"石狮市","value":"2517"},{"text":"晋江市","value":"2518"},{"text":"南安市","value":"2519"},{"text":"惠安县","value":"2520"},{"text":"永春县","value":"2521"},{"text":"安溪县","value":"2522"},{"text":"德化县","value":"2523"},{"text":"金门县","value":"2524"}],1054:[{"text":"集美区","value":"2490"},{"text":"海沧区","value":"2491"},{"text":"思明区","value":"2492"},{"text":"湖里区","value":"2493"},{"text":"同安区","value":"2494"},{"text":"翔安区","value":"2495"}],1055:[{"text":"芗城区","value":"2525"},{"text":"龙文区","value":"2526"},{"text":"龙海市","value":"2527"},{"text":"平和县","value":"2528"},{"text":"南靖县","value":"2529"},{"text":"诏安县","value":"2530"},{"text":"漳浦县","value":"2531"},{"text":"华安县","value":"2532"},{"text":"东山县","value":"2533"},{"text":"长泰县","value":"2534"},{"text":"云霄县","value":"2535"}],1056:[{"text":"城厢区","value":"2508"},{"text":"涵江区","value":"2509"},{"text":"荔城区","value":"2510"},{"text":"秀屿区","value":"2511"},{"text":"仙游县","value":"2512"}],1057:[{"text":"延平区","value":"2536"},{"text":"建瓯市","value":"2537"},{"text":"邵武市","value":"2538"},{"text":"武夷山市","value":"2539"},{"text":"建阳市","value":"2540"},{"text":"松溪县","value":"2541"},{"text":"光泽县","value":"2542"},{"text":"顺昌县","value":"2543"},{"text":"浦城县","value":"2544"},{"text":"政和县","value":"2545"}],1058:[{"text":"蕉城区","value":"2553"},{"text":"福安市","value":"2554"},{"text":"福鼎市","value":"2555"},{"text":"寿宁县","value":"2556"},{"text":"霞浦县","value":"2557"},{"text":"柘荣县","value":"2558"},{"text":"屏南县","value":"2559"},{"text":"古田县","value":"2560"},{"text":"周宁县","value":"2561"}],1059:[{"text":"鼓楼区","value":"2477"},{"text":"台江区","value":"2478"},{"text":"仓山区","value":"2479"},{"text":"马尾区","value":"2480"},{"text":"晋安区","value":"2481"},{"text":"福清市","value":"2482"},{"text":"长乐市","value":"2483"},{"text":"闽侯县","value":"2484"},{"text":"闽清县","value":"2485"},{"text":"永泰县","value":"2486"},{"text":"连江县","value":"2487"},{"text":"罗源县","value":"2488"},{"text":"平潭县","value":"2489"}],1161:[{"text":"孝南区","value":"3023"},{"text":"应城市","value":"3024"},{"text":"安陆市","value":"3025"},{"text":"汉川市","value":"3026"},{"text":"云梦县","value":"3027"},{"text":"大悟县","value":"3028"},{"text":"孝昌县","value":"3029"}],1162:[{"text":"曾都区","value":"3046"},{"text":"广水市","value":"3047"},{"text":"随县","value":"4320"}],1163:[{"text":"张湾区","value":"2986"},{"text":"茅箭区","value":"2987"},{"text":"丹江口市","value":"2988"},{"text":"郧县","value":"2989"},{"text":"竹山县","value":"2990"},{"text":"房县","value":"2991"},{"text":"郧西县","value":"2992"},{"text":"竹溪县","value":"2993"}],1164:[{"text":"咸安区","value":"3040"},{"text":"赤壁市","value":"3041"},{"text":"嘉鱼县","value":"3042"},{"text":"通山县","value":"3043"},{"text":"崇阳县","value":"3044"},{"text":"通城县","value":"3045"}],1165:[{"text":"襄城区","value":"2977"},{"text":"樊城区","value":"2978"},{"text":"襄州区","value":"2979"},{"text":"老河口市","value":"2980"},{"text":"枣阳市","value":"2981"},{"text":"宜城市","value":"2982"},{"text":"南漳县","value":"2983"},{"text":"谷城县","value":"2984"},{"text":"保康县","value":"2985"}],1166:[{"text":"江岸区","value":"2958"},{"text":"武昌区","value":"2959"},{"text":"江汉区","value":"2960"},{"text":"硚口区","value":"2961"},{"text":"汉阳区","value":"2962"},{"text":"青山区","value":"2963"},{"text":"洪山区","value":"2964"},{"text":"东西湖区","value":"2965"},{"text":"汉南区","value":"2966"},{"text":"蔡甸区","value":"2967"},{"text":"江夏区","value":"2968"},{"text":"黄陂区","value":"2969"},{"text":"新洲区","value":"2970"}],1167:[{"text":"西陵区","value":"3002"},{"text":"伍家岗区","value":"3003"},{"text":"点军区","value":"3004"},{"text":"猇亭区","value":"3005"},{"text":"夷陵区","value":"3006"},{"text":"宜都市","value":"3007"},{"text":"当阳市","value":"3008"},{"text":"枝江市","value":"3009"},{"text":"秭归县","value":"3010"},{"text":"远安县","value":"3011"},{"text":"兴山县","value":"3012"},{"text":"五峰土家族自治县","value":"3013"},{"text":"长阳土家族自治县","value":"3014"}],1168:[{"text":"鄂城区","value":"3020"},{"text":"华容区","value":"3021"},{"text":"梁子湖区","value":"3022"}],1169:[{"text":"恩施市","value":"3052"},{"text":"利川市","value":"3053"},{"text":"建始县","value":"3054"},{"text":"来凤县","value":"3055"},{"text":"巴东县","value":"3056"},{"text":"鹤峰县","value":"3057"},{"text":"宣恩县","value":"3058"},{"text":"咸丰县","value":"3059"}],1170:[{"text":"黄石港区","value":"2971"},{"text":"西塞山区","value":"2972"},{"text":"下陆区","value":"2973"},{"text":"铁山区","value":"2974"},{"text":"大冶市","value":"2975"},{"text":"阳新县","value":"2976"}],1171:[{"text":"黄州区","value":"3030"},{"text":"麻城市","value":"3031"},{"text":"武穴市","value":"3032"},{"text":"红安县","value":"3033"},{"text":"罗田县","value":"3034"},{"text":"浠水县","value":"3035"},{"text":"蕲春县","value":"3036"},{"text":"黄梅县","value":"3037"},{"text":"英山县","value":"3038"},{"text":"团风县","value":"3039"}],1172:[{"text":"东宝区","value":"3015"},{"text":"掇刀区","value":"3016"},{"text":"钟祥市","value":"3017"},{"text":"京山县","value":"3018"},{"text":"沙洋县","value":"3019"}],1173:[{"text":"沙市区","value":"2994"},{"text":"荆州区","value":"2995"},{"text":"洪湖市","value":"2996"},{"text":"石首市","value":"2997"},{"text":"松滋市","value":"2998"},{"text":"监利县","value":"2999"},{"text":"公安县","value":"3000"},{"text":"江陵县","value":"3001"}],1392:[{"text":"潜江市","value":"3050"}],1393:[{"text":"神农架林区","value":"3051"}],1394:[{"text":"天门市","value":"3049"}],1395:[{"text":"仙桃市","value":"3048"}],1174:[{"text":"娄星区","value":"3169"},{"text":"冷水江市","value":"3170"},{"text":"涟源市","value":"3171"},{"text":"新化县","value":"3172"},{"text":"双峰县","value":"3173"}],1175:[{"text":"双清区","value":"3095"},{"text":"大祥区","value":"3096"},{"text":"北塔区","value":"3097"},{"text":"武冈市","value":"3098"},{"text":"邵东县","value":"3099"},{"text":"洞口县","value":"3100"},{"text":"新邵县","value":"3101"},{"text":"绥宁县","value":"3102"},{"text":"新宁县","value":"3103"},{"text":"邵阳县","value":"3104"},{"text":"隆回县","value":"3105"},{"text":"城步苗族自治县","value":"3106"}],1176:[{"text":"雨湖区","value":"3078"},{"text":"岳塘区","value":"3079"},{"text":"湘乡市","value":"3080"},{"text":"韶山市","value":"3081"},{"text":"湘潭县","value":"3082"}],1177:[{"text":"吉首市","value":"3174"},{"text":"古丈县","value":"3175"},{"text":"龙山县","value":"3176"},{"text":"永顺县","value":"3177"},{"text":"凤凰县","value":"3178"},{"text":"泸溪县","value":"3179"},{"text":"保靖县","value":"3180"},{"text":"花垣县","value":"3181"}],1178:[{"text":"岳阳楼区","value":"3107"},{"text":"君山区","value":"3108"},{"text":"云溪区","value":"3109"},{"text":"临湘市","value":"3110"},{"text":"汨罗市","value":"3111"},{"text":"岳阳县","value":"3112"},{"text":"湘阴县","value":"3113"},{"text":"平江县","value":"3114"},{"text":"华容县","value":"3115"}],1179:[{"text":"冷水滩区","value":"3146"},{"text":"零陵区","value":"3147"},{"text":"祁阳县","value":"3148"},{"text":"蓝山县","value":"3149"},{"text":"宁远县","value":"3150"},{"text":"新田县","value":"3151"},{"text":"东安县","value":"3152"},{"text":"江永县","value":"3153"},{"text":"道县","value":"3154"},{"text":"双牌县","value":"3155"},{"text":"江华瑶族自治县","value":"3156"}],1180:[{"text":"永定区","value":"3125"},{"text":"武陵源区","value":"3126"},{"text":"慈利县","value":"3127"},{"text":"桑植县","value":"3128"}],1181:[{"text":"赫山区","value":"3129"},{"text":"资阳区","value":"3130"},{"text":"沅江市","value":"3131"},{"text":"桃江县","value":"3132"},{"text":"南县","value":"3133"},{"text":"安化县","value":"3134"}],1182:[{"text":"天元区","value":"3069"},{"text":"荷塘区","value":"3070"},{"text":"芦淞区","value":"3071"},{"text":"石峰区","value":"3072"},{"text":"醴陵市","value":"3073"},{"text":"株洲县","value":"3074"},{"text":"炎陵县","value":"3075"},{"text":"茶陵县","value":"3076"},{"text":"攸县","value":"3077"}],1183:[{"text":"武陵区","value":"3116"},{"text":"鼎城区","value":"3117"},{"text":"津市市","value":"3118"},{"text":"澧县","value":"3119"},{"text":"临澧县","value":"3120"},{"text":"桃源县","value":"3121"},{"text":"汉寿县","value":"3122"},{"text":"安乡县","value":"3123"},{"text":"石门县","value":"3124"}],1184:[{"text":"岳麓区","value":"3060"},{"text":"芙蓉区","value":"3061"},{"text":"天心区","value":"3062"},{"text":"开福区","value":"3063"},{"text":"雨花区","value":"3064"},{"text":"浏阳市","value":"3065"},{"text":"长沙县","value":"3066"},{"text":"望城县","value":"3067"},{"text":"宁乡县","value":"3068"}],1185:[{"text":"北湖区","value":"3135"},{"text":"苏仙区","value":"3136"},{"text":"资兴市","value":"3137"},{"text":"宜章县","value":"3138"},{"text":"汝城县","value":"3139"},{"text":"安仁县","value":"3140"},{"text":"嘉禾县","value":"3141"},{"text":"临武县","value":"3142"},{"text":"桂东县","value":"3143"},{"text":"永兴县","value":"3144"},{"text":"桂阳县","value":"3145"}],1186:[{"text":"石鼓区","value":"3083"},{"text":"雁峰区","value":"3084"},{"text":"珠晖区","value":"3085"},{"text":"蒸湘区","value":"3086"},{"text":"南岳区","value":"3087"},{"text":"耒阳市","value":"3088"},{"text":"常宁市","value":"3089"},{"text":"衡阳县","value":"3090"},{"text":"衡东县","value":"3091"},{"text":"衡山县","value":"3092"},{"text":"衡南县","value":"3093"},{"text":"祁东县","value":"3094"}],1187:[{"text":"鹤城区","value":"3157"},{"text":"洪江市","value":"3158"},{"text":"会同县","value":"3159"},{"text":"沅陵县","value":"3160"},{"text":"辰溪县","value":"3161"},{"text":"溆浦县","value":"3162"},{"text":"中方县","value":"3163"},{"text":"新晃侗族自治县","value":"3164"},{"text":"芷江侗族自治县","value":"3165"},{"text":"通道侗族自治县","value":"3166"},{"text":"靖州苗族侗族自治县","value":"3167"},{"text":"麻阳苗族自治县","value":"3168"}],1118:[{"text":"三亚市","value":"3311"}],1119:[{"text":"秀英区","value":"3307"},{"text":"龙华区","value":"3308"},{"text":"琼山区","value":"3309"},{"text":"美兰区","value":"3310"}],1375:[{"text":"白沙黎族自治县","value":"3323"}],1376:[{"text":"保亭黎族苗族自治县","value":"3327"}],1377:[{"text":"昌江黎族自治县","value":"3324"}],1378:[{"text":"澄迈县","value":"3319"}],1379:[{"text":"定安县","value":"3320"}],1380:[{"text":"东方市","value":"3318"}],1381:[{"text":"乐东黎族自治县","value":"3325"}],1382:[{"text":"临高县","value":"3322"}],1383:[{"text":"陵水黎族自治县","value":"3326"}],1384:[{"text":"琼海市","value":"3313"}],1385:[{"text":"琼中黎族苗族自治县","value":"3328"}],1386:[{"text":"屯昌县","value":"3321"}],1387:[{"text":"万宁市","value":"3317"}],1388:[{"text":"文昌市","value":"3316"}],1389:[{"text":"五指山市","value":"3312"}],1390:[{"text":"儋州市","value":"3314"}],3306:[{"text":"琼山市","value":"3315"}],1210:[{"text":"渝水区","value":"2580"},{"text":"分宜县","value":"2581"}],1211:[{"text":"信州区","value":"2649"},{"text":"德兴市","value":"2650"},{"text":"上饶县","value":"2651"},{"text":"广丰县","value":"2652"},{"text":"波阳县","value":"2653"},{"text":"婺源县","value":"2654"},{"text":"铅山县","value":"2655"},{"text":"余干县","value":"2656"},{"text":"横峰县","value":"2657"},{"text":"弋阳县","value":"2658"},{"text":"玉山县","value":"2659"},{"text":"万年县","value":"2660"}],1212:[{"text":"袁州区","value":"2628"},{"text":"丰城市","value":"2629"},{"text":"樟树市","value":"2630"},{"text":"高安市","value":"2631"},{"text":"铜鼓县","value":"2632"},{"text":"靖安县","value":"2633"},{"text":"宜丰县","value":"2634"},{"text":"奉新县","value":"2635"},{"text":"万载县","value":"2636"},{"text":"上高县","value":"2637"}],1213:[{"text":"月湖区","value":"2594"},{"text":"贵溪市","value":"2595"},{"text":"余江县","value":"2596"}],1214:[{"text":"东湖区","value":"2562"},{"text":"西湖区","value":"2563"},{"text":"青云谱区","value":"2564"},{"text":"湾里区","value":"2565"},{"text":"青山湖区","value":"2566"},{"text":"新建县","value":"2567"},{"text":"南昌县","value":"2568"},{"text":"进贤县","value":"2569"},{"text":"安义县","value":"2570"}],1215:[{"text":"安源区","value":"2575"},{"text":"湘东区","value":"2576"},{"text":"莲花县","value":"2577"},{"text":"上栗县","value":"2578"},{"text":"芦溪县","value":"2579"}],1216:[{"text":"章贡区","value":"2597"},{"text":"瑞金市","value":"2598"},{"text":"南康市","value":"2599"},{"text":"石城县","value":"2600"},{"text":"安远县","value":"2601"},{"text":"赣县","value":"2602"},{"text":"宁都县","value":"2603"},{"text":"寻乌县","value":"2604"},{"text":"兴国县","value":"2605"},{"text":"定南县","value":"2606"},{"text":"上犹县","value":"2607"},{"text":"于都县","value":"2608"},{"text":"龙南县","value":"2609"},{"text":"崇义县","value":"2610"},{"text":"信丰县","value":"2611"},{"text":"全南县","value":"2612"},{"text":"大余县","value":"2613"},{"text":"会昌县","value":"2614"}],1217:[{"text":"临川区","value":"2638"},{"text":"南丰县","value":"2639"},{"text":"乐安县","value":"2640"},{"text":"金溪县","value":"2641"},{"text":"南城县","value":"2642"},{"text":"东乡县","value":"2643"},{"text":"资溪县","value":"2644"},{"text":"宜黄县","value":"2645"},{"text":"广昌县","value":"2646"},{"text":"黎川县","value":"2647"},{"text":"崇仁县","value":"2648"}],1218:[{"text":"吉州区","value":"2615"},{"text":"青原区","value":"2616"},{"text":"井冈山市","value":"2617"},{"text":"吉安县","value":"2618"},{"text":"永丰县","value":"2619"},{"text":"永新县","value":"2620"},{"text":"新干县","value":"2621"},{"text":"泰和县","value":"2622"},{"text":"峡江县","value":"2623"},{"text":"遂川县","value":"2624"},{"text":"安福县","value":"2625"},{"text":"吉水县","value":"2626"},{"text":"万安县","value":"2627"}],1219:[{"text":"浔阳区","value":"2582"},{"text":"庐山区","value":"2583"},{"text":"瑞昌市","value":"2584"},{"text":"九江县","value":"2585"},{"text":"星子县","value":"2586"},{"text":"武宁县","value":"2587"},{"text":"彭泽县","value":"2588"},{"text":"永修县","value":"2589"},{"text":"修水县","value":"2590"},{"text":"湖口县","value":"2591"},{"text":"德安县","value":"2592"},{"text":"都昌县","value":"2593"}],1220:[{"text":"珠山区","value":"2571"},{"text":"昌江区","value":"2572"},{"text":"乐平市","value":"2573"},{"text":"浮梁县","value":"2574"}],1109:[{"text":"钟山区","value":"3627"},{"text":"水城县","value":"3628"},{"text":"盘县","value":"3629"},{"text":"六枝特区","value":"3630"}],1110:[{"text":"兴义市","value":"3668"},{"text":"望谟县","value":"3669"},{"text":"兴仁县","value":"3670"},{"text":"普安县","value":"3671"},{"text":"册亨县","value":"3672"},{"text":"晴隆县","value":"3673"},{"text":"贞丰县","value":"3674"},{"text":"安龙县","value":"3675"}],1111:[{"text":"都匀市","value":"3692"},{"text":"贵定县","value":"3693"},{"text":"惠水县","value":"3694"},{"text":"罗甸县","value":"3695"},{"text":"瓮安县","value":"3696"},{"text":"荔波县","value":"3697"},{"text":"龙里县","value":"3698"},{"text":"平塘县","value":"3699"},{"text":"长顺县","value":"3700"},{"text":"独山县","value":"3701"},{"text":"三都水族自治县","value":"3702"}],1112:[{"text":"凯里市","value":"3676"},{"text":"施秉县","value":"3677"},{"text":"从江县","value":"3678"},{"text":"锦屏县","value":"3679"},{"text":"镇远县","value":"3680"},{"text":"麻江县","value":"3681"},{"text":"台江县","value":"3682"},{"text":"天柱县","value":"3683"},{"text":"黄平县","value":"3684"},{"text":"榕江县","value":"3685"},{"text":"剑河县","value":"3686"},{"text":"三穗县","value":"3687"},{"text":"雷山县","value":"3688"},{"text":"黎平县","value":"3689"},{"text":"岑巩县","value":"3690"},{"text":"丹寨县","value":"3691"}],1113:[{"text":"铜仁市","value":"3650"},{"text":"德江县","value":"3651"},{"text":"江口县","value":"3652"},{"text":"思南县","value":"3653"},{"text":"石阡县","value":"3654"},{"text":"玉屏侗族自治县","value":"3655"},{"text":"松桃苗族自治县","value":"3656"},{"text":"印江土家族苗族自治县","value":"3657"},{"text":"沿河土家族自治县","value":"3658"},{"text":"万山特区","value":"3659"}],1114:[{"text":"西秀区","value":"3644"},{"text":"普定县","value":"3645"},{"text":"平坝县","value":"3646"},{"text":"镇宁布依族苗族自治县","value":"3647"},{"text":"紫云苗族布依族自治县","value":"3648"},{"text":"关岭布依族苗族自治县","value":"3649"}],1115:[{"text":"毕节市","value":"3660"},{"text":"黔西县","value":"3661"},{"text":"大方县","value":"3662"},{"text":"织金县","value":"3663"},{"text":"金沙县","value":"3664"},{"text":"赫章县","value":"3665"},{"text":"纳雍县","value":"3666"},{"text":"威宁彝族回族苗族自治县","value":"3667"}],1116:[{"text":"南明区","value":"3617"},{"text":"云岩区","value":"3618"},{"text":"花溪区","value":"3619"},{"text":"乌当区","value":"3620"},{"text":"白云区","value":"3621"},{"text":"小河区","value":"3622"},{"text":"清镇市","value":"3623"},{"text":"开阳县","value":"3624"},{"text":"修文县","value":"3625"},{"text":"息烽县","value":"3626"},{"text":"观山湖区","value":"4333"}],1117:[{"text":"红花岗区","value":"3631"},{"text":"赤水市","value":"3632"},{"text":"仁怀市","value":"3633"},{"text":"遵义县","value":"3634"},{"text":"绥阳县","value":"3635"},{"text":"桐梓县","value":"3636"},{"text":"习水县","value":"3637"},{"text":"凤冈县","value":"3638"},{"text":"正安县","value":"3639"},{"text":"余庆县","value":"3640"},{"text":"湄潭县","value":"3641"},{"text":"道真仡佬族苗族自治县","value":"3642"},{"text":"务川仡佬族苗族自治县","value":"3643"}],1337:[{"text":"临翔区","value":"3761"},{"text":"镇康县","value":"3762"},{"text":"凤庆县","value":"3763"},{"text":"云县","value":"3764"},{"text":"永德县","value":"3765"},{"text":"双江拉祜族佤族布朗族傣族自治县","value":"3766"},{"text":"沧源佤族自治县","value":"3767"},{"text":"耿马傣族佤族治县","value":"3768"}],1338:[{"text":"古城区","value":"3769"},{"text":"华坪县","value":"3770"},{"text":"永胜县","value":"3771"},{"text":"玉龙纳西族自治县","value":"3772"},{"text":"宁蒗彝族自治县","value":"3773"}],1339:[{"text":"盘龙区","value":"3703"},{"text":"五华区","value":"3704"},{"text":"官渡区","value":"3705"},{"text":"西山区","value":"3706"},{"text":"东川区","value":"3707"},{"text":"安宁市","value":"3708"},{"text":"富民县","value":"3709"},{"text":"嵩明县","value":"3710"},{"text":"呈贡区","value":"3711"},{"text":"晋宁县","value":"3712"},{"text":"宜良县","value":"3713"},{"text":"禄劝彝族苗族自治县","value":"3714"},{"text":"石林彝族自治县","value":"3715"},{"text":"寻甸回族自治县","value":"3716"}],1340:[{"text":"芒市","value":"3820"},{"text":"瑞丽市","value":"3821"},{"text":"盈江县","value":"3822"},{"text":"梁河县","value":"3823"},{"text":"陇川县","value":"3824"}],1341:[{"text":"麒麟区","value":"3717"},{"text":"宣威市","value":"3718"},{"text":"陆良县","value":"3719"},{"text":"会泽县","value":"3720"},{"text":"富源县","value":"3721"},{"text":"罗平县","value":"3722"},{"text":"马龙县","value":"3723"},{"text":"师宗县","value":"3724"},{"text":"沾益县","value":"3725"}],1342:[{"text":"宁洱哈尼族彝族自治县","value":"3751"},{"text":"景东彝族自治县","value":"3752"},{"text":"镇沅彝族哈尼族拉祜族自治县","value":"3753"},{"text":"景谷彝族傣族自治县","value":"3754"},{"text":"墨江哈尼族自治县","value":"3755"},{"text":"澜沧拉祜族自治县","value":"3756"},{"text":"西盟佤族自治县","value":"3757"},{"text":"江城哈尼族彝族自治县","value":"3758"},{"text":"孟连傣族拉祜族佤族自治县","value":"3759"},{"text":"思茅区","value":"3760"}],1343:[{"text":"文山县","value":"3774"},{"text":"麻栗坡县","value":"3775"},{"text":"砚山县","value":"3776"},{"text":"广南县","value":"3777"},{"text":"马关县","value":"3778"},{"text":"富宁县","value":"3779"},{"text":"西畴县","value":"3780"},{"text":"丘北县","value":"3781"}],1344:[{"text":"昭阳区","value":"3740"},{"text":"永善县","value":"3741"},{"text":"绥江县","value":"3742"},{"text":"镇雄县","value":"3743"},{"text":"大关县","value":"3744"},{"text":"盐津县","value":"3745"},{"text":"巧家县","value":"3746"},{"text":"彝良县","value":"3747"},{"text":"威信县","value":"3748"},{"text":"水富县","value":"3749"},{"text":"鲁甸县","value":"3750"}],1345:[{"text":"红塔区","value":"3726"},{"text":"华宁县","value":"3727"},{"text":"澄江县","value":"3728"},{"text":"易门县","value":"3729"},{"text":"通海县","value":"3730"},{"text":"江川县","value":"3731"},{"text":"元江哈尼族彝族傣族自治县","value":"3732"},{"text":"新平彝族傣族自治县","value":"3733"},{"text":"峨山彝族自治县","value":"3734"}],1346:[{"text":"泸水县","value":"3825"},{"text":"福贡县","value":"3826"},{"text":"兰坪白族普米族自治县","value":"3827"},{"text":"贡山独龙族怒族自治县","value":"3828"}],1347:[{"text":"隆阳区","value":"3735"},{"text":"施甸县","value":"3736"},{"text":"昌宁县","value":"3737"},{"text":"龙陵县","value":"3738"},{"text":"腾冲县","value":"3739"}],1348:[{"text":"楚雄市","value":"3798"},{"text":"元谋县","value":"3799"},{"text":"南华县","value":"3800"},{"text":"牟定县","value":"3801"},{"text":"武定县","value":"3802"},{"text":"大姚县","value":"3803"},{"text":"双柏县","value":"3804"},{"text":"禄丰县","value":"3805"},{"text":"永仁县","value":"3806"},{"text":"姚安县","value":"3807"}],1349:[{"text":"大理市","value":"3808"},{"text":"剑川县","value":"3809"},{"text":"弥渡县","value":"3810"},{"text":"云龙县","value":"3811"},{"text":"洱源县","value":"3812"},{"text":"鹤庆县","value":"3813"},{"text":"祥云县","value":"3814"},{"text":"宾川县","value":"3815"},{"text":"永平县","value":"3816"},{"text":"漾濞彝族自治县","value":"3817"},{"text":"巍山彝族回族自治县","value":"3818"},{"text":"南涧彝族自治县","value":"3819"}],1350:[{"text":"香格里拉县","value":"3829"},{"text":"德钦县","value":"3830"},{"text":"维西傈僳族自治县","value":"3831"}],1351:[{"text":"个旧市","value":"3782"},{"text":"开远市","value":"3783"},{"text":"弥勒市","value":"3784"},{"text":"红河县","value":"3785"},{"text":"绿春县","value":"3786"},{"text":"蒙自市","value":"3787"},{"text":"泸西县","value":"3788"},{"text":"建水县","value":"3789"},{"text":"元阳县","value":"3790"},{"text":"石屏县","value":"3791"},{"text":"金平苗族瑶族傣族自治县","value":"3792"},{"text":"河口瑶族自治县","value":"3793"},{"text":"屏边苗族自治县","value":"3794"}],1352:[{"text":"景洪市","value":"3795"},{"text":"勐海县","value":"3796"},{"text":"勐腊县","value":"3797"}],1288:[{"text":"秦都区","value":"3934"},{"text":"渭城区","value":"3935"},{"text":"杨陵区","value":"3936"},{"text":"兴平市","value":"3937"},{"text":"礼泉县","value":"3938"},{"text":"泾阳县","value":"3939"},{"text":"永寿县","value":"3940"},{"text":"三原县","value":"3941"},{"text":"彬县","value":"3942"},{"text":"旬邑县","value":"3943"},{"text":"长武县","value":"3944"},{"text":"乾县","value":"3945"},{"text":"武功县","value":"3946"},{"text":"淳化县","value":"3947"}],1289:[{"text":"王益区","value":"3918"},{"text":"印台区","value":"3919"},{"text":"耀州区","value":"3920"},{"text":"宜君县","value":"3921"}],1290:[{"text":"临渭区","value":"3948"},{"text":"华阴市","value":"3950"},{"text":"蒲城县","value":"3951"},{"text":"潼关县","value":"3952"},{"text":"白水县","value":"3953"},{"text":"澄城县","value":"3954"},{"text":"华县","value":"3955"},{"text":"合阳县","value":"3956"},{"text":"富平县","value":"3957"},{"text":"大荔县","value":"3958"}],1291:[{"text":"莲湖区","value":"3905"},{"text":"新城区","value":"3906"},{"text":"碑林区","value":"3907"},{"text":"雁塔区","value":"3908"},{"text":"灞桥区","value":"3909"},{"text":"未央区","value":"3910"},{"text":"阎良区","value":"3911"},{"text":"临潼区","value":"3912"},{"text":"长安区","value":"3913"},{"text":"高陵县","value":"3914"},{"text":"蓝田县","value":"3915"},{"text":"户县","value":"3916"},{"text":"周至县","value":"3917"}],1292:[{"text":"宝塔区","value":"3959"},{"text":"安塞县","value":"3960"},{"text":"洛川县","value":"3961"},{"text":"子长县","value":"3962"},{"text":"黄陵县","value":"3963"},{"text":"延长县","value":"3964"},{"text":"甘泉县","value":"3965"},{"text":"宜川县","value":"3966"},{"text":"志丹县","value":"3967"},{"text":"黄龙县","value":"3968"},{"text":"吴旗县","value":"3969"},{"text":"延川县","value":"3970"},{"text":"富县","value":"3971"}],1293:[{"text":"榆阳区","value":"3983"},{"text":"清涧县","value":"3984"},{"text":"绥德县","value":"3985"},{"text":"神木县","value":"3986"},{"text":"佳县","value":"3987"},{"text":"府谷县","value":"3988"},{"text":"子洲县","value":"3989"},{"text":"靖边县","value":"3990"},{"text":"横山县","value":"3991"},{"text":"米脂县","value":"3992"},{"text":"吴堡县","value":"3993"},{"text":"定边县","value":"3994"}],1294:[{"text":"汉滨区","value":"3995"},{"text":"紫阳县","value":"3996"},{"text":"岚皋县","value":"3997"},{"text":"旬阳县","value":"3998"},{"text":"镇坪县","value":"3999"},{"text":"平利县","value":"4000"},{"text":"石泉县","value":"4001"},{"text":"宁陕县","value":"4002"},{"text":"白河县","value":"4003"},{"text":"汉阴县","value":"4004"}],1295:[{"text":"渭滨区","value":"3922"},{"text":"金台区","value":"3923"},{"text":"陈仓区","value":"3924"},{"text":"岐山县","value":"3925"},{"text":"凤翔县","value":"3926"},{"text":"陇县","value":"3927"},{"text":"太白县","value":"3928"},{"text":"麟游县","value":"3929"},{"text":"扶风县","value":"3930"},{"text":"千阳县","value":"3931"},{"text":"眉县","value":"3932"},{"text":"凤县","value":"3933"}],1296:[{"text":"汉台区","value":"3972"},{"text":"留坝县","value":"3973"},{"text":"镇巴县","value":"3974"},{"text":"城固县","value":"3975"},{"text":"南郑县","value":"3976"},{"text":"洋县","value":"3977"},{"text":"宁强县","value":"3978"},{"text":"佛坪县","value":"3979"},{"text":"勉县","value":"3980"},{"text":"西乡县","value":"3981"},{"text":"略阳县","value":"3982"}],1060:[{"text":"临夏市","value":"4093"},{"text":"临夏县","value":"4094"},{"text":"康乐县","value":"4095"},{"text":"永靖县","value":"4096"},{"text":"广河县","value":"4097"},{"text":"和政县","value":"4098"},{"text":"东乡族自治县","value":"4099"},{"text":"积石山保安族东乡族撒拉族自治县","value":"4100"}],1061:[{"text":"成县","value":"4063"},{"text":"礼县","value":"4064"},{"text":"康县","value":"4065"},{"text":"武都区","value":"4066"},{"text":"文县","value":"4067"},{"text":"两当县","value":"4068"},{"text":"徽县","value":"4069"},{"text":"宕昌县","value":"4070"},{"text":"西和县","value":"4071"}],1062:[{"text":"城关区","value":"4014"},{"text":"七里河区","value":"4015"},{"text":"西固区","value":"4016"},{"text":"安宁区","value":"4017"},{"text":"红古区","value":"4018"},{"text":"永登县","value":"4019"},{"text":"榆中县","value":"4020"},{"text":"皋兰县","value":"4021"}],1063:[{"text":"秦城区","value":"4029"},{"text":"麦积区","value":"4030"},{"text":"武山县","value":"4031"},{"text":"甘谷县","value":"4032"},{"text":"清水县","value":"4033"},{"text":"秦安县","value":"4034"},{"text":"张家川回族自治县","value":"4035"}],1064:[{"text":"凉州区","value":"4037"},{"text":"民勤县","value":"4038"},{"text":"古浪县","value":"4039"},{"text":"天祝藏族自治县","value":"4040"}],1065:[{"text":"西峰区","value":"4055"},{"text":"庆城县","value":"4056"},{"text":"镇原县","value":"4057"},{"text":"环县","value":"4058"},{"text":"华池县","value":"4059"},{"text":"合水县","value":"4060"},{"text":"宁县","value":"4061"},{"text":"正宁县","value":"4062"}],1066:[{"text":"甘州区","value":"4072"},{"text":"民乐县","value":"4073"},{"text":"山丹县","value":"4074"},{"text":"临泽县","value":"4075"},{"text":"高台县","value":"4076"},{"text":"肃南裕固族自治县","value":"4077"}],1067:[{"text":"崆峒区","value":"4048"},{"text":"灵台县","value":"4049"},{"text":"静宁县","value":"4050"},{"text":"崇信县","value":"4051"},{"text":"华亭县","value":"4052"},{"text":"泾川县","value":"4053"},{"text":"庄浪县","value":"4054"}],1068:[{"text":"白银区","value":"4024"},{"text":"平川区","value":"4025"},{"text":"靖远县","value":"4026"},{"text":"景泰县","value":"4027"},{"text":"会宁县","value":"4028"}],1069:[{"text":"定西区","value":"4041"},{"text":"岷县","value":"4042"},{"text":"渭源县","value":"4043"},{"text":"陇西县","value":"4044"},{"text":"通渭县","value":"4045"},{"text":"漳县","value":"4046"},{"text":"临洮县","value":"4047"}],1070:[{"text":"合作市","value":"4085"},{"text":"临潭县","value":"4086"},{"text":"卓尼县","value":"4087"},{"text":"舟曲县","value":"4088"},{"text":"迭部县","value":"4089"},{"text":"玛曲县","value":"4090"},{"text":"碌曲县","value":"4091"},{"text":"夏河县","value":"4092"}],1071:[{"text":"嘉峪关市","value":"4036"}],1072:[{"text":"金川区","value":"4022"},{"text":"永昌县","value":"4023"}],1073:[{"text":"肃州区","value":"4080"},{"text":"安西县","value":"4081"},{"text":"金塔县","value":"4082"},{"text":"阿克塞哈萨克族自治县","value":"4083"},{"text":"肃北蒙古族自治县","value":"4084"}],4012:[{"text":"玉门市","value":"4078"}],4013:[{"text":"敦煌市","value":"4079"}],1095:[{"text":"城中区","value":"3341"},{"text":"鱼峰区","value":"3342"},{"text":"柳北区","value":"3343"},{"text":"柳南区","value":"3344"},{"text":"市郊区","value":"3345"},{"text":"柳江县","value":"3346"},{"text":"柳城县","value":"3347"},{"text":"融水苗族自治县","value":"3348"},{"text":"鹿寨县","value":"3349"},{"text":"融安县","value":"3350"},{"text":"三江侗族自治县","value":"3351"}],1096:[{"text":"江洲区","value":"3398"},{"text":"宁明县","value":"3399"},{"text":"扶绥县","value":"3400"},{"text":"龙州县","value":"3401"},{"text":"大新县","value":"3402"},{"text":"天等县","value":"3403"},{"text":"凭祥市","value":"4295"}],1097:[{"text":"钦南区","value":"3384"},{"text":"钦北区","value":"3385"},{"text":"灵山县","value":"3386"},{"text":"浦北县","value":"3387"}],1098:[{"text":"万秀区","value":"3369"},{"text":"蝶山区","value":"3370"},{"text":"市郊区","value":"3371"},{"text":"岑溪市","value":"3372"},{"text":"苍梧县","value":"3373"},{"text":"藤县","value":"3374"},{"text":"蒙山县","value":"3375"}],1099:[{"text":"玉州区","value":"3392"},{"text":"北流市","value":"3393"},{"text":"容县","value":"3394"},{"text":"陆川县","value":"3395"},{"text":"博白县","value":"3396"},{"text":"兴业县","value":"3397"}],1100:[{"text":"青秀区","value":"3329"},{"text":"兴宁区","value":"3330"},{"text":"邕宁区","value":"3331"},{"text":"西乡塘区","value":"3332"},{"text":"江南区","value":"3333"},{"text":"良庆区","value":"3334"},{"text":"武鸣县","value":"3335"},{"text":"隆安县","value":"3336"},{"text":"马山县","value":"3337"},{"text":"上林县","value":"3338"},{"text":"宾阳县","value":"3339"},{"text":"横县","value":"3340"}],1101:[{"text":"合山市","value":"3405"},{"text":"兴宾区","value":"3406"},{"text":"象州县","value":"3407"},{"text":"武宣县","value":"3408"},{"text":"忻城县","value":"3409"},{"text":"金秀瑶族自治县","value":"3410"}],1102:[{"text":"凌云县","value":"3415"},{"text":"平果县","value":"3416"},{"text":"西林县","value":"3417"},{"text":"乐业县","value":"3418"},{"text":"德保县","value":"3419"},{"text":"田林县","value":"3420"},{"text":"田阳县","value":"3421"},{"text":"靖西县","value":"3422"},{"text":"田东县","value":"3423"},{"text":"那坡县","value":"3424"},{"text":"隆林各族自治县","value":"3425"},{"text":"右江区","value":"4292"}],1103:[{"text":"海城区","value":"3376"},{"text":"银海区","value":"3377"},{"text":"铁山港区","value":"3378"},{"text":"合浦县","value":"3379"}],1104:[{"text":"港口区","value":"3380"},{"text":"防城区","value":"3381"},{"text":"东兴市","value":"3382"},{"text":"上思县","value":"3383"}],1105:[{"text":"秀峰区","value":"3352"},{"text":"叠彩区","value":"3353"},{"text":"象山区","value":"3354"},{"text":"七星区","value":"3355"},{"text":"雁山区","value":"3356"},{"text":"阳朔县","value":"3357"},{"text":"临桂区","value":"3358"},{"text":"灵川县","value":"3359"},{"text":"全州县","value":"3360"},{"text":"平乐县","value":"3361"},{"text":"兴安县","value":"3362"},{"text":"灌阳县","value":"3363"},{"text":"荔浦县","value":"3364"},{"text":"资源县","value":"3365"},{"text":"永福县","value":"3366"},{"text":"龙胜各族自治县","value":"3367"},{"text":"恭城瑶族自治县","value":"3368"}],1106:[{"text":"港北区","value":"3388"},{"text":"港南区","value":"3389"},{"text":"桂平市","value":"3390"},{"text":"平南县","value":"3391"},{"text":"覃塘区","value":"4293"}],1107:[{"text":"金城江区","value":"3426"},{"text":"宜州市","value":"3427"},{"text":"天峨县","value":"3428"},{"text":"凤山县","value":"3429"},{"text":"南丹县","value":"3430"},{"text":"东兰县","value":"3431"},{"text":"都安瑶族自治县","value":"3432"},{"text":"罗城仡佬族自治县","value":"3433"},{"text":"巴马瑶族自治县","value":"3434"},{"text":"环江毛南族自治县","value":"3435"},{"text":"大化瑶族自治县","value":"3436"}],1108:[{"text":"八步区","value":"3411"},{"text":"钟山县","value":"3412"},{"text":"昭平县","value":"3413"},{"text":"富川瑶族自治县","value":"3414"},{"text":"平桂管理区","value":"4294"}],1247:[{"text":"大武口区","value":"4149"},{"text":"惠农区","value":"4150"},{"text":"平罗县","value":"4152"}],1248:[{"text":"利通区","value":"4153"},{"text":"青铜峡市","value":"4154"},{"text":"红寺堡开发区","value":"4155"},{"text":"同心县","value":"4156"},{"text":"盐池县","value":"4157"}],1249:[{"text":"西夏区","value":"4144"},{"text":"金凤区","value":"4145"},{"text":"兴庆区","value":"4146"},{"text":"永宁县","value":"4147"},{"text":"贺兰县","value":"4148"},{"text":"灵武市","value":"4296"}],1250:[{"text":"原州区","value":"4160"},{"text":"西吉县","value":"4162"},{"text":"隆德县","value":"4163"},{"text":"泾源县","value":"4164"},{"text":"彭阳县","value":"4165"}],4268:[{"text":"沙坡头区","value":"4297"},{"text":"中宁县","value":"4298"},{"text":"海原县","value":"4299"}],1251:[{"text":"城中区","value":"4101"},{"text":"城东区","value":"4102"},{"text":"城西区","value":"4103"},{"text":"城北区","value":"4104"},{"text":"湟源县","value":"4105"},{"text":"湟中县","value":"4106"},{"text":"大通回族土族自治县","value":"4107"}],1252:[{"text":"玉树县","value":"4133"},{"text":"杂多县","value":"4134"},{"text":"称多县","value":"4135"},{"text":"治多县","value":"4136"},{"text":"囊谦县","value":"4137"},{"text":"曲麻莱县","value":"4138"}],1253:[{"text":"玛沁县","value":"4127"},{"text":"班玛县","value":"4128"},{"text":"甘德县","value":"4129"},{"text":"达日县","value":"4130"},{"text":"久治县","value":"4131"},{"text":"玛多县","value":"4132"}],1254:[{"text":"德令哈市","value":"4139"},{"text":"格尔木市","value":"4140"},{"text":"乌兰县","value":"4141"},{"text":"天峻县","value":"4142"},{"text":"都兰县","value":"4143"}],1255:[{"text":"共和县","value":"4122"},{"text":"同德县","value":"4123"},{"text":"贵德县","value":"4124"},{"text":"兴海县","value":"4125"},{"text":"贵南县","value":"4126"}],1256:[{"text":"海晏县","value":"4114"},{"text":"祁连县","value":"4115"},{"text":"刚察县","value":"4116"},{"text":"门源回族自治县","value":"4117"}],1257:[{"text":"平安县","value":"4108"},{"text":"乐都县","value":"4109"},{"text":"民和回族土族自治县","value":"4110"},{"text":"互助土族自治县","value":"4111"},{"text":"化隆回族自治县","value":"4112"},{"text":"循化撒拉族自治县","value":"4113"}],1258:[{"text":"同仁县","value":"4118"},{"text":"泽库县","value":"4119"},{"text":"尖扎县","value":"4120"},{"text":"河南蒙古族自治县","value":"4121"}],1325:[{"text":"吐鲁番市","value":"4182"},{"text":"托克逊县","value":"4183"},{"text":"鄯善县","value":"4184"}],1326:[{"text":"天山区","value":"4166"},{"text":"沙依巴克区","value":"4167"},{"text":"新市区","value":"4168"},{"text":"水磨沟区","value":"4169"},{"text":"头屯河区","value":"4170"},{"text":"达坂城区","value":"4171"},{"text":"米东区","value":"4172"},{"text":"乌鲁木齐县","value":"4173"}],1327:[{"text":"伊宁市","value":"4241"},{"text":"奎屯市","value":"4242"},{"text":"伊宁县","value":"4243"},{"text":"特克斯县","value":"4244"},{"text":"尼勒克县","value":"4245"},{"text":"昭苏县","value":"4246"},{"text":"新源县","value":"4247"},{"text":"霍城县","value":"4248"},{"text":"巩留县","value":"4249"},{"text":"察布查尔锡伯自治县","value":"4250"},{"text":"塔城地区","value":"4251"},{"text":"阿勒泰地区","value":"4252"}],1328:[{"text":"阿图什市","value":"4217"},{"text":"阿合奇县","value":"4218"},{"text":"乌恰县","value":"4219"},{"text":"阿克陶县","value":"4220"}],1329:[{"text":"阿克苏市","value":"4196"},{"text":"温宿县","value":"4197"},{"text":"沙雅县","value":"4198"},{"text":"拜城县","value":"4199"},{"text":"阿瓦提县","value":"4200"},{"text":"库车县","value":"4201"},{"text":"柯坪县","value":"4202"},{"text":"新和县","value":"4203"},{"text":"乌什县","value":"4204"}],1330:[{"text":"昌吉市","value":"4230"},{"text":"阜康市","value":"4231"},{"text":"奇台县","value":"4233"},{"text":"玛纳斯县","value":"4234"},{"text":"吉木萨尔县","value":"4235"},{"text":"呼图壁县","value":"4236"},{"text":"木垒哈萨克自治县","value":"4237"}],1331:[{"text":"博乐市","value":"4238"},{"text":"精河县","value":"4239"},{"text":"温泉县","value":"4240"}],1332:[{"text":"哈密市","value":"4185"},{"text":"伊吾县","value":"4186"},{"text":"巴里坤哈萨克自治县","value":"4187"}],1333:[{"text":"和田市","value":"4188"},{"text":"和田县","value":"4189"},{"text":"洛浦县","value":"4190"},{"text":"民丰县","value":"4191"},{"text":"皮山县","value":"4192"},{"text":"策勒县","value":"4193"},{"text":"于田县","value":"4194"},{"text":"墨玉县","value":"4195"}],1334:[{"text":"库尔勒市","value":"4221"},{"text":"和静县","value":"4222"},{"text":"尉犁县","value":"4223"},{"text":"和硕县","value":"4224"},{"text":"且末县","value":"4225"},{"text":"博湖县","value":"4226"},{"text":"轮台县","value":"4227"},{"text":"若羌县","value":"4228"},{"text":"焉耆回族自治县","value":"4229"},{"text":"铁门关市","value":"4300"},{"text":"铁门关市","value":"4301"}],1335:[{"text":"克拉玛依区","value":"4174"},{"text":"独山子区","value":"4175"},{"text":"白碱滩区","value":"4176"},{"text":"乌尔禾区","value":"4177"}],1336:[{"text":"喀什市","value":"4205"},{"text":"巴楚县","value":"4206"},{"text":"泽普县","value":"4207"},{"text":"伽师县","value":"4208"},{"text":"叶城县","value":"4209"},{"text":"岳普湖县","value":"4210"},{"text":"疏勒县","value":"4211"},{"text":"麦盖提县","value":"4212"},{"text":"英吉沙县","value":"4213"},{"text":"莎车县","value":"4214"},{"text":"疏附县","value":"4215"},{"text":"塔什库尔干塔吉克自治县","value":"4216"}],1364:[{"text":"石河子市","value":"4178"}],1365:[{"text":"阿拉尔市","value":"4179"}],1366:[{"text":"图木舒克市","value":"4180"}],1367:[{"text":"五家渠市","value":"4181"}],4302:[{"text":"阿勒泰市","value":"4303"},{"text":"布尔津县","value":"4304"},{"text":"富蕴县","value":"4305"},{"text":"福海县","value":"4306"},{"text":"哈巴河县","value":"4307"},{"text":"青河县","value":"4308"},{"text":"吉木乃县","value":"4309"}],1318:[{"text":"林芝县","value":"3898"},{"text":"墨脱县","value":"3899"},{"text":"朗县","value":"3900"},{"text":"米林县","value":"3901"},{"text":"察隅县","value":"3902"},{"text":"波密县","value":"3903"},{"text":"工布江达县","value":"3904"}],1319:[{"text":"城关区","value":"3832"},{"text":"林周县","value":"3833"},{"text":"达孜县","value":"3834"},{"text":"尼木县","value":"3835"},{"text":"当雄县","value":"3836"},{"text":"曲水县","value":"3837"},{"text":"墨竹工卡县","value":"3838"},{"text":"堆龙德庆县","value":"3839"}],1320:[{"text":"日喀则市","value":"3873"},{"text":"定结县","value":"3874"},{"text":"萨迦县","value":"3875"},{"text":"江孜县","value":"3876"},{"text":"拉孜县","value":"3877"},{"text":"定日县","value":"3878"},{"text":"康马县","value":"3879"},{"text":"聂拉木县","value":"3880"},{"text":"吉隆县","value":"3881"},{"text":"亚东县","value":"3882"},{"text":"谢通门县","value":"3883"},{"text":"昂仁县","value":"3884"},{"text":"岗巴县","value":"3885"},{"text":"仲巴县","value":"3886"},{"text":"萨嘎县","value":"3887"},{"text":"仁布县","value":"3888"},{"text":"白朗县","value":"3889"},{"text":"南木林县","value":"3890"}],1321:[{"text":"乃东县","value":"3861"},{"text":"琼结县","value":"3862"},{"text":"措美县","value":"3863"},{"text":"加查县","value":"3864"},{"text":"贡嘎县","value":"3865"},{"text":"洛扎县","value":"3866"},{"text":"曲松县","value":"3867"},{"text":"桑日县","value":"3868"},{"text":"扎囊县","value":"3869"},{"text":"错那县","value":"3870"},{"text":"隆子县","value":"3871"},{"text":"浪卡子县","value":"3872"}],1322:[{"text":"那曲县","value":"3840"},{"text":"嘉黎县","value":"3841"},{"text":"申扎县","value":"3842"},{"text":"巴青县","value":"3843"},{"text":"聂荣县","value":"3844"},{"text":"尼玛县","value":"3845"},{"text":"比如县","value":"3846"},{"text":"索县","value":"3847"},{"text":"班戈县","value":"3848"},{"text":"安多县","value":"3849"}],1323:[{"text":"噶尔县","value":"3891"},{"text":"措勤县","value":"3892"},{"text":"普兰县","value":"3893"},{"text":"革吉县","value":"3894"},{"text":"日土县","value":"3895"},{"text":"札达县","value":"3896"},{"text":"改则县","value":"3897"}],1324:[{"text":"昌都县","value":"3850"},{"text":"芒康县","value":"3851"},{"text":"贡觉县","value":"3852"},{"text":"八宿县","value":"3853"},{"text":"左贡县","value":"3854"},{"text":"边坝县","value":"3855"},{"text":"洛隆县","value":"3856"},{"text":"江达县","value":"3857"},{"text":"类乌齐县","value":"3858"},{"text":"丁青县","value":"3859"},{"text":"察雅县","value":"3860"}],1235:[{"text":"乌兰浩特市","value":"2168"},{"text":"阿尔山市","value":"2169"},{"text":"突泉县","value":"2170"},{"text":"扎赉特旗","value":"2171"},{"text":"科尔沁右翼前旗","value":"2172"},{"text":"科尔沁右翼中旗","value":"2173"}],1236:[{"text":"丰镇市","value":"2135"},{"text":"集宁区","value":"2136"},{"text":"兴和县","value":"2137"},{"text":"卓资县","value":"2138"},{"text":"商都县","value":"2139"},{"text":"凉城县","value":"2140"},{"text":"化德县","value":"2141"},{"text":"察哈尔右翼前旗","value":"2142"},{"text":"察哈尔右翼中旗","value":"2143"},{"text":"察哈尔右翼后旗","value":"2144"},{"text":"四子王旗","value":"2145"}],1237:[{"text":"海勃湾区","value":"2091"},{"text":"乌达区","value":"2092"},{"text":"海南区","value":"2093"}],1238:[{"text":"锡林浩特市","value":"2146"},{"text":"二连浩特市","value":"2147"},{"text":"多伦县","value":"2148"},{"text":"阿巴嘎旗","value":"2149"},{"text":"西乌珠穆沁旗","value":"2150"},{"text":"东乌珠穆沁旗","value":"2151"},{"text":"苏尼特左旗","value":"2152"},{"text":"苏尼特右旗","value":"2153"},{"text":"太仆寺旗","value":"2154"},{"text":"正镶白旗","value":"2155"},{"text":"正蓝旗","value":"2156"},{"text":"镶黄旗","value":"2157"}],1239:[{"text":"科尔沁区","value":"2106"},{"text":"霍林郭勒市","value":"2107"},{"text":"开鲁县","value":"2108"},{"text":"科尔沁左翼中旗","value":"2109"},{"text":"科尔沁左翼后旗","value":"2110"},{"text":"库伦旗","value":"2111"},{"text":"奈曼旗","value":"2112"},{"text":"扎鲁特旗","value":"2113"}],1240:[{"text":"临河区","value":"2158"},{"text":"五原县","value":"2159"},{"text":"磴口县","value":"2160"},{"text":"杭锦后旗","value":"2161"},{"text":"乌拉特中旗","value":"2162"},{"text":"乌拉特前旗","value":"2163"},{"text":"乌拉特后旗","value":"2164"}],1241:[{"text":"昆都仑区","value":"2082"},{"text":"青山区","value":"2083"},{"text":"东河区","value":"2084"},{"text":"九原区","value":"2085"},{"text":"石拐区","value":"2086"},{"text":"白云矿区","value":"2087"},{"text":"固阳县","value":"2088"},{"text":"土默特右旗","value":"2089"},{"text":"达尔罕茂明安联合旗","value":"2090"}],1242:[{"text":"阿拉善左旗","value":"2165"},{"text":"阿拉善右旗","value":"2166"},{"text":"额济纳旗","value":"2167"}],1243:[{"text":"红山区","value":"2094"},{"text":"元宝山区","value":"2095"},{"text":"松山区","value":"2096"},{"text":"宁城县","value":"2097"},{"text":"林西县","value":"2098"},{"text":"喀喇沁旗","value":"2099"},{"text":"巴林左旗","value":"2100"},{"text":"敖汉旗","value":"2101"},{"text":"阿鲁科尔沁旗","value":"2102"},{"text":"翁牛特旗","value":"2103"},{"text":"克什克腾旗","value":"2104"},{"text":"巴林右旗","value":"2105"}],1244:[{"text":"东胜区","value":"2114"},{"text":"准格尔旗","value":"2115"},{"text":"乌审旗","value":"2116"},{"text":"伊金霍洛旗","value":"2117"},{"text":"鄂托克旗","value":"2118"},{"text":"鄂托克前旗","value":"2119"},{"text":"杭锦旗","value":"2120"},{"text":"达拉特旗","value":"2121"}],1245:[{"text":"海拉尔区","value":"2122"},{"text":"满洲里市","value":"2123"},{"text":"牙克石市","value":"2124"},{"text":"扎兰屯市","value":"2125"},{"text":"根河市","value":"2126"},{"text":"额尔古纳市","value":"2127"},{"text":"陈巴尔虎旗","value":"2128"},{"text":"阿荣旗","value":"2129"},{"text":"新巴尔虎左旗","value":"2130"},{"text":"新巴尔虎右旗","value":"2131"},{"text":"鄂伦春自治旗","value":"2132"},{"text":"莫力达瓦达斡尔族自治旗","value":"2133"},{"text":"鄂温克族自治旗","value":"2134"}],1246:[{"text":"回民区","value":"2073"},{"text":"玉泉区","value":"2074"},{"text":"新城区","value":"2075"},{"text":"赛罕区","value":"2076"},{"text":"托克托县","value":"2077"},{"text":"清水河县","value":"2078"},{"text":"武川县","value":"2079"},{"text":"和林格尔县","value":"2080"},{"text":"土默特左旗","value":"2081"}],1372:[{"text":"香港岛","value":"4269"},{"text":"九龙","value":"4270"},{"text":"新界","value":"4271"}],1373:[{"text":"花地玛堂区","value":"4272"},{"text":"圣安多尼堂区","value":"4273"},{"text":"大堂区","value":"4274"},{"text":"望德堂区","value":"4275"},{"text":"风顺堂区","value":"4276"}]};
        var area = new LArea();
        area.init({
            'trigger': '#addressPicker',
            'valueTo': '#addressPickers',
            'keys': {
                id: 'value',
                name: 'text'
            },
            'type': 2,
            'data': [provs_data, citys_data, dists_data]
        });
    }
    //设为默认地址
    $("body").on("click",'#setDefault',function(){
        if($("#weuiAgree").is(':checked')){
            $("#weuiAgree").val("1");
        }else{
            $("#weuiAgree").val("0");
        }
    });
    //取消
    $("#giveup").on("click",function(){
        window.location.href = "javascript:history.go(-1)";
    });
    //保存
    $("body").on("click",'#showTooltips',function(e){
        //console.log(isSubmit);
        e.preventDefault();//防止打开连接
        var isSubmit = true;nullMsg = '';
        $('#receive-address input.weui-input').each(function(){
            if(!$(this).val()){
                isSubmit = false;nullMsg+=$(this).attr("notice");
                $(this).css('border','1px dashed #d42424');
                $(this).css('border-radius','2px');
            }else{
                $(this).css('border','none');
            }
        })

        var tel = $('input[name=tel]').val();
        if(tel){
            if(!(/^1(3|4|5|7|8)\d{9}$/.test(tel))){
                alert("手机号码格式有误，请重填");
                $(this).css('border','1px dashed #d42424');
                $(this).css('border-radius','2px');
                return false;
            }else{
                $(this).css('border','none');
            }
        }
        if(isSubmit){
            var addinfo=$('#receive-address').serialize();
            var ua_id = $('#reciveAddr').val();
            $.ajax({
                type: "post",
                url: "user_address_add",
                data: addinfo,
                dataType: "json",
                success: function(data){
                    if(data.state){
                        $('#reciveAddr').val(data.ua_id);
                        mobileAlert(data.msg,5000,"");
                        check_addr(data.data);
                        $("#choice").hide();
                        $(("#edit")).hide();
                    }else{
                        mobileAlert(data.msg,5000,"");
                    }
                }
            });
        }
        /* for(var num =0; num< $("input.weui-input").length;num++){
              if($(".input-box input").eq(num).val() == ""){
                  alert($(".input-box input").eq(num).attr("notice"));
                  return false;
              }
        }
        if($("#addrDetailArea").val()==""){
            alert($("#addrDetailArea").attr("notice"));
            return false;
        }
        if(!(/^1(3|4|5|7|8)\d{9}$/.test($(".input-box input").eq(1).val()))){
              alert("手机号码格式有误，请重填");
              return false;
          }
        var addinfo = new Array($(".input-box input").eq(0).val(),$(".input-box input").eq(1).val(),$(".input-box input").eq(3).val(),$("#addrDetailArea").val(),$("#setDefault").val());*/
        // toast
        /*$(function(){
            var $toast = $('#toast');
            $('#showToast').on('click', function(){
                if ($toast.css('display') != 'none') return;

                $toast.fadeIn(100);
                setTimeout(function () {
                    $toast.fadeOut(100);
                }, 2000);
            });
        });

        // loading
        $(function(){
            var $loadingToast = $('#loadingToast');
            $('#showLoadingToast').on('click', function(){
                if ($loadingToast.css('display') != 'none') return;

                $loadingToast.fadeIn(100);
                setTimeout(function () {
                    $loadingToast.fadeOut(100);
                }, 2000);
            });
        });*/
    });
    $('#formSubmit').delegate('#paySubmit','click',function(){
        var order_price=$(this).parents('.weui-tabbar').find('.total_price_show').html();
        var goods_price=$(this).parents('.weui-tabbar').find('.total_price').html();
        $('#postGoodsPrice').val(goods_price);
        $('#postOrderPrice').val(order_price);
        $('.goods-cells').each(function(){
        	coupon_id = $(this).find('.weui-picker__bd').attr('data_coupon');
        	coupon_list = $(this).find('.weui-picker__bd').attr('data_user_coupon_list');
        	$(this).children('.user_coupon_id').val(coupon_id);
        	$(this).children('.coupon_list').val(coupon_list);
        })
        var uaID = $('#reciveAddr').val();
        uaID = parseInt(uaID);

        if(uaID<1){
            mobileAlert("请先添加收货人",1000,"");
            return false;
        }
        var payType = $('input[name=radio1]:checked').val();
        if(payType==2){
            mobileAlert("暂不支持支付宝支付",1000,"");
            return false;
        }
        $(this).removeClass('paySubmit');
        $(this).addClass('cancelSubmit');
        var goods = sessionStorage.stockInfo;
        //console.log(goods);
        if(!goods){
            mobileAlert("订单已提交",1000,"");
            setTimeout(function(){
                window.location.href='http://[::1]/yunjuke/vmall.php/order/index';
            },1000);
            return false;
       }
        $('#postGoods').val(goods);
        sessionStorage.removeItem("stockInfo");
        $('#formSubmit').submit();
    })
</script>
</html>
<?php }
}
