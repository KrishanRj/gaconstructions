<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()."assets1/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."assets1/vendor/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets1/css/sb-admin.css"; ?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <?php
        if($this->session->flashdata('msg')){
          //echo "<h3>".$this->session->flashdata('msg')."</h3>";
          echo '<div class="alert alert-primary" role="alert">'.$this->session->flashdata('msg').'</div>';
        }
        elseif ($this->session->flashdata('msg1')) {
          echo "<p>".$this->session->flashdata('msg1')."</p>";
        }
       ?>
      <div class="card-body">
        <?php echo validation_errors(); ?>
        <?php echo form_open('Login/loginUser'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" type="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" name="button" class="btn btn-primary btn-block">Login</button>
        <?php echo form_close(); ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url()."index.php/Register/viewRegister"; ?>">Register an Account</a>
          <a class="d-block small" href="#">Forgot Password?</a>
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
