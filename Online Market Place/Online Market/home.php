<?php
if(!isset($_SESSION)){
	session_start();
}
include 'includes/dbh.inc.php';
if(!isset($_SESSION['userId']))
{
    header("location: index.php"); // The user is not logged in. Redirect him to the login page.
}

?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/style.css">
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg">
  		<div class="container-fluid container">
    	  <a class="navbar-brand " href="#">Navbar</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Category
	          </a>
	          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#">Profile</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#" tabindex="-1" >Order list</a>
	        </li>
	      </ul>
	      	<form class="d-flex">
	        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
	        <button class="btn" type="submit">Search</button>
	      </form>
	      </div>
	    </div>
	  </div>
	</nav>



	<div class="slider">
		<div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
		    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
		    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="Images/pexels-amanda-grove-419235.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="Images/pexels-veeterzy-70862.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="Images/pexels-karolina-grabowska-4498456.jpg" class="d-block w-100 img-fluid" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </a>
		</div>
	</div>


	<div class="container">
		<div class="products">
			<div class="row row-cols-1 row-cols-md-4 g-4 ">


			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-alex-andrews-821651.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-cook-eat-772508.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a short card.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-doterra-international-llc-5734904.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-doterra-international-llc-4041098.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-alex-andrews-821651.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-cook-eat-772508.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a short card.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-doterra-international-llc-5734904.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-doterra-international-llc-4041098.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-alex-andrews-821651.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-cook-eat-772508.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a short card.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-doterra-international-llc-5734904.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card h-100">
			      <img src="Images/products/pexels-doterra-international-llc-4041098.jpg" class="card-img-top img-fluid" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Card title</h5>
			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      </div>
			    </div>
			  </div>



			</div>			
		</div>
	</div>


	<?php 
	$sql = "SELECT * FROM customers;";
	$result = mysqli_query($con,$sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ( $row = mysqli_fetch_assoc($result)) {
			echo $row['CustomerName'];
		}
	}

	 ?>
	 <?php 
	$sql = "SELECT * FROM customers;";
	$result = mysqli_query($con,$sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ( $row = mysqli_fetch_assoc($result)) {
			echo $row['CustomerName'];
		}
	}

	 ?>
	


	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>