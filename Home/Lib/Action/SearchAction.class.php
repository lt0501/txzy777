<?php
class SearchAction extends CommonAction{

	public function index(){
		$lang = $this->lang;
		$_msg = ($lang=='c') ? '请输入关键词' : 'Please input the keywords' ;
		$template = ($lang=='c') ? 'c_index' : 'e_index' ;

		$keyword = I('get.name','','trim');
		$rekeyword = ($lang=='c') ? '' : ' ' ;
		$keyword = str_replace('+', $rekeyword , $keyword);
		
		//C('URL_MODEL',0);
		//if(isset($_GET['p'])) $keyword = str_replace('+', '', $keyword);
	
		if ($keyword=="") {
			$this->error($_msg);
		}
		$where = ($lang=='c') ? " name like '%%%s%%' " : " ename like '%%%s%%' " ;

		$db=M('Product');
		import('ORG.Util.Page');
		$count=$db->where($where,array($keyword))->count();
		$page=new Page($count,C('LIST_PRONUM'));
		$prevs= ($lang=='c') ? '上一页' : 'Previous' ;
		$nexts= ($lang=='c') ? '下一页' : 'Next' ;
		$page->setConfig('prev',$prevs);
		$page->setConfig('next',$nexts);
		$page->setConfig('theme',"%upPage% %linkPage% %downPage%");
		$this->page=$page->show();

		$this->product=$db->field('id,name,ename,description,edescription,url,thumb')->where($where,array($keyword))->limit($page->firstRow.','.$page->listRows)->select();
		
		$this->pid=M('List')->field('id')->where(array('type'=>'Product','pid'=>0))->limit(1)->order('sort')->find();
		$this->keyword=$keyword;
		//$urlmodels=require './static.php';
		//C('URL_MODEL',$urlmodels['URL_MODEL']);
		$this->display($template);
	}


}
?>