<?php 

if (isset($_POST["btn-signup"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$position = $_POST["position"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$date = $_POST["date"];
	$password = $_POST["password"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	if (adminEmailExists($con, $email) !== false) {
		header("location: ../signup.php");
		exit();
	}

	createAdmin($con, $name, $email, $phone, $position, $date, $gender, $address, $password);
	
}
else{
	header("location: ../signup.php");
	exit();
}




?>