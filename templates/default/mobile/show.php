<?php	if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
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
	<?php
		$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
		if(!empty($row['id']))
		{
		?>
		<?php
				switch($row['infotype'])
				{
					case 1:
						$tbname = '#@__infolist';
					break;
					case 2:
						$tbname = '#@__infoimg';
					break;
				}
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `$tbname` SET hits=hits+1 WHERE `id`=$id");
				$row = $dosql->GetOne("SELECT * from `$tbname` WHERE `id`=$id");
				?>
  <header>
    <a href=""><span class="back-btn" id="history"></span></a>
    <span class="nav-btn"></span>
     <?php
    $row1 = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
   ?>
    <h1><?php echo $row1['classname']; ?></h1>
	<?php include_once'nav.php'?>
  </header>  
  <div class="content">
    <article>

      <h2><?php echo $row['title']; ?></h2>
      <h3><span><?php echo $row['author']; ?></span><span><?php echo GetDateTime($row['posttime']); ?></span><span>点击：<?php echo $row['hits']; ?>次</span></h3>
     

<p><span style="font-size:16px;">
	  <?php
				if($tbname == '#@__infoimg' &&
				   $row['picurl'] != '')
				{
				?>
					<div class="title"><a href="<?php echo $row['picurl']; ?>" target="_blank"><img src="<?php echo $row['picurl']; ?>" onerror="this.src='images/nofoundpic.gif'" /></a></div>
				<?php
				}
				?>
                <div class="conttxt">
				<?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '网站资料更新中...';
				?></div></span></p>
					 <?php  
	  }
	     ?>
    </article>
    <div class="newslist">
      <div class="title">
        <h2>推荐阅读</h2>
      </div>
	        <ul id="news4">
		      <?php
    
    //目前只支持 单页、列表、图片模型
    $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE `infotype` IN (0,1,2) AND parentid=0 AND checkinfo='true' ORDER BY orderid ASC");
    if($dosql->GetTotalRow() > 0)
    {
      while($row = $dosql->GetArray())
      {
        switch ($row['infotype'])
        {
          case 0:
            $m = 'info';
           break;
          case 1:
            $m = 'list';
           break;
          case 2:
            $m = 'img';
           break;
          default:
            echo 'No number between 1 and 3';
        }
    ?>
    <div class="pubBox">
      <div class="hd">
     
      </div>
      <div class="ft">
        <?php

      if($row['infotype'] == '1')
        {
          echo '<ul class="list">';

          $dosql->Execute("SELECT * FROM `#@__infolist` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,10",$row['id']);
          while($row1 = $dosql->GetArray(4))
          {
          ?>
          <li>
            <span><a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>" style="color:<?php echo $row1['colorval']; ?>;font-weight:<?php echo $row1['boldval']; ?>;"><?php echo ReStrLen($row1['title'],17); ?></a></span></li>

        <?php
          }

          echo '<div class="cl"></div></ul>';
        }

  
        ?>
   
      </div>
      <div class="cl"></div>
     
    </div>
    <?php
      }
    }
    ?>
		      </ul>
      <a href="?m=list&cid=4" id="more4" catid="4" class="more">查看更多</a>
	      </div>
<?php include_once'footer.php'?>
	</body></html>