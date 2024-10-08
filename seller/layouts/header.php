<?php if($role==""){
        echo("<script>location.href = '".SELLER."';</script>");
      } $user = $Base->SelectData('o_seller','o_seller_rid',$admin_id);  ?>
      <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SATHI</b>TECH</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Seller</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../seller/img/profilepic.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$user['o_seller_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../seller/img/profilepic.png" class="img-circle" alt="User Image">

                <p>
                 <?=$user['o_seller_name']?> - Seller
                  <small>since Nov. 2023</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Deals</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sellers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Users</a>
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
                  <form method="GET" action="">
                    <input type="submit" name="logout" value="Logout" class="btn btn-default btn-flat" />
                  </form> 
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
  <?php if(isset($_GET['logout'])){
         $res = $Base->SessionDestroy(); 
         if($res){
          echo("<script>location.href = '".SELLER."';</script>");
         } 
  } ?>
  