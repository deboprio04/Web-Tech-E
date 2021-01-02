<?php 

if (isset($_POST["btn-product"])) {
	session_start();
  	$sellerid = $_SESSION['userId'];
  	$name = $_POST["name"];
	$category = $_POST["category"];
	$subcategory = $_POST["subcategory"];
	$price = $_POST["price"];
	$details = $_POST["details"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';


	addProduct($con, $name, $category, $subcategory, $details, $sellerid, $price);
	
}
else{
	header("location: ../index.php?error=button");
	exit();
}




?>