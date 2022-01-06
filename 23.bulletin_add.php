<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
       echo "please login first"; #會自動跳到login.html
       echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","", "mydb");
        $sql ="insert into bulletin(title, content, type, time) #插入公告,內容包含標題、內容、類型、時間
        values('{$_POST['title']}','{$_POST['content']}',{$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo"新增命令錯誤"; #新增使用者錯誤的話,就會告訴你新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁"; #如果成功就會跳回網頁去
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; #會跳回bulletin.php的畫面
        }
    }
?>