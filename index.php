<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 1 : intval($cid);
 ?>
 
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://www.cubead.cn:7070/recv/visit.do?tenantid=158352&site=www.wei9000.com"></script><script type="text/javascript" language="javascript" src="http://ca.cubead.com/cubead_ca.js"></script><script type="text/javascript"> _traker._init('www.wei9000.com','158352'); </script>
<?php //echo GetHeader(); ?>
<title>微信推广_广州微信营销推广托管代运营服务公司_微玖仟</title>
<meta name="generator" content="" />
<meta name="author" content="微玖仟" />
<meta name="keywords" content="广州微信推广,广州微信营销,广州微信托管,广州微信代运营" />
<meta name="description" content="广州微狼信息科技有限公司是一家提供广州微信营销,广州微信推广,广州微信代运营,广州微信托管,广州网络推广等服务的广州网络公司。微信营销,微信推广服务首选广州微玖仟。QQ/微信：2646839204" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="location" content="province=广州;city=广州">
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>
</head>
<body>
<?php include_once'menu.php' ?>
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
            <li class="banner_li"><a href="tiyan.php"><img src="<?php echo $row['picurl']; ?>"  title="<?php echo $row['title']; ?>" alt="<?php echo $row['title']; ?>" /></a></li>

            <?php
            }
echo "wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";
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
            <a href="/product.html#a">企业公众号运营推广、托管</a>
        </li>
        <li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_08.png" title="" alt="" />
            <a href="/product.html#b">企业微官网</a>
        </li>
        <li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_12.png" title="" alt="" />
            <a href="/product.html#c">企业微商城</a>
        </li>
        <li>
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_16.png" title="" alt="" />
            <a href="/product.html#d">微信商城分销系统</a>
        </li>
        <li class="no_margin">
   	    	<img class="indeximg" src="/templates/default/images/indexserver/yscp_21.png" title="" alt="" />
            <a href="/product.html#e">微信打印机</a>
        </li>
    </ul>
</div>
<!-- E 专业领域 -->
<div class="space15"></div>
<!-- S container -->
<div class="container">
	<div class="wrap">
    	
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
            ?>
                                    <li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],18); ?></a></li>
                                    <?php } ?>


                                </ul>
				              </ul>  
          </div>
          <div class="cl"></div>
    </div>
    <!-- E Main Right -->
    <div class="space20"></div>
    <div class="content">
    	<!-- S 客户评论 -->
    	<div class="fl w320 mr20 w_border">
		
		  
		
        	<div class="con_tit_h2">
        		<h2 class="fw f16 fl">客户评论</h2><a class="fr more" href="message.php">more+</a>
            </div>
            <div id="comment">
	
			<?php
			$dopage->GetPage("SELECT * FROM `#@__message` WHERE checkinfo=true ORDER BY `htop` DESC, `orderid` DESC",10);
			$i = $dosql->GetTotalRow();
			while($row = $dosql->GetArray())
			{
			?>
			
				
				<?php
				if($row['recont'] != '')
				{
				?>
				
				<?php
				}
				?>
				
			 <ul class="sidepj" id="comment1">
			
			<li>
              <?php echo $row['content']; ?><p><span><?php echo $row['nickname']; ?></span> <?php echo GetDateTime($row['posttime']); ?></p>
            </li>
			</ul>
			<?php
				$i--;
				}
			?>
			
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
        		<h2 class="fw f16 fl">在线咨询</h2><a class="fr more" href="message.php">more+</a>
            </div>
            <div class="online_consultaion_c">

            <form name="form" id="form" method="post" action="">
               
               <textarea  name="content" class="msg_input"  style="width:270px; font-size: 12px;height: 90px;line-height: 22px;padding-left: 5px;overflow:auto;" id="content" placeholder="请输入咨询内容"></textarea><div class="hr_10"></div><div class="hr_10"></div>
                <div class="input_box"><input name="contact"  type="text" id="phone" class="msg_input" style="width:150px; " placeholder="请输入手机号码" /><div class="hr_10"></div><div class="hr_10"></div></div>
                <div class="input_box"><input type="text" name="nickname" id="nickname" class="input" style="width:150px;" placeholder="请输入您的姓名"/></div><div class="hr_10"></div><div class="hr_10"></div>
                <div class="input_box"><input  placeholder="验证码" name="validate" type="text" id="validate" class="msg_input" style="width:150px;" onFocus="if(validate.value==validate.defaultValue){validate.value='';}"  /> <span><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span></div><br /><div class="hr_10">
                <div class="msg_btn_area" ><input type="button"href="javascript:void(0);" onclick="cfm_msg();return false;" value="提交"/></div>
                <input type="hidden" name="action" id="action" value="add" />
            
                
            </form>

        </div>

        </div>
            </div>
        <!-- E 在线咨询 -->
        <!-- S 联系我们 -->
        <div class="fr w320 w_border">
        	<div class="con_tit_h2">
        		<h2 class="fw f16">联系我们</h2>
            </div>


            <div class="page_contact">
                <?php echo Info(10); ?>
            </div>
        </div>

        <!-- E 联系我们 -->
    </div>
</div>
</div>
<div class="space20"></div>

<?php require_once'foot.php' ?>
</body>
</html>






<?php   
if(isset($action) and $action=='add')
{
    if(empty($nickname) or
       empty($content) or
       empty($validate))
    {
        header('location:message.php');
        exit();
    }
    
    
    //检测数据正确性
    if(strtolower($validate) != strtolower(GetCkVdValue()))
    {
        ResetVdValue();
        ShowMsg('验证码不正确！','?c=login');
        exit();
    }
    else
    {
        $r = $dosql->GetOne("SELECT Max(orderid) AS orderid FROM `#@__message`");
        $orderid  = (empty($r['orderid']) ? 1 : ($r['orderid'] + 1));
        $nickname = htmlspecialchars($nickname);
        $contact  = htmlspecialchars($contact);
        $content  = htmlspecialchars($content);
        $posttime = GetMkTime(time());
        $ip       = gethostbyname($_SERVER['REMOTE_ADDR']);
    
    
        $sql = "INSERT INTO `#@__message` (siteid, nickname, contact, content, orderid, posttime, htop, rtop, checkinfo, ip) VALUES (1, '$nickname', '$contact', '$content', '$orderid', '$posttime', '', '', 'false', '$ip')";
        if($dosql->ExecNoneQuery($sql))
        {
            ShowMsg('留言成功，感谢您的支持！');
            exit();
        }
    }
}

//验证码获取函数
function GetCkVdValue()
{
    if(!isset($_SESSION)) session_start();
    return isset($_SESSION['ckstr']) ? $_SESSION['ckstr'] : '';
}


//验证码重置函数
function ResetVdValue()
{
    if(!isset($_SESSION)) session_start();
    $_SESSION['ckstr'] = '';
}
?>

<script type="text/javascript">
var tel = $("#phone").val();
var telReg = /^(1)[0-9]{10}$/;

function cfm_msg()
{
    if($("#content").val() == "" || $("#content").val() == "请输入咨询内容")
    {
        alert("请填写留言内容！");
        $("#content").focus();
        return false;
    }
	if(!telReg.test($("#phone").val())){

        alert("请填写正确联系方式！");
		$("#phone").focus();
        return false;
    }
	if($("#nickname").val() == ""||$("#nickname").val() == "请输入您的姓名")
    {
        alert("请填写用户名！");
        $("#nickname").focus();
        return false;
    }

    if($("#validate").val() == "")
    {
        alert("请填写验证码！");
        $("#validate").focus();
        return false;
    }
    $("#form").submit();
}

$(function(){
    $("#phone").focus(function(){
        $("#phone").attr("class", "msg_input_on"); 
    }).blur(function(){
        $("#phone").attr("class", "msg_input"); 
    });

    $("#content").focus(function(){
        $("#content").attr("class", "msg_input_on"); 
    }).blur(function(){
        $("#content").attr("class", "msg_input"); 
    });
    
    $("#validate").focus(function(){
        $("#validate").attr("class", "msg_input_on"); 
    }).blur(function(){
        $("#validate").attr("class", "msg_input"); 
    });

    $("#contact").focus();
});
</script>


<!-- mainbody-->
    
           
        
<!-- /mainbody-->
