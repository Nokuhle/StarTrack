<?php

$serverName = "localhost";
$userName = "root";
$passWord = "";
$Connection = mysqli_connect($serverName, $userName, $passWord);
$database = "CREATE DATABASE StarTrek2023";
mysqli_query($Connection,$database);
$selection = mysqli_select_db($Connection,"StarTrek2023");

?>