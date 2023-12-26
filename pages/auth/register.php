<?php
session_start();
include "../../init.php";

$dist = "../../".$dist;

$partials  = "../../".$partials;

$auth  = "../../".$auth;

$pages = "../../".$pages;

$plugins = "../../".$plugins;

include '../../icon.php';

include "../../links/css.php";

$username_email=$_SESSION['useremail'];
?>
<style>
  body{
    background-image: url("../../dist/ServerData/img/bgcolivraison.png");
    background-repeat:no-repeat;
   background-attachment:fixed;
   background-position:center;
  }
</style>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Co</b>livraison</a>
  </div>
  <div class="text-danger text-center pb-3">
  <?php

 if (isset($_POST['error_r'])) {
  if ($_POST['error_r']='error2') {
    echo "DATABASE ERROR. Please try again later. ";
  }

};


?>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form action="register_check.php" method="post" id="registrationForm">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First name" name="first_name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email_r" value="<?php echo $username_email ?>" hidden >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password" name="pass_r" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="confirmPassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="mb-3">
        
      </div>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<script>
        const registrationForm = document.getElementById('registrationForm');
        const passwordField = document.getElementById('password');
        const confirmPasswordField = document.getElementById('confirmPassword');

        registrationForm.addEventListener('submit', function (e) {
            if (passwordField.value !== confirmPasswordField.value) {
                alert('Passwords do not match. Please try again.');
                e.preventDefault();
            }
        });
        document.getElementById("agreeTerms").required = true;
    </script>
<?php

include "../../links/js.php";

?>
</body>

