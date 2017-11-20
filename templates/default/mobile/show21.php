<?php	if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php echo GetHeader(1,$cid,$id); ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <link rel="apple-touch-icon-precomposed" href="">
  <?php echo GetHeader(); ?>
<link rel="stylesheet" href="/skins/css/style.css" />
<script type="text/javascript" src="/skins/js/jquery.banner.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>
</head>
<body>
<?php include_once'nav.php'?>
  <div class="content">
    <article>
      
      <?php
		$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
		if(!empty($row['id']))
		{
		?>
		<div class="pubBox">
			<div class="hd">
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
					<div class="contimg"><a href="<?php echo $row['picurl']; ?>" target="_blank"><img src="<?php echo $row['picurl']; ?>" onerror="this.src='images/nofoundpic.gif'" /></a></div>
				<?php
				}
				?>
    </article>
    <div class="newslist">
      <div class="title">
        <h2>律师动态</h2>
      </div>
	  <?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '网站资料更新中...';
				?>
				<?php
		}
		?>
      <ul id="news4">
		{loop $datas $r}
        <li>
          <a href="/show_{$r[catid]}_{$r[id]}.html">{str_cut(strip_tags($r['title']),"56","")}</a>
          <span class="time">{date("Y-m-d",$r['inputtime'])}</span>
        </li>
		{/loop}
      </ul>
      <a href="" id="more4" catid="4" class="more">加载更多</a>
	  {/wy}
    </div>
	<script>
      var p4 = 2;
	  var num4 = 5;
	  var times4 = 10;
      if($("#more4")){
	     $("#more4").click(function(){
		    if(p4>times4){
			    $("#more4").html("更多精彩内容切换到电脑版浏览");
				$("#more4").attr("href","{$CATEGORYS[$catid][url]}");
			    return;
			}
			var catid = $('#more4').attr('catid');
		    $.post("/index.php?m=wap&c=index&a=ajaxList",{catid:catid,page:p4,num:num4},function(data){
			    p4 = p4+1;
			    eval("var datas=" + data);
				var str = "";
				for(var i=0;i<datas.length;i++){
				    var description = datas[i].description.substring(0,30)+"...";
					var date = new Date(datas[i].inputtime * 1000);
				var year = date.getFullYear();
				var month = date.getMonth()+1;
				var day = date.getDate();
					str += '<li><a href="http://3g.tjcontractlaw.com/show_'+datas[i].catid+'_'+datas[i].id+'.html">'+datas[i].title+'</a><span>'+year+'-'+month+'-'+day+'</span></li>';
				}
				$("#news4").append(str);
				if(datas.length<num4){
				    $("#more4").css("display","none");
				}
			});
		 });
	  }
</script>
  </div>
  <script type="text/javascript">
$(function(){
	$('#more1').click(function(){
		$('#content').css("height", "100%");
		$('#more1').css("display", "none");
	});
});
</script>
{template "wap","min_footer"}