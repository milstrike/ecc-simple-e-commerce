<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/adminAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../view/userDetailInvoice.php";
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
          <li><a href="../syndicate{user-management}/" ><i class="fa fa-user"></i> Manajemen User</a></li>
          <li><a href="../syndicate{site-management}/" ><i class="fa fa-sitemap"></i> Manajemen Situs</a></li> 
          <li><a href="../syndicate{bank-management}/" ><i class="fa fa-dollar"></i> Manajemen Bank</a></li> 
          <li><a href="../syndicate{category-management}/" ><i class="fa fa-tags"></i> Manajemen Kategori</a></li>
          <li><a href="../syndicate{product-management}/" ><i class="fa fa-gift"></i> Manajemen Produk</a></li>
          <li><a href="../syndicate{courier-management}/" ><i class="fa fa-globe"></i> Manajemen Kurir</a></li> 
          <li style="background-color: #a6e1ec;"><a href="../syndicate{order-payment-management}/" ><i class="fa fa-money"></i> Manajemen Order & Payment</a></li>
          <li><a href="../syndicate{shipping-management}/" ><i class="fa fa-truck"></i> Manajemen Shipping</a></li>
          <li><a href="../syndicate{complaint-management}/" ><i class="fa fa-group"></i> Manajemen Aduan</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
      <legend><h3><i class="fa fa-money"></i> HI! Handycraft Manajemen Order & Payment</h3></legend>
      <div class="row">
          <div class="container-fluid">
              <div class="col-md-12" id="printedArea">
                  <legend>Kode Belanja: #<?php echo $_SESSION["invoiceID"];?></legend>
                            <table class="table table-hovered" width="100%">
                                <thead style="color: #222;">
                                    <tr>
                                        <th style="text-align: center;">
                                            Kode Barang
                                        </th>
                                        <th style="text-align: center;">
                                            Nama Barang
                                        </th>
                                        <th style="text-align: center;">
                                            Berat per Item
                                        </th>
                                        <th style="text-align: center;">
                                            Jumlah Pembelian
                                        </th>
                                        <th style="text-align: center;">
                                            Harga per Item
                                        </th>
                                        <th style="text-align: center;">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="color: #222;">
                                    <?php echo $syndicateUserDetailInvoice; ?>
                                </tbody>
                                <thead style="color: #222;">
                                    <tr>
                                        <th colspan="5">
                                            <strong>Total Belanja</strong>
                                        </th>
                                        <th style="text-align: right;">
                                            <?php echo getTotalInvoiceByID($_SESSION["invoiceID"], $database)?>
                                        </th>
                                    </tr>
                                </thead>
                                <thead style="color: #222;">
                                    <tr>
                                        <th colspan="5">
                                            <strong>Kurir: <?php echo getCourierServiceByInvoiceID($_SESSION["invoiceID"], $database)?> (<?php echo getTotalWeightByInvoiceID($_SESSION["invoiceID"], $database)/1000 ?> kg x Rp<?php echo number_format(getCourierServiceCostByInvoiceID($_SESSION["invoiceID"], $database), 2)?>)</strong>
                                        </th>
                                        <th style="text-align: right;">
                                            Rp<?php echo number_format(getShippingCostByInvoiceID($_SESSION["invoiceID"], $database), 2)?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="color: #222;">
                                    <tr>
                                        <th colspan="5">
                                            <strong>Jumlah Akhir yang Harus Dibayar</strong>
                                        </th>
                                        <th style="text-align: right;">
                                            Rp<?php echo number_format(getFinalPaymentByInvoiceID($_SESSION["invoiceID"], $database), 2)?>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                  
                  <br/>
                  <hr/>
                  <legend>Alamat Pengiriman</legend>
                  <span style="color: #222;">Kepada: <strong><?php echo getUserIDByInvoiceID($_SESSION["invoiceID"], $database)?></strong></span><br/>
                  <span style="color: #222;"><?php echo getShippingAddressByInvoiceID($_SESSION["invoiceID"], $database); ?></span><br/>
                  <span style="color: #222;">Telepon: <strong><?php echo getTelephoneByInvoiceID($_SESSION["invoiceID"], $database)?></strong></span><br/>
                  <span style="color: #222;">Email: <strong><?php echo getEmailByInvoiceID($_SESSION["invoiceID"], $database)?></strong></span><br/>
              </div>
              <input type='button' class="btn btn-info btn-sm pull-right" id='btn' value='Cetak Detail Pesanan' onclick='printDiv();'>
          </div>
      </div>
            
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  


  <footer class="text-center footerX" style="color: #222;">&COPY; 2016 <strong>MIL.System.</strong> All rights reserved</footer>

<?php echo $siteFooter; ?>
	</body>
</html>