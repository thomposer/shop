<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-base', TEMPLATE_INCLUDEPATH)) : (include template('common/header-base', TEMPLATE_INCLUDEPATH));?>
<header>
<link rel="stylesheet" type="text/css" href="./resource/mpqq/public_notice.css">
<a href="<?php  echo url('account/display');?>" class="header_l"><h1 class="logo">微信第三方公众平台--后台管理系统</h1></a>
<ul class="header_nav">



	<?php  if(!empty($_W['isfounder']) || empty($_W['setting']['permurls']['sections']) || in_array('platform', $_W['setting']['permurls']['sections'])) { ?><li<?php  if(FRAME == 'platform') { ?> class="active"<?php  } ?> id="liebiaoyuan"><a href="<?php  echo url('home/welcome/platform');?>"><i class="fa fa-cog"></i>基础设置</a></li><?php  } ?>
 <li><a href="<?php echo $_W['siteroot'].'web/index.php?c=home&a=welcome&do=ext&m=ewei_shop'?>"><i class="pull-right"></i> 商城管理</a></li>
             <li><a href="<?php echo $_W['siteroot'].'web/index.php?c=site&a=entry&method=cover&p=commission&do=plugin&m=ewei_shop'?>"><i class="pull-right"></i>分销快捷设置</a></li>   
 
 

 

 
 <?php  if(!empty($_W['isfounder']) || empty($_W['setting']['permurls']['sections']) || in_array('setting', $_W['setting']['permurls']['sections'])) { ?><li<?php  if(FRAME == 'setting') { ?> class="active"<?php  } ?>><a href="<?php  echo url('home/welcome/setting');?>" id="liebiaoyuan"><i class="fa fa-umbrella"></i>支付设置</a></li><?php  } ?>

                <?php  if(!empty($_W['isfounder']) || empty($_W['setting']['permurls']['sections']) || in_array('ext', $_W['setting']['permurls']['sections'])) { ?><li<?php  if(FRAME == 'ext') { ?> class="active"<?php  } ?> id="liebiaoyuan"><a href="<?php  echo url('home/welcome/ext');?>"><i class="fa fa-cubes"></i>营销模块</a></li><?php  } ?>
 
	<!--		   <?php  if(!empty($_W['isfounder']) || empty($_W['setting']['permurls']['sections']) || in_array('ext', $_W['setting']['permurls']['sections'])) { ?><li<?php  if(FRAME == 'ext') { ?> class="active"<?php  } ?> id="liebiaoyuan"><a href="$_W['siteroot']./web/index.php?c=home&a=welcome&do=ext&m=ewei_shop"><i class="fa fa-cubes"></i>分销管理</a></li><?php  } ?>-->
			  <?php  if(!empty($_W['isfounder']) || empty($_W['setting']['permurls']['sections']) || in_array('mc', $_W['setting']['permurls']['sections'])) { ?><li<?php  if(FRAME == 'mc') { ?> class="active"<?php  } ?> id="liebiaoyuan"><a href="<?php  echo url('home/welcome/mc');?>"><i class="fa fa-gift"></i>粉丝营销</a></li><?php  } ?>
			  <?php  if(!empty($_W['isfounder']) || empty($_W['setting']['permurls']['sections']) || in_array('site', $_W['setting']['permurls']['sections'])) { ?><li<?php  if(FRAME == 'site') { ?> class="active"<?php  } ?> id="liebiaoyuan"><a href="<?php  echo url('home/welcome/site');?>"><i class="fa fa-life-bouy"></i>微站功能</a></li><?php  } ?>
                
			
			
	</ul> 
    <div class="header_r">
    <ul class="nav navbar-nav navbar-right">

    <li class="dropdown topbar-notice"><a type="button" data-toggle="dropdown"><i class="fa fa-bell"></i> 
<span class="badge" id="notice-total">0</span></a>
<div class="dropdown-menu" aria-labelledby="dLabel">
<div class="topbar-notice-panel">
<div class="topbar-notice-arrow"></div>
<div class="topbar-notice-head"><span>系统公告</span> 
</div>
<div class="topbar-notice-body"><ul id="notice-container"></ul></div>
<button class="btn btn-primary btn-square btn-block" onclick = " window.location.href='<?php  echo url('article/notice-show/list');?>'; ">更多公告</button>
</div></div></li>
  <li class="dropdown dropdown-user">
<a href="javascript:;" class="dropdown-toggle hover-initialized header_avatar" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

 <img class="avatar" src="<?php  echo tomedia('headimg_'.$_W['account']['acid'].'.jpg')?>?time=<?php  echo time()?>" onerror="this.src='resource/images/gw-wx.gif'" alt="<?php  echo $_W['account']['name'];?>">
            <strong class="header_name"><?php  if($_W['account']['name'] == null ) { ?> <a href="<?php  echo url('account/display');?>" target="_blank" >请选择公众号</a> <?php  } ?>
            <?php  echo $_W['account']['name'];?></strong>
                   
</a>
<ul class="dropdown-menu dropdown-menu-default">
 <li class="dropdown-header"></i><?php  echo $_W['user']['username'];?> (<?php  if($_W['role'] == 'founder') { ?>系统管理员<?php  } else if($_W['role'] == 'manager') { ?>公众号管理员<?php  } else { ?>公众号操作员<?php  } ?>) </li>
 <?php  if($_W['role'] != 'operator') { ?>
 <li class="divider"></li>
                        <li><a href="<?php  echo url('account/post', array('uniacid' => $_W['uniacid']));?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 编辑公众号资料</a></li>
                        <?php  } ?>
                        <li><a href="<?php  echo url('account/display');?>" target="_blank"><i class="fa fa-cogs fa-fw"></i> 管理其它公众号</a></li>
                        <li><a href="<?php  echo url('utility/emulator');?>" target="_blank"><i class="fa fa-mobile fa-fw"></i> 模拟测试</a></li>
<li class="divider"></li>
                <li><a href="<?php  echo url('user/profile/profile');?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;修改密码</a></li>
                <li><a href="<?php  echo url('user/profile/base');?>"><i class="fa fa-user fa-fw"></i>&nbsp;个人信息</a></li>
<?php  if($_W['role'] == 'founder') { ?>
                <li class="divider"></li>
                <li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-sitemap fa-fw"></i>&nbsp;系统选项</a></li>
                <li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-cloud-download fa-fw"></i>&nbsp;自动更新</a></li>
                <li><a href="<?php  echo url('system/updatecache');?>" target="_blank"><i class="fa fa-refresh fa-fw"></i>&nbsp;更新缓存</a></li>
                
                        <?php  } ?>
        
</ul>


</li>
  <li id="logout">
            <a href="<?php  echo url('user/logout');?>" class="header_icon" title="注销">
                <i class="icon icon_logout"></i>
            </a>
        </li>
</ul>

      
    </div>
</header>


<div class="main">
    <!-- 侧边栏 -->
        <!-- 侧边栏 -->

    <aside id="aside" style="display: block;">

    <i class="aside_bg"></i>   
    
		<div class="aside_main">
			<a href="javascript:;" id="asideToggle" class="aside_toggle" title="收起侧边栏" data-switch="展开侧边栏"><i class="aside_arrow"></i></a>
       
<div id="search-menu" class="input-group" style="margin-top: 25px;margin-left: 4.5px;">
                                <input name="q" class="form-control input-lg" type="text" placeholder=" 输入名称查找..." autocomplete="off">
                   
            </div>
        <?php $frames = empty($frames) ? $GLOBALS['frames'] : $frames; _calc_current_frames($frames);?>
        <?php  if(!empty($frames)) { ?>   
                   <?php  if($GLOBALS['ext_type'] > 0) { ?>
                        <div class="btn-group">
                            <button class="btn <?php  if($GLOBALS['ext_type'] == 1) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?> ext-type" style="margin-left: 2px;width: 65px;" data-id="1">默认</button>
                            <button class="btn <?php  if($GLOBALS['ext_type'] == 2) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?> ext-type" style="width: 65px;" data-id="2">系统</button>
                            <button class="btn <?php  if($GLOBALS['ext_type'] == 3) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?> ext-type" style="width: 65px;" data-id="3">复合</button>
                        </div>
                    <?php  } ?> 
			<?php  if(is_array($frames)) { foreach($frames as $k => $frame) { ?>
			<div class="aside_group">

				<a href="javascript:;" class="aside_nav asideRadio " data-title="<?php  if(empty($frame['title']) ) { ?>未分类<?php  } else { ?><?php  echo $frame['title'];?> <?php  } ?>">
                    <?php  if($frame['title']=='粉丝管理') { ?>
                                <i class="fa fa-users"></i>
                                 <?php  } else if($frame['title']=='会员中心') { ?>
                                <i class="fa fa-user"></i> 
                                 <?php  } else if($frame['title']=='会员卡管理') { ?>
                                <i class="fa fa-credit-card"></i> 
                                 <?php  } else if($frame['title']=='积分兑换') { ?>
                                <i class="fa fa-exchange"></i> 
                                 <?php  } else if($frame['title']=='通知中心') { ?>
                                <i class="fa fa-bullhorn"></i> 
                                 <?php  } else if($frame['title']=='微站管理') { ?>
                                <i class="fa fa-life-bouy"></i> 
                                 <?php  } else if($frame['title']=='特殊页面管理') { ?>
                                <i class="fa  fa-file-text-o"></i> 
                                 <?php  } else if($frame['title']=='功能组件') { ?>
                                <i class="fa fa-puzzle-piece"></i> 
                                 <?php  } else if($frame['title']=='基本功能') { ?>
                                <i class="fa fa-cog"></i> 
                                 <?php  } else if($frame['title']=='高级功能') { ?>
                                <i class="fa fa-flask"></i> 
                                 <?php  } else if($frame['title']=='数据统计') { ?>
                                <i class="fa fa-line-chart"></i> 
                                 <?php  } else if($frame['title']=='公众号选项') { ?>
                                <i class="fa fa-comments-o"></i> 
                                 <?php  } else if($frame['title']=='会员及粉丝选项') { ?>
                                <i class="fa fa-user-secret"></i> 
                                 <?php  } else if($frame['title']=='其他功能选项') { ?>
                                <i class="fa fa-cube"></i> 
                                 <?php  } else if($frame['title']=='管理') { ?>
                                <i class="fa fa-wrench"></i> 
                                 <?php  } else if($frame['title']=='主要业务') { ?>
                                <i class="fa fa-th-large"></i> 
                                 <?php  } else if($frame['title']=='营销及活动') { ?>
                                <i class="fa fa-gift"></i> 
                                 <?php  } else if($frame['title']=='客户关系') { ?>
                                <i class="fa fa-share-alt"></i> 
                                 <?php  } else if($frame['title']=='游戏应用') { ?>
                                <i class="fa fa-gamepad"></i> 
                                <?php  } else if($frame['title']=='其他') { ?>
                                <i class="fa fa-ellipsis-h"></i> 
                                <?php  } else if($frame['title']=='展示应用') { ?>
                                <i class="fa fa-desktop"></i> 
                                <?php  } else { ?>
                                <i class="fa fa-th-list"></i> 
                                <?php  } ?>
                </a>

				<dl class="aside_dl">
					<dt class="aside_dt">
                            <?php  if($frame['title']=='粉丝管理') { ?>
                                <i class="fa fa-users"></i>
                                 <?php  } else if($frame['title']=='会员中心') { ?>
                                <i class="fa fa-user"></i> 
                                 <?php  } else if($frame['title']=='会员卡管理') { ?>
                                <i class="fa fa-credit-card"></i> 
                                 <?php  } else if($frame['title']=='积分兑换') { ?>
                                <i class="fa fa-exchange"></i> 
                                 <?php  } else if($frame['title']=='通知中心') { ?>
                                <i class="fa fa-bullhorn"></i> 
                                 <?php  } else if($frame['title']=='微站管理') { ?>
                                <i class="fa fa-life-bouy"></i> 
                                 <?php  } else if($frame['title']=='特殊页面管理') { ?>
                                <i class="fa  fa-file-text-o"></i> 
                                 <?php  } else if($frame['title']=='功能组件') { ?>
                                <i class="fa fa-puzzle-piece"></i> 
                                 <?php  } else if($frame['title']=='基本功能') { ?>
                                <i class="fa fa-cog"></i> 
                                 <?php  } else if($frame['title']=='高级功能') { ?>
                                <i class="fa fa-flask"></i> 
                                 <?php  } else if($frame['title']=='数据统计') { ?>
                                <i class="fa fa-line-chart"></i> 
                                 <?php  } else if($frame['title']=='公众号选项') { ?>
                                <i class="fa fa-comments-o"></i> 
                                 <?php  } else if($frame['title']=='会员及粉丝选项') { ?>
                                <i class="fa fa-user-secret"></i> 
                                 <?php  } else if($frame['title']=='其他功能选项') { ?>
                                <i class="fa fa-cube"></i> 
                                 <?php  } else if($frame['title']=='管理') { ?>
                                <i class="fa fa-wrench"></i> 
                                 <?php  } else if($frame['title']=='主要业务') { ?>
                                <i class="fa fa-th-large"></i> 
                                 <?php  } else if($frame['title']=='营销及活动') { ?>
                                <i class="fa fa-gift"></i> 
                                 <?php  } else if($frame['title']=='客户关系') { ?>
                                <i class="fa fa-share-alt"></i> 
                                 <?php  } else if($frame['title']=='游戏应用') { ?>
                                <i class="fa fa-gamepad"></i> 
                                <?php  } else if($frame['title']=='其他') { ?>
                                <i class="fa fa-ellipsis-h"></i> 
                                <?php  } else if($frame['title']=='展示应用') { ?>
                                <i class="fa fa-desktop"></i> 
                                <?php  } else { ?>
                                <i class="fa fa-th-list"></i> 
                                <?php  } ?>
                                <?php  if(empty($frame['title']) ) { ?>&nbsp;未分类<?php  } else { ?>&nbsp;<?php  echo $frame['title'];?> <?php  } ?></dt>
						<?php  if(is_array($frame['items'])) { foreach($frame['items'] as $link) { ?>
						<dd><a href="<?php  echo $link['url'];?>" kw="<?php  echo $link['title'];?>"  class="aside_nav  <?php  echo $link['active'];?>" ><?php  echo $link['title'];?></a></dd>
					
                        <?php  } } ?>	
					
				</dl>
			</div>
			<?php  } } ?>
            <?php  } ?>
		</div>
		
</aside>
<section>
    <div class="section_main">
    <div class="section_auto">
				<?php  if(defined('IN_MESSAGE')) { ?>
		
       <style type="text/css">
  .page_error_msg .inner {
text-align: center;
padding-top: 50px;
}

.icon_page_error {
background: url("./resource/mpqq/images/page_error.png") 0 0 no-repeat;
width: 180px;
height: 140px;
vertical-align: middle;
display: inline-block;
}  


.page_error_msg {
width: 500px;

}
.page_error_msg h4 {
line-height: 30px;
font-weight: 400;
font-style: normal;
font-size: 16px;
}

</style>
<div class="page_error_msg">
    <div class="inner">
        <span class="icon_wrp">
              <i class="icon_page_error">
                                <i style="margin-top: 20px; color:#FBC15E;" class="fa fa-4x fa-<?php  if($label=='success') { ?>check-circle<?php  } ?><?php  if($label=='danger') { ?>times-circle<?php  } ?><?php  if($label=='info') { ?>info-circle<?php  } ?><?php  if($label=='warning') { ?>exclamation-triangle<?php  } ?>"></i>
                            </i>
        </span>
        <div class="msg_content">
            <?php  if(is_array($msg)) { ?>
            <h3>MYSQL 错误：</h3>
            <h4><?php  echo cutstr($msg['sql'], 300, 1);?></h4>
            <h4><b><?php  echo $msg['error']['0'];?> <?php  echo $msg['error']['1'];?>：</b><?php  echo $msg['error']['2'];?></h4>
            <?php  } else { ?>
            <h2><?php  echo $caption;?></h2>
            <h4><?php  echo $msg;?></h4>
            <?php  } ?>
            <?php  if($redirect) { ?>
            <p><a href="<?php  echo $redirect;?>" class="alert-link">如果你的浏览器没有自动跳转，请点击此链接</a></p>
            <script type="text/javascript">
                setTimeout(function () {
                    location.href = "<?php  echo $redirect;?>";
                }, 3000);
            </script>
            <?php  } else { ?>
            <p>[<a href="javascript:history.go(-1);" class="alert-link">返回上一页</a>] &nbsp; [<a href="./?refresh" class="alert-link">首页</a>]</p>
            <?php  } ?>
        </div>
    </div>
</div>		
		<?php  } else { ?>
        <div class="content_nav ui_wrapper"> <h2 class="section_title"></h2> </div>
          <div class="ui_tab_contents">
        <?php  } ?>
	
    	<!--左边导航-->

<script src="./resource/mpqq/cuman.min.js"></script>
<script>
	
$(function(){
	
	$("#menuBar dl").first().addClass("no_extra");

	$("#menuBar dd").click(function(){

		$("#menuBar dd").removeClass("selected");
		$(this).addClass("selected");

	});

});
	
</script>
<script type="text/javascript">
						require(['bootstrap'], function(){
							$('.ext-type').click(function(){
								var id = $(this).data('id');
								util.cookie.del('ext_type');
								util.cookie.set('ext_type', id, 8640000);
								location.reload();
								return false;
							});

							$('#search-menu input').keyup(function() {
								var a = $(this).val();
								$('.aside_main .aside_dl .aside_nav, .aside_main .aside_dl .aside_dt,.aside_main .aside_group').hide();
								$('.aside_main .aside_dl .aside_nav').each(function() {
									$(this).css('border-left', '0');
									if(a.length > 0 && $(this).attr('kw').indexOf(a) >= 0) {
                                        $(this).parents(".aside_group").show();
										$(this).parents(".aside_group").find('.aside_dt').show();
										$(this).show().css('border-left', '4px #428bca outset');
                                        $(this).show().css('margin-left', '2px');
                                    
									}
								});
								if(a.length == 0) {
								$('.aside_main .aside_dl .aside_nav, .aside_main .aside_dl .aside_dt,.aside_main .aside_group').show();
								}
							});
						});
</script>