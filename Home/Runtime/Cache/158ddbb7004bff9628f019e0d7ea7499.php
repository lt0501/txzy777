<?php if (!defined('THINK_PATH')) exit();?><div class="about_etitle">ABOUT US
	<span class="more"><a href="<?php echo W('Listhref',array('url'=>$url,'id'=>$id,'lang'=>'e'));?>"><img src="../Public/images/more.png" alt="About us"></a></span>
</div>
<p class="about_con">
    <img align="left" src="../Public/images/about.gif" style="margin-right:8px;" alt="About us"/>
	<?php echo (strip_tags($contents)); ?>
</p>