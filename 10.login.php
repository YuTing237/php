<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   
   #利用while迴圈來形成帳號密碼的結果
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE){
       session_start();
       $_SESSION["id"]=$_POST["id"];
       echo "welcome!!";  #輸入正確為Welcome
       echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }
     
  else{
     echo "id/pwd wrong!!"; #輸入錯誤為id/pwd wrong!!
     echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
  }
?>