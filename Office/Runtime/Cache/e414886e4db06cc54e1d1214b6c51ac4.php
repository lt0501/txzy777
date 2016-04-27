<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>管理产品</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该产品？');
		} );
	});

  function formSubmit(n) {
    form = document.getElementById("theForm");
    switch(n) {
    case 1:
        form.action="<?php echo U('uporder');?>";
        break;
    case 2:
        form.action="<?php echo U('delall');?>";
        break;
     }
     form.submit();
  }

</script>
<style type="text/css">
.tablelist li{padding:0.95em 0;}
.tablelist input{width:28px; height:20px; color:#666;}
.proimg{float:left;width:43px; height:43px; margin:-7px 0 0 5px; padding: 1px; background-color:#c2c2c2;}
.proimg:hover{background-color:#045ace;}
.tablelist li a:hover{color: #045ace; text-decoration: none;}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
        <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="54%" height="24">
          <div style="float:left; width:312px; padding-top:6px;">快捷操作：【<a href="<?php echo U('Product/add');?>">添加产品</a>】
          &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:select()">全选</a> | <a href="javascript:fanselect()">反选</a> | <a href="javascript:noselect()">全不选</a>
          </div>
        <select  onchange="location.href=this.value;">
          <option value="<?php echo U('Product/index');?>" selected>按分类索引</option>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo U('Product/search',array('pid'=>$vo['id']));?>" <?php if(($vo["id"]) == $pid): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
        </select >
        
          <td width="33%" height="24">
            <form method="get" action="<?php echo U('Product/search');?>">
              <div style="float:left; width:280px; height:24px;">产品搜索：<input type="text" name="keyword" class="FormSmall" style="height:12px;"></div>
              <div style="float:left;"><input type="submit" value="搜索" class="bginput" style="width:50px; height:24px; font-size:12px;"/></div>
            </form>
          </td>
        </td>
        <td width="13%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form name="theForm" method="post" id="theForm" action="">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10" style="width:7.5%">排序</li>
      <li class="li_40" style="width:42%">产品名称</li>
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:55px;">

          <li class="li_10">
          <span style="float:right; padding-top:8px;"><input name="dell[]" type="checkbox" value="<?php echo ($vo["id"]); ?>"></span>
          <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>

          <li class="li_40">
            <img src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="proimg"/>
            <span><a href="<?php echo U('mod',array('id'=>$vo['id']));?>" title="<?php echo ($vo["ename"]); ?>"><?php echo (mb_substr($vo["name"],0,22,'utf-8')); ?></a></span>
            <?php if($vo["featured"] == 1): ?><span style="font-size:12px;color:#999;">[已推荐]</span><?php else: ?><span style="font-size:12px;color:#999;">[未推荐]</span><?php endif; ?>
          </li>

          <li class="li_40">
            <a href="<?php echo U('mod',array('id'=>$vo['id']));?>" style="font:12px/45px;">修改</a> | 
            <a href="<?php echo U('del',array('id'=>$vo['id']));?>" class='del'>删除</a> |
            <a href="<?php echo U('copydata',array('id'=>$vo['id']));?>" >复制产品</a>
          </li>

      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="170" style="padding-left:5px;">
            <input type="button" value="更新排序" onclick="formSubmit(1)" class="bginput"/>
            <input type="button" value="删除所选" onclick="formSubmit(2)" class="bginput"/>
            </td>
            <td width="730" align="center">
            <div class="page"><?php echo ($show); ?></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>