<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        #mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("localhost","root","", "mydb");
        $result=mysqli_query($conn, "select * from user where bid='{$_GET[bid]}'");
        $row=mysqli_fetch_array($result); #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
        $checked1=""; #檢查1,2,3
        $checked2="";
        $checked3="";
        if ($row['type']==1)
           $checked1="checked";
        if ($row['type']==2)
           $checked2="checked";
        if ($row['type']==3)
           $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php> #會與bulletin_edit.php連接
                    佈告編號:{$row[bid]}<input type=hidden name=bid value={$row['bid']}><br>
                    標　　題:<input type=text name=title value={$row['title']}><br>
                    內　　容:<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型:<input type=radio name=type value=1 {$checked1}>系上公告
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間:<input type=date name=time value={$row['time']}><p></p>
                    #要輸入的內容
                    <input type=submit value=修改佈告> <input type=reset value=清除> #如果要進行佈告的修改,就要輸入完後再按下修改佈告即可,但如果要重置,就要按下清除鍵
                </form>
            </body>
        </html>
        ";
    }
?>
    
