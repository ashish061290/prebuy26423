<?php
      include "includes/head.php";
      include('modal/DealModal.php');
      include('modal/ProductModal.php');
      include('modal/SellerModal.php');
      if(!isset($_SESSION['userid'])){
        $Base->redirect(APPURL.'users.php');
      }
     if($_SESSION['userid']){ 
        if(!empty($_GET['userid'])){ 
              $user = $_SESSION['userid'];
              $dealid = $_SESSION['dealid'];
                 $dealproductrow = $deal->GetJoinProductByDealid($dealid);
                // print_r($dealproductrow);
                 $sellerid = $dealproductrow['dealOwnerId'];
                 //get sellerdata
                 $sellerrow = $Base->SelectData('o_seller','o_seller_id',$sellerid);
        }
        if($_SESSION['dealid'] !="" &&  $_SESSION['userid'] !=""){
         $userid = $_SESSION['userid'];
         $dealid = $_SESSION['dealid'];
         $_SESSION['userid'] = $userid;
         $_SESSION['dealid'] = $dealid;
           $fetchrow = $Base->SelectData('users','user_id',$userid);
           $useremail = $fetchrow['useremail']; //userrecord
           $usermobile = $fetchrow['usermobile'];
           //dealqry
          $fetchdata2 = $Base->SelectData('prebuy_deals','deal_id',$dealid);
           //dealrecord
            $deal_s_id = $fetchdata2['deal_s_id'];
            $date = date('Y-m-d');
            //dealview data
            //filter record
            /*
        $q = "SELECT * FROM `dealview` WHERE `useremail` = '$useremail' AND `date`='$date'";
         $qryrun = mysqli_query($conn,$q);
          $fetchrecord = mysqli_fetch_assoc($qryrun);
         echo $numrow = mysqli_num_rows($qryrun);
        if($numrow<= 1)
        {
            $insertviewrecord = "INSERT INTO `dealview`(`useremail`, `userid`, `deal_s_id`, `deal_id`, `date`) VALUES ('$useremail','$userid','$deal_s_id','$dealid','$date')";
              $runinsertqry = mysqli_query($conn,$insertviewrecord);
               $lastid = mysqli_insert_id($conn);
               $_SESSION['lastid'] = $lastid;
              $_SESSION['dealid'];
              $_SESSION['userid'];
            }
              //product and seller detail fetch
             /*
              
                 */
        
        }
      } ?>
      
<body>
  
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden;background-color: #F5F3F5;'> 
 
  <!-- HEADER START -->
<?php include "includes/header.php"; ?>
  <!-- HEADER END --> 
<div class="container-fluid deal-availed-page11" >
    <div class="color1">
  <div class="row deal-categaries7" style="margin-left: 0px; margin-right: 0px;"> 
      <div class="col-md-6 col-sm-12 col-xs-12 deal-border1">
        <div class="deal-avail-header1">

    <div class="row deal-data12">
      <div class="col-md-6 col-sm-6 col-xs-6 deal-avail1">
        <p class="deal-avail-deal-id">
          
          Deal ID
        </p>
                  <h2 class="deal-avail-h2"><?=$dealproductrow['deal_s_id']?></h2>

      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 deal-avail2">
         <p class="deal-avail-deal-id">
          
          Availed on
        </p>
                  <h2 class="deal-avail-h2">16th January, 2018</h2>

      </div>

    </div>
  </div>
  </div> 
            
     <div class="col-md-6 col-sm-12 col-xs-12 deal-border2">
    <div class="deal-avail-header2">
<div class="row deal-data12">
<div class="col-md-6 col-sm-6 col-xs-6 deal-avail1">
        <p class="deal-avail-deal-id">
          
          Deal Status
        </p>
                  <h2 class="deal-avail-h2" style="color: #03DB41;">ACTIVE</h2>

      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 deal-avail2">
         <p class="deal-avail-deal-id">
          
          Purchase ID
        </p>
                  <a href="#"><h2 class="deal-avail-h2" style="color: #EB4541; text-decoration: underline;">view</h2></a>

      </div>
      
    </div>
  </div>

</div>
</div>
  </div>
</div>


  <!-- Bread Crumb STRAT -->
  
  
<div class="container-fluid home-page15" >
    <div class="color1">

  <div class="row deal-avail-categaries" style="margin-left: 0px; margin-right: 0px;"> 

      <div class="col-md-3 col-sm-12 col-xs-12 deal-col-padding">
        <div class="deal-image-banner">
        <p class="deal-avail-img">
        <img src="http://prebuy.brijendrasharma.com/products/<?=$dealproductrow['product_img']?>" class="deal-availe-img">
      </p>
      
      </div>
    </div>    
       
           <div class="col-md-6 col-sm-12 col-xs-12 deal-col-padding">
        <div class="deal-detail">
         <h3 class="deal-h3"><?=$dealproductrow['product_name']?></h3>  
         <p class="deal-city"><?=$sellerrow['o_seller_city']?></p>
         <div style="display: flex;justify-content:" class="deal-price"><p class="deal-price2"><?=$dealproductrow['deal_discount']?>/-</p>  
          <p class="deal-price3"><?=$dealproductrow['deal_mrp']?>/-</p> <p class="deal-price-btn"><?=round($dealproductrow['deal_discount_per'])?>% off</p></div>
            
          
          <div class="deal-expily1">
            
          <i class="far fa-clock deal-avail-expily-icon" aria-hidden="true"></i> <p>Expiring on 25st January,2018</p>

          </div>

          <div class="row view-hinde1">
<div class="col-md-6">
  <p class="deal-aviled-view-btn">View offer page</p>
</div>

<div class="col-md-6">
  <p class="deal-aviled-view-btn">Cancel Deal</p>
</div>
</div>

        
        </div>
        
      </div> 
	  <div class="col-md-3 col-sm-12 col-xs-12 deal-col-padding">
        
        <h4 class="deal-avail-additional-h4">Additional offers</h4>

          <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 icon2">
<i class="fas fa-shield-alt deal-addition-icon" aria-hidden="true"></i> 
            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">1 + 3 Years Warranty</p>
            </div>
          </div>

          <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 icon2">
<i class="fas fa-headphones deal-addition-icon" aria-hidden="true"></i> 
            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">Samsung Level U Bluetooth headphones worth Rs. 2990 Free!</p>
            </div>
          </div>

          <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 icon2">
<i class="far fa-calendar-alt deal-addition-icon" aria-hidden="true"></i> 
            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">EMI starts from Rs. 1499/-  EMI</p>
            </div>
          </div>

           <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 icon2">
<i class="fas fa-exchange-alt deal-addition-icon" aria-hidden="true"></i> 
            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">Get up to Rs. 3000 off on exchange</p>
            </div>
          </div>
        
      </div>

</div>
  </div>
</div>


  

<div class="container-fluid view-page15" >
    <div class="color1">

 <div class="row view-hinde2" style="margin-left: 0px; margin-right: 0px;"> 

          
       <div class="col-md-6">
  <p class="deal-aviled-view-btn">View offer page</p>
</div>

<div class="col-md-6">
  <p class="deal-aviled-view-btn">Cancel Deal</p>
</div>

            

</div>
  </div>
</div>

  <!-- Bread Crumb END -->
  

<div class="container-fluid home-page1" >
    <div class="color1">

  
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

      <div class="col-md-6 address3">
        <p class="deal-visit">Store Adress:</p>
        <div class="row">
          <div class="col-md-12">
          <p class="deal-avail-para">
          
          <?=$sellerrow['o_seller_add1']?> 
          <br>
          <?=$sellerrow['o_seller_add2']?><br>
          <?=$sellerrow['o_seller_city']?> - <?=$sellerrow['o_seller_pincode']?>
        </p>
          </div>
        </div>
        <div class="Mobile1">
        <div class="row">
         <div class="col-md-2 col-sm-2 col-xs-3">
                 <p class="deal-avail-mobiel">
                               Landline:</p>
         </div>

          <div class="col-md-10 col-sm-10 col-xs-9">
                 <p class="deal-avail-mobie2">
                              <?=$sellerrow['o_seller_alt']?></p>
         </div>
        </div>


        <div class="row">
         <div class="col-md-2 col-sm-2 col-xs-3">
                 <p class="deal-avail-mobiel">
                               Mobile:</p>
         </div>

          <div class="col-md-10 col-sm-10 col-xs-9">
                 <p class="deal-avail-mobie2">
                 <?=$sellerrow['o_seller_alt']?>, <?=$sellerrow['o_seller_contact']?></p>
         </div>
        </div>
  </div>

        <div class="row deal-availed-row">
         <div class="col-md-12">
                 <p class="deal-avail-mobiel">
                              <i class="fas fa-map-marker-alt deal-avail-map-icon" aria-hidden="true"></i></p>
                                                          <a hef="#" class="deal-avail-map-link">View store location on map</a>

         </div>

           </div>
        
        
        
    </div>    
       <?php
           $sellerid = $sellerrow['o_seller_rid'];
           $fetchdata = $Base->SelectData('seller_schedule','seller_rid',$sellerid);
       ?>

            <div class="col-md-6 address3">
             <p class="deal-visit">Store timings:</p>
             <div class="row">
              <div class="col-md-4 col-sm-3 col-xs-4 "><p class="deal-avail-para"> Monday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['monO']?> to <?=$fetchdata['monC']?></p></div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-3 col-xs-4"><p class="deal-avail-para"> Tuesday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['tueO']?> to <?=$fetchdata['tueC']?></p></div>
            </div>


            <div class="row">
              <div class="col-md-4 col-sm-3 col-xs-4"><p class="deal-avail-para"> Wednesday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['wedO']?> to <?=$fetchdata['wedC']?></p></div>
            </div>


            <div class="row">
              <div class="col-md-4 col-sm-3 col-xs-4"><p class="deal-avail-para"> Thursday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['thuO']?>to <?=$fetchdata['thuC']?></p></div>
            </div>


            <div class="row"> 
              <div class="col-md-4 col-sm-3 col-xs-4"><p class="deal-avail-para"> Friday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['friO']?> to <?=$fetchdata['friC']?></p></div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-3 col-xs-4"><p class="deal-avail-para"> Saturday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['satO']?> to <?=$fetchdata['satC']?></p></div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-3 col-xs-4"><p class="deal-avail-para"> Sunday:</p></div>
              <div class="col-md-8 col-sm-9 col-xs-8"> <p class="deal-avail-para"><?=$fetchdata['sunO']?></p></div>
            </div>

             
    </div>

</div>
  </div>
</div>

  <!-- start detailed -->

<div class="container-fluid home-page1" >
    <div class="color1">

  
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

      <div class="col-md-6 deal-right-border" >
        <p class="deal-visit">Before you visit the store</p>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">We recommend you to call the retailer to confirm the availability of the deal before going to the store</p>
         </div>
        </div>



        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here includes all king of taxes</p>
         </div>
        </div>
       


       <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here does not include any additional offers</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">This deal can not clubbed with any other existing deal or offer</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Don NOT share the purchase ID with the retailer until you buy the product from him.</p>
         </div>
        </div>

           </div>    
       
            <div class="col-md-6 data-vailed-data2">
        <p class="deal-visit">What next?</p>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">  Vist the store address provided above.  </p>
         </div>
        </div>



<div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Show them this page or screenshot of this page.</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Buy the deal you just availed.</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus " aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Provide purchase ID once you buy the product from that retailer.</p>
         </div>
        </div>

    </div>

</div>
  </div>
</div>

  <!--end detaied-->


<div class="container-fluid home-page1 data-vailed-hide" >
    <div class="color1">
 <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

          <div class="col-sm-12 col-xs-12 address3">
        <p class="deal-visit">What next?</p>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">  Vist the store address provided above.  </p>
         </div>
        </div>



<div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Show them this page or screenshot of this page.</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus deal-icon1" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Buy the deal you just availed.</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus " aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Provide purchase ID once you buy the product from that retailer.</p>
         </div>
        </div>

    </div>
       
            

</div>
  </div>
</div>



<div class="container-fluid home-page1" >
    <div class="color1">

    <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

          
        <div class="deal-avail-btn">
    <a href="#"><p class="deal-avail-goback">
      
      Go back to site
    </p>
  </a>
  </div>

            

</div>
  </div>
</div>



  <!-- start visit stonre -->


<div class="container-fluid deal-avail-get-a">
 </div>
 <?php  include("includes/footer.php"); ?>
  <!-- FOOTER END -->
\
