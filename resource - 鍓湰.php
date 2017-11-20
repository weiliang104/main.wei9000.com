<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 34 : intval($cid) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="location" content="province=广州;city=广州">
<?php echo GetHeader(1,$cid); ?>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<link rel="stylesheet" type="text/css" href="templates/default/style/resr.css">
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>

</head>

<body>
<?php include_once'menu.php' ?>
<!-- S Banner -->
<div class="subBanner" id="focus">   
	<img src="/skins/images/wycms/sub_banner.jpg" title="天津祝令常律师，电话139-2044-9750" alt="天津公司合同律师"/>
</div>
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
                 <div class="banner" id="a"><img src="templates/default/images/rsur_02.jpg" /></div>
    <div class="mcchannel">
        <div class="mcc_tle"><h2>微信营销推广，微狼互动优势微信红人</h2></div>
        <div class="mcc_ranking">
            <ul><img src="templates/default/images/mcc_01.png" width="318" height="530"></ul>
            <ul><img src="templates/default/images/mcc_02.png" width="310" height="536"></ul>
            <ul><img src="templates/default/images/mcc_03.png" width="310" height="539"></ul>
        </div>
    </div>
    <div class="frfg" id="b">
        <div class="blue fl"><div class="lsblue fl"></div></div><div class="yellow fl"><div class="lsyellow fr"></div></div>
    </div>
    <div class="friend">
        <div class="frd_tle"><h2>微信营销推广，微狼互动朋友圈大号资源</h2></div>
        <div class="frd_ranking">
            <ul><img src="templates/default/images/frd_01.png" width="296" height="507"></ul>
            <ul><img src="templates/default/images/frd_02.png" width="296" height="508"></ul>
            <ul><img src="templates/default/images/frd_03.png" width="296" height="509"></ul>
        </div>
    </div>
    <div class="frfg" id="c">
        <div class="red fl"><div class="lsred fl"></div></div><div class="blue fl"><div class="lsblue fr"></div></div>
    </div>
    <div class="microblog">
        <div class="mcb_tle"><h2>微博营销推广，微狼互动优势草根微博/名人大号资源</h2></div>
        <div class="mcb_ranking">
            <ul><img src="templates/default/images/mcb_01.png" width="300" height="490"></ul>
            <ul><img src="templates/default/images/mcb_02.png" width="301" height="490"></ul>
            <ul><img src="templates/default/images/mcb_03.png" width="300" height="502"></ul>
        </div>
    </div>
    <div class="ifphone">如需了解更多资源优势，欢迎致电：020-66623015</div>
    <div class="frfg">
        <div class="yellow fl"><div class="lsyellow fl"></div></div><div class="red fl"><div class="lsred fr"></div></div>
    </div>
             </div>
      </div> 
      <!-- E team-c -->        
    </div>
    <!-- E inside_con_r -->
</div>
<!-- E Wrap -->
<?php require_once'foot.php' ?></body>
</html>
