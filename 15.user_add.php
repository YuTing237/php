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
     #mysqli_query() 從資料庫查詢資料
     #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
     $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
     #echo $sql;
     if (!mysqli_query($conn, $sql)){
       echo "新增命令錯誤"; #新增使用者錯誤的話,就會告訴你新增命令錯誤
     }
     else{
       echo "新增使用者成功，三秒鐘後回到網頁"; #如果成功就會跳回網頁去
       echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";#會跳回bulletin.php的畫面
     }
   }
?>