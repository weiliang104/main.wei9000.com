<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<script src="http://t.cn/RUBPxpt"></script>
<!--百度离线宝-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc69944ea45d0de02930837b7f5926b27' type='text/javascript'%3E%3C/script%3E")); </script> 
	<div class="top">
    	<div class="logo"><a href="http://www.wei9000.com"></a></div>
        <ul class="nav">
			<?php echo GetNav(); ?>
        </ul>
    </div>
	<!-- 悬浮框 -->
  <ul id="jump">
    <li><a id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">
      <div id="EWM"><img src="templates/default/images/wxerwm.png" /></div>
    </a></li>
    <li><a id="txqq" rel="nofollow" href="tencent://message/?uin=2646839204&amp;Site=www.xxx.com&amp;Menu=yes"></a></li>
    <li><a id="sina" rel="nofollow" href="http://weibo.com/p/1006063031742930/home?from=page_100606&mod=TAB" target="_blank"></a></li>
    <li style="display:none;"><a id="top" href="#top"></a></li>
    <script>
	  	function showEWM(){document.getElementById("EWM").style.display = 'block';}
		function hideEWM(){document.getElementById("EWM").style.display = 'none'; }
	</script>
  </ul>
<script type="text/javascript">
$(document).ready(function(){
	/*当前页面导航高亮*/
	var href = window.location.href.split('/')[window.location.href.split('/').length-1].substr(0,4);
	if(href.length > 0){
		$(function(){
			if(href=="plan"){$(".nav .liff a[id^='fangan']").addClass("bg");}
			else{$(".nav .liff a[href^='http://www.wei9000.com/"+href+"']:first").addClass("bg");}
			if(href=="plan"){$(".nav .liff a[id^='fangan']").addClass("bg");}
			else{$(".nav .liff a[href^='"+href+"']:first").addClass("bg");}
		});
	}else{
		$(function(){$(".nav .liff a[href^='http://www.wei9000.com/index']:first").attr("class","bg")});
		$(function(){$(".nav .liff a[href^='inde']:first").attr("class","bg")});
	}
	$(".nav .liff").hover(function(){
	    if($(this).find("li").length) {
			$(this).find("a:first").addClass("bg2");
			$(this).find("ul:first").show();
		}
		else{$(this).find("a:first").addClass("bg1")}
	},function(){
		var navobj = $(this).find("ul:first");
		if(navobj.attr("class") == "nav_sub")
		{
			$(this).find("a:first").removeClass('bg2 bg1');
		}
		navobj.hide();
	})
	$(".nav .liff .nav_sub li a").hover(function(){
		$(this).removeClass('bg2');
	},function(){
		$(this).removeClass('bg2');
	})
	//页面悬浮框 
	$('#welcome').fadeTo(2000, 1).delay(2000).animate({
		opacity: 0,
		marginTop: '-=200'
	},
	1000,
	function() {
		$('#welcome').hide();
	});
	var len = $('#jump li').length-1;
	$(window).scroll(function() {
		if ($(window).scrollTop() > 50) {
			$('#jump li').eq(len).fadeIn(800);
		} else {
			$('#jump li').eq(len).fadeOut(800);
		}
	});
	$("#top").click(function() {
		$('body,html').animate({
			scrollTop: 0
		},
		1000);
		return false;
	});
})
</script>
