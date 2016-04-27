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

class PhotoAction extends CommonAction{
	public function index(){
		$db=M('Photo');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,12);
		$this->show=$page->show();
		$this->photo=$db->field('id,pid,name,ename,sort,thumb')->order('sort asc,id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'photo'")->order('sort')->select());
		$this->display();
	}
	
	//添加页面
	public function add(){
		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'photo'")->order('sort')->select());
		//$count=M('photo')->count();
		//$this->sort=$count+1;
		$this->display();
	}
	
	//修改页面
	public function mod(){
		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'photo'")->order('sort')->select());

		$photolist=M('Photo')->field('',true)->find($this->_get('id','intval'));
		
		if(!empty($photolist['photo'])){
			$photo=explode(',',$photolist['photo']);
			$this->assign('photo',$photo);	
		}
		$this->assign('photolist',$photolist);
		$this->display();	
	}
	
	
	//添加图片
	public function savephoto(){
		$db=D('Photo');
		$_POST['url']=getSeoUrl('photo',$_POST['url']);
		if($data=$db->create()){
			$info=$this->uploadimg();
			if (!empty($_FILES['photo'])) {
				for($i=1;$i<=count($_FILES["photo"]["name"]);$i++){
					$photo.=$info[$i]['savename'].',';
					if (C('IS_WATER')) {
						$this->watermark('../Uploads/'.$info[$i]['savename']);
					}
				}
			}
			$photo=rtrim($photo,",");
			$data['photo']=$photo;
			$data['thumb']=$info[0]['savename'];
			// if (C('IS_WATER')) {
			// 	$this->watermark('../Uploads/'.$data['thumb']);
			// }
			$data['bid']=$this->getbigid($data['pid']);
			if($db->data($data)->add()){
				$this->success('图片添加成功',U('Photo/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error($db->getError());
		}
	}
	
	//更新图片
	public function updatephoto(){
		$db=D('Photo');
		$id=$this->_post('id','intval');
		$num=$this->_post('Num','intval');
		$tnum=$this->_post('tnum','intval');
		$photo=$db->where('id='.$id)->getField('photo');
		$_POST['url']=getSeoUrl('photo',$_POST['url']);
		if($data=$db->create()){
			$data['bid']=$this->getbigid($data['pid']);
			if($num > 0 || $num != "" || $tnum > 0){
				$info=$this->uploadimg();
				
				if(!empty($_FILES["photo"])){
					$n=($info[0]['key']=='thumb')? 1 : 0;
					$c=($info[0]['key']=='thumb')? count($_FILES["photo"]["name"])+1 : count($_FILES["photo"]["name"]);
					for($i=$n;$i<$c;$i++){
						$postphoto.=$info[$i]['savename'].',';
						if (C('IS_WATER')) {
							$this->watermark('../Uploads/'.$info[$i]['savename']);
						}
					}
					$photo=($photo=="")? rtrim($postphoto,",") : rtrim($photo.','.$postphoto,",");
					$data['photo']=$photo;
				}
				if($_FILES["thumb"]["name"]!=""){
					$thumb=$info[0]['savename'];
					$data['thumb']=$info[0]['savename'];
					// if (C('IS_WATER')) {
					// 	$this->watermark('../Uploads/'.$data['thumb']);
					// }
				}
			}
			
			if($db->data($data)->save()){
				$this->success('更新成功',U('Photo/index'));
			}else{
				$this->error('更新失败或没有数据被更改');
			}
		}else{
			$this->error($db->getError());	
		}


	}
	
	
	
	//删除图片
	public function delphoto(){
		$name=$this->_get('name');
		$id=$this->_get('id','intval');
		$field=$this->_get('field');

		if($name && $id){
		  $photo=M('Photo')->where('id ='.$id)->getField($field);
		  $photo=str_replace($name.',',"",$photo.',');
		  $photo=rtrim($photo,",");
			if(M('Photo')->where('id='.$id)->setField($field,$photo)){
				if(delimg('../Uploads/'.$name)){
					$this->success('删除成功',U('mod',array('id'=>$id)));
				}else{
					$this->success('数据删除成功，但找不到要删除的图片',U('mod',array('id'=>$id)));
				}
			}else{
				$this->error('操作失败');
			}
		}else{
			$this->error('非法操作');
		}
	}

	//删除图片数据
	public function del(){
		$id=$this->_get('id','intval');
		$db=M('Photo');
		$thumb=$db->where('id ='.$id)->getField('thumb');
		$photo=$db->where('id ='.$id)->getField('photo');

		if($db->where('id ='.$id)->delete()){
			delimg('../Uploads/'.$thumb);
			delallimg('../Uploads/',$photo);
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}

	//删除全部主图
	public function delmain(){
		$id=$this->_get('id','intval');
		$db=M('Photo');
		$photo=$db->where('id ='.$id)->getField('photo');
		delallimg('../Uploads/',$photo);
		if ($db->where('id ='.$id)->setField('photo','')) {
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}

	//全选删除
	public function delall(){
		$this->selectDel('Photo');
	}
	
	//更新排序
	public function uporder(){
		$this->getSort('Photo');
	}
	
	//搜索图片
	public function seach(){
		$this->getSearch('photo','name','photo');
	}


}
?>