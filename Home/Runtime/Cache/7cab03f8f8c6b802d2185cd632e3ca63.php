<?php if (!defined('THINK_PATH')) exit();?><div class="menubottom">
  <div class="container">
    <div>
       <ul class="megamenu skyblue">
        <a href="index.html"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" alt="<?php echo (C("web_name")); ?>"></a>
        <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a id="nav_active<?php echo ($vo["id"]); ?>" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link'],'lang'=>'c'));?>"><?php echo ($vo["ename"]); ?>
            </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>
    </div>
</div>
</div>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>