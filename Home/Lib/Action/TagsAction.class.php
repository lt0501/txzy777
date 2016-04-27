<?php
class TagsAction extends CommonAction{
	public function index(){
		$lang = I('get.lang');
		$template = ($lang=='c') ? 'c_index' : 'e_index' ;

		$db=M('Tags');
		import('ORG.Util.Page');
		$count=$db->count();
		$page=new Page($count,200);
		$prevs= ($lang=='c') ? '上一页' : 'Previous' ;
		$nexts= ($lang=='c') ? '下一页' : 'Next' ;
		$page->setConfig('prev',$prevs);
		$page->setConfig('next',$nexts);
		$page->setConfig('theme',"%upPage% %linkPage% %downPage%");
		$this->show=$page->show();

		$this->tags=$db->field('id,name,ename,type,sort')->order('sort')->limit($page->firstRow.','.$page->listRows)->select();
		$this->pid=M('List')->field('id')->where(array('type'=>'Product','pid'=>0))->limit(1)->order('sort')->find();
		$this->display($template);
	}

	public function tag(){
		$this->display();
	}


}
?>