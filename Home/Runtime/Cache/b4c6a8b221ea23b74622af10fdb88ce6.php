<?php if (!defined('THINK_PATH')) exit();?><div class='bzBanner'>
	<div class='content'>
		<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='col'>
				<a href="<?php echo ($vo["link"]); ?>" flag="<?php echo ($vo["id"]); ?>">
					<img src='__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>' width=100% />
					<span>
						<h3><strong><?php echo ($vo["headline"]); ?></strong></h3>
						<p><?php echo ($vo["distriibution"]); ?></p>
					</span>
				</a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class='btn'>
		<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><i></i><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<a class='pre' href='javascript:;' title='上一张' ></a>
	<a class='next' href='javascript:;' title='下一张' ></a>
</div>

<script type="text/javascript" src="/Public/js/newslide/bzbanner.js" ></script>
<script type="text/javascript">
	$(function(){ benzi.bzBanner(); });
</script>