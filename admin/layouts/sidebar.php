<?php if($role==1){ ?>
  <aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Panel</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <?php $catcount = $Base->CountNumRow('category','1','status'); ?>
        <li class="">
          <a href="category.php">
            <i class="fa fa-dashboard"></i> <span>Category</span>
            <span class="pull-right badge bg-green"><?=$catcount;?></span>
          </a>
        </li>
        <?php $subcatcount = $Base->CountNumRow('subcategory','1','status'); ?>
        <li class="">
          <a href="subcategory.php">
            <i class="fa fa-dashboard"></i> <span>Sub Category</span>
            <span class="pull-right badge bg-green"><?=$subcatcount;?></span>
          </a>
        </li>
        <?php $brandcount = $Base->CountNumRow('brands','1','status'); ?>
        <li class="">
          <a href="brands.php">
            <i class="fa fa-dashboard"></i> <span>Brands</span>
            <span class="pull-right badge bg-green"><?=$brandcount;?></span>
          </a>
        </li>
        <?php $packcount = $Base->CountNumRow('packages','1','status'); ?>
        <li class="">
          <a href="packages.php">
            <i class="fa fa-dashboard"></i> <span>Packages</span>
            <span class="pull-right badge bg-green"><?=$packcount;?></span>
          </a>
        </li>
        <?php $prodcount = $Base->CountNumRow('product','1','status'); ?>
        <li class="">
          <a href="product.php">
            <i class="fa fa-dashboard"></i> <span>Products</span>
                   <span class="pull-right badge bg-green"><?=$prodcount;?></span>
          </a>
        </li>
        <?php $dealcount = $Base->CountNumRow('prebuy_deals','1','status'); ?>
        <li class="">
          <a href="prebuydeals.php">
            <i class="fa fa-dashboard"></i> <span>Prebuy Deals</span>
                   <span class="pull-right badge bg-green"><?=$dealcount;?></span>
          </a>
        </li>
        <?php $sellercount = $Base->CountNumRow('seller_enquiry','1','status'); ?>        
        <li class="">
          <a href="seller-enquiry.php">
            <i class="fa fa-dashboard"></i> <span>Seller Enquiry</span>
            <span class="pull-right badge bg-red"><?=$sellercount;?></span>
          </a>
        </li> 
        <?php $activesellercount = $Base->CountNumRow('o_seller','1','status'); ?>     
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Prebuy Sellers</span>
             <span class="pull-right badge bg-red"><?=$activesellercount;?></span>
          </a>
       <ul class="treeview-menu">
           <li>
            <span class="pull-right badge bg-red"><?//=$couponrow;?></span>
            <a href="coupon.php"><i class="fa fa-circle-o"></i>Prebuy Coupon</a>
          </li>
           <li>
            <span class="pull-right badge bg-red"><?=$sellercount;?></span>
            <a href="seller.php"><i class="fa fa-circle-o"></i>Prebuy Seller</a>
          </li>
          </ul>
        </li>
        <?php $citycount = $Base->CountNumRow('city_details','1','status'); ?>  
        <li class="">
          <a href="city.php">
            <i class="fa fa-dashboard"></i> <span>City Details</span>
           <span class="pull-right badge bg-red"><?=$citycount;?></span>
          </a>
        </li>
        <?php $dealsetupcount = $Base->CountNumRow('o_seller','2','status');
              $slotallotmentcount = $Base->CountNumRow('o_seller','3','status'); ?>         
       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Retails Summary</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
           <li>
            <span class="pull-right badge bg-red"><?=$slotallotmentcount;?></span>
            <a href="slotallotment.php"><i class="fa fa-circle-o"></i>Slot Allotment Pending</a>
          </li>
            <li>
            <span class="pull-right badge bg-red"><?=$dealsetupcount;?></span>
              <a href="dealsetup.php"><i class="fa fa-circle-o"></i>Deal Setup Pending</a></li>
            <li><a href="dealapproval.php"><i class="fa fa-circle-o"></i>Deal Approval Pending</a></li>
            <li><a href="editRequest.php"><i class="fa fa-circle-o"></i>Edit Request from retailers</a></li> 
            <li><a href="expiringDeals.php"><i class="fa fa-circle-o"></i>Expiring in 7 days</a></li>
            <li><a href="expiredDeals.php"><i class="fa fa-circle-o"></i>Expired Deals of retailers</a></li>
          </ul>
        </li>
        <?php $ucount = $Base->CountNumRow('users','1','user_status'); ?> 
        <li class="">
          <a href="user.php">
            <i class="fa fa-dashboard"></i> <span>Users</span>
                   <span class="pull-right badge bg-green"><?=$ucount;?></span>
          </a>
        </li>        
        <li class="">
          <a href="cms.php">
            <i class="fa fa-dashboard"></i> <span>cms</span>
                   <span class="pull-right badge bg-green"></span>
          </a>
        </li>                
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php } ?>