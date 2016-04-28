<?php
class InquiryAction extends CommonAction{
	public function index(){
		$db=M('Inquiry');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,20);
		$this->show=$page->show();
		
		$this->inquiry=$db->field('id,product,time')->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->display();
	}
	
	public function view(){
		$id=$this->_get('id','intval');
		$this->inquiry=M('Inquiry')->field('id,product,num,name,company,add,tel,fax,email,contents,time')->find($id);
		$this->display();
	}
	
	public function del(){
		$id=$this->_get('id','intval');
		
		$db=M('Inquiry');
		if($db->where(array('id'=>$id))->delete()){
			$this->success('删除订单成功',U('Inquiry/index'));
		}else{
			$this->error('删除失败');
		}
	}
	
	public function alldel(){
		$model = M("Inquiry");
		$model->query('delete from __TABLE__ ');
		$this->redirect('index');
	}
	
	
	
	
	
}
?>