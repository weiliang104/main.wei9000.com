<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 34 : intval($cid); 
?>
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

</head>

<body>
<?php include_once'menu.php' ?>
<!-- S Banner -->
<!-- <div class="subBanner" id="focus">   
	<img src="/skins/images/wycms/sub_banner.jpg" title="天津祝令常律师，电话139-2044-9750" alt="天津公司合同律师"/>
</div> -->
<!-- S Wrap -->
<?php include_once'left.php' ?>
    <!-- E inside_con_l -->
    <!-- S inside_con_r -->
    <div class="inside_con_r fr">
    	<div class="location c666 f14">
        	您当前的位置：<?php echo GetPosStr($cid);?></div>
        <!-- S team-c -->
        <div class="team-c">
             <div class="description">
             	<?php echo info($cid)?>
                </div>                
             </div>
      </div> 
      <!-- E team-c -->        
    </div>
    <!-- E inside_con_r -->
</div>
<!-- E Wrap -->
<?php require_once'foot.php' ?>
</body>
</html>
