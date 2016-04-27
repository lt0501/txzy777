<?php
// +----------------------------------------------------------------------
// | 蓝科企业网站系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://lankecms.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://51020.taobao.com/ )
// +----------------------------------------------------------------------
// | Author: 钟若天 <lankecms@163.com>
// +----------------------------------------------------------------------

class DownloadAction extends CommonAction{
	public function index(){
		$db=M('Download');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,20);
		$this->show=$page->show();	
		$this->down=$db->field('id,pid,name,ename,sort')->order('sort asc,id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'download'")->order('sort')->select());
		$this->display();	
	}
	
	//添加页面
	public function add(){
		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'download'")->order('sort')->select());
		//$count=M('Download')->count();
		//$this->sort=$count+1;
		$this->display();
	}
	
	//添加下载
	public function savedown(){
		$db=D('Download');
		$_POST['url']=getSeoUrl('download',$_POST['url']);
		if($data=$db->create()){
			$info=$this->uploaddown();
			$data['filename']=$info[0]['savename'];
			$data['bid']=$this->getbigid($data['pid']);
			if($db->data($data)->add()){
				$this->success('添加下载成功',U('Download/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error($db->getError());
		}
	}
	
	//修改页面
	public function mod(){
		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'download'")->order('sort')->select());
		$this->down=M('Download')->field('',true)->find($this->_get('id','intval'));
		$this->display();
	}
	
	//修改下载
	public function updatedown(){
		$db=D('Download');
		$id=$this->_post('id','intval');
		$num=$this->_post('num','intval');
		$_POST['url']=getSeoUrl('download',$_POST['url']);
		if($data=$db->create()){
			$data['bid']=$this->getbigid($data['pid']);
			if($num){
				$info=$this->uploaddown();
				$data['filename']=$info[0]['savename'];
			}
			if($db->data($data)->save()){
				$this->success('修改成功',U('Download/index'));
			}else{
				$this->error('修改失败或没有数据被修改');	
			}
		}else{
			$this->error($db->getError());
		}
	}
	
	//删除下载数据
	public function del(){
		$db=M('Download');
		$id=$this->_get('id','intval');
		$filename=$db->where('id='.$id)->getField('filename');
		if($db->where('id='.$id)->delete()){
			if(delimg('../Uploads/download/'.$filename)){
				$this->success('删除成功');
			}else{
				$this->error('数据删除成功，但删除文件失败');
			}			
		}else{
			$this->error('删除失败');
		}
	}

	//全选删除
	public function delall(){
		if ($this->isPost()) {
			if ($_POST['dell']=="") {
				$this->error('您未选择任何数据');
			}
			foreach ($_POST['dell'] as $value) {
				$filename=M('Download')->where('id='.$value)->getField('filename');
				if ($filename) {
					delimg('../Uploads/download/'.$filename);
				}			
			}
			$ids=implode(",", $_POST['dell']);
			$where['id']=array('in',$ids);
			if (M('Download')->where($where)->delete()) {
				$this->success('删除成功');
			} else {
				$this->error('删除失败');
			}	
		}
	}

	//删除文件
	public function delfile(){
		$name=$this->_get('name');
		$id=$this->_get('id','intval');
		
		if($name && $id){
			if(M('Download')->where('id='.$id)->setField('filename','')){
				if(delimg('../Uploads/download/'.$name)){
					$this->success('删除成功',U('mod',array('id'=>$id)));
				}else{
					$this->error('数据删除成功，但找不到要删除的文件',U('mod',array('id'=>$id)));
				}
			}else{
				$this->error('操作失败');
			}
		}else{
			$this->error('非法操作');
		}
	}
	
	
	//更新排序
	public function uporder(){
		$this->getSort('Download');
	}
	
	//搜索
	public function search(){
		$this->getSearch('download','name','down');
	}
	
	
}
?>