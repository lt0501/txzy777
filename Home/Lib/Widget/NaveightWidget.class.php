<?php
class NaveightWidget extends Widget{
	public function render($data){
		$_template=$data['lang'].'_nav';
		if(S('navdata')){
			$data=S('navdata');
		}else{
			$n=M('List');
			$nav4=$n->field('id,name,ename,url,pid,type,contents,econtents,link,elink,photo')->where('pid=1 and nav=1')->order('sort asc')->select();
			$data['nav4']=$nav4;//无效八个产品nav
		}

		$content=$this->renderFile($_template,$data);
		return $content;
	}
}
?>