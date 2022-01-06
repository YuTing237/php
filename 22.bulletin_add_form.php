<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first"; #會自動跳到login.html
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_add.php> #會與bulletin_add.php連接
                    標    題:<input type=text name=title><br>
                    內    容:<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型:<input type=radio name=type value=1>系上公告
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間:<input type=date name=time><p></p>
                    #要輸入的內容
                    <input type=submit value=新增佈告> <input type=reset value=清除> #如果要提交新的佈告,就輸入完按下新增佈告即可,但如果要重置,就要按下清除鍵
                </form>
             </body>
        </html>
        ";
    }
?>
    
