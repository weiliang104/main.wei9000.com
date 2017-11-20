  <div>
	<P>推荐阅读:</P>
    	<ul>
            <?php
				$ctnid = $dosql->GetTableRow('#@__infolist');
				$num=!empty($_GET['page'])?$_GET['page']*8-7 : 1;
				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",8);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];

				?>
			
		   	<li>
	            <div class="dhbox">
	                
	                    <div class="dhbox11"><a target="_blank" href="<?php echo $gourl; ?>"><?php echo ($num++).'.'.$row['title']; ?></a></div>
	            </div>

	        </li>

			<?php
				}
			?>
        </ul>
<!--      <?php echo $dopage->GetList()?> -->
       </div>
       
