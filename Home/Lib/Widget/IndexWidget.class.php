<?php
class IndexWidget extends Widget{

	public function render($data){
		$seourl = ($data['lang']=='c') ? C('CN_URL') : C('EN_URL') ;
		if (C('URL_MODEL')==2) {
			if (C('CNEN')==$data['cnen']) {
				$linkvar='__ROOT__/';
				return $linkvar;
			}else{
				return U('/'.$seourl .'/index');
			}
		} else {
			if (C('CNEN')==$data['cnen']) {
				$linkvar='__ROOT__/';
				return $linkvar;
			}else{
				return U('Index/index',array('g'=>$data['lang']));
			}
		}
		
	}
}
?>