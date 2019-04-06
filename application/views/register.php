<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()."assets1/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."assets1/vendor/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets1/css/sb-admin.css"; ?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <?php
      if($this->session->flashdata('msg1')){
        echo "<h3>".$this->session->flashdata('msg1')."</h3>";
      }
       ?>
      <div class="card-body">
        <?php echo validation_errors(); ?>
        <?php echo form_open('Register/registerUser'); ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="fname">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="lname">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Enter Password" name="password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" name="confpass">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Register</button>
          <!-- <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
        <?php echo form_close(); ?>

        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets1/vendor/jquery/jquery.min.js"; ?>"></script>
  <script src="<?php echo base_url()."assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets1/vendor/jquery-easing/jquery.easing.min.js"; ?>"></script>
</body>

</html>
