<?php
class FeedbackAction extends CommonAction{
	public function index(){
		$db=M('Feedback');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,20);
		$this->show=$page->show();
	
		$this->feed=$db->field('id,title,time')->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->display();
	}
	
	public function view(){
		$id=$this->_get('id','intval');
		$this->feed=M('Feedback')->field('id,title,name,tel,email,add,contents,time')->find($id);
		$this->display();
	}
	
	public function del(){
		$id=$this->_get('id','intval');
		
		$db=M('Feedback');
		if($db->where(array('id'=>$id))->delete()){
			$this->success('删除留言成功',U('Feedback/index'));
		}else{
			$this->error('删除失败');
		}
	}
	
	public function alldel(){
		$model = M("Feedback");
		$model->query('delete from __TABLE__ ');
		$this->redirect('index');
	}
	
	
	
	
}
?>