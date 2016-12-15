<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/adminAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
?>

<!DOCTYPE html>
<html lang="en">
  <?php echo $siteHeader; ?>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#">HI! Handycraft Admin Panel</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            
            <li><a href="../signOut"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row">
	<div class="col-sm-3">
      <!-- left -->
      <legend><h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3></legend>
      
      <ul class="nav nav-stacked">
          <li style="background-color: #a6e1ec;"><a href="../syndicate/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="../syndicate{user-management}/" ><i class="fa fa-user"></i> Manajemen User</a></li>
          <li><a href="../syndicate{site-management}/" ><i class="fa fa-sitemap"></i> Manajemen Situs</a></li> 
          <li><a href="../syndicate{bank-management}/" ><i class="fa fa-dollar"></i> Manajemen Bank</a></li> 
          <li><a href="../syndicate{category-management}/" ><i class="fa fa-tags"></i> Manajemen Kategori</a></li>
          <li><a href="../syndicate{product-management}/" ><i class="fa fa-gift"></i> Manajemen Produk</a></li>
          <li><a href="../syndicate{courier-management}/" ><i class="fa fa-globe"></i> Manajemen Kurir</a></li> 
          <li><a href="../syndicate{order-payment-management}/" ><i class="fa fa-money"></i> Manajemen Order & Payment</a></li>
          <li><a href="../syndicate{shipping-management}/" ><i class="fa fa-truck"></i> Manajemen Shipping</a></li>
          <li><a href="../syndicate{complaint-management}/" ><i class="fa fa-group"></i> Manajemen Aduan</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
      <legend><h3><i class="fa fa-dashboard"></i> HI! Handycraft Dashboard</h3></legend>
      
      <div class="row">
          <div class="container">
              <div class="col-md-3">
                  <div class="well" style="background-color: #0077b5;">
                      <strong><i>Order</i> Masuk</strong>
                      <h1 style="text-align: right"><?php echo getOrderCounter($database);?></h1>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="well" style="background-color: #398439;">
                      <strong><i>Payment</i> Aktif</strong>
                      <h1 style="text-align: right"><?php echo getActivePaymentCounter($database);?></h1>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="well" style="background-color: #C84941;">
                      <strong><i>Shipping</i> Aktif</strong>
                      <h1 style="text-align: right"><?php echo getActiveShippingCounter($database);?></h1>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="col-md-3">
                  <div class="well" style="background-color: #c0a16b;">
                      <strong>Produk <i>Out of Stock</i></strong>
                      <h1 style="text-align: right"><?php echo getProductOutOfStockCounter($database);?></h1>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="well" style="background-color: #cc00ff;">
                      <strong>Aduan Masuk</strong>
                      <h1 style="text-align: right"><?php echo getComplaintCounter($database);?></h1>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="well" style="background-color: #222;">
                      <strong>User Terdaftar</strong>
                      <h1 style="text-align: right"><?php echo getUserCounter($database);?></h1>
                  </div>
              </div>
          </div>
      </div>
            
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  


  <footer class="text-center footerX" style="color: #222;">&COPY; 2016 <strong>MIL.System.</strong> All rights reserved</footer>

<?php echo $siteFooter; ?>
	</body>
</html>