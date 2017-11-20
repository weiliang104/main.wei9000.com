<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 1 : intval($cid); ?>
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head>
<?php echo GetHeader(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="location" content="province=广州;city=广州">
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>
</head>
<body>
<?php include_once'menu.html' ?>
</div>
<!-- E Nav -->
<!-- S Banner -->
<div class="banner rel" id="focus">
    <ul class="banner_img abs">
        <?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=30 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
            ?>
            <li><a href="<?php echo $gourl; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" /></a></li>
            <?php
            }
            ?>

    </ul>
    <ul class="banner_num abs">
        <li class="current">1</li>
        <li>2</li>
        <li>3</li>
    </ul>
	</div>
</div>
<!-- E Banner -->
<div class="space20"></div>
<!-- S 专业领域 -->
<div class="wrap services">
  	<h2 class="fw c999">专业服务</h2>
    <div class="space15"></div>
    <ul>
    	<li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_05.png" title="" alt="" />
            <a href="/html/htmm/">企业公众号运营推广、托管</a>
        </li>
        <li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_08.png" title="" alt="" />
            <a href="/product.html#a">企业微官网</a>
        </li>
        <li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_12.png" title="" alt="" />
            <a href="/product.html#b">企业微商城</a>
        </li>
        <li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_16.png" title="" alt="" />
            <a href="/product.html#c">微信商城分销系统</a>
        </li>
        <li class="no_margin">
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_21.png" title="" alt="" />
            <a href="/product.html#d">微信打印机</a>
        </li>
    </ul>
</div>
<!-- E 专业领域 -->
<div class="space15"></div>
<!-- S container -->
<div class="container">
	<div class="wrap">
    	<!-- S 动态 -->
        <div class="fl mr20 mt20 w320 ">
            <h2 class="fw fb f18 c333 mb20"><a href="/news.html">微信营销动态</a></h2>
            <div class="con_l_bg">
            	<div class="m15">

                    <ul>
	    			                        <li><a class="fl c333" href="/html/2015/lsdt_1113/138.html">2个月付清80余万货款</a><span class="fr c999">2015-11-13</span></li>
			                        <li><a class="fl c333" href="/html/2015/lsdt_1113/137.html">3个月付清200余万货款</a><span class="fr c999">2015-11-13</span></li>
			                        <li><a class="fl c333" href="/html/2015/lsdt_0925/136.html">790万的债权转让合同纠纷在天津市滨海新</a><span class="fr c999">2015-09-25</span></li>
			                        <li><a class="fl c333" href="/html/2015/lsdt_0925/135.html">52万买卖合同纠纷案件在辽宁省抚顺市新</a><span class="fr c999">2015-09-25</span></li>
					                    </ul>
                </div>                
            </div>
        </div>
        <!-- E 动态 -->
        <!-- S 介绍 -->
        <div class="fr w660 mt20">
            <h2 class="fw fb f18 c333 mb20">微玖仟介绍</h2>            
            <div class="con_r_bg">
            	<div class="m15">
                	<!-- S Show -->
                    <!-- E Show -->
                    <!-- S con_r_text -->
                    <div class="con_r_text">
							                    	<p class="con_r_text"><?php echo Info(28); ?><a href="/about.html">更多</a></p>
							                    </div>
                    <!-- E con_r_text -->
                </div>
            </div>
        </div>
        <!-- E 介绍 -->
    </div>
</div>
<!-- E container -->
<div class="space20"></div>
<div class="wrap">
	<!-- S Main Left -->
	<div class="fl main_l mr20">
    <!-- 	<div class="con_list">
        	<h2 class="fw f16 cfff pl10"><a href="/html/tpxw/" style="color:white">营销产品</a></h2>
            <ul>
                <?php

                $ctnid = $dosql->GetTableRow('#@__infolist');
                $num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;

                $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid= 26 OR parentstr LIKE '%,26,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",6);
                while($row = $dosql->GetArray())
                {
                    if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
                    else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
                    else $gourl = $row['linkurl'];
                    $loong=$row['classid'];
                    if($loong%2==0)$st="dhboxleft";
                    else $st="dhboxright";
            ?>
                                    <li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],16); ?></a></li>
                                    <?php } ?>


					            </ul>
        </div> -->
        <div class="con_list">
        	<h2 class="fw f16 cfff pl10">成功案例</h2>
            <ul>
				               <?php

                $ctnid = $dosql->GetTableRow('#@__infolist');
                $num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;

                $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid= 31 OR parentstr LIKE '%,31,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",15);
                while($row = $dosql->GetArray())
                {
                    if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
                    else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
                    else $gourl = $row['linkurl'];
                    $loong=$row['classid'];
                    if($loong%2==0)$st="dhboxleft";
                    else $st="dhboxright";
            ?>
                                    <li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],16); ?></a></li>
                                    <?php } ?>
						            </ul>
        </div>
    </div>
    <!-- E Main Left --> 
    <!-- S Main Right -->    
    <div class="fr main_r">
          <h2 class="fw f16 cfff">干货分享</h2>
          <div class="fl successCase">
            <ul>
                                           <?php

                $ctnid = $dosql->GetTableRow('#@__infolist');
                $num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;

                $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid= 4 OR parentstr LIKE '%,4,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",15);
                while($row = $dosql->GetArray())
                {
                    if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
                    else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
                    else $gourl = $row['linkurl'];
                    $loong=$row['classid'];
                    if($loong%2==0)$st="dhboxleft";
                    else $st="dhboxright";
            ?>
                                    <li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],18); ?></a></li>
                                    <?php } ?>

					              </ul>          
          </div>
          <div class="fr lawyerWorks">

                <ul>
                <?php
                   
$dosql->Execute("SELECT * FROM `#@__infolist` WHERE (classid=4 or parentstr LIKE '%,4,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 16,15");
while($row = $dosql->GetArray())
{        
    if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
                    else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
                    else $gourl = $row['linkurl'];
                    // $loong=$row['classid'];
                    // if($loong%2==0)$st="dhboxleft";
                    // else $st="dhboxright";
        // if($row['linkurl'] == '') $gourl = 'newsshow.php?cid='.$row['classid'].'&amp;id='.$row['id'];
        // else $gourl = $row['linkurl'];

                // $ctnid = $dosql->GetTableRow('#@__infolist');
                // $num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;

                // $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid= 4 OR parentstr LIKE '%,4,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC"15,30");
                // while($row = $dosql->GetArray())
                // {
                    // if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
                    // else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
                    // else $gourl = $row['linkurl'];
                    // $loong=$row['classid'];
                    // if($loong%2==0)$st="dhboxleft";
                    // else $st="dhboxright";
            ?>
                                    <li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],18); ?></a></li>
                                    <?php } ?>


                                </ul>
<!-- 	    			                <li><a class="fl" href="/html/2015/lswj_0829/131.html">解析与担保法相关的42个实务问题总结</a><span class="fr c999">2015-08-29</span></li>
			                <li><a class="fl" href="/html/2015/lswj_0528/119.html">保理纠纷8大典型裁判依据汇总</a><span class="fr c999">2015-05-28</span></li>
			                <li><a class="fl" href="/html/2015/lswj_0526/118.html">全国民事审判工作会议纪要（2015年4月征</a><span class="fr c999">2015-05-26</span></li>
			                <li><a class="fl" href="/html/2015/lswj_0520/115.html">民事案件庭审质证与法庭辩论之技巧方略</a><span class="fr c999">2015-05-20</span></li>
			                <li><a class="fl" href="/html/2015/lswj_0516/112.html">最高院关于车辆挂靠中的劳动关系最新认</a><span class="fr c999">2015-05-16</span></li>
 -->					              </ul>  
          </div>
          <div class="cl"></div>
          <div class="min_banner"><a><img src="/skins/images/wycms/min-banner.jpg" width="730" height="112" title="天津祝令常律师，咨询热线139-2044-9750"  alt="天津债权债务律师"/></a></div>
    </div>
    <!-- E Main Right -->
    <div class="space20"></div>
    <div class="content">
    	<!-- S 客户评论 -->
    	<div class="fl w320 mr20 w_border">
        	<div class="con_tit_h2">
        		<h2 class="fw f16 fl">客户评论</h2><a class="fr more" href="/index.php?m=ask&c=index&a=lists&catid=16&typeid=2">more+</a>
            </div>
            <div id="comment">
                <ul class="sidepj" id="comment1">
									                    <li>
                    	<a href="">感谢祝律师的帮助</a><p><span>王女士</span> 2014-12-30 12:00:33</p>
                    </li>
					                    <li>
                    	<a href="">感谢祝律师细致、耐心的咨询解答</a><p><span>李先生</span> 2014-12-04 11:54:58</p>
                    </li>
					                    <li>
                    	<a href="">谢谢律师的帮助</a><p><span>黄</span> 2014-09-24 17:24:27</p>
                    </li>
									                </ul>
                <ul class="sidepj" id="comment2"></ul>
            </div>
            <script type="text/javascript"> 
            <!--
                var speed=60 
                var demo=document.getElementById("comment"); 
                var demo2=document.getElementById("comment2"); 
                var demo1=document.getElementById("comment1"); 
                demo2.innerHTML=demo1.innerHTML;
                function Marquee(){
                    if(demo2.offsetHeight-demo.scrollTop<=0){
                      demo.scrollTop-=demo1.offsetHeight;
                    }else{ 
                      demo.scrollTop++;
                    } 
                } 
                var MyMar=setInterval(Marquee,speed) ;
                demo.onmouseover=function() {clearInterval(MyMar);} 
                demo.onmouseout=function() {MyMar=setInterval(Marquee,speed);} 
            -->
            </script>
        </div>
        <!-- E 客户评论 -->
        <!-- S 在线咨询 -->
        <div class="fl w320 mr20 w_border">
        	<div class="con_tit_h2">
        		<h2 class="fw f16 fl">在线咨询</h2><a class="fr more" href="/index.php?m=ask&c=index&a=lists&catid=8&typeid=1">more+</a>
            </div>
            <div class="online_consultaion_c">
						<form action="/index.php?m=ask&c=index&a=ask" method="post" id="myform" onsubmit="if(this.name.value == this.name.defaultValue) this.name.value='';if(this.introduce.value == this.introduce.defaultValue) this.introduce.value='';">
						<input type="hidden" name="typeid" value="1" />
						<input type="hidden" name="is_ajax" value="1" />
						<input type="hidden" name="url" value="/post_success/" />
						<p style="display:none"><input class="txt" name="title" id="biaoti" type="text" value="咨询标题" /></p>
                <p class="mi_zx_txt lcw"><textarea  onfocus="if(this.value == this.defaultValue) this.value=''" onblur="if(this.value == this.defaultValue || this.value == '')this.value=this.defaultValue" name="content" id="introduce" cols="" rows="">请输入案件详情</textarea></p>
                <p class="mi_zx_txt lcw"><input name="name" id="name" type="text" value="姓名（仅律师可见）:" onfocus="if(this.value == this.defaultValue) this.value=''" onblur="if(this.value == this.defaultValue || this.value == '')this.value=this.defaultValue"></p>
                <p class="mi_zx_txt lcw"><input name="comment[tel]" id="tel" type="text" value="电话（仅律师可见）:" onfocus="if(this.value == this.defaultValue) this.value=''" onblur="if(this.value == this.defaultValue || this.value == '')this.value=this.defaultValue"></p>            
                <p class="mi_zx_code"><input class="fl" name="code" id="code" type="text" value="验证码" onfocus="if(this.value == this.defaultValue) this.value=''" onblur="if(this.value == this.defaultValue || this.value == '')this.value=this.defaultValue"><img id='code_img' onclick='this.src=this.src+"&"+Math.random()' src='/api.php?op=get_code&code_len=4&font_size=14&width=100&height=32&font_color=&background='></p>
            <div class="cl"><em><div id="msgdemo"></div></em></div>
            <div class="online_consultaion_but fw"><input name="dosubmit" id="submitform" type="submit" value="提    交" /></div>
			</form>
        </div>
<script  type="text/javascript" src="/skins/js/wycms/Validform_v5.3.2.js" ></script>
		    <script type="text/javascript">
				
                    $(function() {
                        var demo = $("#myform").Validform({
                            tiptype: function(msg, o, cssctl) {
                                var objtip = $("#msgdemo");
                                cssctl(objtip, o.type);
                                objtip.text(msg);
                            },
                            ajaxPost: true, /AJAX请求

                            callback: function(data) {        /AJAX请求的回调函数
								/alert(data);/eval('var data='+dt+';');
                                if (data.status == 'SUCCESS') {
									$('#msgdemo').html(" ");
									location.href = "/post_success";
                                } else {
                                    $('#msgdemo').html("<font color='red'>"+data.message+"</font>");
                                    return false;
                                }
                            }
                        });
                        demo.addRule([
                            {
                                ele: "#title",
                                datatype: "*1-40",
								tip:"",
                                nullmsg: "请输入标题",
                                errormsg: "请输入标题"
                            },
                            {
                                ele: "#name",
                                datatype: "*1-8",
								tip:"",
                                nullmsg: "请输入姓名",
                                errormsg: "姓名在1-8个字符之间"
                            },
                            {
                                ele: "#tel",
								tip:"",
                                datatype: "/^0{0,1}(13[0-9]|15[5-9]|15[0-3]|147|180|182|18[5-9])[0-9]{8}$/",
                                nullmsg: "请输入手机号码",
                                errormsg: "手机号码不正确"
                            },
                            {
                                ele: "#introduce",
                                datatype: "*6-1000",
                                tip:"",
                                nullmsg: "尽量详细描写您的案情,以便我们给以更好的建议。",
                                errormsg: "咨询内容在6-1000个字之间"
                            },
                            {
                                ele: "#code",
								tip:"",
                                datatype:"/^[0-9a-zA-Z][0-9a-zA-Z][0-9a-zA-Z][0-9a-zA-Z]$/",
                                nullmsg:"请输入验证码",
                                errormsg:"请正确输入验证码"
                            }
                        ]);
                    });
                </script>	
        </div>
        <!-- E 在线咨询 -->
        <!-- S 联系我们 -->
        <div class="fr w320 w_border">
        	<div class="con_tit_h2">
        		<h2 class="fw f16">联系我们</h2>
            </div>
            <div class="page_contact">
                <?php echo Info(10); ?>
            	<!-- <p>姓名：祝令常</p>
                <p>手机号码：139-2044-9750</p>
                <p>座机号码：022-63226119</p>
                <p>执业律所：天津勤达律师事务所</p>
                <p>联系地址：（来之前请电话联系）</p>
                <p>北京市海淀区西四环中路39号万地名苑1-602</p>
				<p>天津市滨海新区兴安里7号勤达律师楼</p>
				<p>天津市滨海新区大港开发区五指集团大厦</p> -->
            </div>
        </div>
        <!-- E 联系我们 -->
    </div>
</div>
<div class="space20"></div>
<?php require_once'foot.php' ?>
</body>
</html>
