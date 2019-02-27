<?php
if(session_status()==PHP_SESSION_NONE||session_id()==''){
    session_start();
}
include('cek.php');
$gemail=$_SESSION['email'];
include('koneksi.php');
 $sql="select nama from penumpang where email='$gemail'";
$hsl=mysqli_query($koneksi,$sql);
        while($data=mysqli_fetch_assoc($hsl)){
            $namae=$data['nama'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pesan - Ready (Reva & Afandy) E-Tiket & Transportasi - We Trust in Quality Services of Transportation</title>
<link rel="shortcut icon" href="img/logo.png"> 
<link rel="stylesheet" href="js/jquery-ui.css" type="text/css"/> 
<link href="css/master.css" rel="stylesheet">	
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>        
<script type="text/javascript" src="js/jquery-ui.js"></script>        
<script type="text/javascript">
    $(function(){
        $("#input").datepicker({
            changeMonth: true,
            changeYear: true,
        });
    });
</script>
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
					<h2>PESAN</h2>
				</div>
				
				<!-- === PAGE HEADER BREADCRUMB === -->
				<div class="page-header-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="index.html">Beranda</a></li>
						<li class="active">Pesan</li>
					</ol>
				</div>
                
			</div>
		</div>
	</div>
	<!-- FORM -->
			<div class="container">
                <div class="row main">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h1 class="title">Pesan Tiket</h1>
                            
                            <h3 class="hello">Selamat Datang <?php echo $namae ?>!</h3>
                        
                        </div>
                <div class="button" style="text-align:center">
					<a href="logout.php">
						
							<div class="my-btn-bg-top"></div>
							<div class="my-btn-bg-bottom"></div>
							<div class="my-btn-text">
								Log Out
							</div>
						
					</a>
                    <div class="alert alert-warning"><b>Perhatian! Setelah mengklik tombol PESAN, segera CETAK atau SIMPAN E-tiket Anda SEBELUM Log Out.</b></div>
				</div>
                        
                    </div> 
                    <div class="main-login main-center">
                        <!--form class="form-horizontal" method="post" action="print.php">-->
                        <form class="form-horizontal" method="post" action="cetak.php">
                            <div class="form-group">
                                <label for="nama" class="cols-sm-2 control-label">Tujuan</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-upload" aria-hidden="true"></i></span>
                                        <select class="form-control" id="ke" name="ke" required>
                                            <option disabled="disabled" style="background:#ee4">A</option>
                                            <option>Andromeda</option>
                                            <option>Angke</option>
                                            <option>Anoakure</option>
                                            <option disabled="disabled" style="background:#ee4">B</option>
                                            <option>Banjar</option>
                                            <option>Barukura</option>
                                            <option>Bekasi</option>
                                            <option>Blimbing</option>
                                            <option>Bogor</option>
                                            <option>Bukittinggi</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">C</option>
                                            <option>Cawang</option>
                                            <option>Ciawi</option>
                                            <option>Cicalengka</option>
                                            <option>Cilejit</option>
                                            <option>Cirebon</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">D</option>
                                            <option>Duri</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">G</option>
                                            <option>Galaksi</option>
                                            <option>Gambir</option>
                                            <option>Goa</option>
                                            <option>Gresik</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">H</option>
                                            <option>Harmonika</option>
                                            <option>Hoshinokotachi</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">I</option>
                                            <option>Iwa</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">J</option>
                                            <option>Jambon</option>
                                            <option>Jatibarang</option>
                                            <option>Jumadan</option>
                                            <option>Jupiterinangian</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">K</option>
                                            <option>Kalideres</option>
                                            <option>Kaliwungu</option>
                                            <option>Karangsari</option>
                                            <option>Karet</option>
                                            <option>Kastanyet</option>
                                            <option>Kebumen</option>
                                            <option>Klender</option>
                                            <option>Konoha</option>
                                            <option>Kotabumi</option>
                                            <option>Kumo</option>
                                            <option>Kusa</option>
                                            <option>Kutoarjo</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">L</option>
                                            <option>Lawang</option>
                                            <option>Lombok</option>
                                            <option>Losari</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">M</option>
                                            <option>Manonjaya</option>
                                            <option>Mrawan</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">O</option>
                                            <option>Oakarin</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">P</option>
                                            <option>Pentagon</option>
                                            <option>Pinosari</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">S</option>
                                            <option>Srimangkubumi</option>
                                            <option>Suna</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">T</option>
                                            <option>Tapanuli</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Berangkat</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-download" aria-hidden="true"></i></span>
                                        <select class="form-control" id="dari" name="dari" required>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">A</option>
                                            <option>Ame</option>
                                            <option>Anatanochikara</option>
                                            <option>Android</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">B</option>
                                            <option>Balapan</option>
                                            <option>Bandung</option>
                                            <option>Batang Baru</option>
                                            <option>Binjai</option>
                                            <option>Bojonggede</option>
                                            <option>Bondowoso</option>
                                            <option>Borneo</option>
                                            <option>Bumiasih</option>
                                            <option>Burinan</option>
                                            <option>Buyaran</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">C</option>
                                            <option>Cakung</option>
                                            <option>Cecurug</option>
                                            <option>Cepu</option>
                                            <option>Cigombong</option>
                                            <option>Cisauk</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">D</option>
                                            <option>Demak</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">F</option>
                                            <option>Furianri</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">G</option>
                                            <option>Gembong</option>
                                            <option>Gubug</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">I</option>
                                            <option>Indro</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">J</option>
                                            <option>Jati</option>
                                            <option>Juanda</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">K</option>
                                            <option>Kalibaru</option>
                                            <option>Kalidangkal</option>
                                            <option>Kapuan</option>
                                            <option>Kedungjati</option>
                                            <option>Kendal</option>
                                            <option>Kiri</option>
                                            <option>Klowongantri</option>
                                            <option>Kotabaru</option>
                                            <option>Kotalama</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">L</option>
                                            <option>Lamongan</option>
                                            <option>Lembak</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">M</option>
                                            <option>Madiun</option>
                                            <option>Manjing</option>
                                            <option>Medan</option>
                                            <option>Medirian</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">N</option>
                                            <option>Nandari</option>
                                            <option>Neptunusilomangan</option>
                                            <option>Nganjuk</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">O</option>
                                            <option>Oto</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">P</option>
                                            <option>Pluto</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">S</option>
                                            <option>Sukabumi</option>
                                            <option disabled="disabled" style="background:#ee4" style="background:#ee4">T</option>
                                            <option>Taki</option>
                                            <option>Tamborin</option>
                                            <option>Tegalan</option>
                                            <option disabled="disabled" style="background:#ee4">W</option>
                                            <option>Weserenai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="katasandi" class="cols-sm-2 control-label">Jumlah Penumpang</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        <select class="form-control" id="jmh" name="jmh" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="handphone" class="cols-sm-2 control-label">Kelas</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span>
                                        <select class="form-control" id="kls" name="kls" required>
                                            <option>Ekonomi AC</option>
                                            <option>Bisnis AC</option>
                                            <option>Eksekutif</option>
                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="katasandi" class="cols-sm-2 control-label">Tanggal Keberangkatan</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
                                         <input required class="form-control" type="date" id="input" size="15" name="tgl"/>
                                            </div>
                                </div>
                            </div>
                             
                            
                        <div class="form-group ">
                            <button type="submit" value="Login" name="cetak" formtarget="_blank" class="btn btn-primary btn-lg btn-block login-button">PESAN</button>
                        </div>
                        </form>
                </div>
        </div>
        </div>
		
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