<?php 
ob_start();
session_start();
if($_GET['userid'])
{
     $userid = $_GET['userid'];
include "includes/config.php";
   ?>

<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Prebuy</title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/fotorama.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon.png">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<style type="text/css">
  
  .panel-login {
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
  color: #00415d;
  background-color: #fff;
  border-color: #fff;
  text-align:center;
}
.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
  color: #0FB7A4;
  font-size: 18px;
}
.panel-login>.panel-heading hr{
  margin-top: 10px;
  margin-bottom: 0px;
  clear: both;
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  height: 45px;
  border: 1px solid #ddd;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}
.btn-login {
  background-color: #59B2E0;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #53A3CD;
  border-color: #53A3CD;
}
.forgot-password {
  text-decoration: underline;
  color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
  text-decoration: underline;
  color: #666;
}

.btn-register {
  background-color: #1CB94E;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #1CA347;
  border-color: #1CA347;
}


.alert {
    padding: 20px;
    background-color:#EA4742;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}


</style>
</head>
<body >
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden; background-color:#F5F3F5;'> 
  <!-- HEADERSTART -->
<?php
include('how-prebuy-works.php');

include "header.php";
?>
  <!-- HEADEREND --> 

  <!-- Bread Crumb STRAT -->


<div class="container-fluid req-page1" >
    <div class="color1">
  <div class="row req-categaries" style="margin-left: 0px; margin-right: 0px;"> 
  <img src="images/list-baner1.png">
</div>
  </div>
</div>



<div class="container-fluid home-page1" >
    <div class="color1">

  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>Registration</span></h2>
</div>
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

     <!-- CONTAIN START -->
  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">

 <form method="post" id="form1" class="main-form full">
             <div>
                  <label> Enter OTP

             </div>

             <div><input type="number" name="otp" class="form-control" maxlength="4" required></div>
             <br/>
             <div><input type="submit" name="submit" class="btn btn-success"></div>
        </form>                       
 
  </div>
<?php  
       if(isset($_POST['submit']))
       {
         $otp = $_POST['otp'];
       echo  $qry = "SELECT * FROM `users` WHERE `user_id`='$userid'";
          $qryrun = mysqli_query($conn,$qry);
           $datafetch = mysqli_fetch_assoc($qryrun);
            if($datafetch['otp'] == $otp)
            {
              $_SESSION['username'] = $datafetch['username'];
              $_SESSION['userid'] = $datafetch['user_id'];
              header('location:account.php');
            }
            else
            {
             //header('location:verifyotp.php');
            }

       }
  ?>
</div>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
       
            

</div>
  </div>
</div>
  <!-- Bread Crumb END -->
  
  <!-- CONTAIN START -->


    <!-- /.container -->
  <!-- CONTAINER END -->  
  
  <!-- FOOTER START -->
  <?php 

include("footer.php");
  ?>
  <!-- FOOTER END -->
</div>
<script src="js/jquery-1.12.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script>  
<script src="js/jquery-ui.min.js"></script> 
<script src="js/fotorama.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/custom.js"></script>
<script type="text/javascript">
  $(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});



</script>
</body>
</html>



<?php 
}
?>