<?php require_once(dirname(__FILE__).'/include/config.inc.php'); 
$cid = empty($cid) ? 4 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>
<script type="text/javascript" src="templates/default/js/jquery-1.8.2.js"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="http://www.tjcontractlaw.com/skins/js/wycms/DD_belatedPNG.js"></script>	
	<script type="text/javascript">
    	DD_belatedPNG.fix('.logo img,.tel,.foot img');
	</script>
<![endif]-->
</head>

<body>
<!-- S Tool -->
<?php include_once'menu.php'?>

<!-- E Banner -->
<!-- S Wrap -->
<?php include_once'left.php' ?>
    <!-- E inside_con_l -->
    <!-- S inside_con_r -->
    <div class="inside_con_r fr">
    	<div class="location c666 f14">
        	您当前的位置：<?php echo GetPosStr($cid);?></div>
        <!-- S Contact -->
        <div class="in_content">
        	<!-- S conList -->
			 
        	<div class="">
                <div class="main">
    <div class="newscss">
    	<ul>
            <?php
				$ctnid = $dosql->GetTableRow('#@__infolist');
				$num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;
				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",8);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];

					$row2 = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE `id`=".$row['classid']);
					if($cfg_isreurl!='Y') $gourl2 = 'news.php?cid='.$row['classid'];
					else $gourl2 = 'news-'.$row['classid'].'-1.html';
				?>
			
			<li>
	            <div class="newscss_ctn">
				    <div class="newscss_img"><img src="<?php echo $row['picurl']; ?>" /></div>
	                <div class="newscss_top">
					   
	                    <div class="newscss_title"><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],19); ?></a></div>
	                    <div class="newscss_other"><?php echo GetDateTime($row['posttime']).' '.$row['hits'].'次阅读  作者:'.$row['author']; ?></div>
	                </div>
	            	<div class="newscss_txt"><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ReStrLen($row['description'],120) ?></a></div>
	            </div>
	            
	        </li>
			<script>
            	$('.main .idsif_box ul li .idsif_ctn').hover(function(){$(this).find('a').css('color','#666');},function(){$(this).find('a').css('color','#000')})
            </script>
			<?php
				}
			?>
        </ul>
        <?php echo $dopage->GetList()?>
    </div>
  
<!-- E conList -->
            <!--分页-->
			<div class="space30"></div>
        </div>
        <!-- E Contact -->
    </div>
    <!-- E inside_con_r -->
</div>
            </div>
            <!-- E conList -->
        <!-- E Contact -->
    </div>
    <!-- E inside_con_r -->
</div>
<!-- E Wrap -->
<!-- S Foot -->

<?php require_once'foot.php' ?>
</body>
</html>
