<?php
include 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/style.css">
	<title>Document</title>
</head>
<body>
	<?php 
	include 'navbar.php' ?>



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