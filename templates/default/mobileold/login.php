<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="http://apps.bdimg.com/libs/jquerymobile/1.4.2/jquery.mobile.min.css">
<script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/jquerymobile/1.4.2/jquery.mobile.min.js"></script>
<script type="text/javascript">
     jQuery(document).ready(function() {
        //输入事件
        $("input[id]").bind("focus",function () { 
        if($(this).attr("value")=='用户名'||$(this).attr("value")=='密码')
        $(this).attr("value",""); 
        }); 
        //提交
        $("#regist").bind("click", function() {
              if (true) {
                $.ajax({
                   type: "POST",
                   url: "http://localhost:8080/note/servlet/Login",
                   data: $("form#loginform").serialize(),
                   success: function(msg){
                     if(msg=='success'){
                        $.mobile.changePage("../content/first.html","slidedown", true, true);
                     }else{
                        $.mobile.changePage("../content/loginfalse.html","slidedown", true, true);
                     }
                      
                   }
                }); 
              }
            });
        });
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
                <li><a href="#page1" class="ui-btn-active">体验微狼</a></li>
                
            </ul>
         </nav>
    </div>
  </header>
  <div data-role="content" class="content">
        <form method="post" id="registform">
        <label for="email">公司名称</label>
        <input type="text" name="email" id="email"/>
		
        <label for="password">姓名</label>
        <input type="password" name="password" id="password"/>
		
        <label for="nicky">手机</label>
        <input type="text" name="nicky" id="nicky"/>

		<label for="nicky">qq</label>
        <input type="text" name="nicky" id="nicky"/>
        
            <center>
                <a data-role="button" id="regist" data-theme="e">立即体验</a>
            </center>
        </form>
		
		<?php require_once(dirname(__FILE__).'/footer.php'); ?>
  </div>
</section>
<!-- end first page -->
	

</body>
</html>