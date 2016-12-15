<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/userAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../controller/regAddress.php";
include "../../controller/removeAddress.php";
include "../../controller/upgradeAddress.php";
include "../../view/userAddressList.php";
include "../../view/userDeleteAddress.php";
include "../../view/userUpgradeAddress.php";
include "../../view/propinsiOptions.php";
?>

<!DOCTYPE html>
<html lang="en">
  <?php echo $siteHeader; ?>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="../../"><h1><span>HI!</span> Handycraft</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="../../">Beranda</a></li>
    <li role="presentation"><a href="../tentang/">Tentang Kami</a></li>								
								<li role="presentation"><a href="../store">Produk & Store!</a></li>
								<li role="presentation"><a href="../contactUs">Kontak Kami</a></li>
    <li role="presentation">
            <a href="#" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
<li style="margin: 5px;"><a href="../shoppingCart/" style="text-decoration: none;"><h4><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;<span class="label label-danger"><?php echo getShoppingCartCounterByUserID($_SESSION["userID"], $database);?></span></h4></a></li>
<li style="margin: 5px;"><a href="../mailBox/" style="text-decoration: none;"><h4><i class="fa fa-envelope"></i>&nbsp;&nbsp;<span class="label label-danger"><?php echo getMailCounterByUserID($_SESSION["userID"], $database);?></span></h4></a></li>
<li style="margin: 5px;"><a href="../invoiceAndBilling/" style="text-decoration: none;"><h4><i class="fa fa-barcode"></i>&nbsp;&nbsp;<span class="label label-danger"><?php echo getInvoiceCounterByUserID($_SESSION["userID"], $database);?></span></h4></a></li>
<li style="margin: 5px;"><a href="../shipping/" style="text-decoration: none;"><h4><i class="fa fa-truck"></i>&nbsp;&nbsp;<span class="label label-danger"><?php echo getShippingCounterByUserID($_SESSION["userID"], $database);?></span></h4></a></li>

<li style="margin: 5px;"><a href="../signOut" style="text-decoration: none;"><h4><i class="fa fa-lock"></i>&nbsp;&nbsp;Log Out</h4></a></li>
                </ul>
    </li>
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
      
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="../../">Beranda</a></li>
            <li><a href="../dashboard/">Dasbor</a></li>
            <li>Alamat Pengiriman</li>
			</div>		
		</div>	
	</div>
	
	<div class="dashboard">
		<div class="container">
			<h3>Dasbor: <?php echo getNameUserByUserID($_SESSION["userID"], $database);?></h3>
			<hr>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="well">
            <dl style="color: #222;">
                <dt>Menu Dasbor</dt>
                <dd>
<ul class="list-unstyled">
    <li><a href="../dashboard/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-dashboard"></i>&nbsp;Dasbor</a></li>
</ul>
                </dd>
                <dt>Menu User</dt>
                <dd>
<ul class="list-unstyled">
    <li><a href="../userProfiles/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-user"></i>&nbsp;Profil User</a></li>
    <li><a href="../mailBox/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-envelope"></i>&nbsp;Kotak Surat</a></li>
    <li style="background-color: #a6e1ec;"><a href="../shippingAddress/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-map-marker"></i>&nbsp;Alamat Pengiriman</a></li>
    <li><a href="../invoiceAndBilling/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-barcode"></i>&nbsp;Tagihan dan Pembayaran</a></li>
</ul>
                </dd>
            </dl>
            <dl style="color: #222;">
                <dt>Menu Belanja</dt>
                <dd>
<ul class="list-unstyled">
    <li><a href="../shoppingCart/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-shopping-cart"></i>&nbsp;Keranjang Belanja</a></li>
    <li><a href="../shipping/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-truck"></i>&nbsp;<i>Shipping</i></a></li>
    <li><a href="../complaint/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-group"></i>&nbsp;Layanan Aduan</a></li>
</ul>
                </dd>
            </dl>
        </div>
			</div>
    <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <legend>Alamat Aktif</legend>
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="well" style="color: #222;">
<strong><?php echo getActiveAddressByUserID($_SESSION["userID"], $database);?></strong>
                </div>
            </div>
        </div>
        <legend>Alamat yang tersedia</legend>
        <?php echo $syndicateUserListAddress; ?>
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="well" style="color: #222; text-align: center;">
<a href="#" data-toggle="modal" data-target="#modalTambahAlamat" style="text-decoration: none;"><strong><h1><i class="fa fa-plus-circle"></i></h1></strong>Tambah Alamat Pengiriman</a>
                </div>
            </div>
        </div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; 2016 by <a target="_blank" href="#" title="Software Developer Startup">MIL.System</a>. All Rights Reserved.
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
      
      <!-- Modal Tambah Alamat -->
<div class="modal fade" id="modalTambahAlamat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Alamat Pengiriman</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="addAddress" name="addAddress" style="padding-bottom: 40px; color: #222;" action="" method="POST">
            <div class="form-group">
            <label for="inputAddress" class="col-sm-4 control-label">Jalan, No.Rumah, RT/RW, Kampung</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="inputAddress" id="inputAddress" rows="5" placeholder="Masukkan nama Jalan, No.Rumah, RT/RW, Kampung secara detail" required></textarea>
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
                <label  for="" class="col-sm-4 control-label"></label>
                <div class="col-sm-8">
                    <input type="submit" class="btn btn-info btn-sm form-control pull-right" name="submitAddress" id="submitAddress" value="Tambahkan Alamat">
                </div>
            </div>
            <div class="form-group">
                <label  for="" class="col-sm-0 control-label"></label>
                <div class="col-sm-12">
                    <span class="text-error"><small><i>Semua kolom harus diisi guna ketepatan pengiriman barang.</i></small></span>
                </div>
            </div>
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php 

    echo $syndicateAddressDeleteConfirmation;
    echo $syndicateAddressUpgradeConfirmation;
    
    ?>
<?php echo $siteFooter; ?>
  </body>
</html>