<?php include("../config/config.php");
      include "../lib/BaseModal.php";
      include "../modal/ProductModal.php";
      include('layouts/head.php');
 ?>
<script type="text/javascript">
   function loadSubCat(val){
    //alert('hi');
     if (val.length == 0) { 
        document.getElementById("subct").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("subct").innerHTML = this.responseText;
                
            }
        };
        xmlhttp.open("GET", "ajax.php?subcat=" + val, true);
        xmlhttp.send();
    }
   }
 </script>
<body class="hold-transition skin-blue sidebar-mini" style="z-index: 0;">
<div class="wrapper">
<?php include('layouts/header.php'); ?><!-- Left side column. contains the logo and sidebar -->
<?php include("layouts/sidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Products
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php
$action= ""; $id=""; $table="product";
$table2="product_img";$msg="";
if(isset($_GET['action'])){
  $action = $_GET['action'];
if(isset($_GET['id'])){ $id = $_GET['id']; } 
}
if($action=="add"){ ?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Product</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!--show message-->
          <?php if($msg=='success'){?>
             <div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='product.php'">&times;</button>
             <h4><i class="icon fa fa-check"></i> Success!</h4>
            Product Added Successfully.
           </div>
          <?php } if($msg=="error"){ ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='product.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i>Failed!</h4>
               Product Upload Failed, due to some problem.
             </div>
            <?php } ?>
            <!-- end message box-->
        <form method="POST" enctype="multipart/form-data">
          
          <div class="row">
            <div class="col-md-12">
              <div class="col-sm-6">
              <div class="form-group">
                <label>Product Name<span style="color:red;">*</span></label>
                  <input type="text" placeholder="e.g. Refrigerator, washing machine" name="product_name" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Product Model<span style="color:red;">*</span></label>
                  <input type="text" placeholder="e.g. XYZ007DGFT" name="product_model" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Product Category<span style="color:red;">*</span></label>
                  <select class="form-control" name="product_cat" value="<?=$productcatrow['category_name']?>" onchange="loadSubCat(this.value)">
                    <option value="">Select Category</option>
                    <?php $SelectedColumns="*"; $WhereCondition="status='1'";
                          $result2 = $Base->SelectDataWithColumn($SelectedColumns,'category',$WhereCondition);
                          foreach($result2 as $row2){
                            echo "<option value=".$row2['category_id'].">".$row2['category_name']."</option>"; } ?>
                  </select>
              </div>
              <div class="form-group">
                <label>Product Subcategory<span style="color:red;">*</span></label>
               <ul type="none" id='subct'>

              </ul>
              </div>
              <div class="form-group">
                <label>Product Brand<span style="color:red;">*</span></label>
                  <select class="form-control" name="product_brand">
                    <option value="">Select Brand</option>
                    <?php
                    $SelectedColumns="*"; $WhereCondition="status='1'";
                    $result3 = $Base->SelectDataWithColumn($SelectedColumns,'brands',$WhereCondition);
                    foreach($result3 as $row3){
                     echo "<option value=".$row3['brand_name'].">".$row3['brand_name']."</option>"; } 
                  ?>
                  </select>
              </div>
              <div class="form-group">
                <label>Product Size<span style="color:red;">*</span></label>
                  <input type="text" placeholder="e.g. XYZ" name="product_size" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Product Cover Image<span style="color:red;">*</span></label>
                  <input type="file" name="product_cover_img" class="form-control" accept="image/*" required="true">
              </div>
              <div class="form-group">
                <label>Product Image(600px*700px)<span style="color:red;">*</span></label>
                  <input type="file" name="product_image" class="form-control" >
              </div>
              <div class="form-group">
                <label>Product MRP<span style="color:red;">*</span></label>
                  <input type="number" name="product_mrp" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Product Price<span style="color:red;">*</span></label>
                  <input type="number" name="product_price" class="form-control" required>
              </div>
           </div>
           <div class="col-sm-6">
              <div class="form-group">
                <label>Product OS<span style="color:red;"></span></label>
                  <input type="text" placeholder="e.g. XYZ" name="product_os" class="form-control">
              </div>
              <div class="form-group">
                <label>Product Storage<span style="color:red;">*</span></label>
                  <input type="text" placeholder="e.g. XYZ" name="product_strg" class="form-control">
              </div>
              <div class="form-group">
                <label>Product Short Description<span style="color:red;">*</span></label>
                  <textarea placeholder="e.g. XYZ" name="product_st_dcs" class="form-control" required="true" style="height: 150px;"></textarea>
              </div>

              <div class="form-group">
                <label>Product Long Description<span style="color:red;">*</span></label>
                  <textarea type="text" placeholder="e.g. XYZ" name="product_lg_dcs" class="form-control" required="true" style="height:150px;"></textarea>
              </div>         
</div>

<div class="row">
<div class="col-sm-12">  
<hr>
  <center><b>Detailed Description</b></center>
  <input type="number" id="number" name="tableNumber" class="form-control">
  <button type="button" onclick="createTable()">Create a Table</button>
  <div class="col-sm-12" id="layout"></div>
</div>
</div>
<hr>
<input type="submit" class="btn btn-success" name="submit" value="Add Product">
</div></form></div></div>
            <!-- /.col -->
<?php
if(isset($_POST['submit'])){
  $image_tmp_name = $_FILES['product_cover_img']['tmp_name'];
  $image_name = $_FILES['product_cover_img']['name'];
  $path = "../storage/uploads/Products/";
  $image_type = array("png","jpg","jpeg");
  $ImageData = Helper::ImageUpload($image_tmp_name,$image_name,$path,$image_type);
  $title = str_replace(" ","-",$_POST['product_name']);
  $product_subcat = array();
  for($i=0;$i<count($_POST['product_subcat']);$i++){
    $product_subcat[] =  $_POST['product_subcat'][$i];
  }
  $product_subcat =  json_encode($product_subcat);
  $data = array("product_name"=>$_POST['product_name'],"product_mrp"=>$_POST['product_mrp'],"product_price"=>$_POST['product_price'],"title"=>$title,"product_model"=>$_POST['product_model'],"product_cat"=>$_POST['product_cat'],"product_subcat"=>$product_subcat,"product_brand"=>$_POST['product_brand'],"product_size"=>$_POST['product_size'],"product_os"=>$_POST['product_os'],"product_storage"=>$_POST['product_strg'],"product_sdc"=>$_POST['product_st_dcs'],"product_ldc"=>$_POST['product_lg_dcs'],"product_img"=>$ImageData['file_path'],"img_name"=>$ImageData['file_name']);
if($ImageData['file_name']){
  $last_id = $Base->SaveEdit($data,null,null,$table);
  if($last_id){
  $date = date("Y-m-d h:i:s");
  $tmp_name = $_FILES['product_image']['tmp_name'];
  $img_name = $_FILES['product_image']['name'];
  $path = "../storage/uploads/Products/";
  $thumb_path1 = "../storage/uploads/Products/large/";
  $thumb_path2 = "../storage/uploads/Products/small/";
  $type = array("png","jpg","jpeg");
  $ImageData = Helper::ImageSizeCrop($tmp_name,$img_name,$path,$type,$thumb_path1,$thumb_path2);
 // print_r($ImageData['large']); die();
  $largedata = array("product_id"=>$last_id,"product_img_path"=>$ImageData['large']['file_path'],"img_name"=>$ImageData['large']['file_name']);
  $Base->SaveEdit($largedata,null,null,$table2);
  foreach($ImageData['small'] as $img){
  $smalldata = array("product_id"=>$last_id,"product_img_path"=>$img['file_path'],"img_name"=>$img['file_name']);
  $Base->SaveEdit($smalldata,null,null,$table2);
  } 
//insert product attribute
    $tablenum = $_POST['tableNumber'];
     for($i=1;$i<=$tablenum;$i++){
       $tableheading = $_POST['tableheading'.$i];
       $last_id = $last_id;
        if($tableheading){
       for($j=1;$j<=7;$j++){
       $title = $_POST['table'.$i.'row'.$j.'col1'];
       $desc = $_POST['table'.$i.'row'.$j.'col2'];
        if($title !='' && $desc !=''){
        $attdata = array("product_id"=>$last_id,"heading"=>$tableheading,"title"=>$title,"description"=>$desc,"status"=>1,"create_date"=>$date);
        $Base->SaveEdit($attdata,null,null,"product_attribute");
       }
     }
    }
  }
//end product attribute
    $msg="success"; } 
       else{ $msg="error"; } } else{ $msg="error"; } } ?>            
            <!-- /.col --> 
      </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       </div> <?php
} else if($action=="delete"){
  $column = 'product_id';
  $deleteproduct = $Base->DeleteData($table,$column,$id);
  $deleteproductimg = $Base->DeleteData($table2,$column,$id);
  $deleteproductattr= $Base->DeleteData('product_attribute',$column,$id);
  if($deleteproduct==true && $deleteproductimg==true &&  $deleteproductattr==true){ ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Deleted!</h4>
               Brand Deleted Successfully.
              </div>

    <?php } else{?>
      <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='brands.php'">&times;</button>
                  <h4><i class="icon fa fa-ban"></i> Deleted!</h4>
                  Some Error Please Try again...
              </div>
  <?php } } else if($action=="view"){
  $WhereCondition = "product_id='".$id."'";
  $result = $Base->SelectDataWithColumn("*",$table,$WhereCondition);
  $productimg = $Base->SelectDataWithColumn("*",$table2,$WhereCondition);
  foreach($result as $gProduct){
?>
<div class="col-sm-12">
<div class="box-header bg-light-blue">
<h3 class="box-title">Product Name : <?=$gProduct['product_name']?></h3>
</div>  
<hr/>
  <div class="col-sm-3">
     <h4 class="box-header bg-light-blue">Cover Image</h4>
    <img src="../products/<?=$gProduct['product_img']?>" style="width:200px;">
    <br/>
  <br/>
    <h4 class="box-header bg-light-blue">Other Images</h4>
    <div class="col-md-12">
      <div class="row">
        <?php foreach($productimg as $pimgrow){ ?>
            <div class="col-md-4" style="padding:15px;">
           <img src="<?php echo $pimgrow['product_img_path']; ?>" width="70" height="70" />
        </div>
    <?php } ?>
  </div>
  </div>
  </div>
  <div class="col-sm-9">
  <div class="box-header bg-light-blue">
<h3 class="box-title">Product Detail</h3>
</div> 
    <table class="table table-bordered table-striped table-responsive">
      <tr>
        <td>Product Name</td>
        <td><?=$gProduct['product_name']?></td>
      </tr>
      <tr>
        <td>Product Model</td>
        <td><?=$gProduct['product_model']?></td>
      </tr>
      <tr>
        <td>Product Subcategory</td>
        <td><?php //decoding subcategory from json to PHP
                  $subcat = json_decode($gProduct['product_subcat']);
                  for($u=0;$u<count($subcat);$u++){
                    echo "#".$subcat[0].",";
                  } ?> 
        </td>
      </tr>
      <tr>
        <td>Product Brand</td>
        <td><?=$gProduct['product_brand']?></td>
      </tr>
      <tr>
        <td>Product Storage</td>
        <td><?=$gProduct['product_storage']?></td>
      </tr>
      <tr>
        <td>Product Size</td>
        <td><?=$gProduct['product_size']?></td>
      </tr>      
      <tr>
        <td>Product OS</td>
        <td><?=$gProduct['product_OS']?></td>
      </tr>
      <tr>
        <td>Short Description</td>
        <td style="word-wrap: break-word; width:50%;"><?=$gProduct['product_sdc']?></td>
      </tr>
      <tr>
        <td>Long Description</td>
        <td style="word-wrap: break-word; width:50%;"><?=$gProduct['product_ldc']?></td>
      </tr>
    </table>
   
</div>
<hr/>
 <div class="col-sm-12">
 <center>
 <div class="box-header bg-light-blue">
  <h3 class="box-title">Product Description</h3>
</div>
</center>
    <?php  
         $SelectedColumns="DISTINCT heading";$WhereCondition="product_id='".$id."'";
         $result = $Base->SelectDataWithColumn($SelectedColumns,'product_attribute',$WhereCondition);  
          foreach($result as $data){
          $heading = $data['heading']; ?>
       <div class="col-sm-6"> 
       <table border="0" width="100%" class="table table-responsive table-hover table-bordered table-striped">
           <tr>
           <td colspan="2">
           <center><h4><?=$heading?></h4></center>
           </td>
           </tr>
          <?php 
           $SelectedColumns="*";$WhereCondition="heading='".$heading."' AND product_id='".$id."'";
           $tabcont = $Base->SelectDataWithColumn($SelectedColumns,'product_attribute',$WhereCondition);  
            foreach($tabcont as $fetchrow){ ?>
           <tr>
              <td>
              <p><h5><?=$fetchrow['title']?><h5></p>
              </td>
              <td>
             <h5>
               <?=$fetchrow['description']?>
             </h5>
              </td>
           </tr>
        <?php } ?>
        </table>
        </div>
       <?php } } ?>
            </div>  
<?php } else if($action=="edit"){
  $condition = "product_id='".$id."'";
  $product = $Base->SelectDataWithColumn("*",$table,$condition);
  $productimg = $Base->SelectDataWithColumn("*",$table2,$condition); 
  foreach($product as $productrow){ ?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Product</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="col-sm-6">
              <div class="form-group">
                <label>Product Name<span style="color:red;">*</span></label>
                  <input type="text" value="<?=$productrow['product_name']?>" name="product_name" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Product Model<span style="color:red;">*</span></label>
                  <input type="text" value="<?=$productrow['product_model']?>" name="product_model" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Product Category<span style="color:red;">*</span></label>
                  <select class="form-control" name="product_cat" value="<?=$productcatrow['category_name']?>" onchange="loadSubCat(this.value)">
                    <option value="">Select Category</option>
                    <?php $SelectedColumns="*"; $WhereCondition="status='1'";
                          $result2 = $Base->SelectDataWithColumn($SelectedColumns,'category',$WhereCondition);
                          foreach($result2 as $row2){
                            echo "<option value=".$row2['category_id'].">".$row2['category_name']."</option>"; } ?>
                  </select>
              </div>
              <div class="form-group">
                <label>Product Subcategory<span style="color:red;">*</span></label>
               <ul type="none" style="float:left;" id='subct'>
              
              </ul>
              </div>
              <div class="form-group">
                <label>Product Brand<span style="color:red;">*</span></label>
                  <select class="form-control" name="product_brand">
                    <option value="">Select Brand</option>
                  <?php
                     $SelectedColumns="*"; $WhereCondition="status='1'";
                     $result3 = $Base->SelectDataWithColumn($SelectedColumns,'brands',$WhereCondition);
                     foreach($result3 as $row3){
                      echo "<option value=".$row3['brand_name'].">".$row3['brand_name']."</option>"; } ?>
                  </select>
              </div>
              <div class="form-group">
                <label>Product Size<span style="color:red;">*</span></label>
                  <input type="text" value="<?=$productrow['product_size']?>" name="product_size" class="form-control" required="true">
              </div>

              <div class="form-group">
                 <label style="float:right"><img src="<?=$productrow['product_img']?>" width="80" height="80" /></label>
                <label>Product Cover Image<span style="color:red;">*</span></label>
                  <input type="file" name="product_img" class="form-control" accept="image/*" >
              </div>
                 <div class="form-group">
                  <?php foreach($productimg as $pimgrow){ ?>
                   <label style="float:right"><img src="<?=$pimgrow['product_img_path']?>" width="80" height="80" /></label><?php } ?>
                <label>Product Image<span style="color:red;">*</span></label>
                <input type="file" name="product_image" class="form-control">
              </div>
           </div>
           <div class="col-sm-6">
              <div class="form-group">
                <label>Product OS<span style="color:red;"></span></label>
                  <input type="text" value="<?=$productrow['product_OS']?>" name="product_os" class="form-control">
              </div>
              <div class="form-group">
                <label>Product Storage<span style="color:red;">*</span></label>
                  <input type="text" value="<?=$productrow['product_storage']?>" name="product_strg" class="form-control">
              </div>
              <div class="form-group">
                <label>Product Short Description<span style="color:red;">*</span></label>
                  <textarea name="product_st_dcs" class="form-control" required="true" style="height: 150px;"><?=$productrow['product_sdc']?></textarea>
              </div>

              <div class="form-group">
                <label>Product Long Description<span style="color:red;">*</span></label>
                  <textarea type="text" name="product_lg_dcs" class="form-control" required="true" style="height:150px;"><?=$productrow['product_ldc']?></textarea>
              </div>         
   </div>
      <div class="row">
       <div class="col-sm-12">  
    <hr/>
    <h4>Product Description</h4>
    <hr/>
  <div class="col-sm-12" id="layout">
    <?php  $SelectedColumns="DISTINCT heading";$WhereCondition="product_id='".$id."'";
         $resultattr = $Base->SelectDataWithColumn($SelectedColumns,'product_attribute',$WhereCondition); 
         $i=1; 
          foreach($resultattr as $data){   
            $heading = $data['heading'];
            $attr_id = $data['id']; ?>
    <div class="col-sm-6"> 
       <table border="0" width="100%" class="table table-responsive table-hover table-bordered table-striped">
           <tr><td colspan="2">
            <input type="hidden" name="attr_id<?php echo $i; ?>" value="<?=$attr_id;?>" />
           <center><input type="text" name="head<?php echo $i; ?>" value="<?=$heading?>" /></center>
           </td>
           </tr>
          <?php $SelectedColumns="*";$WhereCondition="heading='".$heading."' AND product_id='".$id."'";
              $tabcont = $Base->SelectDataWithColumn($SelectedColumns,'product_attribute',$WhereCondition);
              $j=1;  
               foreach($tabcont as $fetchrow){ ?>
             <tr>
              <td>
              <input type="text" name="title<?php echo $j; ?>" value="<?=$fetchrow['title']?>" />
              </td>
              <td><h5>
             <input type="text" name="descr<?php echo $j; ?>" value="<?=$fetchrow['description']?>" />
             </h5>
              </td>
           </tr>
       <?php $j=$j+1; } $i=$i+1; } ?>
        </table>
        </div>
      <?php }  ?>
  <div class="row">
 <div class="col-sm-12">  
  <hr>
  <center><b>Detailed Description</b></center>
  <input type="number" id="number" name="tableNumber" class="form-control">
  <button type="button" onclick="createTable()">Create a Table</button>
  <div class="col-sm-12" id="layout"></div>
</div>
</div>
    </div>
</div>
</div>
<hr>
<input type="submit" class="btn btn-success" name="submit" value="Update">
</form></div></div></div>
            <!-- /.col -->
<?php
if(isset($_POST['submit'])){
  $product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
  $product_model = mysqli_real_escape_string($conn,$_POST['product_model']);
  $product_cat = mysqli_real_escape_string($conn,$_POST['product_cat']);
  $product_subcat = array();           //converting subcategory into json format to store multiple subcat
  for($i=0;$i<count($_POST['product_subcat']);$i++){
    $product_subcat[] =  $_POST['product_subcat'][$i]; }
    $product_subcat =  json_encode($product_subcat);
  $product_brand = mysqli_real_escape_string($conn,$_POST['product_brand']);
  $product_size = mysqli_real_escape_string($conn,$_POST['product_size']);
  $product_os = mysqli_real_escape_string($conn,$_POST['product_os']);
  $product_strg = mysqli_real_escape_string($conn,$_POST['product_strg']);
  $product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
  $product_st_dcs = mysqli_real_escape_string($conn,$_POST['product_st_dcs']);
  $product_lg_dcs = mysqli_real_escape_string($conn,$_POST['product_lg_dcs']);
  $product_img_tmp_file = $_FILES['product_img']['tmp_name'];
  $product_img = $_FILES['product_img']['name'];
  if($product_img ==''){
  $product_img = $productrow['product_img']; }
  $path = "../products/";
  if($product_img == $productrow['product_img']){ 
  $uploadFile ='true'; }
  else{
  $uploadFile = move_uploaded_file($product_img_tmp_file,$path.$product_img);}
  if($uploadFile){
 $pQ = "UPDATE `product` SET `product_name`='$product_name', `product_model`='$product_model', `product_brand`='$product_brand', `product_size`='$product_size', `product_OS`='$product_os',`product_storage`='$product_strg', `product_sdc`='$product_st_dcs', `product_ldc`='$product_lg_dcs', `product_img`='$product_img' WHERE `product_id`='$id'";
  if(mysqli_query($conn,$pQ)){
 //insert product attribute
  if(isset($_POST['tableNumber'])){
  $tablenum = $_POST['tableNumber'];
  for($i=1;$i<=$tablenum;$i++)
 {
  $tableheading = $_POST['tableheading'.$i];
  $last_id = $last_id;
   if($tableheading)
   {
  for($j=1;$j<=7;$j++)
  {
  $title = $_POST['table'.$i.'row'.$j.'col1'];
   $desc = $_POST['table'.$i.'row'.$j.'col2'];
   if($title !='' && $desc !='')
   {
 $insertAttrubute = "INSERT INTO `product_attribute`(`product_id`,`heading`,`title`,`description`,`status`,`date`) VALUES('$last_id','$tableheading','$title','$desc','1','$date')";
   $runq = mysqli_query($conn,$insertAttrubute);
 }
  }
}
 } 
} else{  
//update product attrubite
$qry2 = "SELECT * FROM `product_attribute` WHERE `product_id`='$id'";
$runq = mysqli_query($conn,$qry2);
$rownum = mysqli_num_rows($runq);
     for($i=0;$i<$rownum;$i++)
      {
        $heading = $_POST['heading'.$i]; 
       $last_id = $id;
          $title = $_POST['title'.$i];
         $desc = $_POST['desc'.$i]; 
        if($heading)
        { 
        if($title !='' && $desc !='')
        {
     $insertAttrubute = "UPDATE `product_attribute` SET `product_id`='$id',`heading`='$heading',`title`='$title',`description`='$desc',`status`='1',`date`='$date' WHERE product_id='$id'";
        $runq = mysqli_query($conn,$insertAttrubute);
      }
       }
     } 
    }
//end product attribute
    ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='product.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Product Added Successfully.
              </div>

  <?php } } else{ ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='product.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i>Failed!</h4>
               Product Upload Failed, due to some problem.
              </div>
<?php } } ?>            
            <!-- /.col -->
          </div>

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       </div> <?php } else if($action==''){ ?>          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product</h3>
            </div>
            <a href="product.php?action=add"><button class="btn btn-danger">Add New Product</button></a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Id</th>
                  <th>Product Name</th>
                  <th>Product Model</th>
                  <th>Subcategory</th>                                    
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
<?php
$i=0;
$result = $Base->SelectDataWithColumn("*",$table,$WhereCondition="");
// $fetch_seller = "SELECT * FROM   `product` ORDER BY `product_id` DESC";
foreach($result as $row){
$i++;
?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row['product_name']?></td>
                  <td><?=$row['product_model']?></td>
                  <td><?php 
                    //decoding subcategory from json to PHP
                  $subcat = json_decode($row['product_subcat']);
                  for($u=0;$u<count($subcat);$u++){
                    echo $subcat[0]."<br>";
                  }  
                  ?></td>
                  
                  <td>
                    <a href="product.php?action=view&id=<?=$row['product_id']?>"><button class='btn btn-warning'>View</button></a>
                    <a href="product.php?action=edit&id=<?=$row['product_id']?>"><button class='btn btn-info'>Edit</button></a>
                    <a href="product.php?action=delete&id=<?=$row['product_id']?>"><button class='btn btn-danger'>Delete</button></a>
                  </td>
                </tr>
              <?php } ?>
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
