<?php
// +----------------------------------------------------------------------
// | 蓝科企业网站系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://lankecms.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://51020.taobao.com )
// +----------------------------------------------------------------------
// | Author: 钟若天 <lankecms@163.com>
// +----------------------------------------------------------------------

class NewAction extends CommonAction{
	public function index(){
		$id=(int)I('get.id');
		$this->getarticle($id,"id =%d",$this->lang,'New');
	}

	public function html(){
		$url=I('get.url');
		$this->getarticle($url,"url ='%s'",$this->lang,'New');
	}

	public function tags(){
		$this->doTags('New');
	}
	// public function new(){
	// 	$db = new Model();
	// 	$sql = "select*from yxzy777_list l left join yxzy777_new n on l.pid=n.pid;";
	// 	$result = $db->query($sql);
	// 	$this->assign('new',$result);
	// 	$this->display();
	// }
}
?>