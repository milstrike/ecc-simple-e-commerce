<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/adminAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../controller/updateSitus.php";
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
          <li><a href="../syndicate/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li style="background-color: #a6e1ec;"><a href="../syndicate{site-management}/" ><i class="fa fa-sitemap"></i> Manajemen Situs</a></li>
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
      <legend><h3><i class="fa fa-sitemap"></i> HI! Handycraft Manajemen Situs</h3></legend>
      
          <form role="form" action='' method="POST" style="color: #222;">
  <div class="form-group">
    <label for="Tentang1">Tentang 1</label>
    <textarea class="form-control" name="Tentang1" id="Tentang1" style="height: 100px;"><?php echo getTentang1($database)?></textarea>
  </div>
  <div class="form-group">
    <label for="Budaya1">Budaya 1</label>
    <textarea class="form-control" name="Budaya1" id="Budaya1" style="height: 100px;"><?php echo getBudaya1($database)?></textarea>
  </div>
  <div class="form-group">
    <label for="QuoteTentang">Quote Tentang 2</label>
    <textarea class="form-control" name="QuoteTentang" id="QuoteTentang" style="height: 100px;"><?php echo getQuoteTentang2($database)?></textarea>
  </div>
  <div class="form-group">
    <label for="Tentang2">Tentang 2</label>
    <textarea class="form-control" name="Tentang2" id="Tentang2" style="height: 100px;"><?php echo getTentang2($database)?></textarea>
  </div>
  <div class="form-group">
    <label for="Keunggulan">Keunggulan</label>
    <textarea class="form-control" name="Keunggulan" id="Keunggulan" style="height: 100px;"><?php echo getKeunggulan($database)?></textarea>
  </div>
  <button type="submit" class="btn btn-info btn-sm" name="updateSitus" id="updateSitus">Simpan Perubahan</button>
</form>
      
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  


  <footer class="text-center footerX" style="color: #222;">&COPY; 2016 <strong>MIL.System.</strong> All rights reserved</footer>

<?php echo $siteFooter; ?>
	</body>
</html>