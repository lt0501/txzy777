<?php
class HrefWidget extends Widget{
	public function render($data){
		$cnenurl = ($data['lang']=='c') ? C('CN_URL') : C('EN_URL') ;
		$types=strtolower($data['type']);
		switch ($types) {
			case 'new':
				$seourl=$cnenurl.'/'.C('NEW_URL');
				break;
			case 'download':
				$seourl=$cnenurl.'/'.C('DOWN_URL');
				break;
			case 'product':
				$seourl=$cnenurl.'/'.C('PRO_URL');
				break;
			case 'photo':
				$seourl=$cnenurl.'/'.C('PHO_URL');
				break;
			default:
				break;
		}
		if (C('URL_MODEL')==2) {
			return U('/'.$seourl.'/'.$data['url']);
		}else{
			return U($types.'/index',array('g'=>$data['lang'],'id'=>$data['id']));
		}
		
	}

}
?> 