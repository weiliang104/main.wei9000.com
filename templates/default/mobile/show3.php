<?php	if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<?php echo GetHeader(1,$cid,$id); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="HandheldFriendly"content="true"/>
<meta name="format-detection"content="telephone=no">
<meta http-equiv="x-rim-auto-match"content="none"/>
<link rel="stylesheet" href="./skins/css/style.css" />
</head>
<body>
<div class="wrap" data-role="page">
	<div class="header" data-toolbar="fixed">

	</div>
	<div class="content">
		<header>     
<a class="logo" title="微信营销" alt="微信推广" href="/"></a> 
		<?php require_once(dirname(__FILE__).'/nav.php'); ?>
		</header>
		<!-- 栏目内容 -->
		<?php
		$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
		if(!empty($row['id']))
		{
		?>
		<div class="newslist">
			<div class="title">
				<h2><?php echo $row['classname']; ?></h2>
			</div>
			<div class="ft">
            	<div class="subCont">
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
				
				<h1 class="title"><?php echo $row['title']; ?></h1>
				
				<div class="continfo"><span>更新时间：</span><?php echo GetDateTime($row['posttime']); ?></div>
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
				?>
                </div>
                </div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
	<?php require_once('footer.php'); ?>
</div>
</body>
</html>