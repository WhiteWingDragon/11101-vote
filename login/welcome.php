<?php
session_start();  //很重要，可以用的變數存在session裡
$name=$_SESSION["name"];
echo "<h1>你好 ".$name."</h1>";
echo "<a href='logout.php'>登出</a>";
?>