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

class CommonAction extends Action{
	public function _initialize(){
		header("Content-Type:text/html; charset=utf-8");
		if(!isset($_SESSION['uid']) || !isset($_SESSION['uname']) || C('VERSION')==""){
			$this->redirect('Login/index');
		}
		$this->adminName=__ROOT__.'/'.APP_NAME;
	}
	
	//图片上传
	protected function uploadimg(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload->allowExts  = array('jpg','gif','png','jpeg','bmp');// 设置附件上传类型
		$upload->savePath =  '../Uploads/'; //不要修改
		
		if(!$upload->upload()) {
			$this->error($upload->getErrorMsg());
		}else{
			$info =  $upload->getUploadFileInfo();
			return $info;
		}
	}

	//水印
	protected function watermark($avator){
		if (C("WATER_LOGO")) {
			import('@.Org.Image');
			$Image=new image();
			$logo='../Uploads/'.C("WATER_LOGO");
			$Image->water($avator,$logo,null,C('WATER_ALPHA'),C('WATER_POSITION'));
		}
	}

	//修改配置文件
	protected function setconfig($array,$file){
		$config=array_merge(include $file , array_change_key_case($array,CASE_UPPER));
		$str = "<?php\r\nreturn " . var_export($config, true) . ";\r\n?>";
		if(file_put_contents($file,$str)){
			return true;
		}else{
			return false;
		}
	}
	
	//文件上传
	protected function uploaddown(){
		import('ORG.Net.UploadFile');
		$upload=new UploadFile();
		$upload->allowExts=array('rar','pdf','doc','xls','ppt','docx','xlsx','pptx','apk','gif','jpg','bmp','jpeg','png');
		$upload->savePath='../Uploads/download/';
		
		if(!$upload->upload()){
			$this->error($upload->getErrorMsg());
		}else{
			$info=$upload->getUploadFileInfo();
			return $info;
		}	
	}
	
	//获得顶级ID
	protected function getbigid($id){		
		$pid=M('List')->where('id='.$id)->getField('pid');														
		if($pid==0){
			return $id;
		}else{
			$getid=M('List')->field('id,pid')->find($pid);                 							  
			if($getid['pid']==0){
				return $getid['id'];
			}else{
				$sid=M('List')->where('id='.$getid['pid'])->getField('id');
				return $sid;
			}			
		}	
	}
	
	//搜索管理
	protected function getSearch($type,$field,$data){
		$this->list=recursive(M('List')->field('id,pid,name')->where("type = '".$type."'")->order('sort')->select());
		$pid=$this->_get('pid','intval');
		if($pid){
			$this->pid=$pid;
			$listid=M('List')->field('id,pid')->where("id =".$pid)->find();
				if($listid['pid']!=0){
					if($indb=M('List')->field('id')->where('pid = '.$pid)->select()){
					  foreach($indb as $v){
						  $inpid.=$v['id'].',';
					  }
					$where['pid']=array('in',rtrim($pid.",".$inpid,","));
					}else{
						$where['pid']=array('eq',$pid);
					} 
				}else{
					$where['bid']=array('eq',$pid);
				}
		}else{
			$where[$field]=array('like','%'.trim($_GET['keyword']).'%');
		}
		$db=M(ucfirst($type));
		import('ORG.Util.Page');
		$count=$db->where($where)->count();
		$page=new Page($count,20);
		$this->show=$page->show();
		$this->$data=$db->where($where)->order('sort')->limit($page->firstRow.','.$page->listRows)->select();
		$this->display('index');
	}

	//排序
	protected function getSort($table){
		if ($this->isPost()){
		  $arr=$_POST['sort'];
		  foreach($arr as $k=>$v){
			  if(is_numeric($v)){
				  M($table)->where(array('id'=>$k))->data(array('sort'=>$v))->save();
			  }else{
				  $this->error('排序号必须为数字');
			  }		
		  }
		  $this->redirect('index');	
		}else{
			$this->error('非法请求');
		}
	}

	//图片产品全选删除
	protected function selectDel($table){
		if ($this->isPost()) {
			if ($_POST['dell']=="") {
				$this->error('您未选择任何数据');
			}
			$db=M($table);
			foreach ($_POST['dell'] as $value) {
				$thumb=$db->where('id ='.$value)->getField('thumb');
				$photo=$db->where('id ='.$value)->getField('photo');
				if ($thumb) {
					delimg('../Uploads/'.$thumb);
				}
				if ($photo) {
					delallimg('../Uploads/',$photo);
				}	
			}
			$ids=implode(",", $_POST['dell']);
			$where['id']=array('in',$ids);
			if ($db->where($where)->delete()) {
				$this->success('删除成功');
			} else {
				$this->error('删除失败');
			}	
		}
	}
	
	
}
?>