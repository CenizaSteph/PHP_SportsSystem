<?php

$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "sports_system";

$conn = mysqli_connect($host,$user,$pwd,$dbname);
if(!$conn){
    die("Not connected");
}
?>