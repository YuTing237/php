<?php
    error_reporting(0);
    session_start();
    if(!$_SESSION["id"]){
        echo "please login first";#會自動跳到login.html
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";
        $conn=mysqli_connect("localhost","root","","mydb");
        $result=mysqli_query($conn,"select * from bulletin");
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; #利用表格邊框來顯現文字的整齊度
        while($row=mysqli_fetch_array($result)){ #利用while迴圈來顯現大批的文字結果
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>";
            echo $row["title"];
            echo "</td><td>";
            echo row["content"];
            echo "</td><td>";
            echo $row["time"];
            echo "</td><tr>";
             #以上是要顯現的類型、標題、時間...等等
        }
        echo "</table>"; #回應標題
    }
?>
    