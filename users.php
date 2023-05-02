<?php 
        include "includes/head.php";
        include('modal/DealModal.php');
        include('modal/ProductModal.php');
        include('modal/SellerModal.php');
        if(isset($_SESSION['userid'])){
          $Base->redirect(APPURL.'account.php');
          } if(isset($_GET['dealid'])){
            $_SESION['dealid'] = $_GET['dealid'];
          }
        ?>
<body>
  <style>
    .pd-top-30{
      padding-top:30px !important;
    }
  </style>
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden; background-color:#F5F3F5;'> 
  <!-- HEADER START -->
<?php include "includes/header.php"; ?>
  <!-- HEADER END --> 
<div class="container-fluid req-page1" >
    <div class="color1">
  <div class="row req-categaries" style="margin-left: 0px; margin-right: 0px;"> 
  <img src="images/list-baner1.png">
</div>
  </div>
</div>
<div class="container-fluid home-page1" >
    <div class="color1">

  <div class="heading-part align-center pd-top-30">
  <h2 class="main_title"><span>Registration</span></h2>
</div>
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

          <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="customerlogin.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" style="background-color: #0FB7A4;">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="mobile" id="mobile" tabindex="2" class="form-control" placeholder="Mobile" pattern="[0-9]{10}" maxlength="10" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="rsubmit" id="register-submit" tabindex="4" style="background-color: #0FB7A4;" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
                <?php include("rformsubmit.php"); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

