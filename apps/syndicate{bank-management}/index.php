<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/adminAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../controller/regBank.php";
include "../../controller/updateBank.php";
include "../../controller/removeBank.php";
include "../../view/syndicateAllBankList.php";
include "../../view/syndicateBankerEdit.php";
include "../../view/syndicateBankerDelete.php";
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
          <li style="background-color: #a6e1ec;"><a href="../syndicate{bank-management}/" ><i class="fa fa-dollar"></i> Manajemen Bank</a></li> 
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
      <legend><h3><i class="fa fa-dollar"></i> HI! Handycraft Manajemen Rekening Bank</h3></legend>
            <div class="row">
          <div class="container-fluid">
              <div class="col-md-12">
                  <a href="#" data-toggle="modal" data-target="#modalTambahBank" class="btn btn-info btn-sm pull-right" style="text-decoration: none;"><i class="fa fa-plus-circle"></i> Tambah Rekening Bank</a>
                  <table class="table table-hovered">
                                <thead style="color: #222;">
                                    <tr>
                                        <th style="text-align: center;">
                                            #
                                        </th>
                                        <th style="text-align: center;">
                                            Nama Bank
                                        </th>
                                        <th style="text-align: center;">
                                            No. Rekening
                                        </th>
                                        <th style="text-align: center;">
                                            Nama Pemilik Akun
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="color: #222;">
                                    <?php echo $syndicateBankList; ?>
                                </tbody>
                            </table>
              </div>
          </div>
      </div>
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  
  <?php// echo $syndicateComplaintReader;?>

          <!-- Modal Tambah Bank -->
<div class="modal fade" id="modalTambahBank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Bank</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="addBankAccount" name="addBankAccount" style="padding-bottom: 40px;" method="POST">
            <div class="form-group">
                                    <label for="namaBank" class="col-sm-4 control-label" style="color: #777;">Nama Bank</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaBank" name="namaBank" placeholder="Nama Bank" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomorRekening" class="col-sm-4 control-label" style="color: #777;">No. Rekening</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nomorRekening" name="nomorRekening" placeholder="Nomor Rekening" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="pemilikRekening" class="col-sm-4 control-label" style="color: #777;">Nama Pemilik Rekening</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="pemilikRekening" name="pemilikRekening" placeholder="Nama Pemilik Rekening" required>
                                        </div>
                                </div>
                <input type="submit" class="btn btn-info pull-right btn-sm" name="submitBankAccount" id="submitBankAccount" value="Tambahkan Rekening">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
    echo $syndicateBankerEdit; 
    echo $syndicateBankerDelete;
    ?>

  <footer class="text-center footerX" style="color: #222;">&COPY; 2016 <strong>MIL.System.</strong> All rights reserved</footer>

<?php echo $siteFooter; ?>
	</body>
</html>