<?php
/**
 * 一个都不能死模块处理程序
 *
 * @author 800083075
 * @url http://www.wx866.com/
 */
defined('IN_IA') or exit('Access Denied');

class wdl_nodieModuleProcessor extends WeModuleProcessor {
	public function respond() {
		$content = $this->message['content'];
		//这里定义此模块进行消息处理时的具体过程, 请查看微云文档来编写你的代码
	}
}