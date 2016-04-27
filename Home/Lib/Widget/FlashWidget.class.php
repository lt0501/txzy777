<?php
class FlashWidget extends Widget{
	public function render($data){
		$templates = ($data['lang']=='c') ? 'c_flash' : 'e_flash' ;
		if(S('flashdata')){
			$data=S('flashdata');
		}else{
			$data['flash']=$this->flash=M('Flash')->field('id,title,sort,link,photo,headline,distriibution,eheadline,edistriibution')->order('sort')->select();
			S('flashdata',$data,3600 * 24);
		}
		
		$content=$this->renderFile($templates,$data);
		return $content;
	}

}
?>