<?php require_once(dirname(__FILE__).'/include/config.inc.php');
$cid = empty($cid) ? 2 : intval($cid); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="location" content="province=广州;city=广州">
<?php echo GetHeader(1,$cid); ?>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/style.css"/>
<link rel="stylesheet" type="text/css" href="/skins/css/wycms/validform.css"/>
<script type="text/javascript" src="/skins/js/wycms/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/skins/js/wycms/slider.js"></script>
<script type="text/javascript" src="/skins/js/wycms/jquery.kinMaxShow-1.1.min.js"></script>
<!--old style-->
<!--[if IE 6]>
	<script type="text/javascript" src="/skins/js/wycms/DD_belatedPNG.js"></script>	
	<script type="text/javascript">
    	DD_belatedPNG.fix('.logo img,.tel,.foot img');
	</script>
<![endif]-->
</head>

<body>
<?php include_once'menu.php' ?>
<!-- S Banner -->
<!-- <div class="subBanner" id="focus">   
    <img src="/skins/images/wycms/sub_banner.jpg" title="天津祝令常律师，电话139-2044-9750" alt="天津公司合同律师"/>
</div> -->
<!-- S Wrap -->
<?php include_once'left.php' ?>
    <!-- E inside_con_l -->
    <!-- S inside_con_r -->
    <div class="inside_con_r fr">
        <div class="location c666 f14">
            您当前的位置：<?php echo GetPosStr($cid);?></div>
        <!-- S team-c -->
       <div class="contact">
         <div class="about_xiangxi"><?php echo info(2); ?><div><br/>
       <div> <?php echo info(10); ?></div>
    </div>
    <div class="frfg">
        <div class="red fl"><div class="lsred fl"></div></div><div class="blue fl"><div class="lsblue fr"></div></div>
    </div>
    <div class="contact_us">
        
           <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6evqr0mSp1TuGDMGKcFPEwQQ"></script>
            <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
            <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
            <div id="map" style="height:300px;width:1000px;border:1px solid #ddd; margin:0 20px 20px;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;"></div>
            <script type="text/javascript">
                // 百度地图API功能
                var map = new BMap.Map('map');
                var poi = new BMap.Point(113.414199,23.15666);
                map.centerAndZoom(poi, 15);
                map.enableScrollWheelZoom();
            
                var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                                '<img src="http://www.tjcontractlaw.com/skins/images/wycms/map-img.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
                                '公司地址：广州市天河区大观中路95号科汇园A座307<br/>电话：185 0208 5773<br/>QQ/微信:2667073616 ' +
                              '</div>';
            
                //创建检索信息窗口对象
                var searchInfoWindow = null;
                searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
                        title  : "广州微狼信息科技有限公司",      //标题
                        width  : 290,             //宽度
                        height : 105,              //高度
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
      <!-- E team-c -->        
    </div>
    <!-- E inside_con_r -->
</div>
<!-- E Wrap -->
<?php require_once'foot.php' ?></body>
</html>