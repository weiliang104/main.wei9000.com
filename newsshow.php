
<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo GetHeader(1,$cid,$id); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>

</head>

<body>
<?php include_once'menu.php' ?>

<!-- S Wrap -->
<?php include_once'left.php' ?>
    <!-- E inside_con_l -->
    <!-- S inside_con_r -->
    <div class="inside_con_r fr">
    	<div class="location c666 f14">
            您当前的位置：<?php echo GetPosStr(4,1);?></div>
        <!-- S Content -->
        <div class="in_content">
        	<!-- S Article -->
        	<div class="article">
					<?php
        	//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=$id");
			if(is_array($row))
			{
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `#@__infolist` SET hits=hits+1 WHERE id=$id");
        ?>
               <h1><?php echo $row['title']; ?></h1>
               <li><h4> 更新时间：<?php echo GetDateTime($row['posttime']); ?> &nbsp;点击次数：<?php echo $row['hits']; ?>次 &nbsp;作者：<?php echo $row['author']; ?>&nbsp;</h4></li>
               <div style="padding:12px 0;">
			   	
        <div class="nshow_bor"></div>

		<div class="nshow_article">

            <div class="art_ctn"><?php echo $row['content']; ?></div>
			<!--推荐阅读-->
			<!--推荐阅读结束-->
    		<!-- 相关文章开始 -->
			<div class="preNext">
				<div class="line"><strong></strong></div>
				<ul class="text">
				<?php

				//获取上一篇信息
				$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=$id");
				$r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if($r < 1)
				{
					echo '<li>上一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'newsshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'newsshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '<li>上一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}
				
				//获取下一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
				if($r < 1)
				{
					echo '<li>下一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'newsshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'newsshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '<li>下一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}}
				?>
 
               </div>
               <div class="bdfx">
                    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                    <span class="bds_more">分享到：</span>
                    <a class="bds_qzone"></a>
                    <a class="bds_tsina"></a>
                    <a class="bds_tqq"></a>
                    <a class="bds_renren"></a>
                    <a class="bds_t163"></a>
                    <a class="shareCount"></a>
                    </div>
                    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6585610" ></script>
                    <script type="text/javascript" id="bdshell_js"></script>
                    <script type="text/javascript">
                    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
                    </script>
               </div>
              
            <!-- E Article -->           
        </div>
        <!-- E Content -->
    </div>
    <!-- E inside_con_r -->
</div>
</div>
</div>
</div>
<!-- E Wrap -->
<?php include_once'foot.php'?>