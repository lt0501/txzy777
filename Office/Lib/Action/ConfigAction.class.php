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

class ConfigAction extends CommonAction{
	public function index(){
		$this->display();
	}
	
	public function upconfig(){
		if($this->isPost()){
			if($_FILES['web_logo']['name']<>"" || $_FILES['web_qrcode']['name']<>""){
				$info=$this->uploadimg();
				  if(count($info)==2){
					  $_POST['web_logo']=$info[0]['savename'];
					  $_POST['web_qrcode']=$info[1]['savename'];
				  }else{
					  $_POST[$info[0]['key']]=$info[0]['savename'];
				  }
			}
			if (get_magic_quotes_gpc()) {
				$_POST['web_count'] = stripslashes($_POST['web_count']) ;
				$_POST['web_share'] = stripslashes($_POST['web_share']) ;
				$_POST['web_eshare'] = stripslashes($_POST['web_eshare']) ;
			}
			
			if($this->setconfig($_POST,'../config.php')){
				$this->success('修改成功',U('Config/index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			$this->error('非法操作');
		}
	}
	
	public function dellogo(){
		$name=$this->_get('name');
		$type=$this->_get('type');
		switch ($type) {
			case 'logo':
				$array=array('WEB_LOGO'=>'');
				break;
			case 'water':
				$array=array('WATER_LOGO'=>'');
				break;
			default:
				$array=array('WEB_QRCODE'=>'');
				break;
		}
		if($this->setconfig($array,'../config.php')){
			if(delimg('../Uploads/'.$name)){
				$this->success('删除成功');
			}else{
				$this->success('数据删除成功，但找不到要删除的图片');
			}
		}else{
			$this->error('删除失败');
		}
	}
	
	public function water(){
		$this->display();
	}

	public function savewater(){
		$alpha=$this->_post('water_alpha','intval');
		if ($alpha < 0 || $alpha > 100) {
			$this->error('请填0-100之间的整数');
		}
		if ($_POST['num']) {
			$info=$this->uploadimg();
			$_POST['water_logo']=$info[0]['savename'];
			unset($_POST['num']);
		}
		$_POST['water_alpha']=$alpha;
		if($this->setconfig($_POST,'../config.php')){
			$this->success('设置成功');
		}else{
			$this->error('设置失败');
		}	
	}

	public function setstatic(){
		$arrs=include'../static.php';
		$this->statics=$arrs;
		$this->display();
	}

	public function savestatic(){
		if ($this->isPost()) {
			foreach ($_POST as $v) {
				if (!preg_match('/^[a-zA-Z0-9-_]{1,200}$/i',$v)) {
					$this->error('必须是1位以上的字母，数字，下划线或-');
				}
			}
			$_POST['search']="search";
			$_POST['feedback']="feedback";
			$_POST['inquiry']="inquiry";
			$array=array_map("strtolower", $_POST);
			if (count($array) != count(array_unique($array))) {
				$this->error('不能有重复值，且不能使用search,feedback,inquiry');
			}
			unset($_POST['search']);
			unset($_POST['feedback']);
			unset($_POST['inquiry']);
			if ($this->setconfig($_POST,'../static.php')) {
				$this->success('设置成功');
			} else {
				$this->error('设置失败');
			}		
		}
	}



	
}
?>