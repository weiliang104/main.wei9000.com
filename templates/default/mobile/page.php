<?php
if(!defined('IN_MOBILE')) exit('Request Error!');
#require_once('/include/config.inc.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon-precomposed" href="">
 <?php echo GetHeader(1,$cid,$id); ?>
  <link rel="stylesheet" href="./skins/css/style.css">
  <style>.gmu-media-detect{-webkit-transition: width 0.001ms; width: 0; position: absolute; clip: rect(1px, 1px, 1px, 1px);}
@media screen and (width: 1325px) { #gmu-media-detect0 { width: 1px; } }
</style>
</head>

<body>
  <header>
    <a href=""><span class="back-btn" id="history"></span></a>
    <span class="nav-btn"></span>
      <?php
    $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
   ?>
    <h1><?php echo $row['classname']; ?></h1>
<?php include_once'nav.php'?>
  </header>	
  <div class="product">
  <ul id="accordion" class="accordion">
  
  <?php
          $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
          if(!empty($row['id']))
          {
		 if($row['infotype'] == '0')
        {
          echo '<div class="info">'.Info($row['id']).'</div>';
        }
        else if($row['infotype'] == '1')
        {
          echo '<ul class="list">';
          $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",10);
          while($row1 = $dosql->GetArray())
          {
          ?>
		<li data-role="collapsible">
			<div class="link">
				<i class=""></i><?php echo $row1['title']; ?>
			</div>
			<ul class="submenu">
				<a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>"><?php echo $row1['description']; ?></a>
			</ul>
			 <?php
          }
          echo '<div class="cl"></div></ul>';
			//echo $dopage->GetList();
        }
  ?>
		</li>
		 <?php
    }
    else
    {
      echo '<li>网站资料更新中...</li>';
    }
    ?>
	</ul>
  <?php include_once'footer.php' ?>
</body>
</html>
