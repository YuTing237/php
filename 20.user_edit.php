<?php
    error_reporting(0);
    session_start();
    if(!$_SESSION["id"]){
        echo "請登入帳號"; #顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; #會跳回login.html的畫面
    }
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","", "mydb");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ #是用來更新用戶設置的帳號與密碼
            echo "修改錯誤"; #修改失敗會出現這段訊息
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>"; #會跳回user.php的畫面
        }else{
            echo "修改成功，三秒鐘後回到網頁"; #修改成功會出現這段訊息
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>"; #會跳回user.php的畫面
        }
    }
?>