<?php
class LeftWidget extends Widget{
	public function render($data){
		$_template=$data['lang'].'_left';
		if(!empty($data)){
		    if(S('leftdata'.$data['id'])){
			  $data=S('leftdata'.$data['id']);
		    }else{
			  $list=M('List');
			  $bwhere['pid']=array('eq',$data['id']);
			  $bwhere['type']=array('eq',$data['type']);
			  $bigclass=$list->field("id,name,ename,url,pid,sort,link")->where($bwhere)->order('sort asc,id asc')->select();
			  $data['bigclass']=$bigclass;

				//判断是否存在大类
				if($bigclass){
				  foreach ($bigclass as $k=>$v){
					  $allid.=$v[id].',';
				  }
				  $allid=rtrim($allid,",");
				  $where['pid']=array('in',$allid);
				  $smallclass=$list->field("id,name,ename,url,pid,sort,link")->where($where)->order('sort asc,id asc')->select();
				  $data['smallclass']=$smallclass;
				  S('leftdata'.$data['id'], $data, 3600 * 24);
				}
			}
		}
		$content=$this->renderFile($_template,$data);
		return $content;
	}


}
?>
