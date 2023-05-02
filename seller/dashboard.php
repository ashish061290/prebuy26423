<?php include("../config/config.php");
      include('layouts/head.php');
      include('../lib/BaseModal.php');
      include('../modal/AdminModal.php'); 
     ?>
<body class="hold-transition skin-blue sidebar-mini"> 
<div class="wrapper">
  <?php include('layouts/header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include("layouts/sidebar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
    <?php
    $result = $Base->SelectDataWithColumn("*",'packages');
    foreach($result as $packages){ ?>
<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50"><?=$packages['pack_name']?></li>
    <li class="grey">Per Month RS <p class='it'><?=$packages['pack_price']?></p> + GST</li>
    <li><?=$packages['pack_deal']?> Deal Slot</li>
    <li>Validity 1 Month</li>
    <li><?=$packages['pack_speci']?></li>
    <li class="grey"><a href="#" class="button">Buy Now</a></li>
  </ul>
</div>
<?php } ?>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <?php include('layouts/footer.php'); ?>
</body>
</html>
