
<!-- E Links-->
<!-- S Foot -->
<div class="foot">
	<div class="w1000 foot_c_bg">
    	<div class="fl f_logo">
        	<a href="/"><?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=33 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
            ?>
            <img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" /></a>
            <?php
            }
            ?>
        
        </div>
        <div class="fs f_server">
           <ul>
            <li class="title">营销产品</li>
            <?php
                $dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=2 AND checkinfo=true ORDER BY orderid,id DESC");
                while($row = $dosql->GetArray())
                {
                ?>
                <li><a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a></li>
            <?php
            }
            ?>
           </ul>
        </div>
        <div class="fs f_server">
              <ul>
                <li class="title">营销产品</li>
               <?php
                $dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=3 AND checkinfo=true ORDER BY orderid,id DESC");
                while($row = $dosql->GetArray())
                {
                ?>
                <li><a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a></li>
            <?php
            }
            ?>
            </ul>
        </div>
         <div class="fs f_server">
              <ul>
                <li class="title">微玖仟服务</li>
               <?php
                $dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=4 AND checkinfo=true ORDER BY orderid,id DESC");
                while($row = $dosql->GetArray())
                {
                ?>
                <li><a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a></li>
            <?php
            }
            ?>
            </ul>
        </div>
        <div class="fr f_text">
            
        	<p><a href="/" title="微信营销">微信营销</a> | <a href="http://www.wei9000.com/product.html" title="营销产品">营销产品</a> | <a href="http://www.wei9000.com/case.html" title="解决方案">解决方案</a> | <a href="http://www.wei9000.com/resource.html"  title="资源优势">资源优势</a> |<br/> <a href="http://www.wei9000.com/news.html" title="微信营销资讯">微信营销资讯</a> | <a href="http://www.wei9000.com" title="联系我们">联系我们</a> | </p>         
            <?php echo info(10); ?>
			
        </div> 
    <div class="f_icp">
        <p>Copyright 2010-2015 All Rights Reserved. 广州微狼信息科技有限公司 版权所有<a  rel="external nofollow" href='http://gdcainfo.miitbeian.gov.cn'><?php echo $cfg_copyright ?></a></p>
    </div>       
    </div>
<!-- E Foot -->

<!-- S Links-->
<div class="footerlink">		
    	<div class="link_title">友情链接:</div>
		<div class="link_box"><?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=1 AND checkinfo=true ORDER BY orderid,id DESC");
	while($row = $dosql->GetArray())
	{
	?>
	<a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a>
	<?php
	}
	?><script type="text/javascript" src="http://links.webscan.360.cn/index/index/23c30b1c927edd979c762d64b93c1b2f"></script>
	</div>
		</p>        
    </div>
</div>
</div>
<!--在线客服-->
<div class="kfbox fw">
    <div class="kfpup">
        <div class="kefu-t"></div>
        <div class="kfin">
            <p><a class="wx-ico" id="weixin" href="javascript:void(0)" onmouseover="showEWM()" onmouseout="hideEWM()">微信咨询
           </a></p>
            <p><a class="qq-ico" href="tencent://message/?uin=2667073616&amp;Site=www.wei9000.com&amp;Menu=yes">QQ在线</a></p>
            <p><a class="qq-ico" href="tencent://message/?uin=2820799421&amp;Site=www.wei9000.com&amp;Menu=yes">QQ在线</a></p>
            <p><a class="tell-ico" href="javascript:void(0)">1850 2085 773</a></p>
			
        <script>
        function showEWM(){document.getElementById("EWM").style.display = 'block';}
        function hideEWM(){document.getElementById("EWM").style.display = 'none'; }
        </script>
        </div>
        <div class="kefu-b"></div>
		 <div class="emwdp" id="EWM"><img src="templates/default/images/wxerwm.png" /></div>
    </div>
	
</div>
<script language="javascript">
	$(".kfbox").hover(function(){
        $(this).children('.kfpup').stop(true,true).animate({marginRight:0});
	},function(){
		$(this).children('.kfpup').stop(true,true).animate({marginRight:-160});
   });
</script>

