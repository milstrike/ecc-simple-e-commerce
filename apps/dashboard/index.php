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
                                <li>Dasbor</li>			
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
                                            <li style="background-color: #a6e1ec;"><a href="../dashboard/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-dashboard"></i>&nbsp;Dasbor</a></li>
                                        </ul>
                                    </dd>
                                    <dt>Menu User</dt>
                                    <dd>
                                        <ul class="list-unstyled">
                                            <li><a href="../userProfiles/" class="btn btn-link" style="text-decoration: none;"><i class="fa fa-user"></i>&nbsp;Profil User</a></li>
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
                            <div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="well" style="background-color: #0077b5;">
                                        <h5 style='color: #fff; text-align: left; '><i class="fa fa-envelope"></i> Kotak Surat</h5>
                                        <h1 style="text-align: right;"><?php echo getMailCounterByUserID($_SESSION["userID"], $database);?></h1>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="well" style="background-color: #66512c;">
                                        <h5 style='color: #fff; text-align: left; '><i class="fa fa-barcode"></i> Tagihan dan Pembayaran</h5>
                                        <h1 style="text-align: right;"><?php echo getInvoiceCounterByUserID($_SESSION["userID"], $database);?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="well" style="background-color: #e38d13;">
                                        <h5 style='color: #fff; text-align: left; '><i class="fa fa-truck"></i> Shipping</h5>
                                        <h1 style="text-align: right;"><?php echo getShippingCounterByUserID($_SESSION["userID"], $database);?></h1>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="well" style="background-color: #4cae4c;">
                                        <h5 style='color: #fff; text-align: left; '><i class="fa fa-shopping-cart"></i> Keranjang Belanja</h5>
                                        <h1 style="text-align: right;"><?php echo getShoppingCartCounterByUserID($_SESSION["userID"], $database);?></h1>
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
<?php echo $siteFooter; ?>
  </body>
</html>