<?php if (!defined('THINK_PATH')) exit();?><!--客服面板-->
<?php if(C("is_online")!= 0): ?><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/online.css" />
    <div id="cmsFloatPanel">
         <div class="ctrolPanel">
               <a class="arrow" href="#"><span>顶部</span></a>
               <a class="service" href="#"><span>客服</span></a>
               <a class="message" href="#"><span>联系</span></a>
               <a class="qrcode" href="#"><span>扫描</span></a>
               <a class="arrow" href="#"><span>底部</span></a>
         </div>
         <div class="servicePanel">
              <div class="servicePanel-inner">
                   <div class="serviceMsgPanel">
                        <div class="serviceMsgPanel-hd"><a href="#"><span>关闭</span></a></div>
                        <div class="serviceMsgPanel-bd">
                          <!--在线QQ-->
                          <?php if(C("qq_account")!= ''): if(is_array($online_qq)): foreach($online_qq as $key=>$vo): ?><div class="msggroup">
                                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($online_qq["$key"]); ?>&site=qq&menu=yes"><img class="qqimg" src="http://wpa.qq.com/pa?p=2:<?php echo ($online_qq["$key"]); ?>:52" alt="QQ在线客服"/><?php echo ($key); ?></a>
                                </div><?php endforeach; endif; endif; ?>
                          <!--在线MSN-->  
                          <?php if(C("msn_account")!= ''): if(is_array($online_msn)): foreach($online_msn as $key=>$vo): ?><div class="msggroup">
                                <a href="msnim:chat?contact=<?php echo ($online_msn["$key"]); ?>" target="blank"><img class="qqimg" src="__PUBLIC__/images/msn.jpg" alt="MSN在线客服"/> <?php echo ($key); ?></a>
                               </div><?php endforeach; endif; endif; ?>
                          <!--在线SKYPE--> 
                          <?php if(C("skype_account")!= ''): if(is_array($online_skype)): foreach($online_skype as $key=>$vo): ?><div class="msggroup">
                                <a href="skype:<?php echo ($online_skype["$key"]); ?>?chat"><img  class="qqimg" src="__PUBLIC__/images/skype.gif" alt="SKYPE在线客服"> <?php echo ($key); ?></a>
                              </div><?php endforeach; endif; endif; ?>
                          <!--淘宝旺旺--> 
                          <?php if(C("taobao_account")!= ''): if(is_array($online_taobao)): foreach($online_taobao as $key=>$vo): ?><div class="msggroup">
                                <a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8"><img SRC="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8" alt="点击联系我"></a>
                               </div><?php endforeach; endif; endif; ?>
                          <!--旺旺国内版--> 
                          <?php if(C("1688_account")!= ''): if(is_array($online_1688)): foreach($online_1688 as $key=>$vo): ?><div class="msggroup">
                                <a target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" ><img src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" alt="点击联系我"/></a>
                              </div><?php endforeach; endif; endif; ?>
                          <!--旺旺国际版-->
                          <?php if(C("alibaba_account")!= ''): if(is_array($online_alibaba)): foreach($online_alibaba as $key=>$vo): ?><div class="msggroup">
                                <a class="alitalk-link" data-uid="<?php echo ($online_alibaba["$key"]); ?>" target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8"><img class="qqimg" src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8" alt="点击联系我"/> <?php echo ($key); ?></a>
                               </div><?php endforeach; endif; endif; ?>
                          
                        </div>
                        <div class="serviceMsgPanel-ft"></div>
                    </div>
                    <div class="arrowPanel">
                         <div class="arrow02"></div>
                    </div>
              </div>
         </div>
         <div class="messagePanel">
              <div class="messagePanel-inner">
                   <div class="formPanel">
                         <div class="formPanel-hd"><span style="float:left">联系我们</span><a href="#"><span>关闭</span></a></div>
                         <div class="formPanel-bd">
                            <p>公司名称：<?php echo (C("web_name")); ?></p>
                            <p>联系人：<?php echo (C("web_contacts")); ?></p>
                            <p>电 话：<?php echo (C("web_tel")); ?></p>
                            <p>手 机：<?php echo (C("web_phone")); ?></p>
                            <p>邮 箱：<?php echo (C("web_email")); ?></p>
                            <p>地 址：<?php echo (C("web_add")); ?></p>
                         </div>

                   </div>
                   <div class="arrowPanel">
                        <div class="arrow01"></div>
                        <div class="arrow02"></div>
                   </div>
              </div>
         </div>
         <?php if(C("web_qrcode")!= ''): ?><div class="qrcodePanel">
              <div class="qrcodePanel-inner">
                   <div class="codePanel">
                         <div class="codePanel-hd"><span style="float:left">用手机扫描二维码</span><a href="#"><span>关闭</span></a></div>
                         <div class="codePanel-bd">
                              <img src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" alt="二维码"/>
                         </div>
                   </div>
                   <div class="arrowPanel">
                        <div class="arrow01"></div>
                        <div class="arrow02"></div>
                   </div>
              </div>
         </div><?php endif; ?>
    </div>
    <script type="text/javascript" src="__PUBLIC__/js/online.js"></script><?php endif; ?>