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
      <form action="includes/admin_signup.inc.php" method="post">
        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Full Name</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" placeholder="Enter Full Name" name="name" required>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Email</label>
          <div class="col-lg-9">
            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" required>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Phone</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" required>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Position</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" placeholder="Enter Position" name="position" required>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label ">Gender</label>
          <div class="col-lg-9 ">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value ="Male">
              <label class="form-check-label" for="gender">
              Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value ="female">
              <label class="form-check-label" for="gender">
              Female
              </label>
            </div>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Address</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" placeholder="Enter Address" name="address" required>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Date</label>
          <div class="col-lg-9">
            <input type="date" class="form-control" placeholder="Date" name="date" required>
          </div>
        </div>

        <div class="form-group row mt-2">
          <label class="col-lg-3 col-form-label">Password</label>
          <div class="col-lg-9">
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
          </div>
        </div>

        <div class="form-group row justify-content-lg-center mt-3">
          <div class="col-lg-6">
            <input type="submit" name="btn-signup" value="Sign Up" class="btn btn-success mr-1">
            <a class="btn bg-secondary text-white" href="index.php">Cancel</a>
          </div>
        </div>

        <div class="form-group row justify-content-lg-center">
          <div class="col-lg-6">
            <p class="mb-3 mt-3">Already registered? <a class="text-decoration-none" href="index.php">Log In</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>