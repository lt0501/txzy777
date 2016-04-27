<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
</head>

<frameset rows="118,*" border="0">
	<frame src="<?php echo U('Index/top');?>" name="top" noresize="noresize">
    
    <frameset cols="200,*">
    	<frame src="<?php echo U('Index/left');?>" name="left" scrolling="auto">
        <frame src="<?php echo U('Index/main');?>" name="main" noresize="noresize">
    </frameset>
    
    <noframes>
        你使用的是不带分帧的浏览器，请使用有分帧的浏览器，或转向不使用分帧的页面访问
    </noframes>	
</frameset>

</html>