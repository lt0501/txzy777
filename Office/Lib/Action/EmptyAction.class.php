<?php
class EmptyAction extends CommonAction{
	public function index(){
		$this->error('无法找到该目录');
	}
}
?>