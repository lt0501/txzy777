<?php if (!defined('THINK_PATH')) exit();?><div class="scrolllist" id="s1">
    <div class="imglist_w">
      <ul class="imglist">
      	<?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,$pronum,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>" title="<?php echo ($vo["ename"]); ?>"><img width="120" height="120" src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["ename"]); ?>"/></a>
              <p><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'e'));?>" title="<?php echo ($vo["ename"]); ?>" target="_blank"><?php echo (mb_substr($vo["ename"],0,30,'utf-8')); ?></a></p>
       	</li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
</div>
<!-- end of scrolllist -->