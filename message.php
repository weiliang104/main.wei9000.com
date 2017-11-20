
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
		$gsname  = htmlspecialchars($gsname);
		$posttime = GetMkTime(time());
		$ip       = gethostbyname($_SERVER['REMOTE_ADDR']);
	
	
		$sql = "INSERT INTO `#@__message` (siteid, nickname, contact, content, orderid, posttime, htop, rtop, checkinfo, ip, name, gsname) VALUES (1, '$nickname', '$contact', '$content', '$orderid', '$posttime', '', '', 'false', '$ip', '$name','$gsname')";
		if($dosql->ExecNoneQuery($sql))
		{
			ShowMsg('留言成功，感谢您的支持！','message.php');
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
<div class="subBody">
	<div class="subTitle"> <span class="catname">客户留言</span> <span>您当前所在位置：<a href="<?php echo $cfg_webpath; ?>">首页</a> &gt; <a href="message.php">客户留言</a></span>
		<div class="cl"></div>
	</div>
	<div class="OneOfTwo">
		<div class="subCont">
			
			<form name="form" id="form" method="post" action="">
				<span class="msgtitle">联系方式：</span><input name="contact" type="text" id="contact" class="msg_input" /><div class="hr_10"></div><div class="hr_10"></div>
				<span class="msgtitle">内　　容：</span><textarea name="content" class="msg_input" style="width:729px;height:180px;overflow:auto;" id="content" ></textarea><div class="hr_10"></div><div class="hr_10"></div>
                <span class="msgtitle">验证码：</span><input name="validate" type="text" id="validate" class="msg_input" style="width:120px;margin-right:5px;" /> <span><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span><br /><div class="hr_10"></div><div class="hr_10"></div>
				<div class="msg_btn_area"> <a href="javascript:void(0);" onclick="cfm_msg();return false;">提　交</a></div>
				<input type="hidden" name="action" id="action" value="add" />
				<?php
				if(!empty($_COOKIE['username']))
					$nickname = AuthCode($_COOKIE['username']);
				else
					$nickname = '游客';
				?>
				<input type="hidden" name="nickname" id="nickname" value="<?php echo $nickname; ?>" />
			</form>
		
			<?php
			$dopage->GetPage("SELECT * FROM `#@__message` WHERE checkinfo=true ORDER BY `htop` DESC, `orderid` DESC",10);
			$i = $dosql->GetTotalRow();
			while($row = $dosql->GetArray())
			{
			?>
			<div class="message_block">
				<div class="message_title">
					<h2><?php echo $row['nickname']; ?></h2>
					<span><?php echo $i; ?>#</span></div>
				<p><?php
				echo $row['content'];
				if($row['htop']) {
					echo '<span class="msgflag">[置顶]</span>';
				}
				if($row['rtop']) {
					echo '<span class="msgflag">[推荐]</span>';
				}
				?></p>
				<?php
				if($row['recont'] != '')
				{
				?>
				<div class="message_replay"><strong>回复：</strong><?php echo $row['recont']; ?></div>
				<?php
				}
				?>
				<div class="message_info"><?php echo GetDateTime($row['posttime']); ?> / <?php echo preg_replace('/((?:\d+\.){3})\d+/', '\\1*', $row['ip']); ?></div>
			</div>
			<?php
				$i--;
			}
			echo $dopage->GetList();
			?>
		</div>
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
function cfm_msg()
{
	if($("#contact").val() == "")
	{
		alert("请填写联系方式！");
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

$(function(){
	$("#contact").focus(function(){
		$("#contact").attr("class", "msg_input_on"); 
	}).blur(function(){
		$("#contact").attr("class", "msg_input"); 
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