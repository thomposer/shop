<?php
/**
 * 疯狂打企鹅模块微站定义
 *
 * @author 
 * @url http://bbs.woaiyingxiao.com/
 */
defined('IN_IA') or exit('Access Denied');

class Q305000063_qieModuleSite extends WeModuleSite {

    /**
     * 玩游戏主页
     */
	public function doMobilePlay() {
	    global $_W, $_GPC;

	    $html = array(
	        'jsconfig' => $_W['account']['jssdkconfig'],
	        'web_config' => $this->module['config'],
	        'share_logo' => $_W['attachurl'].$this->module['config']['share_pic'],
	    );
	    
	    
	    include $this->template('index');
	}

}