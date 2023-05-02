<?php include("../config/config.php");
      include "../lib/BaseModal.php";
      include "../modal/BrandModal.php";
      include('layouts/head.php'); ?>
<body class="hold-transition skin-blue sidebar-mini" style="z-index: 0;">
<?php include('layouts/header.php'); ?><!-- Left side column. contains the logo and sidebar -->
 <?php include("layouts/sidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Brands
        <small>Brands We deal in</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="brands.php">Brands</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php
$action= ""; $id="";$table="brands";
if(isset($_GET['action'])){
	$action = $_GET['action'];
if(isset($_GET['id'])){	$id = $_GET['id']; } 
}
if($action=="add"){ ?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Brands</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Brand Name <span style="color:red;">*</span></label>
                  <input type="text" placeholder="e.g. XYZ" name="brand_name" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Brand Logo<span style="color:red;">*</span></label>
                  <input type="file" name="brand_img" class="form-control" accept="image/*" required="true">
              </div>
           
              <!-- /.form-group -->
            <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" value="Add Category">
            </div>
          </div>   
                 </form></div></div></div>
            <!-- /.col -->
<?php
if(isset($_POST['submit'])){
  $image_tmp_name = $_FILES['brand_img']['tmp_name'];
  $image_name = $_FILES['brand_img']['name'];
  $path = "../storage/uploads/Brand/";
  $image_type = array("png","jpg","jpeg");
  $ImageData = Helper::ImageUpload($image_tmp_name,$image_name,$path,$image_type);
  $data = array("brand_name"=>$_POST['brand_name'],"brand_logo"=>$ImageData['file_path'],"brand_img"=>$ImageData['file_name'],"status"=>1);
if($ImageData['file_name']){
   $insert = $Base->SaveEdit($data,null,null,$table);
   if($insert){ ?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Brand Added Successfully.
              </div>

  <?php } } else{ ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i>Failed!</h4>
               Brand Upload Failed, due to some problem.
              </div>
<?php } } ?>            
            <!-- /.col -->
          </div>

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://sathitech">Sathitech</a> for more examples and information about
          the plugin.
        </div></div> <?php
}

else if($action=="delete"){
  $delete = $Base->DeleteData($table,"brand_id",$id);
  if($delete){
    ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Deleted!</h4>
               Brand Deleted Successfully.
              </div>

    <?php
  }
  else{?>
  		<div class="alert alert-danger alert-dismissible">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                	<h4><i class="icon fa fa-ban"></i> Deleted!</h4>
               		Some Error Please Try again...
              </div>
  <?php }
}
else if($action=="edit"){
  $condition = "brand_id='".$id."'";
  $result = $Base->SelectDataWithColumn("*",$table,$condition);
  foreach($result as $row){
?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Brand</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Brand Name <span style="color:red;">*</span></label>
                  <input type="text" name="brand_name" value="<?= $row['brand_name']?>" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Brand Logo<span style="color:red;">*</span></label>
                <div class="form-group">
                  <img src="<?=$row['brand_logo'];?>" style="width:80px;">  
                </div>  
                <input type="file" name="brand_img"  class="form-control" accept="image/*" required="true">
              </div>
           
              <!-- /.form-group -->
                            <div class="form-group">
             <input type="submit" class="btn btn-success" name="update" value="Update Brand">
            </div>
          </div>   
                 </form></div></div></div>
            <!-- /.col -->
<?php }
if(isset($_POST['update'])){
  $image_tmp_name = $_FILES['brand_img']['tmp_name'];
  $image_name = $_FILES['brand_img']['name'];
  $path = "../storage/uploads/Brand/";
  $image_type = array("png","jpg","jpeg");
  $ImageData = Helper::ImageUpload($image_tmp_name,$image_name,$path,$image_type,$id,$row['brand_img']);
  $data = array("brand_name"=>$_POST['brand_name'],"brand_logo"=>$ImageData['file_path'],"brand_img"=>$ImageData['file_name'],"status"=>1);
if($ImageData['file_name']){
   $update = $Base->SaveEdit($data,$id,"brand_id",$table);
   if($update){ ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Brand Updated Successfully.
              </div>

  <?php } } else{ ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i>Failed!</h4>
               Brand Updation Failed, due to some problem.
              </div>
<?php } } ?>            
            <!-- /.col -->
          </div>

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://sathitech">Sathitech</a> for more examples and information about
          the plugin.
        </div></div>
<?php 
}
else{
?>          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Brands</h3>
            </div>
            <a href="brands.php?action=add"><button class="btn btn-danger">Add New Brand</button></a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Brand Id</th>
                  <th>Brand Name</th>
                  <th>Brand Image</th>                                    
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            <?php
             $condition = "delete_status=1";
             $BrandList = $Base->SelectDataWithColumn("*",$table,$condition);
              //$BrandList = $Brand->GetBrandList();
              foreach($BrandList as $row){ ?>
                <tr>
                  <td><?=$row['brand_id']?></td>
                  <td><?=$row['brand_name']?></td>
                  <td><img src="<?=$row['brand_logo'];?>" style="width:80px;"></td>
                  <td>
                  	<a href="brands.php?action=edit&id=<?=$row['brand_id']?>"><button class='btn btn-info'>Edit</button></a>
                    <a href="brands.php?action=delete&id=<?=$row['brand_id']?>"><button class='btn btn-danger'>Delete</button></a>
                  </td>
                </tr> <?php } ?>
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
  <?php include("layouts/footer.php"); ?>