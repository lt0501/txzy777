
    $(function(){

        // cms客服浮动面板
        
        // 顶部底部
        if($("#cmsFloatPanel")){
	  $("#cmsFloatPanel > .ctrolPanel > a.arrow").eq(0).click(function(){$("html,body").animate({scrollTop :0}, 800);return false;});
	  $("#cmsFloatPanel > .ctrolPanel > a.arrow").eq(1).click(function(){$("html,body").animate({scrollTop : $(document).height()}, 800);return false;});

	  var objServicePanel = $("#cmsFloatPanel > .servicePanel");
	  var objMessagePanel = $("#cmsFloatPanel > .messagePanel");
	  var objQrcodePanel = $("#cmsFloatPanel > .qrcodePanel");
	  var w_s = objServicePanel.outerWidth();
	  var w_m = objMessagePanel.outerWidth();
	  var w_q = objQrcodePanel.outerWidth();

	  // 客服
	  $("#cmsFloatPanel .ctrolPanel > a.service").bind({
		  click : function(){return false;},
		  mouseover : function(){
			  objMessagePanel.stop().hide();objQrcodePanel.stop().hide();
			  if(objServicePanel.css("display") == "none"){
			     objServicePanel.css("width","0px").show();
			     objServicePanel.animate({"width" : w_s + "px"},600);
			  }
			  return false;
		  }
	  });
	  $(".servicePanel-inner",objServicePanel).bind({
		  mouseout : function(){
			  objServicePanel.animate({"width" : "0px"},600,function(){
				objServicePanel.hide();
			  });
			  return false;
		  }
	  });

	  // 联系
	  $("#cmsFloatPanel > .ctrolPanel > a.message").bind({
		  click : function(){return false;},
		  mouseover : function(){
			  objServicePanel.stop().hide();objQrcodePanel.stop().hide();
			  if(objMessagePanel.css("display") == "none"){
			     objMessagePanel.css("width","0px").show();
			     objMessagePanel.animate({"width" : w_m + "px"},600);
			  }
			  return false;
		  }
	  });
	  $(".messagePanel-inner",objMessagePanel).bind({
		  mouseout : function(){
			  objMessagePanel.animate({"width" : "0px"},600,function(){
				objMessagePanel.stop().hide();  
			  });
			  return false;
		  }
	  });

	  // 扫描
	  $("#cmsFloatPanel > .ctrolPanel > a.qrcode").bind({
		  click : function(){return false;},
		  mouseover : function(){
			  objServicePanel.stop().hide();objMessagePanel.stop().hide();
			  if(objQrcodePanel.css("display") == "none"){
			     objQrcodePanel.css("width","0px").show();
			     objQrcodePanel.animate({"width" : w_q + "px"},600);
			  }
			  return false;
		  }
	  });
	  $(".qrcodePanel-inner",objQrcodePanel).bind({
		  mouseout : function(){
			  objQrcodePanel.animate({"width" : "0px"},600,function(){
				objQrcodePanel.stop().hide();  
			  });
			  return false;
		  }
	  });

        }
        
    });