<?php
include "../includes/config.php";
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
Prebuy Seller
        <small>Seller</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
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
 $getData = mysqli_query($conn,"SELECT * FROM `o_seller` WHERE `o_seller_id`='".$id."'");
 $completeData = mysqli_fetch_assoc($getData);

$getBranchQ = "SELECT * FROM `seller_branch` WHERE `sellerb_rid`='".$completeData['o_seller_rid']."' LIMIT 1";
$getBranch = mysqli_query($conn,$getBranchQ);
$getBranchData = mysqli_fetch_assoc($getBranch);

 $getBranchQ2 = "SELECT * FROM `seller_branch` WHERE `sellerb_rid`='".$completeData['o_seller_rid']."' ORDER BY `seller_branch_id` DESC LIMIT 0,1";
$getBranch2 = mysqli_query($conn,$getBranchQ2);
$getBranchData2 = mysqli_fetch_assoc($getBranch2);

} 
}
if($action=="view"){
 

$brand = json_decode($completeData['o_seller_brand']);
$category = json_decode($completeData['o_seller_category']);

$brand1 = json_decode($getBranchData['sellerb_brand']);
$category1 = json_decode($getBranchData['sellerb_cat']);

$brand2 = json_decode($getBranchData2['sellerb_brand']);
$category2 = json_decode($getBranchData2['sellerb_cat']);
?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Seller ID : <?=$completeData['o_seller_rid']?></h3>
        <?php
if($completeData['o_seller_status']==1){ echo "<span class='pull-right badge bg-green'>Active</span>";}
else { echo "<span class='pull-right badge bg-red'>Inactive</span>";}
        ?>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-6">
              <table class="table table-bordered table-striped table-hover">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th colspan="2">Seller Details</th></tr>
                <tr>
                  <td><b>Seller Name</b></td>
                  <td><?=$completeData['o_seller_name']?></td>
                </tr>
                <tr>
                  <td><b>Store Name</b></td>
                  <td><?=$completeData['o_seller_store']?></td>
                </tr>
                <tr>
                  <td><b>Store Email</b></td>
                  <td><?=$completeData['o_seller_email']?></td>
                </tr>
                <tr>
                  <td><b>Seller Contact</b></td>
                  <td><?=$completeData['o_seller_contact']?></td>
                </tr>
                <tr>
                  <td><b>Alternate Contact</b></td>
                  <td><?=$completeData['o_seller_alt']?></td>
                </tr>
                <tr>
                  <td><b>Seller Address</b></td>
                  <td><?=$completeData['o_seller_add1']." ".$completeData['o_seller_add2']?></td>
                </tr>
                <tr>
                  <td><b>Seller City</b></td>
                  <td><?=$completeData['o_seller_city']?></td>
                </tr>
              </table>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-6">
              <table class="table table-bordered table-striped table-responsive">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th>Brands</th></tr>
                    <?php
                      for($i=0;$i<count($brand);$i++){
                          $res = mysqli_query($conn,"SELECT * FROM `brands` WHERE `brand_id`=$brand[$i]");
                          $kam = mysqli_fetch_assoc($res);
                          echo "<tr><td>".$kam['brand_name']."</td></tr>";
                      }
                    ?>
              </table>  
              </div>
              <div class="col-sm-6">
                <table class="table table-bordered table-striped table-responsive">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th>Categories</th></tr>
                    <?php
                      for($i=0;$i<count($category);$i++){
           $rrt ="SELECT * FROM `category` WHERE `category_id`=$category[$i]";
                          $res = mysqli_query($conn,$rrt);
                          $kam = mysqli_fetch_assoc($res);
                          echo "<tr><td>".$kam['category_name']."</td></tr>";
                      }
                    ?>
              </table>  
              </div>
            </div>
          </div>
          <div class="row">
            <?php
              $sql = "SELECT * FROM `seller_schedule` WHERE `seller_oid`='".$id."' ";
              $run= mysqli_query($conn,$sql);
              $runRe = mysqli_fetch_assoc($run);  
            ?>
            <div class="col-sm-12">
              <table class="table table-bordered table-hover">
                <tr style="background-color:#3c8dbc;color:#ffffff;">
                  <th>Days</th>
                  <th>Opening</th>                  
                  <th>Closing</th>                
                </tr>
                <tr>
                  <td class="bg-yellow">Monday</td>
                  <td><?=$runRe['monO']?></td>
                  <td><?=$runRe['monC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green">Tuesday</td>
                  <td><?=$runRe['tueO']?></td>
                  <td><?=$runRe['tueC']?></td>                                    
                </tr>
                 <tr>
                  <td class="bg-yellow">Wednesday</td>
                  <td><?=$runRe['wedO']?></td>
                  <td><?=$runRe['wedC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green"> Thursday</td>
                  <td><?=$runRe['thuO']?></td>
                  <td><?=$runRe['thuC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-yellow">Friday</td>
                  <td><?=$runRe['friO']?></td>
                  <td><?=$runRe['friC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green">Saturday</td>
                  <td><?=$runRe['satO']?></td>
                  <td><?=$runRe['satC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-yellow">Sunday</td>
                  <td><?=$runRe['sunO']?></td>
                  <td><?=$runRe['sunC']?></td>                                    
                </tr>
              </table>
            </div>
          </div>
        </div>
<!--Other Branch 1 Data -->
<div class="box-header bg-light-blue">
  <h3 class="box-title"> Branch 1</h3>
</div>
<div class="box-body">

          <div class="row">
            <div class="col-sm-6">
              <table class="table table-bordered table-striped table-hover">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th colspan="2">Seller Details</th></tr>
                <tr>
                  <td><b>Seller Name</b></td>
                  <td><?=$getBranchData['sellerb_name']?></td>
                </tr>
                <tr>
                  <td><b>Store Name</b></td>
                  <td><?=$getBranchData['sellerb_store']?></td>
                </tr>
                <tr>
                  <td><b>Store Email</b></td>
                  <td><?=$getBranchData['sellerb_email']?></td>
                </tr>
                <tr>
                  <td><b>Seller Contact</b></td>
                  <td><?=$getBranchData['sellerb_contact']?></td>
                </tr>
                <tr>
                  <td><b>Alternate Contact</b></td>
                  <td><?=$getBranchData['sellerb_alt']?></td>
                </tr>
                <tr>
                  <td><b>Seller Address</b></td>
                  <td><?=$getBranchData['sellerb_add1']." ".$getBranchData['sellerb_add2']?></td>
                </tr>
                <tr>
                  <td><b>Seller City</b></td>
                  <td><?=$getBranchData['sellerb_city']?></td>
                </tr>
              </table>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-6">
              <table class="table table-bordered table-striped table-responsive">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th>Brands</th></tr>
                    <?php
                      for($i=0;$i<count($brand1);$i++){
                          $res = mysqli_query($conn,"SELECT * FROM `brands` WHERE `brand_id`=$brand[$i]");
                          $kam = mysqli_fetch_assoc($res);
                          echo "<tr><td>".$kam['brand_name']."</td></tr>";
                      }
                    ?>
              </table>  
              </div>
              <div class="col-sm-6">
                <table class="table table-bordered table-striped table-responsive">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th>Categories</th></tr>
                    <?php
                      for($i=0;$i<count($category1);$i++){
           $rrt ="SELECT * FROM `category` WHERE `category_id`=$category1[$i]";
                          $res = mysqli_query($conn,$rrt);
                          $kam = mysqli_fetch_assoc($res);
                          echo "<tr><td>".$kam['category_name']."</td></tr>";
                      }
                    ?>
              </table>  
              </div>
            </div>
          </div>
          <div class="row">
            <?php
              $sql = "SELECT * FROM `seller_branch_schedule` WHERE `seller_brid`='".$completeData['o_seller_rid']."' ORDER BY `seller_branch_id`  LIMIT 0,1";
              $run= mysqli_query($conn,$sql);
              $runRe = mysqli_fetch_assoc($run);  
            ?>
            <div class="col-sm-12">
              <table class="table table-bordered table-hover">
                <tr style="background-color:#3c8dbc;color:#ffffff;">
                  <th>Days</th>
                  <th>Opening</th>                  
                  <th>Closing</th>                
                </tr>
                <tr>
                  <td class="bg-yellow">Monday</td>
                  <td><?=$runRe['monO']?></td>
                  <td><?=$runRe['monC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green">Tuesday</td>
                  <td><?=$runRe['tueO']?></td>
                  <td><?=$runRe['tueC']?></td>                                    
                </tr>
                 <tr>
                  <td class="bg-yellow">Wednesday</td>
                  <td><?=$runRe['wedO']?></td>
                  <td><?=$runRe['wedC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green"> Thursday</td>
                  <td><?=$runRe['thuO']?></td>
                  <td><?=$runRe['thuC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-yellow">Friday</td>
                  <td><?=$runRe['friO']?></td>
                  <td><?=$runRe['friC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green">Saturday</td>
                  <td><?=$runRe['satO']?></td>
                  <td><?=$runRe['satC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-yellow">Sunday</td>
                  <td><?=$runRe['sunO']?></td>
                  <td><?=$runRe['sunC']?></td>                                    
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!--Other Branch 1-->
        <!--Other Branch 2 Data -->
<div class="box-header bg-light-blue">
  <h3 class="box-title"> Branch 2</h3>
</div>
<div class="box-body">

          <div class="row">
            <div class="col-sm-6">
              <table class="table table-bordered table-striped table-hover">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th colspan="2">Seller Details</th></tr>
                <tr>
                  <td><b>Seller Name</b></td>
                  <td><?=$getBranchData2['sellerb_name']?></td>
                </tr>
                <tr>
                  <td><b>Store Name</b></td>
                  <td><?=$getBranchData2['sellerb_store']?></td>
                </tr>
                <tr>
                  <td><b>Store Email</b></td>
                  <td><?=$getBranchData2['sellerb_email']?></td>
                </tr>
                <tr>
                  <td><b>Seller Contact</b></td>
                  <td><?=$getBranchData2['sellerb_contact']?></td>
                </tr>
                <tr>
                  <td><b>Alternate Contact</b></td>
                  <td><?=$getBranchData2['sellerb_alt']?></td>
                </tr>
                <tr>
                  <td><b>Seller Address</b></td>
                  <td><?=$getBranchData2['sellerb_add1']." ".$getBranchData2['sellerb_add2']?></td>
                </tr>
                <tr>
                  <td><b>Seller City</b></td>
                  <td><?=$getBranchData2['sellerb_city']?></td>
                </tr>
              </table>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-6">
              <table class="table table-bordered table-striped table-responsive">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th>Brands</th></tr>
                    <?php
                      for($i=0;$i<count($brand2);$i++){
                          $res = mysqli_query($conn,"SELECT * FROM `brands` WHERE `brand_id`=$brand2[$i]");
                          $kam = mysqli_fetch_assoc($res);
                          echo "<tr><td>".$kam['brand_name']."</td></tr>";
                      }
                    ?>
              </table>  
              </div>
              <div class="col-sm-6">
                <table class="table table-bordered table-striped table-responsive">
                <tr style="background-color:#3c8dbc;color:#ffffff;"><th>Categories</th></tr>
                    <?php
                      for($i=0;$i<count($category2);$i++){
           $rrt ="SELECT * FROM `category` WHERE `category_id`=$category2[$i]";
                          $res = mysqli_query($conn,$rrt);
                          $kam = mysqli_fetch_assoc($res);
                          echo "<tr><td>".$kam['category_name']."</td></tr>";
                      }
                    ?>
              </table>  
              </div>
            </div>
          </div>
          <div class="row">
            <?php
              $sql = "SELECT * FROM `seller_branch_schedule` WHERE `seller_brid`='".$completeData['o_seller_rid']."' ORDER BY `seller_branch_id` DESC LIMIT 0,1";
              $run= mysqli_query($conn,$sql);
              $runRe = mysqli_fetch_assoc($run);  
            ?>
            <div class="col-sm-12">
              <table class="table table-bordered table-hover">
                <tr style="background-color:#3c8dbc;color:#ffffff;">
                  <th>Days</th>
                  <th>Opening</th>                  
                  <th>Closing</th>                
                </tr>
                <tr>
                  <td class="bg-yellow">Monday</td>
                  <td><?=$runRe['monO']?></td>
                  <td><?=$runRe['monC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green">Tuesday</td>
                  <td><?=$runRe['tueO']?></td>
                  <td><?=$runRe['tueC']?></td>                                    
                </tr>
                 <tr>
                  <td class="bg-yellow">Wednesday</td>
                  <td><?=$runRe['wedO']?></td>
                  <td><?=$runRe['wedC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green"> Thursday</td>
                  <td><?=$runRe['thuO']?></td>
                  <td><?=$runRe['thuC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-yellow">Friday</td>
                  <td><?=$runRe['friO']?></td>
                  <td><?=$runRe['friC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-green">Saturday</td>
                  <td><?=$runRe['satO']?></td>
                  <td><?=$runRe['satC']?></td>                                    
                </tr>
                <tr>
                  <td class="bg-yellow">Sunday</td>
                  <td><?=$runRe['sunO']?></td>
                  <td><?=$runRe['sunC']?></td>                                    
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!--Other Branch 2-->

</div>        
  <?php
}
else if($action=="deactivate"){

 $DeActivateQuery = "UPDATE `o_seller` SET `o_seller_status`=0 WHERE `o_seller_id`='".$id."' ";
$Deactive =mysqli_query($conn,$DeActivateQuery);
 if($Deactive){
 $name = $completeData['o_seller_name']; 
$to = $completeData['o_seller_email'];
$subject = "Account Deactivated";
$message = "<center><h3>Account Deactivated</h3></center>
<p>
Dear $name <br>
Your Account has been Deactivated Due to some confidential reason. Contact Seller Support for more details.
</p>
<b>Thank you<b><br>
<b>Prebuy Team<b>
<p style='color:red'>Please don not reply to this email, This is system generated mail</p>
<img src='http://prebuy.brijendrasharma.com/images/prebuy_logo.png' style='width:100px;'>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <yash.mehta.1509@gmail.com>' . "\r\n";
$headers .= 'Cc: 143brijendra143@gmail.com,yash.mehta.1509@gmail.com' . "\r\n";

$mkc = mail($to,$subject,$message,$headers);  
    ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='seller.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Seller DeActivated Successfully.
              </div>
    <?php
  } 
} 
else if($action=="activate"){
 $ActivateQuery = "UPDATE `o_seller` SET `o_seller_status`=1 WHERE `o_seller_id`='".$id."' ";
$active = mysqli_query($conn,$ActivateQuery);
 if($active){
$name = $completeData['o_seller_name'];
$to = $completeData['o_seller_email'];
$subject = "Account Activated";
$message = "<center><h3>Account Activated</h3></center>
<p>
Dear $name, <br>
Your Account has been activates on your request. Login into your account with your existing username and password.
</p>
<b>Thank you<b><br>
<b>Prebuy Team<b>
<p style='color:red'>Please don not reply to this email, This is system generated mail</p>
<img src='http://prebuy.brijendrasharma.com/images/prebuy_logo.png' style='width:100px;'>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <yash.mehta.1509@gmail.com>' . "\r\n";
$headers .= 'Cc: 143brijendra143@gmail.com,yash.mehta.1509@gmail.com' . "\r\n";

$mkc = mail($to,$subject,$message,$headers);    
    ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='seller.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Seller Activated Successfully.
              </div>
    <?php
  } 

} 
else if($action=="delete"){
  $deleteQuery = "DELETE FROM `o_seller` WHERE `o_seller_id`='".$id."'";
  $delete = mysqli_query($conn,$deleteQuery);
  if($delete){
    ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='seller.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Deleted!</h4>
               Seller Deleted Successfully.
              </div>

    <?php
  }
  else{?>
      <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='category.php'">&times;</button>
                  <h4><i class="icon fa fa-ban"></i> Deleted!</h4>
                  Category can not be deleted ,it may have some sub-category so please delete its sub-category first.
              </div>
  <?php }
}
else if($action=="edit"){
  $sql = "SELECT * FROM `category` WHERE `category_id` = $id";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res);
?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Category</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Category Name <span style="color:red;">*</span></label>
                  <input type="text" name="category_name" value="<?= $row['category_name']?>" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label>Category Status<span style="color:red;">*</span></label>
                  <select name="category_status" class="form-control" required="true">
                    <option value="1"> Active</option>
                    <option value="0">InActive</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Category Image<span style="color:red;">*</span></label>
                <div class="form-group">
                  <img src="<?=$row['category_img'];?>" style="width:80px;">  
                </div>  
                <input type="file" name="category_img"  class="form-control" accept="image/*" required="true">
              </div>
           
              <!-- /.form-group -->
                            <div class="form-group">
             <input type="submit" class="btn btn-success" name="submit" value="Update Category">
            </div>
          </div>   
                 </form></div></div></div>
            <!-- /.col -->
<?php
if(isset($_POST['submit'])){
  $category_name = mysqli_real_escape_string($conn,$_POST['category_name']);
  $category_status = mysqli_real_escape_string($conn,$_POST['category_status']); 
  $category_tmp_file = $_FILES['category_img']['tmp_name'];
  $category_file = $_FILES['category_img']['name'];
  $path = "../uploads/";

$uploadFile = move_uploaded_file($category_tmp_file,$path.$category_file);
if($uploadFile){

   $updateQuery = "UPDATE `category` SET `category_name`='".$category_name."',`category_img`='http://".$_SERVER['HTTP_HOST'].'/uploads/'.$category_file."',`category_status`='".$category_status."' WHERE `category_id` = $id";
  if(mysqli_query($conn,$updateQuery))
  {?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='category.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Category Updated Successfully.
              </div>

  <?php }

}
else{?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="window.location='category.php'">&times;</button>
                <h4><i class="icon fa fa-check"></i>Failed!</h4>
               Category Updation Failed, due to some problem.
              </div>
<?php }
}

?>            
            <!-- /.col -->
          </div>

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div></div>
<?php 
}
else{
?>          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Prebuy Sellers</h3>
            </div>
<!--            <a href="category.php?action=add"><button class="btn btn-danger">Add New Category</button></a>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Seller Id</th>
                  <th>Seller Name</th>
                  <th>Store Name</th>                  
                  <th>Seller Status</th>                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
<?php
$fetch_seller = "SELECT * FROM  `o_seller` ";
$result = mysqli_query($conn,$fetch_seller);
while($row = mysqli_fetch_assoc($result)){
?>
                <tr>
                  <td><?=$row['o_seller_rid']?></td>
                  <td><?=$row['o_seller_name']?></td>
                  <td><?=$row['o_seller_store']?></td>
                  <td>                    <?php 
                    if($row['o_seller_status']==0)
                      {
                        echo "<img src='Img/status_inactive.png' alt='Inactive' title='Inactive'>";
                      }
                    elseif ($row['o_seller_status']==1) {
                        echo "<img src='Img/status_active.png' alt='active' title='active'>";
                      } 
                    ?></td>
                  <td>
                    <a href="seller.php?action=view&id=<?=$row['o_seller_id']?>"><button class='btn btn-info'>View</button></a>
                    <a href="seller.php?action=delete&id=<?=$row['o_seller_id']?>"><button class='btn btn-danger'>Delete</button></a>
                   <?php if($row['o_seller_status']==0)
                      {?>
                    <a href="seller.php?action=activate&id=<?=$row['o_seller_id']?>"><button class='btn btn-info'>Activate</button></a>
                    <?php  }
                    elseif ($row['o_seller_status']==1) { ?>
                    <a href="seller.php?action=deactivate&id=<?=$row['o_seller_id']?>"><button class='btn btn-warning'>DeActivate</button></a>
                    <?php  } 
                    ?>
                  </td>
                </tr>
<?php
}
?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <?php
}
          ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
