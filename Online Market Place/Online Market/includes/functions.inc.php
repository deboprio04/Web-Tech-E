<?php 
 include 'dbh.inc.php';

function emailExists($con,$email){


	$sql ="SELECT * FROM customers WHERE CustomerEmail = ?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt ,"s" , $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);
	echo var_dump($resultData);

	if (true) {
		$result = mysqli_fetch_assoc($resultData);
		echo var_dump($result);
		return $result;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);

}

function createCustomer($con, $name, $email, $phone, $date , $gender, $address, $password){

	$sql ="INSERT INTO customers (CustomerName, CustomerEmail, CustomerPhone, CustomerDOB, CustomerGender, CustomerAddress, CustomerPass) VALUES('$name', '$email', '$phone', '$date' , '$gender', '$address', '$password') ;";
	
	mysqli_query($con, $sql);

	header("location: ../signup.php?error=none");
		exit();

}

function loginUser($con, $email, $password){

	$userEmail = emailExists($con,$email);


	if ($userEmail == false) {
		header("location: ../login.php?error=wrongEmail");
		exit(); 
	}
	
	if ($password == $userEmail["CustomerPass"]) {

		
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['login'] = true;
		$_SESSION['userId'] = $userEmail["id"];
		$_SESSION['userEmail'] = $userEmail["CustomerEmail"];
		// echo var_dump($_SESSION);
		// exit();

		header("location: ../home.php");
	}
	else{
		header("location: ../login.php?error=wrongPassword");
		exit();
	}
}


function createProduct($con, $product_name, $category_id, $subcategory_id, $seller_id , $price){

	$sql ="INSERT INTO products (SellerId, ProductName, CategoryId, SubcategoryId, SellerId, Price) VALUES('$product_name', '$category_id', '$subcategory_id', '$seller_id' , '$price') ;";
	
	mysqli_query($con, $sql);

	// header("location: ../signup.php?error=none");
	// 	exit();

}

function getProduct($con){

	$sql ="SELECT * FROM products;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);
	return $resultData;


	// mysqli_stmt_close($stmt);

}

 ?>