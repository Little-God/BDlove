<?php
/* Smarty version 3.1.29, created on 2017-11-06 15:01:47
  from "D:\www\yunjuke\application\vmall\views\sign_new.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0008db48dbc1_36785076',
  'file_dependency' => 
  array (
    '67466075203a560840be372d977c941cc9fd9a0a' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\vmall\\views\\sign_new.html',
      1 => 1509951664,
      2 => 'file',
    ),
    '115c8c3a13a56407352a4c5e79b348343e27acdb' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\vmall\\views\\lib\\Hlink-c.html',
      1 => 1498027614,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5a0008db48dbc1_36785076 ($_smarty_tpl) {
?>
<html lang="zh-cn">

<head>
    <title> 签到有礼</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="full-screen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" href="http://[::1]/yunjuke//favicon.ico">
<link href="http://[::1]/yunjuke/application/vmall/views/css/global.css" rel="stylesheet" type="text/css">
<link href="http://[::1]/yunjuke/application/vmall/views/css/common.css" rel="stylesheet" type="text/css">

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
          //alert(docEl.style.fontSize);
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


    <link href="http://[::1]/yunjuke/application/vmall/views/css/style.css" rel="stylesheet" type="text/css">
    <link href="http://[::1]/yunjuke/application/vmall/views/css/weui1.css" rel="stylesheet" type="text/css">
</head>
<style>
    body{
        background: url("http://[::1]/yunjuke/application/vmall/views/images/sign_bg.png") no-repeat;
        -webkit-background-size: 100% 100%;
        background-size: 100% 100%;
    }
    .container{
        margin:.15rem;
    }
    .sign-top{
        color: #fff;
        font-size:.15rem;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    .total{
        font-size:.2rem;
        margin-top:-.02rem;
    }
    .ills{
        color: #fff;
        font-size: .12rem;
        margin-top:.1rem;
    }
    .date{
        margin:.08rem .05rem;

    }
    .date-top{
        background: #ff4f51;
        color: #fff;
        height:.4rem;
        line-height: .4rem;
        padding-left: .2rem;
        border-top-left-radius: .14rem;
        border-top-right-radius: .14rem;
    }
    .date-content{
        padding:.1rem .1rem .02rem .1rem;
        background: #fff;
        border-bottom-right-radius: .14rem;
        border-bottom-left-radius: .14rem;
    }
    .week{
        display: flex;
        justify-content: space-around;
        font-weight: 700;
        color: #fe6700;
        font-size: .15rem;
    }
    .date-day{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        border-top:1px solid #ffb888;
        margin-top:.1rem
    }
    .date-day>div{
        width:.3rem;
        height:.38rem;
        border-right:1px solid #ffb888;
        border-bottom:1px solid #ffb888;
        padding:0 .03rem .03rem .03rem;
    }
    .date-day>div.active{
        background: url("http://[::1]/yunjuke/application/vmall/views/images/sign_play.png") no-repeat;
        background-position: .12rem .17rem;
        background-size: .22rem .22rem;
    }
    .date-day>div.active_b{
        background: url("http://[::1]/yunjuke/application/vmall/views/images/repair.png") no-repeat;
        background-position: .12rem .17rem;
        background-size: .22rem .22rem;
    }
    .btn_sign{
        width:.9rem;
        margin:.1rem auto;
    }
    .prize{
        background: #fff;
        border-radius: .08rem;
        padding: .1rem;
        position: relative;
    }
    .prize_title{
        color: #ff5151;
        padding-bottom: .05rem;
        border-bottom: 1px solid #efefef;
    }
    .prize_title img{
        height:.2rem;
        margin-right:.1rem;
    }
    .prizelist{
        width:92%;
        position: absolute;
        top:.35rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: .1rem;
        margin:.03rem 0;
        text-align: center;
        z-index: 9;
    }
    .prizelist>div{
        height:.48rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }
    .reddot{
        text-align: center;
        transform: rotate(20deg);
    }
    .reddot img{
        width:.18rem;
    }
    .line{
        height:.02rem;
        background: #ccc;
        margin:.25rem 0;
    }
    .lineactive{
        position: relative;
        width:0;
        height:.02rem;
        background: red;
    }
    .action_img{
        margin-top:.1rem;
        display: flex;
        justify-content: space-between;
    }
    .action_img>div{
        width:50%;
    }
    .action_img>div>img{
        width:100%;
        height:.8rem;
    }
    .cut_rule{
        color: #fff;
        line-height: .22rem;
        white-space:normal;
        word-break:break-all;
        font-size: .13rem;
        margin-top:.2rem;
    }
    .sign_success{
             background: rgba(0,0,0,0.5);
             position: fixed;
             top: 0;
             left:0;
             right:0;
             bottom:0;
             z-index:99;
             display: none;
         }
    .sign_success_bu{
        background: rgba(0,0,0,0.5);
        position: fixed;
        top: 0;
        left:0;
        right:0;
        bottom:0;
        z-index:99;
        display: none;
    }
    .ss_top{
        width:80%;
        margin:1.3rem auto 0 auto;
        position: relative;
        border-top-left-radius: .1rem;
        border-top-right-radius: .1rem;
        background: #f2f3f5;
    }
    .ss_top p{
        padding:1rem 0 .2rem 0;
        text-align: center;
        font-size: .19rem;
    }
    .ss_top p span{
        font-size: .25rem;
        color: #f60;
    }
    .ss_bottom{
        width:80%;
        margin:0 auto;
        background:#fff;
        height:.3rem;
        text-align: center;
        padding-top:.1rem;
        border-bottom-right-radius: .1rem;
        border-bottom-left-radius: .1rem;
    }
    .ss_bottom img{
        width:.7rem
    }
    .img_to{
        position: absolute;
        width:1.8rem;
        left:.38rem;
        top:-.7rem;
    }
    .rule_mask{
        position: fixed;
        top: 0;
        z-index:999;
        display: none;
        width:100%
    }
    .rule_mt{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin:.4rem .3rem 0 .3rem;
        background: #fff;
        padding:.12rem .2rem;
        border-top-right-radius: .1rem;
        border-top-left-radius: .1rem;
    }
    .rule_mt div{
        width:.15rem;
    }
    .rul{
        width:.7rem!important;
    }
    .rule_mb{
        margin:0 .3rem;
        padding:0 .2rem .2rem .2rem;
        background: #fff;
        border-bottom-right-radius: .1rem;
        border-bottom-left-radius: .1rem;
    }
    .rule_mb p{
        background: #ffe8d8;
        padding:.1rem;
        border-radius: .1rem;
        height:2.6rem;
        overflow-y: auto;
        word-break: break-all;
    }
    .mas{
        background: rgba(0,0,0,0.5);
        position: fixed;
        top: 0;
        left:0;
        right:0;
        bottom:0;
        z-index:99;
        display: none;
    }
    .weui-dialog__bd{
        font-size: 20px;
    }
    .weui-dialog__btn_primary{
        color: #0BB20C!important;
    }
</style>
<body>
    <div class="container">
       <input type="hidden" id="sign_id" name="sign_id" value="40">
       <input type="hidden" id="sign_day" name="sign_day" value="0">
        <input type="hidden" id="total_day" name="total_day" value="30">
       <input type="hidden" id="prize_total" name="prize_total" value="4">
       <input type="hidden" id="sign_bu" name="sign_bu" value="0">
       <input type="hidden" id="per_point" name="per_point" value="50">
        <div class="sign-top">
            <p class="total">累计签到：<span>0</span>天</p>
            <p class="rule"><span class="iconfont">&#xe646;</span>活动规则</p>
        </div>
        <p class="ills">亲，你还没签到哦！再签到1天可获得100积分劵</p>
        <div class="date">
            <div class="date-top">2017年11月06日</div>
            <div class="date-content">
                <div class="week">
                    <p>日</p><p>一</p><p>二</p><p>三</p><p>四</p><p>五</p><p>六</p>
                </div>
                <div class="date-day">

                </div>
                <div class="btn_sign "><img src="http://[::1]/yunjuke/application/vmall/views/images/nowsign.png" alt=""></div>
            </div>
        </div>
        <div class="prize">
            <div class="prize_title"><img src="http://[::1]/yunjuke/application/vmall/views/images/prize_title.png" alt="">签到领奖</div>
            <div class="prizelist">
                           <div>

                                                                             <p>100积分劵</p>
                   <div class="reddot">
                       <img src="http://[::1]/yunjuke/application/vmall/views/images/prize_interation.png" alt="">
                   </div>
                                                           <!---->
                     <!--<p>100积分劵</p>-->
                    <!--<div class="reddot">-->
                     <!--<img src="http://[::1]/yunjuke/application/vmall/views/images/chest.png" alt="">-->
                      <!--</div>-->
                     <!---->
                     
                    <p class="day">1天</p>
                </div>

                           <div>

                                                          <p>童鞋3这券</p>
                   <div class="reddot">
                       <img src="http://[::1]/yunjuke/application/vmall/views/images/prize_cou.png" alt="">
                   </div>
                                                                              <!---->
                     <!--<p>童鞋3这券</p>-->
                    <!--<div class="reddot">-->
                     <!--<img src="http://[::1]/yunjuke/application/vmall/views/images/chest.png" alt="">-->
                      <!--</div>-->
                     <!---->
                     
                    <p class="day">7天</p>
                </div>

                           <div>

                                                                                                <p>5-10红包劵</p>
                   <div class="reddot">
                       <img src="http://[::1]/yunjuke/application/vmall/views/images/prize_money.png" alt="">
                   </div>
                                        <!---->
                     <!--<p>5-10红包劵</p>-->
                    <!--<div class="reddot">-->
                     <!--<img src="http://[::1]/yunjuke/application/vmall/views/images/chest.png" alt="">-->
                      <!--</div>-->
                     <!---->
                     
                    <p class="day">15天</p>
                </div>

                           <div>

                                                          <p>精美背包一个</p>
                   <div class="reddot">
                       <img src="http://[::1]/yunjuke/application/vmall/views/images/prize_cou.png" alt="">
                   </div>
                                                                              <!---->
                     <!--<p>精美背包一个</p>-->
                    <!--<div class="reddot">-->
                     <!--<img src="http://[::1]/yunjuke/application/vmall/views/images/bossbox.png" alt="">-->
                      <!--</div>-->
                     <!---->
                     
                    <p class="day">30天</p>
                </div>

            
            </div>
            <div class="line"><div class="lineactive" data-day="0"></div></div>
        </div>
        <div class="action">
            <div class="action_img">
                <div class="cut_price"> <a href="http://[::1]/yunjuke/vmall.php/micro/index"><img src="http://[::1]/yunjuke/application/vmall/views/images/micro.png" alt="微砍价活动"></a></div>
                <div class="lucy" ><a href="http://[::1]/yunjuke/vmall.php/promotion/wheels"><img src="http://[::1]/yunjuke/application/vmall/views/images/wheels_turn.png" alt="大转盘活动"></a></div>
            </div>
            <div class="action_content">
                <div class="cut_rule">
                    <p>
                        1.砍价活动<br>
                        聚客360联合各大品牌，精选出爆款商品定以最优惠价格，粉丝可邀请朋友，一起帮忙砍价，可看到最低价格以购买。超低优惠不容错过！赶快点击上图参与活动吧！<br>
                        2.积分抽奖<br>
                        通过一定积分数兑换抽奖次数，ABC童鞋5折券，880积分，现金红包等奖品，超高中奖率等你来取！<br>
                        超值大礼等任你拿！赶快点击上图参与活动吧！
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--签到成功弹出框-->
    <div class="sign_success">
        <div class="ss_top">
            <div class="top_img">
                <div class="img_to"><img src="http://[::1]/yunjuke/application/vmall/views/images/sign_success.png" alt=""></div>
            </div>
            <p>恭喜获得<span>10</span>积分</p>
        </div>
        <div class="ss_bottom"><img src="http://[::1]/yunjuke/application/vmall/views/images/iknow.png" alt=""></div></div>
    </div>
<div class="sign_success_bu">
    <div class="ss_top">
        <div class="top_img">
            <div class="img_to"><img src="http://[::1]/yunjuke/application/vmall/views/images/buqian.png" alt=""></div>
        </div>
        <p>恭喜获得<span>10</span>积分</p>
    </div>
    <div class="ss_bottom"><img src="http://[::1]/yunjuke/application/vmall/views/images/iknow.png" alt=""></div></div>
</div>

    <!--签到规则弹出框-->
    <div class="mas"></div>
    <div class="rule_mask">
        <div class="rule_mt">
            <div><img src="http://[::1]/yunjuke/application/vmall/views/images/rot.png" alt=""></div>
            <div class="rul"><img src="http://[::1]/yunjuke/application/vmall/views/images/sign_rule.png" alt=""></div>
            <div><img src="http://[::1]/yunjuke/application/vmall/views/images/rot.png" alt=""></div>
        </div>
        <div class="rule_mb">

            <p>
                 1.活动期间，每天可签到1次，累计达到相应次数即可点击页面礼品盒抽奖。签到累计次数当月有效，跨月重新计算。 当月累计签到1次可抽取10积分奖品；累计签到7次可领取700积分；累计签到15次可取得一份精美礼品（价值19.9元的浴巾一条， 邮费自助）；累计20次可得特定商品5折优惠券一张（商品根据当月活动定）。累计签到一个月，可获毛绒毯一床奖品数量有限，先到先得。<br><br> 2.签到设有补签功能，第一次补签消耗20积分，第二次补签消耗2x20积分，第三次补签消耗3x20积分，以此类推，一个月可补签10次，<br>不可累加，当月清零。<br><br>3.活动获赠积分，即刻到账，有效期1月，过期自动清零；签到获得优惠券，以优惠券 
                <!-- 1.活动期间，每天可签到1次，累计达到相应次数即可点击页面礼品盒抽奖。签到累计次数当月有效，跨月重新计算。
               当月累计签到1次可抽取10积分奖品；累计签到7次可领取700积分；累计签到15次可取得一份精美礼品（价值19.9元的浴巾一条，
                邮费自助）；累计20次可得特定商品5折优惠券一张（商品根据当月活动定）。累计签到一个月，可获毛绒毯一床奖品数量有限，先到先得。<br>
                2.签到设有补签功能，第一次补签消耗20积分，第二次补签消耗2x20积分，第三次补签消耗3x20积分，以此类推，一个月可补签10次，
                不可累加，当月清零。<br>
                3.活动获赠积分，即刻到账，有效期1月，过期自动清零；签到获得优惠券，以优惠券 -->
            </p>

        </div>
    </div>

    <!--补签弹出框-->
    <div class="js_dialog" id="iosDialog1" style="display: none;">
        <div class="weui-mask"></div>
        <div class="weui-dialog">
            <div class="weui-dialog__bd"></div>
            <div class="weui-dialog__ft">
                <a href="javascript:;" class="weui-dialog__btn weui-dialog__btn_default">取消</a>
                <a href="javascript:;" class="weui-dialog__btn weui-dialog__btn_primary">确定</a>
            </div>
        </div>
    </div>
</body>
<script src="http://[::1]/yunjuke/application/vmall/views/js/jquery-2.1.1.js"></script>
<script src="http://[::1]/yunjuke/application/vmall/views/js/base.js"></script>
<script>
//    部署日期
    var sign_day_num = $('#prize_total').val();
    var now = new Date(),nowMonth = now.getMonth()+1;//当前月份
    var nowYear = now.getYear(); //当前年份
    nowYear += (nowYear < 2000) ? 1900 : 0;//当前年份
    var dayhtml='',dat=1,me=String(nowYear)+String(nowMonth)+'01',gird;//me是拼凑成的点钱年月的一号
    var date = new Date();
    var nowday = date.getDate();
    var nowyear = date.getFullYear();
    var nowmonth = date.getMonth()+1;
    var d = new Date(nowyear,nowmonth,0)
    var daynum = d.getDate();
    date.setDate(1)
    var day = date.getDay()
    if(daynum+day>35){
        gird=42;
    }else{
        gird=35;
    }
    for(var i=0;i<gird;i++){
        if(day<=i){
            if(dat<=daynum){
                var jjj = 'day_'+me;
                dayhtml+="<div class="+jjj+">"+dat+"</div>";
                dat++;
                me++;
                day++;
            }else{
                dayhtml+="<div></div>";
                day++;
            }
        }else{
            dayhtml+="<div></div>"
        }
    }
    $('.date-day').html(dayhtml);
    $(".disactive").html('<img src="http://[::1]/yunjuke/application/vmall/views/images/disactive.png" alt="">');
    $(".date-day div").each(function(index){
        if((index+1)%7==0){
            $(this).css('border-right','none')
        }
    })
    var arrDay = {"20171101":{"sign_flag":2,"sign_day":"20171101"},"20171102":{"sign_flag":2,"sign_day":"20171102"},"20171103":{"sign_flag":2,"sign_day":"20171103"},"20171104":{"sign_flag":2,"sign_day":"20171104"},"20171105":{"sign_flag":2,"sign_day":"20171105"},"20171106":{"sign_flag":3,"sign_day":"20171106"},"20171107":{"sign_flag":0,"sign_day":"20171107"},"20171108":{"sign_flag":0,"sign_day":"20171108"},"20171109":{"sign_flag":0,"sign_day":"20171109"},"20171110":{"sign_flag":0,"sign_day":"20171110"},"20171111":{"sign_flag":0,"sign_day":"20171111"},"20171112":{"sign_flag":0,"sign_day":"20171112"},"20171113":{"sign_flag":0,"sign_day":"20171113"},"20171114":{"sign_flag":0,"sign_day":"20171114"},"20171115":{"sign_flag":0,"sign_day":"20171115"},"20171116":{"sign_flag":0,"sign_day":"20171116"},"20171117":{"sign_flag":0,"sign_day":"20171117"},"20171118":{"sign_flag":0,"sign_day":"20171118"},"20171119":{"sign_flag":0,"sign_day":"20171119"},"20171120":{"sign_flag":0,"sign_day":"20171120"},"20171121":{"sign_flag":0,"sign_day":"20171121"},"20171122":{"sign_flag":0,"sign_day":"20171122"},"20171123":{"sign_flag":0,"sign_day":"20171123"},"20171124":{"sign_flag":0,"sign_day":"20171124"},"20171125":{"sign_flag":0,"sign_day":"20171125"},"20171126":{"sign_flag":0,"sign_day":"20171126"},"20171127":{"sign_flag":0,"sign_day":"20171127"},"20171128":{"sign_flag":0,"sign_day":"20171128"},"20171129":{"sign_flag":0,"sign_day":"20171129"},"20171130":{"sign_flag":0,"sign_day":"20171130"}};arrCoupon = [{"sign_rule_id":"51","sign_id":"40","sign_day":"1","sign_point":null,"sign_prize":"40","sign_prize_type":"3","start_time":"1509465600","end_time":"1511971200","add_time":"1509616466","add_user_id":"46","add_user_name":"lxc","coupon_id":"40","coupon_activity_type":"7","coupon_code":null,"coupon_name":"100\u79ef\u5206\u52b5","coupon_bg_color":null,"coupon_type":"3","coupon_value":"100","limit_goods_type":"0","limit_goods":null,"limit_store_type":"0","limit_store":null,"coupon_start_time":"1509465600","coupon_end_time":"1511971200","flexible_day":null,"time_state":null,"coupon_desc":null,"prize_sure":0},{"sign_rule_id":"52","sign_id":"40","sign_day":"7","sign_point":null,"sign_prize":"41","sign_prize_type":"1","start_time":"1509465600","end_time":"1511971200","add_time":"1509616466","add_user_id":"46","add_user_name":"lxc","coupon_id":"41","coupon_activity_type":"7","coupon_code":null,"coupon_name":"\u7ae5\u978b3\u8fd9\u5238","coupon_bg_color":null,"coupon_type":"1","coupon_value":"0.3","limit_goods_type":"2","limit_goods":"22255","limit_store_type":"1","limit_store":"66","coupon_start_time":"1509465600","coupon_end_time":"1511971200","flexible_day":null,"time_state":null,"coupon_desc":"","prize_sure":0},{"sign_rule_id":"53","sign_id":"40","sign_day":"15","sign_point":null,"sign_prize":"42","sign_prize_type":"5","start_time":"1509465600","end_time":"1511971200","add_time":"1509616466","add_user_id":"46","add_user_name":"lxc","coupon_id":"42","coupon_activity_type":"7","coupon_code":null,"coupon_name":"5-10\u7ea2\u5305\u52b5","coupon_bg_color":null,"coupon_type":"5","coupon_value":"5,10","limit_goods_type":"2","limit_goods":"22255","limit_store_type":"1","limit_store":"66","coupon_start_time":"1509465600","coupon_end_time":"1511971200","flexible_day":null,"time_state":null,"coupon_desc":"","prize_sure":0},{"sign_rule_id":"54","sign_id":"40","sign_day":"30","sign_point":null,"sign_prize":"43","sign_prize_type":"1","start_time":"1509465600","end_time":"1511971200","add_time":"1509616466","add_user_id":"46","add_user_name":"lxc","coupon_id":"43","coupon_activity_type":"7","coupon_code":null,"coupon_name":"\u7cbe\u7f8e\u80cc\u5305\u4e00\u4e2a","coupon_bg_color":null,"coupon_type":"1","coupon_value":"0","limit_goods_type":"2","limit_goods":"22072","limit_store_type":"1","limit_store":"61","coupon_start_time":"1509465600","coupon_end_time":"1511971200","flexible_day":null,"time_state":null,"coupon_desc":"","prize_sure":0}];
    //console.log(arrDay)
    $(function(){
        $('#iosDialog1').on('click', '.weui-dialog__btn', function(){
            $(this).parents('.js_dialog').fadeOut(200);
        });
    	load_sign(arrDay);
    	acceptPrize();
        var per_point = $('#per_point').val();
    	var obj,bu_num = $('#sign_bu').val(),point = (parseInt(bu_num)+1)*per_point;
        
    	$('div.active_b').click(function(){
            var bu_num = $('#sign_bu').val(),point = (parseInt(bu_num)+1)*per_point;
    		$(".weui-dialog__bd").html('确认花费'+point+'积分补签？');
            obj = $(this);
            $('#iosDialog1').fadeIn(200);
//    		layer.confirm('确认花费'+point+'积分补签？',function(){
//    			layer.closeAll();
//    			date = nowyear+'-'+nowmonth+'-'+obj.text();console.log(date);
//    			$('#sign_bu').val(parseInt($('#sign_bu').val())+1);
//        		sign(date,point);
//        		obj.removeClass("active_b");
//        		obj.addClass("active");
//    		})
    	})
        $('.weui-dialog__btn_primary').click(function(){
            var per_point = $('#per_point').val(),
            date = nowyear+'-'+nowmonth+'-'+obj.text();
            var bu_num = $('#sign_bu').val(),point = (parseInt(bu_num)+1)*per_point;
            $('#sign_bu').val(parseInt($('#sign_bu').val())+1);
        	sign(date,point,obj);

        })

    })
    function load_sign(arrDay){
    	$.each(arrDay,function(k,v){
    		if(v.sign_flag==1){
    			$('.day_'+parseInt(v.sign_day)).addClass('active');
    		}else if(v.sign_flag==2){
    			$('.day_'+parseInt(v.sign_day)).addClass('active_b');
    		}else if(v.sign_flag==3){
    			$('.day_'+parseInt(v.sign_day)).css('color','#f60');
    		}else if(v.sign_flag==4){
    			$('.day_'+parseInt(v.sign_day)).addClass('active');
    		}
    	})
    }
//    签到后判断是签到多少天，下方领奖进度更新
    function acceptPrize() {
        var data = parseInt($(".lineactive").attr('data-day'));//已领奖品数
        prize_num = parseInt($("#prize_total").val());//奖品数
        sign_day = parseInt($("#sign_day").val());//签到天数
        total_day = parseInt($("#total_day").val());//总奖品天数
        prize_day = parseInt($('.prizelist').children().eq(data-1).find('.day').text());//已领奖品到天数
        next_prize_day = parseInt($('.prizelist').children().eq(data).find('.day').text());
        if(data==0){
        	prize_day = 0;
        }
        if(data==prize_num){
        	next_prize_day = total_day;
        }
        width = ((data-1)/(prize_num-1))*0.85+(sign_day-prize_day)/(next_prize_day-prize_day)*(1/(prize_num-1))*0.85;
        $(".lineactive").css('width',(width*100)+7.5+'%');
    }
   //签到
  function sign(date,point,obj){
	  $.ajax({
			url: "sign_inner",
			type: "post",
			data: {
				date: date,
				point: point,
				sign_id: $('#sign_id').val(),
			},
			dataType:'json',
			success: function(res){
				if(res.state){
					$(".sign_success").find('p').html(res.now_prize.title);
					$('.sign-top').find('.total span').html(res.sign_day);
					$('.ills').html(res.now_title);
					if(res.sign_type==2){
                        $(".sign_success_bu").show();
                    }else{
                        $(".sign_success").show();
                    }
					$('#sign_day').val(parseInt($('#sign_day').val())+1);
					$('.lineactive').attr('data-day',res.prize_num);
					acceptPrize();
					if(!date){
			            $(".day_"+nowyear+padleft0(nowmonth)+padleft0(nowday)).addClass("active");
			            $('.btn_sign').addClass('disactive');
			            $(".btn_sign").html('<img src="http://[::1]/yunjuke/application/vmall/views/images/disactive.png" alt="">');
					}else{
						obj.removeClass("active_b");
			            obj.addClass("active");
					}
					acceptPrize();
				}else{
					 mobileAlert(res.msg || "系统繁忙，请稍后再试",2000);
				}
			}
		})
   }
    $(".mas").click(function () {
        $(this).hide();
        $(".rule_mask").hide();
    })
    $(".rule").click(function () {
        $(".mas").show();
        $(".rule_mask").show();
    })
    $(".btn_sign").click(function () {
        if($(".btn_sign").attr('class').indexOf('disactive')>0){
            return false;
        }else{
            sign();
        }
    })
    $(".ss_bottom").click(function () {
        $(".sign_success").hide();
        $(".sign_success_bu").hide();
    })
    //补齐两位数  
        function padleft0(obj) {  
            return obj.toString().replace(/^[0-9]{1}$/, "0" + obj);  
        } 
</script>
</html><?php }
}
