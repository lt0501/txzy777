/*蓝科企业网站系统PHP版
http://www.lankecms.com*/

$(function(){
  //默认左右滚动
  $("#s1").xslider({
    unitdisplayed:7,  //可视的单位个数
    movelength:1,   //要移动的单位个数
    unitlen:129,  //li宽度+padding
    autoscroll:2000  //自动移动间隔时间 
  }); 
})

var timeout         = 500;
var closetimer    = 0;
var ddmenuitem      = 0;

function dropmenu_open(){
  dropmenu_canceltimer();
  dropmenu_close();
  ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');
}

function dropmenu_close(){ 
  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');
}

function dropmenu_timer(){ 
  closetimer = window.setTimeout(dropmenu_close, timeout);
}

function dropmenu_canceltimer(){ 
  if(closetimer){ 
    window.clearTimeout(closetimer);
    closetimer = null;
  }
}

$(document).ready(function(){
  $('#nav_ul_big > li').bind('mouseover', dropmenu_open);
  $('#nav_ul_big > li').bind('mouseout',  dropmenu_timer);
});

document.onclick = dropmenu_close;