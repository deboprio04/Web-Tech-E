<?php
if(!isset($_SESSION)){
  session_start();
  $sellerid = $_SESSION['userId'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MarketPlace</title>
  </head>
  <body>
    <div class="reg-area card container mt-5">
      <div class="row contect">
        <div class="col-md-12">
          <h1 class="main-title text-center mb-5 mt-5">MarketPlace</h1>
        </div>
      </div>

  <div class="row form-row justify-content-center">
    <div class="col-lg-4 col-sm-4">
      <form action="includes/add.product.inc.php" method="post">
        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Product Name</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" name="name" required>
          </div>
        </div>

        <div class="form-group row mt-2 dropdown">
          <select name="category ">
            <option value="Category name">Category name</option>
          </select>
        </div>

        <div class="form-group row mt-2 dropdown">
          <select name="category ">
            <option value="Category name">Subcategory name</option>
          </select>
          </div>
        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Price</label>
          <div class="col-lg-9">
            <input type="number" class="form-control"  name="price" required>
          </div>
        </div>


        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Product details</label>
          <div class="col-lg-9">
            <input type="text multiline" class="form-control " name="details" required>
          </div>
        </div>

        <div class="form-group row justify-content-lg-center mt-3 mb-3">
          <div class="col-lg-6">
            <input type="submit" name="btn-product" value="Add Product" class="btn btn-success mr-1">
            <a class="btn bg-secondary text-white" href="index.php">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>