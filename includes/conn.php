<?php
/*
try {
$db = new PDO('mysql:host=localhost;dbname=yad;charset=utf8','root');

}
catch(PDOException $e) {
echo "Connection failed:" . $e->getMessage();
}*/



$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "yad";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
