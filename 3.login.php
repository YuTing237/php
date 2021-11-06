<?php
     if(($_POST["id"]=="john")&&($_POST["pwd"]=="john1234")) #配合login.html來輸入帳密
        echo "Welcome"; #輸入正確為Welcome
     else
        echo "fail login"; #輸入錯誤為fail login
?>