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

class LinkAction extends CommonAction{
	public function index(){
		$db=M('Link');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,20);
		$this->show=$page->show();
		$this->links=$db->field('id,name,ename,url,sort')->order('sort')->limit($page->firstRow.','.$page->listRows)->select();
		$this->display();	
	}
	
	public function add(){
		$this->display();	
	}
	
	public function addlink(){
		if ($_POST['name']=="" || $_POST['ename']=="") {
			$this->error('链接名称不能为空');
		}
		if(!is_numeric($_POST['sort'])){
			$this->error('排序号必须为数字');	
		}
		$db=M('Link');
		if($data=$db->create()){
			if($db->data($data)->add()){
				$this->success('添加成功',U('Link/index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			$this->error($this->getError());	
		}
	}
	
	
	public function mod(){
		$id=$this->_get('id','intval');
		$this->links=M('Link')->field('id,name,ename,url,eurl,sort')->find($id);
		$this->display();	
	}
	
	public function uplink(){
		if ($_POST['name']=="" || $_POST['ename']=="") {
			$this->error('链接名称不能为空');
		}
		if(!is_numeric($_POST['sort'])){
			$this->error('排序号必须为数字');	
		}
		$db=M('Link');
		if($data=$db->create()){
			if($db->data($data)->save()){
				$this->success('修改成功',U('Link/index'));
			}else{
				$this->error('修改失败或没有修改数据');	
			}
		}else{
			$this->error($db->getError());	
		}			
	}

	//删除
	public function del(){
		$id=$this->_get('id','intval');
		if(M('Link')->where('id='.$id)->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');	
		}
	}
	
	//更新排序
	public function uporder(){
		$this->getSort('Link');
	}
	


}
?>