<?php
class NavWidget extends Widget{
	public function render($data){
		$_template=$data['lang'].'_nav';
		if(S('navdata')){
			$data=S('navdata');
		}else{
			$n=M('List');
			$nav=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid=0 and nav=1')->order('sort asc')->select();
			$data['nav']=$nav;//有效底部nav

			$nav2=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid=1 and nav=1')->order('sort asc')->select();
			$data['nav2']=$nav2;//有效顶部nav
			
			$nav3=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid=56')->order('sort asc')->select();
			$data['nav3']=$nav3;//有效中间nav

			$nav4=$n->field('id,title,name,ename,url,pid,type,description,edescription,link,elink,photo')->where('pid=1 and nav=1')->order('sort asc')->select();
			$data['nav4']=$nav4;//有效八个产品nav
			

			if($nav2){
				$snav=$n->field('id,name,ename,url,pid,type,link,elink')->where('pid != 0 and nav=1')->order('sort asc')->select();
				$data['snav']=$snav;
				S('navdata',$data,3600 * 24);
			}
		}

		$content=$this->renderFile($_template,$data);
		return $content;
	}


}
?>