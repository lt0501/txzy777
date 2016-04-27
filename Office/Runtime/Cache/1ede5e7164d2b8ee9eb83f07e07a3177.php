<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<SCRIPT src="../Public/js/common.js" type="text/javascript"></SCRIPT>
<SCRIPT src="../Public/js/quickView.js" type="text/javascript"></SCRIPT>
</HEAD> 
<BODY>
<DIV class="BodyRight">
<DIV class="RightDetill">
<UL>
  <LI class="Green"><a href="<?php echo U('Index/main');?>" style="font-size:13px;" target="main">返回后台首页</A></LI>
  <LI class="Black" style="font-size:13px; color:#12793b;">提示：需要修改LOGO或二维码图片时，请先点击删除该图片，再进行其它信息的修改。</LI>
  </UL>
</DIV>
<DIV class="PageContent">
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD>
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>

          <TD width="85" align="center" class="Move" id="setting1">
            <A onClick="javascript:settingselect('1')" href="javascript:void(0);">中文信息</A>
          </TD>
          <TD width="5" align="center"><IMG src="../Public/images/tiao.gif"></TD>

          <TD width="85" align="center" class="Out" id="setting2">
            <A onClick="javascript:settingselect('2')" href="javascript:void(0);">英文信息</A>
          </TD>
          <TD width="5" align="center"><IMG src="../Public/images/tiao.gif"></TD>

          <TD width="85" align="center" class="Out" id="setting3">
            <A onClick="javascript:settingselect('3')" href="javascript:void(0);">显示设置</A>
          </TD>
          <TD width="5" align="center"><IMG src="../Public/images/tiao.gif"></TD>

          <TD width="85" align="center" class="Out" id="setting4">
            <A onClick="javascript:settingselect('4')" href="javascript:void(0);">邮件设置</A>
          </TD>
          <TD width="5" align="center"><IMG src="../Public/images/tiao.gif"></TD>

          <TD width="85" align="center" class="Out" id="setting5">
            <A onClick="javascript:settingselect('5')" href="javascript:void(0);">客服设置</A>
          </TD>
          <TD align="left" class="LineRight" style="padding-left: 10px;"></TD>
        </TR>

      </TBODY>
    </TABLE>
  </TD>
</TR>

  <TR>
    <TD class="LineRightBlue">
      <TABLE width="95%" style="margin-left: 20px;" border="0" cellspacing="0" 
      cellpadding="0">
        <TBODY>
        <TR>
          <TD width="88%" height="24">网站管理 &gt; 网站设置</TD>
          <TD width="12%" height="24" 
  align="right"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<FORM action="<?php echo U('upconfig');?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
<DIV class="PageContent">
<TABLE width="100%" class="ListCategory" style="margin-top: 10px;" border="0" 
cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD style="border: currentColor;">
      <DIV id="settingBox1">
      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
        <TBODY>

        <TR class="firstalt">
          <TD width="140" style="padding-left: 5px;"><SPAN>公司名称</SPAN></TD>
          <TD width="1188" style="padding-top: 5px; padding-bottom: 5px;"><input name="web_name" value="<?php echo (C("web_name")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD></TR>

        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>SEO标题</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="seo_title" value="<?php echo (C("seo_title")); ?>" type="text" class="FormSmall" style="width: 320px;">
          </TD></TR>

        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>SEO关键字</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="seo_keywords" value="<?php echo (C("seo_keywords")); ?>" type="text" class="FormSmall" style="width: 320px;">
          </TD></TR>

        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>SEO描述</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="seo_description" class="FormSmall" style="width: 400px; height: 90px;"><?php echo (C("seo_description")); ?></textarea>
         </TD></TR>

        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>网站LOGO</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;">
            <?php if(C("web_logo")== ''): ?><input type='file' name='web_logo'>
            <?php else: ?>
              <img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" width="120" height="60"/>
              <a href="__APP__?m=config&a=dellogo&name=<?php echo (C("web_logo")); ?>&type=logo">删除该图片</a><?php endif; ?>
          </TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>网站域名</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_url" value="<?php echo (C("web_url")); ?>" type="text" class="FormSmall" style="width: 320px;">
            					 </TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>联系人</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_contacts" value="<?php echo (C("web_contacts")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>公司邮箱</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_email" value="<?php echo (C("web_email")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>联系电话</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_tel" value="<?php echo (C("web_tel")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>联系手机</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_phone" value="<?php echo (C("web_phone")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>公司传真</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_fax" value="<?php echo (C("web_fax")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>联系地址</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_add" value="<?php echo (C("web_add")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>备案号</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_icp" value="<?php echo (C("web_icp")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>统计代码</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="web_count" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_count")); ?></textarea></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>分享代码</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="web_share" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_share")); ?></textarea></TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>版权信息</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="web_copyright" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_copyright")); ?></textarea></TD></TR>
</TBODY></TABLE></DIV>


      <DIV class="close" id="settingBox2">
      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
        <TBODY>

        <TR class="firstalt">
          <TD width="140" style="padding-left: 5px;"><SPAN>公司名称 (英)</SPAN></TD>
          <TD width="1188" style="padding-top: 5px; padding-bottom: 5px;"><input name="web_ename" value="<?php echo (C("web_ename")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD></TR>

        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>SEO标题 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="seo_etitle" value="<?php echo (C("seo_etitle")); ?>" type="text" class="FormSmall" style="width: 320px;">
          </TD></TR>

        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>SEO关键字 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="seo_ekeywords" value="<?php echo (C("seo_ekeywords")); ?>" type="text" class="FormSmall" style="width: 320px;">
          </TD></TR>

        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>SEO描述 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="seo_edescription" class="FormSmall" style="width: 400px; height: 90px;"><?php echo (C("seo_edescription")); ?></textarea>
         </TD></TR>

        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>联系人 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_econtacts" value="<?php echo (C("web_econtacts")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>

        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>联系地址 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="web_eadd" value="<?php echo (C("web_eadd")); ?>" type="text" class="FormSmall" style="width: 220px;"></TD></TR>

        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>分享代码 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="web_eshare" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_eshare")); ?></textarea></TD></TR>

        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>版权信息 (英)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><textarea name="web_ecopyright" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_ecopyright")); ?></textarea></TD></TR>
</TBODY></TABLE></DIV>


      <DIV class="close" id="settingBox3">
      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>默认首页设置</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="cnen" type="radio" value="cn" <?php if(C("cnen")== 'cn' ): ?>checked="checked"<?php endif; ?>> 中文 &nbsp;
          <input name="cnen" type="radio" value="en" <?php if(C("cnen")== 'en' ): ?>checked="checked"<?php endif; ?>> 英文</TD></TR>
        <TR class="firstalt">
          <TD width="14%" style="padding-left: 5px;"><SPAN>首页产品显示数量</SPAN></TD>
          <TD width="86%" style="padding-top: 5px; padding-bottom: 5px;"><input name="index_num" value="<?php echo (C("index_num")); ?>" type="text" class="FormSmall" style="width:100px;"> 个</TD></TR>
          <TD width="13%" style="padding-left: 5px;"><SPAN>首页TAGS标签数量</SPAN></TD>
          <TD width="87%" style="padding-top: 5px; padding-bottom: 5px;"><input name="index_tags" value="<?php echo (C("index_tags")); ?>" type="text" class="FormSmall" style="width:100px;"> 个</TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>列表页产品数量</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="list_pronum" value="<?php echo (C("list_pronum")); ?>" type="text" class="FormSmall" style="width:100px;"> 个 / 页</TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>列表页新闻数量</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="list_newnum" value="<?php echo (C("list_newnum")); ?>" type="text" class="FormSmall" style="width:100px;"> 条 / 页</TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>列表页图片数量</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="list_photonum" value="<?php echo (C("list_photonum")); ?>" type="text" class="FormSmall" style="width:100px;"> 个 / 页</TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>列表页下载数量</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="list_downnum" value="<?php echo (C("list_downnum")); ?>" type="text" class="FormSmall" style="width:100px;"> 个 / 页</TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>是否显示google翻译</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="is_translate" type="radio" value="1" <?php if(C("is_translate")== 1): ?>checked="checked"<?php endif; ?>> 是 &nbsp;
          <input name="is_translate" type="radio" value="0" <?php if(C("is_translate")== 0): ?>checked="checked"<?php endif; ?>> 否</TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>&nbsp;</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;">&nbsp;</TD></TR>
          </TBODY></TABLE></DIV>



      <DIV class="close" id="settingBox4">
      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR class="firstalt">
          <TD width="150" style="padding-left: 5px;"><SPAN>是否开启邮件通知</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;">
          <input name="is_email" type="radio" value="1" <?php if(C("is_email")== 1): ?>checked="checked"<?php endif; ?>> 是 &nbsp;
          <input name="is_email" type="radio" value="0" <?php if(C("is_email")== 0): ?>checked="checked"<?php endif; ?>> 否
          </TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>服务器端口</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="email_port" value="<?php echo (C("email_port")); ?>" type="text" class="FormSmall" style="width: 100px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>邮箱服务器地址</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="email_host" value="<?php echo (C("email_host")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>邮箱账号</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="email_username" value="<?php echo (C("email_username")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>邮箱密码</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="email_password" value="<?php echo (C("email_password")); ?>" type="password" class="FormSmall" style="width: 250px;"></TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>发送人名称</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="email_fromName" value="<?php echo (C("email_fromName")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD></TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN style="color:#F30">接收通知的邮箱</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="email_to" value="<?php echo (C("email_to")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>发送方式</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;">
            <select name="send_way" style="height:28px;">
              <option value="1" <?php if((C("send_way")) == "1"): ?>selected="selected"<?php endif; ?>>smtp</option>
              <option value="2" <?php if((C("send_way")) == "2"): ?>selected="selected"<?php endif; ?>>mail</option>
              <option value="3" <?php if((C("send_way")) == "3"): ?>selected="selected"<?php endif; ?>>phpmailer</option>
            </select>
          </TD></TR>
          </TBODY></TABLE></DIV>
                
            
            
      <DIV class="close" id="settingBox5">
      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR class="firstalt">
          <TD style="padding:8px;2px;color:#F30;">
          每个账号之前用半角状态下的逗号隔开。
	</TD></TR></TBODY></TABLE>
      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR class="secondalt">
          <TD width="150" style="padding-left: 5px;"><SPAN>是否开启在线客服</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="is_online" type="radio" value="1" <?php if(C("is_online")== 1): ?>checked="checked"<?php endif; ?>> 是 &nbsp;
          <input name="is_online" type="radio" value="0" <?php if(C("is_online")== 0): ?>checked="checked"<?php endif; ?>> 否</TD></TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>MSN号码</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="msn_account" value="<?php echo (C("msn_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>MSN显示名称</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="msn_name" value="<?php echo (C("msn_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>Skype帐号</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="skype_account" value="<?php echo (C("skype_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>Skype显示名称</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="skype_name" value="<?php echo (C("skype_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>QQ号码</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="qq_account" value="<?php echo (C("qq_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>QQ显示名称</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="qq_name" value="<?php echo (C("qq_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>淘宝旺旺账号</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="taobao_account" value="<?php echo (C("taobao_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>阿里巴巴(国内版)</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="1688_account" value="<?php echo (C("1688_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="secondalt">
          <TD style="padding-left: 5px;"><SPAN>阿里巴巴(国际版)账号</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="alibaba_account" value="<?php echo (C("alibaba_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
          </TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>阿里巴巴(国际版)名称</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;"><input name="alibaba_name" value="<?php echo (C("alibaba_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
        </TR>
        <TR class="firstalt">
          <TD style="padding-left: 5px;"><SPAN>二维码图片</SPAN></TD>
          <TD style="padding-top: 5px; padding-bottom: 5px;">
            <?php if(C("web_qrcode")== ''): ?><input type='file' name='web_qrcode'>
            <?php else: ?>
              <img src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" width="60" height="60"/>
              <a href="__APP__?m=config&a=dellogo&name=<?php echo (C("web_qrcode")); ?>&type=qrcode">删除该图片</a><?php endif; ?>
          </TD></TR>
          </TBODY></TABLE></DIV>
          </TD></TR>
        </TBODY>
      </TABLE>
<TABLE width="100%" height="30" style="margin-top: 10px;" border="0" 
cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD align="left" style="padding-left:114px;">
	   <INPUT class="bginput" type="submit" value=" 确定提交 ">
    </TD></TR></TBODY></TABLE></FORM></DIV></DIV>
<SCRIPT type="text/javascript">

function settingselect(id){
	document.getElementById('settingBox1').className="close";
	document.getElementById('settingBox2').className="close";
	document.getElementById('settingBox3').className="close";
	document.getElementById('settingBox4').className="close";
      document.getElementById('settingBox5').className="close";
	document.getElementById('setting1').className="Out";
	document.getElementById('setting2').className="Out";
	document.getElementById('setting3').className="Out";
	document.getElementById('setting4').className="Out";
      document.getElementById('setting5').className="Out";
	
	document.getElementById('setting'+id).className="Move";
	document.getElementById('settingBox'+id).className="";
}

</SCRIPT>
 
<DIV style="clear: both; margin-bottom: 30px;"></DIV></BODY></HTML>