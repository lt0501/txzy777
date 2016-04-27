<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>伪静态设置</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">伪静态设置</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('savestatic');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:10px 0 0 20px;" class="ListCategory">
  <tr>
    <td width="9%">是否开启伪静态：</td>
    <td width="91%" height="35">
      <input name="URL_MODEL" type="radio" value="2" <?php if($statics["URL_MODEL"] == 2): ?>checked="checked"<?php endif; ?>> 是 &nbsp;
      <input name="URL_MODEL" type="radio" value="1" <?php if($statics["URL_MODEL"] == 1): ?>checked="checked"<?php endif; ?>> 否
    </td>
  </tr>

  <tr>
    <td>中文目录URL：</td>
    <td height="35"><input name="CN_URL" value="<?php echo ($statics["CN_URL"]); ?>" type="text" class="FormSmall" style="width: 220px;"><a title='必须是1位以上的字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>

  <tr>
    <td>英文目录URL：</td>
    <td height="35"><input name="EN_URL" value="<?php echo ($statics["EN_URL"]); ?>" type="text" class="FormSmall" style="width: 220px;"><a title='必须是1位以上的字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>

  <tr>
    <td>产品目录URL：</td>
    <td height="35"><input name="PRO_URL" value="<?php echo ($statics["PRO_URL"]); ?>" type="text" class="FormSmall" style="width: 220px;"><a title='必须是1位以上的字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>

  <tr>
    <td>图片目录URL：</td>
    <td height="35"><input name="PHO_URL" value="<?php echo ($statics["PHO_URL"]); ?>" type="text" class="FormSmall" style="width: 220px;"><a title='必须是1位以上的字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>

  <tr>
    <td>新闻目录URL：</td>
    <td height="35"><input name="NEW_URL" value="<?php echo ($statics["NEW_URL"]); ?>" type="text" class="FormSmall" style="width: 220px;"><a title='必须是1位以上的字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>

  <tr>
    <td>下载目录URL：</td>
    <td height="35"><input name="DOWN_URL" value="<?php echo ($statics["DOWN_URL"]); ?>" type="text" class="FormSmall" style="width: 220px;"><a title='必须是1位以上的字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="确认提交" class="bginput">&nbsp;&nbsp;
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>