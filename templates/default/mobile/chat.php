<?php if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
  <header>
    <a href=""><span class="back-btn" id="history"></span></a>
    <span class="nav-btn"></span>
    <?php
    $row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id = $cid AND checkinfo = 'true' ORDER BY orderid ASC");
   ?>
    <h1><?php echo $row['classname']; ?></h1>
	 <?php include_once'nav.php'?>
  </header>
  <div class="content about">
    <div class="tab-control">
      
     
    </div>
    <div class="tab-content">

          <div class="article">
            <div calss="chat_txt"><?php echo info(9); ?></div>
           <div class="contact_us">
        
           <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6evqr0mSp1TuGDMGKcFPEwQQ"></script>
            <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
            <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
            <div id="map" style="height:200px;width:90%;border:1px solid #ddd; margin:0 20px 20px;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;"></div>
            <script type="text/javascript">
                // 百度地图API功能
                var map = new BMap.Map('map');
                var poi = new BMap.Point(113.413495,23.157401);
                map.centerAndZoom(poi, 15);
                map.enableScrollWheelZoom();
            
                var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                                '<img src="http://www.tjcontractlaw.com/skins/images/wycms/map-img.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
                                '公司地址：广州市天河区大观中路95号科汇园A座307<br/>电话：185 8876 8599' +
                              '</div>';
            
                //创建检索信息窗口对象
                var searchInfoWindow = null;
                searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
                        title  : "广州微狼信息科技有限公司",      //标题
                        width  : 190,             //宽度
                        height : 20,              //高度
                        panel  : "panel",         //检索结果面板
                        enableAutoPan : true,     //自动平移
                        searchTypes   :[
                            BMAPLIB_TAB_SEARCH,   //周边检索
                            BMAPLIB_TAB_TO_HERE,  //到这里去
                            BMAPLIB_TAB_FROM_HERE //从这里出发
                        ]
                    });
                var marker = new BMap.Marker(poi); //创建marker对象
                marker.enableDragging(); //marker可拖拽
                marker.addEventListener("click", function(e){
                    searchInfoWindow.open(marker);
                })
                map.addOverlay(marker); //在地图中添加marker
                searchInfoWindow.open(marker); //在marker上打开检索信息串口
            </script>
        </div>
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