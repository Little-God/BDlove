<?php
/* Smarty version 3.1.29, created on 2017-10-30 17:11:03
  from "D:\www\yunjuke\application\pay\views\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f6eca7416c45_67551894',
  'file_dependency' => 
  array (
    '63b529bcb82a573557fa80a9187aef0a85d035a9' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\login.html',
      1 => 1506393101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f6eca7416c45_67551894 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '37059f6eca73cc8b8_78978130';
?>
<!doctype html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>云聚客门店收银系统  Powered by 云聚客</title>
<meta name="keywords" content="云聚客门店收银系统" />
<meta name="description" content="云聚客门店收银系统" />
<meta name="author" content="Pondering">
<meta name="copyright" content="Pondering Inc. All Rights Reserved">
<link href="<?php echo TEMPLE;?>
css/login.css" rel="stylesheet" type="text/css">
<link href="<?php echo TEMPLE;?>
css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo PLUGIN;?>
plugins/sweetAlert/sweetalert.css" type="text/css" rel="stylesheet">
<style type="text/css">
    body{
        background: #ff8f36;
    }
    .login-submit{
        width:330px;
        height:40px!important;
        line-height:40px!important;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        background: #ff6600!important;
        font-size:20px!important;
        color: #fff;
    }
</style>
</head>
<body>
<!--背景图-->
<div id="loginBG01" class="ncsc-login-bg" style="display: block;">
    <div class="login-content">
        <div class="logo"><img src="<?php echo TEMPLE;?>
images/logo.png" alt=""></div>
        <div class="left-banner">
            <div class="people"><img src="<?php echo TEMPLE;?>
images/smallpeople.png" alt=""></div>
            <div class="rocket"></div>
            <div class="banner-content1">
                <span>网店</span>助手
                <img src="<?php echo TEMPLE;?>
images/storehelp.png" alt="" class="bann-img">
            </div>
            <div class="banner-content2">
                <span>微</span>分销
                <img src="<?php echo TEMPLE;?>
images/pay.png" alt="" class="bann-img">
            </div>
            <div class="banner-content3">
                <span>流量</span>导入
                <img src="<?php echo TEMPLE;?>
images/stock.png" alt="" class="bann-img">
            </div>
            <div class="banner-content4">
                <img src="<?php echo TEMPLE;?>
images/wechat.png" alt="" class="bann-img">
                <span>微</span>商城
            </div>
            <div class="banner-content5">
                <img src="<?php echo TEMPLE;?>
images/service.png" alt="" class="bann-img">
                <span>会员</span>营销
            </div>
        </div>
        <div  class="ncsc-login-container">
            <div class="ncsc-top">
                <p class="sample" nctype="1">商家登录</p>
                <p style="float: right;"><a href="javascript:;">立即注册 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>
            </div>
            <div class="clear"></div>
            <form id="chain_login" method="post" action="" onsubmit="return false;">
                <input type='hidden' name='formhash' value='LCM-JYnqQBzpK148x-BogASP0sRQpo2' />    <input type="hidden" name="form_submit" value="ok" />
                <div class="input-container">
                    <div class="input">
                        <label>用户名</label>
                        <span class="repuired"></span>
                        <input class="text" type="text" name="user" id="user" autofocus autocomplete="off"  placeholder="请输入手机号"/>
                    </div>
                    <div class="input">
                        <label>密码</label>
                        <span class="repuired"></span>
                        <input class="text" type="password" name="pwd" id="pwd" placeholder="密码"/>
                    </div>
                    <div class="input">
                        <label>验证码</label>
                        <span class="repuired"></span>
                        <input type="text" name="captcha" id="captcha" autocomplete="off" class="text" style="width: 80px;" maxlength="4" size="10" placeholder="验证码"/>
                        <div class="code">
                            <div class="arrow"></div>
                            <div class="code-img"><a href="javascript:void(0)" nctype="btn_change_seccode"><img src="verify_image?t=<?php echo $_smarty_tpl->tpl_vars['random']->value;?>
" name="codeimage" border="0" id="codeimage"></a></div>
                            <a href="JavaScript:void(0);" id="hide" class="close" title=""><i></i></a> <a href="JavaScript:void(0);" class="change" nctype="btn_change_seccode" title=""><i></i></a>
                        </div>
                    </div>
                </div>
                <!--<div class="" style="margin-top:10px;">
                    <input type="radio" id="sign-store" name="roletype" value="1" checked="" >单门店
                    <input type="radio" id="more-store" name="roletype" value="0" style="margin-left:20px;" >集合店
                </div>-->
                <div class="ncsc-top" style="margin: 10px 0 20px 0;">
                    <p style="float: left;"><input type="checkbox" id="auto"><label for="auto" style="font-size: 14px;">下次自动登录</label></p>
                    <p style="float: right;"><a href="javascript:;">忘记密码 ?</a></p>
                    <div class="clear"></div>
                </div>
                <input type="submit" class="login-submit" value="确认登录">
            </form>
        </div>
        <div style="clear: both;"></div>
    </div>
    <div class="footer">
        <ul class="friend">
            <li><a href="javascript:;">juke360buy.com</a></li>
            <li><a href="javascript:;">加入我们</a></li>
            <li><a href="javascript:;">联系我们</a></li>
            <li><a href="javascript:;">法律声明</a></li>
            <li><a href="javascript:;">全渠道运营</a></li>
            <li><a href="javascript:;">会员服务</a></li>
            <li><a href="javascript:;">软件开发</a></li>
            <li><a href="javascript:;">友情链接</a></li>
        </ul>
        <p>&copy; Copyright 2017 成都云聚客科技有限公司 版权所有 蜀ICP备16025624号-3</p>
    </div>
</div>

</body>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8"  src="<?php echo TEMPLE;?>
js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8"  src="<?php echo TEMPLE;?>
js/jquery.validation.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8"  src="<?php echo PLUGIN;?>
plugins/sweetAlert/sweetalert.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/jQuery_md5/jQuery.md5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUGIN;?>
plugins/jQuery_md5/jQuery.md5.add.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        //更换验证码
        function change_seccode() {
            $('#codeimage').attr('src', 'verify_image?t=' + Math.random());
            $('#captcha').select();
        }

        $('[nctype="btn_change_seccode"]').on('click', function() {
            change_seccode();
        });

        //登陆表单验证
        $('.login-submit').click(function () {
            user = $('#user').val();
            pwd = $('#pwd').val();
            captcha = $('#captcha').val();
            if(user==''||pwd==''){
                swal("", "用户名或者密码不能为空", "error");return false;
            }
            if(captcha==''){
                swal("", "请输入验证码", "error");return false;
            }
            pwd = pwd_addMD5(pwd);
            $.ajax({
                type: "post",
                url: "check_captcha",
                data: {captcha:captcha},
                dataType: "json",
                success: function(data){
                    if(data.state){
                        type  = $('.double').attr('nctype');
                        if(type==1){
                            type = 2;
                        }else{
                            type =1;
                        }
                        $.ajax({
                            type: "post",
                            url: "check_login?type="+type,
                            data: {user:user,pwd:pwd},
                            dataType: "json",
                            success: function(data){
                                if(data.state){
                                    window.location.href="index";
                                }else{
                                    swal("", data.msg, "error");return false;
                                }
                            }
                        })
                    }else{
                        swal("", data.msg, "error");return false;
                    }
                }
            })
        })
        // 回车提交表单
        $('#chain_login').keydown(function (event) {
            if (event.keyCode == 13) {
                $('.btn-submit').click();
            }
        });
        //Hide Show verification code
        $("#hide").click(function(){
            $(".code").fadeOut("slow");
        });
        $("#captcha").focus(function(){
            $(".code").fadeIn("fast");
        });

    });
<?php echo '</script'; ?>
>
</html>
<?php }
}
