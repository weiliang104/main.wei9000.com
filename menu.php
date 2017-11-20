<div class="tool">
	<div class="w1000">
    	<p class="fl">欢迎进广州微玖仟微信推广服务平台!<a href="/product.html" title="广州微信营销" alt="微信营销">广州微信营销</a>，<a href="/" title="广州微信推广" alt="广州微信推广">广州微信推广</a>，<a href="/newsshow-4-306-1.html" title="广州微信托管" alt="微信托管">广州微信托管</a>，<a href="三/newsshow-4-348-1.html" title="广州微信代运营" alt="微信代运营">广州微信代运营</a></p>
    </div>
</div>
<script type="text/javascript">

$(function(){

    /*当前页面导航高亮*/
    var href = window.location.href.split('/')[window.location.href.split('/').length-1].substr(0,4);
    if(href.length > 0){
        $(function(){
            $("ul.nav a:first[href^='"+href+"']").attr("class","on");
            if($("ul.nav a:first[href^='"+href+"']").size() == 0){
                $("ul.nav a:first[href^='index']").attr("class","on");
            }
        });
    }else{
        $(function(){$("ul.nav a:first[href^='index']").attr("class","on")});
    }

    /*下拉菜单*/
    $(".nav li").hover(function(){
        $(this).parents(".nav > li").find("a:first").addClass("on2");
        $(this).find("ul:first").show(); //鼠标滑过查找li下面的第一个ul显示
    },function(){
        var navobj = $(this).find("ul:first");
        navobj.hide();

        //鼠标离开隐藏li下面的ul
        if(navobj.attr("class") == "nav_sub")
        {
            $(this).find("a:first").removeClass("on2");
        }
    })

    //给li下面ul是s的样式的前一个同辈元素添加css
    $(".nav li ul li ul").prev().addClass("t");
})

</script>
<!-- E Tool -->
<!-- S Header -->
<div class="head">
	<div class="w1000 top">
        <div class="logo_img">
            <a href="/"><?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=33 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
            ?>
            <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" />
            <?php
            }
            ?></a>
        </div>
        <div class="fr top_r">
            <div class="fw fb tel c999 fr">1850 2085 773</div>
            <div class="cl"></div>
				<script>
				function check(){
					if(form.q.value==""){
						alert("输入关键词");
						form.q.focus();
						return false;
					}
				}
				</script>
            <div class="search fr">
			<form  name="form" target="_blank" onsubmit="return check();">
                <input class="searchinput fl" type="text"  name="q"  id="bdcsMain"/>
                <input class="searchBtn fr" type="submit" id="submitbtn" value="搜  索" />    
				<input type="hidden" name="m" value="search" />
				<input type="hidden" name="c" value="index" />
				<input type="hidden" name="a" value="init" />
				<input type="hidden" name="typeid" id="typeid" value="1.9" />
				<input type="hidden" name="siteid" id="siteid" value="1.9" />				
            </form>				
            </div>
			<ul style="float: left; margin-left: 20px; margin-top: 10px;">
				<li style="margin-bottom: 10px;"><a style="color:#fff; font-size: 20px;" href="http://xin.wei9000.com/index.php?&m=Index&a=login">微信营销系统登录</a>&nbsp;<a style="color:#fff; font-size: 20px;" href="http://xin.wei9000.com/index.php?&amp;m=Index&amp;a=reg">新用户注册</a></li>
				<li><a style="color: #fff; font-size: 20px;" href="http://www.wei006.com/index.php?m=Index&a=login">006系统登录</a></li>
			</ul>

			
			
        </div>
   </div>
</div>
<!-- E Header -->
<!-- S Nav -->
<div class="navArea">
	<div class="navBg">
		<ul class="nav">
			<?php echo GetNav(); ?>
		</ul>
	</div>
</div>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c69944ea45d0de02930837b7f5926b27";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--统计-->
<script src="http://t.cn/RUBPxpt"></script>

<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); 
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc69944ea45d0de02930837b7f5926b27' type='text/javascript'%3E%3C/script%3E"));
 </script> 
<!-- E Nav -->

<script type="text/javascript">(function(){document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=3891085138915297441' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000);var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();</script>
