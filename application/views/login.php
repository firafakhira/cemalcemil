<!-- Karina Aulia Dini 1301164342 -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/karin/bootstrap.min.css">
	<style type="text/css">
		#navb {
			background-color:white;
			height: auto;
			width: 100%;
		}

		#nav_logo {
			background-color: white;
		}

		body {
			background-image: url("<?php echo base_url(); ?>assets/karin/bgbgbg.jpg");
			background-size: 380px;
			background-blend-mode: darken;
			font-family: papyrus;
		}
 
		#bod {
			margin: 120px 20px 30px 20px;
			width: 30%;
		}

		@media (max-width: 991px) {
			/* Ini biar dia deteksi ukuran layarnya, kalo ukuran layar dibawah 991px dia bakal pake yang ini */
			#bod {
				margin: 200px 20px 30px 20px !important;
			}
		}

		#signup {
			width: auto;
			padding: 25px;
			border: solid;
			border-width: 2px;
			border-color: #abe64d;
			border-radius: 20px;
			background-color: #abe64d;
		}
		#kunjungi{
			background-color: #abe64d;
			padding: 50px;
		}
		#nav_list{
			margin-top: 18px;
			display: inline;
			background-color: white;
		}
		#nav_list ul li{
			display: inline;
			list-style: none;
			padding: 10px;
			color: black;
		}
		#nav_list ul li a{
			text-decoration: none;
			color: black;
		}
		#nav_list ul li a:hover{
			text-decoration: none;
			color: orange;
		}
		#su{
			padding-bottom: 30px;
		}
		#nav_button{
			background-color: white;
			padding-top: 20px;
			width: 70px;
		}

		#nav_button button{
			background-color: #abe64d;
			border-color: #abe64d;
		}
		#test {
			margin-left: 80px;
		}
		#footer{
			background-color: #dedfdb;
			text-align: center;
			padding: 20px;
		}
		.dropdown-menu {
			padding: 10px;
		}


	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/karin/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar fixed-top bg-black" id="navb">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-2" id="nav_logo">
					<img src="<?php echo base_url(); ?>assets/karin/logo.png" style="width: 100%;">
				</div>
				<div class="col-6 col-lg-7" id="nav_list"> 
					<ul>
						
					</ul>
				</div>
				<div class="col-6 col-lg-3" id="nav_button">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Sign In
					</button>
					<div class="dropdown-menu">
					  <?php
					  		echo form_open('login/cek_login');
					  ?>
					    <div class="form-group">
					      <label for="exampleDropdownFormEmail1">Email address</label>
					      <input type="email" name="email" id="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
					    </div>
					    <div class="form-group">
					      <label for="exampleDropdownFormPassword1">Password</label>
					      <input type="password" name="password" id="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
					    </div>
					    <div class="form-check">
					      <input type="checkbox" class="form-check-input" id="dropdownCheck">
					      <label class="form-check-label" for="dropdownCheck">
					        Remember me
					      </label>
					    </div>
					    <button type="submit" class="btn btn-primary">Sign in</button>
					  <?php echo form_close();?>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">New around here? Sign up</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="container mx-auto" id="bod">
		<div class="row" id="signup">
			<?php 
				echo form_open('login/daftar_akun');
			?>
			  <div class="form-group" id="test">
			  <h2 id="su" align="center">Sign Up</h2></div>
			  <div class="form-group">
			  	<div class="form-group" id="test">
			      <label for="inputNama">Nama Lengkap</label>
			      <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="nama" required>
			  	</div>
			  </div>
			  <div class="form-group" id="test">
			      <label for="inputNomor">Nomor Ponsel</label>
			      <input type="text" class="form-control" id="inputNomor" placeholder="+62" name="nomor" required>
			  </div>
			  <div class="form-group" id="test">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Email@gmail.com" name="email" required>
			  </div>
			  <div class="form-group" id="test">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
			    </div>
			  <button type="submit" id="test" class="btn btn-primary">Sign Up</button>
			<?php echo form_close();?>
		</div>
	</div>

	<!-- KUNJUNGI -->
	<div class="container-fluid" id="kunjungi">
		<center>	
		<h3 style="color: #ffffff; margin-bottom: 30px;"> KUNJUNGI </h3>
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<a href="https://www.facebook.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_facebook.png" id="logo_fb" style="width: 50px;">
				</a>
				<a href="https://www.instagram.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_instagram.png" id="logo_ig" style="width: 50px;">
				</a>
				<a href="https://www.youtube.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_youtube.png" id="logo_yt" style="width: 50px;">
				</a>
				<a href="https://www.twitter.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_twitter.png" id="logo_tw" style="width: 50px;">
				</a>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
	</center>
	</div>
	
	<div class="container-fluid" id="footer">
		<div class="row" id="footer">
			<div class="col-lg-4">
				<h6> Ketentuan Layanan </h6>
				<h6> Kebijakan Privasi</h6>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo.png" style="width: 30%;">
			</div>
			<div class="col-lg-4">
				<h6> @2018 CEMAL-CEMIL INDONESIA </h6>
			</div>
		</div>
	</div>
</body>
</html>