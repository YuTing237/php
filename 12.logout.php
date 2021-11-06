<?php
     session_start();
     unset($_SESSION["id"]);
     echo "登出成功...."; #顯示登出成功....
     echo "<meta http-equiv=REFRESH content='3; url=login.html'>"; #會跳回login.html的畫面
?>