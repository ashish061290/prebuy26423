<?php
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
<title>Eshoper</title>
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

<style type="text/css">
 
  .wrapper2 { 
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
.login-hover:hover{
  background-color: red;
  color: #fff;
}


</style>
</head>
<body >
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden;'> 

  <!-- HEADER START -->
<?php
include "header.php";
?>
  <!-- HEADER END --> 
  <!-- Bread Crumb STRAT -->

  <!-- Bread Crumb END -->
  <div class="container login-banner">
    <div class="wrapper2">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" style="margin-top: 20px;" />
      <input type="password" class="form-control" name="password" placeholder="Password" required="" style="margin-top: 20px;" />      
      <label class="checkbox" >
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" > Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block login-hover" type="submit" style="margin-top: 20px; margin-bottom: 20px; background-color: #0FB7A4; border:none;">Login</button>   
    </form>
  </div>
</div>
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
  


</script>
</body>
</html>
