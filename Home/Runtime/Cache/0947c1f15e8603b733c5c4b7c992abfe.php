<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>404 error page - <?php echo (C("seo_etitle")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_ekeywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_edescription")); ?>" />
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

<script language="javascript">var catid="",pid="",bid="";</script>
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
                <li><a href="#">Technology R&D</a></li>
                <li><a href="#">Custom Service</a></li>
                <li><a href="#">Success Case</a></li>
                <li><a href="/en/aboutus.html">About Us</a></li>
            </ul>
          </div>
        <div class="clearfix"></div>
     </div>
    </div>
  </div>

  <div class="header_bottom">
        <div class="container">
         <div class="header_bottom-box">
          <div class="header_bottom_left">
            <div id="logo"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" alt="<?php echo (C("web_ename")); ?>"/></div>
            <div class="clearfix">   
            </div>
          </div>
          <div class="header_bottom_right">
            <div class="search">
              <form id="searchform" method="get" action="<?php echo U('Search/index',array('g'=>'e'));?>">
                  <input type="text" name="name" class="input" value="Input the keywords" onblur="if(this.value.length<1)this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value=''"/>
                  <input type="submit" value="search">
              </form>
              </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
  </div>
      <?php echo W('Nav',array('lang'=>'e'));?>
</div>
<!-- end of header -->


<div class="flash_list"><div class="flash_img" style="background:url('__ROOT__/Uploads/01.jpg') no-repeat center top"></div></div>

<div id="main">

    <div id="center">

      <div id="left" class="eleftbg">
          <ul class="contact econtact">
    <li>Add: <?php echo (C("web_eadd")); ?></li>
    <li>Tel: <?php echo (C("web_tel")); ?></li>
    <li>Fax: <?php echo (C("web_fax")); ?></li>
    <li>Email: <?php echo (C("web_email")); ?></li>
</ul>
      </div>
      <!-- end of left -->
        
        <div id="right">
          <div class="path_title">Your position: <a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>">Home</a> &gt; 404 error page</div>
          <h1 style="text-align: center; line-height: 60px;">Error 404: The page does not exist or has been deleted</h1>
          <ul class="ul_sitemap">
            <li><a href="<?php echo W('Index',array('cnen'=>'en','lang'=>'e'));?>" target="_blank">Home</a></li>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo["level"] == 2): ?>class="small_li2_sitemap"<?php elseif($vo["level"] == 1): ?>class="small_li_sitemap"<?php endif; ?>>|-<?php echo ($vo["html"]); ?>
                    <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['elink'],'lang'=>'e'));?>" target="_blank"><?php echo ($vo["ename"]); ?></a>  
                 </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
            
        </div>
        <!-- end of right -->
        
        <div class="clear"></div>
    </div>
    <!-- end of center -->

</div>
<!-- end of main -->

<div id="footer">
<!-- <?php if(isset($isindex)): ?><div class="links">
		Links: <?php echo W('Link',array('lang'=>'e'));?>
    </div><?php endif; ?> -->

	<div class="header_bottom">
    <div class="container">
    	<div class="header_bottom-box">
    		<div class="header_bottom_left">
    			<div class="logo">
    				<?php echo W('Navbottom',array('lang'=>'e'));?>
    			</div>
    		</div>
    		<div class="header_bottom_right copyright <?php if(isset($isindex)): ?>copyright_index<?php endif; ?>">
      		<p><?php echo (C("web_copyright")); ?></p>
  		  </div>
    	</div>
    </div>
  </div>

    <div class="copyright <?php if(isset($isindex)): ?>copyright_index<?php endif; ?>">
        <p><?php echo (C("web_ecopyright")); ?>&nbsp;<?php echo (C("web_icp")); ?> <a href="__ROOT__/e_sitemap.html" target="_blank">Sitemap</a></p>
        <p>Add: <?php echo (C("web_eadd")); ?> &nbsp;Tel: <?php echo (C("web_tel")); ?> &nbsp;Fax: <?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
    </div>
	<?php if(isset($isindex)): echo W('Tags',array('lang'=>'e')); endif; ?>
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
<?php echo W('Online',array('lang'=>'e'));?>
<?php echo (C("web_eshare")); ?>


</body>
</html>