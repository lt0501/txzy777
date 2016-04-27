<?php
class AboutWidget extends Widget{
	public function render($data){
		$aboutdata=M('List')->field('id,url,contents,econtents')->where("id = ".$data['id']." and type='page'")->find();
		$len=$data['len'];
		$about = ($data['lang']=='c') ? strip_tags($aboutdata['contents']) : strip_tags($aboutdata['econtents']) ;
		//$about=strip_tags($aboutdata['contents']);
		$about=strlen($about)<=$len ? $about : (mb_substr($about,0,$len,'utf-8')."...");
		$data['contents']=$about;
		$data['url']=$aboutdata['url'];
		$templates = ($data['lang']=='c') ? 'c_about' : 'e_about' ;
		$content=$this->renderFile($templates,$data);
		return $content;
	}	
}
?>