<?php if(!defined('IN_MOBILE')) exit('Request Error!'); ?>

<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon-precomposed" href="">
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
    <h1>微狼简介</h1>
<?php include_once'nav.php'?>
  </header>	
 <div class="content ask_detail">
    <div class="tips">
			<p><span style="font-size:16px;"><span style="color:#000;">　
　<?php echo info(2); ?></span></span></p>
<p></p>
		      
			
    </div>
  </div>	
	

  <?php include_once'footer.php'?>

 <script>
    $('.nav-btn').tap(function(){
      $('header nav,.overlay').toggle();
    });

    $('.back-btn').tap(function(){
      history.back();
    });
    //slider设置
    $('#slider').slider({
      viewNum:1,
      imgZoom:false,
      loop:true
    });
  </script>



<div class="gmu-media-detect" id="gmu-media-detect0"></div></body></html>