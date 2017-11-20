<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 2 : intval($cid); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="location" content="province=广州;city=广州">
<?php echo GetHeader(1,$cid); ?>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>
<!--old style-->
</head>

<body style="margin:0 paiidng:0">
<?php include_once'menu.php' ?>
<div>
<div class="">
<?php include_once'left.php'; ?>
<div class="sousuo" id="bdcs-frame-box"></div>
<script type="text/javascript">
var bdcsFrameSid="3891085138915297441";
var bdcsFrameWidth = 552;
var bdcsFrameWt = 1;
var bdcsFrameHt = 1;
var bdcsFrameResultNum = 10;
var bdcsFrameBgColor = "#ffffff";
</script>
<script type="text/javascript" src="http://zhannei.baidu.com/static/js/iframe.js"></script>
</div>
</div>
<!-- E Wrap -->
<?php require_once'foot.php' ?></body>
</html>