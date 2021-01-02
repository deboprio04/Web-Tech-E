<?php
include 'includes/dbh.inc.php';
include 'includes/functions.inc.php';
echo $_SESSION['userEmail'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<?php 
	   include 'navbar.php' ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5">
          <img src="Images/products/pexels-doterra-international-llc-4041098.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-md-7">
          <div class="product-info">
          	
          	<h2>product name</h2>
          	<h4>shop name</h4>
          	<h5 class="mt-4">Product Details:</h5>
          	<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt obcaecati ex similique quae praesentium veritatis quasi</p>
          	<label class="col-form-label">Quantity</label>
            
            <input type="number" name="quantity" value = "1" required>
          </div>
          <input type="submit" name="btn-signup" value="Confirm Order" class="btn btn-success mr-4">
            
        </div>
      </div>
    </div>
    <?php

      $result = getProduct($con);
      echo "<table border='1'><tr><th>Product ID</th><th>Product Name</th><th>Price</th></tr>";
      while($row   = mysqli_fetch_assoc($result)){
        echo("<tr>");
        echo "<td>" . $row['ProductId'] . "</td>";
        echo "<td>" . $row['ProductName'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "</tr>";
      }
    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    
  </body>
</html>

