<?php
class AboutWidget extends Widget{
	public function render($data){
		$id=$data['id'];
		$n=M('List');
		$topimg=$n->field('id,url,contents,econtents,photo')->where('bid=56 and id='.$id )->order('sort asc')->select();
		$data['topimg']=$topimg;

		$content=$this->renderFile($_template,$data);
		return $content;
	}	
  }
?>