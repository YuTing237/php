<?php
     session_start();
     unset($_SESSION["counter"]);
     echo "counter重置成功...."; #點選次數歸零會出現counter重置成功....,最後會跳回最初的次數
     echo "<meta http-equiv=REFRESH content='2; url=counter.php'>"; #利用counter.php
?>
