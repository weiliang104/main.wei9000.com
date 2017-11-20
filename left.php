
<div class="wrap">
	<!-- S inside_con_l -->
	<div class="inside_con_l fl">
    	
        <div class="pubWrap new_article">
        	<h2 class="f16 fw"><a href="/news.php" style="color:white">微玖仟：纯干货分享</a></h2>
            <ul>
			<?php

				$ctnid = $dosql->GetTableRow('#@__infolist');
				$num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;

				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid= 4 OR parentstr LIKE '%,4,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",20);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
                    $loong=$row['classid'];
				    if($loong%2==0)$st="dhboxleft";
			        else $st="dhboxright";
			?>
	    			            	<li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.$row['title']; ?></a></li>
									<?php } ?>
			            	
					            </ul>
        </div>
        <div class="pubWrap advisory">
        	<h2 class="f16 fw"><a href="tiyan.php" style="color:white">在线咨询</a></h2>
						
			    <div class="consulting">
					 <form name="form" id="form" method="post" action="">
               
               <textarea  name="content" class="msg_input"  style="width:200px; font-size: 12px;height: 90px;line-height: 22px;padding-left: 5px;overflow:auto;" id="content" placeholder="请输入咨询内容" ></textarea><div class="hr_10"></div><div class="hr_10"></div>
                <div class="input_box"><input name="contact"  type="text" id="phone" class="msg_input" style="width:150px; " placeholder="请输入手机号码"/></div><div class="hr_10"></div><div class="hr_10"></div>
                <div class="input_box"><input type="text" name="nickname" id="nickname" class="input" style="width:150px;" placeholder="请输入您的姓名"/></div><div class="hr_10"></div><div class="hr_10"></div>
                <div class="input_box"><input  name="validate" type="text" id="validate" class="msg_input" style="width:100px;" placeholder="验证码" /> <span><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span></div><br /><div class="hr_10">
                <div class="msg_btn_area" ><input type="button"href="javascript:void(0);" onclick="cfm_msg();return false;" value="提交"/></div>
                <input type="hidden" name="action" id="action" value="add" />
                <?php
                // if(!empty($_COOKIE['username']))
                //     $nickname = AuthCode($_COOKIE['username']);
                // else
                //     $nickname = '游客';
                ?>
                
            </form>
                </div>
             </div>

        </div>
    </div>



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
        ShowMsg('验证码不正确！');
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
    if($("#phone").val() == "")
    {
        alert("请填写正确的手机号码！");
        $("#phone").focus();
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

    if(telReg==false){
        alert("请填写正确的手机号码！");
        $("#phone").focus();
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