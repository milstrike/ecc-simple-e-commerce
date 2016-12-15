<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../controller/userAccessLimiter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
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
                                                                                
                                                                                <li style="margin: 5px;"><a href="../signOut/" style="text-decoration: none;"><h4><i class="fa fa-lock"></i>&nbsp;&nbsp;Log Out</h4></a></li>
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
                                <li>Profil User</li>
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
                                            <li style="background-color: #a6e1ec;"><a href="../userProfiles/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-user"></i>&nbsp;Profil User</a></li>
                                            <li><a href="../mailBox/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-envelope"></i>&nbsp;Kotak Surat</a></li>
                                            <li><a href="../shippingAddress/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-map-marker"></i>&nbsp;Alamat Pengiriman</a></li>
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
                            <form class="form-horizontal" role="form">
                                <legend>Kredensial</legend>
                                <div class="form-group">
                                    <label for="regUsername" class="col-sm-2 control-label" style="color: #777;">username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="regUsername" name="regUsername" placeholder="username" value="<?php echo getUsernameByUserID($_SESSION["userID"], $database);?>" required readonly>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regPassword1" class="col-sm-2 control-label" style="color: #777;">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="regPassword1" name="regPassword1" placeholder="Password" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regPassword2" class="col-sm-2 control-label" style="color: #777;">&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="regPassword2" name="regPassword2" placeholder="ketikkan ulang password Anda" required>
                                        </div>
                                </div>
                                <legend>Data Pribadi</legend>
                                <div class="form-group">
                                    <label for="regNama" class="col-sm-2 control-label" style="color: #777;">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="regNama" name="regNama" placeholder="Nama Lengkap" value="<?php echo getNameUserByUserID($_SESSION["userID"], $database);?>" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regTanggalLahir" class="col-sm-2 control-label" style="color: #777;">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="regTanggalLahir" name="regTanggalLahir" placeholder="DD/MM/YYYY Contoh: 03/08/1992" value="<?php echo getDOBUserByUserID($_SESSION["userID"], $database);?>" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regAlamat" class="col-sm-2 control-label" style="color: #777;">Alamat Tempat Tinggal</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="regAlamat" name="regAlamat" placeholder="Alamat Tempat Tinggal" required><?php echo getAddressUserByUserID($_SESSION["userID"], $database);?></textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regPhone" class="col-sm-2 control-label" style="color: #777;">No. Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="regPhone" name="regPhone" placeholder="Contoh: 081234567890" value="<?php echo getPhoneUserByUserID($_SESSION["userID"], $database);?>" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regEmail" class="col-sm-2 control-label" style="color: #777;">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Email" value="<?php echo getEmailUserByUserID($_SESSION["userID"], $database);?>" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
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
<?php echo $siteFooter; ?>
  </body>
</html>