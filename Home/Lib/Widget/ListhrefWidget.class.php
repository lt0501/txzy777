<?php
class ListhrefWidget extends Widget{

	public function render($data){
		$seourl = ($data['lang']=='c') ? C('CN_URL') : C('EN_URL') ;
		if (!empty($data['link'])) {
			if ($data['link']=='/Inquiry/' || $data['link']=='/Feedback/') {
				$linkvar = (C('URL_MODEL')==2) ? U('/'.$seourl.$data['link']) : U($data['link'].'index',array('g'=>$data['lang']));
			} else {
				$linkvar = (stripos($data['link'],"http://")!== false) ? $data['link'] : __ROOT__.$data['link'];
			}
			return $linkvar;
		} else {
			if (C('URL_MODEL')==2) {
				if (!isset($data['url'])) {
				    $data['url']=M('List')->where(array('id'=>$data['id']))->getField('url');
				}
				return U('/'.$seourl .'/'.$data['url']);
			}else{
				return U('List/index',array('g'=>$data['lang'],'id'=>$data['id']));
			}
		}		
	}
}
?> 