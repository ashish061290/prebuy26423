<?php ob_start();  include('./config/config.php');
      include('./lib/BaseModal.php'); ?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
<title><?=$title?></title>
<!-- SEO Meta
  ================================================== -->
<meta charset="utf-8">
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
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/fotorama.css">
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/responsive.css">
<link rel="shortcut icon" href="<?php echo STORAGE ?>images/favicon.png">
<link rel="apple-touch-icon" href="<?php echo STORAGE ?>images/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo STORAGE ?>images/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo STORAGE ?>images/favicon.png">
<!-- <link rel="stylesheet" href="<?php //echo ASSETS ?>css/font-awesome.min.css"> -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i" rel="stylesheet">
<link href="<?php echo ASSETS ?>css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="<?php echo ASSETS ?>owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet --
<link href="<?php echo ASSETS ?>new/css/style.css" rel="stylesheet">
-->
<style>
 .vendor-carousel .item{
  padding-bottom:20px;
  border-radius:20px;
  transition: 0.3s;
 }
 .text-center{
  text-align:center !important;
 }
 .vendor-carousel .category-img {
    height: auto;
    width: 100%;
    border-radius: 20px;
    border: 1px solid #eee;
    padding: 20px;
    box-shadow: none;
    transition: .3s linear;
    text-align:center;
}

.vendor-carousel .category-img img {
    height: 50px;
    width: auto;
    position: relative;
    transform: unset
}
.category-img img{
    position: absolute;
    top: 50%;
    width: 80% -ms-transform:translateY(-50%);
    transform: translateY(-50%);
    left: 0;
    right: 0;
    margin: 0 auto
}

.vendor-carousel .item {
    padding-bottom: 20px;
    border-radius: 20px;
    transition: .3s linear
}

.vendor-carousel .item:hover {
    border: 1px solid #eee;
    padding: 20px
}
.vendor-carousel .item:hover .category-img {
    border: none;
    padding: 0 0 20px
}

.vendor-carousel .item p {
    font-size: 14px;
    line-height: 16px;
    height: 32px;
    color: #000
}
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