<?php
     session_start();
     if (!isset($_SESSION["counter"]))  #isset是用來檢查變數是否有設置 
         $_SESSION["counter"]=1; #次數預設開始為1
    else 
         $_SESSION["counter"]++; # 不斷重新整理頁面會增加1

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>"; #重置的按鍵
?>