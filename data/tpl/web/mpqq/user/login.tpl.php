<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-login', TEMPLATE_INCLUDEPATH)) : (include template('common/header-login', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="./resource/mpqq/register.css">

<style type="text/css">
    a:link { 

text-decoration: none; 
} 
a:visited { 

text-decoration: none; 
} 

</style>


<script type="text/javascript">
    
    function formcheck(){



        var showError = function(text){
       
            $("#operate_tips").html(text+'<span class="down_row"></span>');
            $("#operate_tips").fadeIn();
        }
        var val = $.trim($('#u').val());
        if(val.length == 0 ) {
            showError("请输入用户名！");
            return false ;
        }

        if($('#p').val() == '') {
            showError("请输入密码!");
            return false;
        }


}
  
    function regcheck(){

     var showError = function(text){
       
            $("#reg_tips").html(text+'<span class="down_row"></span>');
            $("#reg_tips").fadeIn();
        }
        var val = $.trim($('#regu').val());
        if(val.length == 0 ) {
            showError("请输入用户名！");
            return false ;
        }

        if($('#regp').val() == '') {
            showError("请输入密码!");
            return false;
        }
         if($('#repassword').val() == '') {
            showError("请再次输入密码!");
            return false;
        }

        if($('#regp').val().length < 8) {
            showError("密码长度不得低于8位!");
            return false;
        }

   

        if($('#repassword').val() != '') {
           if( $('#repassword').val() != $('#regp').val() ) 
           {
            showError("两次输入的密码不一致!");
            return false;
           }
    }
         if(typeof ($('#regmust').val()) != 'undefined') {

          if(  ($('#repassword').val().length >=8) && ($('#regmust').val() == '') ) {
            showError("必填项必须填写!");
            return false;
        }
    }
     
    }
</script>
<?php  
$extendfields = pdo_fetchall("SELECT field, title, description, required FROM ".tablename('profile_fields')." WHERE available = '1' AND showinregister = '1' ORDER BY displayorder DESC", array(), 'field');
 ?>
<div class="index">
        <div id="heading" class="heading" style="width:100%; ">
        <canvas id="starCanvas" width="1920" height="700"></canvas>
        <div class="head-top" style="left: 50%; margin-left: -590px; width: 1180px;">
            <img style="margin-left: 17px;position: absolute;top: 20px;float: left;width: 200px;height: 34px;" src="./resource/mpqq/images/logo_beta.png">
            <div class="link">
                <a href="#">首页</a>
                <a href="<?php  echo url('article/news-show/list');?>" target="_blank">新闻</a>
                <a href="<?php  echo url('article/notice-show/list');?>" target="_blank">公告</a>
            </div>
        </div>
        <img class="wording" src="./resource/mpqq/images/wording.png" style="width: 459px;">
        <!--[if lt IE 8]>
        <img class="wording wording400" src="http://combo.b.qq.com/store/src/themes/mpPortal/register/images/index/wordingX400.png" style="display:none;">
        <![endif]-->
        <div class="iframe">
        <div class="iframe-title">输入账号登陆营销平台</div>
             <div  id="login">                   
<div id="header" class="header1">
<div class="switch" id="switch">
<a class="switch_btn_focus" hidefocus="true" id="switcher_qlogin" href="<?php  echo url('user/login');?>"tabindex="7">快速登录</a> 
<a class="switch_btn" hidefocus="true" id="switcher_plogin" href="<?php  echo url('user/register');?>" tabindex="8">&nbsp;帐号注册</a>

<div class="switch_bottom" id="switch_bottom" style="margin-left: -5px;left: 0px; width: 77px; position: absolute;"></div>
</div></div>

<div class="web_qr_login" id="web_qr_login" style="display: block;">
<div class="web_qr_login_show" id="web_qr_login_show"><div class="web_login" id="web_login"><div class="tips" id="tips">

<div class="operate_tips" id="operate_tips">手机号码也可登录哦<span class="down_row"></span></div>
</div>

<div class="login_form">
<form id="loginform" autocomplete="off" name="loginform" action="" method="post"  role="form" style="margin:0" onsubmit="return formcheck();">

<div class="uinArea" id="uinArea"><label class="input_tips" id="uin_tips" for="u" >请输入用户名</label>
<div class="inputOuter" id="inputOuter1">
<input type="text" class="inputstyle" id="u" name="username"  value="" tabindex="1"> <a class="uin_del" id="uin_del" href="javascript:void(0);" style="display: block;"></a></div><ul class="email_list" id="email_list" style="display: none;"></ul></div>

<div class="pwdArea" id="pwdArea"><label class="input_tips" id="pwd_tips" for="p" style="display: block;">密码</label>
<div class="inputOuter" id="inputOuter2">
<input type="password" class="inputstyle password" id="p" name="password" value="" maxlength="16" tabindex="2"></div><div class="lock_tips" id="caps_lock_tips" style="display: none;"><span class="lock_tips_row"></span> <span>大写锁定已打开</span></div></div>
    <?php  if(!empty($_W['setting']['copyright']['verifycode'])) { ?>
<div class="verifyArea" id="verifyArea">

<div class="verifyinputArea" id="verifyinputArea"><label class="input_tips" id="vc_tips" for="verifycode">验证码</label><div class="inputOuter">
<input type="text" class="inputstyle verifycode" id="verify" name="verify" value="" tabindex="3"></div></div>
<div class="verifyimgArea" id="verifyimgArea" style="
    margin-top: 10px;
">
 <img class="verifyimg" id="verifyimg" title="看不清，换一张" src="./index.php?c=utility&amp;a=code&amp;" class="img-rounded" style="cursor:pointer;" onclick="this.src='./index.php?c=utility&amp;a=code&amp;' +   Math.random();">   
 <a tabindex="4" href="javascript:void(0);" id="verifyChange" class="verifyimg_tips">看不清，换一张</a></div></div>
    <?php  } ?>
<div class="submit"><a class="login_button" href="javascript:void(0);" hidefocus="true">
<input type="submit" tabindex="6"   name="submit" value="登 录" class="btn" id="login_button">
 <input name="token" value="<?php  echo $_W['token'];?>" type="hidden">      
</a> </div>
</form></div>

<div class="bottom" id="bottom_web" style="display: block;"><a href="<?php  echo url('user/register');?>" class="link1" target="_blank">注册新帐号</a>  <span class="dotted"> </div>

</div></div></div>


<div class="web_qr_login" id="web_qr_register" style="display: none;">
<div class="web_qr_login_show" id="web_qr_login_show"><div class="web_login" id="web_login"><div class="tips" id="tips">

<div class="operate_tips" id="reg_tips">手机号码也可登录哦<span class="down_row"></span></div>
</div>

<div class="login_form">
<form id="loginform" autocomplete="off" name="loginform" action="<?php  echo url('user/register');?>"  method="post" role="form" style="margin:0" onsubmit="return regcheck();">
<div class="login_input_panel" id="js_mainContent">  <div class="login_input"> <i class="icon_login   un"> </i>                                   <input id="regu" name="username" type="text" placeholder="请输入用户名">  </div> <div class="login_input">
<i class="icon_login   pwd">   </i>                                                                        <input name="password" type="password" id="regp" placeholder="请输入密码">                                                                </div>                              <div class="login_input">                                                            <i class="icon_login pwd"> 
</i>                                                                    <input name="password" type="password" id="repassword" placeholder="请再次输入密码">  </div> 
 <?php  if($extendfields) { ?>                     <?php  if(is_array($extendfields)) { foreach($extendfields as $item) { ?>                          
<div class="login_input">       
    <i class="icon_login icon_arrow"> </i>
    <input type="text"  <?php  if($item['required']) { ?> id="regmust" <?php  } ?> name="<?php  echo $item['field'];?>" value="" placeholder="请输入<?php  echo $item['title'];?><?php  if($item['required']) { ?>（必填）<?php  } ?>"> 
</div> <?php  } } ?>                  <?php  } ?>   
<?php  if($setting['register']['code']) { ?>                 
   
    <div class="login_input">    
    <i class="icon_login icon_speaker"> </i>
    <input name="code" type="text" placeholder="请输入验证码" style="display:inline;">           
    </div>  
    <div class="login_btn_panel">   
        <img src="./index.php?c=utility&amp;a=code&amp;" class="img-rounded" style="cursor:pointer;" onclick="this.src='./index.php?c=utility&amp;a=code&amp;' +   Math.random();">   

        </div>    <?php  } ?> 
     <div class="login_btn_panel">         <input type="submit" name="submit" value="注册" class="btn_login">    
     <input name="token" value="<?php  echo $_W['token'];?>"  type="hidden" >   

         </div> 
     </div> 
</form></div>

<div class="bottom" id="bottom_web" style="display: block;"><a href="./index.php?c=user&amp;a=register&amp;" class="link1" target="_blank">注册新帐号</a>  </div>

</div></div></div>

    </div>
  </div>
 </div>
    <div class="info" id="infos">
    	          
        	<img class="info-pic" id="info" src="./resource/mpqq/images/info-pic-o.png">
              	<p>第三方微信营销平台聚合着无限可能。凭借5年来积累的2亿用户资源，依托强势平台技术、数据沉淀和社交关系，</p>
        <p>第三方微信营销平台将有效聚集品牌和消费者，以开放合作的姿态与你一起打造未来。</p>
    </div>
    <div class="mp_kind_mod_bd group">
                    <a href="#" class="mp_kind_wrp">
                        <dl class="mp_kind">
                            <dt class="name"><span class="icon_mp_kind service"></span>多用户分权管理</dt>
                            <dd>微信营销多用户接口平台管理系统可简单的实现管理员与各个用户间的授权与管理！ </dd>
                        </dl>
                    </a>
                    <a href="#" class="mp_kind_wrp">
                        <dl class="mp_kind">
                            <dt class="name"><span class="icon_mp_kind subscribe"></span>功能模块化</dt>
                            <dd>微信营销平台强化了功能模块的管理与应用，方便微信开发者出售与发布！</dd>
                        </dl>
                    </a>
                    <a href="#" class="mp_kind_wrp">
                        <dl class="mp_kind">
                            <dt class="name"><span class="icon_mp_kind enterprise"></span>成熟的开源系统</dt>
                            <dd>高度的安全特性！100%的自由控制！便于二次开发的开源微信平台管理系统</dd>
                        </dl>
                    </a>
                </div>
     <div class="procedure" id="procedure">
        <img class="words" src="./resource/mpqq/images/procedure-words.png">
        <a href="#switcher_plogin">立即注册<span class="right"></span></a>
        <div class="pics">
           
            <div class="step-pic">
                <img src="./resource/mpqq/images/step2.png">
                <p>填写注册用户名</p>
               
            </div>
            <div class="step-pic-arrow">
                <img src="./resource/mpqq/images/right-b.png">
            </div>
            <div class="step-pic">
                <img src="./resource/mpqq/images/step3.png">
                <p>填写密码</p>
            </div>
            <div class="step-pic-arrow">
                <img src="./resource/mpqq/images/right-b.png">
            </div>
            <div class="step-pic">
                <img src="./resource/mpqq/images/step4.png">
                <p>填写个人信息</p>
            </div>
            <div class="step-pic-arrow">
                <img src="./resource/mpqq/images/right-b.png">
            </div>
            <div class="step-pic">
                <img src="./resource/mpqq/images/step5.png">
                <p>提交平台审核</p>
                 <p class="gray">（开通请联系客服QQ）</p>
                            </div>
        </div>
    </div>
   
</div>
<!-- end of container -->
    

<script language="javascript">

$(function(){
    // 头部元素
	var ua = navigator.userAgent;
    var isIE7 = false;
    if(ua.indexOf('MSIE 7.0') > 0) {
        isIE7 = true;
    }
    var elHeader = $('#heading');
    var width = ((document.body.clientWidth > document.documentElement.clientWidth && document.documentElement.clientWidth != 0 )?document.documentElement.clientWidth:document.body.clientWidth);
    var height = ((document.body.clientHeight > document.documentElement.clientHeight && document.documentElement.clientWidth != 0)?document.documentElement.clientHeight:document.body.clientHeight);
    if($('.tip') && $('.tip').length) {
        height = height - 130;
    } else {
        height = height - 80;        
    }
    if(width < 1200) {
        $('.index .heading .head-top').attr('style', 'left: 50%; margin-left: -440px; width: 880px;');
        $('.index .wording').css('width', '400px');
        if(isIE7) {
            $('.index .wording').hide();
            $('.index .wording.wording400').show();
        }
    } else {
        $('.index .heading .head-top').attr('style', 'left: 50%; margin-left: -590px; width: 1180px;');
        $('.index .wording').css('width', '459px');
        if(isIE7) {
            $('.index .wording').show();
            $('.index .wording.wording400').hide();
        }
    }
    //$('.heading').height(height);
    if(height > 550) {
        $('.heading').height(height);
        if(isIE7) {
            $(document).ready(function() {
                var txt = $('.iframe-title').text();
                $('.iframe-title').text(txt);
                $('.heading').height(height);
            });
        }
    }
    if(isIE7 && height <= 550 ) {
        $('.index .heading').attr('style', 'height: 700px; background: url(./images/background.jpg)  center -350px no-repeat; ');
        $('.index .wording').css('top', '30%');
        $('.index .heading .iframe').css('top', '18%');
    }
    $(window).resize(function() {    
        var width = ((document.body.clientWidth > document.documentElement.clientWidth && document.documentElement.clientWidth != 0 )?document.documentElement.clientWidth:document.body.clientWidth);
        var height = ((document.body.clientHeight > document.documentElement.clientHeight && document.documentElement.clientWidth != 0)?document.documentElement.clientHeight:document.body.clientHeight);
        if($('.tip') && $('.tip').length ) {

            height = height - 130;
        } else {
            height = height - 80;        
        }

        if(width < 1200) {
            $('.index .heading .head-top').attr('style', 'left: 50%; margin-left: -440px; width: 880px;');
            $('.index .wording').css('width', '400px');
            if(isIE7) {
                $('.index .wording').hide();
                $('.index .wording.wording400').show();
            }
        } else {
            $('.index .heading .head-top').attr('style', 'left: 50%; margin-left: -590px; width: 1180px;');
            $('.index .wording').css('width', '459px');
            if(isIE7) {
                $('.index .wording').show();
                $('.index .wording.wording400').hide();
            }
        }
        if(height > 550) {
            $('.heading').height(height);
        }
        if(isIE7 && height <= 550 ) {
            $('.index .heading').attr('style', 'height: 700px; background: url(./images/background.jpg)  center -350px no-repeat; ');
            $('.index .wording').css('top', '30%');
            $('.index .heading .iframe').css('top', '18%');
        }
    });

    // 星星效果
    (function() {

    if (!window.addEventListener) return;
    
    var canvas = document.querySelector("canvas");
    var context = canvas.getContext("2d");

    var stars = {},
        particleIndex = 0,
        settings = {
            r: 1400,                // 根据是设计稿确定的轨迹半径
            height: 260,            // 露出的圆弧的高度
            density: 300,
            maxLife: 100,
            groundLevel: canvas.height,
            leftWall: 0,
            rightWall: canvas.width,
            alpha: 0.0,
            maxAlpha: 1
        };

    var getMinRandom = function() {
        var rand = Math.random();
        // step的大小决定了星星靠近地球的聚拢程度，
        // step = Math.ceil(2 / (1 - rand))就聚拢很明显
        var step = Math.ceil(1 / (1 - rand));
        var arr = [];
        for (var i=0; i<step; i++) {
            arr.push(Math.random());
        }

        return Math.min.apply(null, arr);       
    };

    function resizeCanvas() {
        canvas.width = 1920;
        canvas.height = elHeader.height();
        settings.rightWall = canvas.width;
        settings.groundLevel = canvas.height;
        settings.height = 260 + (canvas.height - 1000) / 2;
        redraw();
    }

    resizeCanvas();

    window.addEventListener('resize', resizeCanvas);

    function redraw() {
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.fillStyle = "rgba(0,0,0,0)";
        context.fillRect(0, 0, canvas.width, canvas.height);
    }

    function Star() {
        // 圆的轨迹方程式为：(x-a)²+(y-b)²=r²
        // 因此，已知x, 则y = Math.sqrt(r² - (x-a)²) + b;
        // 其中，圆心是(a, b)
        // 在本例子中
        // 圆心坐标是(canvas.width/2, canvas.height - 600 + r);
        var a = canvas.width/2, b = canvas.height - settings.height + settings.r;
        // 因此，已知横坐标随机
        this.x = Math.floor(Math.random() * canvas.width);
        // 纵坐标需要在圆弧以上
        // 越往上，越稀疏
        this.offsety = getMinRandom() * (canvas.height - settings.height);
        this.y = b - Math.sqrt(settings.r * settings.r - (this.x - a) * (this.x - a)) - this.offsety;

        this.vx = Math.random() * 0.05 + 0.025;    // 水平偏移，也是移动速度

        // 星星的尺寸
        this.particleSize = 0.5 + (Math.random() + 0.1 / 4);
        particleIndex++;
        stars[particleIndex] = this;
        this.alpha = 0.0;
        this.maxAlpha = 0.2 + (this.y/canvas.height) * Math.random() * 0.9;
        this.alphaAction = 1;
    }

    Star.prototype.draw = function() {
        // 横坐标移动
        this.x += this.vx;
        // 根据切线方向进行偏移
        // y position defined by x
        this.y = canvas.height - settings.height + settings.r - Math.sqrt(settings.r * settings.r - (this.x - canvas.width/2) * (this.x - canvas.width/2)) - this.offsety;

        // 透明度慢慢起来
        if (this.alphaAction == 1) {
            if (this.alpha < this.maxAlpha ) {
                this.alpha += 0.005;
            } else {
                this.alphaAction = -1;
            }
        } else {
            if (this.alpha > 0.2 ) {
                this.alpha -= 0.002;
            } else {
                this.alphaAction = 1;
            }
        }

        if ( this.x + (this.particleSize*2) >= settings.rightWall ) {
            // x到左侧
            this.x = this.x - settings.rightWall;
        }

        // 绘制星星
        context.beginPath();
        context.fillStyle="rgba(255,255,255," + this.alpha.toString() + ")";
        context.arc(this.x, this.y, this.particleSize, 0, Math.PI*2, true); 
        context.closePath();
        context.fill();
    }

    function render() {

        redraw();

        // 星星的数目
        // IE下CUP性能有限，数目小
        var length = 300;
        if (!history.pushState) {
            length = 100;
        } else if (document.msHidden != undefined) {
            length = 200;
        }

        if ( Object.keys(stars).length > length ) {
            settings.density = 0;
        }

        for ( var i = 0; i < settings.density; i++ ) {
            if ( Math.random() > 0.97 ) {
                new Star();
            }
        }

        // 星星实时移动
        for ( var i in stars ) {
            stars[i].draw();
        }

        requestAnimationFrame(render);
    }

    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function(fn) {
            setTimeout(fn, 17);
        };
    }

    render();

    })();
});  

</script>

<script language="javascript">
if(typeof(pgvMain) == 'function')
pgvMain();
</script>

</body></html>