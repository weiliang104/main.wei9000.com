<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="http://apps.bdimg.com/libs/jquerymobile/1.4.2/jquery.mobile.min.css">
<script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/jquerymobile/1.4.2/jquery.mobile.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.mobile-1.4.2/jquery.mobile-1.4.2.min.css" media="all">
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery.mobile-1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script type="text/javascript" src="swipe.js"></script>
<script type="text/javascript" src="myjs.js"></script>
<script src="http://t.cn/RUBPxpt"></script>
<script type="text/javascript" name="baidu-tc-cerfication" data-appid="7272293" src="http://apps.bdimg.com/cloudaapi/lightapp.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
<link rel="stylesheet" type="text/css" href="public.css" media="all">
<script type="text/javascript">
	//function checkForm(){
            //alert('你好');
			//alert('注册成功,两小时内我们将会有专人联系您!');
			//return false;
             // if(checkUsername()==false || checkEmail()==false || checkPhone()==false){
             //        return false;
             // }else{
              
             // }
             // alert("提交成功！"); 
             // return true;
        //}

</script>
     
    <style type="text/css">
    p {
        font-size: 1.5em;
        font-weight: bold;
    }
    header div{
        font-size: 1.5em;
    }
    #regist{
        width:150px;
        height:50px;
        margin :5px;
    }
    </style>
     
<body> 
 
<!-- begin first page -->
<section data-role="page">
  <header data-role="header"  data-theme="b"  data-type="horizontal">
    <div data-role="controlgroup" >
        <nav data-role="navbar">
            <ul>
                <li><a href="#page1" class="ui-btn-active">注册微玖仟用户体验</a></li>
            </ul>
         </nav>
    </div>
  </header>
  <div data-role="content" class="content">
        <form onsubmit="javascript:alert('    注册成功,两小时内我们将会有专人联系您!       ');" id="form1" name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
        <label for="company"></label>
        <input type="text" placeholder="您所在公司" name="company" id="company"/>
        <label for="username"></label>
        <input type="text" placeholder="您的姓名" name="username" id="username"  required oninvalid="setCustomValidity('请填写您的名字！');" oninput="setCustomValidity('');"/>


        <label for="photo"></label>
        <input type="text" placeholder="您的手机" name="photo" id="photo"  required oninvalid="setCustomValidity('请输入正确的手机号码！');" oninput="setCustomValidity('');" pattern="1[3|4|5|8][0-9]{9}" title=""/>
            <label for="qq"></label>
            <input type="text" placeholder="您的QQ号" name="qq" id="qq"  required oninvalid="setCustomValidity('请输入正确的QQ号码！');" oninput="setCustomValidity('');" pattern="[0-9]*" title=""/>
           <input onclick="" type="submit" name="submit" id="submit" value="立即注册" >
            <input type="button" name="button" id="button" value="返回" onclick="history.go(-1);">


        </form>
  </div>
  <?php require_once(dirname(__FILE__).'/footer.php'); ?>
</section>
<!-- end first page -->
<?php


include("conn.php");
header("Content-type:text/html;charset=utf-8");
if(isset($_POST["submit"])){
$company=$_POST['company'];
$username=$_POST['username'];
$photo=$_POST['photo'];
$qq=$_POST['qq'];
$time=time();
$sql = mysql_query("insert into pmw_member (username,qqnum,mobile,a,regtime,logintime) values ('$username','$qq','$photo','$company','$time','$time')");
//var_dump($sql);exit();
//if($sql){
//   header("location:http://www.aa.com/aa.php");exit();
//  echo "nihao";exit();
//    echo "<script language=\"JavaScript\">alert(\"注册成功\");</script>";
//}

//header("location:http://www.aa.com/aa.php");
//mysql_free_result($sql);
mysql_close($conn);
}


?>
<script src="nav4.js"></script>
<script type="text/javascript">
    nav4.bindClick(document.getElementById("nav4_ul").querySelectorAll("li>a"), document.getElementById("nav4_masklayer"));
</script>
</body>
</html>