<?php
class ListAction extends CommonAction{
	public function index(){
		$list=M('List')->field('id,name,ename,pid,sort,type,nav,photo')->order('sort')->select();
		$this->list=recursive($list);
		$this->display();
	}
	
	
	public function addlist(){
		$this->pid=$this->_get('pid', 'intval');
		$this->type=$this->_get('type');
		$tid=$this->_get('tid','intval');
		$topname=array(1=>'顶级栏目',2=>'单页',3=>'链接');
		if (isset($tid)) {
			$name=$topname[$tid];
		}
		if ($this->pid != 0) {
			$name=M('List')->where(array('id'=>$this->pid))->getField('name');
		}
		$this->name=$name;
		$this->display();
	}
	
	//新增产品
	public function savelist(){
		$list=D('List');
		$info= $this->uploadimg();
		$_POST['url']=getSeoUrl('list',$_POST['url']);
		if ($_POST['type']=='link') {
			$_POST['url'] = (strtolower($_POST['link'])=="/feedback/" || strtolower($_POST['link'])=="/inquiry/") ? preg_replace('/\/+/', '', $_POST['link']) : 'list-'.rand(0,9).'-'.rand(0,99);
		} else {
			$_POST['url'] = ($_POST['url']!="") ? preg_replace('/[\s]+/', '-', $_POST['url']) : 'list-'.rand(0,9).'-'.rand(0,99);
		}
		
		if($data=$list->create()){
			if ($data['pid']!=0) {
				$data['bid']=$this->getbigid($data['pid']);
				$data['photo']=$info[0]['savename'];
			}
			if($result=$list->data($data)->add()){
				if ($data['pid']==0) {
					$list->where(array('id'=>$result))->setField('bid',$result);
				}
				$this->success('添加栏目成功',U('List/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error($list->getError());
		}	
	}
	
	
	public function mod(){
		$this->type=$this->_get('type');
		$this->list=D('List')->find($this->_get('id','intval'));
		$this->display();
	}
	//更新产品
	public function updatelist(){
		if ($this->isPost()) {
			$list=D('List');
			$num=$this->_post('num','intval');
			$_POST['url']=getSeoUrl('list',$_POST['url']);
			if ($_POST['type']=='link') {
				//$_POST['url'] = (stripos($_POST['link'],"http://")!== false) ? '' : preg_replace('/\/+/', '', $_POST['link']);
				$_POST['url'] = (strtolower($_POST['link'])=="/feedback/" || strtolower($_POST['link'])=="/inquiry/") ? preg_replace('/\/+/', '', $_POST['link']) : 'list-'.rand(0,9).'-'.rand(0,99);
			} else {
				$_POST['url'] = ($_POST['url']!="") ? preg_replace('/[\s]+/', '-', $_POST['url']) : 'list-'.rand(0,9).'-'.rand(0,99);
			}
			if($data=$list->create()){
				if($num){
				$info=$this->uploadimg();
				$data['photo']=$info[0]['savename'];
				}
				$data['bid']=$this->getbigid($data['id']);
				if($list->data($data)->save()){
					$this->success('修改成功',U('List/index'));
				}else{
					$this->error('修改失败或没有数据被修改');
				}
			}else{
				$this->error($list->getError());
			}
		}
	}

	//删除商品图片
	public function delphoto(){
		$name=$this->_get('name');
		$id=$this->_get('id','intval');
		
		if($name && $id){
			if(M('List')->where('id='.$id)->setField('photo','')){
				if(delimg('../Uploads/'.$name)){
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


	
	public function uporder(){
		$this->getSort('List');
	}
	
	public function dellist(){
		$id = $this->_get('id', 'intval');
		$db = M('List');
		$cateid = $db->field(array('id', 'pid'))->select();
		$delid = get_all_child($cateid, $id);
		$delid[] = $id;

		$where = array('id' => array('IN', $delid));

		if (!$db->where($where)->delete()) {
			$this->error('删除失败');
		}

		$this->success('删除成功',U('List/index'));	
	}
	
	
	
}
?>