<?php 

if (isset($_POST["btn-login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';


	loginSeller($con, $email, $password);
	
}
else{
	header("location: ../index.php?error=button");
	exit();
}




?>