<?php if (!defined('THINK_PATH')) exit();?><ul class="category" id="left_cat">
  <?php if(is_array($bigclass)): $i = 0; $__LIST__ = $bigclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a id="cat_active<?php echo ($vo["id"]); ?>" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link'],'lang'=>'e'));?>"><?php echo ($vo["ename"]); ?></a></li>

  	  <ul id="smallshow<?php echo ($vo["id"]); ?>" style="display:none;">	
      <?php if(is_array($smallclass)): $i = 0; $__LIST__ = $smallclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($svo["pid"]) == $vo["id"]): ?><li class="small"><a id="cat_active<?php echo ($svo["id"]); ?>" href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link'],'lang'=>'e'));?>"><?php echo ($svo["ename"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	  </ul><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>