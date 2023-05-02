<?php
include "../includes/config.php";
if(isset($_GET['id'])){
  $seller_rid = $_GET['id'];
  $sellerDetailq = "SELECT * FROM `o_seller` WHERE `o_seller_rid`='".$seller_rid."'";
  $sellerDetail  = mysqli_fetch_assoc(mysqli_query($conn,$sellerDetailq));
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Seller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Custom CSS -->
  <link rel="stylesheet" href="css/mycss.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style type="text/css">
          .popup-form{
  width:600px;
  height:400px;
  z-index:1;
  background-color: #4b646f;
  color:#f7f7f7;
  position: fixed;
  margin-left: 10%;
  border:2px solid black;
  border-radius: 5px;
  box-sizing: content-box;
  opacity: 1.0;
  box-shadow: 15px 20px 25px #fffff;
}
        </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="z-index: 0;">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <?php
include "nav.php";
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Prebuy Seller : <?=$sellerDetail['o_seller_name']?>
        <small><?=$sellerDetail['o_seller_store']?></small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">



          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Branch 1</h3>
            </div>
            <div class="box-body">
<?php

$getSellerQ = "SELECT * FROM `o_seller` WHERE `o_seller_rid`='".$seller_rid."'";
$getSeller = mysqli_query($conn,$getSellerQ);
$sellerData = mysqli_fetch_assoc($getSeller);

$category = mysqli_query($conn,"SELECT * FROM `category`");
$allcat = mysqli_fetch_assoc($category);

?>
  <div class="box box-default">
        <div class="box-header with-border">
        </div>
        <div class="box-body" style="z-index:1;">
              <!--Success Message Start, display:none-->
             
              <!--Success Message End-->
<form class="form-group" method="POST">
<div class="col-sm-12" >
<input type="hidden" name="seller_u_id" value="<?=$seller_rid?>" readonly="">  
</div>
<div class="col-sm-6">
  <label>Seller Name</label>
  <input type="text" name="seller_name" class="form-control" value="">
  <label>Seller Email</label>
  <input type="text" name="seller_email" class="form-control" value="">
  <label>Seller Contact</label>
  <input type="text" name="seller_contact" class="form-control" value="">
  <label>Alternate Number</label>
  <input type="text" name="seller_alt" class="form-control" value="">
  <label>Seller Store</label>
  <input type="text" name="seller_store" class="form-control" value="">
  <label>Categories</label>
<ul type="none">
<?php
 while($row = mysqli_fetch_assoc($category)){
?>
<li>
<input type='checkbox' name='seller_category[]' value='<?=$row['category_id']?>'><?=$row['category_name']?></li>
 <?php
 }

?>
<li class="list-group-item list-group-item-info">Other Category : <?php if(isset($sellerData['other-cat'])) echo $sellerData['other-cat'];?></li>
<li><button class="btn bg-navy btn-flat margin"  onclick="window.open('category.php?action=add','newwindow','width=800,height=500,left=150,top=100'); 
              return false;">Add Quick Category</button></li>
<li><tt style=' text-transform: uppercase;'>Note : If you add a quick category then you need to refresh this page to make that appear.</tt></li>              
</ul>
</div>
<div class="col-sm-6">
  <label>Address Line 1</label>
  <input type="text"  class="form-control" name="seller_address1" placeholder="Enter Address line 1">
    <label>Address Line 2</label>
  <input type="text"  class="form-control" name="seller_address2" placeholder="Enter Address line 2">
  <label>City</label>
  <input type="text"  class="form-control" name="seller_area" placeholder="Area" value="">
  <label>Enter Landmark</label>
  <input class="form-control" name="seller_landmark">
  <label>Enter Pincode</label>
  <input class="form-control" name="seller_pincode" value="">
   <label>Brands</label>
<ul type="none">
            <?php
              $getdata = mysqli_query($conn,"SELECT * FROM `brands`");
              while($newO = mysqli_fetch_assoc($getdata)){
                ?>
    <li><input class="check-box" name="seller_brands[]" multiple="" type="checkbox" value="<?=$newO['brand_id']?>">
      <?=$newO['brand_name']?></li>
                <?php
              }
            ?>
            <li><button class="btn bg-navy btn-flat margin"  onclick="window.open('brands.php?action=add','newwindow','width=800,height=500,left=150,top=100'); 
              return false;">Add Quick Brands</button></li>
          </ul>
</div>
<table class="table table-bordered table-striped table-hover">
  <tr style="background-color:#3c8dbc;color:#ffffff;">
    <th> Days</th>
    <th> Opening Time</th>
    <th> Closing Time</th>
  </tr>
  <tr><td class="bg-yellow">Monday</td>
      <td><input type="text" name="monO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="monC" class="form-control" placeholder="10 PM"></td>
  </tr>
  <tr><td class="bg-green">Tuesday</td>
      <td><input type="text" name="tueO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="tueC" class="form-control" placeholder="10 PM"></td>
  </tr>
  <tr><td class="bg-yellow">Wednesday</td>
      <td><input type="text" name="wedO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="wedC" class="form-control" placeholder="10 PM"></td>
  </tr>
  <tr><td class="bg-green">Thursday</td>
      <td><input type="text" name="thuO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="thuC" class="form-control" placeholder="10 PM"></td>
  </tr>
  <tr><td class="bg-yellow">Friday</td>
      <td><input type="text" name="friO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="friC" class="form-control" placeholder="10 PM"></td>
  </tr>
  <tr><td class="bg-green">Saturday</td>
      <td><input type="text" name="satO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="satC" class="form-control" placeholder="10 PM"></td>
  </tr>
    <tr><td class="bg-yellow">Sunday</td>
      <td><input type="text" name="sunO" class="form-control" placeholder="9 AM"></td>
      <td><input type="text" name="sunC" class="form-control" placeholder="10 PM"></td>
  </tr>
</table>
<button type="submit" name="seller_branch1" class="btn btn-success">Add Branch</button>
</div>
</form>
<?php
if(isset($_POST['seller_branch1'])){

$nseller_rid = $_POST['seller_u_id'];
$nseller_name = $_POST['seller_name'];
$nseller_email = $_POST['seller_email'];
$nseller_contact = $_POST['seller_contact'];
$nseller_alt = $_POST['seller_alt'];
$nseller_store = $_POST['seller_store'];
$nseller_address1 = $_POST['seller_address1'];
$nseller_address2 = $_POST['seller_address2'];
$nseller_area = $_POST['seller_area'];
$nseller_landmark = $_POST['seller_landmark'];
$nseller_pincode = $_POST['seller_pincode'];

if(isset($_POST['monO'])){ $monO = $_POST['monO']; } else { $monO = ""; }
if(isset($_POST['monC'])){ $monC = $_POST['monC']; } else { $monC = ""; }
if(isset($_POST['tueO'])){ $tueO = $_POST['tueO']; } else { $tueO = ""; }
if(isset($_POST['tueC'])){ $tueC = $_POST['tueC']; } else { $tueC = ""; }
if(isset($_POST['wedO'])){ $wedO = $_POST['wedO']; } else { $wedO = ""; }
if(isset($_POST['wedC'])){ $wedC = $_POST['wedC']; } else { $wedC = ""; }
if(isset($_POST['thuO'])){ $thuO = $_POST['thuO']; } else { $thuO = ""; }
if(isset($_POST['thuC'])){ $thuC = $_POST['thuC']; } else { $thuC = ""; }
if(isset($_POST['friO'])){ $friO = $_POST['friO']; } else { $friO = ""; }
if(isset($_POST['friC'])){ $friC = $_POST['friC']; } else { $friC = ""; }
if(isset($_POST['satO'])){ $satO = $_POST['satO']; } else { $satO = ""; }
if(isset($_POST['satC'])){ $satC = $_POST['satC']; } else { $satC = ""; }
if(isset($_POST['sunO'])){ $sunO = $_POST['sunO']; } else { $sunO = ""; }
if(isset($_POST['sunC'])){ $sunC = $_POST['sunC']; } else { $sunC = ""; }



$nseller_category = array();
  for($i=0;$i<count($_POST['seller_category']);$i++){
    $nseller_category[] =  $_POST['seller_category'][$i];
  }
$nseller_category =  json_encode($nseller_category);

$nseller_brand = array();
  for($i=0;$i<count($_POST['seller_brands']);$i++){
    $nseller_brand[] =  $_POST['seller_brands'][$i];
  }
$nseller_brand =  json_encode($nseller_brand);

 
echo $q1= "INSERT INTO `seller_branch`(`sellerb_rid`, `sellerb_name`, `sellerb_email`, `sellerb_contact`, `sellerb_alt`, `sellerb_store`, `sellerb_add1`, `sellerb_add2`, `sellerb_city`, `sellerb_landmark`, `sellerb_pincode`, `sellerb_cat`, `sellerb_brand`, `sellerb_status`) VALUES ('".$nseller_rid."','".$nseller_name."','".$nseller_email."','".$nseller_contact."','".$nseller_alt."','".$nseller_store."','".$nseller_address1."','".$nseller_address2."','".$nseller_area."','".$nseller_landmark."','".$nseller_pincode."','".$nseller_category."','".$nseller_brand."',1)";

echo "<br>";
 $result = mysqli_query($conn,$q1);
 echo $lastID = mysqli_insert_id($conn); 
 echo "<br>";
echo  $q1 = "INSERT INTO `seller_branch_schedule`(`seller_branch_id`, `seller_brid`, `monO`, `monC`, `tueO`, `tueC`, `wedO`, `wedC`, `thuO`, `thuC`, `friO`, `friC`, `satO`, `satC`, `sunO`, `sunC`) VALUES ('".$lastID."','".$nseller_rid."','".$monO."','".$monC."','".$tueO."','".$tueC."','".$wedO."','".$wedC."','".$thuO."','".$tueC."','".$friO."','".$friC."','".$satO."','".$satC."','".$sunO."','".$sunC."')";
mysqli_query($conn,$q1);
// register a new seller and check whthere this is working or not
if($result){
?>

 <div class="col-sm-12 alert alert-success alert-dismissible" id="seller-success" style="z-index: 1;position:absolute;margin-top:-1000px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='seller.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Seller Converted Successfully. TO add More branches <a href="seller-branch.php?id=<?=$nseller_rid?>">Click Here</a>
              </div>

    <?php
}
else{
      ?>
              <div class="col-sm-12 alert alert-danger alert-dismissible" style="z-index: 1;position:absolute;margin-top:-1000px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='seller-enquiry.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
               Seller Conversion Error.
              </div>
    <?php

}


 }
?>
</div>

            </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
