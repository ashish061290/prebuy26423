<?php   include "includes/head.php";
        include('modal/SliderModal.php');
        include('modal/CategoryModal.php');
        include('modal/SubCategoryModal.php');
        include('modal/ProductModal.php');
        include('modal/DealModal.php');
        include('modal/SellerModal.php');
        if(isset($_GET['category'])){

          $categorydetail = $Base->SelectData("category",'title',$_GET['category']);
          $catid = $categorydetail['category_id'];
          $catname = $categorydetail['category_name'];
          $getallsubcat = $Base->SelectDataWithColumn("*",'subcategory',"cat_id='".$catid."'");
        } else{
          $Base->redirect(ERROR_404.'404.php');
        } ?>
<body>
  <style>
    .slogan{
      padding:18px;
    }
    .categoryproduct{
      padding:10px;
    }
  </style>
<div class="se-pre-con"></div>
<div class="main" style='overflow-x: hidden;background-color: #F5F3F5;'> 
<?php  include('how-prebuy-works.php'); ?>
 
  <!-- HEADER START -->
  <?php include("includes/header.php"); ?>
  <!-- HEADER END --> 
<div class="container-fluid categaries-header1">
</div>
<div class="container-fluid categaries-page111">
  <div class="color1">
    <div class="row index-categaries5" style="margin-left: 0px; margin-right: 0px;"> 
      <div class="categaries-header-section"> 
      <div class="col-md-12 col-sm-12 col-xs-12 categaries-banners5">
        <div class="categaries-right">
          <img src="images/category-banner.jpg" class="categaries-banner img-reponsive">
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 categaries-icon-padding">
        <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <?php foreach($getallsubcat as $row){
                        ?>
                    <div class="item text-center">
                      <div class="category-img">
                        <img src="<?=$row['subcat_img']?>" alt="<?=$row['subcat_name']?>" id="item-img">
                    </div>
                    <a href="subcategory.php?category=<?=$_GET['category']?>&subcat=<?=$row['subcat_name']?>"><p><?=$row['subcat_name']?></p></a>
                    </div>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
  </div>
    </div>
    </div>
    </div>
<!-- start Second section -->
  </div>
</div>
<!--start only mobile view-->
<div class="container-fluid home-page1 filter-btn" >
    <div class="color1">
   <div class="row index-categaries" style="margin-left: 0px; margin-right: 0px;"><div id="filter-id" class="filter-btn1"></div>
      </div>
  </div>
</div>
  <div class="container-fluid categaries-page12 " >
       <div class="color1">
        <div class="row index-categaries5" style="margin-left: 0px; margin-right: 0px;"> 
    <div class="col-md-3 col-sm-12 col-xs-12 categaries-section2 filder-show-mobile" id="filder-show-mobile">
 <div class="col-md-12 col-sm-12 col-xs-12 area-hide-mobile1">
        <div class="categaries-area">
          <h2 class="categaries-area1">City Filter</h2>
           <hr/>
          <div class="col-md-8  col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Navrangpura(28)</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Navrangpura" class="categaries-check2"></p>
          </div>

          <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Bhopal(23)</p>
          </div>
          <div class="col-md-4  col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="bhopal" class="categaries-check2"></p>
            </div>
          <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Vatva(12)</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="vatva" class="categaries-check2"></p>
          </div>


<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Maninagar(18)</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Maninagar" class="categaries-check2"></p>
          </div>


<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Vejalpur(12)</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Vejalpur" class="categaries-check2"></p>
          </div>


<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">S.G Highway(25)</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Highway" class="categaries-check2"></p>
          </div>

        </div>
      </div>
      
  <div class="col-md-12 col-sm-12 col-xs-12">
    <hr/>
        <div class="categaries-area">
          <h2 class="categaries-area1">Popular Types</h2>
          <hr/>
          <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Smart TV</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Smarttv" class="categaries-check2"></p>
          </div>

          <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Curved TV</p>
          </div>
          <div class="col-md-4 col-sm-4 col-sm-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="curvedtv" class="categaries-check2"></p>
          </div>

<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Full HD TV</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="fullhd" class="categaries-check2"></p>
          </div>


<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">QHD TV</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="qhdtv" class="categaries-check2"></p>
          </div>


<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">4K TV</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="4ktv" class="categaries-check2"></p>
          </div>


<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Other..</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="other" class="categaries-check2"></p>
          </div>

          
        </div>
      </div> 
     
	  
<!--<div class="col-md-12 col-sm-12 col-xs-12 ">
        <div class="categaries-area2">
          <h2 class="categaries-area1">Price range</h2>

          <p>
  <input type="text" id="amount" readonly style="border:0; color:#212121; font-weight:bold;">
</p>
<div id="slider-range"></div>

        </div>
      </div>
                    -->
 <!-- <div class="col-md-12 col-sm-12 col-xs-12 categaries-price-range">
 <h2 class="categaries-area2">Size/Capacity</h2>
 <div class="categaries-range">
<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
          <p class="categaries-city1">14 inches</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="14inches" class="categaries-check2"></p>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">15 inches</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="15inches" class="categaries-check2"></p>
          </div>
        <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">19 inches</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="19inches" class="categaries-check2"></p>
          </div>
<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">22 inches</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="22inches" class="categaries-check2"></p>
          </div>
  </div>
</div>-->
<hr/>
<div class="col-md-12 col-sm-12 categaries-price-range">
<h2 class="categaries-area2">Offer type</h2>
<hr/>
<div class="categaries-range">
<div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">EMI</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="emi" class="categaries-check2"></p>
          </div>

          <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Exchange</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Exchange" class="categaries-check2"></p>
          </div>

    <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Free Gifts</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="free-gifts" class="categaries-check2"></p>
          </div>
      <div class="col-md-8 col-sm-8 col-xs-8 categaries-city">
            <p class="categaries-city1">Extended warranty</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 categaries-check">
            <p class="categaries-check1"><input type="checkbox" name="vehicle" value="Extended-warranty" class="categaries-check2"></p>
          </div>
         </div>
      </div>
  </div>
   <div class="col-md-9 col-sm-12 col-xs-12">
   <div class="row slogan">
            <div class="categaries-city2">
              <strong>Home><?=$catname ?> </strong></div>
			    </div>
         <div class="row categoryproduct">
         <?php 
         foreach($getallsubcat as $subcat){
          $subcat_name = array();
          $subcat_name[] = $subcat['subcat_name'];
          $getsubcat = json_encode($subcat_name);
          $getsubcat = $getsubcat;
          $getproduct = $Base->SelectDataWithColumn("*",'product',"product_subcat='".$getsubcat."'");
          if(!empty($getproduct)){
            foreach($getproduct as $product){
              $productid = $product['product_id'];
              $productmodel = $product['product_model'];
              $getdeals = $Base->SelectDataWithColumn('*','prebuy_deals',"deal_model_number='".$productmodel."'");
              if(!empty($getdeals)){
                foreach($getdeals as $getdeal){
              $dealOwnerId = $getdeal['dealOwnerId'];
              $dealid = $getdeal['deal_id'];
              $sellerdatarow = $Base->SelectData('o_seller','o_seller_id',$dealOwnerId);
               ?>
              
            <div class="col-xs-4 col-sm-4 col-md-4 index-product">
              <div class="index-product-des">
              <a href="deal.php?id=<?=$dealid;?>">
                <div class="div-images"><img src="<?=$product['product_img']?>" class="img-responsive center-block index-product-img"></div>
              </a>
              <?php if($getdeal['deal_discount_per'] != ''){ ?>
                 <div class="index-offer-price"><p class="index-offer"><?php
                     $category = trim($getdeal['deal_discount_per'],'%');
                  echo round($category); ?>% Off </p><span id="index-emi">+EMI. exchange,F.. </span></div>
                <?php } else { ?>
                 <div class="index-offer-price"><p class="index-offer"><?php echo "No Offer"?> </p><span id="index-emi">+EMI. exchange,F.. </span></div>
                  <?php } ?>
              <p class="index-product-title"><?=$product['product_name']?></p>
              <p class="index-product-city"><?=ucwords($sellerdatarow['o_seller_city'])?></p>
              <p class="index-product-price">Rs. <?=$getdeal['deal_discount']?>
               <small class="text-muted index-mrp">Rs. <?=$getdeal['deal_mrp']?></small></p>
               <div style="display: flex;justify-content: space-between;" class="index-product-avail"><p>50+ Availed</p>  <p><i class="fa fa-heart-o" aria-hidden="true"></i>230</p></div>
            </div>
            </div>
              <?php
            }
           }
          } 
         }
        } ?>
        </div>
          <div class="col-md-12 text-center categaries-view">
            <div class="thumbnail">
              <h3>View more >></h3>
            </div>
          </div>
</div>
</div>
  </div>
</div>
  <!-- Bread Crumb STRAT -->
  <!--end visit store-->
  <!-- FOOTER END -->
  <?php include("includes/footer.php"); ?>
