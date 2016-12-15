<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/adminAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../controller/regCourier.php";
include "../../controller/updateCourier.php";
include "../../controller/removeCourier.php";
include "../../view/syndicateAllCourierList.php";
include "../../view/syndicateCourierEdit.php";
include "../../view/syndicateCourierDelete.php";
include "../../view/propinsiOptions.php";
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
          <li style="background-color: #a6e1ec;"><a href="../syndicate{courier-management}/" ><i class="fa fa-globe"></i> Manajemen Kurir</a></li> 
          <li><a href="../syndicate{order-payment-management}/" ><i class="fa fa-money"></i> Manajemen Order & Payment</a></li>
          <li><a href="../syndicate{shipping-management}/" ><i class="fa fa-truck"></i> Manajemen Shipping</a></li>
          <li><a href="../syndicate{complaint-management}/" ><i class="fa fa-group"></i> Manajemen Aduan</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
      <legend><h3><i class="fa fa-globe"></i> HI! Handycraft Manajemen Kurir</h3></legend>
            <div class="row">
          <div class="container-fluid">
              <div class="col-md-12">
                  <a href="#" data-toggle="modal" data-target="#modalTambahKurir" class="btn btn-info btn-sm pull-right" style="text-decoration: none;"><i class="fa fa-plus-circle"></i> Tambah Kurir</a>
                  <table class="table table-hovered" width="100%">
                                <thead style="color: #222;">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;" width="10%">
                                            #
                                        </th>
                                        <th style="text-align: center; vertical-align: middle;" width="20%">
                                            Nama Kurir
                                        </th>
                                        <th style="text-align: center; vertical-align: middle;" width="10%">
                                            Jenis Layanan
                                        </th>
                                        <th style="text-align: center; vertical-align: middle;" width="30%">
                                            Destinasi
                                        </th>
                                        <th style="text-align: center; vertical-align: middle;" width="20%">
                                            Biaya Layanan
                                        </th>
                                        <th width="10%">
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="color: #222;">
                                    <?php echo $syndicateCourierList; ?>
                                </tbody>
                            </table>
              </div>
          </div>
      </div>
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  
  <?php// echo $syndicateComplaintReader;?>

          <!-- Modal Tambah Bank -->
<div class="modal fade" id="modalTambahKurir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Kurir</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="addCourier" name="addCourier" style="padding-bottom: 40px; color: #777;" method="POST">
                                <div class="form-group">
                                <label for="namaKurir" class="col-sm-4 control-label" style="color: #777;">Nama Kurir</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaKurir" name="namaKurir" placeholder="Nama Kurir" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaLayanan" class="col-sm-4 control-label" style="color: #777;">Nama Layanan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaLayanan" name="namaLayanan" placeholder="Nama Layanan" required>
                                        </div>
                                </div>
              <div class="form-group">
                                    <label for="#" class="col-sm-0 control-label" style="color: #777;"></label>
                                        <div class="col-sm-12">
                                            <legend>Setting Destinasi</legend>
                                        </div>
                                </div>
<!--            Propinsi-->
            <div class="form-group">
                <label for="pilihPropinsi" class="col-sm-4 control-label">Propinsi<span class="text-error"><strong>*</strong></span></label>
                <div class="col-sm-8">
                    <select class="form-control" id='pilihPropinsi' name='pilihPropinsi' onChange="getKabupaten(this.value);">
                        <?php echo $propinsiOptions; ?>
                    </select>
                </div>
            </div>

<!--            Kabupaten-->
            <div class="form-group">
                <label  for="pilihKabupaten" class="col-sm-4 control-label">Kabupaten<span class="text-error"><strong>*</strong></span></label>
                <div class="col-sm-8">
                    <select class="form-control" id='pilihKabupaten' name='pilihKabupaten' onChange="getKecamatan(this.value);" ></select>
                </div>
            </div>
                
<!--            Kecamatan-->
            <div class="form-group">
                <label  for="pilihKecamatan" class="col-sm-4 control-label">Kecamatan<span class="text-error"><strong>*</strong></span></label>
                <div class="col-sm-8">
                    <select class="form-control" id='pilihKecamatan' name='pilihKecamatan' onChange="getKelurahan(this.value);" ></select>
                </div>
            </div>
                
<!--            Desa-->
            <div class="form-group">
                <label  for="pilihDesa" class="col-sm-4 control-label">Desa/Kelurahan<span class="text-error"><strong>*</strong></span></label>
                <div class="col-sm-8">
                    <select class="form-control" id='pilihDesa' name='pilihDesa' ></select>
                </div>
            </div>  
                                <div class="form-group">
                                    <label for="biayaLayanan" class="col-sm-4 control-label" style="color: #777;">Biaya Layanan per kg</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="biayaLayanan" name="biayaLayanan" placeholder="Contoh: Rp150.000,00 ditulis 150000" required>
                                        </div>
                                </div>
                <input type="submit" class="btn btn-info pull-right btn-sm" name="submitCourier" id="submitCourier" value="Tambahkan Kurir">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
    echo $syndicateCourierEdit; 
    echo $syndicateCourierDelete;
    ?>

  <footer class="text-center footerX" style="color: #222;">&COPY; 2016 <strong>MIL.System.</strong> All rights reserved</footer>

<?php echo $siteFooter; ?>
	</body>
</html>