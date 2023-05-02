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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Prebuy Deals
        <small>Deals</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php
$action= ""; $id="";
if(isset($_GET['action'])){
  $action = $_GET['action'];
if(isset($_GET['id'])){ 
  $id = $_GET['id']; 
  $completeData = $Base->SelectData('o_seller','o_seller_id',$id);
  $getBranchData = $seller->GetSellerBranch('seller_branch','sellerb_rid',$completeData['o_seller_rid'],null,null,1);
  $getBranchData2 = $seller->GetSellerBranch('seller_branch','sellerb_rid',$completeData['o_seller_rid'],'ORDER BY seller_branch_id DESC',0,1);
} 
}
if($action=="view"){
  $getdeals = $Base->SelectData('prebuy_deals','deal_id',$id);
  $getProduct = $Base->SelectData('product','product_model',$getdeals['deal_model_number']);
?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Seller ID : <?=$retailers['o_seller_rid']?></h3>
        <button class="btn btn-warning">Edit Deal</button>
        <?php if($getdeals['deal_status']==0){  ?>
        <button class="btn btn-success">Confirm Deal</button>
       <?php } ?>
        <?php if($getdeals['deal_status']==1){ echo "<span class='pull-right badge bg-green'>Active</span>";}
        else { echo "<span class='pull-right badge bg-red'>Inactive</span>";}
        ?>
        </div>
        <div class="box-body">
          <div class="col-sm-6">
    <table class="table table-bordered table-striped table-hover">
      <tr>
  <td colspan="2" align="center">
  <img src="<?=$getdeals['deal_offer_image']?>" style="width:100px;">
  </td>
</tr>
      <tr><th>Deal MRP</th><td><?=$getdeals['deal_mrp']?></td></tr>
      <tr><th>Deal Discount</th><td><?=$getdeals['deal_discount']?></td></tr>      
      <tr><th>Discount Percent</th><td><?=$getdeals['deal_discount_per']?>%</td></tr>
<tr><th>Offer Title</th><td><?=$getdeals['deal_offer_title']?></td></tr>
<tr><th>Offer Description</th><td><?=$getdeals['deal_offer_desc']?></td></tr>
<tr><th>Deal EMI</th><td><?=$getdeals['deal_emi']?></td></tr>
<tr><th>Deal Warranty</th><td><?=$getdeals['deal_warranty']?></td></tr>
<tr><th>Deal Exchange</th><td><?=$getdeals['deal_exchange']?></td></tr>                  
    </table>
          </div>
          <div class="col-sm-6">
            <table class="table table-striped table-bordered">
              <tr>
                <td>Product Name</td><td><?=$getProduct['product_name']?></td>
              </tr>
              <tr>
                <td>Product Model</td><td><?=$getProduct['product_model']?></td>
              </tr>
              <tr>
                <td>Product Brand</td><td><?=$getProduct['product_brand']?></td>
              </tr>
              <tr>
                <td>Product Size</td><td><?=$getProduct['product_size']?></td>
              </tr>
              <tr>
                <td>Product OS</td><td><?=$getProduct['product_OS']?></td>
              </tr>
              <tr>
                <td>Product Storage</td><td><?=$getProduct['product_storage']?></td>
              </tr>
              <tr>
                <td style="word-wrap: break-word;width: 50%;">Product Short Description</td><td><?=$getProduct['product_sdc']?></td>
              </tr>
              <tr>
                <td style="word-wrap: break-word;width: 50%;">Product Long Description</td><td><?=$getProduct['product_ldc']?></td>
              </tr>                                                                                                  
            </table>
          </div>
        </div>

</div>        
  <?php }
else if($action=="confirm"){
$updateDeal = "UPDATE `prebuy_deals` SET `deal_status`=1 WHERE `deal_id`='".$id."'";
$update = mysqli_query($conn,$updateDeal);
if($update){
  ?>
 <div class="col-sm-12 alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='dealApproval.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Deal Updated, Your deal will be live now
  </div>
  <?php } }
else if($action=="edit"){
$updateDeal = "UPDATE `prebuy_deals` SET `deal_status`=2 WHERE `deal_id`='".$id."'";
$update = mysqli_query($conn,$updateDeal);
if($update){ ?>
 <div class="col-sm-12 alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='dealApproval.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Deal Edit Requestes, We will call you soon.
  </div><?php } }else{ ?>          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">My Deals</h3>
            </div>
<!--            <a href="category.php?action=add"><button class="btn btn-danger">Add New Category</button></a>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Seller Id</th>
                  <th>Deal ID</th>
                  <th>Product Model</th>                  
                  <th>Image</th>                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              <?php $condition = "dealOwnerId='".$retailers['o_seller_id']."'";
              $result = $Base->SelectDataWithColumn("*",'prebuy_deals',$condition);
              foreach($result as $row){ ?>
                <tr>
                  <td><?=$retailers['o_seller_rid']?></td>
                  <td><?=$row['deal_s_id']?></td>
                  <td><?=$row['deal_model_number']?></td>
                  <td>     
                    <img src="../offerImage/<?=$row['deal_offer_image']?>" style='width:50px;'>
                  </td>
                  <td>
                    <a href="dealapproval.php?action=view&id=<?=$row['deal_id']?>"><button class='btn btn-info'>View</button></a>
                     <?php if($row['deal_status']==0){ ?>                    
                    <a href="dealApproval.php?action=confirm&id=<?=$row['deal_id']?>"><button class='btn btn-success'>Confirm Deal</button></a> <?php } ?>
                    <a href="dealApproval.php?action=edit&id=<?=$row['deal_id']?>"><button class='btn btn-warning'>Edit Deal</button></a>                    
                  </td>
                </tr><?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <?php } ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('layouts/footer.php'); ?>
</body>
</html>
