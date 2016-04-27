<?php
class InquiryAction extends CommonAction{
	public function index(){
		C('TOKEN_ON',true);
		$this->ordername=$this->_post('ordername','htmlspecialchars');
		$template = ($this->lang=='c') ? 'c_index' : 'e_index' ;
		$this->display($template);
	}
	
	public function check(){
		$lang = $this->lang;
		$code_msg = ($lang=='c') ? '验证码错误!' : 'Captcha error!' ;
		$success_msg=($lang=='c') ? '提交订单成功' : 'Send success' ;
		if (!$this->isPost()) {
			$this->error('非法提交!');die();
		}
		$code=$this->_post('code');
		if($_SESSION['verify']!==md5($code)){
			$this->error($code_msg);
		}
		
		$db=D('Inquiry');
		if($data=$db->create()){
			$data['product'] = $this->_post('product','htmlspecialchars');
			$data['num'] = $this->_post('num','htmlspecialchars');
			$data['name'] = $this->_post('name','htmlspecialchars');
			$data['company'] = $this->_post('company','htmlspecialchars');
			$data['add'] = $this->_post('add','htmlspecialchars');
			$data['tel'] = $this->_post('tel','htmlspecialchars');
			$data['fax'] = $this->_post('fax','htmlspecialchars');
			$data['email'] = $this->_post('email','htmlspecialchars');
			$data['contents'] = $this->_post('contents','htmlspecialchars');
			$sendtitle= "订购：".$data['product']; 
			$sendcontents="<p>订购产品：".$data['product']."</p><p>订购数量：".$data['num']."</p><p>联系人：".$data['name']."</p><p>公司名称：".$data['company']."</p><p>联系地址：".$data['add']."</p><p>联系电话：".$data['tel']."</p><p>传真：".$data['fax']."</p><p>邮箱：".$data['email']."</p><p>详细内容：".$data['contents'];
			if($db->data($data)->add()){
				
			  if(C('IS_EMAIL')){
			  	switch (C('SEND_WAY')) {
			  		case '1':
			  		if ($this->smtpsendmail($sendtitle,$sendcontents)) {
			  			$this->success($success_msg);
			  		}else{
			  			$this->error('提交订单成功,但邮件发送失败!');
			  		}
			  			break;

			  		case '2':
			  		if ($this->mailfunction($sendtitle,$sendcontents)) {
			  			$this->success($success_msg.'!!');
			  		}else{
			  			$this->error('提交订单成功,但邮件发送失败!!');
			  		}
			  			break;

			  		case '3':
			  		$phpmailer=$this->phpmailersend($sendtitle,$sendcontents);
			  		if ($phpmailer===1) {
			  			$this->success($success_msg.'...');
			  		}else{
			  			$this->error('提交订单成功,但邮件发送失败：'.$phpmailer);
			  		}
			  			break;

			  		default:
			  			exit('邮件发送方式设置错误!');
			  			break;
			  	}
			  }else{
				$this->success($success_msg);
			  }	
				
			}else{
				$this->error('错误：提交订单失败');
			}
		}else{
			$this->error($db->getError());	
		}		
	}



	
}
?>