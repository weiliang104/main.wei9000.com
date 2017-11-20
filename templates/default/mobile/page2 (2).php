<?php if(!defined('IN_MOBILE')) exit('Request Error!');
require_once('/include/config.inc.php');
 ?>

<!DOCTYPE html>
<!-- saved from url=(0039)http://3g.tjcontractlaw.com/list_4.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
      <?php
    $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
   ?>
    <h1><?php echo $row['classname']; ?></h1>
<?php include_once'nav.php'?>
  </header>	
  <div class="content service">  

    <div class="tab-content">
	      <ul>
      <?php
          $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
          if(!empty($row['id']))
          {
          ?>
        <li style="display:block;">
		          
		      <?php
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
        <div class="list" id="news27">
            
            <div class="list_con">
              <h3><a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>"><?php echo ReStrLen($row1['title'],17); ?></a></h3>
              <p><a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>"><?php echo $row1['description']; ?></a></p>
            </div>
            
          </div>
        <?php
          }

          echo '<div class="cl"></div></ul>';

        }

  ?>

      </div>
    </div>
    <?php
    }
    else
    {
      echo '<li>网站资料更新中...</li>';
    }
    ?>
		           
		 
        </li>
      </ul>
	     </div>
  </div> 
<script>
	$("#history").click(function(){
		history.go(-1);
	});
	
    $('.nav-btn').tap(function(){
      $('header nav,.overlay').toggle();
    });

    $('.back-btn').tap(function(){
      history.back();
    });

    $('.ui-navigator-list li').tap(function(){
      console.log('q');
      //$(this).addClass('cur').siblings().removeClass('cur');
      $('.tab-content ul li').eq($(this).index()).show().siblings().hide();
    });

    $('.tab-control').navigator().select(function(){
      console.log($('.ui-state-active').index());
      $('.tab-content ul li').eq($('.ui-state-active').index()).show().siblings().hide();
    });


  </script>
   
  <?php include_once'footer.php' ?>
</body></html>