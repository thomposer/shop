<?php defined('IN_IA') or exit('Access Denied');?><?php  if($moudles) { ?>
<?php  if($enable_modules) { ?>
<div class="page-header">
	<h4><i class="fa fa-cubes"></i> 已启用的模块</h4>
</div>
<div class="panel panel-default row">
	<div class="table-responsive panel-body">
	<table class="table">
		<tr>
			<th style="width:10%"></th>
			<th style="width:15%">模块名称</th>
			<th>描述</th>
		</tr>
		<?php  if(is_array($enable_modules)) { foreach($enable_modules as $key => $row) { ?>
		<tr>
			<td>
				<img alt="<?php  echo $row['title'];?>" src="<?php  echo $row['icon'];?>" width="48" height="48" class="img-rounded">
			</td>
			<td>
				<?php  echo $row['title'];?>
			</td>
			<td>
				<?php  echo $row['ability'];?>
			</td>
			<td></td>
		</tr>
		<?php  } } ?>
	</table>
</div>
</div>
<?php  } ?>
<?php  if($unenable_modules) { ?>
<div class="page-header">
	<h4><i class="fa fa-cubes"></i> 未启用的模块</h4>
</div>
<div class="panel panel-default row">
	<div class="table-responsive panel-body">
	<table class="table">
		<tr>
			<th style="width:10%"></th>
			<th style="width:15%">模块名称</th>
			<th>描述</th>
			<th></th>
		</tr>
		<?php  if(is_array($unenable_modules)) { foreach($unenable_modules as $key => $row) { ?>
		<tr>
			<td>
				<img alt="<?php  echo $row['title'];?>" src="<?php  echo $row['icon'];?>" width="48" height="48" class="img-rounded">
			</td>
			<td>
				<?php  echo $row['title'];?>
			</td>
			<td>
				<?php  echo $row['ability'];?>
			</td>
			<td>
				&nbsp;
			</td>
		</tr>
		<?php  } } ?>
	</table>
	</div>
</div>
<?php  } ?>
<?php  } else { ?>
	<div class="page-header">
		<h4><i class="fa fa-plane"></i> 核心功能设置</h4>
	</div>

	<div class="shortcut clearfix">
		<?php  if($entries['cover']) { ?>
			<?php  if(is_array($entries['cover'])) { foreach($entries['cover'] as $cover) { ?>
	<?php 
        switch ($cover['title']) {
            case '订单入口':
            $cover_icon = 'fa fa-list';
            break;
            case '商城入口':
            $cover_icon = 'fa fa-angle-double-right';
            break;
            case '商城入口设置':
            $cover_icon = 'fa fa-angle-double-right';
            break;
            case '购物车入口':
            $cover_icon = 'fa fa-shopping-cart';
            break;
            case '我的收藏入口':
            $cover_icon = 'fa fa-star';
            break;
            case '会员中心入口':
            $cover_icon = 'fa fa-user';
            break;
            case '下线排行榜':
            $cover_icon = 'fa fa-list-ol';
            break;
            case '积分排行榜':
            $cover_icon = 'fa fa-list';
            break;
            case '我的拉人积分':
            $cover_icon = 'fa fa-foursquare';
            break;
            case '我的推广效果':
            $cover_icon = 'fa fa-gratipay';
            break;
            default:
            $cover_icon = 'fa fa-home';
            }
      ?>
			<a href="<?php  echo $cover['url'];?>" title="<?php  echo $cover['title'];?>">
				<i class="<?php  echo $cover_icon;?>"></i>
				<span><?php  echo $cover['title'];?></span>
			</a>
			<?php  } } ?>
		<?php  } ?>
		<?php  if($module['isrulefields']) { ?>
			<a href="<?php  echo url('platform/reply', array('m' => $m))?>">
				<i class="fa fa-comments"></i>
				<span>回复规则列表</span>
			</a>
		<?php  } ?>
		<?php  if($entries['home'] || $entries['profile'] || $entries['shortcut']) { ?>
			<?php  if($entries['home']) { ?>
				<a href="<?php  echo url('site/nav/home', array('m' => $m))?>">
					<i class="fa fa-map-marker"></i>
					<span>微站首页导航</span>
				</a>
			<?php  } ?>
			<?php  if($entries['profile']) { ?>
				<a href="<?php  echo url('site/nav/profile', array('m' => $m))?>">
					<i class="fa fa-user"></i>
					<span>个人中心导航</span>
				</a>
			<?php  } ?>
			<?php  if($entries['shortcut']) { ?>
				<a href="<?php  echo url('site/nav/shortcut', array('m' => $m))?>">
					<i class="fa fa-plane"></i>
					<span>快捷菜单</span>
				</a>
			<?php  } ?>
		<?php  } ?>
		<?php  if($module['settings']) { ?>
			<a href="<?php  echo url('profile/module/setting', array('m' => $m));?>">
				<i class="fa fa-cog"></i>
				<span title="参数设置">参数设置</span>
			</a>
		<?php  } ?>
	</div>
	<?php  if(empty($module['issolution'])) { ?>
	<?php  if($entries['menu']) { ?>
	<div class="page-header">
		<h4><i class="fa fa-plane"></i> 业务功能菜单</h4>
	</div>
	<div class="shortcut clearfix">
		<?php  if(is_array($entries['menu'])) { foreach($entries['menu'] as $menu) { ?>
		<?php 
        switch ($menu['title']) {
            case '商城管理':
            $menu_icon = 'fa fa-cog';
            break;
            case '会员管理':
            $menu_icon = 'fa fa-users';
            break;
            case '订单管理':
            $menu_icon = 'fa fa-list-alt';
            break;
            case '数据统计':
            $menu_icon = 'fa fa-line-chart';
            break;
            case '插件中心':
            $menu_icon = 'fa fa-cubes';
            break;
            case '系统设置':
            $menu_icon = 'fa fa-cogs';
            break;
            case '商品管理':
            $menu_icon = 'fa fa-apple';
            break;
            case '商品分类':
            $menu_icon = 'fa fa-th';
            break;
            case '物流模板':
            $menu_icon = 'fa fa-truck';
            break;
            case '物流管理':
            $menu_icon = 'fa fa-truck';
            break;
            case '配送方式':
            $menu_icon = 'fa fa-check-square-o';
            break;
            case '维权与告警':
            $menu_icon = 'fa fa-exclamation-triangle';
            break;
            case '业绩报表':
            $menu_icon = 'fa fa-pie-chart';
            break;
            case '幻灯片管理':
            $menu_icon = 'fa fa-television';
            break;
            case '取现模板管理':
            $menu_icon = 'fa fa-money';
            break;
            case '取现请求管理':
            $menu_icon = 'fa fa-jpy';
            break;
            case '传单管理':
            $menu_icon = 'fa fa-file-text-o';
            break;
            case '黑名单':
            $menu_icon = 'fa fa-file-text';
            break;
            case '排行榜':
            $menu_icon = 'fa fa-trophy';
            break;
            case '会员列表':
            $menu_icon = 'fa fa-users';
            break;
            case '查看日志':
            $menu_icon = 'fa fa-file-text-o';
            break;
            case '分销管理':
            $menu_icon = 'fa fa-code-fork';
            break;
            case '返利记录':
            $menu_icon = 'fa fa-file-text-o';
            break;
            case '消息通知':
            $menu_icon = 'fa fa-bell';
            break;
            case '兑换模板管理':
            $menu_icon = 'fa fa-puzzle-piece';
            break;
            case '兑换请求管理':
            $menu_icon = 'fa fa-wrench';
            break;
            case '菜单中心':
            $menu_icon = 'fa fa-list-ul';
            break;
            case '管理面板':
            $menu_icon = 'fa fa-tachometer';
            break;
            default:
            $menu_icon = 'fa fa-commenting-o';
            }
      ?>
		<a href="<?php  echo $menu['url'];?>" title="<?php  echo $menu['title'];?>">
			<i class="<?php  echo $menu_icon;?>"></i>
			<span><?php  echo $menu['title'];?></span>
		</a>
		<?php  } } ?>
	</div>
	<?php  } ?>
	<?php  } else { ?>
	<div class="page-header">
		<h4><i class="fa fa-plane"></i> 功能分权 (仅限行业模块)</h4>
	</div>
	<div class="shortcut clearfix">
		<a href="<?php  echo url('profile/worker', array('m' => $m, 'reference' => 'solution'));?>">
			<i class="fa fa-users"></i>
			<span>设置操作用户</span>
		</a>
		<a href="<?php  echo url('home/welcome/solution', array('m' => $m));?>">
			<i class="fa fa-cogs"></i>
			<span>进入管理后台</span>
		</a>
	</div>
	<?php  } ?>
<?php  } ?>
<script type="text/javascript">
<!--
	<?php  if($_W['isfounder']) { ?>
	function checkupgradeModule() {
		require(['util'], function(util) {
			if (util.cookie.get('checkupgrade_<?php  echo $m;?>')) {
				return;
			}
			$.getJSON("<?php  echo url('utility/checkupgrade/module', array('m' => $m));?>", function(ret){
				if (ret && ret.message && ret.message.upgrade == '1') {
					$('body').prepend('<div id="upgrade-tips-module" class="upgrade-tips"><a class="module" href="./index.php?c=cloud&a=upgrade&">【'+ret.message.name+'】检测到新版本'+ret.message.version+'，请尽快更新！</a><span class="tips-close" onclick="checkupgradeModule_hide()"><i class="fa fa-times-circle"></i></span></div>');
					if ($('#upgrade-tips').size()) {
						$('#upgrade-tips-module').css('top', '25px');
					}
				}
			});
		});
	}
	function checkupgradeModule_hide() {
		require(['util'], function(util) {
			util.cookie.set('checkupgrade_<?php  echo $m;?>', 1, 3600);
			$('#upgrade-tips-module').hide();
		});
	}
	$(function(){
		checkupgradeModule();
	});
	<?php  } ?>
//-->
</script>