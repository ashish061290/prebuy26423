<?php include("../config/config.php");
      include("../lib/BaseModal.php");
      include("../modal/SellerModal.php");
      if($admin_id){
       $retailID = $admin_id;
       $retailers = $Base->SelectData('o_seller','o_seller_rid',$retailID);
      
      }else{
      $res = $Base->SessionDestroy(); 
         if($res){
          echo("<script>location.href = '".SELLER."';</script>");
         } }
    include('layouts/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini" style="z-index: 0;">
<div class="wrapper">
 <?php include('layouts/header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include("layouts/sidebar.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

<div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Retailer Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseZero">
                        Main Branch Detail
                      </a>
                    </h4>
                  </div>

<section id="collapseZero" class="panel-collapse collapse in">
  <div class="col-sm-12">
    <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?=$retailers['o_seller_name']?></h3>
              <h5 class="widget-user-desc"><?=$retailers['o_seller_store']?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="http://shrimahaveerschool.com/wp-content/uploads/2015/06/image_gallery.png" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <span class="description-header">Personal Details</span>
                  </div>
                  <table class="table table-border table-hover">
                  <tr><td>Name</td><td><?=$retailers['o_seller_name']?></td></tr>
                  <tr><td>Seller ID</td><td><?=$retailers['o_seller_rid']?></td></tr>
                  <tr><td>Email</td><td><?=$retailers['o_seller_email']?></td> </tr>
                  <tr><td>Contact</td><td><?=$retailers['o_seller_contact']?></td></tr>
                  <tr><td>Alternate</td><td><?=$retailers['o_seller_alt']?></td></tr>
                  <tr><td>Address Line 1</td><td><?=$retailers['o_seller_add1']?></td></tr>
                  <tr><td>Address Line 2</td><td><?=$retailers['o_seller_add2']?></td></tr>
                  <tr><td>City</td><td><?=$retailers['o_seller_city']?></td></tr>
                   <tr><td>Pincode</td><td><?=$retailers['o_seller_pincode']?></td></tr>                                      
                    </tr>
                  </table>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Package Details</h5>
                  </div>
                  <?php
                  $select = "*";
                  $count = $Base->SelectDataJoin('seller_package_detail','packages',$select,'JOIN','seller_rid',$retailers['o_seller_rid']);
                  ?>
                  <table class="table table-border table-hover">
                  <tr><td>Package Name</td><td><?=$count['pack_name']?></td></tr>
                  <tr><td>Payment Amount</td><td><?=$count['payment_amount']?></td></tr>
                  <tr><td>Payment Mode</td><td><?=$count['payment_mode']?></td> </tr>
                  <tr><td>Payment Date</td><td><?=$count['payment_date']?></td></tr>
                  <tr><td>Number Of Deals</td><td><?=$count['number_of_deals']?></td></tr>
                  <tr><td>Availed Deals</td><td><?=0?></td></tr>
                  <tr><td>Left Deals</td><td><?=$count['number_of_deals']-0?></td></tr>                                                       
                    </tr>
                  </table>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Store Details</h5>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
  </div>
</section>
  </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
       <?php 
       $i=1;
       $sellerb_rid = $retailers['o_seller_rid'];
       $result = $Base->SelectDataWithColumn("*","seller_branch","sellerb_rid='$sellerb_rid'");
        foreach($result as $fetchrow){ ?>
      <section class="content-header">
    </section>
 <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Retailer Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
                        Main Branch <?php echo $i; ?> Detail
                      </a>
                    </h4>
                  </div>
<section id="collapse<?php echo $i; ?>" class="panel-collapse collapse in">
  <div class="col-sm-12">
    <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?=$retailers['o_seller_name']?></h3>
              <h5 class="widget-user-desc"><?=$retailers['o_seller_store']?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="http://shrimahaveerschool.com/wp-content/uploads/2015/06/image_gallery.png" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <span class="description-header">Personal Details</span>
                  </div>
                  <table class="table table-border table-hover">
                  <tr><td>Name</td><td><?=$retailers['o_seller_name']?></td></tr>
                  <tr><td>Seller ID</td><td><?=$retailers['o_seller_rid']?></td></tr>
                  <tr><td>Email</td><td><?=$retailers['o_seller_email']?></td> </tr>
                  <tr><td>Contact</td><td><?=$retailers['o_seller_contact']?></td></tr>
                  <tr><td>Alternate</td><td><?=$retailers['o_seller_alt']?></td></tr>
                  <tr><td>Address Line 1</td><td><?=$retailers['o_seller_add1']?></td></tr>
                  <tr><td>Address Line 2</td><td><?=$retailers['o_seller_add2']?></td></tr>
                  <tr><td>City</td><td><?=$retailers['o_seller_city']?></td></tr>
                   <tr><td>Pincode</td><td><?=$retailers['o_seller_pincode']?></td></tr>                                      
                    </tr>
                  </table>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Package Details</h5>
                  </div>
                  <?php
                  $select = "*";
                  $count = $Base->SelectDataJoin('seller_package_detail','packages',$select,'JOIN','seller_rid',$retailers['o_seller_rid']);
                  ?>
                  <table class="table table-border table-hover">
                  <tr><td>Package Name</td><td><?=$count['pack_name']?></td></tr>
                  <tr><td>Payment Amount</td><td><?=$count['payment_amount']?></td></tr>
                  <tr><td>Payment Mode</td><td><?=$count['payment_mode']?></td> </tr>
                  <tr><td>Payment Date</td><td><?=$count['payment_date']?></td></tr>
                  <tr><td>Number Of Deals</td><td><?=$count['number_of_deals']?></td></tr>
                  <tr><td>Availed Deals</td><td><?=0?></td></tr>
                  <tr><td>Left Deals</td><td><?=$count['number_of_deals']-0?></td></tr>                                                       
                    </tr>
                  </table>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Store Details</h5>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div> </section> </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <?php $i = $i+1; } ?>
  </div>
  <?php include('layouts/footer.php'); ?>
</body>
</html>
