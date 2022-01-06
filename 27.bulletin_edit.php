<?php
    error_reporting(0);
    session_start();
    if(!$_SESSION["id"]){
        echo "請登入帳號"; #顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";  #會跳回login.html的畫面
    }
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","", "mydb");
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content]}',
        time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){ #更新公告的標題,內容,時間,類型
            echo "修改錯誤"; #修改失敗會出現這段訊息
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表"; #如果成功就會跳回網頁去
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; #會跳回bulletin.php的畫面
        }
    }
?>