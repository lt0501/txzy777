<?php
class TaghrefWidget extends Widget{
	public function render($data){
		$types=strtolower($data['type']);
		$seourl = ($data['lang']=='c') ? C('CN_URL') : C('EN_URL') ;
		if (C('URL_MODEL')==2) {
			return U('/'.$seourl .'/'.$types.'_tags_'.$data['id']);
		}else{
			return U($types.'/tags',array('id'=>$data['id'],'g'=>$data['lang']));
		}	
	}
	

}
?> 