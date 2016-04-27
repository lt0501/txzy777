<?php if (!defined('THINK_PATH')) exit();?><!--Customer service-->
<?php if(C("is_online")!= 0): ?><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/eonline.css" />
    <div id="cmsFloatPanel">
         <div class="ctrolPanel">
               <a class="arrow" href="#"><span>Top</span></a>
               <a class="service" href="#"><span>Customer Service</span></a>
               <a class="message" href="#"><span>Contact</span></a>
               <a class="qrcode" href="#"><span>Scanning</span></a>
               <a class="arrow" href="#"><span>footer</span></a>
         </div>
         <div class="servicePanel">
              <div class="servicePanel-inner">
                   <div class="serviceMsgPanel">
                        <div class="serviceMsgPanel-hd"><a href="#"><span>Close</span></a></div>
                        <div class="serviceMsgPanel-bd">
                          <!--QQ-->
                          <?php if(C("qq_account")!= ''): if(is_array($online_qq)): foreach($online_qq as $key=>$vo): ?><div class="msggroup">
                                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($online_qq["$key"]); ?>&site=qq&menu=yes"><img class="qqimg" src="http://wpa.qq.com/pa?p=2:<?php echo ($online_qq["$key"]); ?>:52" alt="QQ online"/><?php echo ($key); ?></a>
                                </div><?php endforeach; endif; endif; ?>
                          <!--MSN-->  
                          <?php if(C("msn_account")!= ''): if(is_array($online_msn)): foreach($online_msn as $key=>$vo): ?><div class="msggroup">
                                <a href="msnim:chat?contact=<?php echo ($online_msn["$key"]); ?>" target="blank"><img class="qqimg" src="__PUBLIC__/images/msn.jpg" alt="msn online"/> <?php echo ($key); ?></a>
                               </div><?php endforeach; endif; endif; ?>
                          <!--SKYPE--> 
                          <?php if(C("skype_account")!= ''): if(is_array($online_skype)): foreach($online_skype as $key=>$vo): ?><div class="msggroup">
                                <a href="skype:<?php echo ($online_skype["$key"]); ?>?chat"><img  class="qqimg" src="__PUBLIC__/images/skype.gif" alt="Skype online"> <?php echo ($key); ?></a>
                              </div><?php endforeach; endif; endif; ?>
                          <!--taobao--> 
                          <?php if(C("taobao_account")!= ''): if(is_array($online_taobao)): foreach($online_taobao as $key=>$vo): ?><div class="msggroup">
                                <a target=blank href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8"><img SRC="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8" alt="Contact us"></a>
                               </div><?php endforeach; endif; endif; ?>
                          <!--1688--> 
                          <?php if(C("1688_account")!= ''): if(is_array($online_1688)): foreach($online_1688 as $key=>$vo): ?><div class="msggroup">
                                <a target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" ><img src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" alt="Contact us"/></a>
                              </div><?php endforeach; endif; endif; ?>
                          <!--alibaba-->
                          <?php if(C("alibaba_account")!= ''): if(is_array($online_alibaba)): foreach($online_alibaba as $key=>$vo): ?><div class="msggroup">
                                <a class="alitalk-link" data-uid="<?php echo ($online_alibaba["$key"]); ?>" target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8"><img class="qqimg" src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8" alt="Contact us"/> <?php echo ($key); ?></a>
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
                         <div class="formPanel-hd"><span style="float:left">Contact us</span><a href="#"><span>Close</span></a></div>
                         <div class="formPanel-bd">
                            <p>Company: <?php echo (C("web_ename")); ?></p>
                            <p>Contact: <?php echo (C("web_econtacts")); ?></p>
                            <p>Tel: <?php echo (C("web_tel")); ?></p>
                            <p>Phone: <?php echo (C("web_phone")); ?></p>
                            <p>E-mail: <?php echo (C("web_email")); ?></p>
                            <p>Address: <?php echo (C("web_eadd")); ?></p>
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
                         <div class="codePanel-hd"><span style="float:left">Scan the qr code</span><a href="#"><span>close</span></a></div>
                         <div class="codePanel-bd">
                              <img src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" alt="Qr code"/>
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