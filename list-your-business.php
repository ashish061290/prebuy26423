<?php   include "includes/head.php";
        include('modal/DealModal.php');
        include('modal/ProductModal.php');
        include('modal/SellerModal.php');
      ?>
<body>
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden;'> 
 
  <!-- HEADER START -->
<?php include "includes/header.php"; ?>
  <!-- HEADER END --> 


<div class="container-fluid home-page1" >
    <div class="color1">

  <div class="row list-categaries list-banner" style="margin-left: 0px; margin-right: 0px;"> 

          
       <div class="col-sm-12">
        <h2 class="list-h2">Grow your business with prebuy!</h2>
        <p class="list-para">33 Cities. 50,000 merchants. No upfront costs.<br>
        Fill in your details and get one step closer to building a booming business</p>
      </div>
            

</div>
  </div>
</div>

  <!-- Bread Crumb STRAT -->

   <div class="container-fluid home-page1 checkout-section" >
    <div class="color1">
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

       <div class="col-xs-12">
          <div class="checkout-step mb-40">
            
            <hr>
          </div>
          <div class="checkout-content list-box1" >
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
                          <input type="text"  placeholder="Alternate Number" name='seller_alt' maxlength="10" pattern="[0-9]{10}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="PIN Code" name='seller_pincode' maxlength="6" id="seller_pincode" pattern="[0-9]{6}" onkeyup="pincodeSuggestion(this.value)">
                        <div id='showSuggestion' type="none" class="list-group"></div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
        <input type="text" name='seller_city' class="form-control" id="seller_city" required>
      </div>
                      </div>
                      <div class="col-sm-12">
        <div class='input-box'>
            <ul type="none">
            <li>Choose Category</li>
            <?php
              $getdata = $Base->SelectDataWithColumn("*",'category');
              foreach($getdata as $newO){ ?>
    <li><input class="check-box" name="seller_category[]" multiple="" type="checkbox" value="<?=$newO['category_id']?>">
      <?=$newO['category_name']?></li>
                <?php } ?>
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
</div>
  <?php  include("includes/footer.php"); ?>
  <div class="scroll-top">
    <div id="scrollup"></div>
  </div>
  <!-- FOOTER END -->
</div>
</body>
</html>
