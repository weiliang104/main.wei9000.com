<?php if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <?php echo GetHeader(); ?>
<link rel="stylesheet" href="./skins/css/style.css" />
 <script src="./skins/js/jquery.1.7.2.min.js"></script>
 <script src="./skins/js/jquery.img_silder.js"></script>

 <style>.gmu-media-detect{-webkit-transition: width 0.001ms; width: 0; position: absolute; clip: rect(1px, 1px, 1px, 1px);}
@media screen and (width: 1325px) { #gmu-media-detect0 { width: 1px; } }
</style>
 <script>
        $(function(){
            $('#silder').imgSilder({
        s_width:'100%', //容器宽度
        s_height:130, //容器高度
        is_showTit:true, // 是否显示图片标题 false :不显示，true :显示
        s_times:3000, //设置滚动时间
      });
    });
    </script>
</head>

<body>   
<header>     
 <a href="/"><img src="/skins/images/logo.png" title="微信营销" alt="微信推广"></div></a> 
</header>  
    <div id="slider">    
      <div class="silder" id="silder">
  <ul class="silder_list" id="silder_list">
    <?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=30 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
            ?>
            <li><a href="?m=tiyan"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" /></a></li>
            <?php
            }
            ?>
  </ul>
</div>
<div class="cls"></div>
</div>

    <nav class="btn-nav">
     <ul>
        <li><a href="?m=about&cid=2">公司简介</a></li>
        <li><a href="?m=list&cid=39">解决方案</a></li>
        <li><a href="?m=list&cid=40">营销产品</a></li>
      </ul>
      <ul>
        <li><a href="?m=list&cid=4">干货分享</a></li>
        <li><a href="?m=list&cid=31">成功案例</a></li>
        <li><a href="?m=chat&cid=9">联系我们</a></li>
      </ul>
    </nav>
  </div>
    <div class="cls"></div>
    <div class="news">
				<ul id="list">
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
     <?php
       if($m== 'list')
         {
    ?>
       <div class="con-h rel"><h2><?php echo $row['classname']; ?></h2></div>
       <?php
     }
       else
       { echo '';  }
        ?>
      </div>
      <div class="ft">
        <?php

      if($row['infotype'] == '1')
        {
          echo '<ul class="list">';

          $dosql->Execute("SELECT * FROM `#@__infolist` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,10",$row['id']);
          while($row1 = $dosql->GetArray($row['id']))
          {
          ?>
          <li><a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>" style="color:<?php echo $row1['colorval']; ?>;font-weight:<?php echo $row1['boldval']; ?>;"><?php echo $row1['title']; ?></a></li>
        <?php
          }

          echo '<div class="cl"></div></ul>';
		  break;
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
    
    </div>
<?php include_once'footer.php'?>   
</body>

</html>
