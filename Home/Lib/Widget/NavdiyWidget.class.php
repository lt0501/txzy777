<?php
class NavdiyWidget extends Widget{
	public function render($data){
		$_template=$data['lang'].'_nav';
		if(S('navdata')){
			$data=S('navdata');
		}else{
			$n=M('List');
			$nav3=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid=56')->order('sort asc')->select();
			$data['nav3']=$nav3;//无效
		}

		$content=$this->renderFile($_template,$data);
		return $content;
	}
}
?>