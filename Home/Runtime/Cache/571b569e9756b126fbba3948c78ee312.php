<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线留言-<?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_description")); ?>" />
<script language="javascript">var catid="",pid="",bid=30;</script>
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

<script type="text/javascript" src="../Public/js/left_active.js"></script>
<SCRIPT language=javaScript>
function CheckJob()
{
  if (document.myform.title.value.length==""){
    alert ("留言标题不能为空！");
    document.myform.title.focus();
    return false;
  }
  if (document.myform.name.value.length==""){
    alert ("姓名不能为空！");
    document.myform.name.focus();
    return false;
  }
  if (document.myform.tel.value.length==""){
    alert ("电话不能为空！");
    document.myform.tel.focus();
    return false;
  }
 }
</SCRIPT>
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
          <ul class="category" id="left_cat">
             <li><a id="cat_active" href="__SELF__">在线留言</a></li>
          </ul> 
          <ul class="contact">
    <li>地址：<?php echo (C("web_add")); ?></li>
    <li>电话：<?php echo (C("web_tel")); ?></li>
    <li>传真：<?php echo (C("web_fax")); ?></li>
    <li>邮箱：<?php echo (C("web_email")); ?></li>
</ul>
      </div>
      <!-- end of left -->
        
        <div id="right">
          <div class="path_title"><span class="span_left">在线留言 <b>Feedback</b></span><span class="span_right">您现在的位置：<a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>">网站首页</a> &gt; 在线留言</span></div>
          
          <form id="myform" name="myform" method="post" action="__ROOT__/?m=Feedback&a=check&g=c" onSubmit="return CheckJob()">
          <dl class="table">
              <dt>留言标题：</dt>
              <dd><input name="title" type="text" class="textwidth"/> <span style="color:#F00; font-size:15px;"> * </span></dd>
              <dt>您的姓名：</dt>
              <dd><input name="name" type="text" class="textwidth"/> <span style="color:#F00; font-size:15px;"> * </span></dd>
              <dt>联系电话：</dt>
              <dd><input name="tel" type="text" class="textwidth"/> <span style="color:#F00; font-size:15px;"> * </span></dd>
              <dt>电子邮箱：</dt>
              <dd><input name="email" type="text" class="textwidth"/></dd>
              <dt>联系地址：</dt>
              <dd><input name="add" type="text" class="textwidth"/></dd>
              <dt>留言内容：</dt>
              <dd class="biezhu"><textarea name="contents" class="areawidth"></textarea></dd>
              <dt>验证码：</dt>
              <dd><input name="code" style="width:50px;"><img class="codeimg" src="<?php echo U('Common/verify');?>" onclick='this.src=this.src+"?"+Math.random()'/></dd>
              <dt></dt>
              <dd><input type="submit" name="button" value="提交留言" class="submit_btn"/>
              <input name="reset" type="reset"  class="submit_btn" value="重置" /></dd>
              <div class="clear"></div>
          </dl>
          </form>
            
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

</body>
</html>