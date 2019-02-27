<!DOCTYPE html>
<html lang="en">
<head>
<title>Signup - Ready (Reva & Afandy) E-Tiket & Transportasi - We Trust in Quality Services of Transportation</title>
<link rel="shortcut icon" href="img/logo.png"> 
<link href="css/master.css" rel="stylesheet">	
        
</head>
<body>
    <div class="preloader" id="preloader">
        <div class="cssload-container color-primary" style="text-align:center"><br>READY E-Ticketing
            <div class="cssload-whirlpool"></div>
        </div>
    </div>

	<div class="main-navbar main-navbar-1">
		<div class="container">
			<div class="row">
				 
				<div class="logo" id="main-logo">
					<div class="logo-image">
						<img src="img/logo.png" alt="" />
					</div>
					<div class="logo-text">
						READY <span class="color-primary">E-TIKET</span>
					</div>
				</div>
				 
				<!-- === TOP SEARCH === -->
		<div class="main-search-input" id="main-search-input">
					<form>
						<input type="text" id="main-search" name="main-search" placeholder="Ketikan Kata Yang Akan Anda Cari....." />
					</form>
				</div>
				 
				<div class="search-control">
					<a id="show-search" class="show-search latest" href="#">
						<div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-search"></i>
                            </div>
						</div>
					</a>
					<a id="close-search" class="close-search latest" href="#">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								<i class="fa fa-close"></i>
							</div>
						</div>
					</a>
				</div>
				
				<div class="show-menu-control">
					<a id="show-menu" class="show-menu" href="#">
						<div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <div class="my-btn-text">
                                <i class="fa fa-bars"></i>
                            </div>
						</div>
					</a>
				</div>
			
				<div class="collapse navbar-collapse main-menu main-menu-1" id="main-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="index.html">Beranda</a>
						</li>
						<li class="main-menu-separator"></li>
						<li class="dropdown">
							<a data-toggle="dropdown" href="#">Service</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="04_services.html">Jenis Pelayanan</a> 
								</li>
								<li>
									<a href="03_services.php">Jadwal</a>
								</li>
							</ul>
						</li>
						<li class="main-menu-separator"></li>
						
						<li>
							<a href="06_about.html">Tentang Kami</a>
						</li> 
						<li class="main-menu-separator"></li>
					
						<li class="active dropdown">
							<a href="02_login.php">Login</a> 
						</li> 
						<li class="main-menu-separator"></li>
						
						<li class="dropdown">
							<a href="11_blog.html">Berita</a>
						</li> 
						<li class="main-menu-separator"></li>

						<li >
							<a class="latest" href="13_contacts.html">Kontak</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	 
	<!-- ===================================
		PAGE HEADER
	======================================== -->
	<div class="page-header" data-stellar-background-ratio="0.4">
		<div class="page-header-overlay"></div>
		<div class="container">
			<div class="row">
				
				<!-- === PAGE HEADER TITLE === -->
				<div class="page-header-title">
					<h2>SIGNUP</h2>
				</div>
				
				<!-- === PAGE HEADER BREADCRUMB === -->
				<div class="page-header-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="index.html">Beranda</a></li>
						<li class="active">Signup</li>
					</ol>
				</div>
				
				<!-- === PAGE HEADER BUTTON === -->
				<div class="page-header-button">
					<a href="02_login.php">
						<div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								PESAN TIKET ANDA
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- FORM -->
			<div class="container">
                <div class="row main">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h1 class="title">Form Pendaftaran</h1>
                            <hr />
                        </div>
                    </div> 
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group">
                                <label for="nama" class="cols-sm-2 control-label">Nama Lengkap</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        <input class="form-control" id="nama" name="nama" required="required" placeholder="Masukkan Nama Lengkap"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" required="required" placeholder="Masukkan Email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="handphone" class="cols-sm-2 control-label">No. Handphone</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
                                        <input class="form-control" id="nohp" name="nohp" placeholder="Masukkan No. Handphone"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="katasandi" class="cols-sm-2 control-label">Kata sandi</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" id="sandi" name="sandi" required="required" placeholder="Masukkan Katasandi"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="Setuju" required="required">  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
                                </label>
                            </div>
                            </div>
                        <div class="form-group ">
                        
                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>

                        </div>

                        </form>
                    
                    <?php
                        $koneksi = mysqli_connect("localhost","root","","ka") or
                            die("gagal koneksi ke MySQL");
                        if(isset($_POST["submit"])){
                        $nama=$_POST['nama'];
                        $nohp=$_POST['nohp'];
                        $email=$_POST['email'];
                        $sandi=$_POST['sandi'];
						//$sql1="SELECT MAX(user_id) FROM penumpang";
						//$userid=1;
						
                            $sql = "insert into penumpang (nama,telp,email,pass)
                            value
                            ('$nama','$nohp','$email','$sandi')";
                            if($koneksi->query($sql)===TRUE){
                                echo ('<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>TERIMA KASIH!</strong> Anda telah mendaftar! Silakan login dengan akunmu di lewat tombol login di atas.
</div>');
                            }else{
                                echo ('<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Maaf!</strong> Anda gagal daftar, coba lagi lain waktu.
</div>');
                            }
                     $koneksi->close();   
                    }
                    ?>
                    
                </div>
        </div>
        </div>
        </body>
        </html>
		
	<div class="def-section home-subscribe">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-text animated wow fadeInUp" data-wow-duration=".5s" data-wow-offset="100">
					<span class="home-subscribe-icon"><i class="flaticon-email114"></i></span>
					DAPATKAN INFO DAN BERITA READY E-TIKET & TRANSPORTASI
				</div>
				
				<!-- === SUBSCRIBE FORM === -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-form animated wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" data-wow-offset="100">
					<form>
						<div class="home-subscribe-form-input">
							<input type="text" name="subscribe" placeholder="E-MAIL ANDA" />
						</div>
						<div class="home-subscribe-form-button">
							<button><span class="my-btn my-btn-primary">
								<span class="my-btn-bg-top"></span>
								<span class="my-btn-bg-bottom"></span>
								<span class="my-btn-text">
									SUBSCRIBE
								</span>
							</span></button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
     
	
	<!-- ===================================
		FOOTER
	======================================== -->
	<footer class="def-section footer">
		<div class="container">
			<div class="row">
				
				<!-- === FOOTER COLUMN === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-1">
					<div class="logo with-border-bottom">
						<div class="logo-image">
							<img src="img/logo.png" alt="" />
						</div>
						<div class="logo-text">
							READY <span class="color-primary">E-TIKET</span>
						</div>
					</div>
					<div class="footer-1-text">
						<p>READY TRANSPORTASI merupakan sebuah perusahan layanan transportasi terkhusus mya transportasi Per-kereta api-an yang bekerja sama dengan PT. KERETA API INDONESIA (PERSERO) yang menyediakan kemudahan dalam pembelian tiket perjalanan kereta api melalui internet atau e-ticketing.</p>
					</div>
					<div class="footer-1-button">
						<a href="06_about.html"><div class="my-btn my-btn-primary">
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								Lebih Lanjut
							</div>
						</div></a>
					</div>
				</div>
				
				<!-- === FOOTER COLUMN === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-2">
					<h4 class="with-square with-border-bottom">LINKS</h4>
					<div class="footer-2-links">
						<div class="footer-2-links-1">
							<ul>
								<li><a href="index.html">Beranda</a></li>
								<li><a href="05_service_detail.html">Service</a></li>
								<li><a href="06_about.html">Tentang Kami</a></li>
								<li><a href="06_about.html#testi">Testimoni</a></li>
								<li><a href="11_blog.html">Berita</a></li>
							</ul>
						</div>
						<div class="footer-2-links-2">
							<ul>
								<li><a href="13_contacts.html">Kontak</a></li>
								<li><a href="02_login.php">Pesan</a></li>
								<li><a href="">Kebijakan</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- === FOOTER COLUMN === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-3">
					<h4 class="with-square with-border-bottom">ADDRESS</h4>
					<div class="footer-3-phone footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-phone"></i></span>
						Telepone:  +62 838 1183 1383
					</div>
					<div class="footer-3-fax footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-fax"></i></span>
						Fax/phone:  +62 
					</div>
					<div class="footer-3-mail footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-envelope"></i></span>
						E-mail:  sale@readytiket.com
					</div>
					<div class="footer-3-adress footer-3-item">
						<span class="footer-3-icon"><i class="fa fa-map-marker"></i></span>
						Alamat: READY (Reva & Afandy).co inc. Jalan Rawamangun Muka, Rawamangun, Jakarta Timur
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- ===================================
		BOTTOM SECTION
	======================================== -->
	<div class="bottom">
		<div class="container">
			<div class="row">
				
				<!-- === BOTTOM LEFT === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-1">
					COPYRIGHT 2015 | READY E-TIKET & <span class="color-primary">TRANSPORTASI</span>
				</div>
				
				<!-- === BOTTOM CENTER === -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-2">
					<a href="#"><div class="my-btn my-btn-grey">
						<div class="my-btn-bg-top"></div>
						<div class="my-btn-bg-bottom"></div>
						<div class="my-btn-text">
							<i class="fa fa-twitter"></i>
						</div>
					</div></a>
					<a href="#"><div class="my-btn my-btn-grey">
						<div class="my-btn-bg-top"></div>
						<div class="my-btn-bg-bottom"></div>
						<div class="my-btn-text">
							<i class="fa fa-facebook"></i>
						</div>
					</div></a>
					<a href="#"><div class="my-btn my-btn-grey">
						<div class="my-btn-bg-top"></div>
						<div class="my-btn-bg-bottom"></div>
						<div class="my-btn-text">
							<i class="fa fa-google-plus"></i>
						</div>
					</div></a>
					<a href="#"><div class="my-btn my-btn-grey">
						<div class="my-btn-bg-top"></div>
						<div class="my-btn-bg-bottom"></div>
						<div class="my-btn-text">
							<i class="fa fa-instagram"></i>
						</div>
					</div></a>
				</div>
			</div>
		</div>
	</div>

	
	<!-- =========================
	   SLIDE MENU
	============================== -->
	<aside id="slide-menu" class="slide-menu">
		
		<!-- === CLOSE MENU BUTON === -->	
		<div class="close-menu" id="close-menu">
			<i class="fa fa-close"></i>
		</div>
		
		<!-- === SLIDE MENU === -->	
		<ul id="left-menu" class="left-menu">
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 
				<a href="#">Home <i class="fa fa-plus arrow"></i></a>
				
				<!-- === slide menu child === -->	
				<ul class="slide-menu-child">
					<li><a href="index.html">Beranda</a></li>
					<li><a href="02_login.php">LOG IN</a></li>
				</ul>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 
				<a href="#">Service <i class="fa fa-plus arrow"></i></a>
				
				<!-- === slide menu child === -->	
				<ul class="slide-menu-child">
					<li><a href="03_services.php">Jadwal</a></li>
					<li><a href="04_services.html">Jenis Pelayanan</a></li>
				</ul>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			<li> 
				<a href="06_about.html">About us</a>
			</li>
			
			
			<!-- === SLIDE MENU ITEM === -->	
			<li>
				<a href="#">Blog <i class="fa fa-plus arrow"></i></a>
				
				<!-- === slide menu child === -->	
				<ul class="slide-menu-child">
					<li><a href="11_blog.html">Blog items</a></li>
					<li><a href="12_blog_detail.html">Single Post</a></li>
				</ul>
			</li>
			
			<!-- === SLIDE MENU ITEM === -->	
			<li>
				<a href="13_contacts.html">Contacts</a>
			</li>
			
		</ul>
		
	</aside>
	<!-- =========================
	   END SLIDE MENU
	============================== -->
	
	
	<!-- =========================
	   BLACK OVERLAY
	============================== -->
	<div class="black-overlay" id="black-overlay"></div>
	<!-- =========================
	   END BLACK OVERLAY
	============================== -->
     
     
	<!-- =========================
		 SCRIPTS   
	============================== -->	
	
	<!-- JQUERY -->
	<script src="js/jquery-1.11.3.min.js"></script>
	
	<!-- BOOTSTRAP -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- SMOOTH SCROLLING  -->
	<script src="js/smoothscroll.min.js"></script>
	
	<!-- STELLAR.JS FOR PARALLAX -->
	<script src="js/jquery.stellar.min.js"></script>
	
	<!-- SLIDER PRO  -->
	<script src="assets/slider-pro/js/jquery.sliderPro.min.js"></script>
	
	<!-- SCROLLSPY -->
	<script src="js/scrollspy.min.js"></script>
	
	<!-- WOW PLAGIN -->
	<script src="js/wow.min.js"></script>
	
	<!-- CAROUSEL -->
	<script src="assets/owl-carousel/owl.carousel.min.js"></script>
	
	<!-- VERTICAL ACCORDEON MENU -->
	<script src="js/metisMenu.min.js"></script>
	
	<!-- CUSTOM SCRIPT -->
	<script src="js/theme.min.js"></script>
	
</body>
</html>