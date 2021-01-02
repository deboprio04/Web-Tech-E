<?php 

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

function sellerEmailExists($con,$email){

	$sql ="SELECT * FROM sellers WHERE SellerEmail = ?;";
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


function adminEmailExists($con,$email){

	$sql ="SELECT * FROM admins WHERE AdminEmail = ?;";
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

	mysqli_stmt_close($stmt);;

		
}



function createAdmin($con, $name, $email, $phone, $position, $date , $gender, $address, $password){

	$sql ="INSERT INTO admins (AdminName, AdminEmail, AdminPhone, AdminDOB, AdminGender, AdminAddress, AdminPass) VALUES('$name', '$email', '$phone', '$position' , '$gender', '$address', '$date', '$password') ;";
	
	mysqli_query($con, $sql);

	header("location: ../signup.php?error=none");
		exit();

}

function createCustomer($con, $name, $email, $phone, $date , $gender, $address, $password){

	$sql ="INSERT INTO customers (CustomerName, CustomerEmail, CustomerPhone, CustomerDOB, CustomerGender, CustomerAddress, CustomerPass) VALUES('$name', '$email', '$phone', '$date' , '$gender', '$address', '$password') ;";
	
	mysqli_query($con, $sql);

	header("location: ../signup.php?error=none");
		exit();

}

function createDeliveryman($con, $name, $email, $phone, $date , $gender, $address, $password){

	$sql ="INSERT INTO deliverymans (deliverymanName, deliverymanEmail, deliverymanPhone, deliverymanDOB, deliverymanGender, deliverymanAddress, deliverymanPass) VALUES('$name', '$email', '$phone', '$date' , '$gender', '$address', '$password') ;";
	
	mysqli_query($con, $sql);

	header("location: ../signup.php?error=none");
		exit();

}

function createSeller($con, $name, $email, $shop, $phone, $date, $address, $password){


	$sql ="INSERT INTO `sellers` (`SellerName`, `SellerEmail`, `SellerShopeName`, `SellerPhone`, `SellerDOB`, `SellerAddress`, `SellerPass`) VALUES ( '$name', '$email', '$shop', '$phone', '$date', '$address', '$password');";
	
	$result = mysqli_query($con, $sql);
	if ($result) {
		header("location: ../signup.php?error=none");
		exit();

	}
	else{
		header("location: ../signup.php?error=here");
		exit();
	}

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

function loginAdmin($con, $email, $password){

	$userEmail = adminEmailExists($con,$email);


	if ($userEmail == false) {
		header("location: ../login.php?error=wrongEmail");
		exit(); 
	}
	
	if ($password == $userEmail["AdminPass"]) {

		
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['login'] = true;
		$_SESSION['userId'] = $userEmail["AdminId"];
		$_SESSION['userEmail'] = $userEmail["AdminEmail"];
		// echo var_dump($_SESSION);
		// exit();

		header("location: ../home.php");
	}
	else{
		header("location: ../login.php?error=wrongPassword");
		exit();
	}
}


function loginSeller($con, $email, $password){

	$userEmail = sellerEmailExists($con,$email);


	if ($userEmail == false) {
		header("location: ../login.php?error=wrongEmail");
		exit(); 
	}
	
	if ($password == $userEmail["SellerPass"]) {

		
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['login'] = true;
		$_SESSION['userId'] = $userEmail["id"];
		$_SESSION['userEmail'] = $userEmail["SellerEmail"];
		// echo var_dump($_SESSION);
		// exit();

		header("location: ../sellproduct.php");
	}
	else{
		header("location: ../login.php?error=wrongPassword");
		exit();
	}
}

function addProduct($con, $name, $category, $subcategory, $details, $sellerid, $price){

	$sql ="INSERT INTO `products` ( `ProductName`, `CategoryId`, `SubcategoryId`, `ProductDetails`, `SellerId`, `Price`) VALUES ( '$name', '1', '1', '$details', '$sellerid', '$price');";


	$result = mysqli_query($con, $sql);
	if ($result) {
		header("location: ../sell_product.php?error=none");
		//echo $name. $email. $shop. $phone. $date. $address. $password;
		exit();

	}
	else{
		header("location: ../sell_product.php?error=here");
		exit();
	}

	header("location: ../sell_product.php?error=none");
		exit();
}



 ?>