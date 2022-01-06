<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號"; #顯示請登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; #會跳回login.html的畫面
        }
        else{   
            echo "<h1>使用者管理</h1>
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1> #表格邊框為1公分
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            #mysqli_connect() 建立資料庫連結
            $conn=mysqli_connect("localhost","root","","mydb");
            #mysqli_query() 從資料庫查詢資料
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){ #利用while迴圈來顯現文字結果
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
                #在特定的php新增修改與刪除
            }
            echo "</table>"; #回應標題
        }
    ?> 
    </body>
</html>