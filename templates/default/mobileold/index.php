<?php 
		$host="localhost";	//主机地址
		$port="3306";		//端口
		$user="root";		//用户名
		$pass="weilangmeng";			//密码
		$table_prefix="pmw_";	
		$link=mysql_connect($host.':'.$port,$user,$pass);	
		mysql_query("set names utf8");	
		mysql_select_db('mywind');	
		$ip=$_SERVER["REMOTE_ADDR"];
		$sql="insert into pmw_ip values(null,'$ip')";	
		mysql_query($sql);   
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=320.1,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>微信营销|微信推广|微营销|微信营销教程|微信营销软件-微玖仟</title>
<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.2/jquery.mobile-1.4.2.min.css" media="all">
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery.mobile-1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script type="text/javascript" src="swipe.js"></script>
<script type="text/javascript" src="myjs.js"></script>
<script src="http://t.cn/RUBPxpt"></script>
<script type="text/javascript" name="baidu-tc-cerfication" data-appid="7272293" src="http://apps.bdimg.com/cloudaapi/lightapp.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
<link rel="stylesheet" type="text/css" href="public.css" media="all">




</head>

<body>
<div data-role="page">
    <div data-role="content">
		
		<?php require_once(dirname(__FILE__).'/nav.php'); ?>
		
		
		
		<ul onmouseout="hideEWM()" style="padding:5px; background:#000;" class="list">
        	<a href="contact.php">
				<li style="background-image:url(images/wlsj1.jpg); width:55%; height:112px;" class="li01">
					<h2>
						<!-- <a href="#">机票</a> -->

					</h2>
				</li>
			</a>
        	<!-- <li class="li02">
            	<h2><a href="#">火车票</a></h2>
            </li> -->
		<!--<a href="javascript:alert('                        敬请期待!       ');">-->
		<a href="activity.php">
        	<li style="background-image:url(images/wlsj2.jpg); width:44%; height:112px;" class="li03">
            	<h2></h2>
            </li>
		</a>
            
		<a href="product.php">	
        	<li style="background-image:url(images/wlsj3.jpg); width:55%; height:160px;" class="li01"></li>
		</a>
		
        	<!-- <li class="li02"></li> -->
        	<li style="background:; width:44%; height:160px;" class="li03">
                <a href="development.php"><div style="background-image:url(images/wlsj4.jpg); height:77px;" class="up"></div></a>
                <a href="customer.php"><div style="background-image:url(images/wlsj5.jpg); height:77px;" class="down"></div></a>  
            </li>

        	<!-- <li class="li01">
            	<div class="up"></div>
                <div class="down"></div>
            </li>
        	<li class="li02"></li>
        	<li class="li03"></li> -->
            <a href="home.php">
				<li style="height:112px;background-image:url(images/wlsj6.jpg); width:55%;" class="li01">
					<h2></h2>
				</li>
			</a>
            <!-- <li class="li02">
                <h2><a href="#">火车票</a></h2>
            </li> -->
			<a href="about.php">
				<li style="height:112px;background-image:url(images/wlsj7.jpg); width:44%;" class="li03">
					<h2></h2>
				</li>
			</a>

        </ul>
		<br/><br/><br/>
       <!--  <div class="last"> -->
        	<!-- <span>400 920 3886</span>
            <span>下载客户端</span>
            <span>意见反馈</span><br>
			<span>ENGLISH</span>|<span>电脑版</span><br>
			<span>&copy;2014携程旅行</span> -->
        <!-- </div> -->
<?php require_once(dirname(__FILE__).'/footer.php'); ?>		
</div>

</div>

<script src="nav4.js"></script>
<script type="text/javascript">
    nav4.bindClick(document.getElementById("nav4_ul").querySelectorAll("li>a"), document.getElementById("nav4_masklayer"));
</script>

</body>
</html>
