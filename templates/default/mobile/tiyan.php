<?php 
if(!defined('IN_MOBILE')) exit('Request Error!');

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
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <?php echo GetHeader(1,$cid,$id); ?>
<link rel="stylesheet" href="./skins/css/style.css">
 <script src="./index_files/zepto.js"></script>
 <script src="./index_files/gmu.js"></script><style>.gmu-media-detect{-webkit-transition: width 0.001ms; width: 0; position: absolute; clip: rect(1px, 1px, 1px, 1px);}
@media screen and (width: 1325px) { #gmu-media-detect0 { width: 1px; } }
</style>

</head>
<body>
  <header>
    <a href=""><span class="back-btn" id="history"></span></a>
    <span class="nav-btn"></span>
    <h1>免费体验</h1>
<?php include_once'nav.php'?>
  </header>  
  <div class="content">
    <article>
      <h2></h2>
	 <div class="tiyanBody">
  <div class="tiyanbox">
      <span class="tiyantitle">想做微新营销微信推广<br/>怕效果达不到预期？？？</span><br/>
      <span class="tiyantitle">选微玖仟微信运营托管服务，</span><br/>
      <span class="tiyantitle">先体验后付款，马上注册免费体验吧！<br/></span>
      <form name="form" id="form" method="post" action="">
        <span class="msgtitle"></span><input name="gsname" type="text" id="gsname" class="tiyan_input" placeholder="请填写公司名称"/><div class="hr_10"></div><div class="hr_10"></div>
        <span class="msgtitle"></span><input name="nickname" type="text" id="nickname" class="tiyan_input" required="true" placeholder="请输入姓名"  /><div class="hr_10"></div><div class="hr_10"></div>
        <span class="msgtitle"></span><input id="contact" class="tiyan_input" name="contact" pattern="^1[3-9]\d{9}$" required="required" type="text" placeholder="请输入您的手机号码"/><div class="hr_10"></div><div class="hr_10"></div>
		
        <span class="msgtitle"></span><textarea name="content" class="msg_input" style="width:100%;height:50px;overflow:auto;" id="content"  placeholder="请输入咨询问题" ></textarea><div class="hr_10"></div><div class="hr_10"></div>
              <span class="msgtitle"><input name="validate" type="text" id="validate" placeholder="请输入验证码" class="tiyan_input" style="width:120px;margin-right:5px;" required="true"  /><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span><br /><div class="hr_10"></div><div class="hr_10"></div>
       
        <div class="button-panel">
        <input href="javascript:void(0);" onclick="cfm_msg();return false;" type="submit" class="button" value="注册">
      </div>
        <input type="hidden" name="action" id="action" value="add" />
      </form>
  </div>

  <div class="cl"></div>
</div>
    </article>
		     
	      </div>
<?php include_once'footer.php'?>
	</body></html>
<script type="text/javascript">
function cfm_msg()
{
	if($("#nickname").val() == "")
	{
		alert("请填写姓名");
		$("#nickname").focus();
		return false;
	}
	if($("#contact").val() == "")
	{
		alert("请填写联系方式！");
		$("#contact").focus();
		return false;
	}
	
	
	var ckmail = /^1[3-9]\d{9}$/;
	if($("#contact").val() == "")
	{
		alert("手机号码不能为空！");
		$("#contact").focus();
		return false;
	}
	else if(!ckmail.test($("#contact").val()))
	{
		alert("请输入正确手机号码");
		$("#contact").focus();
		return false;
	}
	
	
	
	
	if($("#content").val() == "")
	{
		alert("请填写留言内容！");
		$("#content").focus();
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

</script>