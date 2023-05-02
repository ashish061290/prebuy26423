<?php
 ob_start();
   session_start();
include "includes/config.php";
    if($_SESSION['userid'])
    {
      $userid = $_SESSION['userid'];
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
</head>

<script>
     $(document).ready(function(e) {
        $('.move').click(function(){
      var user_id = $(this).attr('id');
           user = [];
          var user = user_id.split(",");
     
        //var table = "about_tab";
       $.ajax({
                type : 'GET',
            url : 'deal-availed.php',
           data: {user:user},
      success:function(data) {
       //alert(data);
                   window.location.href = 'deal-availed.php'; 
              }
            
         
         });
      });
    });
</script>
<body>
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden;background-color: #F5F3F5;'> 
   
 

  <!-- HEADER START -->
<?php
include('how-prebuy-works.php');

include "header.php";
?>
  <!-- HEADER END --> 

  <!-- Bread Crumb STRAT -->
 
 
 
  <!--end visit store-->
<div class="container my-availed-container1"> 


  <div class="row">
  <?php 
    $qry = "SELECT * FROM `product` JOIN `prebuy_deals` ON `product`.`product_model`=`prebuy_deals`.`deal_model_number` WHERE `prebuy_deals`.`deal_status`='1' ORDER BY `prebuy_deals`.`deal_id` DESC";
     $qryrun = mysqli_query($conn,$qry);
      while($fetchdata = mysqli_fetch_assoc($qryrun))
      {
         $dealid = $fetchdata['deal_id'];
         $citydata = mysqli_query($conn,"SELECT * FROM `o_seller` JOIN `prebuy_deals` ON `o_seller`.`o_seller_id`=`prebuy_deals`.`dealOwnerId` and `prebuy_deals`.`deal_id`='$dealid'");
              $citydata = mysqli_fetch_assoc($citydata);
 ?>

<div class="col-md-6 my-availed-col1">
  <div class="well1">
<div class="row">
<div class="col-md-4">
 <div class="my-availed-img">
 <img src="http://prebuy.brijendrasharma.com/products/<?=$fetchdata['product_img']?>" class="my-availed-img2" style="width:60px !important;">
 </div>
</div>

<div class="col-md-8">
 <div class="my-availed-title" style="
    max-width: 320px;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    line-height: 18px;
    -webkit-box-orient: vertical;
    overflow: hidden;">
<h3 class="my-availed-title-h3" style="
    max-width: 320px;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    line-height: 18px;
    -webkit-box-orient: vertical;
    overflow: hidden;"><?=$fetchdata['product_name']?></h3>
<p class="my-availed-city"><?=$citydata['o_seller_city']?></p>
<div style="display: flex;justify-content:" class="my-vailed-price"><p class="my-availed-price2"><?=$fetchdata['deal_discount']?>/-</p>  
          <p class="my-availed-price3"><?=$fetchdata['deal_mrp']?>/-</p> <p class="my-availed-price-btn"><?=round($fetchdata['deal_discount_per'])?>% off</p></div>
  <p class="my-avaied-expily">  
  <?php 
       $date1 = $fetchdata['deal_date'];
                       date_default_timezone_set('Asia/Calcutta'); 
                              $date2 = date("Y-m-d");
                              $date1 = new DateTime("$date1");
                               $date2 = new DateTime();
                               $diff = $date2->diff($date1)->format("%a");
                               $diff = $diff;


  ?>
          <i class="fa fa-clock-o my-avaied-expily-icon" aria-hidden="true"></i> Expiring in <?php echo $diff; ?> days
          </p>
 </div>
  </div>
</div>

<div class="row">
<div class="col-md-6">
  <p class="my-aviled-deal-id">Deal ID :<br>
 <?=$fetchdata['deal_s_id']?></p>
</div>


<div class="col-md-6">
  <p class="my-aviled-on">Availed on:<br>
 17th, January,2018</p>
</div>
</div>


<div class="row">
<div class="col-md-12">
  <h2 class="my-aviled-active">ACTIVE</h2>
</div>
</div>

<div class="row">
<div class="col-md-6">
  <a id="<?php echo $fetchdata['deal_id']; ?>,<?php echo $userid;?>" class="move"><p class="my-aviled-view-btn">View offer page</p></a>
</div>

<div class="col-md-6">
   <a href="#"><p class="my-aviled-view-btn">Open voucher</p></a>
</div>
</div>

</div>


</div>
<?php } ?>
<!--<div class="col-md-6 my-availed-col1">
  <div class="well1">
 <div class="row">
<div class="col-md-4">
 <div class="my-availed-img">
 <img src="images/samsung-32.jpeg" class="my-availed-img2">
 </div>
</div>

<div class="col-md-8">
 <div class="my-availed-title">
<h3 class="my-availed-title-h3">Samsung 59cm (24 inch) HD Ready LED TV  (24K4100)</h3>
<p class="my-availed-city">Anandnagar, Satellite</p>
<div style="display: flex;justify-content:" class="my-vailed-price"><p class="my-availed-price2">21990/-</p>  
          <p class="my-availed-price3">21990/-</p> <p class="my-availed-price-btn">28% off</p></div>
  <p class="my-avaied-expily">  
          <i class="fa fa-clock-o my-avaied-expily-icon" aria-hidden="true"></i> Expiring in 25 days
          </p>
 </div>
  </div>
</div>

<div class="row">
<div class="col-md-6">
  <p class="my-aviled-deal-id">Deal ID :<br>
  SD65F4S</p>
</div>


<div class="col-md-6">
  <p class="my-aviled-on">Availed on:<br>
 17th, January,2018</p>
</div>
</div>


<div class="row">
<div class="col-md-12">
  <h2 class="my-aviled-tem"> Temporarily Unavailable</h2>
</div>
</div>

<div class="row">
<div class="col-md-6">
  <a href="#"> <p class="my-aviled-view-btn">View offer page</p></a>
</div>

<div class="col-md-6">
   <a href="#"><p class="my-aviled-view-btn">Open voucher</p></a>
</div>
</div>
</div>
  </div>

<div class="col-md-6 my-availed-col1">
  <div class="well1">
 <div class="row">
<div class="col-md-4">
 <div class="my-availed-img">
 <img src="images/samsung-32.jpeg" class="my-availed-img2">
 </div>
</div>

<div class="col-md-8">
 <div class="my-availed-title">
<h3 class="my-availed-title-h3">Samsung 59cm (24 inch) HD Ready LED TV  (24K4100)</h3>
<p class="my-availed-city">Anandnagar, Satellite</p>
<div style="display: flex;justify-content:" class="my-vailed-price"><p class="my-availed-price2">21990/-</p>  
          <p class="my-availed-price3">21990/-</p> <p class="my-availed-price-btn">28% off</p></div>
  <p class="my-avaied-expily">  
          <i class="fa fa-clock-o my-avaied-expily-icon" aria-hidden="true"></i> Expiring in 25 days
          </p>
 </div>
  </div>
</div>

<div class="row">
<div class="col-md-6">
  <p class="my-aviled-deal-id">Deal ID :<br>
  SD65F4S</p>
</div>


<div class="col-md-6">
  <p class="my-aviled-on">Availed on:<br>
 17th, January,2018</p>
</div>
</div>


<div class="row">
<div class="col-md-12">
  <h2 class="my-aviled-expired"> Expired</h2>
</div>
</div>

<div class="row">
<div class="col-md-6">
   <a href="#"><p class="my-aviled-view-btn">View offer page</p></a>
</div>

<div class="col-md-6">
   <a href="#"><p class="my-aviled-view-btn">Open voucher</p></a>
</div>
</div>
</div>
  </div>
  -->


  


  </div>

</div>


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
</body>
</html>
<?php 
}
else
{
  header('location:Registration.php');
}
?>
