<!-- //Monica Dessy Amanda 1301164452 -->
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Data Transaksi ~ Cemal-Cemil</title>

	<!-- Load your Bootstrap CSS Library Here -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/monica/bootstrap/css/bootstrap.min.css">
	
	<!-- Load your CSS Style Here! -->
	<style type="text/css">
		#nav_logo {
			background-color: transparent;
		}
		#nav_list{
			margin-top: 18px;
			display: inline;
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
			color: #f26c4f;
		}
		#nav_button{
			margin-top: 16px;
		}
		#nav_button button{
			background-color: #abe64d;
			color: #ffffff;
			margin-left: 20px;
		}
		#nav_button button:hover{
			background-color: #f26c4f;
			color: #ffffff;
			margin-left: 20px;
		}
		#slide{
			margin-top: 87px;
		}
		#slide_caption{
			color: #000000;
		}
		#menu_kiri{
			margin-top: 10px;
			background-color: #dedfdb;
			text-align: center;
			padding: 30px;
		}
		#menu_kanan{
			margin-top: 10px;
			background-color: #dedfdb;
			text-align: center;
			padding: 30px;
		}
		#kunjungi{
			background-color: #abe64d;
			padding: 50px;
		}
		#footer{
			background-color: #dedfdb;
			text-align: center;
			padding: 20px;
		}
		body{
			background-color: #ffffff;
			font-family: papyrus;
		}
		.zoom {
			display:inline-block;
			position: relative;
		}
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(<?php echo base_url(); ?>assets/monica/jquery/zoom-master/icon.png);
		}
	</style>

	<!-- Load your Bootstrap JS Library Here -->
	<script src="<?php echo base_url(); ?>assets/monica/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- NAVBAR -->
	<nav class="navbar fixed-top bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-2" id="nav_logo">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo_pth.jpg" style="width: 100%;">
				</div>
				<div class="col-6 col-lg-7" id="nav_list">
					<ul>
						<li><a href="<?php echo site_url('datatransaksi') ?>"> Data Transaksi </a></li>
						<li><a href="<?php echo site_url('inputMenuC') ?>"> Data Menu </a></li>
						<li><a href="<?php echo site_url('datadriver') ?>"> Data Driver </a></li>
						<li><a href="<?php echo site_url('dataakun') ?>"> Data Akun </a></li>
					</ul>
				</div>
				<!-- //Karina Aulia Dini 1301164342 -->
				 <div class="col-6 col-lg-3" id="nav_button">
                        <button type="button" onclick="location.href='<?php echo site_url('login/logout');?>'" class="btn btn-sm" id="logout">Log Out</button>
                </div>
			</div>
		</div>
	</nav>
<!-- ISI BARU -->
	<div class="container" id="menu">
		<h1 style="margin-top: 100px; text-align: center;"> DATA - TRANSAKSI </h1>
		<h5 style="text-align: center;"> * berikut adalah laporan data transaksi * </h5>
		<div class="row">
			<div class="col-md-12">
				<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th> No </th>
							<th> Tanggal </th>
							<!-- <th> Nama Pembeli </th> 
							<th> Nama Driver </th> -->
							<th> Lokasi </th>
							<th> Menu </th>
							<th> Jumlah </th>
							<th> Harga </th>
							<th> Total Harga </th>
						</tr>
					</thead>
					<tbody>
				        <?php $no=1; $total=0; foreach($cemalcemil as $view){
				        echo "
				        <tr>
				        <td>$no</td>
				        <td>$view->tanggal</td>
				        <td>$view->lokasi</td>
				        <td>$view->namaFood</td>
				        <td>$view->jumlah</td>
				        <td>$view->harga</td>
				        <td>".$view->jumlah*$view->harga."</td>
				        </tr>";
				        $total = $total+($view->jumlah*$view->harga);
				        $no++;
				        } ?>
				    </tbody>
				    <thead>
				    	<tr>
				            <th colspan="6"><b>Total</b></th>
				            <td><b><?php echo $total ?></b></td>
				           
				        </tr>
				    </thead>
				</table>
			</div>
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
<!-- FOOTER -->
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