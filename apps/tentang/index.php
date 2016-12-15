<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../config/dbConfig.php";
include "../../controller/mainFunction.php";
include "../../controller/authentification.php";
include "../../view/userAccess.php";
include "../../view/initNewProduct.php";
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
                                                                <li role="presentation"><a href="../tentang/" class="active">Tentang Kami</a></li>								
								<li role="presentation"><a href="../store">Produk & Store!</a></li>
								<li role="presentation"><a href="../contactUs">Kontak Kami</a></li>
                                                                <?php echo $userAccess; ?>
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
      
      <!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Masuk ke <strong>Hi! HANDYCRAFT</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" action="" id="login" name="login" style="padding-bottom: 40px;" action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
                <input type="submit" class="btn btn-primary pull-right btn-sm" name="submitLogin" id="submitLogin" value="Login">
            </form>
      </div>
      <div class="modal-footer">
        <ul class="list-unstyled pull-left">
            <li><a href="../forgetPass" class="pull-left" style="text-decoration: none;">Lupa Password?</a></li>
            <li><a href="../regUser" class="pull-left" style="text-decoration: none;">Buat Akun <strong>Hi! HANDYCRAFT</strong></a></li>
        </ul>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="../../">Beranda</a></li>
				<li>Tentang Kami</li>			
			</div>		
		</div>	
	</div>
	
	<div class="aboutus">
		<div class="container">
			<h3>Informasi usaha kami</h3>
			<hr>
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="../../images/7.jpg" class="img-responsive">
                                <h4><?php echo getQuoteTentang2($database);?></h4>
                                <p><?php echo getTentang2($database);?></p>
			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="skill">
					<h2>Keunggulan Kami</h2>
                                        <p><?php echo getKeunggulan($database);?></p>

					
				</div>				
			</div>
		</div>
	</div>
	
	<div class="our-team">
		<div class="container">
			<h3>Produk Terbaru Kami</h3>	
			<div class="text-center">
				<?php echo $syndicateUserDetailNewProduct; ?>
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