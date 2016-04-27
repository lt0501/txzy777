<?php
// +----------------------------------------------------------------------
// | 蓝科企业网站系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://lankecms.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://51020.taobao.com )
// +----------------------------------------------------------------------
// | Author: 钟若天 <lankecms@163.com>
// +----------------------------------------------------------------------

class IndexAction extends CommonAction {
	public function index(){
		$this->display();
	}
	
	public function top(){
		C('SHOW_PAGE_TRACE',false);
		$this->display('top');
	}
	
	public function left(){
		C('SHOW_PAGE_TRACE',false);
		$this->display('left');	
	}
	
	public function main(){
		$info = array(
		'操作系统'=>PHP_OS,
		'运行环境'=>$_SERVER["SERVER_SOFTWARE"],
		'PHP运行方式'=>php_sapi_name(),
		'上传附件限制'=>ini_get('upload_max_filesize'),
		'现在时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
		'服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]'.SERVERAME(),
		'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
		'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
		'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
		'host'=>gethostbyname($_SERVER['SERVER_NAME']),
		);
		$this->assign('info',$info);
		$this->display('main');	
	}
	
	public function loginOut(){
		session_unset();
		session_destroy();
		$this->redirect('Login/index');
	}

	public function debugindex(){
		$info=file_get_contents('../index.php');
		preg_match_all('#define\(\'APP_DEBUG\',(true|false)\)#', $info, $arr);
		if (isset($arr[1][0])) $this->appdebugs=$arr[1][0];
		//echo $this->appdebugs;
		$this->display();
	}

	public function setdebug(){
		$info=file_get_contents('../index.php');
		if (!$info) exit('无法找到主目录下的index.php文件，请检查后重试...');

		preg_match_all('#define\(\'APP_DEBUG\',(true|false)\)#', $info, $arr);
		if (isset($arr[1][0])) $appdebugs=$arr[1][0];

		$isapp = $this->_post('is_app');
		if ($isapp != $appdebugs) {
			$newinfo = preg_replace("#define\(\'APP_DEBUG\',$appdebugs\)#", "define('APP_DEBUG',$isapp)", $info);
			if (file_put_contents('../index.php', $newinfo)) {
				$this->success('修改成功!');
			} else {
				$this->error('修改失败!');
			}
		}else{
			$this->error('没有数据被修改!');
		}
	}
}