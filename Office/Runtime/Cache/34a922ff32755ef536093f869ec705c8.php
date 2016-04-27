<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>水印设置</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">水印设置</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('savewater');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">是否开启水印：</td>
    <td width="91%" height="35">
      <input name="is_water" type="radio" value="1" <?php if(C("is_water")== 1): ?>checked="checked"<?php endif; ?>> 是 &nbsp;
      <input name="is_water" type="radio" value="0" <?php if(C("is_water")== 0): ?>checked="checked"<?php endif; ?>> 否
    </td>
  </tr>

  <tr>
    <td>水印透明度：</td>
    <td height="35"><input name="water_alpha" value="<?php echo (C("water_alpha")); ?>" type="text" class="FormSmall" style="width: 100px;"><span style="color:#F00; font-size:12px;"> *请填0-100之间的整数</span></td>
  </tr>
  
  <tr>
    <td>水印位置：</td>
    <td height="35">
      <select name="water_position" style="height:28px;">
        <option value="1" <?php if((C("water_position")) == "1"): ?>selected="selected"<?php endif; ?>>左上角</option>
        <option value="2" <?php if((C("water_position")) == "2"): ?>selected="selected"<?php endif; ?>>上居中</option>
        <option value="3" <?php if((C("water_position")) == "3"): ?>selected="selected"<?php endif; ?>>右上角</option>
        <option value="4" <?php if((C("water_position")) == "4"): ?>selected="selected"<?php endif; ?>>左居中</option>
        <option value="5" <?php if((C("water_position")) == "5"): ?>selected="selected"<?php endif; ?>>正中间</option>
        <option value="6" <?php if((C("water_position")) == "6"): ?>selected="selected"<?php endif; ?>>右居中</option>
        <option value="7" <?php if((C("water_position")) == "7"): ?>selected="selected"<?php endif; ?>>左下角</option>
        <option value="8" <?php if((C("water_position")) == "8"): ?>selected="selected"<?php endif; ?>>下居中</option>
        <option value="9" <?php if((C("water_position")) == "9"): ?>selected="selected"<?php endif; ?>>右下角</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>水印图片上传：</td>
    <td height="35" style="padding:5px 0px;">
      <?php if(C("water_logo")== ''): ?><input type='file' name='water_logo'>
        <input type="hidden" name="num" value="1">
      <?php else: ?>
        <a href="__ROOT__/Uploads/<?php echo (C("water_logo")); ?>" target='_blank'><img src="__ROOT__/Uploads/<?php echo (C("water_logo")); ?>" width="80" height="30"/></a>
        <a href="__APP__?m=config&a=dellogo&name=<?php echo (C("water_logo")); ?>&type=water">删除该图片</a><?php endif; ?>
      <span style="color:#F00; font-size:12px; padding-left:12px;"> * 注意：水印图片不得大于产品图片</span>
    </td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="确认提交" class="bginput">&nbsp;&nbsp;
    <?php echo (serverame($WATER)); ?>
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>