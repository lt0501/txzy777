<?php if (!defined('THINK_PATH')) exit();?><div class="menu">
  <div class="container">
    <div class="menu_box">
      <ul class="megamenu skyblue">
      <!-- <li class="active grid"><a class="color3" href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>">首页</a></li> -->
      <?php if(is_array($nav2)): $i = 0; $__LIST__ = $nav2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a id="nav_active<?php echo ($vo["id"]); ?>" class="color3" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link'],'lang'=>'c'));?>"><?php echo ($vo["name"]); ?></a>
              <div class="megapanel">
                <div class="row">
                  <div class="col1">
                    <div class="h_nav">
                      <h4><?php echo ($vo["name"]); ?></h4>
                      <ul>
                        <?php if(is_array($snav)): $i = 0; $__LIST__ = $snav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($svo["pid"]) == $vo["id"]): ?><li><a href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link'],'lang'=>'c'));?>"><?php echo ($svo["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                    </div>
                  </div>
                  <div class="col1">
                    <div class="h_nav">
                      <?php echo W('List',array('table'=>'Product','bid'=>1,'id'=>$vo['id'],'lang'=>'c','size'=>3));?>
                    </div>
                  </div>

              </div>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>

      <div class="clearfix"> </div>
     </ul>
    </div>
</div>
</div>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>