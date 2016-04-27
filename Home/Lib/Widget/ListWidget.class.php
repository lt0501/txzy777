<?php
class ListWidget extends Widget{
	public function render($data){
		$template=strtolower($data['table']);
		$templates = ($data['lang']=='c') ? 'c_'.$template : 'e_'.$template ;
		if(S('listdata'.$data['id'])){
			$data=S('listdata'.$data['id']);
		}else{
			
			if($result=M('List')->field('name,type')->find($data['id'])){
				//产品推荐判断
				if($result['type']=='product'){
					$where['featured']=array('eq',1);
				}
				if($data['bid']==$data['id']){
					//一级分类条件
					$where['bid']=$data['id'];
				}else{
					//二级分类条件
					if($indb=M('List')->field('id')->where('pid = '.$data['id'])->select()){
					  foreach($indb as $v){
						  $inpid.=$v['id'].',';
					  }
					  $where['pid']=array('in',rtrim($data['id'].",".$inpid,","));
					}else{
						$where['pid']=array('eq',$data['id']);
					}
				}
			}else{
				$topid=M('List')->field('id,type')->where("type='".$template."' and pid =0" )->order('sort')->limit(0,1)->select();
				if($topid[0]['type']=='product'){
					$where['featured']=array('eq',1);
				}
				$where['bid']=array('eq',$topid[0]['id']);
			}
			
			if ($data['size'] == 3) {
				$article=M($data['table'])->where($where)->order('sort asc,id desc')->limit(0,3)->select();
			}else{
				$article=M($data['table'])->where($where)->order('sort asc,id desc')->select();
			}
			
			$data[$template]=$article;
			S('listdata'.$data['id'],$data,3600 * 24);
		}
		$data['pronum']=C('INDEX_NUM');
		$content=$this->renderFile($templates,$data);
		
		return $content;
	}	
	
	
}
?>