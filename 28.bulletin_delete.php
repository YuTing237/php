<?php
     error_reporting(0);
     session_start();
     if(!$_SESSION["id"]){
        echo "請登入帳號";  #顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; #會跳回login.html的畫面
    }
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","", "mydb");
        $sql="delete from bulletin where bid='{$_GET[bid]}'"; #從公告中刪除
        if(!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤"; #刪除失敗就會出現佈告刪除錯誤的訊息
        }
        }else{
            echo "佈告刪除成功"; #刪除成功就會出現佈告刪除成功的訊息,回去看會發現這個佈告消失了
        }
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; #會跳回bulletin.php的畫面
    }
?>