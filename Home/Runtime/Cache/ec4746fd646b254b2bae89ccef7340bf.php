<?php if (!defined('THINK_PATH')) exit();?><div class="about_title">关于我们
	<span class="span_title">关于我们</span>
	<span class="more"><a href="<?php echo W('Listhref',array('url'=>$url,'id'=>$id,'lang'=>'c'));?>"><img src="../Public/images/more.png" alt="关于我们详细"></a></span>
</div>
<p class="about_con">
    <img align="left" src="../Public/images/about.gif" style="margin-right:8px;" alt="关于我们"/>
	<?php echo (strip_tags($contents)); ?>
</p>