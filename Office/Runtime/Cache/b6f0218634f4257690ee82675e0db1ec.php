<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改栏目</title>
    <?php if($type == 'page'): ?><script type="text/javascript">var baiduPath="__PUBLIC__/";</script>
	<link rel="stylesheet" href="<?php echo ($adminName); ?>/kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="<?php echo ($adminName); ?>/kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="<?php echo ($adminName); ?>/kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="contents"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});


		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="econtents"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="specification"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="especification"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="productadvantages"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="eproductadvantages"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="etypicalapplication"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="typicalapplication"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="eproductorder"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="productorder"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="eproductquestion"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="productquestion"]', {
				cssPath : '<?php echo ($adminName); ?>/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?php echo ($adminName); ?>/kindeditor/php/upload_json.php',
				fileManagerJson : '<?php echo ($adminName); ?>/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script><?php endif; ?>
<SCRIPT language=javaScript>
function CheckJob()
{
	if (document.myform.name.value.length==""){
		alert ("栏目名称不能为空！");
		document.myform.name.focus();
		return false;
	}
	var number = document.getElementById('sort').value;
	var reg = /^\d+$/;
	if (!number.match(reg)){
		alert ("排序号必须为数字!");
		document.myform.sort.focus();
		return false;
	}
 }
</SCRIPT>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">修改【<?php echo ($list["name"]); ?>】栏目</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('updatelist');?>" method="post" name="myform" id="myform"  onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="90%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="11%">栏目名称：</td>
    <td width="89%" height="35"><input name="name" type="text" value="<?php echo ($list["name"]); ?>" class="FormSmall"><span style="color:#F00; font-size:12px;"> *必填</span></td>
  </tr>
  <tr>
    <td style="color:blue;">栏目名称 (英文)：</span></td>
    <td height="35"><input name="ename" type="text" value="<?php echo ($list["ename"]); ?>" class="FormSmall"><span style="color:#F00; font-size:12px;"> *必填</span></td>
  </tr>

  <?php if($pid == 0): ?><tr>
    <td>栏目模型：</td>
    <td height="35">
      <?php switch($list["type"]): case "product": ?>产品模型<?php break;?>
          <?php case "new": ?>新闻模型<?php break;?>
          <?php case "photo": ?>图片模型<?php break;?>
          <?php case "download": ?>下载模型<?php break;?>
          <?php case "page": ?>单页模型<?php break;?>
          <?php case "link": ?>链接模型<?php break;?>
          <?php default: ?>未设置<?php endswitch;?>
      <input name="type" type="hidden" value="<?php echo ($list["type"]); ?>">
    </td>
  </tr><?php endif; ?>

  <tr>
    <td>导航菜单：</td>
    <td height="35" valign="middle">
    <select name="nav">
        <option value="1" <?php if(($list["nav"]) == "1"): ?>selected="selected"<?php endif; ?>>显示</option>
        <option value="0" <?php if(($list["nav"]) == "0"): ?>selected="selected"<?php endif; ?>>隐藏</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" id="sort" type="text" value="<?php echo ($list["sort"]); ?>" class="FormSmall" style="width: 50px;"></td>
  </tr>

  <?php if(($list["type"]) != "link"): ?><tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($list["url"]); ?>" class="FormSmall"> <a title='URL只能是字母、数字或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  <tr>
    <td>SEO标题：</td>
    <td height="35"><input name="title" type="text" value="<?php echo ($list["title"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" value="<?php echo ($list["keywords"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($list["description"]); ?></textarea>
    </td>
  </tr>
  <tr>
    <td style="color:blue;">SEO标题 (英文)：</td>
    <td height="35"><input name="etitle" type="text" value="<?php echo ($list["etitle"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  <tr>
    <td style="color:blue;">SEO关键字 (英文)：</td>
    <td height="35"><input name="ekeywords" type="text" value="<?php echo ($list["ekeywords"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  <tr>
    <td style="color:blue;">SEO描述 (英文)：</td>
    <td height="110"><textarea name="edescription" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($list["edescription"]); ?></textarea>
    </td>
  </tr>

  <?php else: ?>

  <tr>
    <td>链接地址：</td>
    <td height="35"><input name="link" type="text" value="<?php echo ($list["link"]); ?>" class="FormSmall" style="width: 320px;"><a title='(1)站内链接：如 /aaa/<br>(2)站外链接：需以http://开头'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  <tr>
    <td style="color:blue;">链接地址 (英文)：</td>
    <td height="35"><input name="elink" type="text" value="<?php echo ($list["elink"]); ?>" class="FormSmall" style="width: 320px;"><a title='(1)站内链接：如 /aaa/<br>(2)站外链接：需以http://开头'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a>
    </td>
  </tr>
<tr><?php endif; ?>
  

<?php if($type == 'page'): ?><tr>
    <td>单页内容：</td>
    <td>
    <textarea name="contents" style="width:670px; height:290px; margin:8px 0;visibility:hidden;"><?php echo ($list["contents"]); ?></textarea>
    </td>
  </tr>
  <tr height="310">
    <td style="color:blue;">单页内容 (英文)：</td>
    <td>
    <textarea name="econtents" style="width:670px; height:290px; margin:8px 0;visibility:hidden;"><?php echo ($list["econtents"]); ?></textarea>
    </td>
  </tr><?php endif; ?>
  
  <tr>
    <td height="55" align="center">  
    </td>
    <td height="55" align="left">
    <input name="id" type="hidden" value="<?php echo ($list["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>