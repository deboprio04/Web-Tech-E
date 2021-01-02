<?php 

if (isset($_POST["btn-signup"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$shop = $_POST["shop"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$date = $_POST["date"];
	$password = $_POST["password"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	

	createSeller($con, $name, $email, $shop, $phone, $date , $address, $password);
	
}
else{
	header("location: ../signup.php");
	exit();
}




?>