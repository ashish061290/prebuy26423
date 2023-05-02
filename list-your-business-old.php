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
</head>
<body >
<div class="se-pre-con"></div>
<div class="main"> 

  <!-- HEADER START -->
<?php
include "header.php";
?>
  <!-- HEADER END --> 

  <!-- Bread Crumb STRAT -->

  <!-- Bread Crumb END -->
  
  <!-- CONTAIN START -->
  <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkout-step mb-40">
            
            <hr>
          </div>
          <div class="checkout-content" >
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="heading">List Your Business On PreBuy</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                <form method="POST" class="main-form full">
                  <div class="mb-20">
                    <div class="row">
                      <div class="col-xs-12 mb-20">
                        <div class="heading-part">
                         
                        </div>
                        <hr>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="Person Name" name='seller_name'>
                       
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="Contact Number" name='seller_contact' pattern="[0-9]{10}" maxlength="10" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="Store Name" name='seller_store'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="email" required placeholder="Email ID" name='seller_email'>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text"  placeholder="Alternate Number" name='seller_alt' maxlength="10" pattern="[0-9]">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="PIN Code" name='seller_pincode' maxlength="6" pattern="[0-9]{6}">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
        <select name='seller_city' required>
        <option value=''>Select City</option>
        <option value='bhopal'>Bhopal</option>
        <option value='delhi'>Delhi</option>
        <option value='mumbai'>Mumbai</option>
        <option value='pune'>Pune</option>
        </select>
      </div>
                      </div>
                      <div class="col-sm-12">
        <div class='input-box'>
            <ul type="none">
            <li>Choose Category</li>
            <?php
              $getdata = mysqli_query($conn,"SELECT * FROM `category`");
              while($newO = mysqli_fetch_assoc($getdata)){
                ?>
    <li><input class="check-box" name="seller_category[]" multiple="" type="checkbox" value="<?=$newO['category_id']?>">
      <?=$newO['category_name']?></li>
                <?php
              }
            ?>
 <li><input class="check-box" id="seller-cat-other" name="seller-cat-other" multiple="" type="checkbox" onclick="otherCat()">
      Others</li>
  <li><input type="text" class="form-control" name="other-cat" id="other-cat" style="display: none;" placeholder="Mention Category"></li>                 
          </ul>
          <script type="text/javascript">
            var otherCat = function(){
              if(document.getElementById("seller-cat-other").checked == true){
                document.getElementById('other-cat').style.display="block";
              }
              else{
               document.getElementById('other-cat').style.display="none"; 
              }
            }
          </script>
        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
                          <button type="submit" class="btn btn-block btn-success" name='submit'>Submit</button>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
                <?php
                if(isset($_POST['submit'])){
                  $seller_name = $_POST['seller_name'];
                  $seller_contact = $_POST['seller_contact'];
                  
                  $seller_alt = $_POST['seller_alt']; 
                  
                  $seller_store = $_POST['seller_store'];
                  $seller_email = $_POST['seller_email'];
                  $seller_pincode = $_POST['seller_pincode'];
                  $seller_city = $_POST['seller_city'];
                  
//work here for extra category_name
if(isset($_POST['other-cat'])){
  $other = $_POST['other-cat'];
}                  
else{
  $other = "";
}
                  $seller_category = array();
  for($i=0;$i<count($_POST['seller_category']);$i++){
    $seller_category[] =  $_POST['seller_category'][$i];
  }


$brand =  json_encode($seller_category);
 echo $sql = "INSERT INTO `seller_enquiry`(`seller_name`, `seller_contact`,`seller_alt_contact`, `seller_store`, `seller_email`, `seller_pincode`, `seller_city`, `seller_category`,`other-cat`,`seller_enq_status`) VALUES ('".$seller_name."','".$seller_contact."','".$seller_alt."','".$seller_store."','".$seller_email."','".$seller_pincode."','".$seller_city."','".$brand."','".$other."',0)";
                $result = mysqli_query($conn,$sql);



$to = $seller_email;
$subject = "Registration on Prebuy.in";
$message = "<center><h3>Acknowledgement of Registration</h3></center>
<p>
Dear $seller_name, <br>
Your inquiry was successfully submitted. One of our executive will call you in 24 hours.
</p><br>
<b>Thank you<b><br>
<b>Prebuy Team<b>
<p style='color:red'>Please don not reply to this email, This is system generated mail</p>
<img src='http://prebuy.brijendrasharma.com/images/prebuy_logo.png' style='width:100px;'>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                                                        // More headers
$headers .= 'From: <yash.mehta.1509@gmail.com>' . "\r\n";
$headers .= 'Cc: 143brijendra143@gmail.com,yash.mehta.1509@gmail.com' . "\r\n";

$mkc = mail($to,$subject,$message,$headers);

                if($mkc){
                    echo "<script>window.location.href='thankyou.php';</script>";
                  }


                }

                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END -->  
  
  <!-- FOOTER START -->
  <div class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-middle">
          <div class="row mb-60">
            <div class="col-md-4 f-col footer-middle-left">
              <div class="f-logo"> 
                <a href="index.html" class=""> 
                  <img src="http://aaryaweb.info/html/eshoper/esh001/images/footer-logo.png" alt="Eshoper"> 
                </a> 
              </div>
              <div class="footer-static-block"> <span class="opener plus"></span>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p>150-A Appolo aprtment, opp. Hopewell Junction, <br>Allen st Road, new york-405001.</p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope-o"> </i>
                    <p> <a>infoservices@eshoper.com </a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <p>(+91) 9834567890</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 footer-middle-right">
              <div class="row mb-30">
                <div class="icon-newsletter">
                  <div class="col-lg-3 col-md-12">
                    <div class="footer_social pt-xs-15 center-sm">
                      <ul class="social-icon">
                        <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                        <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                        <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                        <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                        <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-12">
                    <div class="newsletter-inner center-sm">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="newsletter-title">
                            <h2 class="main_title">newsletter!</h2>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <form>
                            <div class="newsletter-box">
                              <input type="email" placeholder="Email Here...">
                              <button title="Subscribe" class="btn-color">Subscribe</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 f-col">
                  <div class="footer-static-block"> <span class="opener plus"></span>
                    <h3 class="title">Help <span></span></h3>
                    <ul class="footer-block-contant link">
                      <li><a>Gift Cards</a></li>
                      <li><a>Order Status</a></li>
                      <li><a>Free Shipping</a></li>
                      <li><a>Return & Exchange </a></li>
                      <li><a>International</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 f-col">
                  <div class="footer-static-block"> <span class="opener plus"></span>
                    <h3 class="title">Guidance <span></span></h3>
                    <ul class="footer-block-contant link">
                      <li><a> Delivery information</a></li>
                      <li><a> Privacy Policy</a></li>
                      <li><a> Terms & Conditions</a></li>
                      <li><a> Contact</a></li>
                      <li><a> Sitemap</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 f-col">
                  <div class="footer-static-block"> <span class="opener plus"></span>
                    <h3 class="title">Information <span></span></h3>
                    <ul class="footer-block-contant link">
                      <li><a> Delivery information</a></li>
                      <li><a> Privacy Policy</a></li>
                      <li><a> Terms & Conditions</a></li>
                      <li><a>Contact</a></li>
                      <li><a> Sitemap</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer-bottom align-center">
          <div class="row">
            <div class="col-sm-12 mb-30">
              <div class="site-link">
                <ul>
                  <li><a>About Us</a></li>
                  <li><a>Contact Us</a></li>
                  <li><a>Customer </a></li>
                  <li><a>Service</a></li>
                  <li><a>Privacy</a></li>
                  <li><a>Policy </a></li>
                  <li><a>Accessibility</a></li>
                  <li><a>Directory </a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 mb-30">
              <div class="copy-right ">© 2017  All Rights Reserved. Design By <a href="#">Aaryaweb</a></div>
            </div>
            <div class="col-sm-12 mb-30">
              <div class="payment">
                <ul class="payment_icon">
                  <li class="visa"><a><img src="http://aaryaweb.info/html/eshoper/esh001/images/pay1.png" alt="Eshoper"></a></li>
                  <li class="discover"><a><img src="http://aaryaweb.info/html/eshoper/esh001/images/pay2.png" alt="Eshoper"></a></li>
                  <li class="paypal"><a><img src="http://aaryaweb.info/html/eshoper/esh001/images/pay3.png" alt="Eshoper"></a></li>
                  <li class="vindicia"><a><img src="http://aaryaweb.info/html/eshoper/esh001/images/pay4.png" alt="Eshoper"></a></li>
                  <li class="atos"><a><img src="http://aaryaweb.info/html/eshoper/esh001/images/pay5.png" alt="Eshoper"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div id="scrollup"></div>
  </div>
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
