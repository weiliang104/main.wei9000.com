 <div data-role="navbar">
  <ul style="position:fixed;bottom:0px; width:500px;" >
	<li><a style="background:#0B4A72; color:#fff;" href="index.php" data-icon="home">首页</a></li>
	<li><a style="background:#0B4A72; color:#fff;" href="register.php" data-icon="info">用户体验</a></li>
	<!--<li>
	<a class="online" class="box" style="background:#0B4A72; color:#fff;" data-icon="user">在线咨询</a>
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2969458587&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2969458587:41" alt="点击这里给我发消息" title="点击这里给我发消息"/>在线咨询</a>
</li>-->
<div  id="hovertreebottom_masklayer" class="nav4">
	<li id="nav4_ul" class="nav4" data-icon><a href="javascript:;" style="background:#0B4A72; color:#fff;" class="ui-link ui-btn ui-icon-info ui-btn-icon-top">
			<span>在线咨询</span>
		</a>
		<dl>
			<dd><a onmouseout="hideEWM()" href="http://weibo.com/p/1006063031742930/home?from=page_100606&mod=TAB"><span>新浪微博</span></a></dd>
			<dd>
				<a href="#" id="weixin" onmouseover="showEWM()"><span>微信扫扫</span></a>
				<!--<a href="weixin://qr/gh_34bd692a9835" id="weixin"  ><span>微信扫扫11</span></a>-->
			</dd>
			      <div style="display:none;" id="EWM"><font color="white" style="text-align:center;">请打开微信扫描图片上的二维码</font><img src="images/wxerwm.png"></div>
			<!--<dd><a target="_blank" href="mqqwpa://im/chat?chat_type=wpa&uin=2969458587&version=1" ><span>在线 QQ1</span></a></dd>-->
			<dd><a onmouseout="hideEWM()" target="_blank" href="mqqwpa://im/chat?chat_type=wpa&uin=2667073616&version=1&src_type=web&web_src=oicqzone.com"><img onmouseout="hideEWM()" border="0" src="http://wpa.qq.com/pa?p=2:547712904:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></dd>
			<!--<dd><a target="_blank" href="tencent://message/?uin=2969458587&Site=QQ咨询&Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2969458587:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></dd>-->
			
		</dl>
		<!--script src="http://hovertree.com/texiao/mobile/5/hovertreebottom.js"></script-->
<script type="text/javascript">
 var hovertreebottom = (function () {
    bindClick = function (els, mask) {
        if (!els || !els.length) { return; }
        var isMobile = "ontouchstart" in window;
        for (var i = 0, ci; ci = els[i]; i++) {
            ci.addEventListener("click", evtFn, false);
        }

        function evtFn(evt, ci) {
            ci = this;
            for (var j = 0, cj; cj = els[j]; j++) {
                if (cj != ci) {
                    console.log(cj);
                    cj.classList.remove("on");
                }
            }
            if (ci == mask) { mask.classList.remove("on"); return; }
            switch (evt.type) {
                case "click":
                    var on = ci.classList.toggle("on");
                    mask.classList[on ? "add" : "remove"]("on");
                    break;
            }
        }
        mask.addEventListener(isMobile ? "touchstart" : "click", evtFn, false);
    }
    return { "bindClick": bindClick };
})();
 function showEWM(){document.getElementById("EWM").style.display = 'block';}
 function hideEWM(){document.getElementById("EWM").style.display = 'none'; }
</script>
		</li></div>
	<li><a style="background:#0B4A72; color:#fff;" href="tel:18502085773" data-icon="phone">电话咨询</a></li>

  </ul>

</div>





