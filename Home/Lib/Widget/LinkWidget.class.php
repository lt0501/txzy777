<?php
class LinkWidget extends Widget{
	public function render($data){
		$templates=($data['lang']=='c') ? 'c_link' : 'e_link';
		if(S('linksdata')){
			$data=S('linksdata');
		}else{
			$data['links']=$this->links=M('Link')->field('id,name,ename,url,eurl,sort')->order('sort')->select();
			S('linksdata',$data,3600 * 24);
		}
		$content=$this->renderFile($templates,$data);
		return $content;
	}

}
?>