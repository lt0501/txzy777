<?php if (!defined('THINK_PATH')) exit(); if($tags): ?><div class="tags">
	<a class="tag_active" href="<?php echo U('Tags/index',array('lang'=>'e'));?>">TAGS</a>
	      <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo W('Taghref',array('id'=>$vo['id'],'type'=>$vo['type'],'lang'=>'e'));?>" target="_blank"><?php echo ($vo["ename"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="clear"></div>
	</div><?php endif; ?>