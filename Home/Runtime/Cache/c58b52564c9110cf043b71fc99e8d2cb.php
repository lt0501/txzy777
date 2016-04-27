<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($article["title"]); ?></title>
<meta name="keywords" content="<?php echo ($article["keywords"]); ?>" />
<meta name="description" content="<?php echo ($article["description"]); ?>" />
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

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/product.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jq22.css" />
<script type="text/javascript" src="__PUBLIC__/js/jq22.js"></script>

<script language="javascript">var catid=<?php echo ($article["pid"]); ?>,pid=<?php echo ($articlelist["pid"]); ?>,bid=<?php echo ($articlelist["bid"]); ?>;</script>
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
	  <?php echo W('Left',array('id'=>$article['bid'],'type'=>'product','lang'=>'c'));?>

	  <ul class="contact">
    <li>地址：<?php echo (C("web_add")); ?></li>
    <li>电话：<?php echo (C("web_tel")); ?></li>
    <li>传真：<?php echo (C("web_fax")); ?></li>
    <li>邮箱：<?php echo (C("web_email")); ?></li>
</ul>
	</div>
	<!-- end of left -->

            <div id="right">
          	<div class="path_title"><span class="span_left"><?php echo ($articlelist["name"]); ?> <b><?php echo (strtoupper($articlelist["ename"])); ?></b></span><span class="span_right">您现在的位置：<a href="<?php echo W('Index',array('cnen'=>'cn','lang'=>'c'));?>">网站首页</a> &gt; <?php echo ($articlelist["name"]); ?></span></div>

               <div class="main_photo">

		<div id="preview">
			<div class="jqzoom" id="spec-n1"><img width="310" height="310" src="__ROOT__/Uploads/<?php echo ($photo[0]); ?>" jqimg="__ROOT__/Uploads/<?php echo ($photo[0]); ?>" alt="<?php echo ($article["name"]); ?>">
			</div>
			<div id="spec-n5">
			<div class="control" id="spec-left">
				<img src="__PUBLIC__/images/left.gif"  alt="Left"/>
			</div>
			<div id="spec-list">
				<ul "class=list-h">
			              <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" alt="<?php echo ($article["name"]); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="control" id="spec-right">
				<img src="__PUBLIC__/images/right.gif"  alt="Right"/>
			</div>
		    </div>
		</div>

	   </div>
	   <!-- end of main_photo -->

	        <div class="product_group">
	            <h1><?php echo ($article["name"]); ?></h1>
	            <ul>
	                <li><?php echo ($article["property1"]); ?></li>
	                <li><?php echo ($article["property2"]); ?></li>
	                <li><?php echo ($article["property3"]); ?></li>
	                <li><?php echo ($article["property4"]); ?></li>
	                <li>产品描述：<?php echo (mb_substr($article["description"],0,200,'utf-8')); ?></li>
	                <li>
	                	<form id="orderform" method="post" action="<?php echo W('Listhref',array('link'=>'/Inquiry/','lang'=>'c'));?>">
	                	<input type="hidden" name="ordername" value="<?php echo ($article["name"]); ?>" />
	                	<a href="javascript:orderform.submit();"><img src="../Public/images/order.gif" alt="在线订购" /></a>
	                	<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($online_qq["$key"]); ?>&site=qq&menu=yes"><img src="__PUBLIC__/images/qq.gif" height="30" width="110" alt="QQ" /></a>
	                	<!-- <a href="#"><img src="__PUBLIC__/images/weixin.jpg" height="30" width="30" alt="微信" /></a> -->
	                	<a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8"><img SRC="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8" alt="点击联系我"></a>
	                	</form>
	                </li>
	            </ul>
	        </div>
	        <div class="clear"></div>
			<!-- 产品细节tab -->
			<div class="lanrenzhijia">
				<div class="title cf">
				    <ul class="title-list fr cf ">
				      <li class="on">产品介绍</li>
				      <li>规格参数</li>
				      <li>产品优势</li>
				      <li>典型应用</li>
				      <li>订购信息</li>
				      <li>产品提问</li>
				      <p><b></b></p>
				    </ul>
				</div>
				<div class="product-wrap">
			    <!--产品介绍-->
				    <div class="product show">
				      <ul class="cf">
				      <!-- 模板 -->
				        <!-- <li class="ml0"> <a href="#" class="imgwrap"> <img src="__PUBLIC__/images/about.gif"> </a>
				          <p class="mt10"> <a href="#"><?php echo ($article["contents"]); ?> </a></p>
				          <p class="pb10">产品介绍</p>
				        </li> -->
				        <li class="ml0">
				          <p class="mt10"> <a href="#"><?php echo ($article["contents"]); ?> </a></p>
				        </li>
				      </ul>
				    </div>
				    <!--规格参数-->
				    <div class="product">
				      <ul class="cf">
				        <li class="ml0">
				          <p class="mt10"> <a href="#"> <?php echo ($article["specification"]); ?> </a></p>
				        </li>
				      </ul>
				    </div>
				    <!--产品优势-->
				    <div class="product">
				      <ul class="cf">
				        <li class="ml0">
				          <p class="mt10"> <a href="#"><?php echo ($article["productadvantages"]); ?></a></p>
				        </li>
				      </ul>
				    </div>
				    <!--典型应用-->
				    <div class="product">
				      <ul class="cf">
				        <li class="ml0">
				          <p class="mt10"> <a href="#"><?php echo ($article["typicalapplication"]); ?></a></p>
				        </li>
				      </ul>
				    </div>
				    <!--订购信息-->
				    <div class="product">
				      <ul class="cf">
				        <li class="ml0">
				          <p class="mt10"> <a href="#"><?php echo ($article["productorder"]); ?></a></p>
				        </li>
				      </ul>
				    </div>
				    <!-- 产品提问 -->
				    <div class="product">
				      <ul class="cf">
				        <li class="ml0">
				          <p class="mt10"> <a href="#"><?php echo ($article["productquestion"]); ?></a></p>
				        </li>
				      </ul>
				    </div>
				</div>
			</div>


	        <div class="point">
	              <span class="to_prev"><?php echo ($prevnext["prev"]); ?></span>
	              <span class="to_next"><?php echo ($prevnext["next"]); ?></span>
	        </div>

            <div class="related_product">
                <h3 class="related_title">相关产品</h3>
                <ul class="products_list products_related_list">
                <?php if(is_array($related)): $i = 0; $__LIST__ = array_slice($related,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'c'));?>" target="_blank"><img name="picautozoom" class="img_border" src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" width="176" height="176" alt="<?php echo ($vo["name"]); ?>"/></a>
                    <p><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product','lang'=>'c'));?>" title="<?php echo ($vo["name"]); ?>" target="_blank"><?php echo (mb_substr($vo["name"],0,28,'utf-8')); ?></a></p>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clear"></div>
            </div>

        </div>
        <!-- end of right -->

        <div class="clear"></div>
    </div>
    <!-- end of center -->

</div>
<!-- end of main -->

<SCRIPT type=text/javascript>
	$(function(){
	   $(".jqzoom").jqueryzoom({
			xzoom:378,
			yzoom:378,
			offset:10,
			position:"right",
			preload:1,
			lens:1
		});
		$("#spec-list").jdMarquee({
			deriction:"left",
			width:305,
			height:56,
			step:1,
			speed:4,
			delay:10,
			control:true,
			_front:"#spec-right",
			_back:"#spec-left"
		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});
	})
</SCRIPT>
<script type="text/javascript" src="__PUBLIC__/js/product_lib.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/product_zoom.js"></script>

<script type="text/javascript" src="__PUBLIC__/js/picAutoZoom.js"></script>
<script type="text/javascript" language="javascript">
    $.ajaxSetup({
        timeout: 300000
    });
</script>

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