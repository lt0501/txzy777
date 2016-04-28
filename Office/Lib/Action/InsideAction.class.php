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

class InsideAction extends CommonAction{
	public function index(){
		$db=M('Inside');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,20);
		$this->show=$page->show();
		$this->inside=$db->field('id,keyword,ekeyword,url,number')->limit($page->firstRow.','.$page->listRows)->select();
		$this->display();
	}

	public function add(){
		$this->display();
	}

	public function addInside(){
		$db=D('Inside');
		if ($data=$db->create()) {
			if ($db->data($data)->add()) {
				$this->success('添加内链成功',U('Inside/index'));
			} else {
				$this->error('添加内链失败');
			}
			
		} else {
			$this->error($db->getError());
		}	
	}

	public function mod(){
		$id=$this->_get('id','intval');
		$this->inside=M('Inside')->field('id,keyword,ekeyword,url,eurl,number')->find($id);
		$this->display();
	}

	public function upInside(){
		$db=D('Inside');
		if ($data=$db->create()) {
			if ($db->data($data)->save()) {
				$this->success('内链修改成功',U('Inside/index'));
			} else {
				$this->error('修改失败或没有数据被修改');
			}
			
		} else {
			$this->error($db->getError());
		}	
	}
	

	//删除
	public function del(){
		$id=$this->_get('id','intval');
		if(M('Inside')->where('id='.$id)->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');	
		}
	}

}
?>