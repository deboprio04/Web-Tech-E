<?php 

if (isset($_POST["btn-signup"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$date = $_POST["date"];
	$password = $_POST["password"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
$con="luther";
	if (emailExists($con, $email) !== false) {
		header("location: ../signup.php");
		exit();
	}

	createDeliveryman($con, $name, $email, $phone, $date , $gender, $address, $password);
	
}
else{
	header("location: ../signup.php");
	exit();
}




?>