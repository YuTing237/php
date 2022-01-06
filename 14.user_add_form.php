<html>
    <head><title>新增使用者</title></head>
    <body>
<?php
     error_reporting(0);
     session_start();
     if(!$_SESSION["id"]){
        echo "請登入帳號"; #顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; #會跳回login.html的畫面
    }
    else{
        echo "
            <form  action=user_add.php method=post>
                 帳號:<input type=text name=id><br>  #輸入帳號
                 密碼:<input type=text name=pwd><p></p>  #輸入密碼
                 <input type=submit value=新增> <input type=reset value=清除> #能用登入的按鍵來提交,能用清除的按鍵來重啟
            </form>
        ";
    }
?>
    </body>
</html>