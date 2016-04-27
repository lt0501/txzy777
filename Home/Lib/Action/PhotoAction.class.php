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

class PhotoAction extends CommonAction{
	public function index(){
		$id=(int)I('get.id');
		$this->getarticle($id,"id =%d",$this->lang,'Photo');
	}

	public function html(){
		$url=I('get.url');
		$this->getarticle($url,"url ='%s'",$this->lang,'Photo');
	}
	
	public function tags(){
		$this->doTags('Photo');
	}
		

}
?>