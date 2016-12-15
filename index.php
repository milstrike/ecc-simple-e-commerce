<?php
include "config/debugging.php";
include "config/baseConfig.php";
include "config/baseHeader.php";
include "config/baseFooter.php";
include "config/dbConfig.php";
include "controller/mainFunction.php";
include "controller/authentification.php";
include "view/userAccess.php";
include "view/initNewProduct.php";
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
                                                    <a href="/"><h1><span>HI!</span> Handycraft</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Beranda</a></li>
								<li role="presentation"><a href="apps/tentang">Tentang Kami</a></li>
								<li role="presentation"><a href="apps/store">Produk & Store!</a></li>
								<li role="presentation"><a href="apps/contactUs">Kontak Kami</a></li>
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
         <?php echo $errorLogin; ?>
      </div>
        </ul>
      <div class="modal-footer">
        <ul class="list-unstyled pull-left">
            <li><a href="apps/forgetPass" class="pull-left" style="text-decoration: none;">Lupa Password?</a></li>
            <li><a href="apps/regUser" class="pull-left" style="text-decoration: none;">Buat Akun <strong>Hi! HANDYCRAFT</strong></a></li>
        </ul>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Selamat datang di <span>HI!</span> Handycraft</h2>
                                    <p class="animation animated-item-2">Sebuah store yang menjual berbagai macam handycraft...</p>
                                    <a class="btn-slide animation animated-item-3" href="apps/tentang/">Baca lebih lanjut...</a>
                                </div>
                            </div>

<!--                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-hand-o-up"></i>	
                                                <h2>Full Handmade</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-dollar"></i>	
						<h2>Harga Terjangkau</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-heart"></i>	
						<h2>Pelayanan dari hati</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-check"></i>	
						<h2>Kualitas Terjamin</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>Tentang Kami</h2>
				<img src="images/6.jpg" class="img-responsive"/>
                                <p><?php echo getTentang1($database);?></p>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <h2>Melestarikan Budaya,<br/>Melestarikan Warisan</h2>
                            <p><?php echo getBudaya1($database);?></p>
			</div>
		</div>
	</div>
	
	<div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Produk Terbaru</h2>
			</div>
			<?php echo $syndicateUserDetailNewProduct; ?>
		</div>
	</div>
	
	<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Partner Kami</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->
	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Ingin bertanya lebih lanjut tentang produk kami?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
	
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