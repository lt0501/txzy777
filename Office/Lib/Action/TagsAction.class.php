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

class TagsAction extends CommonAction{
	
	public function index(){
		$type=$this->_get('type');
		if ($type) {
			$where['type']=array('eq',$type);
		} 
		$db=M('Tags');
		import('ORG.Util.Page');
		$count=$db->where($where)->count();
		$page=new Page($count,20);
		$this->show=$page->show();
		$this->tags=$db->field('id,name,ename,type,sort')->where($where)->order('sort')->limit($page->firstRow.','.$page->listRows)->select();
		$this->display();
	}

	public function add(){
		$this->display();
	}

	public function mod(){
		$id=$this->_get('id','intval');
		$this->tags=M('Tags')->field('id,name,ename,type,sort')->find($id);
		$this->display();
	}

	public function addTags(){
		$db=D('Tags');
		if ($data=$db->create()) {
			if ($db->data($data)->add()) {
				$this->success('标签添加成功',U('Tags/index'));
			} else {
				$this->error('添加失败');
			}
		} else {
			$this->error($db->getError());
		}
	}

	public function updateTags(){
		$db=D('Tags');
		if ($data=$db->create()) {
			if ($db->data($data)->save()) {
				$this->success('标签修改成功',U('Tags/index'));
			} else {
				$this->error('修改失败或没有修改数据');
			}
		} else {
			$this->error($db->getError());
		}
	}

	//删除
	public function del(){
		$id=$this->_get('id','intval');
		if(M('Tags')->where('id='.$id)->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');	
		}
	}

	//更新排序
	public function uporder(){
		$this->getSort('Tags');
	}

}
?>