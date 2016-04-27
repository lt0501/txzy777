<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>栏目管理</title>
<style>
	.open {
		display: block;
		width: 18px;
		height: 18px;
		cursor: pointer;
	}
</style>
<script type="text/javascript">
	$(function () {
		$( 'ul[pid!=0]' ).hide();

		$( '.open' ).toggle( function () {
			var index = $( this ).parents('ul').attr('id');
			$( this ).html( "<img src='../Public/images/minus.gif' class='listimg'/>" );
			$( 'ul[pid=' + index + ']' ).show();
		}, function () {
			var index = $( this ).parents('ul').attr('id');
			$( this ).html( "<img src='../Public/images/maxus.gif' class='listimg'/>" );
			$( 'ul[pid=' + index + ']' ).hide();
		} );

		$( '.del' ).click( function () {
			return confirm('确认删除该分类？');
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
        <td width="88%" height="24">栏目管理 : <a href="<?php echo U('addlist',array('pid'=>0,'tid'=>1));?>">添加顶级栏目</a> | <a href="<?php echo U('addlist',array('pid'=>0,'type'=>'page','tid'=>2));?>">添加单页</a> | <a href="<?php echo U('addlist',array('pid'=>0,'type'=>'link','tid'=>3));?>">添加链接</a></td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form name="theForm" method="post" action="<?php echo U('uporder');?>">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">排序</li>
      <li class="li_40">分类名</li>
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" id='<?php echo ($vo["id"]); ?>' pid='<?php echo ($vo["pid"]); ?>'>
          <li class="li_10">
          <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>
          <li class="li_40">
          	  <?php if(($vo["level"]) < "2"): ?><span class='open'><img src="../Public/images/maxus.gif" class="listimg"/></span>
              <?php else: ?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
              <?php if($vo["level"] > 0): ?>├─<?php endif; echo ($vo["name"]); ?> &nbsp;(<?php echo ($vo["ename"]); ?>)
          </li>
          <li class="li_40">
            <?php if($vo["level"] <= 1 and $vo["type"] != 'page' and $vo["type"] != 'link'): ?><a href="<?php echo U('addlist',array('pid'=>$vo['id'],'type'=>$vo['type']));?>">添加子类</a> |
            <?php elseif($vo["type"] == 'page' and $vo["level"] < 1): ?>
            <a href="<?php echo U('addlist',array('pid'=>$vo['id'],'type'=>$vo['type']));?>">添加子类</a> |<?php endif; ?>
            
            <a href="<?php echo U('mod',array('id'=>$vo['id'],'type'=>$vo['type']));?>">修改</a> | 
            <a href="<?php echo U('dellist',array('id'=>$vo['id']));?>" class='del'>删除</a> |
            菜单：<?php if(($vo["nav"]) == "1"): ?>显示<?php else: ?><font color="#FF0000">隐藏</font><?php endif; ?> |
            &nbsp;ID:<?php echo ($vo["id"]); ?>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="padding-left:5px;">
            <input type="submit" value="更新排序" class="bginput">
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>