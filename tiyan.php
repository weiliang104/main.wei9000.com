
<?php	require_once(dirname(__FILE__).'/include/config.inc.php');


//留言内容处理
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
	
	
		$sql = "INSERT INTO `#@__message` (siteid, nickname, contact, content, orderid, posttime, htop, rtop, checkinfo, ip, gsname) VALUES (1, '$nickname', '$contact', '$content', '$orderid', '$posttime', '', '', 'false', '$ip', '$gsname')";
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php //echo GetHeader(1,0,0,'客户留言'); ?>

<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
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
<!-- header-->
<?php require_once('menu.php'); ?>
</div>
<!-- /header-->


<!-- /notice-->
<!-- mainbody-->
<div class="tiyanBody">
		<div class="cl"></div>
	<div class="tiyanbox">
			<span class="tiyantitle">想做微新营销微信推广怕效果达不到预期？？？</span><br/>
			<span class="tiyantitle">不用担心！选微玖仟微信运营托管服务，</span><br/>
			<span class="tiyantitle">先体验后付款，马上注册免费体验吧！<br/><br/></span>
			<form name="form" id="form" method="post" action="">
				<span class="msgtitle">公司名称：</span><input name="gsname" type="text" id="gsname" class="tiyan_input" value="请输入公司名称" onFocus="if(gsname.value==gsname.defaultValue){gsname.value='';}"/><div class="hr_10"></div><div class="hr_10"></div>
				<span class="msgtitle">姓　　名：</span><input name="nickname" type="text" id="nickname" class="tiyan_input" value="请输入姓名" onFocus="if(nickname.value==nickname.defaultValue){nickname.value='';}" /><div class="hr_10"></div><div class="hr_10"></div>
				<span class="msgtitle">联系方式：</span><input name="contact" type="text" id="phone" class="tiyan_input" value="请输入您的手机号码" onFocus="if(phone.value==phone.defaultValue){phone.value='';}" /><div class="hr_10"></div><div class="hr_10"></div>
				<span class="msgtitle">咨询内容：</span><textarea name="content" class="msg_input" style="width:300px;height:80px;overflow:auto;" id="content"  onFocus="if(content.value==content.defaultValue){content.value='';}" >请输入咨询内容</textarea><div class="hr_10"></div><div class="hr_10"></div>
                <span class="msgtitle">验证码：<input name="validate" type="text" id="validate" class="msg_input" style="width:120px;margin-right:5px;" value="请输入验证码" onFocus="if(validate.value==validate.defaultValue){validate.value='';}" /><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span><br /><div class="hr_10"></div><div class="hr_10"></div>
				<div class="tijiaobox"> <div class="tijiao"><a href="javascript:void(0);" onclick="cfm_msg();return false;">提　交</a></div></div>
				<input type="hidden" name="action" id="action" value="add" />
			</form>
		

	</div>

	<div class="cl"></div>
</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('foot.php'); ?>
<!-- /footer-->
</body>
</html>
<script type="text/javascript">
var tel = $("#phone").val();
var telReg = /^(1)[0-9]{10}$/;

function cfm_msg()
{
    if($("#nickname").val() == "")
    {
        alert("请填写您的姓名！");
        $("#nickname").focus();
        return false;
    }
	if($("#nickname").val() == "请输入姓名")
    {
        alert("请填写您的姓名！");
        $("#nickname").focus();
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
        $("#phone").attr("class", "tiyan_input"); 
    }).blur(function(){
        $("#phone").attr("class", "tiyan_input"); 
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
<script type="text/javascript">
	window.onload=function()
	{ 
		if(document.readyState=="complete")
		{
		  	document.getElementById("gsname").focus(); 
			
		}
	}
</script>