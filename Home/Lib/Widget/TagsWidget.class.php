<?php
class TagsWidget extends Widget{
	public function render($data){
		$templates = ($data['lang']=='c') ? 'c_tags' : 'e_tags' ;
		if (S('tagsdata')) {
			$data=S('tagsdata');
		} else {
			$num=C('INDEX_TAGS');
			$tags = ($num > 0) ? M('Tags')->field('id,name,ename,type,sort')->order('sort')->limit($num)->select() : null ;
			//$tags=M('Tags')->field('id,name,type,sort')->order('sort')->limit($num)->select();
			$data['tags']=$tags;
			S('tagsdata',$data,3600 * 24);
		}
		$content=$this->renderFile($templates,$data);
		return $content;
	}

}
?>