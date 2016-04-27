<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>修改广告</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">修改广告 【<a href="<?php echo U('Flash/index');?>">返回广告列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('upflash');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">广告标题：</td>
    <td width="91%" height="35"><input name="title" type="text" value="<?php echo ($flash["title"]); ?>" class="FormSmall" style="width: 320px;"> 
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" value="<?php echo ($flash["sort"]); ?>" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>
  
  <tr>
    <td>广告链接：</td>
    <td height="35"><input name="link" type="text" value="<?php echo ($flash["link"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>

  <tr>
    <td>文字标题：</td>
    <td height="35"><input name="headline" type="text" value="<?php echo ($flash["headline"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>详情描述：</td>
    <td height="110"><textarea name="distriibution" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($flash["distriibution"]); ?></textarea>
    </td>
  </tr>
  
    <tr>
    <td>文字标题(英文)：</td>
    <td height="35"><input name="eheadline" type="text" value="<?php echo ($flash["eheadline"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>详情描述（英文）：</td>
    <td height="110"><textarea name="edistriibution" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($flash["edistriibution"]); ?></textarea>
    </td>
  </tr>

  <tr>
    <td>广告图片：</td>
    <td height="35">
    <?php if(empty($flash["photo"])): ?><input type='file' name='photo'>
    <input type="hidden" name="num" value="1">
    <?php else: ?>
      <p style="padding:4px 0;">
     <img src="__ROOT__/Uploads/<?php echo ($flash["photo"]); ?>" width="80" height="40"/>&nbsp;<a href="<?php echo U('delphoto',array('name'=>$flash['photo'],'id'=>$flash['id']));?>" class='del'>删除该图片</a><span style="color:#F00; font-size:12px;">*建议图片分辨率：1650*450</span>
      </p><?php endif; ?>
    </td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="hidden" name="id" value="<?php echo ($flash["id"]); ?>">
    <input type="submit" value="修改" class="bginput">&nbsp;&nbsp;
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>