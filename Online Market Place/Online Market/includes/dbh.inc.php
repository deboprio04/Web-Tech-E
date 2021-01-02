<?php 
if(!isset($_SESSION)){
	session_start();
}
$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "marketplace";

$con = mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName);


?>