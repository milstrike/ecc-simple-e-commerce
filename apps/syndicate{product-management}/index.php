<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/adminAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../controller/regProduk.php";
include "../../view/syndicateProductList.php";
include "../../view/syndicateProdukModalEdit.php";
include "../../view/syndicateProdukModalView.php";
include "../../view/syndicateProdukLockConfirmation.php";
include "../../view/syndicateProdukDeleteConfirmation.php";
include "../../controller/lockProduk.php";
include "../../controller/removeProduk.php";
include "../../controller/updateProduk.php";
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
          <li style="background-color: #a6e1ec;"><a href="../syndicate{product-management}/" ><i class="fa fa-gift"></i> Manajemen Produk</a></li>
          <li><a href="../syndicate{courier-management}/" ><i class="fa fa-globe"></i> Manajemen Kurir</a></li> 
          <li><a href="../syndicate{order-payment-management}/" ><i class="fa fa-money"></i> Manajemen Order & Payment</a></li>
          <li><a href="../syndicate{shipping-management}/" ><i class="fa fa-truck"></i> Manajemen Shipping</a></li>
          <li><a href="../syndicate{complaint-management}/" ><i class="fa fa-group"></i> Manajemen Aduan</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      <!-- column 2 -->	
      <legend><h3><i class="fa fa-gift"></i> HI! Handycraft Manajemen Produk</h3></legend>
      <?php echo $error;?>
            <div class="row">
          <div class="container-fluid">
              <div class="col-md-12">
                <a href="#" data-toggle="modal" data-target="#modalTambahProduk" class="btn btn-info btn-sm pull-right" style="text-decoration: none;"><i class="fa fa-plus-circle"></i> Tambah Produk</a>
                  <table class="table table-condensed" style="color: #222;">
                      <thead>
                          <tr>
                              <th style="text-align: center;">#Kode Produk</th>
                              <th style="text-align: center;">Nama Produk</th>
                              <th style="text-align: center;"><i>Preview</i> Produk</th>
                              <th style="text-align: center;">Stok Tersisa</th>
                              <th style="text-align: center;"></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php echo $syndicateProductList?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  	</div><!--/col-span-9-->
        
              <!-- Modal Tambah Produk -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Produk</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kodeProduk" class="col-sm-4 control-label" style="color: #777;">Kode Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kodeProduk" name="kodeProduk" placeholder="Contoh: KE12345" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="namaProduk" class="col-sm-4 control-label" style="color: #777;">Nama Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Contoh: Ukiran Cantik" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="deskripsiProduk" class="col-sm-4 control-label" style="color: #777;">Deskripsi Produk</label>
                        <div style="color: #222;" class="col-sm-6">
                            <textarea class="form-control" name="deskripsiProduk" id="deskripsiProduk" placeholder="Deskripsikan produk Anda di sini" required></textarea>
                        </div>
                </div>
                <div class="form-group">
                    <label for="beratProduk" class="col-sm-4 control-label" style="color: #777;">Berat Produk (gr)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="beratProduk" name="beratProduk" placeholder="Contoh: 10 gram ditulis 10" required>
                        </div>
                </div>
              <div class="form-group">
                    <label for="kategoriProduk" class="col-sm-4 control-label" style="color: #777;">Kategori Produk</label>
                        <div style="color: #222;" class="col-sm-6">
                            <select name="kategoriProduk" id="kategoriProduk" class="form-control" required >
                                <?php echo getOptionCategoriesForProduk($database);?>
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="hargaProduk" class="col-sm-4 control-label" style="color: #777;">Harga Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Tanpa Rp. Contoh: 150000" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="stokProduk" class="col-sm-4 control-label" style="color: #777;">Stok Awal</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="stokProduk" name="stokProduk" placeholder="Stok Awal Produk. Contoh: 100" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="gambarProduk" class="col-sm-4 control-label" style="color: #777;">Gambar Preview<br/><small><i>Format: JPG/PNG<br> Ukuran maksimal: 2MB</i></small></label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" id="gambarProduk" name="gambarProduk" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="#" class="col-sm-4 control-label" style="color: #777;">&nbsp;</label>
                        <div>
                            <input type="submit" name="submitProduk" name="submitProduk" class="btn btn-info btn-sm pull-right" value="Tambah Produk!" style="margin-right: 40px;">
                        </div>
                </div>
          </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
  </div><!--/row-->
  
<?php 
    echo $syndicateProdukModalEdit;
    echo $syndicateProdukModalView;
    echo $syndicateProdukLockConfirmation;
    echo $syndicateProdukDeleteConfirmation;
?>

  <footer class="text-center footerX" style="color: #222;">&COPY; 2016 <strong>MIL.System.</strong> All rights reserved</footer>

<?php echo $siteFooter; ?>
	</body>
</html>