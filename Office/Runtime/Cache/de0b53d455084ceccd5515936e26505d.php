<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>订单管理</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该订单？');
		} );
		
		$( '.alldel' ).click( function () {
			return confirm('确认删除全部订单？');
		} );
	});
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
        <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">快捷操作：<a href="<?php echo U('Inquiry/alldel');?>" class='alldel'>删除全部订单</a></td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">编号</li>
      <li class="li_40">标题</li>
      <li class="li_30">日期</li>
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($inquiry)): $i = 0; $__LIST__ = $inquiry;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'">
          <li class="li_10"><?php echo ($vo["id"]); ?></li>
          <li class="li_40"><?php echo ($vo["product"]); ?></li>
          <li class="li_30"><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></li>
          <li class="li_20">
            <a href="<?php echo U('view',array('id'=>$vo['id']));?>" >查看</a> | 
            <a href="<?php echo U('del',array('id'=>$vo['id']));?>" class='del'>删除</a>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            </td>
            <td width="92%" align="center">
            <div class="page"><?php echo ($show); ?></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>