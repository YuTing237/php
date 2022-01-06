<html>
    <head><title>修改使用者</title></head>
    <body>
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
        #從用戶那裡選擇你要的ID
        $result=mysqli_query($conn, "select * from user where id='{$_GET[id]}'");
        $row=mysqli_fetch_array($result); #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row[id]}>
            帳號:{$row[id]}<br>
            密碼:<input type=text name=pwd value={$row[pwd]}><p></p> 
            <input type=submit value=修改>  #輸入完帳密後,可以進行修改的動作
        </form>
        ";
    }
    ?>
    </body>
</html>