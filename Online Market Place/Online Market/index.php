<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="login-area mt-5 card container">
    <div class="row content">
        <div class="col-md-12">
            <h1 class="main-title text-center mb-3">MarketPlace</h1>
        </div>
    </div>
    <div class="row form-row justify-content-center">
        <div class="col-lg-4 col-sm-4">
            <form action="includes/login.inc.php" id="loginform" method="post"> 
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Email</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" placeholder="Enter Email Address" name="email"  >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Password</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required >
                    </div>
                </div>

                <div class="form-group row justify-content-lg-center">
                    <div class="col-lg-6">
                        <input type="submit" id="submit-login" name="btn-login" value="Log In" class="btn btn-success mr-1">
                        <a class="btn bg-secondary text-white" href="index.php">Cancel</a>
                    </div>
                </div>

                <div class="form-group row justify-content-lg-center">
                    <div class="col-lg-6">
                        <p class="mb-0">Unregistered? <a class="text-decoration-none" href="signup.php">Sign Up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
document.getElementById("submit-login").addEventListener('click',validateForm);

function validateForm() {
  var x = document.forms["loginform"]["email"].value;
  var y = document.forms["loginform"]["password"].value;

    console.log(x);
  
  if (x == "") {
    window.alert("Email is required");
  }

    if (y=="") {
    window.alert("Password Cant be Blank!");
  }

}
</script> 




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>