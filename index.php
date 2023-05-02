  <?php $title="Sathitech Deal Management";
        include "includes/head.php";
        include('modal/SliderModal.php');
        include('modal/CategoryModal.php');
        include('modal/SubCategoryModal.php');
        include('modal/ProductModal.php');
        include('modal/SellerModal.php'); 
        include('modal/DealModal.php'); 
        $Category = $Base->SelectDataWithColumn("*",'category');
  ?>  
<body class="homepage" style="overflow-x: hidden;">
  <?php  include('how-prebuy-works.php'); ?>
<!-- <div class="se-pre-con"></div>

  <!- HEADER START 
  <div class="container-fluid navbar1">
  </div>-->
 <?php include("includes/header.php"); ?>
  <div class="sidebar-search-wrap">
    <div class="sidebar-table-container">
      <div class="sidebar-align-container">
        <div class="search-closer right-side"></div>
        <div class="search-container">
          <form method="get" id="search-form">
            <input type="text" id="s" class="search-input" name="s" placeholder="Start Searching">
          </form>
          <span>Search and Press Enter</span>
        </div>
      </div>
    </div>
  </div> 
  <!-- HEADER END --> 
  
  <!-- BANNER STRAT -->
  <!-- BANNER END --> 
<div class="container home-banner-images">
<div class="color1">
<div class="row home-banner-padding" style="margin-left: 0px; margin-right: 0px;">        
<div id="carousel-example" class="carousel slide" data-ride="carousel">  
<div class="carousel-inner index-banne1">
<?php
$sliderlist = $slider->GetSlider();
$i=0;
foreach($sliderlist as $getSlider){
$i++;
?>
<div class="<?php if($i==1){ echo 'item active'; } else{ echo 'item'; }?>">
  <div class="row img2">
   <div class="col-sm-12 col-xs-12" style="margin: 0; padding: 0;">
     <a href="shop.php"><img src="<?=$getSlider['slider_path']?>" class="img-responsive"/></a>            
   </div>
  </div>
</div>
<?php } ?>  
<a class="left" href="#carousel-example" data-slide="prev">
  <i class="fa fa-chevron-left" aria-hidden="true" style="font-size: 25px; color: #FFFFFF;"></i>
</a>
<a class="right" href="#carousel-example" data-slide="next">
  <i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 25px; color: #FFFFFF;"></i>
</a>
</div>
</div>   
</div>
</div>
</div> <!-- banner end --> 
<!--start catagaries-->
<?php include("includes/Category.php"); ?>
<!--
<div class="container-fluid home-page1" >
  <div class="color1">
  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>Our Popular Categories</span></h2>
</div>
  <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"> 
    <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
<?php
   $min = 0; $max = 4;
   $Subcatlist1 = $subcat->GetSubcatByJoin($min,$max);
   foreach($Subcatlist1 as $getsubcatrow1){
     $subcatname = $getsubcatrow1['product_subcat'];
     $subcatname = json_decode($subcatname, true); 
     $subcatdata  = $subcat->GetSubcatBYName($subcatname[0]);
     if($subcatdata){
      ?>
     <div class="col-md-3 col-sm-3 col-xs-3" style="text-align: center; padding:5px 5px;">
     <div class="index-product-icon">
       <a href="categaries.php?id=<?=$subcatdata['subcat_id']?>">
          
        <img src="<?=$subcatdata['subcat_img'] ?>" class="catagaries-img"></a>
          <div class="caption font1">
            <a href="categaries.php?id=<?=$subcatdata['subcat_id']?>"><?=$subcatdata['subcat_name']?></a>
        </div>
  </div>
</div>
      <?php }  } ?>
      </div>
<div class="col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
<?php
$min = 4; $max = 3;
$Subcatlist2 = $subcat->GetSubcatByJoin($min,$max);
   foreach($Subcatlist2 as $getsubcatrow){
     $subcatname = $getsubcatrow['product_subcat'];
     $subcatname = json_decode($subcatname, true);
     $subcatdata2  = $subcat->GetSubcatBYName($subcatname[0]);
      ?>
       <div class="col-md-3 col-sm-3 col-xs-3" style="text-align: center; padding:5px 5px;">
     <div class="index-product-icon">
       <a href="categaries.php?id=<?=$subcatdata2['subcat_id']?>">
        <img src="<?=$subcatdata2['subcat_img']?>" class="catagaries-img"></a>
          <div class="caption font1">
            <a href="categaries.php?id=<?=$subcatdata2['subcat_id']?>"><?=$subcatdata2['subcat_name']?></a>
        </div>
  </div>
</div>
      <?php } ?>
<div class="col-md-3 col-sm-3 col-xs-3" style="text-align: center; padding:5px 5px;">
  <div class="index-product-icon">
    <a href="categaries.php"><img src="<?php echo STORAGE ?>images/view-more.png" class="catagaries-img"></a>
    <div class="caption font1">
      <a href="categaries.php">View More</a>
    </div>
  </div>
</div>
   </div>
</div>
</div>
</div>-->
<!--end catesgies--
<div class="container-fluid home-page1" >
  <div class="color1">
  <div class="row index-categaries index-img-padding" style="margin-left: 0px; margin-right: 0px;"> 
<div class="sub-banner-block center-sm">
        <div class="row mlr_-20" style="margin-right: 0px; margin-left: 0px;">
          <div class="col-md-4 col-sm-12 plr-20">
            <div class="sub-banner sub-banner1" >
              <a href="shop.html">
                <img alt="Eshoper" src="<?php //echo STORAGE ?>images/570x570.jpg">
                <div class="sub-banner-effect"></div>
                <div class="sub-banner-detail">
                  <div class="sub-banner-title sub-banner-title-color"></div>
                  <div class="sub-banner-subtitle"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 plr-20">
            <div class="banner-top ">
              <div class="sub-banner sub-banner2">
                <img alt="Eshoper" src="<?php //echo STORAGE ?>images/570x2752.jpg">
                <div class="sub-banner-effect"></div>
                <div class="sub-banner-detail">
                  <div class="sub-banner-title sub-banner-title-color"></div>
                </div>
              </div>
            </div>
            <div class="banner-bottom">
              <div class="sub-banner sub-banner3">
                <img alt="Eshoper" src="<?php //echo STORAGE ?>images/570x275.jpg">
                <div class="sub-banner-effect"></div>
                <div class="sub-banner-detail">
                  <div class="sub-banner-title sub-banner-title-color"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 plr-20">
            <div class="sub-banner sub-banner4" >
              <img alt="Eshoper" src="<?php //echo STORAGE ?>images/570x5702.jpg">
              <div class="sub-banner-effect"></div>
              <div class="sub-banner-detail">
                <div class="sub-banner-title sub-banner-title-color"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
  </div>
  <!- SUB-BANNER END -->
  <div class="container-fluid home-page1" >
    <div class="color1">
  <div class="heading-part align-center" style="padding-top:0px;">
  <h2 class="main_title"><span>Offers Deals</span></h2>
</div>
  <div class="row index-categaries mobile-padding2" style="margin-left: 0px; margin-right: 0px;"> 
<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images">
                <img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img">
                
                </div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
          <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php"><div class="div-images">
               <img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img">
              </div></a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>    
        <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images">
                  <img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img">
                </div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
          <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img"></div></a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>

              <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
          

          
            <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img" >
</div>
                </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>

              <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">

                <div class="div-images"><img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img"></div>

              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/test-tv.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>

</div>
  </div>
</div>
<!--  Site Services Features Block Start  -->
  <!--  Site Services Features Block End  -->
<div class="container-fluid home-page1" >
  <div class="color1">

  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>max saving</span></h2>
</div>
  <div class="row index-categaries mobile-padding2" style="margin-left: 0px; margin-right: 0px;"> 
<?php $fetchdata1 = $product->GetDealsProduct();
      if(count($fetchdata1)>0){
      foreach($fetchdata1 as $prow1){
         $dealid = $prow1['deal_id'];
         $dealseller1 = $seller->GetDealsSellerData($dealid); ?> 
<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php?id=<?php echo $dealseller1['deal_id'];?>">
               <div class="div-images"> <img src="../prebuy/products/<?=$prow1['product_img']?>" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer"><?php $str = trim($prow1['deal_discount_per'],"%"); echo round($str); ?> Off </p><span id="index-emi"><?php if($prow1['deal_emi'] =="yes"){ echo "+EMI. exchange,F..";} ?></span></div>
              <p class="index-product-title"><?=$prow1['product_name']?></p>
              <p class="index-product-city"><?php echo ucwords($dealseller1['o_seller_landmark']); ?><br/><?php  echo ucwords($dealseller1['o_seller_city']);?></p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i><?=$prow1['deal_discount']?>
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> <?=$prow1['deal_mrp']?></small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
          <?php } } ?>
       </div>
    </div>
</div>
<!-- Item slider end-->
<div class="container-fluid home-page1" >
  <div class="color1">
  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>Recently Viewed</span></h2>
</div>
  <div class="row index-categaries mobile-padding2" style="margin-left: 0px; margin-right: 0px;"> 
<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
     
	 <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
			
			<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
			
			<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
			<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
			
			<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/fridge2.jpg" class="img-responsive center-block index-product-img"></div>
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
      </div>
   </div>
</div>
<!-- start recently viewed-->
<div class="container-fluid home-page1" >
  <div class="color1">

  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>Recently Viewed</span></h2>
</div>
  <div class="row index-categaries mobile-padding2" style="margin-left: 0px; margin-right: 0px;"> 
<div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
              </a>
              <div class="index-offer-price"><p class="index-offer">30% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
              <p class="index-product-title">Samsung UA32FH4003R 32 inch HD Ready LED TV  </p>
              <p class="index-product-city">Anandnagar Road Sattelite</p>
              <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i> 20000
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> 20000</small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="far fa-heart heart-color"></i>
230</p></div>
            </div>
            </div>
             <div class="col-xs-6 col-sm-6 col-md-3 index-product">
              <div class="index-product-des">
              <a href="deal.php">
                <div class="div-images"><img src="<?php echo STORAGE ?>images/wm2.jpg" class="img-responsive center-block index-product-img"></div>
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

</div>
  </div>
</div>
<!--end recently viewed-->
<!--start recently added-->
<div class="container-fluid home-page1" >
  <div class="color1">
  <div class="heading-part align-center mb-30">
  <h2 class="main_title"><span>Recently Added</span></h2>
</div>
<div class="row index-categaries mobile-padding2" style="margin-left: 0px; margin-right: 0px;"> 
<?php
$limit = 8;
$RecentDeals = $deal->GetDealsDetail($limit);
foreach($RecentDeals as $newDealRecent){
  //echo $key;
  //print_r($newDealRecent);
  $productDetail = $product->GetProductByModel($newDealRecent['deal_model_number']);
  ?>
<div class="col-xs-6 col-sm-6 col-md-3 index-product">
<div class="index-product-des">
  <a href="deal.php">
      <div class="div-images">
        <img src="products/<?=$productDetail['product_img']?>" class="img-responsive center-block index-product-img">
      </div>
  </a>
      <div class="index-offer-price">
        <p class="index-offer"><?=round($newDealRecent['deal_discount_per'])?>% Off</p>
        <span id="index-emi">+EMI. exchange,F.. </span>
      </div>
        <p class="index-product-title" style="  white-space: nowrap; 
    width: 100%;overflow: hidden;text-overflow:ellipsis;">
          <?=$productDetail['product_name']?>
            
          </p>
        <p class="index-product-city">Anandnagar Road Sattelite</p>
        <p class="index-product-price">
  <i class="fas fa-rupee-sign index-ruppee"></i>
 <?=$newDealRecent['deal_discount']?>
  <small class="text-muted index-mrp"><i class="fas fa-rupee-sign index-ruppee-small"></i> <?=$newDealRecent['deal_discount']?></small>
</p>
<div style="display: flex;justify-content: space-between;" class="index-product-avail">
  <p>50+ Availed</p>  
  <p><i class="far fa-heart heart-color"></i>230</p>
</div>
</div>
</div>
<?php } ?>  
  </div>
  </div>
   </div>

  <?php include('includes/footer.php'); ?>
