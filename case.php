<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 14 : intval($cid);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="location" content="province=广州;city=广州">
<?php echo GetHeader(1,$cid); ?>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<link rel="stylesheet" type="text/css" href="templates/default/style/solut.css">
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>

</head>

<body>
<?php include_once'menu.php' ?>
<!-- S Banner -->

<!-- S Wrap -->
<?php include_once'left.php' ?>
    <!-- E inside_con_l -->
    <!-- S inside_con_r -->
    <div class="inside_con_r fr">
    	<div class="location c666 f14">
        	您当前的位置：<?php echo GetPosStr($cid);?>
			</div>
        <!-- S Contact -->
<div class="in_content">
<!-- S conList -->
 <?php echo Info($cid); ?>
            <!-- E conList -->
            <!--分页-->
<div class="page"></div>
			<div class="space30"></div>
        <!-- E Contact -->
    </div>
    <!-- E inside_con_r -->
</div>
</div>
<!-- E Wrap -->
<?php require_once'foot.php' ?></body>
</html>
