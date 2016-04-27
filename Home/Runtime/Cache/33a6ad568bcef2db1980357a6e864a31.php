<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_description")); ?>" />
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
<style type="text/css">
.apple a{display:block; text-decoration:none;}

.apple,.aa{ width:70%; height:30px; overflow:hidden; margin:0px auto; }
.apple a,.aa a{ width:100%; height:30px; line-height:30px; text-indent:20px; color:#000;}
.aa {word-wrap:break-word;line-height:30px;  color:#000;}
</style>
<body>
<div id="header">
    <div class="header_top">
      <div class="container">
        <div class="header_top-box">
           <div class="header-top-left">
           </div>
           <div class="cssmenu">
              <ul>
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


<div class="flash">
 <?php echo W('Flash',array('table'=>'Flash','lang'=>'c'));?>
</div>

<div id="main">
  <!-- 轮播新闻 -->
  <div class="container newswidth newswidthtop">
    <div class="content_middle_bottom">
      <div class="col-md-12 newsgundong">
        <ul class="spinner">
          <strong class="news-center">新闻中心</strong>
          <div class="apple">
          	<?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2,'lang'=>'c'));?> 
          </div>
        </ul>
      </div>
    </div>
  </div>
  <!-- 六个新闻小类 -->
  <div class="container sixnews newswidth">
    <?php echo W('List',array('table'=>'News','bid'=>2,'id'=>2,'lang'=>'c'));?>
  </div>
  <!-- 新闻中心和关于我们 -->
  <div id="center">
    <div class="index_product" style="display:none">
        <div class="product_title"><span class="span_title">产品展示</span><span class="more"><a href="<?php echo W('Listhref',array('id'=>1,'lang'=>'c'));?>"><img src="../Public/images/more.png" alt="更多产品"></a></span></div>
      <?php echo W('List',array('table'=>'Product','bid'=>1,'id'=>1,'lang'=>'c'));?>
    </div>
  </div>
    <!-- end of center -->
</div>

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
    	</div>
    </div>
  </div>
  <div class="copyright <?php if(isset($isindex)): ?>copyright_index<?php endif; ?>">
      <div>
        <p style="float:left;"><?php echo (C("web_icp")); ?> <a href="__ROOT__/c_sitemap.html" target="_blank">网站地图</a></p>
       
        <p style="float:left;margin-left:175px"><?php echo (C("web_copyright")); ?></p>
       
        <p style="margin-left:700px">地址：<?php echo (C("web_add")); ?> &nbsp;电话：<?php echo (C("web_tel")); ?> &nbsp;传真：<?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
      </div>
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
    function autoScroll(obj){
			$(obj).find("ul").animate({
				marginTop : "-39px"
			},500,function(){
				$(this).css({marginTop : "0px"}).find("li:first").appendTo(this);
			})
		}
		$(function(){
			setInterval('autoScroll(".apple")',2000);

		})
    function delHtmlTag(str){
     return str.replace(/<[^>]+>/g,"");//去掉所有的html标记
    }
</script>

</body>
</html>