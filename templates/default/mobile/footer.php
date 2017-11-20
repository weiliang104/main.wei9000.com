	
    <div class="cls"></div>
  </div>
  <div class="cls"></div>

  <footer>
    <p class="copyright"><?php echo $cfg_copyright ?></p>
    <p class="address">地址：广州市天河区大观中路95号科汇园A座307</p>
  </footer>
  <!--<div class="fixed-contact" style="width:100%;height:35px;padding-top:12px;background:#2bae14;">
    <ul style="width:100%">
	<li style="float:left;list-style-type:none;width:50%;text-align:center;background:url(./templates/default/images/2.jpg) no-repeat 10px center;">
	<a href="tel:18502085773">18502085773</a></li>
	<li style="float:left;list-style-type:none;width:50%;text-align:center;background:url(./templates/default/images/1.png) no-repeat 10px center;">
	<a href="http://wpa.qq.com/msgrd?v=3&uin=1476076525&site=qq&menu=yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ</a></li></ul>
  </div>-->
  <div class="fixed-contact" style="width:100%;height:55px;background:#2bae14;padding-left:20px">
	<a style="color:#fff;display: block;width: 50%;float: left;" href="tel:18502085773"><img src="./templates/default/images/2.png" width="50" />18502085773</a>
	<a style="color:#fff;display: block;width: 50%;float: left;" href="mqqwpa://im/chat?chat_type=wpa&uin=2667073616&version=1&src_type=web&web_src=oicqzone.com"><img src="./templates/default/images/1.png" />在线咨询</a>
	
  </div>
  <div class="overlay"></div>
 <script src="./skins/js/zepto.js"></script>
 <script src="./skins/js/gmu.js"></script>
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
