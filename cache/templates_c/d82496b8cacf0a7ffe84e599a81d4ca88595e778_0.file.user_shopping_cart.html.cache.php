<?php
/* Smarty version 3.1.29, created on 2017-10-17 10:25:33
  from "D:\www\yunjuke\application\vmall\views\user_shopping_cart.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59e56a1d72ea50_34923648',
  'file_dependency' => 
  array (
    'd82496b8cacf0a7ffe84e599a81d4ca88595e778' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\vmall\\views\\user_shopping_cart.html',
      1 => 1507628930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lib/Hlink.html' => 1,
    'file:lib/footer.html' => 1,
  ),
),false)) {
function content_59e56a1d72ea50_34923648 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '655559e56a1d4a62b1_40602238';
?>
<html lang="zh-cn" style="opacity: 1; font-size: 200px;" class="view6s">

    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/Hlink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" href="<?php echo TEMPLE;?>
css/weui1.css">
        <title>我的购物车</title>
        <style>
            .storeMsg .wbox-1 a {
                float: left;
                width: auto;
            }

            .storeMsg .wbox-1 a.action {
                font-size: 12px;
                color: #e04241;
                padding-left: 5px;
            }
			#notstock,#recieveType{
				display: none;
			}
			.weui-mask {
			  position: fixed;
			  z-index: 1000;
			  top: 0;
			  right: 0;
			  left: 0;
			  bottom: 0;
			  background: rgba(0, 0, 0, 0.6);
			}
			.weui-dialog {
			  position: fixed;
			  z-index: 5000;
			  width: 80%;
			  max-width: 300px;
			  top: 50%;
			  left: 50%;
			  -webkit-transform: translate(-50%, -50%);
					  transform: translate(-50%, -50%);
			  background-color: #FFFFFF;
			  text-align: center;
			  border-radius: 3px;
			  overflow: hidden;
			}
			.weui-dialog__bd:first-child {
				padding: 1.7em 20px 0.7em;
				color: red;
			}

			.weui-dialog__bd {
				padding: 0 1.6em 0.8em;
				min-height: 40px;
				font-size: 15px;
				line-height: 1.3;
				word-wrap: break-word;
				word-break: break-all;
			}
			.icon-more{
				font-size: 14px;
			}
			.money{
				font-size: 16px;
				color: red;
			}
			.remove{
				position: absolute;
				top: 0;
				right: 0;
				width: 68px;
				background: red;
				color: #fff;
				text-align: center;
				line-height: 118px;
			}
			.choice-style{
				background: #f1f2f6;
				height: 20px;
				width: 100%;
			}
			.choice-style span{
				float: left;
			}
			.choice-style .iconfont{
				float: right!important;
				display: block!important;
				font-size: 20px;
			}
			#gotoPays{
				display: block;
				height: 50px;
				line-height: 50px;
				width: 100px;
				text-align: center;
				float: right;
				font-size: 16px;
			}
			#gotoPays span{
				font-size: 13px;
			}
			.ft-cart .r_b {
			    border-radius: 0px;
			    background: #red;
			    color: #fff;
			    padding: 0px;
			    position: absolute;
			    right: 0px;
			    top: 0px;
			}
			.nofreight{
				font-size: 12px;
				color: #999;
				margin-left: 8px;
				font-weight: 300;
			}
			.l_b{
				font-size: 16px;
				color: #333;
				font-weight: bold;
			}
			.fcf3b{
				font-size: 18px;
				color: red;
			}
.skuPopupBox{z-index:1001;position: fixed;bottom: 0px;left: 0;width: 100%;background: #fff;box-sizing:border-box;z-index: 1101;padding-top: 10px;}
 @-webkit-keyframes actionBottom {
    0% {bottom: -400px;}
    100% {bottom: 0px;}
  }
  @keyframes actionBottom {
    0% {bottom: -400px;}
    100% {bottom: 0px;}
  }
.skuPopupBox.actionBottom{
  -webkit-animation:actionBottom 0.4s ease-in-out;
  animation:actionBottom 0.4s ease-in-out;
  bottom: 0;
}
.skuPopupBox .skuTitle{color: #888;line-height: 26px;}
.skuPopupBox .skuContainer{padding-bottom: 10px;}
.skuPopupBox .skuContainer .skuBox{line-height: 1;color: #000;padding: 8px;display: inline-block;margin-right: 5px;margin-top: 5px;border: solid 1px #ddd;min-width:25px;text-align: center;border-radius: 4px;}
.skuPopupBox .skuContainer .skuBox.ac{color: #fff;background-color: #f44336;border-color: #f44336;}
.skuPopupBox .skuContainer .skuBox.disabled{color: #888;background-color: #eee;}
.skuPopupBox .stockMsg .img{background-size: cover;background-position: 50% 50%;width: 80px;height: 80px;overflow: hidden;margin-right: 20px;}
.skuPopupBox .closeMask{position: absolute;top: -14px;right: 20px;background: #fff;border-radius: 50%;width: 26px;height: 26px;text-align: center;display: block;}
.skuPopupBox .closeMask .iconfont{font-size: 38px;position: absolute;color: #333;left: -6px;top: -12px;}
.countController{width: 108px;box-sizing:border-box;border-top: solid 1px #ddd;border-bottom: solid 1px #ddd;text-align: center;}
.countController .wbox-1{height: 36px;line-height: 36px;}
.countController a{border-left: solid 1px #ddd;border-right: solid 1px #ddd;}
.countController a:active,.countController a.disabled{background: #eee;}
.countController input{border: none;}
#goChat.hasNewMsg .newIcon{position: absolute;display: block;left: auto;right: 12px;top: 2px;}
#skuConfirmBtn{border-radius: 0;}
.newCartAni{position: absolute;top: 10px;left: 18px;font-size: 20px;display: none;}
@-webkit-keyframes newCartAni {
  0% {top: -5px;opacity: 1;}
  100% {top: -50px;opacity: 0;}
}

@keyframes newCartAni {
  0% {top: -5px;opacity: 1;}
  100% {top: -50px;opacity: 0;}
}
.newCartAni.ac{
  -webkit-animation:newCartAni 0.6s ease-in-out;
  animation:newCartAni 0.6s ease-in-out;
  top: -50px;opacity: 0;
}
.ft-cart .shopping .item.disabled{background: #eee !important;color: #888 !important;pointer-events: none;}
.salesInfo{text-align: center;}
.salesInfo:first-child{padding-bottom: 30px;}
.salesInfo .title{font-size: 18px;padding-bottom: 10px;}
.salesInfo .name{font-size: 16px;padding: 10px 0;}
.salesInfo .address{color: #888;padding-bottom: 10px;}
.seckillGuide{padding: 0;border:none;}
.seckillGuide a{display: block;background: url('<?php echo TEMPLE;?>
images/seckillGuide.png') center center no-repeat;height: 0.42rem;background-size: 100% 100%;}
.img_bor{width:43px;height:43px;border:.5px solid #e5e5e5;}
.sku-tag{display: inline-block;width:48px;height: 18px;background: url('<?php echo TEMPLE;?>
images/stock_picon.png') no-repeat;    background-size: contain;position: relative;top: 3px;margin-left: 5px;}
.getpanel{
	position:fixed;
	top:0;
	bottom:0;
	left:0;
	right:0;
	background:#333;
	z-index:1000;
	opacity:0.7;
}
.re{color:red !important;font-size:25px !important;margin-top:10px;margin-left:7px}
.weui-mask {
  position: fixed;
  z-index: 1000;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
}
.weui-dialog {
  position: fixed;
  z-index: 5000;
  width: 80%;
  max-width: 300px;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #FFFFFF;
  text-align: center;
  border-radius: 3px;
  overflow: hidden;
}
	.weui-dialog__hd {
  padding: 1.3em 1.6em 0.5em;
}
	.weui-dialog__title {
  font-weight: 400;
  font-size: 18px;
}
	.weui-dialog__bd {
  padding: 0 1.6em 0.8em;
  min-height: 40px;
  font-size: 15px;
  line-height: 1.3;
  word-wrap: break-word;
  word-break: break-all;
  color: #999999;
}
	.weui-dialog__ft {
  position: relative;
  line-height: 48px;
  font-size: 18px;
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
}
	.weui-dialog__btn {
  display: block;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
          flex: 1;
  color: #3CC51F;
  text-decoration: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  position: relative;
}
	.weui-dialog__btn_default {
  color: #353535;
}
.choice_taocan{
	width:80%;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;float: left;
}

    .evalstar{
		width: 190px;
	}
	.evalstar li{
		float:left;
		margin-left: 5px;
	}
	.evalstar img{
		width: 15px;
	}
	.small{
		color: #999;
		font-size: 12px;
		margin-left: 15px;
	}
	.content{
		padding: 10px 15px;
		font-size: 16px;
	}
	.eval-img-group{
		margin-left: 5px;
	}
	.eval-img{
		width: 100px;
		margin-left: 10px;
		float: left;
	}
	.img-r{
		max-width: 100%;
		height: auto;
	}
	.info {
   margin: 10px;
   position  :relative;
   padding: 10px;
   margin-left: 15px;
   margin-right: 15px;
   background :#eee;
   border-radius :4px;
   text-align :center;
   font-size: 14px;
  }
  .nav {
   position   :absolute;
   top    :-8px;
   left    :30px;
   overflow   :hidden;
   width    :13px;
   height   :13px;
   background  :#eee;
  -webkit-transform :rotate(45deg);
  -moz-transform :rotate(45deg);
  -o-transform  :rotate(45deg);
   transform   :rotate(45deg);
  }
.weui-cell {
    padding: 10px 15px;
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}
            .c-0{
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
            }
</style>
    </head>

    <body ontouchstart>
    <div>
       <?php if (count($_smarty_tpl->tpl_vars['carts']->value) == 0) {?>
       <div class="qk-pro-list">
            <ul class="small-block-grid-2" id="favListItem"><section class="noResult tc"><span>购物车为空哦</span><div><a href="<?php echo base_url('vmall.php/goods/index');?>
" class="btn btn-red" style="display:inline-block;background:#e04241;">立即去添加</a></div></section></ul>
        </div>
       <?php } else { ?>
        <!-- <input type="hidden" name="" id="suid" value="8">
        <input type="hidden" name="" id="storeId" value="">
        <input type="hidden" name="" id="salesId" value=""> -->
        <input type="hidden" name="" id="buyerId" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">
        <?php
$_from = $_smarty_tpl->tpl_vars['carts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cart_0_saved_item = isset($_smarty_tpl->tpl_vars['cart']) ? $_smarty_tpl->tpl_vars['cart'] : false;
$_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cart']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
$__foreach_cart_0_saved_local_item = $_smarty_tpl->tpl_vars['cart'];
?>
        <section class="cart-list" style="margin-bottom:.4rem;" data-store="<?php echo $_smarty_tpl->tpl_vars['cart']->value['store_id'];?>
" data-sales="">
            <div class="storeMsg wbox">
                <input name="checkProduct" type="checkbox" value="" class="yes" style="top: 15px;">
                <div class="wbox-1">
                	<i class="iconfont pull-left" style="margin:1px 5px 0 0">&#xe67a;</i>
                    <a class="store" data-id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cart']->value['store_id'];
$_tmp1=ob_get_clean();
echo $_tmp1;?>
" href="<?php echo base_url('vmall.php/index?storeId=');
echo $_smarty_tpl->tpl_vars['cart']->value['store_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cart']->value['store_name'];?>
</a>
                	<i class="iconfont icon-more">&#xe604;</i>
                </div>
                <a class="edit" href="javascript:;">编辑</a>
            </div>
            <div class="list">
                <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value['goods'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_good_1_saved_item = isset($_smarty_tpl->tpl_vars['good']) ? $_smarty_tpl->tpl_vars['good'] : false;
$_smarty_tpl->tpl_vars['good'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['good']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['good']->value) {
$_smarty_tpl->tpl_vars['good']->_loop = true;
$__foreach_good_1_saved_local_item = $_smarty_tpl->tpl_vars['good'];
?>
                <div class="sotr" style="position: relative;">
                <dl class="wbox" style="z-index: 9;position: relative;background: #fff;">
                    <dt style="margin-top: 18px;">
                        <label class="block">
                            <input name="checkProduct" data-salesid="" type="checkbox" data-type="<?php echo $_smarty_tpl->tpl_vars['good']->value['receive_type'];?>
" data-amount="<?php echo $_smarty_tpl->tpl_vars['good']->value['amount'];?>
" data-num="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_num'];?>
" stockId="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
"  class="yes  post post_goods">
                        </label>
                    </dt>
                    <dd data-cartid="<?php echo $_smarty_tpl->tpl_vars['good']->value['cart_id'];?>
" data-storeid="<?php echo $_smarty_tpl->tpl_vars['good']->value['store_id'];?>
"  data-goodseaid="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_ea_id'];?>
" data-goodsid="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
"  data-skuid="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_a_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['good']->value['ssa_id'];?>
" data-bl="<?php echo $_smarty_tpl->tpl_vars['good']->value['bl_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_name'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_color'];?>
" data-color-remark="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_color_remark'];?>
" data-size-remark="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_size_remark'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['good']->value['receive_type'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_image'];?>
" class="stockInfo wbox-1">
                         <a href="<?php echo base_url('vmall.php/goods/goods_info?store_id=');
echo $_smarty_tpl->tpl_vars['cart']->value['store_id'];?>
&goods_ea_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_ea_id'];?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" class="block">
                            <div class="wbox">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_image'];?>
"  onerror="javascript:this.src='<?php echo DEFAULTIMAGE;
echo $_smarty_tpl->tpl_vars['config_images']->value['goods_image'];?>
'"  class="size80" style="border-radius: 4px;">
                                <div class="wbox-1 detail">
                                    <div class="name"><?php echo $_smarty_tpl->tpl_vars['good']->value['goods_name'];?>
</div>
                                    <div class="fc-grey">
                                    	<p id="chioce">
                                        <span class="c-9">(<?php if ($_smarty_tpl->tpl_vars['good']->value['receive_type'] == 2) {?>自提<?php } else { ?>快递<?php }?>)</span><span class="color" style="margin-left:10px"><?php echo $_smarty_tpl->tpl_vars['good']->value['goods_color'];?>
</span><span class="size" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['good']->value['goods_spec'];?>
</span>
                                     	<span class="iconfont" style="display: none;">&#xe612;</span>
                                    	</p>
                                    </div>
                                       
                                        <br>
                                        <p class="pull-left money">￥<span class="price"><?php echo $_smarty_tpl->tpl_vars['good']->value['stocks_price'];?>
</span></p>
                                        <div class="d-plus pull-right" style="margin-top: -8px;">
                                        	<button class="jian left-radiu">-</button>
                                        	<input name="" class="count" type="number" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_num'];?>
" data-max="5" data-limit="0" data-id="<?php echo $_smarty_tpl->tpl_vars['good']->value['ssa_id'];?>
">
                                        	<button class="jia right-radiu">+</button>
                                    	</div>
                                	</div>
                                <div href="javascript:;" class="remove fn-hide removegoods" data-id="<?php echo $_smarty_tpl->tpl_vars['good']->value['cart_id'];?>
"></div>
		                            <!--<p>x <span class="shopCount"><?php echo $_smarty_tpl->tpl_vars['good']->value['goods_num'];?>
</span></p>-->
                            </div>
                        </a>
                    </dd>
     

                    <dd class="action" style="display: none">
                        <div href="javascript:;" class="remove fn-hide removegoods" data-id="<?php echo $_smarty_tpl->tpl_vars['good']->value['cart_id'];?>
"></div>
                        <div class="money">
                            <p>￥<span class="price"><?php echo $_smarty_tpl->tpl_vars['good']->value['stocks_price'];?>
</span></p>
                            <p>x <span class="shopCount"><?php echo $_smarty_tpl->tpl_vars['good']->value['goods_num'];?>
</span></p>
                        </div>
                    </dd>


                </dl>
                <div href="javascript:;" class="remove removegoods" data-id="<?php echo $_smarty_tpl->tpl_vars['good']->value['cart_id'];?>
" style="z-index: 1;">删除</div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['good'] = $__foreach_good_1_saved_local_item;
}
if ($__foreach_good_1_saved_item) {
$_smarty_tpl->tpl_vars['good'] = $__foreach_good_1_saved_item;
}
?>
            </div>
        </section>
        <?php
$_smarty_tpl->tpl_vars['cart'] = $__foreach_cart_0_saved_local_item;
}
if ($__foreach_cart_0_saved_item) {
$_smarty_tpl->tpl_vars['cart'] = $__foreach_cart_0_saved_item;
}
?>
          <?php }?>   
        
<!--		库存不够弹出框-->
       <div id="notstock" class="js_dialog">
       		<div class="weui-mask"></div>
       		<div class="weui-dialog">
       			<div class="weui-dialog__bd">
       				该商品库存不足或已下架！
       			</div>
       		</div>
       </div>
       <div id="recieveType" class="js_dialog">
       		<div class="weui-mask"></div>
       		<div class="weui-dialog">
       			<div class="weui-dialog__bd">
       				自提商品请单独下单！
       			</div>
       		</div>
       </div>
        <!--底部-->
        <footer style="height:55px;">
            <div class="ft-cart" style="bottom:.41rem;z-index:999">
                <span class="l_b">合计：<span class="fcf3b bold">￥</span><span class="fcf3b bold" id="priceTottle">00.00</span><span class="nofreight">不含运费</span></span>
                <btn id="gotoPays" class="r_b">去结算(<span></span>)</btn>
            </div>
        </footer>
        <input type="hidden" name="footStoreId" value="">
        <input type="hidden" name="footSalesId" value="">
        <input type="hidden" name="footSuid" value="8">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        

<div class="getpanel" style="display:none""></div>        
        
<div class="skuPopupBox" style="display:none;">
<a href="javascript:;" class="closeMask"><i class="iconfont re">&#xe617;</i></a>
<div id="skuBoxWrap">  
  <div class="p20">
    <div class="stockMsg wbox pb10">
      <div class="img" id="goodsimages"  style="background-image:url(<?php echo DEFAULTIMAGE;
echo $_smarty_tpl->tpl_vars['config_images']->value['goods_image'];?>
)"></div>
      <div class="wbox-1">
        <p class="c-0"></p>
        <p class="fc-red fs16 pt5" data-oldprice="0" id="skuPrice">¥0</p>
        <p class="pt5">剩余库存<span id="skuCountLast">0</span>件</p>
      </div>
    </div>

    <div style="height: 230px;overflow: auto">
     <p class="skuTitle">颜色</p>
      <div class="skuContainer" id="colorSkus">
       		 	
      </div>
    
      <p class="skuTitle">尺码</p>
      <div class="skuContainer" id="sizeSkus">
       
      </div>
    </div>
  </div>
  <a href="javascript:;" class="btn btn-red full" id="skuConfirmBtn">确定</a>
</div></div>
<div class="ui-mask active"></div>








    </div>
       
    </body>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TEMPLE;?>
js/zepto.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo TEMPLE;?>
js/getShoppingCart.js"><?php echo '</script'; ?>
>   
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TEMPLE;?>
js/base.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
   var qjflag = true,
   	   goods_id = '',
	   goods_a_id = '',
	   goods_ea_id = '',
	   goods_spec ='',
	   ssa_id ='',
	   bl_id ='',
	   cart_id ='',
	   goods_img ='',
	   goods_image='',
	   goods_color ='',
	   goods_name ='',
	   store_id ='',
	   thisobj='',
	   receive_type ='';
});
$(".closeMask").on("click",function(){
	$(".getpanel").css("display","none");
	$(".skuPopupBox").css("display","none");
});
function opengetpanel(){
	$(".getpanel").css("display","block");
	if($(".skuPopupBox").css("display") =="none"){
		$(".skuPopupBox").css("display","block");
	}
}


//提货方式
$("body").on("click",".skuContainer .type",function(){
	if($(this).siblings()){
		$(this).siblings().attr("class","type skuBox");
	}
	
	$(this).attr("class","type skuBox ac");
});


//获取对应库存
$(".skuContainer").on("click",".sku",function(){
	if($("#skuConfirmBtn").hasClass("disabled")){
		$("#skuConfirmBtn").removeClass("disabled");
	}
	qjflag = true;
	if($(this).attr("str")=="colors"){
		 color = $(this).attr("title");
		 goods_aid = $(this).attr("goods_a_id");
		 get_size_by_ajax(goods_id,goods_aid,true);
		 $(this).siblings().attr("class","sku skuBox");
	     $(this).attr("class","sku skuBox ac");
	}else{
		   if($(this).hasClass("disabled")){
			   qjflag = false;
			   $("#skuConfirmBtn").addClass("disabled");
		    	return false;
		    }
		   
	    	
	    	$.each($(this).siblings(),function(k,v){
	    		if($(this).hasClass("ac")){
	    			$(this).removeClass("ac");
	    		}
	    	})
		$(this).attr("class","sku skuBox ac");
	    	goods_a_id = $(this).attr("goods_a_id");
		    size = $("#sizeSkus .ac").attr("title");
		    color = $("#colorSkus .ac").attr("title");
		    goods_ea_id = $("#sizeSkus .ac").attr("goods_ea_id");
		    get_price_by_ajax(goods_id,size,goods_ea_id,goods_a_id);
	}
	
	
});





//左滑删除

var startX, startY, moveEndX, moveEndY, X, Y;
$('dl').on('touchstart', function(e) {
    startX = e.touches[0].pageX;
    startY = e.touches[0].pageY;
});

$('dl').on('touchmove', function(e) {

    moveEndX = e.changedTouches[0].pageX;
    moveEndY = e.changedTouches[0].pageY;
    X = moveEndX - startX;
    Y = moveEndY - startY;


    if ( Math.abs(X) > Math.abs(Y) && X > 0 ) {
        $(this).animate({transform:"translateX(0px)"},300);//向左滑动
    }
    else if ( Math.abs(X) > Math.abs(Y) && X < 0 ) {
        $(this).animate({transform:"translateX(-68px)"},300);//向右滑动
    }

});

	
	//删除的高
	$(".remove").each(function(){
		var height = $(this).parent().height()-1;
		$(this).css("height",height);
	})
	//修改数量为1时减号显示弱颜色
	$('.count').each(function(){
		if($(this).val()<=1){
			$(this).prev().addClass("min");
		}
	})
	
var confirm_url = "<?php echo base_url();?>
vmall.php/order/buy_confirm?user_id=<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
";
var goods_url = "<?php echo base_url();?>
vmall.php/goods/index";







//保存
$("body").on("click",".list .choice-style",function(e){
	  thisobj = $(this);
	  e.preventDefault();//防止打开连接
	  var tid = $(this).parent().parent().parent().parent().parent();
	      goods_id = tid.attr('data-goodsid'),
	      goods_a_id = tid.attr('data-skuid'),
	      goods_ea_id = tid.attr('data-goodseaid'),
	      goods_spec = tid.find('span.size').text(), 
	      ssa_id = tid.attr('data-id'), 
	      bl_id = tid.attr('data-bl'), 
	      cart_id = tid.attr('data-cartid'), 
	      goods_img = tid.attr('data-img'), 
	      goods_color = tid.attr('data-color'), 
	      goods_name = tid.attr('data-name'), 
	      receive_type = tid.attr('data-type'),
	      store_id = tid.attr('data-storeid');
	      $("#skuBoxWrap .c-0").html(goods_name);
	      get_color_by_ajax(goods_id,true);

          opengetpanel();


});





function get_color_by_ajax(goods_id,flag){
	$.getJSON("../goods/get_color_by_ajax?goods_id="+goods_id,function(data){
		 if(data.state){
			 var htmls = "",remarkcolor = "";
				$.each(data.data,function(k,v){
					if(v.color_remark){
						vcolor_remark = v.color_remark;
					}else{
						vcolor_remark = '';
					}
					if(v.color){
						vcolor = v.color;
					}else{
						vcolor = '';
					}
					
					if(vcolor_remark){
						remarkcolor = vcolor_remark;
					}else{
						remarkcolor = vcolor;
					}
					if(k<1){
						htmls +='<i class="sku skuBox ac" str="colors"  goods_color="'+vcolor+'" color_remark ="'+vcolor_remark+'" title="'+v.stocks_sku+'" goods_a_id="'+v.goods_a_id+'" >'+remarkcolor+'</i>';
					}else{
						htmls +='<i class="sku skuBox" str="colors"  goods_color="'+vcolor+'" color_remark ="'+vcolor_remark+'" title="'+v.stocks_sku+'" goods_a_id="'+v.goods_a_id+'" >'+remarkcolor+'</i>';
					}
   			});
			$('#colorSkus').html("");
			$('#colorSkus').html(htmls);
			if(flag){
				get_size_by_ajax(goods_id,goods_a_id,true);
			}
		 }
         
	});
}





$("#skuConfirmBtn").on("click",function(){
	var goods_a_id_ = $("#colorSkus .ac").attr("goods_a_id"),
	    goods_ea_id_ = $("#sizeSkus .ac").attr("goods_ea_id"),
	    goods_remark_color_ = $("#colorSkus .ac").html(),
	    goods_remark_size_ = $("#sizeSkus .ac").html(),
	    goods_size_ = $("#sizeSkus .ac").html(),
	    goods_price_ = $("#skuPrice").attr("data-oldprice"),
	    goods_color_ = $("#colorSkus .ac").attr("goods_color"),
	    
	    goods_ssa_id_ = $("#skuPrice").attr("data-ssa_id");
	    thisobj.attr("data-goodseaid",goods_ea_id_);
	    thisobj.attr("data-skuid",goods_a_id_);
	    thisobj.attr("data-id",goods_ssa_id_);
	    thisobj.attr("data-color",goods_color_ );
	    thisobj.attr("data-img",goods_image);
	    thisobj.parent().parent().parent().find("img").css("src",goods_image);
	    thisobj.parent().parent().find(".pull-left .price").html(goods_price_);
	    thisobj.find(".color").html(goods_remark_color_);
	    thisobj.find(".size").html(goods_size_);
	    $(".getpanel").css("display","none");
		$(".skuPopupBox").css("display","none");
});



function get_size_by_ajax(goods_id,goods_a_id,flag){
	qjflag = true;
	$.getJSON("../goods/get_size_by_ajax?goods_id="+goods_id+"&goods_a_id="+goods_a_id+"&store_id="+store_id,function(data){
		 if(data.state){
			 console.log(data.data)
			 var htmls = "";
			 var sizetitle = "";
			 var sizeremark="";
			 var numlength = data.data.length;
				$.each(data.data,function(k,v){
					if(v.size_note){
						sizetitle = v.size_note;
						sizeremark = v.size_note;
					}else{
						sizetitle = v.size;
					}
			
					if(numlength>1){
						//alert("numlength>1")
						if(k){
							if(v.goodsamount){
								htmls +='<i class="sku skuBox " size_remark="'+sizeremark+'" goods_ea_id="'+v.goods_ea_id+'" goods_a_id="'+v.goods_a_id+'" flag="'+v.goods_id+v.goods_a_id+'" title="'+v.size+'" >'+sizetitle+'</i>';
							}else{
								htmls +='<i class="sku skuBox disabled" size_remark="'+sizeremark+'" goods_ea_id="'+v.goods_ea_id+'" goods_a_id="'+v.goods_a_id+'" flag="'+v.goods_id+v.goods_a_id+'" title="'+v.size+'" >'+sizetitle+'</i>';
							}
							 
						}else{
							if(v.goodsamount){
								htmls +='<i class="sku skuBox ac" size_remark="'+sizeremark+'" goods_ea_id="'+v.goods_ea_id+'" goods_a_id="'+v.goods_a_id+'"  flag="'+v.goods_id+v.goods_a_id+'" title="'+v.size+'">'+sizetitle+'</i>';
							}else{
								htmls +='<i class="sku skuBox  disabled" size_remark="'+sizeremark+'" goods_ea_id="'+v.goods_ea_id+'" goods_a_id="'+v.goods_a_id+'"  flag="'+v.goods_id+v.goods_a_id+'" title="'+v.size+'">'+sizetitle+'</i>';
							}
						}
					}else{
						if(v.goodsamount){
							htmls +='<i class="sku skuBox ac" size_remark="'+sizeremark+'" goods_ea_id="'+v.goods_ea_id+'" goods_a_id="'+v.goods_a_id+'"  flag="'+v.goods_id+v.goods_a_id+'" title="'+v.size+'">'+sizetitle+'</i>'; 
						}else{
							htmls +='<i class="sku skuBox disabled" size_remark="'+sizeremark+'" goods_ea_id="'+v.goods_ea_id+'" goods_a_id="'+v.goods_a_id+'"  flag="'+v.goods_id+v.goods_a_id+'" title="'+v.size+'">'+sizetitle+'</i>'; 
						}
						
					}
				
   			});
			$('#sizeSkus').html("");
			$('#sizeSkus').html(htmls);
			if(flag){
				goods_aid = $("#colorSkus .ac").attr("goods_a_id");
			    size = $("#sizeSkus .ac").attr("title");
			    color = $("#colorSkus .ac").attr("title");
			    if(size==undefined){
			    	$("#countInput").val(1)
			    	$("#skuCountLast").html('0');
			    	$("#skuConfirmBtn").addClass("disabled");
			    	qjflag = false;
			    	return false;
			    }
			    goods_ea_id = $("#sizeSkus .ac").attr("goods_ea_id");
		    	get_price_by_ajax(goods_id,size,goods_ea_id,goods_aid,true);
			}
		 }
         
	});
}
$('.cart-list').each(function () {
    var last = $(this).find('dd').length;
    $(this).find('dd').each(function(i){

        if(i==last-2){
            console.log($(this))
            $(this).css('border-bottom','none')
        }
    })

})

function get_price_by_ajax(goods_id,size,goods_ea_id,goods_a_id,flag){
	$.getJSON("../goods/get_price_by_ajax?goods_a_id="+goods_a_id+"&goods_id="+goods_id+"&size="+size+"&goods_ea_id="+goods_ea_id+"&store_id="+store_id,function(data){
		var GOODIMAGE = "<?php echo GOODIMAGE;?>
";
		    DEFAULTIMAGES = "<?php echo DEFAULTIMAGE;?>
"+"<?php echo $_smarty_tpl->tpl_vars['config_images']->value['goods_image'];?>
";
		if(data.state){
			console.log(data.data)
			$("#skuPrice").attr("data-oldprice",data.data.stocks_price);
			$("#skuPrice").attr("data-ssa_id",data.data.ssa_id);
			$("#skuPrice").html("¥"+data.data.stocks_price);
			$("#skuCountLast").html(data.data.amount);
			if(data.data.img_info){
				$("#goodsimages").css("background-image","url("+GOODIMAGE+data.data.img_info+")");
				 goods_image = GOODIMAGE+data.data.img_info;
			}else{
				$("#goodsimages").css("background-image","url("+DEFAULTIMAGES+")");
				 goods_image = DEFAULTIMAGES;
			}
			if(flag){
				 opengetpanel();
			}
		}
		
	});
}



















/* var tel = "<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
";
if(tel==""){	
	showMPLoginBox(<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
);
} */

/*$("#gotoPays").click(function(){
	var user_id = '<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
';
	$.ajax({
		type: "post",
        url: "login/check_captcha",
        data: {user_id:user_id},
        dataType: "json",
        success: function(data){
        	
        }
	})
	var spg_id = 1;
	location.href = "<?php echo base_url();?>
vmall.php/order/buy_confirm?spg_id="+spg_id;
}); */
<?php echo '</script'; ?>
>
</html><?php }
}
