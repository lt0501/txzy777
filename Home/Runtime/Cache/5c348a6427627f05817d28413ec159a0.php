<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($list["title"]); ?></title>
<meta name="keywords" content="<?php echo ($list["keywords"]); ?>" />
<meta name="description" content="<?php echo ($list["description"]); ?>" />
<link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/style2.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/jquery.countdown.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/megamenu.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/bootstrap.css" />

<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/product_slider.js"></script>
<script type="text/javascript" src="../Public/js/jquery.easydropdown.js"></script>
<script type="text/javascript" src="../Public/js/megamenu.js"></script>
<!--[if lte IE 6]>
<script src="__PUBLIC__/js/ie6_png.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div#logo img,div.leftbg,div.eleftbg,div#nav_bg');
    </script>
<![endif]-->

<script language="javascript">var catid=<?php echo ($getid); ?>,pid=<?php echo ($list["pid"]); ?>,bid=<?php echo ($list["bid"]); ?>;</script>
<script type="text/javascript" src="../Public/js/left_active.js"></script>
</head>
<body>
<div id="header">
    <div class="header_top">
      <div class="container">
        <div class="header_top-box">
           <div class="header-top-left">
           </div>
           <div class="cssmenu">
              <ul>
                <li><a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>">中文版</a></li>
                <li><a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>">English</a></li>
                <li><a href="#">技术研发</a></li>
                <li><a href="#">定制服务</a></li>
                <li><a href="#">成功案例</a></li>
                <li><a href="/cn/aboutus.html">关于我们</a></li>
              </ul>
            </div>
          <div class="clearfix">
          </div>
       </div>
      </div>
    </div>
    <div class="header_bottom">
      	<div class="container">
      	 <div class="header_bottom-box">
      		<div class="header_bottom_left">
      			<div class="logo">
      				<a href="index.html"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" alt="<?php echo (C("web_name")); ?>"/></a>
      			</div>

      			<div class="clearfix">   
            </div>
      		</div>
      		<div class="header_bottom_right">
      			<div class="search">
              <form id="searchform" method="get" action="<?php echo U('Search/index',array('g'=>'c'));?>">
                  <input type="text" name="name" class="input" value="请输入关键字" onblur="if(this.value.length<1)this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value=''"/>
                  <input type="submit" value="搜索">
              </form>
      	  		</div>
      		</div>
      		<div class="clearfix"> </div>
      	</div>
      </div>
    </div>
    <?php echo W('Nav',array('lang'=>'c'));?>
</div>
<!-- end of header -->


<div class="flash_list"><div class="flash_img" style="background:url('__ROOT__/Uploads/01.jpg') no-repeat center top"></div></div>

<div id="main">

    <div id="center">
        
        <div id="left" class="leftbg">
            <div class="category_title"></div>
            <?php echo W('Left',array('id'=>$list['bid'],'type'=>$list['type'],'lang'=>'c'));?>
            
            <ul class="contact">
    <li>地址：<?php echo (C("web_add")); ?></li>
    <li>电话：<?php echo (C("web_tel")); ?></li>
    <li>传真：<?php echo (C("web_fax")); ?></li>
    <li>邮箱：<?php echo (C("web_email")); ?></li>
</ul>
         </div>
         <!-- end of left -->
        
        <div id="right">
          <div class="path_title"><span class="span_left"><?php echo ($list["name"]); ?> <b><?php echo (strtoupper($list["ename"])); ?></b></span><span class="span_right">您现在的位置：<a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>">网站首页</a> &gt; <?php echo ($list["name"]); ?></span></div>
          
          <ul class="products_list">
          <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>$table,'lang'=>'c'));?>" target="_blank"><img name="picautozoom" class="img_border" src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" width="176" height="176" alt="<?php echo ($vo["name"]); ?>"/></a>
              <p><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>$table,'lang'=>'c'));?>" title="<?php echo ($vo["name"]); ?>" target="_blank"><?php echo (mb_substr($vo["name"],0,28,'utf-8')); ?></a></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>  
          
          <div class="page">
            <?php echo ($page); ?>
          </div>
          <div class="clear"></div>
        </div>
        <!-- end of right -->
        
        <div class="clear"></div>
    </div>
    <!-- end of center -->

</div>
<!-- end of main -->

<div id="footer">
<!-- <?php if(isset($isindex)): ?><div class="links">
		友情链接：<?php echo W('Link',array('lang'=>'c'));?>
    </div><?php endif; ?> -->
  <div class="header_bottom">
    <div class="container">
    	<div class="header_bottom-box">
    		<div class="header_bottom_left">
    			<div class="logo">
    				<?php echo W('Navbottom',array('lang'=>'c'));?>
    			</div>
    		</div>
    		<div class="header_bottom_right copyright <?php if(isset($isindex)): ?>copyright_index<?php endif; ?>">
      		<p><?php echo (C("web_copyright")); ?></p>
  		  </div>
    	</div>
    </div>
  </div>
  <div class="copyright <?php if(isset($isindex)): ?>copyright_index<?php endif; ?>">
      <p><?php echo (C("web_icp")); ?> <a href="__ROOT__/c_sitemap.html" target="_blank">网站地图</a></p>
      <p>地址：<?php echo (C("web_add")); ?> &nbsp;电话：<?php echo (C("web_tel")); ?> &nbsp;传真：<?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
  </div>
	<?php if(isset($isindex)): echo W('Tags',array('lang'=>'c')); endif; ?>
</div>
<!-- end of footer -->
<?php if(C("is_translate")!= 0): ?><div id="translate">
    <!-- Begin TranslateThis Button -->
    <div id="translate-this"><a style="width:180px;height:18px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/"></a></div>
    <script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>
    <script type="text/javascript">
    TranslateThis();
    </script>
    <!-- End TranslateThis Button -->
</div><?php endif; ?>
<?php echo W('Online',array('lang'=>'c'));?>
<?php echo (C("web_share")); ?>

<script type="text/javascript" src="__PUBLIC__/js/picAutoZoom.js"></script>
<script type="text/javascript" language="javascript">
    $.ajaxSetup({
        timeout: 300000
    });
</script>

</body>
</html>