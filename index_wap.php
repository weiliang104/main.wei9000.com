<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 1 : intval($cid);
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <link rel="apple-touch-icon-precomposed" href="">
 <?php //echo GetHeader(); ?>
 微信营销_广州微信营销推广托管代运营服务公司_微玖仟
<link rel="stylesheet" href="/skins/css/style.css" />
 <script src="/skins/js/zepto.js"></script>
 <script src="/skins/js/gmu.js"></script>
</head>

<body>
  <header>
    <span class="nav-btn"></span>
    <a class="logo" title="广州微信营销" alt="广州微信营销" href="/">
            <img src="logo.png" alt="广州微信营销"/>
          </a>
    <nav>
     <ul>
        <li>
          <a href="/list_1.html">公司介绍</a>
          <a href="/list_17.html">服务领域</a>
          <a href="/list_6.html">合同法规</a>
        </li>
        <li>
          <a href="/list_3.html">成功案例</a>
          <a href="/list_4.html">律师动态</a>
          <a href="/list_5.html">律师文集</a>
        </li>
        <li>
          <a href="/list_11.html">买卖合同</a>
          <a href="/list_12.html">劳务合同</a>
          <a href="/list_13.html">债权债务</a>
        </li>
        <li>
          <a href="/list_14.html">投资融资</a>
          <a href="/list_8.html">在线咨询</a>
          <a href="/list_9.html">联系我们</a>
        </li>
        <li>
          <a href="/list_16.html">客户评价</a>
          <a href="/list_7.html">人才招聘</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="content home">
    <div id="slider">
      <div><a href="#none"><img src="/skins/images/banner01.jpg" alt="天津祝令常律师"></a></div>
      <div><a href="#none"><img src="/skins/images/banner02.jpg" alt="天津祝令常律师"></a></div>
      <div><a href="#none"><img src="/skins/images/banner03.jpg" alt="天津祝令常律师"></a></div>
    </div>
    <nav class="btn-nav">
     <ul>
        <li><a href="/list_1.html">律师介绍</a></li>
        <li><a href="/list_17.html">业务领域</a></li>
        <li><a href="/list_3.html">成功案例</a></li>
      </ul>
      <ul>
        <li><a href="/list_4.html">律师动态</a></li>
        <li><a href="/list_8.html">在线咨询</a></li>
        <li><a href="/list_9.html">联系我们</a></li>
      </ul>
    </nav>
    <div class="cls"></div>
    <div class="news">
    	<div class="con-h rel"><h2>成功案例</h2></div>
				  
        <ul id="list">

         <?php

                $ctnid = $dosql->GetTableRow('#@__infolist');
                $num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;

                $dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid= 4 OR parentstr LIKE '%,4,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",15);
                while($row = $dosql->GetArray())
                {
                    if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
                    else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
                    else $gourl = $row['linkurl'];
                    $loong=$row['classid'];
                    if($loong%2==0)$st="dhboxleft";
                    else $st="dhboxright";
            ?>
              <li ><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.ReStrLen($row['title'],18); ?></a></li>
            <?php } ?>


        </ul>
        <a href="#none" id="more" catid="3" class="more">加载更多</a>
    </div>
		 <script>
      var p = 2;
	  var num = 5;
	  var times = 10;
      if($("#more")){
	     $("#more").click(function(){
		    if(p>times){
			    $("#more").html("更多精彩内容切换到电脑版浏览");
				$("#more").attr("href","{$CATEGORYS[$catid][url]}");
			    return;
			}
			var catid = $('#more').attr('catid');
		    $.post("/index.php?m=wap&c=index&a=ajaxList",{catid:catid,page:p,num:num},function(data){
			    p = p+1;
			    eval("var datas=" + data);
				var str = "";
				for(var i=0;i<datas.length;i++){
				    var description = datas[i].description.substring(0,30)+"...";
					var date = new Date(datas[i].inputtime * 1000);
				var year = date.getFullYear();
				var month = date.getMonth()+1;
				var day = date.getDate();
					str += '<li><a href="/show_'+datas[i].catid+'_'+datas[i].id+'.html">'+datas[i].title+'</a><span>'+year+'-'+month+'-'+day+'</span></li>';
				}
				$("#list").append(str);
				if(datas.length<num){
				    $("#more").css("display","none");
				}
			});
		 });
	  }
</script>
	
    <div class="cls"></div>
  </div>
  <div class="cls"></div>

  <footer>
    <p class="copyright">Copyright 2010-2015 All Rights Reserved. 广州微狼信息科技有限公司 版权所有 粤ICP备15003841号-2</p>
    <p class="address">地址：广州市天河区高普路广州(互联网)电子商务产业园2楼</p>
  </footer>
  <div class="fixed-contact">
    <a class="fixed-contact-tel" href="tel:139-2044-9750">
      <span>微信营销热线</span><em>1850 2085 773</em>
    </a>
  </div>
  <div class="overlay"></div>
 <script src="{JS_PATH}zepto.js"></script>
 <script src="{JS_PATH}gmu.js"></script>
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
</body>

</html>
