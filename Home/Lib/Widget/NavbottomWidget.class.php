<?php
class NavbottomWidget extends Widget{
	public function render($data){
		$_template=$data['lang'].'_nav';
		if(S('navdata')){
			$data=S('navdata');
		}else{
			$n=M('List');
			$nav=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid=0 and nav=1')->order('sort asc')->select();
			$data['nav1']=$nav;//无效
		}

		$content=$this->renderFile($_template,$data);
		return $content;
	}
}
?>