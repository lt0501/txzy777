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
			// $data['filename']=$info[0]['savename'];
			// $data['efilename']=$info[1]['savename'];

			$data['filename'] = $_FILES['filename']['name'];
         	$data['efilename'] = $_FILES['efilename']['name'];

		     //如果用户只使用了第一个上传框
		     if(!empty($data['filename']) && empty($data['efilename'])){
		         $data['filename'] = $info[0]['savename'];
		     //如果用户只使用了第二个上传框
		     } elseif (empty($data['filename']) && !empty($data['efilename'])){
		         $data['efilename'] = $info[0]['savename'];
		     //如果用户两个都使用了        
		     } elseif (!empty($data['filename']) && !empty($data['efilename'])){
		         $data['filename']=$info[0]['savename'];
				 $data['efilename']=$info[1]['savename'];
		     }


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
				// $data['filename']=$info[0]['savename'];
				// $data['efilename']=$info[1]['savename'];

				foreach ($info as $v){
		            if($v['key']=='filename'){
		          		$data['filename']=$v['savename'];//filename框上传了文件,获取上传后的值
		            }
		            if($v['key']=='efilename'){
		                $data['efilename']=$v['savename'];//efilename框上传了文件,获取上传后的值
		            }
	           }
	           
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

	//删除中文文件
	public function delfile(){
		$name=$this->_get('name');
		$id=$this->_get('id','intval');
		
		if($name && $id){
			if(M('Download')->where('id='.$id)->setField('filename','')){
				if(delimg('../Uploads/download/'.$name)){
					$this->success('删除中文文件成功',U('mod',array('id'=>$id)));
				}else{
					$this->error('中文文件数据删除成功，但找不到要删除的文件',U('mod',array('id'=>$id)));
				}
			}else{
				$this->error('中文文件操作失败');
			}
		}else{
			$this->error('中文文件非法操作');
		}
	}
	//删除英文文件
	public function edelfile(){
		$name=$this->_get('name');
		$id=$this->_get('id','intval');
		
		if($name && $id){
			if(M('Download')->where('id='.$id)->setField('efilename','')){
				if(delimg('../Uploads/download/'.$name)){
					$this->success('删除英文文件成功',U('mod',array('id'=>$id)));
				}else{
					$this->error('英文文件数据删除成功，但找不到要删除的文件',U('mod',array('id'=>$id)));
				}
			}else{
				$this->error('英文文件操作失败');
			}
		}else{
			$this->error('英文文件非法操作');
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