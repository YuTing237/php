<?php
    error_reporting(0);
    session_start();
    if(!$_SESSION["id"]){
        echo "請登入帳號"; #顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; #會跳回login.html的畫面
    }
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql ="delete from user where id='{$_GET[id]}'"; #刪除ID
        if(!mysqli_query($conn,$sql)){ #能夠刪除使用者
            echo "使用者刪除錯誤"; #刪除失敗就會出現使用者刪除錯誤的訊息
        }else{
            echo "使用者刪除成功";#刪除成功就會出現使用者刪除成功的訊息,回去看會發現這個使用者消失了
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>"; #會跳回user.php的畫面
    }
?>