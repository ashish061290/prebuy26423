<?php

$server = "localhost";
$user  = "root";
$pwd = "";
$dbname = "prebuy";

$conn = mysqli_connect($server,$user,$pwd,$dbname);
if(!$conn){
	echo "Database Not connected";
}
 
?>