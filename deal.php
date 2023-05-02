<?php   include "includes/head.php";
        include('modal/DealModal.php');
        include('modal/ProductModal.php');
        include('modal/SellerModal.php');
     if(!isset($_GET['id'])){
       $Base->redirect(APPURL."index.php");
    }
  $id = $_GET['id'];
  $_SESSION['dealid'] = $id;
//view detail
   $fetchdealrow = $Base->SelectData('prebuy_deals','deal_id',$id);
   $sellerid = $fetchdealrow['dealOwnerId'];
   $modelname = $fetchdealrow['deal_model_number'];
   //sellerdetail
   $sellerdatarow = $Base->SelectData('o_seller','o_seller_id',$sellerid);
   //productdata
  $productdatarow =  $Base->SelectData('product','product_model',$modelname);
  $ip = $_SERVER['REMOTE_ADDR'];  ?>
<style type="text/css">
 #exTab1 .tab-content {
  /*background-color: #fff;
  padding : 5px 15px;*/
}
#exTab2 h3 {
  background-color: #fff;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 8px;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  background-color: #fff;
  padding : 5px 15px;
}
</style>
<body>
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden;background-color: #F5F3F5;'> 
  <!-- HEADER START -->
<?php include "includes/header.php"; ?>
  <!-- HEADER END --> 
  <!-- Bread Crumb STRAT -->
<div class="container-fluid deal-page11">
    <div class="color1">
    <div class="row deal-categaries" style="margin-left: 0px; margin-right: 0px;"> 
        <div class="col-md-4 col-sm-12 col-xs-12 deal-col-padding">
                <!-- Slider -->
                        <!-- Top part of the slider -->
                           <?php 
                              $fetchrow = $deal->GetJoinProductByDealid($id);
                              $pid = $fetchrow['product_id'];
                              $dealid = $fetchrow['deal_id'];
                              $date_start = $fetchrow['deal_date'];
                              $date_close = $fetchrow['exp_date']; 
                              $date2 = date("Y-m-d");
                              $date1 = new DateTime("$date_close");
                               $date2 = new DateTime();
                               $diff = $date2->diff($date1)->format("%a");
                               $diff = $diff; ?>
                            <div class="col-sm-12" id="carousel-bounding-box">
                             <div class="carousel slide" id="myCarousel" data-ride="carousel" data-type="multi" data-interval="false" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner deal-header-img">
                                        <div class="active item" data-slide-number="0">
                            <img src="<?php echo $fetchrow['product_img']; ?>"></div>
                            <?php
                                  $imgq = $deal->GetProductImages($pid);
                                  $i=1;
                                  if(!empty($imagq)){
                                  foreach($imgq as $imagerow){ ?>
                                        <div class="item" data-slide-number="<?php echo $i; ?>">
                                        <img src="<?php echo $imagerow['product_img_path']; ?>"></div>
                                  <?php $i = $i+1; } } ?>
                                       <!-- <div class="item" data-slide-number="2">
                                        <img src="images/test-tv.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="images/test-tv.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="images/test-tv.jpg"></div> 
-->

                                        
                                    </div><!-- Carousel nav -->
                                 <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>   

                                    -->                             

                
        </div>
</div>

<div class="col-sm-12 hidden-xs veticle1 copybanner" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
             <?php $i=1;
              $imgq = $deal->GetProductImages($pid);
              if(!empty($imgq)){
              foreach($imgq as $imagerow){ ?>
                <li class="col-sm-3 col-xs-3">
                  <a class="deal-another-img" id="carousel-selector-<?php echo $i; ?>"><img src="<?php echo $imagerow['product_img_path']; ?>"></a>
                  </li><?php $i = $i+1;} } ?>
                </ul>                 
                </div>  
    </div>
      <div class="col-md-5 col-sm-12 col-xs-12 deal-col-padding">
        <div class="deal-detail">
         <h3 class="deal-h3"><?=$fetchrow['product_name']?></h3>
          <?php $SellerData = $seller->GetDealsSellerData($dealid);?>  
         <p class="deal-city"><?php echo ucwords($SellerData['o_seller_landmark']); ?><br/><?php  echo ucwords($SellerData['o_seller_city']);?></p>
         <div style="display: flex;justify-content:" class="deal-price"><p class="deal-price2"><?=$fetchrow['deal_discount']?>/-</p>  
          <p class="deal-price3"><?=$fetchrow['deal_mrp']?>/-</p> <p class="deal-price-btn"><?php 
           $category = trim($fetchrow['deal_discount_per'],'%');
          round($category)?>% off</p></div>
            <ul class="deal-product-fetures">
              <li><i class="fa fa-circle deal-list-icon" aria-hidden="true"></i>
Dispay Feature HD Ready (HDR)</li>
              <li><i class="fa fa-circle deal-list-icon" aria-hidden="true"></i>
Warranty : 1 Year Sony India Warranty</li>
              <li><i class="fa fa-circle deal-list-icon" aria-hidden="true"></i>
Display Resolution : 1366 × 768</li>
              <li><i class="fa fa-circle deal-list-icon" aria-hidden="true"></i>
Functionality : Standard</li>
            </ul>

            <a href="users.php<?php if($fetchrow['deal_id']){ echo"?dealid=".$fetchrow['deal_id']; } ?>">
          <p class="">
           
            <button name="avail" class="btn btn-danger">
             <?php if(isset($_SESSION['userid'])) { echo "ADD DEAL"; } else{ echo "AVAIL OFFER"; } ?>
            </button>
          </p>
          </a>
          <p class="deal-expily">
            
          <i class="far fa-clock deal-expily-icon" aria-hidden="true"></i><?php if($diff=='0'){ echo " Deal Expire Today";} else{?> Expiring in <?php echo $diff." days"; }?> 

          </p>
        
        </div>

        
      </div>

      <div class="col-md-3 col-sm-12 col-xs-12 deal-col-padding">
        
        <h4 class="deal-additional-h4">Additional offers</h4>

          <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 deal-icon2">
<i class="fas fa-shield-alt deal-addition-icon" aria-hidden="true"></i> 
            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">1 + 3 YEARS WARRANTY</p>
            </div>
          </div>

          <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 deal-icon2">
<i class="fas fa-headphones deal-addition-icon" aria-hidden="true"></i> 
            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">SAMSUNG LEVEL U Bluetooth headphones worth Rs. 2990 Free!</p>
            </div>
          </div>

          <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 deal-icon2">
<!--<i class="fa fa-file-text-o deal-addition-icon" aria-hidden="true"></i> -->
<i class="far fa-calendar-alt deal-addition-icon" aria-hidden="true"></i> 

            </div>

            <div class="col-md-10 col-sm-11 col-xs-10">
            <p class="deal-additional-offers2">EMI starts from Rs. 1499/- </p>
            </div>
          </div>

           <div class="row deal-row"> 
            <div class="col-md-2 col-sm-1 col-xs-2 deal-icon2">
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

  <!-- Bread Crumb END -->
  
  <div class="container-fluid deal-product-innter" >
    <div class="color1">
  <div class="row deal-index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

        <div class="col-md-4 hidden-xs veticle1 copybanner2" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <?php $i=1;
                              $imgq = $deal->GetProductImages($pid);
                              foreach($imgq as $imagerow) {   ?>  
                            <li class="col-sm-3">
                                <a class="deal-another-img" id="carousel-selector-<?php echo $i; ?>"><img src="../products/<?php echo $imagerow['product_img_path']; ?>"></a>
                            </li>
                            <?php $i=$i+1; } ?>

                            <!--<li class="col-sm-3">
                                <a class="deal-another-img" id="carousel-selector-1"><img src="images/test-tv.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="deal-another-img" id="carousel-selector-2"><img src="images/test-tv.jpg"></a>
                            </li>

                            <li class="col-sm-3">
                                <a class="deal-another-img" id="carousel-selector-3"><img src="images/test-tv.jpg"></a>
                            </li>-->

                            
                        </ul>                 
                </div>  
        
        
<div class="col-md-5 veticle1">
        <div class="deal-container-share">

          <div class="col-xs-4 share-padding2">
            <p class="deal-share1">
           <i class="far fa-heart" aria-hidden="true"></i>
            250
          </p>
          </div>

          <div class="col-xs-4 share-padding2">
<p class="deal-share1">
           <i class="fas fa-share-alt" aria-hidden="true"></i>
            Share
          </p>          
        </div>

          <div class="col-xs-4 share-padding2">
<p class="deal-share1">
            40+ Availed
          </p>
          </div>
        </div>
      </div>
       
      <div class="col-md-3 veticle1">
    </div>      

</div>
  </div>
</div>


  
  
  



  <!-- start detailed -->


<div class="container-fluid home-page1" >
    <div class="color1">

  
  <div class="row index-categaries deal-detail2" style="margin-left: 0px; margin-right: 0px;"> 
     <div class="col-md-12  deal-detail3">
      <div class="deal-border">
<div id="exTab1"> 
<ul  class="nav nav-pills news">
      <li class="active deal-btn11">
        <a href="#1a" data-toggle="tab" class="deal-detail-btn1">Detailed Description</a>
      </li>
      <li><a href="#2a" data-toggle="tab" class="deal-detail-btn2">Technical Specifications</a>
      </li>
      
    </ul>

      <div class="tab-content clearfix">
        <div class="tab-pane active" id="1a">
<p class="deal-para-header">  
There are now a set of mock banners available here:
     </p>

     <p class="deal-para">
        <h4>Short Description</h4>
     <?=$fetchrow['product_sdc']?>  


<br><br>
<h4>Long Description</h4>
     <?=$fetchrow['product_ldc']?> 
   </p>
        </div>
        <div class="tab-pane" id="2a">
<p class="deal-para-header">  
     </p>
       <?php
          $ResultList = $Base->SelectDataWithColumn("DISTINCT heading",'product_attribute',"product_id='$pid'"); 
          if(!empty($ResultList)){  
          foreach($ResultList as $data){
            $heading = $data['heading']; ?>
     <div class="col-sm-12"> 
       <table border="0" width="100%">
           <tr>
           <td colspan="2">
           <h4><?=$heading?></h4>
           </td>
           </tr>
          <?php 
          $ResultList2 = $Base->SelectDataWithColumn("*",'product_attribute','product_id',"`heading`='$heading' and `product_id`='$pid'");   
            foreach($RresultList2 as $fetchrow2){
          ?>
           <tr>
              <td>
              <p><?=$fetchrow2['title']?></p>
              </td>
              <td>
               <p><?=$fetchrow2['description']?></p>
              </td>
           </tr>
<?php } ?>
        </table>
        </div>
<?php } } ?>

     <!--<p class="deal-para">  
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

<br><br>

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.     </p>-->
        </div>
          
      </div>
  </div>



      </div>
     
<p class="deal-view">View Full Description</p>
    </div>       

              
              

</div>
  </div>
</div>






  <!--end detaied-->

<div class="container-fluid home-page1" >
    <div class="color1">

  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 
<div class="col-md-6 deal-right-border" >
        <p class="deal-visit">Before you visit the store</p>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">We recommend you to call the retailer to confirm the availability of the deal before going to the store</p>
         </div>
        </div>



        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here includes all king of taxes</p>
         </div>
        </div>
       


       <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here does not include any additional offers</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">This deal can not clubbed with any other existing deal or offer</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Don NOT share the purchase ID with the retailer until you buy the product from him.</p>
         </div>
        </div>

           </div>

<div class="col-md-6 mobile-border11">
        <p class="deal-visit">How to avail this offer</p>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">We recommend you to call the retailer to confirm the availability of the deal before going to the store</p>
         </div>
        </div>



<div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here includes all king of taxes</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here does not include any additional offers</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">This deal can not clubbed with any other existing deal or offer</p>
         </div>
        </div>

    </div>
</div>
  </div>
</div>



<div class="container-fluid home-page1 mobile-border10" >
    <div class="color1">
<div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

          <div class="col-md-12 ">
        <p class="deal-visit">How to avail this offer</p>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">We recommend you to call the retailer to confirm the availability of the deal before going to the store</p>
         </div>
        </div>



<div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here includes all king of taxes</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">Prices shown here does not include any additional offers</p>
         </div>
        </div>

        <div class="row deal-para1">
         <div class="col-sm-1 col-xs-2">
          <i class="fa fa-minus" aria-hidden="true"></i>
         </div>
         <div class="col-sm-11 col-xs-10">
          <p class="deal-para2">This deal can not clubbed with any other existing deal or offer</p>
         </div>
        </div>

    </div>
       
            

</div>
  </div>
</div>
  <!-- start visit stonre -->





<div class="container-fluid home-page1" >
    <div class="color1">

  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>Similar Products</span></h2>
</div>
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 
<?php 
  $pname = $fetchrow['product_model'];
  $fetchproduct = $product->ActiveProductSearchInDealwise($pname);  
          $dealid = $fetchproduct['deal_id'];
          $SellerData = $seller->GetDealsSellerData($dealid); ?>
      <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
              <div class="div-images"><img src="<?=$fetchproduct['product_img']?>" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer"><?=round($fetchproduct['deal_discount_per'])?>% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title"><?=$fetchproduct['product_name']?></p>
              <p class="index-product-city"><?=$SellerData['o_seller_city']?></p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i>
 <?=$fetchproduct['deal_discount']?>
 <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i>
  <?=$fetchproduct['deal_mrp']?></small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
            
      
     <!-- <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i>
 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
      
      <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i>
 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
      
      <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i>
 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>-->
</div>
  </div>
</div>
<div class="container-fluid home-page1" >
    <div class="color1">
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 

      <div class="col-md-4 address2">
   <a href="#"> <p class="deal-below-header1">
      Other deals by same retailer >> 
    </p></a>
  </div>
<div class="col-md-4 address2">
    <a href="#"><p class="deal-below-header2">
      Other deals by same retailer >> 
    </p></a>
  </div>
<div class="col-md-4 address2">
    <a href="#"><p class="deal-below-header">
      Other deals by same retailer >>
    </p></a>
  </div>
</div>
  </div>
</div>
<!--end visit store-->
</div><?php include("includes/footer.php"); ?>
