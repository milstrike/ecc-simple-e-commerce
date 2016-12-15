<?php
include "../../config/debugging.php";
include "../../config/baseConfig.php";
include "../../config/baseHeader.php";
include "../../config/baseFooter.php";
include "../../config/dbConfig.php";
include "../../controller/regUser.php";
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
                                                                <li role="presentation"><a href="#" data-toggle="modal" data-target="#modalLogin" class="active">User Login</a></li>
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
                                <li>Buat Akun <strong>HI! HANDYCRAFT</strong></li>			
			</div>		
		</div>	
	</div>
	
	<div class="aboutus">
		<div class="container">
                        <?php echo $error; ?>
			<h3>Buat Akun</h3>
			<hr>
			<div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <form class="form-horizontal" role="form" method="POST" action="">
                                <div class="form-group">
                                    <label for="regUsername" class="col-sm-2 control-label" style="color: #777;">username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="regUsername" name="regUsername" placeholder="username" required>
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
                                <div class="form-group">
                                    <label for="regNama" class="col-sm-2 control-label" style="color: #777;">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="regNama" name="regNama" placeholder="Nama Lengkap" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regTanggalLahir" class="col-sm-2 control-label" style="color: #777;">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="regTanggalLahir" name="regTanggalLahir" placeholder="DD/MM/YYYY Contoh: 03/08/1992" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regAlamat" class="col-sm-2 control-label" style="color: #777;">Alamat Tempat Tinggal</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="regAlamat" name="regAlamat" placeholder="Alamat Tempat Tinggal" required></textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regPhone" class="col-sm-2 control-label" style="color: #777;">No. Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="regPhone" name="regPhone" placeholder="Contoh: 081234567890" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="regEmail" class="col-sm-2 control-label" style="color: #777;">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Email" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label style="color: #777;">
                                                <input type="checkbox" required> Saya menyatakan data yang diisikan adalah benar.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="createUser" id="createUser">Buat Akun</button>
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